<?php

//Klassen eingebunden
spl_autoload_register(function ($class) {
    include 'class/' . $class . '.php';
});

require('fpdf/fpdf.php');

$action = $_REQUEST ['action'] ?? 'start'; //start
//$area = $_REQUEST  ['area'] ?? '';

//Login Daten
$username = $_POST ['uname'] ?? '';
$password = $_POST['pw'] ?? '';

//Frage nach einem weiteren Patient
$ja = $_POST ['btn_ja'] ?? '';
$nein = $_POST ['btn_nein'] ?? '';

//Benutzerdaten
$vornameB = $_POST ['vorname'] ?? '';
$nachnameB = $_POST ['nachname'] ?? '';
$email = $_POST ['email'] ?? '';
$tel = $_POST ['tel'] ?? '';


//1. Patientendaten
$vorname = $_POST ['vornameP'] ?? '';
$nachname = $_POST ['nachnameP'] ?? '';
$geburi = $_POST['geburi'] ?? '';
$patID = $_POST['patId'] ?? '';
$unterDatum = $_POST['untersDatum'] ?? '';
$massID = $_POST['massnahmeNr'] ?? 0;
$unterZeit = $_POST['untersZeit'] ?? '';
$studie = $_POST['studie'] ?? '';
$modalitaet = $_POST['modalitaet'] ?? '';
$instanz = $_POST['instanz'] ?? '';
$begruendung = $_POST['begruendung'] ?? '';



switch ($action) {
    case($action === 'start');
        include 'view/login.php';
        if(($username === 'a') && ($password === 'a'))
        {
            include 'view/frage.php';
        }
        break;

    case($action === 'btn_ja');
        include 'view/patient2.php';
        break;

    case($action === 'btn_nein');
        include 'view/patient1.php';
        break;

    case($action === 'pdfanzeigen');
//        $pdf = new FPDF();
//        $pdf -> AddPage('', 'A4', 0);
////        $pdf -> SetTitle($title);
//        $pdf -> SetFont('Arial', 'B', 15);
////        $pdf -> Cell(0, 10, $title, 1, 1, 'C');
//        $pdf -> Header();
//
//        $pdf -> Output('D');

            //$antrag = Antrag::createAntrag($vorname, $nachname,  $geburi,  $patID, $unterZeit, $massID, $modalitaet, $instanz, $begruendung);
            PDF::pdfAnzeigen();
        break;

    case($action === 'senden');
//    bei "senden" drücken soll eine Email an HD ohne PDF gesendet werden! Aber PDF soll in Laufwerk S: gespeichert werden
            include 'view/ende.php';
        break;

    case($action === 'impressum');
            include 'view/footer.php';
        break;

    default:
        throw new \Exception('Unexpected value');


}




