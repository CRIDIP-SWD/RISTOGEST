<?php
include ('../../inc/header.php');
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
                            <img src="img/placeholders/avatars/avatar2.jpg" alt="Avatar" class="pull-right img-circle">
                            <h1>John Doe <br><small>Life Explorer &amp; Traveller</small></h1>
                        </div>
                        <!-- For best results use an image with a resolution of 2560x248 pixels (You can also use a blurred image with ratio 10:1 - eg: 1000x100 pixels - it will adjust and look great!) -->
                        <img src="img/placeholders/headers/profile_header.jpg" alt="header image" class="animation-pulseSlow">
                    </div>
                    <!-- END User Profile Header -->

                    <!-- User Profile Content -->
                    <div class="row">
                        <!-- First Column -->
                        <div class="col-md-6 col-lg-7">
                            <!-- Updates Block -->
                            <div class="block">
                                <!-- Updates Title -->
                                <div class="block-title">
                                    <div class="block-options pull-right">
                                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Privacy Settings"><i class="fa fa-cog"></i></a>
                                    </div>
                                    <h2><strong>Share</strong> something..</h2>
                                </div>
                                <!-- END Updates Title -->

                                <!-- Update Status Form -->
                                <form action="page_ready_user_profile.html" method="post" class="block-content-full block-content-mini-padding" onsubmit="return false;">
                                    <textarea id="default-textarea" name="default-textarea" rows="2" class="form-control push-bit" placeholder="What are you thinking?"></textarea>
                                    <div class="clearfix">
                                        <button type="submit" class="btn btn-sm btn-primary pull-right"><i class="fa fa-pencil"></i> Post</button>
                                        <a href="javascript:void(0)" class="btn btn-link btn-icon" data-toggle="tooltip" data-placement="bottom" title="Add Location"><i class="fa fa-location-arrow"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-link btn-icon" data-toggle="tooltip" data-placement="bottom" title="Add Voice"><i class="fa fa-microphone"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-link btn-icon" data-toggle="tooltip" data-placement="bottom" title="Add Photo"><i class="fa fa-camera"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-link btn-icon" data-toggle="tooltip" data-placement="bottom" title="Add File"><i class="fa fa-file"></i></a>
                                    </div>
                                </form>
                                <!-- END Update Status Form -->
                            </div>
                            <!-- END Updates Block -->

                            <!-- Newsfeed Block -->
                            <div class="block">
                                <!-- Newsfeed Title -->
                                <div class="block-title">
                                    <div class="block-options pull-right">
                                        <a href="javascript:void(0)" class="label label-danger animation-pulse">Live Feed</a>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Customize Feed"><i class="fa fa-pencil"></i></a>
                                    </div>
                                    <h2><strong>Newsfeed</strong></h2>
                                </div>
                                <!-- END Newsfeed Title -->

                                <!-- Newsfeed Content -->
                                <div class="block-content-full">
                                    <!-- You can remove the class .media-feed-hover if you don't want each event to be highlighted on mouse hover -->
                                    <ul class="media-list media-feed media-feed-hover">
                                        <!-- Photos Uploaded -->
                                        <!-- Example effect of the following update showing up in Newsfeed (initialized in js/pages/readyProfile.js) -->
                                        <li id="newsfeed-update-example" class="media display-none">
                                            <a href="page_ready_user_profile.html" class="pull-left">
                                                <img src="img/placeholders/avatars/avatar15.jpg" alt="Avatar" class="img-circle">
                                            </a>
                                            <div class="media-body">
                                                <p class="push-bit">
                                                    <span class="text-muted pull-right">
                                                        <small>just now</small>
                                                        <span class="text-success" data-toggle="tooltip" title="From Mobile"><i class="fa fa-mobile"></i></span>
                                                    </span>
                                                    <strong><a href="page_ready_user_profile.html">User</a> uploaded 2 new photos.</strong>
                                                </p>
                                                <div class="row push">
                                                    <div class="col-sm-6 col-md-4">
                                                        <a href="img/placeholders/photos/photo13.jpg" data-toggle="lightbox-image">
                                                            <img src="img/placeholders/photos/photo13.jpg" alt="image">
                                                        </a>
                                                    </div>
                                                    <div class="col-sm-6 col-md-4">
                                                        <a href="img/placeholders/photos/photo23.jpg" data-toggle="lightbox-image">
                                                            <img src="img/placeholders/photos/photo23.jpg" alt="image">
                                                        </a>
                                                    </div>
                                                </div>
                                                <p>
                                                    <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-thumbs-o-up"></i> Like</a>
                                                    <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-comments-o"></i> Comment</a>
                                                    <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-share-square-o"></i> Share</a>
                                                </p>
                                            </div>
                                        </li>
                                        <!-- END Photos Uploaded -->

                                        <!-- Story Published -->
                                        <li class="media">
                                            <a href="page_ready_user_profile.html" class="pull-left">
                                                <img src="img/placeholders/avatars/avatar16.jpg" alt="Avatar" class="img-circle">
                                            </a>
                                            <div class="media-body">
                                                <p class="push-bit">
                                                    <span class="text-muted pull-right">
                                                        <small>45 min now</small>
                                                        <span class="text-danger" data-toggle="tooltip" title="From Web"><i class="fa fa-globe"></i></span>
                                                    </span>
                                                    <strong><a href="page_ready_user_profile.html">Explorer</a> published a new story.</strong>
                                                </p>
                                                <h5><a href="page_ready_article.html"><strong>The Mountain Trip</strong> &bull; Once in a lifetime experience</a></h5>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti..</p>
                                                <p>
                                                    <a href="javascript:void(0)" class="btn btn-xs btn-success"><i class="fa fa-thumbs-up"></i> You Like it</a>
                                                    <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-share-square-o"></i> Share</a>
                                                </p>

                                                <!-- Comments -->
                                                <ul class="media-list push">
                                                    <li class="media">
                                                        <a href="page_ready_user_profile.html" class="pull-left">
                                                            <img src="img/placeholders/avatars/avatar6.jpg" alt="Avatar" class="img-circle">
                                                        </a>
                                                        <div class="media-body">
                                                            <a href="page_ready_user_profile.html"><strong>User</strong></a>
                                                            <span class="text-muted"><small><em>29 min ago</em></small></span>
                                                            <p>Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum.</p>
                                                        </div>
                                                    </li>
                                                    <li class="media">
                                                        <a href="page_ready_user_profile.html" class="pull-left">
                                                            <img src="img/placeholders/avatars/avatar2.jpg" alt="Avatar" class="img-circle">
                                                        </a>
                                                        <div class="media-body">
                                                            <a href="page_ready_user_profile.html"><strong>User</strong></a>
                                                            <span class="text-muted"><small><em>18 min ago</em></small></span>
                                                            <p>In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend</p>
                                                        </div>
                                                    </li>
                                                    <li class="media">
                                                        <a href="page_ready_user_profile.html" class="pull-left">
                                                            <img src="img/placeholders/avatars/avatar.jpg" alt="Avatar" class="img-circle">
                                                        </a>
                                                        <div class="media-body">
                                                            <form action="page_ready_user_profile.html" method="post" onsubmit="return false;">
                                                                <textarea id="profile-newsfeed-comment1" name="profile-newsfeed-comment1" class="form-control" rows="2" placeholder="Your comment.."></textarea>
                                                                <button type="submit" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Post Comment</button>
                                                            </form>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <!-- END Comments -->
                                            </div>
                                        </li>
                                        <!-- END Story Published -->

                                        <!-- Check in -->
                                        <li class="media">
                                            <a href="page_ready_user_profile.html" class="pull-left">
                                                <img src="img/placeholders/avatars/avatar11.jpg" alt="Avatar" class="img-circle">
                                            </a>
                                            <div class="media-body">
                                                <p class="push-bit">
                                                    <span class="text-muted pull-right">
                                                        <small>1 hour ago</small>
                                                        <span class="text-success" data-toggle="tooltip" title="From Mobile"><i class="fa fa-mobile"></i></span>
                                                    </span>
                                                    <strong><a href="page_ready_user_profile.html">Adventurer</a> checked in at <a href="javascript:void(0)">Cafe-Bar</a>.</strong>
                                                </p>
                                                <div id="gmap-checkin" class="gmap push"></div>
                                                <p>
                                                    <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-thumbs-o-up"></i> Like</a>
                                                    <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-comments-o"></i> Comment</a>
                                                    <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-share-square-o"></i> Share</a>
                                                </p>
                                            </div>
                                        </li>
                                        <!-- END Check in -->

                                        <!-- Status Updated -->
                                        <li class="media">
                                            <a href="page_ready_user_profile.html" class="pull-left">
                                                <img src="img/placeholders/avatars/avatar8.jpg" alt="Avatar" class="img-circle">
                                            </a>
                                            <div class="media-body">
                                                <p class="push-bit">
                                                    <span class="text-muted pull-right">
                                                        <small>5 hours ago</small>
                                                        <span class="text-info" data-toggle="tooltip" title="From Custom App"><i class="fa fa-wrench"></i></span>
                                                    </span>
                                                    <strong><a href="page_ready_user_profile.html">User</a> updated status.</strong>
                                                </p>
                                                <p>Hey there! First post from the new application!</p>
                                                <p>
                                                    <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-thumbs-o-up"></i> Like</a>
                                                    <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-share-square-o"></i> Share</a>
                                                </p>
                                                <!-- Comments -->
                                                <ul class="media-list push">
                                                    <li class="media">
                                                        <a href="page_ready_user_profile.html" class="pull-left">
                                                            <img src="img/placeholders/avatars/avatar16.jpg" alt="Avatar" class="img-circle">
                                                        </a>
                                                        <div class="media-body">
                                                            <a href="page_ready_user_profile.html"><strong>User</strong></a>
                                                            <span class="text-muted"><small><em>1 hour ago</em></small></span>
                                                            <p>Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum.</p>
                                                        </div>
                                                    </li>
                                                    <li class="media">
                                                        <a href="page_ready_user_profile.html" class="pull-left">
                                                            <img src="img/placeholders/avatars/avatar.jpg" alt="Avatar" class="img-circle">
                                                        </a>
                                                        <div class="media-body">
                                                            <form action="page_ready_user_profile.html" method="post" onsubmit="return false;">
                                                                <textarea id="profile-newsfeed-comment" name="profile-newsfeed-comment" class="form-control" rows="2" placeholder="Your comment.."></textarea>
                                                                <button type="submit" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Post Comment</button>
                                                            </form>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <!-- END Comments -->
                                            </div>
                                        </li>
                                        <li class="media text-center">
                                            <a href="javascript:void(0)" class="btn btn-xs btn-default push">View more..</a>
                                        </li>
                                        <!-- END Status Updated -->
                                    </ul>
                                </div>
                                <!-- END Newsfeed Content -->
                            </div>
                            <!-- END Newsfeed Block -->
                        </div>
                        <!-- END First Column -->

                        <!-- Second Column -->
                        <div class="col-md-6 col-lg-5">
                            <!-- Info Block -->
                            <div class="block">
                                <!-- Info Title -->
                                <div class="block-title">
                                    <div class="block-options pull-right">
                                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Friend Request"><i class="fa fa-plus"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Hire"><i class="fa fa-briefcase"></i></a>
                                    </div>
                                    <h2>About <strong>John Doe</strong> <small>&bull; <i class="fa fa-file-text text-primary"></i> <a href="javascript:void(0)" data-toggle="tooltip" title="Download Bio in PDF">Bio</a></small></h2>
                                </div>
                                <!-- END Info Title -->

                                <!-- Info Content -->
                                <table class="table table-borderless table-striped">
                                    <tbody>
                                        <tr>
                                            <td style="width: 20%;"><strong>Info</strong></td>
                                            <td>Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Founder</strong></td>
                                            <td><a href="javascript:void(0)">Company Inc</a></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Education</strong></td>
                                            <td><a href="javascript:void(0)">University Name</a></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Projects</strong></td>
                                            <td><a href="javascript:void(0)" class="label label-danger">168</a></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Best Skills</strong></td>
                                            <td>
                                                <a href="javascript:void(0)" class="label label-info">HTML</a>
                                                <a href="javascript:void(0)" class="label label-info">CSS</a>
                                                <a href="javascript:void(0)" class="label label-info">Javascript</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- END Info Content -->
                            </div>
                            <!-- END Info Block -->

                            <!-- Photos Block -->
                            <div class="block">
                                <!-- Photos Title -->
                                <div class="block-title">
                                    <div class="block-options pull-right">
                                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                    </div>
                                    <h2>Best <strong>Photos</strong> <small>&bull; <a href="javascript:void(0)">25 Albums</a></small></h2>
                                </div>
                                <!-- END Photos Title -->

                                <!-- Photos Content -->
                                <div class="gallery" data-toggle="lightbox-gallery">
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-3">
                                            <a href="img/placeholders/photos/phot12.jpg" class="gallery-link" title="Image Info">
                                                <img src="img/placeholders/photos/photo12.jpg" alt="image">
                                            </a>
                                        </div>
                                        <div class="col-xs-6 col-sm-3">
                                            <a href="img/placeholders/photos/photo15.jpg" class="gallery-link" title="Image Info">
                                                <img src="img/placeholders/photos/photo15.jpg" alt="image">
                                            </a>
                                        </div>
                                        <div class="col-xs-6 col-sm-3">
                                            <a href="img/placeholders/photos/photo3.jpg" class="gallery-link" title="Image Info">
                                                <img src="img/placeholders/photos/photo3.jpg" alt="image">
                                            </a>
                                        </div>
                                        <div class="col-xs-6 col-sm-3">
                                            <a href="img/placeholders/photos/photo4.jpg" class="gallery-link" title="Image Info">
                                                <img src="img/placeholders/photos/photo4.jpg" alt="image">
                                            </a>
                                        </div>
                                        <div class="col-xs-6 col-sm-3">
                                            <a href="img/placeholders/photos/photo5.jpg" class="gallery-link" title="Image Info">
                                                <img src="img/placeholders/photos/photo5.jpg" alt="image">
                                            </a>
                                        </div>
                                        <div class="col-xs-6 col-sm-3">
                                            <a href="img/placeholders/photos/photo6.jpg" class="gallery-link" title="Image Info">
                                                <img src="img/placeholders/photos/photo6.jpg" alt="image">
                                            </a>
                                        </div>
                                        <div class="col-xs-6 col-sm-3">
                                            <a href="img/placeholders/photos/photo20.jpg" class="gallery-link" title="Image Info">
                                                <img src="img/placeholders/photos/photo20.jpg" alt="image">
                                            </a>
                                        </div>
                                        <div class="col-xs-6 col-sm-3">
                                            <a href="img/placeholders/photos/photo17.jpg" class="gallery-link" title="Image Info">
                                                <img src="img/placeholders/photos/photo17.jpg" alt="image">
                                            </a>
                                        </div>
                                        <div class="col-xs-6 col-sm-3">
                                            <a href="img/placeholders/photos/photo14.jpg" class="gallery-link" title="Image Info">
                                                <img src="img/placeholders/photos/photo14.jpg" alt="image">
                                            </a>
                                        </div>
                                        <div class="col-xs-6 col-sm-3">
                                            <a href="img/placeholders/photos/photo9.jpg" class="gallery-link" title="Image Info">
                                                <img src="img/placeholders/photos/photo9.jpg" alt="image">
                                            </a>
                                        </div>
                                        <div class="col-xs-6 col-sm-3">
                                            <a href="img/placeholders/photos/photo11.jpg" class="gallery-link" title="Image Info">
                                                <img src="img/placeholders/photos/photo11.jpg" alt="image">
                                            </a>
                                        </div>
                                        <div class="col-xs-6 col-sm-3">
                                            <a href="img/placeholders/photos/photo10.jpg" class="gallery-link" title="Image Info">
                                                <img src="img/placeholders/photos/photo10.jpg" alt="image">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Photos Content -->
                            </div>
                            <!-- END Photos Block -->

                            <!-- Friends Block -->
                            <div class="block">
                                <!-- Friends Title -->
                                <div class="block-title">
                                    <h2>New <strong>Friends</strong> <small>&bull; <a href="javascript:void(0)">450</a></small></h2>
                                </div>
                                <!-- END Friends Title -->

                                <!-- Friends Content -->
                                <div class="row text-center">
                                    <div class="col-xs-4 col-sm-3 col-lg-2 block-section">
                                        <a href="javascript:void(0)">
                                            <img src="img/placeholders/avatars/avatar12.jpg" alt="image" class="img-circle" data-toggle="tooltip" title="Username">
                                        </a>
                                    </div>
                                    <div class="col-xs-4 col-sm-3 col-lg-2 block-section">
                                        <a href="javascript:void(0)">
                                            <img src="img/placeholders/avatars/avatar5.jpg" alt="image" class="img-circle" data-toggle="tooltip" title="Username">
                                        </a>
                                    </div>
                                    <div class="col-xs-4 col-sm-3 col-lg-2 block-section">
                                        <a href="javascript:void(0)">
                                            <img src="img/placeholders/avatars/avatar2.jpg" alt="image" class="img-circle" data-toggle="tooltip" title="Username">
                                        </a>
                                    </div>
                                    <div class="col-xs-4 col-sm-3 col-lg-2 block-section">
                                        <a href="javascript:void(0)">
                                            <img src="img/placeholders/avatars/avatar5.jpg" alt="image" class="img-circle" data-toggle="tooltip" title="Username">
                                        </a>
                                    </div>
                                    <div class="col-xs-4 col-sm-3 col-lg-2 block-section">
                                        <a href="javascript:void(0)">
                                            <img src="img/placeholders/avatars/avatar3.jpg" alt="image" class="img-circle" data-toggle="tooltip" title="Username">
                                        </a>
                                    </div>
                                    <div class="col-xs-4 col-sm-3 col-lg-2 block-section">
                                        <a href="javascript:void(0)">
                                            <img src="img/placeholders/avatars/avatar11.jpg" alt="image" class="img-circle" data-toggle="tooltip" title="Username">
                                        </a>
                                    </div>
                                    <div class="col-xs-4 col-sm-3 col-lg-2 block-section">
                                        <a href="javascript:void(0)">
                                            <img src="img/placeholders/avatars/avatar9.jpg" alt="image" class="img-circle" data-toggle="tooltip" title="Username">
                                        </a>
                                    </div>
                                    <div class="col-xs-4 col-sm-3 col-lg-2 block-section">
                                        <a href="javascript:void(0)">
                                            <img src="img/placeholders/avatars/avatar3.jpg" alt="image" class="img-circle" data-toggle="tooltip" title="Username">
                                        </a>
                                    </div>
                                    <div class="col-xs-4 col-sm-3 col-lg-2 block-section">
                                        <a href="javascript:void(0)">
                                            <img src="img/placeholders/avatars/avatar1.jpg" alt="image" class="img-circle" data-toggle="tooltip" title="Username">
                                        </a>
                                    </div>
                                    <div class="col-xs-4 col-sm-3 col-lg-2 block-section">
                                        <a href="javascript:void(0)">
                                            <img src="img/placeholders/avatars/avatar16.jpg" alt="image" class="img-circle" data-toggle="tooltip" title="Username">
                                        </a>
                                    </div>
                                    <div class="col-xs-4 col-sm-3 col-lg-2 block-section">
                                        <a href="javascript:void(0)">
                                            <img src="img/placeholders/avatars/avatar16.jpg" alt="image" class="img-circle" data-toggle="tooltip" title="Username">
                                        </a>
                                    </div>
                                    <div class="col-xs-4 col-sm-3 col-lg-2 block-section">
                                        <a href="javascript:void(0)">
                                            <img src="img/placeholders/avatars/avatar10.jpg" alt="image" class="img-circle" data-toggle="tooltip" title="Username">
                                        </a>
                                    </div>
                                </div>
                                <!-- END Friends Content -->
                            </div>
                            <!-- END Friends Block -->

                            <!-- Twitter Block -->
                            <div class="block full">
                                <!-- Twitter Title -->
                                <div class="block-title">
                                    <div class="block-options pull-right">
                                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                    </div>
                                    <h2>Twitter <strong>Feed</strong></h2>
                                </div>
                                <!-- END Twitter Title -->

                                <!-- Twitter Content -->
                                <div class="block-top block-content-mini-padding">
                                    <form action="page_ready_user_profile.html" method="post" onsubmit="return false;">
                                        <textarea id="profile-tweet" name="profile-tweet" class="form-control push-bit" rows="3" placeholder="Share something on Twitter.."></textarea>
                                        <div class="clearfix">
                                            <button type="submit" class="btn btn-sm btn-primary pull-right"><i class="fa fa-twitter"></i> Tweet</button>
                                            <a href="javascript:void(0)" class="btn btn-link btn-icon" data-toggle="tooltip" data-placement="bottom" title="Add Location"><i class="fa fa-location-arrow"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-link btn-icon" data-toggle="tooltip" data-placement="bottom" title="Add Photo"><i class="fa fa-camera"></i></a>
                                        </div>
                                    </form>
                                </div>
                                <ul class="media-list">
                                    <li class="media">
                                        <a href="page_ready_user_profile.html" class="pull-left">
                                            <img src="img/placeholders/avatars/avatar2.jpg" alt="Avatar" class="img-circle">
                                        </a>
                                        <div class="media-body">
                                            <span class="text-muted pull-right"><small><em>30 min ago</em></small></span>
                                            <a href="page_ready_user_profile.html"><strong>John Doe</strong></a>
                                            <p>In hac <a href="javascript:void(0)">habitasse</a> platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. <a href="javascript:void(0)" class="text-danger"><strong>#dev</strong></a></p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <a href="page_ready_user_profile.html" class="pull-left">
                                            <img src="img/placeholders/avatars/avatar2.jpg" alt="Avatar" class="img-circle">
                                        </a>
                                        <div class="media-body">
                                            <span class="text-muted pull-right"><small><em>3 hours ago</em></small></span>
                                            <a href="page_ready_user_profile.html"><strong>John Doe</strong></a>
                                            <p>Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum.</p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <a href="page_ready_user_profile.html" class="pull-left">
                                            <img src="img/placeholders/avatars/avatar2.jpg" alt="Avatar" class="img-circle">
                                        </a>
                                        <div class="media-body">
                                            <span class="text-muted pull-right"><small><em>yesterday</em></small></span>
                                            <a href="page_ready_user_profile.html"><strong>John Doe</strong></a>
                                            <p>In hac habitasse platea dictumst. Proin ac nibh rutrum <a href="javascript:void(0)">lectus</a> rhoncus eleifend <a href="javascript:void(0)" class="text-danger"><strong>#design</strong></a></p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <a href="page_ready_user_profile.html" class="pull-left">
                                            <img src="img/placeholders/avatars/avatar2.jpg" alt="Avatar" class="img-circle">
                                        </a>
                                        <div class="media-body">
                                            <span class="text-muted pull-right"><small><em>2 days ago</em></small></span>
                                            <a href="page_ready_user_profile.html"><strong>John Doe</strong></a>
                                            <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend.</p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <a href="page_ready_user_profile.html" class="pull-left">
                                            <img src="img/placeholders/avatars/avatar2.jpg" alt="Avatar" class="img-circle">
                                        </a>
                                        <div class="media-body">
                                            <span class="text-muted pull-right"><small><em>3 days ago</em></small></span>
                                            <a href="page_ready_user_profile.html"><strong>John Doe</strong></a>
                                            <p>In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend.</p>
                                        </div>
                                    </li>
                                </ul>
                                <!-- END Twitter Content -->
                            </div>
                            <!-- END Twitter Block -->
                        </div>
                        <!-- END Second Column -->
                    </div>
                    <!-- END User Profile Content -->
                </div>
                <!-- END Page Content -->

                <!-- Footer -->
                <footer class="clearfix">
                    <div class="pull-right">
                        Crafted with <i class="fa fa-heart text-danger"></i> by <a href="http://goo.gl/vNS3I" target="_blank">pixelcave</a>
                    </div>
                    <div class="pull-left">
                        <span id="year-copy"></span> &copy; <a href="http://goo.gl/TDOSuC" target="_blank">ProUI 2.1</a>
                    </div>
                </footer>
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
                        <form action="index.html" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
                            <fieldset>
                                <legend>Vital Info</legend>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Username</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">Admin</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-email">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" id="user-settings-email" name="user-settings-email" class="form-control" value="admin@example.com">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-notifications">Email Notifications</label>
                                    <div class="col-md-8">
                                        <label class="switch switch-primary">
                                            <input type="checkbox" id="user-settings-notifications" name="user-settings-notifications" value="1" checked>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Password Update</legend>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-password">New Password</label>
                                    <div class="col-md-8">
                                        <input type="password" id="user-settings-password" name="user-settings-password" class="form-control" placeholder="Please choose a complex one..">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-repassword">Confirm New Password</label>
                                    <div class="col-md-8">
                                        <input type="password" id="user-settings-repassword" name="user-settings-repassword" class="form-control" placeholder="..and confirm it!">
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group form-actions">
                                <div class="col-xs-12 text-right">
                                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-sm btn-primary">Save Changes</button>
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
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/app.js"></script>

        <!-- Google Maps API + Gmaps Plugin, must be loaded in the page you would like to use maps (Remove 'http:' if you have SSL) -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="js/helpers/gmaps.min.js"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="js/pages/readyProfile.js"></script>
        <script>$(function(){ ReadyProfile.init(); });</script>
    </body>
</html>