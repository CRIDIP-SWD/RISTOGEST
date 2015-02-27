<?php include ('../../../inc/header.php'); ?>
<?php
$iduser = $_GET['iduser'];
$sql_user = mysql_query("SELECT * FROM utilisateur WHERE iduser = '$iduser'")or die(mysql_error());
$donnee_user = mysql_fetch_array($sql_user);
?>
<?php
define("TITLE_PAGE", "UTILISATEUR");
define("SUBTITLE_PAGE", "Fiche de l'utilisateur ".$donnee_user['nom_user']." ".$donnee_user['prenom_user']);
//Breadcumb
$li_start = "<li>".$logiciel."</li>";
$li1 = "<li>UTILISATEUR</li>";
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
                                <i class="gi gi-user"></i><?php echo TITLE_PAGE; ?><br><small><?php echo SUBTITLE_PAGE; ?></small>
                            </h1>
                            
                        </div>
                        <div class="pull-right">
                            <a href="index.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Retour à la liste des utilisateurs</a>
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


                    <?php
                    if(isset($_GET['add-article']) && $_GET['add-article'] == 'true')
                    {
                    ?>
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="fa fa-check-circle"></i> Succès</h4> L'article à bien été ajouter.
                    </div>
                    <?php } ?>
                    <?php
                    if(isset($_GET['add-article']) && $_GET['add-article'] == 'false')
                    {
                    ?>
                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="fa fa-times-circle"></i> Erreur</h4> Une erreur à été detectée lors de l'ajout de l'article.<br>Contactez le support technique.
                    </div>
                    <?php } ?>

                    <div class="row">
                        <div class="col-md-4 animation-fadeInRight">

                            <div class="block">
                                <div class="block-title">
                                    <h2>Information sur l'utilisateur</h2>
                                </div>
                                <div style="text-align: center;" class="animation-fadeIn">
                                    
                                    <img src="<?php echo SITE,FOLDER,ASSETS; ?>img/placeholders/avatars/avatar15@2x.jpg" alt="avatar" class="img-circle"><br>

                                    
                                    <div style="font-size: 25px; font-weight: bold; padding-top: 15px;"><?php echo $donnee_user['nom_user']; ?> <?php echo $donnee_user['prenom_user']; ?></div> 
                                    <div style="font-size: 18px;">
                                        <?php
                                        if($donnee_user['connect'] == 0){echo "<i class='fa fa-circle text-danger'></i> <span class='text-danger'>Déconnecter</span>";}
                                        if($donnee_user['connect'] == 1){echo "<i class='fa fa-circle text-success'></i> <span class='text-success'>Connecter</span>";}
                                        ?>
                                    </div>
                                </div>
                                <!-- Tableau Statistique -->
                                <h2>Chiffres de cette Utilisateur</h2>
                                <div class="table-responsive animation-fadeIn" style="padding-top: 30px;">
                                    <table id="general-table" class="table table-striped table-vcenter">
                                        <tbody>

                                            <tr>
                                                <td>Nombre de Commande:</td>
                                                <td style="text-align: right; font-weight: bold;">
                                                    <?php
                                                    $sql_count_cmd = mysql_query("SELECT COUNT(idcommande) FROM commande WHERE iduser = '$iduser'")or die(mysql_error());
                                                    echo mysql_result($sql_count_cmd, 0);
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Montant total des Commandes:</td>
                                                <td style="text-align: right; font-weight: bold;">
                                                    <?php
                                                    $sql_sum_cmd = mysql_query("SELECT SUM(montant_total) FROM commande WHERE iduser = '$iduser'")or die(mysql_error());
                                                    echo number_format(mysql_result($sql_sum_cmd, 0), 2, ',', ' ')." €";
                                                    ?>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>

                                <h2>Informations et coordonnées de l'utilisateur</h2>

                                <div class="table-responsive animation-fadeIn" style="padding-top: 30px;">
                                    <table id="general-table" class="table table-striped table-vcenter">
                                        <tbody>

                                            <tr>
                                                <td>Groupe:</td>
                                                <td style="text-align: right; font-weight: bold;">
                                                    <?php
                                                    if($donnee_user['groupe'] == 0){echo "<span class='label label-info'>Utilisateur</span>";}
                                                    if($donnee_user['groupe'] == 1){echo "<span class='label label-danger'>Administrateur</span>";}
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Numéro de Téléphone Fixe:</td>
                                                <td style="text-align: right; font-weight: bold;"><?php echo $donnee_user['tel_user']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Numéro de Téléphone Portable:</td>
                                                <td style="text-align: right; font-weight: bold;"><?php echo $donnee_user['port_user']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Date de dernière connexion:</td>
                                                <td style="text-align: right; font-weight: bold;"><?php echo $donnee_user['last_connect']; ?></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>

                            </div>


                        </div>
                        <?php
                        if($donnee_user['groupe'] == 0){
                        ?>
                        <div class="col-md-8 animation-fadeInLeft">
                            <div class="block">
                                <div class="block-title">
                                    <h2>Commande de L'utilisateur</h2>
                                </div>
                                <div class="table-responsive">
                                    <table id="general-table" class="table table-striped table-vcenter">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Numéro de la commande</th>
                                                <th class="text-center">Date de la commande</th>
                                                <th style="text-align: right;">Montant de la commande</th>
                                                <th class="text-center">Etat de la commande</th>  
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql_commande = mysql_query("SELECT * FROM commande WHERE iduser = '$iduser' ORDER BY date_commande DESC")or die(mysql_error());
                                            while($donnee_commande = mysql_fetch_array($sql_commande))
                                            {
                                            ?>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <?php } ?>                                           
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="3" style="text-align: right;">Total des Commandes</td>
                                                <td style="text-align: right;">0,00 €</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <?php } ?>
                        <?php
                        if($donnee_user['groupe'] == 1){
                        ?>
                        <div class="col-md-8 animation-fadeInLeft">
                            <div class="block">
                                <div class="block-title">
                                    <h2>Commande effectuer par l'administrateur</h2>
                                </div>
                                

                            </div>
                        </div>
                        <?php } ?>
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
        <script src="<?php echo SITE,FOLDER,ASSETS; ?>js/pages/tablesGeneral.js"></script>
        <script>$(function(){ TablesGeneral.init(); });</script>
        <script>$(function(){ FormsValidation.init(); });</script>
        <script>$(function(){ CompAnimations.init(); });</script>
        <script>$(function(){ TablesDatatables.init(); });</script>
    </body>
</html>