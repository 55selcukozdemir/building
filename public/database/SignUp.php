<?php
include("dbconnect2.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    

    $email = $_POST["email"];

    $choseUsers = $db->query("SELECT * FROM users WHERE email= '{$email}'");
    $result = $choseUsers->fetch(PDO::FETCH_ASSOC);

    //isset($result)
    if(false){

        header('location: http://localhost/AdminLTE-php/register.php?message=already');

    }else{
        

        $person = $db-> prepare("INSERT INTO users VALUES (?,?,?,?,?,?,?)");
        $person->execute(array(
        $_POST['fname'],$_POST['lname'],$_POST['email'],$_POST['pass'],"","",""
         ));

        header('location: http://localhost/AdminLTE-php/');
    }




}






?>