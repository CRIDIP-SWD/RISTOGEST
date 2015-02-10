<?php include ('../../inc/header.php'); ?>
<?php
$idmenu = $_GET['idmenu'];
$sql_menu = mysql_query("SELECT * FROM menu WHERE idmenu = '$idmenu'")or die(mysql_error());
$donnee_menu = mysql_fetch_array($sql_menu);
?>
<?php
define("TITLE_PAGE", "FICHE DU MENU du ".$donnee_menu['date_menu']);
define("SUBTITLE_PAGE", "Semaine ".$donnee_menu['semaine']);
define("TITLE_ICON", "gi gi-cutlery");
//Breadcumb
$li_start = "<li>".$logiciel."</li>";
$li1 = "MENU";
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
                    <!-- Blank Header -->
                    <div class="content-header">
                        <div class="header-section">
                            <h1>
                                <i class="<?php echo TITLE_ICON; ?>"></i><?php echo TITLE_PAGE; ?><br><small><?php echo SUBTITLE_PAGE; ?></small>
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

                    <div class="row">
                        <div class="col-md-3">
                            <div class="block">
                                <div class="block-title">
                                <h2>LES ENTREES</h2>
                                </div>
                                <table style="width: 100%">
                                    <?php
                                    $sql_entre_menu = mysql_query("SELECT * FROM entree_menu WHERE idmenu = '$idmenu'")or die(mysql_error());
                                    while($donnee_entree_menu = mysql_fetch_array($sql_entre_menu))
                                    {
                                    ?>
                                    <tr>
                                        <td>
                                            <strong><?php echo html_entity_decode($donnee_entree_menu['libelle_entre']); ?></strong><br>
                                            <h5 style="color: grey; font-style: italic;"><?php echo html_entity_decode($donnee_entree_menu['descriptif_entre']); ?></h5>
                                        </td>
                                        <td style="text-align: right;"><?php echo number_format($donnee_entree_menu['prix_entre'], 2, ',', ' ')." &euro;"; ?></td>
                                    </tr>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="block">
                                <div class="block-title">
                                <h2>LES PLATS</h2>
                                </div>
                                <table style="width: 100%">
                                    <?php
                                    $sql_plat_menu = mysql_query("SELECT * FROM plat_menu WHERE idmenu = '$idmenu'")or die(mysql_error());
                                    while($donnee_plat_menu = mysql_fetch_array($sql_plat_menu))
                                    {
                                    ?>
                                    <tr>
                                        <td>
                                            <strong><?php echo html_entity_decode($donnee_plat_menu['libelle_plat']); ?></strong><br>
                                            <h5 style="color: grey; font-style: italic;"><?php echo html_entity_decode($donnee_plat_menu['descriptif_plat']); ?></h5>
                                        </td>
                                        <td style="text-align: right;"><?php echo number_format($donnee_plat_menu['prix_plat'], 2, ',', ' ')." &euro;"; ?></td>
                                    </tr>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="block">
                                <div class="block-title">
                                <h2>LES DESSERTS</h2>
                                </div>
                                <table style="width: 100%">
                                    <?php
                                    $sql_dessert_menu = mysql_query("SELECT * FROM dessert_menu WHERE idmenu = '$idmenu'")or die(mysql_error());
                                    while($donnee_dessert_menu = mysql_fetch_array($sql_dessert_menu))
                                    {
                                    ?>
                                    <tr>
                                        <td>
                                            <strong><?php echo html_entity_decode($donnee_dessert_menu['libelle_dessert']); ?></strong><br>
                                            <h5 style="color: grey; font-style: italic;"><?php echo html_entity_decode($donnee_dessert_menu['descriptif_dessert']); ?></h5>
                                        </td>
                                        <td style="text-align: right;"><?php echo number_format($donnee_dessert_menu['prix_dessert'], 2, ',', ' ')." &euro;"; ?></td>
                                    </tr>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="block">
                                <div class="block-title">
                                <h2>LES BOISSONS</h2>
                                </div>
                                <table style="width: 100%">
                                    <?php
                                    $sql_boisson_menu = mysql_query("SELECT * FROM boisson_menu WHERE idmenu = '$idmenu'")or die(mysql_error());
                                    while($donnee_boisson_menu = mysql_fetch_array($sql_boisson_menu))
                                    {
                                    ?>
                                    <tr>
                                        <td>
                                            <strong><?php echo html_entity_decode($donnee_boisson_menu['libelle_boisson']); ?></strong><br>
                                            <h5 style="color: grey; font-style: italic;"><?php echo html_entity_decode($donnee_boisson_menu['descriptif_boisson']); ?></h5>
                                        </td>
                                        <td style="text-align: right;"><?php echo number_format($donnee_boisson_menu['prix_boisson'], 2, ',', ' ')." &euro;"; ?></td>
                                    </tr>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- END Page Content -->

                <?php include ('../../inc/footer.php'); ?>
            </div>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>

        <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>!window.jQuery && document.write(decodeURI('%3Cscript src="js/vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'));</script>

        <!-- Bootstrap.js, Jquery plugins and Custom JS code -->
        <script src="<?php echo SITE,FOLDER,ASSETS; ?>js/vendor/bootstrap.min.js"></script>
        <script src="<?php echo SITE,FOLDER,ASSETS; ?>js/plugins.js"></script>
        <script src="<?php echo SITE,FOLDER,ASSETS; ?>js/app.js"></script>

        <script src="<?php echo SITE,FOLDER,ASSETS; ?>js/pages/tablesDatatables.js"></script>
        <script>$(function(){ TablesDatatables.init(); });</script>
    </body>
</html>