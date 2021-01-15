<!DOCTYPE html>
<html lang="de">

    <head>
    <meta charset="UTF-8">
    <link type="text/css" href="../css/style.css" rel="stylesheet" media="screen"/>
    <!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">-->
    <title>Anmeldung</title>
    </head>
    <header>PACS Datenänderungsantrag</header>

<!--   TODO: Hier gibt der User seine LogIn Daten ein. Sie werden in index.php mit der Klasse User vergliechen-->
    <body>
    <h3 class="login">Benutze dem gleichen Username und Passwort wie für Deine PC Anmeldung</h3>
    <div class="div_login">

        <form action="index.php" method="get">

            <label for="username"></label>
            <input id="username" type="text" placeholder="Username"><br><br>

            <label for="passwort"></label>
            <input id="passwort" type="password" placeholder="Passwort"><br><br>


            <button type="submit" class="btn_login">OK</button>

        </form>
    </div>

    <footer>
        <a href="footer.php">Impressum</a>
    </footer>


    </body>

</html>

