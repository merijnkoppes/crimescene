<?php
    session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if($_POST['username'] == "billy" && $_POST['password'] == "janssen") {
            header("Location:../ingelogd.php");
            return;
        }

        header("Location:../foutantwoord.php");
        return;
    }
?>