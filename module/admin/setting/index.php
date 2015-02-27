<?php include ('../../../inc/header.php'); ?>
<?php
$sql_center = mysql_query("SELECT * FROM setting WHERE idsetting = '1'")or die(mysql_error());
$donnee_center = mysql_fetch_array($sql_center);
?>
<?php
define("TITLE_PAGE", "CENTRE DE GESTION");
define("SUBTITLE_PAGE", "CONFIGURATION");
//Breadcumb
$li_start = "<li>".$logiciel."</li>";
$li1 = "";
$li2 = "";
$li3 = "";
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

            <?php include ('../../../inc/sidebar.php'); ?>

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
                <?php include ('../../../inc/headerbar.php'); ?>

                <!-- Page content -->
                <div id="page-content">
                    <!-- Blank Header -->
                    <div class="content-header">
                        <div class="header-section">
                            <h1>
                                <i class="fa fa-building"></i><?php echo TITLE_PAGE; ?><br><small><?php echo SUBTITLE_PAGE; ?></small>
                            </h1>
                        </div>
                        <div class="pull-right">
                            <a href="" class="btn btn-info"><i class="gi gi-edit"></i> Modifier les informations du centre</a>
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
                    <!-- RESULTAT DES ETATS -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="block">
                                <!-- Block Title -->
                                <div class="block-title">
                                    <h2>Centre de Gestion</h2>
                                </div>
                                <!-- END Block Title -->

                                <!-- Block Content -->
                                <div style="text-align: center;">
                                    <div class="img-circle">
                                        <i class="fa fa-building" style="font-size: 75px;"></i>
                                    </div>

                                    <div style="font-size: 35px; font-weight: bold;"><?php echo $donnee_center['raison_social']; ?></div>
                                    <div class="table-responsive animation-fadeIn" style="padding-top: 30px;">
                                        <table id="general-table" class="table table-striped table-vcenter">
                                            <tbody>

                                                <tr>
                                                    <td style="text-align: left; width: 75%;">Adresse:</td>
                                                    <td style="text-align: left; width: 25%;">
                                                        <?php echo $donnee_center['adresse']; ?><br>
                                                        <?php echo $donnee_center['code_postal']; ?> <?php echo $donnee_center['ville']; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left; width: 75%;">Numéro de Téléphone:</td>
                                                    <td style="text-align: left; width: 25%;">
                                                        <em><?php echo $donnee_center['telephone']; ?></em>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left; width: 75%;">Adresse Mail:</td>
                                                    <td style="text-align: left; width: 25%;">
                                                        <em><?php echo $donnee_center['email']; ?></em>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left; width: 75%;">Nombre de jour pour livraison Théorique:</td>
                                                    <td style="text-align: left; width: 25%;">
                                                        <em><?php echo $donnee_center['nb_liv_theorique']; ?> jours</em>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END Block Content -->
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="block">
                                <!-- Block Title -->
                                <div class="block-title">
                                    <h2>Statistique</h2>
                                </div>
                                <!-- END Block Title -->

                                <!-- Block Content -->
                                <div class="col-sm-4">
                                    <div class="pull-left">
                                        <i class="fa fa-euro" style="font-size: 45px;"></i>
                                    </diV>
                                    <div class="pull-right">
                                        <div style="font-size: 45px; font-weight: bold;">2 300,95 €</div>
                                        <div style="font-size: 25px;">CA réalisée</div>
                                    </div>
                                </div> 
                                

                                <!-- END Block Content -->
                            </div>
                        </div>
                    </div>

                </div>
                <!-- END Page Content -->

                <?php include ('../../../inc/footer.php'); ?>
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
        <script src="<?php echo SITE,FOLDER,ASSETS; ?>js/pages/tablesDatatables.js"></script>
        <script src="<?php echo SITE,FOLDER,ASSETS; ?>js/pages/compAnimations.js"></script>
        <script src="<?php echo SITE,FOLDER,ASSETS; ?>js/pages/formsValidation.js"></script>
        <script src="<?php echo SITE,FOLDER,ASSETS; ?>js/pages/widgetsStats.js"></script>
        <script>$(function(){ WidgetsStats.init(); });</script>
        <script>$(function(){ FormsValidation.init(); });</script>
        <script>$(function(){ CompAnimations.init(); });</script>
        <script>$(function(){ TablesDatatables.init(); });</script>
    </body>
</html>