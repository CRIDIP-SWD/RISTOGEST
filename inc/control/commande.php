<?php 
include ('../db.conf.php');
BaseConnect();
include ('../config.php');

//STEP 1
if(isset($_GET['etape']) && $_GET['etape'] == 'step1')
{
	$idmenu = $_GET['idmenu'];
	$idsalarie = $_GET['idsalarie'];
	$num_commande = "CMD.".date("d")."".rand(1000,99999);

	$sql_new_commande = mysql_query("INSERT INTO `commande`(`idcommande`, `num_commande`, `idmenu`, `idsalarie`, `date_commande`, `montant_total`, `etat_commande`, `date_pris_charge`, `date_prestataire`, `date_livraison`, `date_disponible`) 
		VALUES (NULL,'$num_commande','$idmenu','$idsalarie','$date_systeme','0','0','','','','')");
	

	$sql_commande = mysql_query("SELECT * FROM commande WHERE num_commande = '$num_commande'")or die(mysql_error());
	$donnee_commande = mysql_fetch_array($sql_commande);
	$idcommande = $donnee_commande['idcommande'];


	if($sql_new_commande == TRUE){

		mysql_query("INSERT INTO `log_commande`(`idlogcommande`, `idcommande`, `categorie_log`, `desc_log`, `date_log`, `etat_log`) 
			VALUES (NULL,'$idcommande','1','Votre commande à été transmis au centre de gestion de commande.','$date_systeme - $heure_systeme','2')")or die(mysql_error());

		header("Location: ../../module/commande/liste.php?idsalarie=$idsalarie&new_commande=success");

	}else{

		mysql_query("INSERT INTO `log_commande`(`idlogcommande`, `idcommande`, `categorie_log`, `desc_log`, `date_log`, `etat_log`) 
			VALUES (NULL,'$idcommande','1','Une erreur à eu lieu lors de la création de votre commande.','$date_systeme - $heure_systeme','0')")or die(mysql_error());

		header("Location: ../../module/commande/liste.php?idsalarie=$idsalarie&new_commande=error");

	}
}

//SUPPRESSION D'UN PRODUIT
if(isset($_GET['suppression_produit']) && $_GET['suppression_produit'] == 'true')
	if($_GET['etat_commande'] == '1'){

		header("Location: ../../module/commande/view.php?idcommande=$idcommande&commande_valide=warning");
	}
	{
		$idcommandeproduit = $_GET['idcommandeproduit'];
		$idcommande = $_GET['idcommande'];

		//Import base
		$sql_commande_produit = mysql_query("SELECT * FROM commande_produit WHERE idcommandeproduit = '$idcommandeproduit'")or die(mysql_error());
		$donnee_commande_produit = mysql_fetch_array($sql_commande_produit);
		$sql_commande = mysql_query("SELECT * FROM commande WHERE idcommande = '$idcommande'")or die(mysql_error());
		$donnee_commande = mysql_fetch_array($sql_commande);

		//calcul nouveau solde commande
		$calc_nouv_solde = $donnee_commande['montant_total']-$donnee_commande_produit['prix_total'];

		//sql up solde commande
		mysql_query("UPDATE commande SET montant_total = '$calc_nouv_solde' WHERE idcommande = '$idcommande'")or die(mysql_error());

		//Suppression du produit

		$sql_delete_produit = mysql_query("DELETE FROM commande_produit WHERE idcommandeproduit = '$idcommandeproduit'");

		if($sql_delete_produit == TRUE){

			mysql_query("INSERT INTO `log_commande`(`idlogcommande`, `idcommande`, `categorie_log`, `desc_log`, `date_log`, `etat_log`) 
				VALUES (NULL,'$idcommande','1','Un produit à été supprimer de votre commande.','$date_systeme - $heure_systeme','2')")or die(mysql_error());

			header("Location: ../../module/commande/view.php?idcommande=$idcommande&supp_produit=success");

		}else{

			mysql_query("INSERT INTO `log_commande`(`idlogcommande`, `idcommande`, `categorie_log`, `desc_log`, `date_log`, `etat_log`) 
				VALUES (NULL,'$idcommande','1','Un produit à été supprimer de votre commande.','$date_systeme - $heure_systeme','0')")or die(mysql_error());

			header("Location: ../../module/commande/view.php?idcommande=$idcommande&supp_produit=error");

		}
	}

 ?>