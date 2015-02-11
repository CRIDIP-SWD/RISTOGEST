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
 ?>