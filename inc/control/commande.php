<?php 
include ('../db.conf.php');
BaseConnect();
 ?>

<?php
//Nouvelle Commande Utilisateur
if(isset($_POST['add-commande-valid']) && $_POST['add-commande-valid'] == 'Valider')
{
	$iduser = $_POST['iduser'];
	$num_commande = "ORD.UTS.".rand(100,9999);
	$idmenu = $_POST['idmenu'];
	$date_commande = strtotime(date("d-m-Y"));

	$sql_add_commande = mysql_query("INSERT INTO `commande`(`idcommande`, `num_commande`, `idmenu`, `iduser`, `date_commande`, `etat_commande`, `montant_total`, `regle`) 
		VALUES (NULL,'$num_commande','$idmenu','$iduser','$date_commande','0','0','0')")or die(mysql_error());

	$sql_import_cmd = mysql_query("SELECT * FROM commande WHERE num_commande = '$num_commande'")or die(mysql_error());
	$import_cmd = mysql_fetch_array($sql_import_cmd);
	$idcommande = $import_cmd['idcommande'];

	if($sql_add_commande == TRUE)
	{
		header("Location: ../../module/commande/view.php?idcommande=$idcommande&add-commande=true");
	}else{
		header("Location: ../../module/commande/index.php?iduser=$iduser&add-commande=false");
	}

}
?>
<?php
//Validation de la commande
if(isset($_GET['valid-commande']) && $_GET['valid-commande'] == 'valider')
{
	$idcommande = $_GET['idcommande'];

	$sql_up_commande = mysql_query("UPDATE commande SET etat_commande = '1' WHERE idcommande = '$idcommande'")or die(mysql_error());

	if($sql_up_commande == TRUE)
	{
		header("Location: ../../module/commande/view.php?idcommande=$idcommande&valid-commande=true");
	}else{
		header("Location: ../../module/commande/view.php?idcommande=$idcommande&valid-commande=false");
	}
}