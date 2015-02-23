<?php
include ('inc/config.php');
?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title><?php echo $logiciel; ?></title>

        <meta name="description" content="ProUI is a Responsive Bootstrap Admin Template created by pixelcave and published on Themeforest.">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?php echo SITE, FOLDER, ASSETS; ?>img/favicon.ico">
        <link rel="apple-touch-icon" href="<?php echo SITE, FOLDER, ASSETS; ?>img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="<?php echo SITE, FOLDER, ASSETS; ?>img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="<?php echo SITE, FOLDER, ASSETS; ?>img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="<?php echo SITE, FOLDER, ASSETS; ?>img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="<?php echo SITE, FOLDER, ASSETS; ?>img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="<?php echo SITE, FOLDER, ASSETS; ?>img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="<?php echo SITE, FOLDER, ASSETS; ?>img/icon152.png" sizes="152x152">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="<?php echo SITE, FOLDER, ASSETS; ?>css/bootstrap.min.css">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="<?php echo SITE, FOLDER, ASSETS; ?>css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="<?php echo SITE, FOLDER, ASSETS; ?>css/main.css">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="<?php echo SITE, FOLDER, ASSETS; ?>css/themes.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it, eg IE8) -->
        <script src="<?php echo SITE, FOLDER, ASSETS; ?>js/vendor/modernizr-2.7.1-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!-- Error Container -->
        <div id="error-container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">
                    <h1 class="animation-tossing"><i class="fa fa-times text-danger"></i> SERVICE DESACTIVE</h1>
                    <h2 class="h3">Votre accès au service de RISTOGEST est <b>désactivé</b>.<br>Veuillez contacter le service technique au <b>02 51 23 24 24</b>.</h2>
                </div>
            </div>
        </div>
        <!-- END Error Container -->
    </body>
</html>