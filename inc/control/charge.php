
<?php

//Vérification si le menu n'a pas dépasser la date
$sql_menu = mysql_query("SELECT * FROM menu");
while($donnee_menu = mysql_fetch_array($sql_menu))
{
	if($donnee_menu['date_menu'] < $date_systeme)
	{
		$idmenu = $donnee_menu['idmenu'];
		mysql_query("UPDATE menu SET etat_menu = '1' WHERE idmenu = '$idmenu'");
	}
}

$sql_user = mysql_query("SELECT iduser, login, groupe FROM utilisateur WHERE login = '$login'")or die(mysql_error());
$donnee_user = mysql_fetch_array($sql_user);
$iduser = $donnee_user['iduser'];
$sql_utilisateur = mysql_query("SELECT * FROM utilisateur WHERE iduser = '$iduser'")or die(mysql_error());
$donnee_utilisateur = mysql_fetch_array($sql_utilisateur);
$groupe = $donnee_utilisateur['groupe'];

//Societe
$sql_setting = mysql_query("SELECT * FROM setting WHERE idsetting = '1'")or die(mysql_error());
$donnee_setting = mysql_fetch_array($sql_setting);
$raison_social = $donnee_setting['raison_social'];
$etat_programme = $donnee_setting['etat_programme'];
$serial = $donnee_setting['serial'];
$date_fin_serial = $donnee_setting['date_fin_serial'];

//Verification License
mysql_connect("vps116895.ovh.net:3306", "remote-user", "1992maxime")or die(mysql_error());
mysql_select_db("keymanager");
$sql_key_risto = mysql_query("SELECT * FROM key_ristogest WHERE serial = '$serial'")or die(mysql_error());
$donnee_key_risto = mysql_fetch_array($sql_key_risto);
$key_acces = $donnee_key_risto['serial'];
mysql_connect(HOST,USER,PASS)or die(mysql_error());
mysql_select_db(BASE);

if($key_acces != $serial){
	header("Location: error-serial.php");
}

//Verification Programme
if($etat_programme == 0){
	header("Location: systeme_inacessible.php");
}
?>