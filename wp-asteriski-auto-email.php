<?php

/**
 * Plugin Name: WP Asteriski auto email
 * Plugin URI: http://www.asteriski.fi
 * Description: Artikkelien lähetys riski-infoon.
 * Version: 1.1
 * Author: Marko Loponen, Asteriski ry
 * Author URI: https://github.com/asteriskiry
 * License: MIT
 */
defined('ABSPATH') or die('No script kiddies please!');

/** ADMIN */
add_action('admin_menu', function () {
	add_menu_page('Sähköpostiasetukset', 'Sähköposti', 'manage_options', 'asteriski-auto-email', 'asteriski_plugin_page', 'dashicons-email',10);
});

add_action('admin_init', function () {
	/** @link asteriski_validate_email() */
	register_setting('asteriski-auto-email-settings', 'send_to', 'asteriski_validate_email');
	register_setting('asteriski-auto-email-settings', 'send_from_email', 'asteriski_validate_email');
	/** @link asteriski_validate_text() */
	register_setting('asteriski-auto-email-settings', 'send_from_name', 'asteriski_validate_text');
	register_setting('asteriski-auto-email-settings', 'mail_prefix', 'asteriski_validate_text');
});
function asteriski_validate_text($input)
{
	return $input;
}

function asteriski_validate_email($input)
{
	if (!filter_var($input, FILTER_VALIDATE_EMAIL)) {
		return "";
	} else {
		return $input;
	}
}

function asteriski_plugin_page()
{
	?>
	<div style="text-align: left;">
		<h1>Sähköpostiasetukset</h1>
		<form action="options.php" method="post">
			
			<?php
			settings_fields('asteriski-auto-email-settings');
			do_settings_sections('asteriski-auto-email-settings'); ?>
			<table>
				<tr>
					<th valign="top">Vastaanottajan sähköpostiosoite</th>
					<td><input type="email" placeholder="" name="send_to" value="<?php echo esc_attr(get_option('send_to')); ?>" size="33"/></td>
				</tr>
				
				<tr>
					<th valign="top">Lähettäjän sähköpostiosoite</th>
					<td><input type="email" placeholder="" name="send_from_email" value="<?php echo esc_attr(get_option('send_from_email')); ?>" size="33"/></td>
				</tr>
				
				<tr>
					<th valign="top">Lähettäjän nimi</th>
					<td><input type="text" placeholder="" name="send_from_name" value="<?php echo esc_attr(get_option('send_from_name')); ?>" size="33"/></td>
				</tr>
				
				<tr>
					<th valign="top">Otsikon etuliite</th>
					<td><input type="text" placeholder="" name="mail_prefix" value="<?php echo esc_attr(get_option('mail_prefix')); ?>" size="33"/></td>
				</tr>
				<tr>
				
				<tr>
					<td><?php submit_button(); ?></td>
				</tr>
			
			
			</table>
		
		</form>
	</div>
	<?php
}

/** POST */

// Artikkelin editointisivun boxi
function EmailMetaBox()
{
	add_meta_box(
		'wp-auto-email-metabox',
		'Riski-info',
		'EmailMetaBoxHtml',
		'post',
		'side',
		'high'
	);
}

add_action('add_meta_boxes', 'EmailMetaBox');
add_action('publish_post', 'save_send_now');

function EmailMetaBoxHtml($post)
{
	$post_id = $post->ID;
	wp_nonce_field('asteriski_plugin_nonce_' . $post_id, 'asteriski_plugin_nonce');
	if (current_user_can('author') || current_user_can('administrator') || current_user_can('editor')) {
		?>
		<div class="misc-pub-section misc-pub-section-last">
			<label><input type="checkbox" value="1" name="_send_now"/>Lähetä samalla riski-infoon</label>
		</div>
		<?php
	}
}

function save_send_now($post_id)
{
	// Autosave, do nothing
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return;
	}
	// AJAX? Not used here
	if (defined('DOING_AJAX') && DOING_AJAX) {
		return;
	}
	// Check user permissions
	if (!current_user_can('edit_post', $post_id)) {
		return;
	}
	// Return if it's a post revision
	if (false !== wp_is_post_revision($post_id)) {
		return;
	}
	
	if (
		!isset($_POST['asteriski_plugin_nonce']) ||
		!wp_verify_nonce($_POST['asteriski_plugin_nonce'], 'asteriski_plugin_nonce_' . $post_id)
	) {
		return;
	}
	
	if (isset($_POST['_send_now'])) {
		send_email($post_id);
	}
	
	remove_action('publish_post', 'save_send_now');
}

function get_article_categories($post_id, $only_one = true){
	$cats = get_the_category($post_id);
	if (!empty ($cats)) {
		$emailcats = $cats[0]->name;
		if (!$only_one) {
			foreach ($cats as $i => $cat) {
				if ($i === 0) {
					continue;
				}
				$emailcats .= ' ' . $cats[0]->name;
			}
		}
	} else {
		$emailcats = 'Uutinen';
	}
	return $emailcats;
}

/**
 * This is for creating the html around the email
 * Made by Roosa Virta
 *
 * @param $post
 * @param $post_id
 *
 * @return false|string if everything goes as planned, this is the html
 */
function get_post_html($post, $post_id)
{
	$banner = get_the_post_thumbnail_url($post_id) ?: "https://www.asteriski.fi/wp-content/uploads/2023/11/asteriski_default_image.jpg";
	$title = $post->post_title;
	$content = $post->post_content;
	$category = get_article_categories($post_id, false);
	$article_url = get_permalink($post_id) ?: "https://www.asteriski.fi";
	ob_start();
	require "email.php";
	$post_html = ob_get_clean();
	
	return $post_html;
}


/** SEND EMAIL */
function send_email($post_id)
{
	$post = get_post($post_id);
	$to = get_option('send_to');
	$from_email = get_option('send_from_email');
	$from_name = get_option('send_from_name');
	$emailcats = get_article_categories($post_id);
	$subject = get_option('mail_prefix')  . " " . $post->post_title . ' | ' . strtoupper($emailcats);
	$body = get_post_html($post, $post_id);
	$headers = array('Content-Type: text/html; charset=UTF-8', 'From: ' . $from_name . ' <' . $from_email . '>');
	return wp_mail($to, $subject, $body, $headers);
}
