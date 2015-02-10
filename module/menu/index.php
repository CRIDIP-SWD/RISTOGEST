<?php include ('../../inc/header.php'); ?>
<?php
define("TITLE_PAGE", "MENU");
define("SUBTITLE_PAGE", "");
define("TITLE_ICON", "gi gi-cutlery");
//Breadcumb
$li_start = "<li>".LOGICIEL."</li>";
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
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">ID</th>
                                            <th class="text-center"><i class="gi gi-user"></i></th>
                                            <th>Client</th>
                                            <th>Email</th>
                                            <th>Subscription</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar5.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client1</a></td>
                                            <td>client1@company.com</td>
                                            <td><span class="label label-primary">Personal</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar3.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client2</a></td>
                                            <td>client2@company.com</td>
                                            <td><span class="label label-warning">Trial</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar9.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client3</a></td>
                                            <td>client3@company.com</td>
                                            <td><span class="label label-success">VIP</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar5.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client4</a></td>
                                            <td>client4@company.com</td>
                                            <td><span class="label label-warning">Trial</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar10.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client5</a></td>
                                            <td>client5@company.com</td>
                                            <td><span class="label label-primary">Personal</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">6</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar1.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client6</a></td>
                                            <td>client6@company.com</td>
                                            <td><span class="label label-primary">Personal</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">7</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar1.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client7</a></td>
                                            <td>client7@company.com</td>
                                            <td><span class="label label-info">Business</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">8</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar12.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client8</a></td>
                                            <td>client8@company.com</td>
                                            <td><span class="label label-primary">Personal</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">9</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar13.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client9</a></td>
                                            <td>client9@company.com</td>
                                            <td><span class="label label-warning">Trial</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">10</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar1.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client10</a></td>
                                            <td>client10@company.com</td>
                                            <td><span class="label label-primary">Personal</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">11</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar5.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client11</a></td>
                                            <td>client11@company.com</td>
                                            <td><span class="label label-info">Business</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">12</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar2.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client12</a></td>
                                            <td>client12@company.com</td>
                                            <td><span class="label label-primary">Personal</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">13</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar9.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client13</a></td>
                                            <td>client13@company.com</td>
                                            <td><span class="label label-primary">Personal</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">14</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar13.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client14</a></td>
                                            <td>client14@company.com</td>
                                            <td><span class="label label-success">VIP</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">15</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar1.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client15</a></td>
                                            <td>client15@company.com</td>
                                            <td><span class="label label-success">VIP</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">16</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar3.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client16</a></td>
                                            <td>client16@company.com</td>
                                            <td><span class="label label-warning">Trial</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">17</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar11.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client17</a></td>
                                            <td>client17@company.com</td>
                                            <td><span class="label label-success">VIP</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">18</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar2.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client18</a></td>
                                            <td>client18@company.com</td>
                                            <td><span class="label label-success">VIP</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">19</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar16.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client19</a></td>
                                            <td>client19@company.com</td>
                                            <td><span class="label label-info">Business</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">20</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar12.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client20</a></td>
                                            <td>client20@company.com</td>
                                            <td><span class="label label-warning">Trial</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">21</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar15.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client21</a></td>
                                            <td>client21@company.com</td>
                                            <td><span class="label label-primary">Personal</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">22</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar12.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client22</a></td>
                                            <td>client22@company.com</td>
                                            <td><span class="label label-info">Business</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">23</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar16.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client23</a></td>
                                            <td>client23@company.com</td>
                                            <td><span class="label label-primary">Personal</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">24</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar6.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client24</a></td>
                                            <td>client24@company.com</td>
                                            <td><span class="label label-info">Business</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">25</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar1.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client25</a></td>
                                            <td>client25@company.com</td>
                                            <td><span class="label label-info">Business</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">26</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar7.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client26</a></td>
                                            <td>client26@company.com</td>
                                            <td><span class="label label-primary">Personal</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">27</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar11.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client27</a></td>
                                            <td>client27@company.com</td>
                                            <td><span class="label label-warning">Trial</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">28</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar16.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client28</a></td>
                                            <td>client28@company.com</td>
                                            <td><span class="label label-info">Business</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">29</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar13.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client29</a></td>
                                            <td>client29@company.com</td>
                                            <td><span class="label label-primary">Personal</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">30</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar14.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client30</a></td>
                                            <td>client30@company.com</td>
                                            <td><span class="label label-info">Business</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">31</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar15.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client31</a></td>
                                            <td>client31@company.com</td>
                                            <td><span class="label label-warning">Trial</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">32</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar5.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client32</a></td>
                                            <td>client32@company.com</td>
                                            <td><span class="label label-info">Business</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">33</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar15.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client33</a></td>
                                            <td>client33@company.com</td>
                                            <td><span class="label label-warning">Trial</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">34</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar15.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client34</a></td>
                                            <td>client34@company.com</td>
                                            <td><span class="label label-warning">Trial</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">35</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar6.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client35</a></td>
                                            <td>client35@company.com</td>
                                            <td><span class="label label-success">VIP</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">36</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar16.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client36</a></td>
                                            <td>client36@company.com</td>
                                            <td><span class="label label-info">Business</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">37</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar3.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client37</a></td>
                                            <td>client37@company.com</td>
                                            <td><span class="label label-warning">Trial</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">38</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar5.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client38</a></td>
                                            <td>client38@company.com</td>
                                            <td><span class="label label-info">Business</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">39</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar13.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client39</a></td>
                                            <td>client39@company.com</td>
                                            <td><span class="label label-primary">Personal</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">40</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar15.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client40</a></td>
                                            <td>client40@company.com</td>
                                            <td><span class="label label-warning">Trial</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">41</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar4.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client41</a></td>
                                            <td>client41@company.com</td>
                                            <td><span class="label label-info">Business</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">42</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar11.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client42</a></td>
                                            <td>client42@company.com</td>
                                            <td><span class="label label-warning">Trial</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">43</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar16.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client43</a></td>
                                            <td>client43@company.com</td>
                                            <td><span class="label label-warning">Trial</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">44</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar12.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client44</a></td>
                                            <td>client44@company.com</td>
                                            <td><span class="label label-primary">Personal</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">45</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar16.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client45</a></td>
                                            <td>client45@company.com</td>
                                            <td><span class="label label-info">Business</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">46</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar14.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client46</a></td>
                                            <td>client46@company.com</td>
                                            <td><span class="label label-success">VIP</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">47</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar11.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client47</a></td>
                                            <td>client47@company.com</td>
                                            <td><span class="label label-warning">Trial</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">48</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar4.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client48</a></td>
                                            <td>client48@company.com</td>
                                            <td><span class="label label-info">Business</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">49</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar1.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client49</a></td>
                                            <td>client49@company.com</td>
                                            <td><span class="label label-success">VIP</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">50</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar10.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client50</a></td>
                                            <td>client50@company.com</td>
                                            <td><span class="label label-warning">Trial</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">51</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar10.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client51</a></td>
                                            <td>client51@company.com</td>
                                            <td><span class="label label-success">VIP</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">52</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar3.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client52</a></td>
                                            <td>client52@company.com</td>
                                            <td><span class="label label-success">VIP</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">53</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar4.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client53</a></td>
                                            <td>client53@company.com</td>
                                            <td><span class="label label-primary">Personal</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">54</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar11.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client54</a></td>
                                            <td>client54@company.com</td>
                                            <td><span class="label label-primary">Personal</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">55</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar8.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client55</a></td>
                                            <td>client55@company.com</td>
                                            <td><span class="label label-primary">Personal</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">56</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar5.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client56</a></td>
                                            <td>client56@company.com</td>
                                            <td><span class="label label-info">Business</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">57</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar5.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client57</a></td>
                                            <td>client57@company.com</td>
                                            <td><span class="label label-warning">Trial</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">58</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar13.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client58</a></td>
                                            <td>client58@company.com</td>
                                            <td><span class="label label-primary">Personal</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">59</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar3.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client59</a></td>
                                            <td>client59@company.com</td>
                                            <td><span class="label label-success">VIP</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">60</td>
                                            <td class="text-center"><img src="img/placeholders/avatars/avatar6.jpg" alt="avatar" class="img-circle"></td>
                                            <td><a href="javascript:void(0)">client60</a></td>
                                            <td>client60@company.com</td>
                                            <td><span class="label label-success">VIP</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
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