<?php
    session_start();
    include("connect.php");
    // header("Location: ../index.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $sql = "SELECT * FROM users WHERE username = :username";
        $stmt = $connect -> prepare($sql);
        $stmt -> bindParam(":username", $_POST["username"]);
        $stmt -> execute();
        $result = $stmt -> fetchAll();
        
        foreach($result as $res)  { 
            if($_POST["password"] == $res["password"]) {
                header("Location:../ingelogd.php");
                return;
            }
        }
        header("Location:../foutantwoord.php");
    }
    // if (isset($_SESSION["username"]) == TRUE){

    // if(isset($_POST["password"]) == TRUE)
    // { 
    //     header("Location: ../ingelogd.php");
    // }
    // }
        ?>