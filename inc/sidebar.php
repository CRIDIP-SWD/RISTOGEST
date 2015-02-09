
            <div id="sidebar">
                <!-- Wrapper for scrolling functionality -->
                <div class="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <div class="sidebar-content">
                        <!-- Brand -->
                        <a href="index.html" class="sidebar-brand">
                            <i class="gi gi-flash"></i><strong><?php echo $logiciel; ?></strong>
                        </a>
                        <!-- END Brand -->

                        <!-- User Info -->
                        <div class="sidebar-section sidebar-user clearfix">
                            <div class="sidebar-user-avatar">
                                <a href="page_ready_user_profile.html">
                                    <img src="<?php echo SITE,FOLDER,ASSETS; ?>img/placeholders/avatars/avatar2.jpg" alt="avatar">
                                </a>
                            </div>
                            <div class="sidebar-user-name"><?php echo $donnee_user['nom']; ?> <?php echo $donnee_user['prenom']; ?></div>
                            <div class="sidebar-user-links">
                                <!-- <a href="page_ready_user_profile.html" data-toggle="tooltip" data-placement="bottom" title="Profile"><i class="gi gi-user"></i></a>
                                <a href="page_ready_inbox.html" data-toggle="tooltip" data-placement="bottom" title="Messages"><i class="gi gi-envelope"></i></a> -->
                                <!-- Opens the user settings modal that can be found at the bottom of each page (page_footer.html in PHP version) -->
                                <!-- <a href="#modal-user-settings" data-toggle="modal" class="enable-tooltip" data-placement="bottom" title="Settings"><i class="gi gi-cogwheel"></i></a> -->
                                <a href="<?php echo SITE,FOLDER; ?>logout.php" data-toggle="tooltip" data-placement="bottom" title="Logout"><i class="gi gi-exit"></i></a>
                            </div>
                        </div>
                        <!-- END User Info -->

                        <!-- Sidebar Navigation -->
                        <ul class="sidebar-nav">
                            <li>
                                <a href="<?php echo SITE,FOLDER; ?>index.php" class=" active"><i class="gi gi-stopwatch sidebar-nav-icon"></i>Accueil</a>
                            </li>
                            <li>
                                <a href="<?php echo SITE,FOLDER; ?>module/user/profil.php?iduser=<?php echo $donnee_user['iduser']; ?>"><i class="gi gi-stopwatch sidebar-nav-icon"></i>Mon Profil</a>
                            </li>
                            <li class="sidebar-header">
                                <span class="sidebar-header-options clearfix">
                                </span>
                                <span class="sidebar-header-title">MES COMMANDES</span>
                            </li>
                            <li>
                                <a href="<?php echo SITE,FOLDER; ?>module/commande/liste.php?iduser=<?php echo $donnee_user['iduser']; ?>"><i class="gi gi-stopwatch sidebar-nav-icon"></i>Liste des Commandes</a>
                            </li>
                            <li>
                                <a href="<?php echo SITE,FOLDER; ?>module/commande/new.php?iduser=<?php echo $donnee_user['iduser']; ?>"><i class="gi gi-stopwatch sidebar-nav-icon"></i>Nouvelle commande</a>
                            </li>
                            <li class="sidebar-header">
                                <span class="sidebar-header-options clearfix">
                                </span>
                                <span class="sidebar-header-title">MES RECEPTIONS</span>
                            </li>
                            <li>
                                <a href="<?php echo SITE,FOLDER; ?>module/reception/liste.php?iduser=<?php echo $donnee_user['iduser']; ?>"><i class="gi gi-stopwatch sidebar-nav-icon"></i>Liste des Récéptions</a>
                            </li>
                            <li>
                                <a href="<?php echo SITE,FOLDER; ?>module/reception/new.php?iduser=<?php echo $donnee_user['iduser']; ?>"><i class="gi gi-stopwatch sidebar-nav-icon"></i>Nouvelle reception</a>
                            </li>
                        </ul>
                        <!-- END Sidebar Navigation -->

                        <!-- Sidebar Notifications -->
<!--                         <div class="sidebar-header">
                            <span class="sidebar-header-options clearfix">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Refresh"><i class="gi gi-refresh"></i></a>
                            </span>
                            <span class="sidebar-header-title">Activity</span>
                        </div>
                        <div class="sidebar-section">
                            <div class="alert alert-success alert-alt">
                                <small>5 min ago</small><br>
                                <i class="fa fa-thumbs-up fa-fw"></i> You had a new sale ($10)
                            </div>
                            <div class="alert alert-info alert-alt">
                                <small>10 min ago</small><br>
                                <i class="fa fa-arrow-up fa-fw"></i> Upgraded to Pro plan
                            </div>
                            <div class="alert alert-warning alert-alt">
                                <small>3 hours ago</small><br>
                                <i class="fa fa-exclamation fa-fw"></i> Running low on space<br><strong>18GB in use</strong> 2GB left
                            </div>
                            <div class="alert alert-danger alert-alt">
                                <small>Yesterday</small><br>
                                <i class="fa fa-bug fa-fw"></i> <a href="javascript:void(0)"><strong>New bug submitted</strong></a>
                            </div>
                        </div> -->
                        <!-- END Sidebar Notifications -->
                    </div>
                    <!-- END Sidebar Content -->
                </div>
                <!-- END Wrapper for scrolling functionality -->
            </div>
            <!-- END Main Sidebar