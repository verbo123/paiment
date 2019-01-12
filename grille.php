<?php
require 'localization.php';
require_once "lib/html2pdf.php";
ob_start();
?>

<style type="text/css">
    table {
        width: 100%;
        color: #717375;
        font-family: helvetica;
        line-height: 5mm;
        border-collapse: collapse;
    }
    h2  { margin: 0; padding: 0; }
    p { margin: 5px; }

    .wd{
       width: 200px;
    }
    .border th {
        border: 1px solid #000;
        color: white;
        background: #000;
        padding: 5px;
        font-weight: normal;
        font-size: 14px;
        text-align: center; }
    .border td {
        border: 1px solid #CFD1D2;
        padding: 5px 10px;
        text-align: center;
    }
    .no-border {
        border-right: 1px solid #CFD1D2;
        border-left: none;
        border-top: none;
        border-bottom: none;
    }
    .space { padding-top: 250px; }

    .10p { width: 10%; } .15p { width: 15%; }
    .25p { width: 25%; } .50p { width: 50%; }
    .60p { width: 60%; } .75p { width: 75%; }
</style>

<page backtop="10mm" backleft="10mm" backright="10mm" backbottom="10mm" footer="page;">


    <img class="wd" src="assets/img/logof.png">
    <table  style="vertical-align: top;margin-top: 10px;">
        <tr>
            <td class="100p">
                <strong><?php echo ma_tra("Grille Tarifaire sur recharge de compte") ?></strong><br />
            </td>
        </tr>
    </table>


    <table style="margin-top: 30px;" class="border">
        <thead>
        <tr>
            <th class="75p"><?php echo ma_tra("Tranche de Recharge")?></th>
            <th class="25p"><?php echo ma_tra("Prélèvement")?></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo ma_tra("De 500 à 250 000 FCFA")?></td>
            <td><?php echo ma_tra("100 FCFA")?></td>
        </tr>

        <tr>
            <td><?php echo ma_tra("De 250 001 à 500 000 FCFA")?></td>
            <td><?php echo ma_tra("200 FCFA")?></td>
        </tr>

        <tr>
            <td><?php echo ma_tra("De 500 001 à 750 000 FCFA")?></td>
            <td><?php echo ma_tra("300 FCFA")?></td>
        </tr>

        <tr>
            <td><?php echo ma_tra("De 750 001 à 1 000 000 FCFA")?></td>
            <td><?php echo ma_tra("400 FCFA")?></td>
        </tr>

        <tr>
            <td><?php echo ma_tra("+ 1 000 000 FCFA ")?></td>
            <td><?php echo ma_tra("500 FCFA")?></td>
        </tr>

        </tbody>
    </table>

</page>


<?php
$content = ob_get_clean();
try {
    $pdf = new HTML2PDF("p","A4","fr");
    $pdf->pdf->SetAuthor('GANDOKINTCHE');
    $pdf->pdf->SetTitle('Grille Tarifaire');
    $pdf->pdf->SetSubject('Grille');
    $pdf->pdf->SetKeywords('GANDOKINTCHE, Grille, Tarifaire');
    $pdf->writeHTML($content);
     ob_end_clean();
    $pdf->Output('Grille.pdf','I');
    // $pdf->Output('Devis.pdf', 'D');
} catch (HTML2PDF_exception $e) {
    die($e);
}

?>
