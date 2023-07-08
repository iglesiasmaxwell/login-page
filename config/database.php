<?php
    try{
        $conn = new PDO('mysql:host=localhost;dbname=login_page_db', 'root', '');
    }catch(PDOException $err){
        echo $err -> getMessage();
    }
?>