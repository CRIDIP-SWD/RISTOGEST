
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
                                <a href="<?php echo SITE,FOLDER; ?>module/user/profil.php?idsalarie=<?php echo $donnee_user['idsalarie']; ?>"><i class="gi gi-stopwatch sidebar-nav-icon"></i>Mon Profil</a>
                                <a href="<?php echo SITE,FOLDER; ?>module/menu/index.php"><i class="gi gi-cutlery sidebar-nav-icon"></i>Les menus</a>
                            </li>
                            <li class="sidebar-header">
                                <span class="sidebar-header-options clearfix">
                                </span>
                                <span class="sidebar-header-title">MES COMMANDES</span>
                            </li>
                            <li>
                                <a href="<?php echo SITE,FOLDER; ?>module/commande/liste.php?idsalarie=<?php echo $donnee_user['idsalarie']; ?>"><i class="gi gi-stopwatch sidebar-nav-icon"></i>Liste des Commandes</a>
                            </li>
                            <li>
                                <a href="<?php echo SITE,FOLDER; ?>module/commande/new.php?idsalarie=<?php echo $donnee_user['idsalarie']; ?>"><i class="gi gi-stopwatch sidebar-nav-icon"></i>Nouvelle commande</a>
                            </li>
                            <li class="sidebar-header">
                                <span class="sidebar-header-options clearfix">
                                </span>
                                <span class="sidebar-header-title">MES RECEPTIONS</span>
                            </li>
                            <li>
                                <a href="<?php echo SITE,FOLDER; ?>module/reception/liste.php?idsalarie=<?php echo $donnee_user['idsalarie']; ?>"><i class="gi gi-stopwatch sidebar-nav-icon"></i>Liste des Récéptions</a>
                            </li>
                            <li>
                                <a href="<?php echo SITE,FOLDER; ?>module/reception/new.php?idsalarie=<?php echo $donnee_user['idsalarie']; ?>"><i class="gi gi-stopwatch sidebar-nav-icon"></i>Nouvelle reception</a>
                            </li>
                        </ul>
                        <!-- END Sidebar Navigation -->

                        <!-- Sidebar Notifications -->
                        <div class="sidebar-header">
                            <span class="sidebar-header-options clearfix">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Refresh"><i class="gi gi-refresh"></i></a>
                            </span>
                            <span class="sidebar-header-title">Système</span>
                        </div>
                        <div class="sidebar-section">
                            <table>
                                <tr>
                                    <td style="width: 50%;">METRONIC CORE V5</td>
                                    <td>5.0.0a</td>
                                </tr>
                                <tr>
                                    <td>RISTOGEST</td>
                                    <td>1.0.0</td>
                                </tr>
                            </table>
                        </div>
                        <!-- END Sidebar Notifications -->
                    </div>
                    <!-- END Sidebar Content -->
                </div>
                <!-- END Wrapper for scrolling functionality -->
            </div>
            <!-- END Main Sidebar