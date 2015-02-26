<?php
include ('../db.conf.php');
BaseConnect();
?>
<?php 
//Suppression de la commande utilisateur
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
 //Ajout du reglement utilisateur
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
<?php
//Suppression de la commande Prestataire
if(isset($_GET['supp-cmd-presta']) && $_GET['supp-cmd-presta'] == 'true')
{
	$idcomprestataire = $_GET['idcomprestataire'];

	$sql_delete_cmd_article_presta = mysql_query("DELETE FROM article_commande_prestataire WHERE idcomprestataire = '$idcomprestataire'")or die(mysql_error());
	$sql_delete_cmd_presta = mysql_query("DELETE FROM commande_prestataire WHERE idcomprestataire = '$idcomprestataire'")or die(mysql_error());

	if($sql_delete_cmd_presta == TRUE)
	{
		header("Location: ../../module/admin/commande/presta/index.php?supp-cmd-presta=true");
	}else{
		header("Location: ../../module/admin/commande/presta/index.php?supp-cmd-presta=false");
	}
}
?>

<?php
// Nouvelle Commande Prestataire
if(isset($_POST['add-cmd-presta']) && $_POST['add-cmd-presta'] == 'valider')
{
	$num_commande = "ORD.PR.".rand(100,9999);
	$idprestataire = $_POST['idprestataire'];
	$date_commande = strtotime($_POST['date_commande']);

	$sql_add_cmd_presta = mysql_query("INSERT INTO `commande_prestataire`(`idcomprestataire`, `num_commande`, `idprestataire`, `date_commande`, `montant_total`, `etat_commande`) 
		VALUES (NULL,'$num_commande','$idprestataire','$date_commande','0','0')");

	$sql_import_cmd_presta = mysql_query("SELECT * FROM commande_prestataire WHERE num_commande = '$num_commande'")or die(mysql_error());
	$import_cmd_presta = mysql_fetch_array($sql_import_cmd_presta);
	$idcomprestataire = $import_cmd_presta['idcomprestataire'];

	if($sql_add_cmd_presta == TRUE)
	{
		header("Location: ../../module/admin/commande/presta/view.php?idcomprestataire=$idcomprestataire&add-cmd-presta=true");
	}else{
		header("Location: ../../module/admin/commande/presta/index.php?add-cmd-presta=false");
	}
}
?>