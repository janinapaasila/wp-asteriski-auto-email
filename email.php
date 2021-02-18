<!--This is a email template for making pretty emails straight from WP. Made by Roosa Virta-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Asteriskin maili</title>
</head>
<body>
<style>
    .container-table {
        width: 100%;
        background-color: #ebebeb;
    }

    table {
        width: 100%;
        border-left: 2px solid #e6e6e6;
        border-right: 2px solid #e6e6e6;
    }

    .table-content {
        padding-left: 20px;
        padding-right: 20px;
    }


    .td-content-slim {
        background-color: #ffffff;
        border-top: 0px solid #000000;
        text-align: center;
        height: 50px;
    }

    .td-content {
        background-color: #ffffff;
        border-top: 0px solid #333333;
        border-bottom: 10px solid #FFFFFF;
    }

    .content{
        padding: 20px;
    }


    .banner{
        width: 100%;
    }

    .cropped {
        height: 300px;
        overflow: hidden;
        border-bottom: 3px solid #b3c9b3;
    }


    .small-text {
        font-size: 11px;
        color: #575757;
        line-height: 200%;
        font-family: 'Arial', Sans-Serif;
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
        font-family: 'Arial', Sans-Serif;
    }

    h1 {
        margin-bottom: 10px;
        font-size: 22px;
        font-weight: bold;
        color: #494a48;
        font-family: arial;
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
</style>

<table cellspacing="0" cellpadding="0" width="100%" bgcolor="#ebebeb">
    <tbody>
    <tr>
        <td align="center" valign="top"></td>
    </tr>
    </tbody>
</table>


<table cellspacing="0" cellpadding="0">
    <tbody>
    <tr>
        <table cellspacing="0" cellpadding="0">
            <tbody>
            <tr>
                <td class="td-content-slim" align="center">
                    <span class="small-text">
                        Tämän voi lukea myös nettisivuillamme!
                        <a class="small-text bolder-text" href="<?=$article_url?>">Avaa selaimessa.</a>
                    </span>
                </td>
            </tr>
            <tr>
                <td class="td-content" align="left" valign="middle">
                    <div class="cropped">
                        <img class="banner" src="<?=$banner?>" border="0" alt="Banneri" align="center"/>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>

        <table class="table-content" style="margin-left: 20px !important;" cellspacing="0" cellpadding="25">
            <h1>
                <?= $title ?>
            </h1>
            <div class="content">
                <?= $content ?>
            </div>
        </table>


        <!--        FOOTER          -->
        <table style="border-top: 3px solid #b3c9b3;" cellpadding="5" cellspacing="0">
            <td class="td-content-slim" style="text-align: left; display: flex" align="center">
                <img class="logo"
                     src="https://www.asteriski.fi/wp-content/themes/wp-asteriski-theme/assets/img/asteriski-logo.png">
                <span class="small-text" style="margin-left: 10px;">
                    <a href="mailto:asteriski.utu.fi">Onko asiaa?</a><br>
                        Käy nettisivuillamme!
                    <a href="https://www.asteriski.fi/">asteriski.fi</a>
                </span>
            </td>

            <td class="td-content-slim" style="text-align: right;" align="center">
                <span class="small-text">
                    Jos et halua saada Riski-infon sähköposteja <a href="https://lists.utu.fi/mailman/listinfo/riski-info">peruuta tilaus täällä.</a>.
                </span>
        </table>

    </tr>
    </tbody>
</table>
</body>
</html>