<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Document</title>
</head>

<body>
    <?php include("includes/nav.php"); ?>
    <div class="ingelogd">
        <div class="contentblok">
            <form name="antwoord" id="wieisdedader" action="includes/antwoordvalidation.php" method="POST">
                <P id="losse-tekst">Wat is de voornaam van de dader? </P>
                <input type="text" name="voornaam" placeholder="voornaam">
                <p id="losse-tekst">Wat is de achternaam van de dader?</p>
                <input type="password" name="achternaam" placeholder="achternaam">
                <input type="submit" value="submit" name="submit">
        </div>




    </div>
    <?php include("includes/foot.php");?>
</body>

</html>