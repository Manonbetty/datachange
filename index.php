<?php

spl_autoload_register(function ($class) {
    include 'class/' . $class . '.php';
});

require('fpdf/fpdf.php');

$action = $_REQUEST ['action'] ?? ''; //start
//$area = $_REQUEST  ['area'] ?? '';

$vorname = $_POST ['vornameP'] ?? '';
$nachname = $_POST ['nachnameP'] ?? '';
$geburi = $_POST['geburi'] ?? '';
$patID = $_POST['patId'] ?? '';
$unterDatum = $_POST['untersDatum'] ?? '';
$massID = $_POST['massnahmeNr'] ?? 0;
$unterZeit = $_POST['untersZeit'] ?? '';
//$studie = $_POST['studie'] ?? '';
$modalitaet = $_POST['modalitaet'] ?? '';
$instanz = $_POST['instanz'] ?? '';
$begruendung = $_POST['begruendung'] ?? '';



switch ($action) {
    case($action === 'pdfanzeigen');

            include 'view/patient1.php';
        $pdf = new FPDF();
        $pdf -> AddPage('', 'A4', 0);
//        $pdf -> SetTitle($title);
        $pdf -> SetFont('Arial', 'B', 15);
//        $pdf -> Cell(0, 10, $title, 1, 1, 'C');
        $pdf -> Header();

        $pdf -> Output('D');

            //$antrag = Antrag::createAntrag($vorname, $nachname,  $geburi,  $patID, $unterZeit, $massID, $modalitaet, $instanz, $begruendung);
            //PDF::pdfAnzeigen();
        }


