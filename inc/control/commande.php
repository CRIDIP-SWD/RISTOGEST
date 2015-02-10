<?php 
include ('../db.conf.php')
BaseConnect();
include ('../config.php');

//STEP 1
if(isset($_GET['etape']) && $_GET['etape'] == 'step1')
{
	$idmenu = $_GET['idmenu'];
	$idsalarie = $_GET['idsalarie'];

	$sql_new_commande = mysql_query("INSERT INTO `commande`(`idcommande`, `idmenu`, `idsalarie`, `date_commande`, `montant_total`, `etat_commande`) 
		VALUES (NULL,'$idmenu','$idsalarie','$date_systeme','0','1')");
	
	if($sql_new_commande == TRUE){
		header("Location: ../../module/commande/liste.php?idsalarie=$idsalarie&new_commande=success");
	}else{
		header("Location: ../../module/commande/liste.php?idsalarie=$idsalarie&new_commande=error");
	}
}
 ?>