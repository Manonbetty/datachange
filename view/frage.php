<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <link type="text/css" href="../css/style.css" rel="stylesheet" media="screen"/>

    <title>1 Patient oder mehr?</title>
</head>

<header>PACS Datenänderungsantrag</header>

<?php
include "benutzerdata.php";
?>

<body>

<h1>Sind Daten von einem weiteren Patienten benötigt?</h1>
<a href="index.php?action=btn_ja">
    <button class="btn_ja" name="btn_ja">Ja</button>
    </a><br>
<a href="index.php?action=btn_nein">
    <button class="btn_nein" name="btn_nein">Nein</button>
    </a>

<footer>
    <a href="index.php?action=impressum">Impressum</a>
</footer>

</body>
</html>

