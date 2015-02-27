<?php
include('../db.conf.php');
BaseConnect();
?>
<?php 
//Ajout Utilisateur par l'administration
if(isset($_POST['add-user-valid']) && $_POST['add-user-valid'] == 'Valider')
{
	$login = $_POST['login'];
	$pass_clear = $_POST['pass_md5'];
	$pass_md5 = md5($pass_clear);
	$groupe = $_POST['groupe'];
	$nom_user = $_POST['nom_user'];
	$prenom_user = $_POST['prenom_user'];
	$tel_user = $_POST['tel_user'];
	$port_user = $_POST['port_user'];

	$sql_add_user = mysql_query("INSERT INTO `utilisateur`(`iduser`, `login`, `pass_md5`, `pass_clear`, `groupe`, `nom_user`, `prenom_user`, `tel_user`, `port_user`, `last_connect`, `connect`) 
		VALUES (NULL,'$login','$pass_md5','$pass_clear','$groupe','$nom_user','$prenom_user','$tel_user','$port_user','','0')")or die(mysql_error());

	if($sql_add_user == TRUE)
	{
		//Envoie du message à l'utilisateur
			//Mail Destinataire
			$to = $login;

			//Sujet
			$subject = "Vos identifiants pour Ristogest - ".$nom_user."".$prenom_user;

			//Message
			$message = "
			<html>
			<head>
				<title></title>
			</head>
			<body>
				Bonjour $nom_user $prenom_user,<br>
				Voici vos identifiants de connexion à Ristogest:<br><br>
				<ul>
					<li>Nom d'utilisateur: <strong>$login</strong></li>
					<li>Mot de Passe: <strong>$pass_clear</strong></li>
				</ul>

			</body>
			</html>
			";
			$headers  = 'MIME-Version: 1.0' . "\r\n";
     		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

     		//ENVOIE
     		mail($to, $subject, $message);

     header("Location: ../../module/admin/user/index.php?add-user=true");


	}else{
		header("Location: ../../module/admin/user/index.php?add-user=false");
	}
}

 ?>