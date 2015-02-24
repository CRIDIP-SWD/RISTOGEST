<?php
include ('../db.conf.php');
BaseConnect();
?>
<?php 
//Suppression de la commande
if(isset($_GET['supp-cmd']) && $_GET['supp-cmd'] == 'true')
{
	$idcommande = $_GET['idcommande'];

	$sql_delete_article_cmd = mysql_query("DELETE FROM article_commande WHERE idcommande = '$idcommande'")or die(mysql_error());
	$sql_delete_cmd = mysql_query("DELETE FROM commande WHERE idcommande = '$idcommande'")or die(mysql_error());

	if($sql_delete_cmd == TRUE)
	{
		header("Location: ../../module/admin/commande/user/index.php?supp-cmd=true");
	}else{
		header("Location: ../../module/admin/commande/user/index.php?supp-cmd=false");
	}
}

 ?>

 <?php
 if(isset($_POST['add-reglement']) && $_POST['add-reglement'] == 'valider')
 {
 	$idcommande = $_POST['idcommande'];
 	$type_reglement = $_POST['type_reglement'];
 	$date_reglement = strtotime($_POST['date_reglement']);
 	$montant_reglement = $_POST['montant_reglement'];
 	$porteur_chq = $_POST['porteur_chq'];
 	$num_chq = $_POST['num_chq'];
 	$banque_chq = $_POST['banque_chq'];

 	$sql_add_reglement = mysql_query("INSERT INTO `reglement_commande`(`idreglement`, `idcommande`, `type_reglement`, `date_reglement`, `montant_reglement`, `porteur_chq`, `num_chq`, `banque_chq`) 
 		VALUES (NULL,'$idcommande','$type_reglement','$date_reglement','$montant_reglement','$porteur_chq','$num_chq','$banque_chq')")or die(mysql_error());

 	$sql_up_cmd = mysql_query("UPDATE commande SET regle = '1' WHERE idcommande = '$idcommande'")or die(mysql_error());

 	if($sql_add_reglement == TRUE)
 	{
 		header("Location: ../../module/admin/commande/user/view.php?idcommande=$idcommande&add-reglement=success");
 	}else{
 		header("Location: ../../module/admin/commande/user/view.php?idcommande=$idcommande&add-reglement=error");
 	}
 }


 ?>