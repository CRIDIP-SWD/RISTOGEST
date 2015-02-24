<?php include ('../../../../inc/header.php'); ?>
<?php
$idcommande = $_GET['idcommande'];
$sql_commande = mysql_query("SELECT * FROM commande WHERE idcommande = '$idcommande'")or die(mysql_error());
$donnee_commande = mysql_fetch_array($sql_commande);
?>
<?php
define("TITLE_PAGE", "COMMANDE UTILISATEUR");
define("SUBTITLE_PAGE", "COMMANDE N° ".$donnee_commande['num_commande']);
//Breadcumb
$li_start = "<li>".$logiciel."</li>";
$li1 = "<li>ADMINISTRATION</li>";
$li2 = "<li>COMMANDE</li>";
$li3 = "<li>UTILISATEUR</li>";
$li4 = "";
$li_end = "<li><a href='#'>".TITLE_PAGE."</a></li>";
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

                        <?php include ('../../../inc/activity.php'); ?>

                        <?php include ('../../../inc/message_ui.php'); ?>
                    </div>
                    <!-- END Sidebar Content -->
                </div>
                <!-- END Wrapper for scrolling functionality -->
            </div>
            <!-- END Alternative Sidebar -->

            <?php include ('../../../../inc/sidebar.php'); ?>

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
                <?php include ('../../../../inc/headerbar.php'); ?>

                <!-- Page content -->
                <div id="page-content">
                    <!-- Blank Header -->
                    <div class="content-header">
                        <div class="header-section">
                            <h1>
                                <i class="gi gi-user"></i><?php echo TITLE_PAGE; ?><br><small><?php echo SUBTITLE_PAGE; ?></small>
                            </h1>
                        </div>
                    </div>
                    <ul class="breadcrumb breadcrumb-top">
                        <?php
                        if(empty($li_start)){echo "";}else{echo $li_start;}
                        if(empty($li1)){echo "";}else{echo $li1;}
                        if(empty($li2)){echo "";}else{echo $li2;}
                        if(empty($li3)){echo "";}else{echo $li3;}
                        if(empty($li4)){echo "";}else{echo $li4;}
                        if(empty($li_end)){echo "";}else{echo $li_end;}
                        ?>
                    </ul>
                    <!-- END Blank Header -->
                    <!-- ALERT UTILISATEUR -->
                    <?php
                        if($donnee_commande['etat_commande'] == "0"){
                    ?>
                    <div class="alert alert-info alert-dismissable">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        <h4><i class="fa fa-info-circle"></i> Information</h4> L'utilisateur n'a pas valider sa commande !
                    </div>
                    <?php
                        }
                    ?>
                    <!-- RESULTAT DES ETATS -->
                    <?php
                    if($donnee_commande['etat_commande'] == "1")
                    {
                        mysql_query("UPDATE commande SET etat_commande = '2' WHERE idcommande = '$idcommande'");
                    }
                    ?>
                    <!-- BLOCK -->
                    <div class="row">
                        <div class="col-md-8">
                            <div class="block">
                                <div class="block-title">
                                    <h2>Montant de la commande</h2>
                                </div>
                                <div style="text-align: center; font-size: 35px; font-weight: bolder;"><?php echo number_format($donnee_commande['montant_total'], 2, ',', ' ')." €"; ?></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="block">
                                <div class="block-title">
                                    <h2>Etat de la commande</h2>
                                </div>
                                <div style="text-align: center; font-size: 20px; height: 75px;">
                                    <?php
                                    if($donnee_commande['etat_commande'] == "0"){
                                    ?>
                                    <div class="text-muted">
                                        <i class="fa fa-times-circle"></i>
                                        Non Valider par l'utilisateur
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <div class="block-title">
                                    <h2>Produit Commander</h2>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-vcenter">
                                        <thead>
                                            <tr>
                                                <th style="width: 150px;" class="text-center"><i class="gi gi-user"></i></th>
                                                <th>Client</th>
                                                <th>Email</th>
                                                <th>Subscription</th>
                                                <th style="width: 150px;" class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="active">
                                                <td class="text-center"><img src="img/placeholders/avatars/avatar13.jpg" alt="avatar" class="img-circle"></td>
                                                <td><a href="page_ready_user_profile.html">client1</a></td>
                                                <td>client1@example.com</td>
                                                <td><a href="javascript:void(0)" class="label label-warning">Trial</a></td>
                                                <td class="text-center">
                                                    <div class="btn-group btn-group-xs">
                                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><img src="img/placeholders/avatars/avatar1.jpg" alt="avatar" class="img-circle"></td>
                                                <td><a href="page_ready_user_profile.html">client2</a></td>
                                                <td>client2@example.com</td>
                                                <td><a href="javascript:void(0)" class="label label-success">VIP</a></td>
                                                <td class="text-center">
                                                    <div class="btn-group btn-group-xs">
                                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="success">
                                                <td class="text-center"><img src="img/placeholders/avatars/avatar11.jpg" alt="avatar" class="img-circle"></td>
                                                <td><a href="page_ready_user_profile.html">client3</a></td>
                                                <td>client3@example.com</td>
                                                <td><a href="javascript:void(0)" class="label label-info">Business</a></td>
                                                <td class="text-center">
                                                    <div class="btn-group btn-group-xs">
                                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><img src="img/placeholders/avatars/avatar4.jpg" alt="avatar" class="img-circle"></td>
                                                <td><a href="page_ready_user_profile.html">client4</a></td>
                                                <td>client4@example.com</td>
                                                <td><a href="javascript:void(0)" class="label label-success">VIP</a></td>
                                                <td class="text-center">
                                                    <div class="btn-group btn-group-xs">
                                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="warning">
                                                <td class="text-center"><img src="img/placeholders/avatars/avatar4.jpg" alt="avatar" class="img-circle"></td>
                                                <td><a href="page_ready_user_profile.html">client5</a></td>
                                                <td>client5@example.com</td>
                                                <td><a href="javascript:void(0)" class="label label-primary">Personal</a></td>
                                                <td class="text-center">
                                                    <div class="btn-group btn-group-xs">
                                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><img src="img/placeholders/avatars/avatar11.jpg" alt="avatar" class="img-circle"></td>
                                                <td><a href="page_ready_user_profile.html">client6</a></td>
                                                <td>client6@example.com</td>
                                                <td><a href="javascript:void(0)" class="label label-info">Business</a></td>
                                                <td class="text-center">
                                                    <div class="btn-group btn-group-xs">
                                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="danger">
                                                <td class="text-center"><img src="img/placeholders/avatars/avatar11.jpg" alt="avatar" class="img-circle"></td>
                                                <td><a href="page_ready_user_profile.html">client7</a></td>
                                                <td>client7@example.com</td>
                                                <td><a href="javascript:void(0)" class="label label-primary">Personal</a></td>
                                                <td class="text-center">
                                                    <div class="btn-group btn-group-xs">
                                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><img src="img/placeholders/avatars/avatar4.jpg" alt="avatar" class="img-circle"></td>
                                                <td><a href="page_ready_user_profile.html">client8</a></td>
                                                <td>client8@example.com</td>
                                                <td><a href="javascript:void(0)" class="label label-success">VIP</a></td>
                                                <td class="text-center">
                                                    <div class="btn-group btn-group-xs">
                                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="info">
                                                <td class="text-center"><img src="img/placeholders/avatars/avatar6.jpg" alt="avatar" class="img-circle"></td>
                                                <td><a href="page_ready_user_profile.html">client9</a></td>
                                                <td>client9@example.com</td>
                                                <td><a href="javascript:void(0)" class="label label-primary">Personal</a></td>
                                                <td class="text-center">
                                                    <div class="btn-group btn-group-xs">
                                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- END Page Content -->

                <?php include ('../../../../inc/footer.php'); ?>
            </div>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>

        <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>!window.jQuery && document.write(decodeURI('%3Cscript src="../../../../assets/js/vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'));</script>

        <!-- Bootstrap.js, Jquery plugins and Custom JS code -->
        <script src="<?php echo SITE,FOLDER,ASSETS; ?>js/vendor/bootstrap.min.js"></script>
        <script src="<?php echo SITE,FOLDER,ASSETS; ?>js/plugins.js"></script>
        <script src="<?php echo SITE,FOLDER,ASSETS; ?>js/app.js"></script>
        <script src="<?php echo SITE,FOLDER,ASSETS; ?>js/pages/tablesGeneral.js"></script>
        <script>$(function(){ TablesGeneral.init(); });</script>
    </body>
</html>