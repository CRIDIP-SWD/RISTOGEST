<?php
include('../../../../inc/config.php');
include('../../../../inc/db.conf.php');
BaseConnect();
$sql_import_centre = mysql_query("SELECT * FROM setting WHERE idsetting = 1")or die(mysql_error());
$import_centre = mysql_fetch_array($sql_import_centre);
$iduser = $_POST['iduser'];
/**
 * HTML2PDF Librairy - example
 *
 * HTML => PDF convertor
 * distributed under the LGPL License
 *
 * @author      Laurent MINGUET <webmaster@html2pdf.fr>
 *
 * isset($_GET['vuehtml']) is not mandatory
 * it allow to display the result in the HTML format
 */

    // get the HTML
    ob_start();
?>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="../../../../inc/control/pdf/styles/pdf.css">
</head>
<body>
    <table style="width: 100%;">
        <tr>
            <td style="width: 50%">
                <div style="font-size: 45px; font-weight: bold;"><?php echo $import_centre['raison_social']; ?></div>
                <p>
                    <?php echo $import_centre['adresse']; ?><br>
                    <?php echo $import_centre['code_postal']; ?> <?php echo $import_centre['ville']; ?><br>
                    <strong>Téléphone:</strong> <?php echo $import_centre['telephone']; ?><br>
                    <strong>Adresse Mail:</strong> <?php echo $import_centre['email']; ?>
                </p>
            </td>
            <td style="text-align: right; width: 50%; position: relative; top: -50px; font-size: 35px; font-weight: bolder; color: grey;">
                Commande (Par utilisateur)
            </td>
        </tr>
    </table>

    <div style="padding-top: 15px; padding-bottom: 15px;"></div>

    <table cellspacing="0" style="width: 100%; border: solid 2px; border-radius: 5px 5px 5px 5px;">
        <tr>
            <th style="width: 20%; text-align: center; border: solid 1px; height: 25px;">Numéro de Commande</th>
            <th style="width: 20%; text-align: center; border: solid 1px; height: 25px;">Date de la commande</th>
            <th style="width: 20%; text-align: center; border: solid 1px; height: 25px;">Montant de la commande</th>
            <th style="width: 20%; text-align: center; border: solid 1px; height: 25px;">Etat de la commande</th>
            <th style="width: 20%; text-align: center; border: solid 1px; height: 25px;">Reglé</th>
        </tr>
        <?php
        $sql_commande = mysql_query("SELECT * FROM commande, utilisateur WHERE commande.iduser = utilisateur.iduser
        ORDER BY date_commande ASC")or die(mysql_error());
        while($donnee_commande = mysql_fetch_array($sql_commande))
        {
        ?>
        <tr>
            <td style="padding-left: 5px; border: solid 1px; padding-top: 10px; padding-bottom: 10px; text-align: center;">
                <?php echo $donnee_commande['num_commande']; ?>
            </td>
            <td style="padding-left: 5px; border: solid 1px; padding-top: 10px; padding-bottom: 10px; text-align: center;">
                <?php echo date("d-m-Y", $donnee_commande['date_commande']); ?>
            </td>
            <td style="padding-left: 5px; border: solid 1px; padding-top: 10px; padding-bottom: 10px; text-align: right; padding-right: 5px;">
                <?php echo number_format($donnee_commande['montant_total'], 2, ',', ' ')." €"; ?>
            </td>
            <td style="padding-left: 5px; border: solid 1px; padding-top: 10px; padding-bottom: 10px; text-align: center;">
                <?php
                if($donnee_commande['etat_commande'] == 0){echo "<span style='color: grey;'>Non Valider par l'utilisateur</span>";}
                if($donnee_commande['etat_commande'] == 1){echo "<span style='color: red;'>Commande Valider</span>";}
                if($donnee_commande['etat_commande'] == 2){echo "<span style='color: orange;'>Traitement en cour...</span>";}
                if($donnee_commande['etat_commande'] == 3){echo "<span style='color: green;'>Commande Disponible</span>";}
                ?>
            </td>
            <td style="padding-left: 5px; border: solid 1px; padding-top: 10px; padding-bottom: 10px; text-align: center;">
                <?php
                    if($donnee_commande['regle'] == 0){echo "<span style='color: red;'>Non Réglé</span>";}
                    if($donnee_commande['regle'] == 1){echo "<span style='color: red;'>Réglé</span>";}
                 ?>
            </td>
        </tr>
        <?php } ?>
        <tr>
            <td colspan="4" style="text-align: right; font-style: italic;">Montant total des Commandes</td>
            <td style="text-align: right; font-weight: bold">
                <?php
                $sql_sum_cmd = mysql_query("SELECT SUM(montant_total) FROM commande WHERE iduser = '$iduser'")or die(mysql_error());
                echo number_format(mysql_result($sql_sum_cmd, 0), 2, ',', ' ')." €";
                ?>
            </td>
        </tr>
    </table>

</body>
</html>
<?php
    $content = ob_get_clean();

    // convert in PDF
    require_once('../../../../inc/control/pdf/html2pdf.class.php');
    try
    {
        $html2pdf = new HTML2PDF('L', 'A4', 'fr');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output('exemple01.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
?>