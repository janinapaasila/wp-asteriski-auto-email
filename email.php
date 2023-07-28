<!--This is a email template for making pretty emails straight from WP. Made by Roosa Virta-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Asteriski ry's mailing list</title>
	<style>
		body {
			background-color: #efeded;
			font-size: 16px;
			font-weight: 400;
			line-height: 1.7;
			font-family: 'Helvetica', sans-serif;
		}
		
		@media (max-width: 700px) {
			body {
				font-size: 14px;
			}
		}
		
		table[role=presentation] {
			background-color: #fff;
			width: 100%;
			max-width: 800px;
			margin: 0 auto;
			border-collapse: collapse;
		}
		
		.content {
			padding: 15px;
		}
		
		.banner {
			width: 100%;
		}
		
		.cropped {
			max-height: 800px;
			overflow: hidden;
		}
		
		.small-text {
			font-size: 0.8em;
			color: #828181;
			line-height: 200%;
			text-decoration: none;
			font-family: 'Tahoma', sans-serif;
			font-weight: bold;
			margin: 1em 0;
			display: block;
		}
		
		em {
			color: #828181;
		}
		
		.bolder-text {
			font-weight: bold;
		}
		
		.wp-block-separator, hr {
			margin-top: 1rem;
			margin-bottom: 1rem;
			border:none;
			border-top: 3px solid rgb(67, 145, 85);
			width: 40%;
		}
		
		h1 {
			color: #439155;
			font-size: 1.6em;
			font-family: "Tahoma", sans-serif;
			margin-bottom: 0;
			padding: 0 15px;
		}
		
		.content p:first-of-type {
			margin-top: 0;
		}
		
		.wp-block-image > img {
			max-width: 80%;
		}
		
		.wp-block-image {
			text-align: center;
		}
		
		.logo {
			width: 50px;
			margin: 0 auto;
			height: 50px;
			display: block;
		}
		
		a {
			color: #5DA06D !important;
			font-weight: bold;
			transition: all .4s ease-in-out;
			text-decoration: none;
		}
		
		a:hover {
			color: #28823D !important;
		}
		
		.img-a {
			width: 40px;
			height: 40px;
			display: inline-block;
			transition: all .6s ease;
			border-radius: 100%;
			margin: 0.7em 0.1em;
			filter: invert(86%) sepia(46%) saturate(1814%) hue-rotate(345deg) brightness(102%) contrast(98%);
		}
		
		.img-a:hover {
			filter: invert(71%) sepia(25%) saturate(5296%) hue-rotate(3deg) brightness(107%) contrast(103%);
		}
		
		.img-a img {
			line-height: 100%;
			padding: 4px;
			filter: brightness(0);
		}
	</style>
</head>
<body>
<table role="presentation">
	<thead>
	<tr>
		<td colspan="2" class="td-content">
			<div class="cropped">
				<img class="banner" src="<?= $banner ?>" border="0" alt="Banneri" align="center" width="800px"/>
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="2" class="td-content">
			<h1>
				<?= $title ?>
			</h1>
		</td>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td colspan="2" class="td-content">
			<div class="content">
				<?= $content ?>
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="2" class="td-content">
			<hr>
		</td>
	</tr>
	</tbody>
	<!--        FOOTER          -->
	<tfoot>
	<tr>
		<td colspan="1" class="">
			<img class="logo"
				 src="https://www.asteriski.fi/wp-content/uploads/2023/07/asteriski-50x50-1.png" alt="logo">
		</td>
		<td colspan="1">
            <span class="small-text">
                Want to read the news from website?<a href="<?= $article_url ?>"> Click here!</a><br>
                Questions or feedback?<a href="mailto:asteriski@asteriski.fi"> Email us!</a><br>
                Want to manage your subscription?<a href="https://lists.utu.fi/mailman/listinfo/riski-info"> You can do it here.</a><br>
            </span>
		</td>
	</tr>
	<tr style="background: #439155">
		<td colspan="2" align="center">
			<a class="img-a" href="https://www.facebook.com/asteriski/"><img width="32px" src="https://www.asteriski.fi/wp-content/uploads/2022/07/facebook-brands.png"
																			 alt="Facebook"></a>
			<a class="img-a" href="https://www.instagram.com/asteriski_ry"><img width="32px"
																				src="https://www.asteriski.fi/wp-content/uploads/2022/07/instagram-brands.png" alt="Instagram"></a>
			<a class="img-a" href="https://discord.gg/NkGcYsrwzh"><img width="32px" src="https://www.asteriski.fi/wp-content/uploads/2022/07/discord-brands.png"
																	   alt="Discord"></a>
			<a class="img-a" href="https://github.com/asteriskiry"><img width="32px" src="https://www.asteriski.fi/wp-content/uploads/2022/07/github-brands.png"
																		alt="Github"></a>
		</td>
	</tr>
	</tfoot>
</table>
</body>
</html>