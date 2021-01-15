<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <link type="text/css" href="../css/style.css" rel="stylesheet" media="screen"/>
    <!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">-->
    <title>Anmeldung</title>
</head>
<body>
    <aside>
        <form action="index.php" method="post">
            <div class="benutzer">
                <h3>Benutzer</h3>
                <!--        Hier werden die Daten von AD geholt bzw. vom RIS?-->
                <label for="vorname">Vorname</label><br>
                <input id="vorname" name="vorname" value="Beate"/><br>
                <label for="nachname">Nachname</label><br>
                <input id="nachname" name="nachname" value="Sissi"/><br>
                <label for="email">Email</label><br>
                <input id="email" name="email" value="beate.sissi@charite.de"/><br>
                <label for="tel">Telefon Nr.</label><br>
                <input id="tel" name="tel" value="030 123 456 789"/>
            </div>
        </form>
    </aside>
</body>
</html>
