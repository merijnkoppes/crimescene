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
<?php 
        session_start();
        include ("includes/nav.php")?>
    <div class="contentblok">
                <form name ="form" id="login" action="includes/loginvalidate.php" method="POST">
                <P id="losse-tekst">Log hier in: </P><br>
                <input type="text" name="username" placeholder="username" ><br>
                <p id="losse-tekst">Vul je wachtwoord in:</p><br>
                <input type="password" name="password" placeholder="password"><br>
    </div>
</body>
<script src="js/inlog.js"></script>

</html>
