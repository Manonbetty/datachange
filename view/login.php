<!DOCTYPE html>
<html lang="de">

    <head>
    <meta charset="UTF-8">
    <link type="text/css" href="css/style.css" rel="stylesheet" media="screen"/>

    <title>Anmeldung</title>
    </head>
    <header>PACS Datenänderungsantrag</header>

<!--   TODO: Hier gibt der User seine LogIn Daten ein. Sie werden in index.php mit der Klasse User vergliechen-->
    <body>
    <h3 class="login">Benutze dem gleichen Username und Passwort wie für Deine PC Anmeldung</h3>
    <div class="div_login">

        <form action="index.php" method="post">

            <label for="username"></label>
            <input id="username" type="text" placeholder="Username" name="uname"><br><br>


            <label for="passwort"></label>
            <input id="passwort" type="password" placeholder="Passwort" name="pw"><br><br>


            <button type="submit" class="btn_login" value="login">OK</button>

        </form>
    </div>


    <footer>
        <a href="index.php?action=impressum">Impressum</a>
    </footer>


    </body>

</html>

