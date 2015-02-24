<?php include ('../../../../inc/header.php'); ?>
<?php
$idcomprestataire = $_GET['idcomprestataire'];
$sql_commande = mysql_query("SELECT * FROM commande_prestataire WHERE idcomprestataire = '$idcomprestataire'")or die(mysql_error());
$donnee_commande = mysql_fetch_array($sql_commande);
?>
<?php
define("TITLE_PAGE", "COMMANDE PRESTATAIRE");
define("SUBTITLE_PAGE", "COMMANDE N° ".$donnee_commande['num_commande']);
//Breadcumb
$li_start = "<li>".$logiciel."</li>";
$li1 = "<li>ADMINISTRATION</li>";
$li2 = "<li>COMMANDE</li>";
$li3 = "<li>PRESTATAIRE</li>";
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
                        <div class="pull-right">
                            <a href="index.php" class="btn btn-xs btn-primary"><i class="fa fa-arrow-left"></i> Retour à la liste des Commandes</a>
                            <a href="" class="btn btn-xs btn-default"><i class="fa fa-print"></i> Imprimmer la commande</a>
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
                    <!-- RESULTAT DES ETATS -->

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
                                <div style="text-align: center; font-size: 20px;">
                                    <?php
                                    if($donnee_commande['etat_commande'] == "0"){
                                    ?>
                                    <div class="text-danger">
                                        <i class="fa fa-times-circle"></i>
                                        Commande Passer chez le prestataire
                                    </div>
                                    <a href="" class="btn btn-block btn-primary"><i class="gi gi-roundabout"></i> Commande transmise au prestataire</a>
                                    <?php } ?>
                                    <?php
                                    if($donnee_commande['etat_commande'] == "1"){
                                    ?>
                                    <div class="text-warning">
                                        <i class="fa fa-truck"></i>
                                        Commande récéptionner au centre.<br>
                                        <h5>Veuillez la vérifier.</h5>
                                        <a href="" class="btn btn-block btn-primary"><i class="fa fa-check"></i> Valider la vérification</a>
                                    </div>
                                    <?php } ?>
                                    <?php
                                    if($donnee_commande['etat_commande'] == "2"){
                                    ?>
                                    <div class="text-success">
                                        <i class="fa fa-success"></i>
                                        Commande Vérifier.<br>
                                        <h5>Article Disponible pour l'utilisateur.</h5>
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
                                    <div class="pull-right">
                                        <a href="" class="btn btn-primary"><i class="gi gi-cart_in"></i> Ajouter un article</a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-vcenter">
                                        <thead>
                                            <tr>
                                                <th class="text-center;">Famille d'article</th>
                                                <th class="text-center;">Designation Article</th>
                                                <th style="text-align: right;">Prix Unitaire</th>
                                                <th class="text-center;">Quantité</th>
                                                <th style="text-align: right;">Prix Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql_article_commande = mysql_query("SELECT * FROM article_commande_prestataire, commande_prestataire, article, famille_article WHERE article_commande_prestataire.idcomprestataire = commande_prestataire.idcomprestataire
                                                AND article_commande_prestataire.idfamillearticle = famille_article.idfamillearticle
                                                AND article_commande_prestataire.idarticle = article.idarticle
                                                AND article_commande_prestataire.idcomprestataire = '$idcomprestataire'")or die(mysql_error());
                                            while($donnee_article_commande = mysql_fetch_array($sql_article_commande))
                                            {
                                            ?>
                                            <tr>
                                                <td><?php echo $donnee_article_commande['designation']; ?></td>
                                                <td>
                                                    <strong><?php echo $donnee_article_commande['designation_article']; ?></strong>
                                                    <h5><i><?php echo $donnee_article_commande['description_article']; ?></i></h5>
                                                </td>
                                                <td style="text-align: right;"><?php echo number_format($donnee_article_commande['prix_unitaire'], 2, ',', ' ')." €"; ?></td>
                                                <td class="text-center"><?php echo $donnee_article_commande['qte']; ?></td>
                                                <td style="text-align: right;"><?php echo number_format($donnee_article_commande['prix_total_commande'], 2, ',', ' ')." €"; ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="4" style="text-align: right;">Montant Total de la Commande</td>
                                                <td style="text-align: right;"><?php echo number_format($donnee_commande['montant_total'], 2, ',', ' ')." €"; ?></td>
                                            </tr>
                                        </tfoot>
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
        <script src="<?php echo SITE,FOLDER,ASSETS; ?>js/pages/formsGeneral.js"></script>
        <script src="<?php echo SITE,FOLDER,ASSETS; ?>js/pages/formsValidation.js"></script>
        <script>$(function(){ FormsValidation.init(); });</script>
        <script>$(function(){ FormsGeneral.init(); });</script>
        <script>$(function(){ TablesGeneral.init(); });</script>
    </body>
</html>