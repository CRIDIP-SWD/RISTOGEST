<?php 
//Ajout du Menu
if(isset($_POST['add-menu']) && $_POST['add-menu'] == 'Valider')
{
	$semaine = $_POST['semaine'];
	$date_menu = strtotime($_POST['date_menu']);

	$sql_add_menu = mysql_query("INSERT INTO `menu`(`idmenu`, `semaine`, `date_menu`, `etat_menu`) 
		VALUES (NULL,'$semaine','$date_menu','1')")or die(mysql_error());

	if($sql_add_menu == TRUE)
	{
		header("Location: ../../module/admin/menu/index.php?add-menu=true");
	}else{
		header("Location: ../../module/admin/menu/index.php?add-menu=false");
	}
}
?>
<?php
//Ajout d'un article dans le menu
if(isset($_POST['add-article']) && $_POST['add-article'] == 'Valider')
{
	$idmenu = $_POST['idmenu'];
	$idarticle = $_POST['idarticle'];

	$sql_add_article_menu = mysql_query("INSERT INTO `article_menu`(`idarticlemenu`, `idmenu`, `idarticle`) 
		VALUES (NULL,'$idmenu','$idarticle')")or die(mysql_error());

	if($sql_add_menu == TRUE)
	{
		header("Location: ../../module/admin/menu/view.php?idmenu=$idmenu&add-article=true");
	}else{
		header("Location: ../../module/admin/menu/index.php?idmenu=$idmenu&add-article=false");
	}

}
?>