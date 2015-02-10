<?php 
include ('../db.conf.php');
BaseConnect();
if(isset($_POST['modif-info-profil']) && $_POST['modif-info-profil'] = 'Valider'){
	$idsalarie = $_POST['idsalarie'];
	$email = $_POST['email'];
	$adresse = htmlentities(addslashes($_POST['adresse']));
	$code_postal = $_POST['code_postal'];
	$ville = htmlentities(addslashes($_POST['ville']));
	$telephone = $_POST['telephone'];
	$avatar = $_FILES['avatar']['name'];

	//Test avatar 
	if(isset($_FILES['avatar']) AND $_FILES['avatar']['error'] == 0){
		if($_FILES['avatar']['size'] <= 7000000)
		{
			$infosfichier = pathinfo($_FILES['avatar']['name']);
			$extension_upload = $infosfichier['extension'];
			$extension_autorise = array('jpg', 'jpeg', 'gif', 'png');
			if(in_array($extension_upload, $extension_autorise))
			{
				move_uploaded_file($_FILES['avatar']['tmp_name'], SITE."".FOLDER."".ASSETS."/img/placeholders/avatar/".basename($_FILE['avatar']['name']));

			}else{
				header("Location: ../../module/user/profil.php?idsalarie=$idsalarie&error_file_extension=true");
			}
		}else{
			header("Location: ../../module/user/profil.php?idsalarie=$idsalarie&error_file_size=true");
		}
	}



	$sql_maj_salarie = mysql_query("UPDATE salarie SET email = '$idsalarie', adresse = '$adresse', code_postal = '$code_postal', ville = '$ville', telephone = '$telephone', avatar = '$avatar' WHERE idsalarie = '$idsalarie'")or die(mysql_error());
	$view_sql = $sql_maj_salarie;

	if($sql_maj_salarie == TRUE)
	{
		header("Location: ../../module/user/profil.php?idsalarie=$idsalarie&succes_modif_info=true");
	}else{
		header("Location: ../../module/user/profil.php?idsalarie=$idsalarie&error_modif_info=true&error_sql=".$view_sql);
	}


}
 ?>