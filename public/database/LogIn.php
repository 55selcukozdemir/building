<?php 

include('dbconnect2.php');



if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $email = $_POST["email"];
    $pass = $_POST["pass"];


    $choose = $db-> query("SELECT * FROM users WHERE email = '{$email}' AND pass = '{$pass}'");
    $user = $choose->fetch(PDO::FETCH_LAZY);

    
    session_start();

    if(empty($user->email)){
        
        
        header("location: ../login.php?message=false");

        $_SESSION["uyemi"] = "hayir";


    }else{

        $_SESSION["uyemi"] = "evet";
        header("location: ../index.php");
    }




};
?>