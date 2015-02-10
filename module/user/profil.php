<?php
include ('../../inc/header.php');
$idsalarie = $_GET['idsalarie'];
$sql_user = mysql_query("SELECT * FROM salarie WHERE idsalarie = '$idsalarie'");
$donnee_user = mysql_fetch_array($sql_user);
?>
    <body>
        <!-- Preloader -->
        <!-- Preloader functionality (initialized in js/app.js) - pageLoading() -->
        <!-- Used only if page preloader is enabled from inc/config (PHP version) or the class 'page-loading' is added in body element (HTML version) -->
        <div class="preloader themed-background">
            <h1 class="push-top-bottom text-light text-center"><strong>Pro</strong>UI</h1>
            <div class="inner">
                <h3 class="text-light visible-lt-ie9 visible-lt-ie10"><strong>Loading..</strong></h3>
                <div class="preloader-spinner hidden-lt-ie9 hidden-lt-ie10"></div>
            </div>
        </div>
        <!-- END Preloader -->

        <!-- Page Container -->
        <!-- In the PHP version you can set the following options from inc/config file -->
        <!--
            Available #page-container classes:

            '' (None)                                       for a full main and alternative sidebar hidden by default (> 991px)

            'sidebar-visible-lg'                            for a full main sidebar visible by default (> 991px)
            'sidebar-partial'                               for a partial main sidebar which opens on mouse hover, hidden by default (> 991px)
            'sidebar-partial sidebar-visible-lg'            for a partial main sidebar which opens on mouse hover, visible by default (> 991px)

            'sidebar-alt-visible-lg'                        for a full alternative sidebar visible by default (> 991px)
            'sidebar-alt-partial'                           for a partial alternative sidebar which opens on mouse hover, hidden by default (> 991px)
            'sidebar-alt-partial sidebar-alt-visible-lg'    for a partial alternative sidebar which opens on mouse hover, visible by default (> 991px)

            'sidebar-partial sidebar-alt-partial'           for both sidebars partial which open on mouse hover, hidden by default (> 991px)

            'sidebar-no-animations'                         add this as extra for disabling sidebar animations on large screens (> 991px) - Better performance with heavy pages!

            'style-alt'                                     for an alternative main style (without it: the default style)
            'footer-fixed'                                  for a fixed footer (without it: a static footer)

            'disable-menu-autoscroll'                       add this to disable the main menu auto scrolling when opening a submenu

            'header-fixed-top'                              has to be added only if the class 'navbar-fixed-top' was added on header.navbar
            'header-fixed-bottom'                           has to be added only if the class 'navbar-fixed-bottom' was added on header.navbar
        -->
        <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">
            <!-- Alternative Sidebar -->
            <div id="sidebar-alt">
                <!-- Wrapper for scrolling functionality -->
                <div class="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <div class="sidebar-content">
                        <?php //include ('inc/chat.php'); ?>

                        <?php include ('../../inc/activity.php'); ?>

                        <?php include ('../../inc/message_ui.php'); ?>
                    </div>
                    <!-- END Sidebar Content -->
                </div>
                <!-- END Wrapper for scrolling functionality -->
            </div>
            <!-- END Alternative Sidebar -->

            <?php include ('../../inc/sidebar.php'); ?>

            <!-- Main Container -->
            <div id="main-container">
                <!-- Header -->
                <!-- In the PHP version you can set the following options from inc/config file -->
                <!--
                    Available header.navbar classes:

                    'navbar-default'            for the default light header
                    'navbar-inverse'            for an alternative dark header

                    'navbar-fixed-top'          for a top fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar())
                        'header-fixed-top'      has to be added on #page-container only if the class 'navbar-fixed-top' was added

                    'navbar-fixed-bottom'       for a bottom fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar()))
                        'header-fixed-bottom'   has to be added on #page-container only if the class 'navbar-fixed-bottom' was added
                -->
                <?php include ('../../inc/headerbar.php'); ?>

                <!-- Page content -->
                <div id="page-content">
                    <!-- User Profile Header -->
                    <!-- For an image header add the class 'content-header-media' and an image as in the following example -->
                    <div class="content-header content-header-media">
                        <div class="header-section">
                            <img src="<?php echo SITE,FOLDER,ASSETS; ?>img/placeholders/avatars/avatar2.jpg" alt="Avatar" class="pull-right img-circle">
                            <h1><?php echo $donnee_user['prenom']; ?> <?php echo $donnee_user['nom']; ?> <br><small>Connexion par: <?php echo $donnee_user['login']; ?></small></h1>
                        </div>
                        <!-- For best results use an image with a resolution of 2560x248 pixels (You can also use a blurred image with ratio 10:1 - eg: 1000x100 pixels - it will adjust and look great!) -->
                        <img src="<?php echo SITE,FOLDER,ASSETS; ?>img/placeholders/headers/profile_header.jpg" alt="header image" class="animation-pulseSlow">
                    </div>
                    <!-- END User Profile Header -->

                    <!-- User Profile Content -->
                    <div class="row">
                        <div class="col-md-12">
                            <?php
                                if(isset($_GET['error_file_extension']) && $_GET['error_file_extension'] == 'true'){
                            ?>
                                <div class="alert alert-warning alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                    <h4><i class="fa fa-exclamation-circle"></i> Attention</h4>Vous ne pouvez choisir une avatar que si l'extension de l'image est de type <strong>JPG, JPEG, GIF ou PNG</strong> !<br>
                                    Veuillez recommencer
                                </div>
                            <?php
                                }
                            ?>

                            <?php
                                if(isset($_GET['error_file_size']) && $_GET['error_file_size'] == 'true'){
                            ?>
                                <div class="alert alert-warning alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                    <h4><i class="fa fa-exclamation-circle"></i> Attention</h4>Votre image dépasse la taille autorisé qui est de <strong>7 Mo</strong> !<br>
                                    Veuillez recommencer
                                </div>
                            <?php
                                }
                            ?>

                            <?php
                                if(isset($_GET['succes_modif_info']) && $_GET['succes_modif_info'] == 'true'){
                            ?>
                                <div class="alert alert-success alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                    <h4><i class="fa fa-check-circle"></i> Succès</h4> Vos Informations ont bien été modifiés !
                                </div>
                            <?php
                                }
                            ?>

                            <?php
                                if(isset($_GET['error_modif_info']) && $_GET['error_modif_info'] == 'true'){
                            ?>
                                <div class="alert alert-danger alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                    <h4><i class="fa fa-times-circle"></i> Erreur</h4> Une erreur innatendue c'est produit.<br>
                                    Information sql: <i><?php echo $_GET['error_sql']; ?></i><br>
                                    Debug: <i><?php echo mysql_error(); ?></i><br>
                                    <strong>Veuillez contactez l'administrateur.</strong>
                                </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="block">
                                <!-- Interactive Title -->
                                <div class="block-title">
                                    <!-- Interactive block controls (initialized in js/app.js -> interactiveBlocks()) -->
                                    <div class="block-options pull-right">
                                        <a href="#modal-user-settings" class="btn btn-alt btn-sm btn-primary" data-toggle="modal"><i class="fa fa-cog"></i></a>
                                    </div>
                                    <h2>Vos Informations</h2>
                                </div>
                                <!-- END Interactive Title -->

                                <!-- Interactive Content -->
                                <!-- The content you will put inside div.block-content, will be toggled -->
                                <div class="block-content">
                                    <table class="table table-borderless table-striped">
                                        <tbody>
                                            <tr>
                                                <td style="width: 20%;"><strong>Identité</strong></td>
                                                <td><?php echo $donnee_user['prenom']; ?> <?php echo $donnee_user['nom']; ?><br><strong>Nom d'utilisateur:</strong> <?php echo $donnee_user['login']; ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Adresse</strong></td>
                                                <td>
                                                    <?php echo $donnee_user['adresse']; ?><br>
                                                    <?php echo $donnee_user['code_postal']; ?> <?php echo $donnee_user['ville']; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Coordonnée</strong></td>
                                                <td>
                                                    Téléphone: <?php echo $donnee_user['telephone']; ?><br>
                                                    E-Mail: <?php echo $donnee_user['email']; ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END Interactive Content -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-6">
                                <div class="widget">
                                    <div class="widget-simple">
                                        <a class="widget-icon pull-left themed-background" href="javascript:void(0)">
                                            <i class="gi gi-package"></i>
                                        </a>
                                        <h3 class="text-right animation-stretchRight">5 <strong>Menus Commander</strong></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="widget">
                                    <div class="widget-simple">
                                        <a class="widget-icon pull-left themed-background" href="javascript:void(0)">
                                            <i class="gi gi-package"></i>
                                        </a>
                                        <h3 class="text-right animation-stretchRight">5 <strong>Menus Récéptionner</strong></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- END User Profile Content -->
                </div>
                <!-- END Page Content -->

                <!-- Footer -->
                <?php include ('../../inc/footer.php'); ?>
                <!-- END Footer -->
            </div>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>

        <!-- User Settings, modal which opens from Settings link (found in top right user menu) and the Cog link (found in sidebar user info) -->
        <div id="modal-user-settings" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header text-center">
                        <h2 class="modal-title"><i class="fa fa-pencil"></i> Settings</h2>
                    </div>
                    <!-- END Modal Header -->

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form action="<?php echo SITE, FOLDER; ?>inc/control/profil.php" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">
                            <fieldset>
                                <legend>Modification des Informations du salarié</legend>

                                <input type="hidden" name="idsalarie" value="<?php echo $donnee_user['idsalarie']; ?>" />

                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-email">Email</label>
                                    <div class="col-md-8">
                                        <input type="text" id="user-settings-email" name="email" class="form-control" value="<?php echo $donnee_user['email']; ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-email">Adresse postal</label>
                                    <div class="col-md-8">
                                        <textarea placeholder="Votre adresse postal (numéro de rue, rue, batiment, etc...)" class="form-control" rows="9" name="adresse" id="example-textarea-input"><?php echo $donnee_user['adresse']; ?></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="user-settings-email">Code Postal</label>
                                    <div class="col-md-3">
                                        <input type="text" id="user-settings-email" name="code_postal" class="form-control" value="<?php echo $donnee_user['code_postal']; ?>">
                                    </div>
                                    <label class="col-md-2 control-label" for="user-settings-email">Ville</label>
                                    <div class="col-md-5">
                                        <input type="text" id="user-settings-email" name="ville" class="form-control" value="<?php echo $donnee_user['ville']; ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-email">Numéro de téléphone</label>
                                    <div class="col-md-8">
                                        <input type="text" id="masked_phone" name="telephone" class="form-control" value="<?php echo $donnee_user['telephone']; ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="example-file-input">Avatar</label>
                                    <div class="col-md-9">
                                        <input type="file" id="example-file-input" name="avatar">
                                    </div>
                                </div>

                            </fieldset>
                            <div class="form-group form-actions">
                                <div class="col-xs-12 text-right">
                                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Fermer la fenêtre</button>
                                    <button type="submit" class="btn btn-sm btn-success" name="modif-info-profil" value="Valider">Modifier les information de compte</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- END Modal Body -->
                </div>
            </div>
        </div>
        <!-- END User Settings -->

        <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>!window.jQuery && document.write(decodeURI('%3Cscript src="js/vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'));</script>

        <!-- Bootstrap.js, Jquery plugins and Custom JS code -->
        <script src="<?php echo SITE, FOLDER,ASSETS; ?>js/vendor/bootstrap.min.js"></script>
        <script src="<?php echo SITE, FOLDER,ASSETS; ?>js/plugins.js"></script>
        <script src="<?php echo SITE, FOLDER,ASSETS; ?>js/app.js"></script>

        <!-- Google Maps API + Gmaps Plugin, must be loaded in the page you would like to use maps (Remove 'http:' if you have SSL) -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="<?php echo SITE, FOLDER,ASSETS; ?>js/helpers/gmaps.min.js"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="<?php echo SITE, FOLDER,ASSETS; ?>js/pages/readyProfile.js"></script>
        <script src="<?php echo SITE, FOLDER,ASSETS; ?>js/pages/formsValidation.js"></script>
        <script src="<?php echo SITE, FOLDER,ASSETS; ?>js/pages/formsGeneral.js"></script>
        <script>
            $(function(){ 
                ReadyProfile.init(); 
                FormsValidation.init();
                FormsGeneral.init();
            });

        </script>
    </body>
</html>