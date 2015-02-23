<?php 
//Suppression de la commande
if(isset($_GET['supp-cmd']) && $_GET['supp-cmd'] == 'true')
{
	$idcommande = $_GET['idcommande'];

	$sql_delete_article_cmd = mysql_query("DELETE FROM article_commande WHERE idcommande = '$idcommande'");
	$sql_delete_cmd = mysql_query("DELETE FROM commande WHERE idcommande = '$idcommande'");

	if($sql_delete_cmd == TRUE)
	{
		header("Location: ../../module/admin/commande/user/index.php?supp-cmd=true");
	}else{
		header("Location: ../../module/admin/commande/user/index.php?supp-cmd=false");
	}
}

 ?>