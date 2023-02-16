<?php 
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if($_POST['voornaam'] == "frank" && $_POST['achternaam'] == "doedels") {
        header("Location:../klaar.php");
        return;
    }
    
    header("Location:../fout.php");
    return;
}
?>
