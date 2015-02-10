
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
?>