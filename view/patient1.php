<?php
require('../fpdf/fpdf.php');


    if($_POST){
        $vorname = $_POST ['vornameP'];
        $nachname = $_POST ['nachnameP'];
        $geburi = $_POST['geburi'];
        $patID = $_POST['patId'];
        $unterDatum = $_POST['untersDatum'];
        $massID = $_POST['massnahmeNr'];
        $studie = $_POST['studie'];
        $unterZeit = $_POST['untersZeit'];
        $modalitaet = $_POST['modalitaet'];
        $instanz = $_POST['instanz'];
        $begruendung = $_POST['begruendung'];
        $title = 'PACS Datenaenderungsantrag';
        $patient = 'Patient';

        $pdf = new FPDF();
        $pdf -> AddPage();
        $pdf -> SetTitle($title);

        $pdf -> SetFont('Arial', 'B', 15);

        //Charite Logo einfügen
        $pdf -> Cell(0, 10, $title, 1, 1, 'C');

        $pdf -> Cell(40, 10, $patient, 1, 1, 'C');
        $pdf ->Cell(40, 10, 'Vorname: ', 1, 0, 'L');
        $pdf ->Cell(40, 10, $vorname,1, 0, 'C');

        //D = Download
        $pdf ->Output('D');
    }
?>



<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <link type="text/css" href="../css/style.css" rel="stylesheet" media="screen"/>

    <title>Ein Patient</title>
</head>

<header>PACS Datenänderungsantrag</header>

//<?php
include "../view/benutzerdata.php";
//?>
<body>
        <form action="" method="post" class="form_pat1">

            <div class="pat1">

                <h3>Patient</h3>

        <!--    TODO: @Ragnar Hier werden die Daten aus dem RIS/Centricity geholt -->

                <label for="vornameP">Vorname</label><br>
                <input id="vornameP" name="vornameP"/><br>

                <label for="nachnameP">Nachname</label><br>
                <input id="nachnameP" name="nachnameP"/><br>

                <label for="geburi" >Geburtsdatum</label><br>
                <input id="geburi" type="date" name="geburi"/><br>

                <label for="patId">Patienten ID</label><br>
                <input id="patId" name="patId"/><br>

                <label for="massnahmeNr">Massnahme Nr.</label><br>
                <input id="massnahmeNr" name="massnahmeNr"/><br>

                <label for="studie">Studie Nr.</label><br>
                <input id="studie" name="studie"/><br>

                <label for="untersDatum">Untersuchungsdatum</label><br>
                <input name="untersDatum" type="date" id="untersDatum"><br>

                <label for="untersZeit">Untersuchungszeit</label><br>
                <input name="untersZeit" type="time" id="untersZeit"><br>

                <label for="modalitaet">Modalität</label><br>
                <select name="modalitaet">
                    <option value="MRT">MRT</option>
                    <option value="Röntgen">Röntgen</option>
                    <option value="Nuklearmedizin">Nuklearmedizin</option>
                    <option value="Kinderradiologie">Kinderradiologie</option>
                    <option value="andere">Andere</option>
                    <?php

                    ?>
                </select><br>

                <label name="instanz">Instanz/Mandant</label><br>
                <select name="instanz">
                    <option value="Klinik">Klinik</option>
                    <option value="Forschung">Forschung</option>
                    <option value="Belove">Belove</option>
                    <option value="Zahnklinik">Zahnklinik</option>
                </select>

                <!--            Fragezeichen neben instanz um es zu erklären-->
                <a  title="instanz" onmouseover="this.innerHTML='Klinik = Radiologie Abteilung | Forschung = Forschungsabteilung | beLove = NOCH ZU KLÄREN | Zahnklinik = Zahnmedizin'" onmouseout="this.innerHTML='?' ">
                    <svg  width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
                    </svg>
                </a><br><br>

                <label for="begruendung">Begründung</label><br>
                <textarea id="text" placeholder="Beschreibe genau was zu tun ist" name="begruendung"></textarea><br>

            </div>

            <!--            TODO: Funktionen für Buttons einfügen -->
            <div id="btn_p1">
            <button type="submit" class="btn_senden" name="action" value="senden">Senden</button><br><br>
            <button type="submit" class="btn_pdf" name="action" value="pdfanzeigen">PDF</button>
            </div>

        </form>


<footer>
    <a href="footer.php">Impressum</a>
</footer>

</body>
