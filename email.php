<!--This is a email template for making pretty emails straight from WP. Made by Roosa Virta-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Asteriskin maili</title>
    <style>
        body {
            background-color: #f8f8f8;
        }

        .container-table {
            width: 100%;
            background-color: #ebebeb;
        }

        table[role=presentation] {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            background-color: #ffffff;
            border-collapse
        }

        .td-content {
            background-color: #ffffff;
            border-top: 0px solid #333333;
            border-bottom: 10px solid #FFFFFF;
        }

        .content {
            padding: 10px 20px;
        }


        .banner {
            width: 100%;
        }

        .cropped {
            max-height: 300px;
            overflow: hidden;
            border-bottom: 3px solid #289041;
        }


        .small-text {
            font-size: 11px;
            color: #575757;
            line-height: 200%;
            font-family: 'Open Sans', sans-serif;
            text-decoration: none;
        }

        .bolder-text {
            font-weight: bold;
        }

        .wp-block-separator {
            margin-top: 1rem;
            margin-bottom: 1rem;
            border-top: 3px solid rgb(82 187 90);
            width: 40%;
        }

        body {
            font-size: 14px;
            font-weight: 400;
            line-height: 1.7;
            font-family: 'Open Sans', sans-serif;
        }

        h1 {
            margin-bottom: 0;
            font-size: 22px;
            font-weight: bold;
            font-family: "Helvetica", sans-serif;
            text-align: center;
        }

        .wp-block-image > img {
            max-width: 80%;
        }

        .wp-block-image {
            text-align: center;
        }

        .logo {
            width: 50px;
        }

        a {
            color: #35b233 !important;
            font-weight: bold;
        }

        .img-a{
            width: 40px;
            height: 40px;
            display: inline-block;
            transition: all .5s ease-in-out;
        }

        .img-a:hover{
            filter: brightness(0.5);
        }
    </style>
</head>
<body>
<table role="presentation">
    <tr>
        <td align="center" valign="top"></td>
        <td align="center" valign="top"></td>
    </tr>

    <tr>
        <td colspan="2" class="td-content" align="left" valign="middle">
            <div class="cropped">
                <img class="banner" src="<?= $banner ?>" border="0" alt="Banneri" align="center"/>
            </div>
        </td>
    </tr>

    <tr>
        <td colspan="2" class="td-content" align="center" valign="middle">
            <h1>
                <?= $title ?>
            </h1>
        </td>
    </tr>
    <tr>
        <td colspan="2" class="td-content" align="center" valign="middle">
            <div class="content">
                <?= $content ?>
            </div>
        </td>
    </tr>
    <!--        FOOTER          -->

    <tr>
        <td colspan="1" class="" align="center">
            <img class="logo"
                 src="https://www.asteriski.fi/wp-content/uploads/2022/06/asteriski-logo_1_33.png" alt="logo">
        </td>
        <td colspan="1">
            <span class="small-text">
                Want to read the news from website?<a href="<?= $article_url ?>"> Click here!</a><br>
                Questions or feedback?<a href="mailto:asteriski@utu.fi"> Email us!</a><br>
                Want to manage your subscription?<a href="https://lists.utu.fi/mailman/listinfo/riski-info"> You can do it here.</a><br>
            </span>
        </td>
    </tr>
    <tr>
        <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
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

    <tr>
        <td colspan="2">&nbsp;</td>
    </tr>
</table>
</body>
</html>
