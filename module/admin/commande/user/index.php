<?php include ('../../../../inc/header.php'); ?>
<?php
define("TITLE_PAGE", "COMMANDE");
define("SUBTITLE_PAGE", "Utilisateur");
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

                    <div class="block">
                        <div class="block-title">
                            <h2>Commande</h2>
                        </div>
                        <div class="table-responsive">
                            <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">N° Commande</th>
                                        <th class="text-center">Utilisateur</th>
                                        <th class="text-center">Date de la commande</th>
                                        <th class="text-center">Montant de la commande</th>
                                        <th class="text-center">Etat de la commande</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $sql_commande = mysql_query("SELECT * FROM commande, utilisateur WHERE commande.iduser = utilisateur.iduser ORDER BY date_commande ASC")or die(mysql_error());
                                while($donnee_commande = mysql_fetch_array($sql_commande))
                                {
                                ?>
                                    <tr>
                                        <td class="text-center"><?php echo $donnee_commande['num_commande']; ?></td>
                                        <td class="text-center"><?php echo $donnee_commande['nom_user']; ?> <?php echo $donnee_commande['prenom_user']; ?></td>
                                        <td class="text-right">
                                            <?php echo date("d-m-Y", $donnee_commande['date_commande']); ?><br>
                                            <small>
                                                Date livraison théorique:
                                                <?php
                                                $date_strt_cmd = strtotime($donnee_commande['date_commande']+"7 Day");
                                                echo date("d-m-Y", $date_strt_cmd);
                                                ?>
                                            </small>
                                        </td>
                                        <td class="text-right"><?php echo number_format($donnee_commande['montant_total'], 2,',', ' ')." €"; ?></td>
                                        <td class="text-center">
                                            <?php
                                            switch ($donnee_commande['etat_commande']) {
                                                case '0':
                                                    echo "<span class='label label-default' title='' data-placement='top' data-toggle='tooltip' data-original-title='La commande est en cours de validation par l\'utilisateur, il ne là pas valider.'>Non valider par l'utilisateur</span>";
                                                    break;

                                                case '1':
                                                    echo "<span class='label label-primary' title='' data-placement='top' data-toggle='tooltip' data-original-title='La commande est valider par l'utilisateur, elle doit etre pris en charge par le centre de gestion.'>Valider par l'utilisateur, en attente du centre de gestion.</span>";
                                                    break;
                                                
                                                default:
                                                    # code...
                                                    break;
                                            }
                                            ?>
                                        </td>
                                        <td class="text-center">

                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
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
        <script src="<?php echo SITE,FOLDER,ASSETS; ?>js/pages/tablesDatatables.js"></script>
        <script>$(function(){ TablesDatatables.init(); });</script>
    </body>
</html>