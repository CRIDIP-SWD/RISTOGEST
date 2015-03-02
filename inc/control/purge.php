<?php 
include('../db.conf.php');
BaseConnect();
?>

<?php
if(isset($_GET['purge']) && $_GET['purge'] == 'valider')
{
	$sql_purge = mysql_query("TRUNCATE article, article_commande, article_commande_prestataire, article_menu, commande, commande_prestataire, famille_article, menu, reglement_commande")or die(mysql_error());

	if($sql_purge == TRUE)
	{
		header("Location: ../../module/admin/setting/purge.php?purge=true");
	}else{
		header("Location: ../../module/admin/setting/purge.php?purge=false");
	}
}