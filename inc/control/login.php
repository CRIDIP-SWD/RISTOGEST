							<?php
							include('../db.conf.php');
							BaseConnect();

							date_default_timezone_set("UTC");
                            $date = date('d/m/y');
                            $heure = date('H:i');
                            if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {
                                if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['pass']) && !empty($_POST['pass']))) {

                                    // on teste si une entrée de la base contient ce couple login / pass
                                    $sql = 'SELECT count(*) FROM salarie WHERE login="'.mysql_escape_string($_POST['login']).'"  AND pass_md5="'.mysql_escape_string(md5($_POST['pass'])).'"';
                                    $req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
                                    $data = mysql_fetch_array($req);
                                    echo $sql;
                                }
                                else {
                                header("Location: ../../login.php?error_champs=true&error=1&alert_fail=false&error_base=false");
                                }
                            }
                            ?>
                   