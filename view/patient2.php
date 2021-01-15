<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <link type="text/css" href="../css/style.css" rel="stylesheet" media="screen"/>

    <title>Zwei Patienten</title>
</head>

<header>PACS Datenänderungsantrag</header>

<body>

<?php
include "../view/benutzerdata.php";
?>

    <div class="container">

        <form action="index.php" method="post" class="form_pat2">

            <div class="pat1b">

    <!--            1. Patient, die Daten kommen direkt vom RIS, wie in View patient1.php -->
                <h3>1. Patient</h3>
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
                </select><br>

                <label name="instanz">Instanz/Mandant</label><br>
                <select name="instanz">
                    <option value="Klinik">Klinik</option>
                    <option value="Forschung">Forschung</option>
                    <option value="Belove">Belove</option>
                    <option value="Zahnklinik">Zahnklinik</option>
                </select>

            </div>


<!--        TODO: Suche nach dem 2.Patienten inm RIS. Soll nicht mehr sichtbar sein sobald der 2. Patient gefunden ist-->

<!--        <div class="suche">-->
<!---->
<!--            <h3>2. Patient suchen</h3>-->
<!--            <h4>Gib hier die bekannte Daten des gesuchten Patientes ein</h4>-->
<!--            <label for="sucheN"></label>-->
<!--            <input type="search" id="sucheN" placeholder="Nachname">-->
<!--            <label for="sucheV"></label>-->
<!--            <input type="search" id="sucheV" placeholder="Vorname">-->
<!--            <label for="sucheM"></label>-->
<!--            <input type="search" id="sucheM" placeholder="Massname Nr.">-->
<!--            <label for="sucheID"></label>-->
<!--            <input type="search" id="sucheID" placeholder="Patienten ID"><br><br>-->
<!--            <button class="btn_search" type="submit">Suchen</button>-->
<!--        </div>-->

<!--        2. Patienten kommt in Bildschirm nach der Suche in RIS durch das Aktivieren des Buttons Suchen-->
            <div class="pat2">

                <h3>2. Patient</h3>
                <label for="vornameP2">Vorname</label><br>
                <input id="vornameP2" name="vornameP2"/><br>

                <label for="nachnameP2">Nachname</label><br>
                <input id="nachnameP2" name="nachnameP2"/><br>


                <label for="geburi2" >Geburtsdatum</label><br>
                <input id="geburi2" type="date" name="geburi2"/><br>

                <label for="patId2">Patienten ID</label><br>
                <input id="patId2" name="patId2"/><br>

                <label for="massnahmeNr2">Massnahme Nr.</label><br>
                <input id="massnahmeNr2" name="massnahmeNr2"/><br>

                <label for="studie2">Studie Nr.</label><br>
                <input id="studie2" name="studie2"/><br>

                <label for="untersDatum2">Untersuchungsdatum</label><br>
                <input name="untersDatum2" type="date" id="untersDatum2"><br>

                <label for="untersZeit2">Untersuchungszeit</label><br>
                <input type="time" id="untersZeit2" name="untersZeit2"><br>

                <label for="modalitaet2">Modalität</label><br>
                <select name="modalitaet2">
                    <option value="MRT">MRT</option>
                    <option value="Röntgen">Röntgen</option>
                    <option value="Nuklearmedizin">Nuklearmedizin</option>
                    <option value="Kinderradiologie">Kinderradiologie</option>
                </select><br>

<!--                Nötig hier? Vielleicht reicht es nur bei Pat.1?-->
                <label name="instanz2">Instanz/Mandant</label><br>
                <select name="instanz2">
                    <option value="Klinik">Klinik</option>
                    <option value="Forschung">Forschung</option>
                    <option value="Belove">Belove</option>
                    <option value="Zahnklinik">Zahnklinik</option>
                </select>

                <!--    Fragezeichen neben instanz um es zu erklären-->
                <a  title="instanz" onmouseover="this.innerHTML='Klinik = Radiologie Abteilung | Forschung = Forschungsabteilung | beLove = NOCH ZU KLÄREN | Zahnklinik = Zahnmedizin'" onmouseout="this.innerHTML='?' ">
                    <svg  width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
                    </svg>
                </a><br><br>

                <label for="begruendung">Begründung</label><br>
                <textarea id="text" name="text" placeholder="Beschreibe genau was zu tun ist"></textarea><br>

            </div>

<!--            Nur Platzhalter fürs Grid-->
            <div></div>

            <div id="btn_p2">
            <button type="submit" class="btn_senden" name="action" value="senden">Senden</button><br><br>
            <button type="submit" class="btn_pdf" name="action" value="pdfanzeigen">PDF</button>
            </div>

        </form>
    </div>


<footer>
    <a href="footer.php">Impressum</a>
</footer>

</body>

</html>



