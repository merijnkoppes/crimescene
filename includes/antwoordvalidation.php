<?php 
session_start();
include ("connect.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $sql = "SELECT * FROM dader WHERE voornaam = :voornaam";
    $stmt = $connect -> prepare($sql);
    $stmt -> bindParam(":voornaam", $_POST["voornaam"]);
    $stmt -> execute();
    $result = $stmt -> fetchAll();

        foreach($result as $res)    {
            if ($_POST["achternaam"] == $res["achternaam"]){
              header("Location:../klaar.php");
              return;
            }
        }
        header("Location:../fout.php");
}
?>
