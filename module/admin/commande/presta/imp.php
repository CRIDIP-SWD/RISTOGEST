<?php
include('../../inc/config.php');
include('../../inc/db.conf.php');
BaseConnect();
$sql_import_centre = mysql_query("SELECT * FROM setting WHERE idsetting = 1")or die(mysql_error());
$import_centre = mysql_fetch_array($sql_import_centre);
$idcomprestataire = $_GET['idcomprestataire'];
$sql_commande = mysql_query("SELECT * FROM commande_prestataire, prestataire WHERE commande_prestataire.idprestataire = prestataire.idprestataire AND idcomprestataire = '$idcomprestataire'")or die(mysql_error());
$donnee_commande = mysql_fetch_array($sql_commande);
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
    <link rel="stylesheet" type="text/css" href="../../inc/control/pdf/styles/pdf.css">
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
                COMMANDE PRESTATAIRE
            </td>
        </tr>
    </table>

    <div style="padding-top: 15px; padding-bottom: 15px;"></div>
    <table style="width:">
        <tr>
            <td>
                <strong><?php echo $donnee_commande['raison_social']; ?></strong><br>
                <strong>Téléphone:</strong> <?php echo $donnee_commande['telephone']; ?><br>
                <strong>Email:</strong> <?php echo $donnee_commande['email']; ?>
            </td>
        </tr>

    </table>


    <div style="padding-top: 15px; padding-bottom: 15px;"></div>
    <div style="font-size: 20px;"><strong>N° de la commande:</strong> <?php echo $donnee_commande['num_commande']; ?></div>
    <div style="padding-top: 15px; padding-bottom: 15px;"></div>

    <table cellspacing="0" style="width: 100%; border: solid 2px; border-radius: 5px 5px 5px 5px;">
        <tr>
            <th style="width: 25%; text-align: center; border: solid 1px; height: 25px;">Article</th>
            <th style="width: 25%; text-align: center; border: solid 1px; height: 25px;">Prix unitaire</th>
            <th style="width: 25%; text-align: center; border: solid 1px; height: 25px;">Quantité</th>
            <th style="width: 25%; text-align: center; border: solid 1px; height: 25px;">Prix Total</th>
        </tr>
        <?php
        $sql_article = mysql_query("SELECT * FROM article_commande_prestataire, article WHERE article_commande_prestataire.idarticle = article.idarticle AND idcomprestataire = '$idcomprestataire'")or die(mysql_error());
        while($donnee_article = mysql_fetch_array($sql_article))
        {
        ?>
        <tr>
            <td style="padding-left: 5px; border: solid 1px; padding-top: 10px; padding-bottom: 10px;">
                <?php echo $donnee_article['designation_article']; ?>
            </td>
            <td style="padding-left: 5px; border: solid 1px; padding-top: 10px; padding-bottom: 10px; text-align: right;">
                <?php echo number_format($donnee_article['prix_unitaire'], 2, ',', ' ')." €"; ?>
            </td>
            <td style="text-align: center; border: solid 1px; padding-top: 10px; padding-bottom: 10px; padding-right: 10px;">
                <?php echo $donnee_article['qte']; ?>
            </td>
            <td style="text-align: right; border: solid 1px; padding-top: 10px; padding-bottom: 10px;">
                <?php echo number_format($donnee_article['prix_total_commande'], 2, ',', ' ')." €"; ?>
            </td>
        </tr>
        <?php } ?>
        <tr>
            <td colspan="3" style="text-align: right; font-style: italic; padding-top: 5px; padding-bottom: 5px;">Total à payer</td>
            <td style="text-align: right; font-weight: bold; font-size: 15px; padding-top: 5px; padding-bottom: 5px;"><?php echo number_format($donnee_commande['montant_total'], 2, ',', ' ')." €"; ?></td>
        </tr>
    </table>

</body>
</html>
<?php
    $content = ob_get_clean();

    // convert in PDF
    require_once('../../inc/control/pdf/html2pdf.class.php');
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'fr');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output('exemple01.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
?>