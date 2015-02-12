<?php include ('../../inc/header.php'); ?>
<?php
$idcommande = $_GET['idcommande'];
$idmenu = $_GET['idmenu'];
$sql_commande = mysql_query("SELECT * FROM commande WHERE idcommande = '$idcommande'")or die(mysql_error());
$donnee_commande = mysql_fetch_array($sql_commande);
?>
<?php
define("TITLE_PAGE", "AJOUT D'UN PRODUIT");
define("SUBTITLE_PAGE", "COMMANDE ".$donnee_commande['num_commande']);
//Breadcumb
$li_start = "<li>".$logiciel."</li>";
$li1 = "<li>COMMANDE</li>";
$li2 = "<li>".$donnee_commande['num_commande']."</li>";
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

                        <?php include ('inc/activity.php'); ?>

                        <?php include ('inc/message_ui.php'); ?>
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
                                <i class="gi gi-brush"></i><?php echo TITLE_PAGE; ?><br><small><?php echo SUBTITLE_PAGE; ?></small>
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

                    <!-- Example Block -->
                    <div class="block">
                        <!-- Example Title -->
                        <div class="block-title">
                            <h2>Séléction d'un produit du menu</h2>
                        </div>
                        <!-- END Example Title -->

                        <!-- Example Content -->
                        <form action="<?php echo SITE,FOLDER; ?>inc/control/commande.php" method="post" class="form-horizontal form-bordered">
                            <input type="hidden" name="idcommande" value="<?php echo $idcommande; ?>" />
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="example-select">Produit</label>
                                <div class="col-md-9">
                                    <select id="example-select" name="idproduit" class="select-select2" size="1" data-placeholder="Choisissez un produit...">
                                        <?php
                                        $sql_menu_produit = mysql_query("SELECT * FROM menu, menu_produit, produit, famille_produit WHERE menu_produit.idmenu = menu.idmenu
                                            AND menu_produit.idproduit = produit.idproduit
                                            AND produit.idfamilleproduit = famille_produit.idfamilleproduit
                                            AND menu.idmenu = '$idmenu'");
                                        while($donnee_menu_produit = mysql_fetch_array($sql_menu_produit))
                                        {
                                        ?>
                                        <option value="<?php echo $donnee_menu_produit['idproduit']; ?>">

                                            <table width="100%">
                                                <tr>
                                                    <td><?php echo $donnee_menu_produit['designation']; ?></td>
                                                    <td><?php echo $donnee_menu_produit['designation_produit']; ?> | <i><?php echo $donnee_menu_produit['description_produit']; ?></i></td>
                                                    <td><?php echo number_format($donnee_menu_produit['prix_unitaire'], 2, ',', ' ')." €"; ?></td>
                                                </tr>
                                            </table>

                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="example-text-input">Quantité</label>
                                <div class="col-md-9">
                                    <input type="text" id="example-text-input" name="qte" class="form-control" placeholder="Quantité">
                                </div>
                            </div>
                            <div class="form-group form-actions">
                                <div class="col-md-9 col-md-offset-3">
                                    <button type="submit" class="btn btn-sm btn-primary" name="ajout_produit" value="Valider"><i class="fa fa-angle-right"></i> Ajout du produit</button>
                                    <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Réinitialiser</button>
                                </div>
                            </div>
                        </form>
                        <!-- END Example Content -->
                    </div>
                    <!-- END Example Block -->
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

        <script src="<?php echo SITE,FOLDER,ASSETS; ?>js/pages/formsGeneral.js"></script>
        <script>$(function(){ FormsGeneral.init(); });</script>
    </body>
</html>