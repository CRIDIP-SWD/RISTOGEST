<?php include ('../../inc/header.php'); ?>
<?php
$idcommande = $_GET['idcommande'];
$sql_commande = mysql_query("SELECT * FROM commande WHERE idcommande = '$idcommande'")or die(mysql_error());
$donnee_commande = mysql_fetch_array($sql_commande);
?>
<?php
define("TITLE_PAGE", "FICHE COMMANDE".$donnee_commande['num_commande']);
define("SUBTITLE_PAGE", "LISTE DES COMMANDES");
//Breadcumb
$li_start = "<li>".$logiciel."</li>";
$li1 = "<li>COMMANDE</li>";
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
                    <div class="row">
                        <div class="col-md-12">
                            <?php
                                if(isset($_GET['new_commande']) && $_GET['new_commande'] == 'success')
                                {
                            ?>
                                <div class="alert alert-success alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                    <h4><i class="fa fa-check-circle"></i> Succès</h4> La commande à bien été crée !<br>
                                    Veuillez ouvrir la commande et rentrer les produits voulus et la validée.
                                </div>
                            <?php } ?>
                            <?php
                                if(isset($_GET['new_commande']) && $_GET['new_commande'] == 'error')
                                {
                            ?>
                                <div class="alert alert-danger alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                    <h4><i class="fa fa-times-circle"></i> Erreur</h4> Une erreur innatendue c'est produit.<br>
                                    Information sql: <i><?php echo $_GET['error_sql']; ?></i><br>
                                    Debug: <i><?php echo mysql_error(); ?></i><br>
                                    <strong>Veuillez contactez l'administrateur.</strong>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                    <?php
                    if($donnee_commande['etat_commande'] == '0')
                    {
                    ?>
                    <div class="row">
                    	<div class="col-sm-2" data-placement="top" data-toggle="tooltip" data-original-title="Votre commande est créer, ajoutez des produits et validez là !">
                    		<div class="block">
                                <div class="block-title" style="background-color: orange; font-size: 18px; padding-top: 10px; padding-bottom: 10px;">
                                    <div style="color: white; font-weight: bold; text-align: center;"><?php echo $donnee_commande['num_commande']; ?></div>
                                </div>
                                <div class="text-center text-warning" style="position: relative; top: -10px; font-size: 30px; padding-top: 10px; padding-bottom: 10px;"><i class="fa fa-spinner fa-spin text-warning"></i></div>
                            </div>
                    	</div>

                        <div class="col-sm-2">
                            <div class="block">
                                <div class="block-title" style="background-color: grey; font-size: 18px; padding-top: 10px; padding-bottom: 10px;">
                                    <div style="color: white; font-weight: bold; text-align: center;"><i class="fa fa-desktop"></i> PRISE EN CHARGE</div>
                                </div>
                                <div class="text-center text-muted" style="position: relative; top: -10px; font-size: 30px; padding-top: 10px; padding-bottom: 10px;"><i class="fa fa-ellipsis-h text-muted"></i></div>
                            </div>
                        </div>

                        <div class="col-sm-2">
                            <div class="block">
                                <div class="block-title" style="background-color: grey; font-size: 18px; padding-top: 10px; padding-bottom: 10px;">
                                    <div style="color: white; font-weight: bold; text-align: center;"><i class="gi gi-cargo"></i> PRESTATAIRE</div>
                                </div>
                                <div class="text-center text-muted" style="position: relative; top: -10px; font-size: 30px; padding-top: 10px; padding-bottom: 10px;"><i class="fa fa-ellipsis-h text-muted"></i></div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="block">
                                <div class="block-title" style="background-color: grey; font-size: 18px; padding-top: 10px; padding-bottom: 10px;">
                                    <div style="color: white; font-weight: bold; text-align: center;"><i class="gi gi-truck"></i> LIVRAISON</div>
                                </div>
                                <div class="text-center text-muted" style="position: relative; top: -10px; font-size: 30px; padding-top: 10px; padding-bottom: 10px;"><i class="fa fa-ellipsis-h text-muted"></i></div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="block">
                                <div class="block-title" style="background-color: grey; font-size: 18px; padding-top: 10px; padding-bottom: 10px;">
                                    <div style="color: white; font-weight: bold; text-align: center;"><i class="gi gi-ok_2"></i> DISPONIBLE</div>
                                </div>
                                <div class="text-center text-muted" style="position: relative; top: -10px; font-size: 30px; padding-top: 10px; padding-bottom: 10px;"><i class="fa fa-ellipsis-h text-muted"></i></div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-success btn-block"><i class="fa fa-check"></i> Valider votre commande</a>
                        </div>
                    </div>
                    <div style="padding-bottom: 10px;"></div>
                    <?php } ?>

                    <?php
                    if($donnee_commande['etat_commande'] == '1')
                    {
                    ?>
                    <div class="row">
                        <div class="col-sm-2" data-placement="top" data-toggle="tooltip" data-original-title="Votre commande est créer et valider !">
                            <div class="block">
                                <div class="block-title" style="background-color: green; font-size: 18px; padding-top: 10px; padding-bottom: 10px;">
                                    <div style="color: white; font-weight: bold; text-align: center;"><i class="fa fa-check"></i> <?php echo $donnee_commande['num_commande']; ?></div>
                                </div>
                                <div class="text-center text-success" style="position: relative; top: -10px; font-size: 30px; padding-top: 10px; padding-bottom: 10px;"><?php echo $donnee_commande['date_commande']; ?></div>
                            </div>
                        </div>

                        <div class="col-sm-2" data-placement="top" data-toggle="tooltip" data-original-title="Votre commande va être prise en charge par le centre de gestion !">
                            <div class="block">
                                <div class="block-title" style="background-color: orange; font-size: 18px; padding-top: 10px; padding-bottom: 10px;">
                                    <div style="color: white; font-weight: bold; text-align: center;"><i class="fa fa-desktop"></i> PRISE EN CHARGE</div>
                                </div>
                                <div class="text-center text-warning" style="position: relative; top: -10px; font-size: 30px; padding-top: 10px; padding-bottom: 10px;"><i class="fa fa-spinner fa-spin text-warning"></i></div>
                            </div>
                        </div>

                        <div class="col-sm-2">
                            <div class="block">
                                <div class="block-title" style="background-color: grey; font-size: 18px; padding-top: 10px; padding-bottom: 10px;">
                                    <div style="color: white; font-weight: bold; text-align: center;"><i class="gi gi-cargo"></i> PRESTATAIRE</div>
                                </div>
                                <div class="text-center text-muted" style="position: relative; top: -10px; font-size: 30px; padding-top: 10px; padding-bottom: 10px;"><i class="fa fa-ellipsis-h text-muted"></i></div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="block">
                                <div class="block-title" style="background-color: grey; font-size: 18px; padding-top: 10px; padding-bottom: 10px;">
                                    <div style="color: white; font-weight: bold; text-align: center;"><i class="gi gi-truck"></i> LIVRAISON</div>
                                </div>
                                <div class="text-center text-muted" style="position: relative; top: -10px; font-size: 30px; padding-top: 10px; padding-bottom: 10px;"><i class="fa fa-ellipsis-h text-muted"></i></div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="block">
                                <div class="block-title" style="background-color: grey; font-size: 18px; padding-top: 10px; padding-bottom: 10px;">
                                    <div style="color: white; font-weight: bold; text-align: center;"><i class="gi gi-ok_2"></i> DISPONIBLE</div>
                                </div>
                                <div class="text-center text-muted" style="position: relative; top: -10px; font-size: 30px; padding-top: 10px; padding-bottom: 10px;"><i class="fa fa-ellipsis-h text-muted"></i></div>
                            </div>
                        </div>
                        
                    </div>
                    <?php } ?>

                    <?php
                    if($donnee_commande['etat_commande'] == '2')
                    {
                    ?>
                    <div class="row">
                        <div class="col-sm-2" data-placement="top" data-toggle="tooltip" data-original-title="Votre commande est créer et valider">
                            <div class="block">
                                <div class="block-title" style="background-color: green; font-size: 18px; padding-top: 10px; padding-bottom: 10px;">
                                    <div style="color: white; font-weight: bold; text-align: center;"><i class="fa fa-check"></i> <?php echo $donnee_commande['num_commande']; ?></div>
                                </div>
                                <div class="text-center text-success" style="position: relative; top: -10px; font-size: 30px; padding-top: 10px; padding-bottom: 10px;"><?php echo $donnee_commande['date_commande']; ?></div>
                            </div>
                        </div>

                        <div class="col-sm-2" data-placement="top" data-toggle="tooltip" data-original-title="Votre commande est prise en charge par le centre de gestion !">
                            <div class="block">
                                <div class="block-title" style="background-color: green; font-size: 18px; padding-top: 10px; padding-bottom: 10px;">
                                    <div style="color: white; font-weight: bold; text-align: center;"><i class="fa fa-check"></i> PRISE EN CHARGE</div>
                                </div>
                                <div class="text-center text-success" style="position: relative; top: -10px; font-size: 30px; padding-top: 10px; padding-bottom: 10px;"><?php echo $donnee_commande['date_pris_charge']; ?></div>
                            </div>
                        </div>

                        <div class="col-sm-2" data-placement="top" data-toggle="tooltip" data-original-title="Votre commande à été transférer au prestataire en charge de préparer votre commande !">
                            <div class="block">
                                <div class="block-title" style="background-color: orange; font-size: 18px; padding-top: 10px; padding-bottom: 10px;">
                                    <div style="color: white; font-weight: bold; text-align: center;"><i class="gi gi-cargo"></i> PRESTATAIRE</div>
                                </div>
                                <div class="text-center text-warning" style="position: relative; top: -10px; font-size: 30px; padding-top: 10px; padding-bottom: 10px;"><i class="fa fa-spinner fa-spin text-warning"></i></div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="block">
                                <div class="block-title" style="background-color: grey; font-size: 18px; padding-top: 10px; padding-bottom: 10px;">
                                    <div style="color: white; font-weight: bold; text-align: center;"><i class="gi gi-truck"></i> LIVRAISON</div>
                                </div>
                                <div class="text-center text-muted" style="position: relative; top: -10px; font-size: 30px; padding-top: 10px; padding-bottom: 10px;"><i class="fa fa-ellipsis-h text-muted"></i></div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="block">
                                <div class="block-title" style="background-color: grey; font-size: 18px; padding-top: 10px; padding-bottom: 10px;">
                                    <div style="color: white; font-weight: bold; text-align: center;"><i class="gi gi-ok_2"></i> DISPONIBLE</div>
                                </div>
                                <div class="text-center text-muted" style="position: relative; top: -10px; font-size: 30px; padding-top: 10px; padding-bottom: 10px;"><i class="fa fa-ellipsis-h text-muted"></i></div>
                            </div>
                        </div>
                        
                    </div>
                    <?php } ?>

                    <?php
                    if($donnee_commande['etat_commande'] == '3')
                    {
                    ?>
                    <div class="row">
                        <div class="col-sm-2" data-placement="top" data-toggle="tooltip" data-original-title="Votre commande est créer et valider !">
                            <div class="block">
                                <div class="block-title" style="background-color: green; font-size: 18px; padding-top: 10px; padding-bottom: 10px;">
                                    <div style="color: white; font-weight: bold; text-align: center;"><i class="fa fa-check"></i> <?php echo $donnee_commande['num_commande']; ?></div>
                                </div>
                                <div class="text-center text-success" style="position: relative; top: -10px; font-size: 30px; padding-top: 10px; padding-bottom: 10px;"><?php echo $donnee_commande['date_commande']; ?></div>
                            </div>
                        </div>

                        <div class="col-sm-2" data-placement="top" data-toggle="tooltip" data-original-title="Votre commande est prise en charge par le centre de gestion !">
                            <div class="block">
                                <div class="block-title" style="background-color: green; font-size: 18px; padding-top: 10px; padding-bottom: 10px;">
                                    <div style="color: white; font-weight: bold; text-align: center;"><i class="fa fa-check"></i> PRISE EN CHARGE</div>
                                </div>
                                <div class="text-center text-success" style="position: relative; top: -10px; font-size: 30px; padding-top: 10px; padding-bottom: 10px;"><?php echo $donnee_commande['date_pris_charge']; ?></div>
                            </div>
                        </div>

                        <div class="col-sm-2" data-placement="top" data-toggle="tooltip" data-original-title="Votre commande est préparer par le prestataire et est envoyer !">
                            <div class="block">
                                <div class="block-title" style="background-color: green; font-size: 18px; padding-top: 10px; padding-bottom: 10px;">
                                    <div style="color: white; font-weight: bold; text-align: center;"><i class="gi gi-check"></i> PRESTATAIRE</div>
                                </div>
                                <div class="text-center text-success" style="position: relative; top: -10px; font-size: 30px; padding-top: 10px; padding-bottom: 10px;"><?php echo $donnee_commande['date_prestataire']; ?></div>
                            </div>
                        </div>

                        <div class="col-sm-3" data-placement="top" data-toggle="tooltip" data-original-title="Votre commande est en attente de livraison !">
                            <div class="block">
                                <div class="block-title" style="background-color: orange; font-size: 18px; padding-top: 10px; padding-bottom: 10px;">
                                    <div style="color: white; font-weight: bold; text-align: center;"><i class="gi gi-truck"></i> LIVRAISON</div>
                                </div>
                                <div class="text-center text-warning" style="position: relative; top: -10px; font-size: 30px; padding-top: 10px; padding-bottom: 10px;"><i class="fa fa-spinner fa-spin text-warning"></i></div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="block">
                                <div class="block-title" style="background-color: grey; font-size: 18px; padding-top: 10px; padding-bottom: 10px;">
                                    <div style="color: white; font-weight: bold; text-align: center;"><i class="gi gi-ok_2"></i> DISPONIBLE</div>
                                </div>
                                <div class="text-center text-muted" style="position: relative; top: -10px; font-size: 30px; padding-top: 10px; padding-bottom: 10px;"><i class="fa fa-ellipsis-h text-muted"></i></div>
                            </div>
                        </div>
                        
                    </div>
                    <?php } ?>

                    <?php
                    if($donnee_commande['etat_commande'] == '4')
                    {
                    ?>
                    <div class="row">
                        <div class="col-sm-2" data-placement="top" data-toggle="tooltip" data-original-title="Votre commande est créer et valider !">
                            <div class="block">
                                <div class="block-title" style="background-color: green; font-size: 18px; padding-top: 10px; padding-bottom: 10px;">
                                    <div style="color: white; font-weight: bold; text-align: center;"><i class="fa fa-check"></i> <?php echo $donnee_commande['num_commande']; ?></div>
                                </div>
                                <div class="text-center text-success" style="position: relative; top: -10px; font-size: 30px; padding-top: 10px; padding-bottom: 10px;"><?php echo $donnee_commande['date_commande']; ?></div>
                            </div>
                        </div>

                        <div class="col-sm-2" data-placement="top" data-toggle="tooltip" data-original-title="Votre commande est prise en charge par le centre de gestion !">
                            <div class="block">
                                <div class="block-title" style="background-color: green; font-size: 18px; padding-top: 10px; padding-bottom: 10px;">
                                    <div style="color: white; font-weight: bold; text-align: center;"><i class="fa fa-check"></i> PRISE EN CHARGE</div>
                                </div>
                                <div class="text-center text-success" style="position: relative; top: -10px; font-size: 30px; padding-top: 10px; padding-bottom: 10px;"><?php echo $donnee_commande['date_pris_charge']; ?></div>
                            </div>
                        </div>

                        <div class="col-sm-2" data-placement="top" data-toggle="tooltip" data-original-title="Votre commande est préparer par le prestataire et est envoyer !">
                            <div class="block">
                                <div class="block-title" style="background-color: green; font-size: 18px; padding-top: 10px; padding-bottom: 10px;">
                                    <div style="color: white; font-weight: bold; text-align: center;"><i class="gi gi-check"></i> PRESTATAIRE</div>
                                </div>
                                <div class="text-center text-success" style="position: relative; top: -10px; font-size: 30px; padding-top: 10px; padding-bottom: 10px;"><?php echo $donnee_commande['date_prestataire']; ?></div>
                            </div>
                        </div>

                        <div class="col-sm-3" data-placement="top" data-toggle="tooltip" data-original-title="Votre commande est arrivé sur son lieu de livraison !">
                            <div class="block">
                                <div class="block-title" style="background-color: green; font-size: 18px; padding-top: 10px; padding-bottom: 10px;">
                                    <div style="color: white; font-weight: bold; text-align: center;"><i class="gi gi-check"></i> LIVRAISON</div>
                                </div>
                                <div class="text-center text-success" style="position: relative; top: -10px; font-size: 30px; padding-top: 10px; padding-bottom: 10px;"><?php echo $donnee_commande['date_livraison']; ?></div>
                            </div>
                        </div>

                        <div class="col-sm-3" data-placement="top" data-toggle="tooltip" data-original-title="Votre commande est en cours de vérification !">
                            <div class="block">
                                <div class="block-title" style="background-color: orange; font-size: 18px; padding-top: 10px; padding-bottom: 10px;">
                                    <div style="color: white; font-weight: bold; text-align: center;"><i class="gi gi-ok_2"></i> DISPONIBLE</div>
                                </div>
                                <div class="text-center text-warning" style="position: relative; top: -10px; font-size: 30px; padding-top: 10px; padding-bottom: 10px;"><i class="fa fa-spinner fa-spin text-warning"></i></div>
                            </div>
                        </div>
                        
                    </div>
                    <?php } ?>

                    <?php
                    if($donnee_commande['etat_commande'] == '5')
                    {
                    ?>
                    <div class="row">
                        <div class="col-sm-2" data-placement="top" data-toggle="tooltip" data-original-title="Votre commande est créer et valider !">
                            <div class="block">
                                <div class="block-title" style="background-color: green; font-size: 18px; padding-top: 10px; padding-bottom: 10px;">
                                    <div style="color: white; font-weight: bold; text-align: center;"><i class="fa fa-check"></i> <?php echo $donnee_commande['num_commande']; ?></div>
                                </div>
                                <div class="text-center text-success" style="position: relative; top: -10px; font-size: 30px; padding-top: 10px; padding-bottom: 10px;"><?php echo $donnee_commande['date_commande']; ?></div>
                            </div>
                        </div>

                        <div class="col-sm-2" data-placement="top" data-toggle="tooltip" data-original-title="Votre commande est prise en charge par le centre de gestion !">
                            <div class="block">
                                <div class="block-title" style="background-color: green; font-size: 18px; padding-top: 10px; padding-bottom: 10px;">
                                    <div style="color: white; font-weight: bold; text-align: center;"><i class="fa fa-check"></i> PRISE EN CHARGE</div>
                                </div>
                                <div class="text-center text-success" style="position: relative; top: -10px; font-size: 30px; padding-top: 10px; padding-bottom: 10px;"><?php echo $donnee_commande['date_pris_charge']; ?></div>
                            </div>
                        </div>

                        <div class="col-sm-2" data-placement="top" data-toggle="tooltip" data-original-title="Votre commande est préparer par le prestataire et est envoyer !">
                            <div class="block">
                                <div class="block-title" style="background-color: green; font-size: 18px; padding-top: 10px; padding-bottom: 10px;">
                                    <div style="color: white; font-weight: bold; text-align: center;"><i class="gi gi-check"></i> PRESTATAIRE</div>
                                </div>
                                <div class="text-center text-success" style="position: relative; top: -10px; font-size: 30px; padding-top: 10px; padding-bottom: 10px;"><?php echo $donnee_commande['date_prestataire']; ?></div>
                            </div>
                        </div>

                        <div class="col-sm-3" data-placement="top" data-toggle="tooltip" data-original-title="Votre commande est arrivé sur son lieu de livraison !">
                            <div class="block">
                                <div class="block-title" style="background-color: green; font-size: 18px; padding-top: 10px; padding-bottom: 10px;">
                                    <div style="color: white; font-weight: bold; text-align: center;"><i class="gi gi-check"></i> LIVRAISON</div>
                                </div>
                                <div class="text-center text-success" style="position: relative; top: -10px; font-size: 30px; padding-top: 10px; padding-bottom: 10px;"><?php echo $donnee_commande['date_livraison']; ?></div>
                            </div>
                        </div>

                        <div class="col-sm-3" data-placement="top" data-toggle="tooltip" data-original-title="Votre commande à été valider et est disponible au retrait !">
                            <div class="block">
                                <div class="block-title" style="background-color: green; font-size: 18px; padding-top: 10px; padding-bottom: 10px;">
                                    <div style="color: white; font-weight: bold; text-align: center;"><i class="gi gi-ok_2"></i> DISPONIBLE</div>
                                </div>
                                <div class="text-center text-success" style="position: relative; top: -10px; font-size: 30px; padding-top: 10px; padding-bottom: 10px;"><?php echo $donnee_commande['date_disponible']; ?></div>
                            </div>
                        </div>
                        
                    </div>
                    <?php } ?>

                    <?php
                    if($donnee_commande['etat_commande'] == '9')
                    {
                    ?>
                    <div class="row">
                        <div class="col-sm-2" data-placement="top" data-toggle="tooltip" data-original-title="Votre commande est créer et valider !">
                            <div class="block">
                                <div class="block-title" style="background-color: green; font-size: 18px; padding-top: 10px; padding-bottom: 10px;">
                                    <div style="color: white; font-weight: bold; text-align: center;"><i class="fa fa-check"></i> <?php echo $donnee_commande['num_commande']; ?></div>
                                </div>
                                <div class="text-center text-success" style="position: relative; top: -10px; font-size: 30px; padding-top: 10px; padding-bottom: 10px;"><?php echo $donnee_commande['date_commande']; ?></div>
                            </div>
                        </div>

                        <div class="col-sm-2" data-placement="top" data-toggle="tooltip" data-original-title="Votre commande est prise en charge par le centre de gestion !">
                            <div class="block">
                                <div class="block-title" style="background-color: green; font-size: 18px; padding-top: 10px; padding-bottom: 10px;">
                                    <div style="color: white; font-weight: bold; text-align: center;"><i class="fa fa-check"></i> PRISE EN CHARGE</div>
                                </div>
                                <div class="text-center text-success" style="position: relative; top: -10px; font-size: 30px; padding-top: 10px; padding-bottom: 10px;"><?php echo $donnee_commande['date_pris_charge']; ?></div>
                            </div>
                        </div>

                        <div class="col-sm-2" data-placement="top" data-toggle="tooltip" data-original-title="Votre commande est préparer par le prestataire et est envoyer !">
                            <div class="block">
                                <div class="block-title" style="background-color: green; font-size: 18px; padding-top: 10px; padding-bottom: 10px;">
                                    <div style="color: white; font-weight: bold; text-align: center;"><i class="gi gi-check"></i> PRESTATAIRE</div>
                                </div>
                                <div class="text-center text-success" style="position: relative; top: -10px; font-size: 30px; padding-top: 10px; padding-bottom: 10px;"><?php echo $donnee_commande['date_prestataire']; ?></div>
                            </div>
                        </div>

                        <div class="col-sm-3" data-placement="top" data-toggle="tooltip" data-original-title="Votre commande est arrivé sur son lieu de livraison !">
                            <div class="block">
                                <div class="block-title" style="background-color: green; font-size: 18px; padding-top: 10px; padding-bottom: 10px;">
                                    <div style="color: white; font-weight: bold; text-align: center;"><i class="gi gi-check"></i> LIVRAISON</div>
                                </div>
                                <div class="text-center text-success" style="position: relative; top: -10px; font-size: 30px; padding-top: 10px; padding-bottom: 10px;"><?php echo $donnee_commande['date_livraison']; ?></div>
                            </div>
                        </div>

                        <div class="col-sm-3" data-placement="top" data-toggle="tooltip" data-original-title="Une erreur sur votre commande est detecter !">
                            <div class="block">
                                <div class="block-title" style="background-color: red; font-size: 18px; padding-top: 10px; padding-bottom: 10px;">
                                    <div style="color: white; font-weight: bold; text-align: center;"><i class="gi gi-ok_2"></i> DISPONIBLE</div>
                                </div>
                                <div class="text-center text-danger" style="position: relative; top: -10px; font-size: 30px; padding-top: 10px; padding-bottom: 10px;"><i class="gi gi-remove_2 text-danger"></i></div>
                            </div>
                        </div>
                        
                    </div>
                    <?php } ?>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="block">
                                <div class="block-title">
                                    <h2><i class="fa fa-euro"></i> Montant total de votre commande</h2>
                                </div>
                                <div style="font-size: 58px; position: relative; left: 450px; font-weight: bolder;"><?php echo number_format($donnee_commande['montant_total'], 2, ',', ' ')." €"; ?></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="block">
                                <div class="block-title">
                                    <h2><i class="fa fa-euro"></i> Vos Informations</h2>
                                </div>
                                <table style="width: 100%">
                                <?php
                                $sql_salarie = mysql_query("SELECT * FROM salarie WHERE idsalarie = ".$donnee_commande['idsalarie'])or die(mysql_error());
                                while($donnee_salarie = mysql_fetch_array($sql_salarie))
                                {
                                ?>
                                    <tr>
                                        <td>Identité</td>
                                        <td><?php echo $donnee_salarie['nom']; ?> <?php echo $donnee_salarie['prenom']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Adresse</td>
                                        <td>
                                            <?php echo $donnee_salarie['adresse']; ?><br>
                                            <?php echo $donnee_salarie['code_postal']; ?> <?php echo $donnee_salarie['ville']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Coordonnée</td>
                                        <td>
                                            <i class="gi gi-earphone"></i> <?php echo $donnee_salarie['telephone']; ?><br>
                                            <i class="gi gi-envelope"></i> <?php echo $donnee_salarie['email']; ?>
                                        </td>
                                    </tr>
                                <?php 
                                }
                                ?>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <div class="block-title">
                                    <h2><strong>PRODUITS</strong> COMMANDEES</h2>
                                    <div class="block-options pull-right">
                                        <a href="ajout.produit.php?idcommande=<?php echo $idcommande; ?>" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Ajouter un produit</a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="general-table" class="table table-striped table-vcenter">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Nom du Produit</th>
                                                <th class="text-center">Famille Produit</th>
                                                <th class="text-center">QTY</th>
                                                <th class="text-center">PRIX UNITAIRE</th>
                                                <th class="text-center">PRIX TOTAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $sql_commande_produit = mysql_query("SELECT * FROM commande_produit, commande, famille_produit, produit WHERE commande_produit.idcommande = commande.idcommande
                                            AND commande_produit.idfamilleproduit = famille_produit.idfamilleproduit
                                            AND commande_produit.idproduit = produit.idproduit
                                            AND commande_produit.idcommande = '$idcommande'");
                                        while($donnee_commande_produit = mysql_fetch_array($sql_commande_produit))
                                        {
                                        ?>
                                            <tr>
                                                <td>
                                                    <?php echo $donnee_commande_produit['designation_produit']; ?><br>
                                                    <h5><i><?php echo $donnee_commande_produit['description_produit']; ?></i></h5>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $donnee_commande_produit['designation']; ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $donnee_commande_produit['qte']; ?>
                                                </td>
                                                <td class="text-right">
                                                    <?php echo number_format($donnee_commande_produit['prix_unitaire'], 2, ',', ' ')." €"; ?>
                                                </td>
                                                <td class="text-right">
                                                    <?php
                                                        $calc_prix_total = $donnee_commande_produit['prix_unitaire']*$donnee_commande_produit['qte'];
                                                        echo number_format($calc_prix_total, 2, ',', ' ')." €";
                                                    ?>
                                                </td>
                                                <td class="text-center">
                                                    <a class="btn btn-danger btn-xs" href="<?php echo SITE,FOLDER; ?>inc/control/commande.php?suppression_produit=true&idcommandeproduit=<?php echo $donnee_commande_produit['idcommandeproduit']; ?>&idcommande=<?php echo $idcommande; ?>" data-placement="top" data-toggle="tooltip" data-original-title="Suppression du produit"><i class="fa fa-times-circle"></i></a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                            <tr>
                                                <td class="text-right text-uppercase" colspan="4">MONTANT TOTAL</td>
                                                <td class="text-right"><?php echo number_format($donnee_commande['montant_total'], 2, ',', ' ')." €"; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
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
        

        <script src="<?php echo SITE,FOLDER,ASSETS; ?>js/pages/compAnimations.js"></script>
        <script src="<?php echo SITE,FOLDER,ASSETS; ?>js/pages/tablesGeneral.js"></script>
        <script>$(function(){ TablesGeneral.init(); });</script>
        <script>$(function(){ CompAnimations.init(); });</script>
    </body>
</html>