<?php

    try{
        
        $db = new PDO("mysql:host=localhost;dbname=building;charset=utf8","root","");
        $db->exec('SET CHARSET UTF8');


    } catch (PDOException $e) {

        echo $e->getMessage();
    }

?>
