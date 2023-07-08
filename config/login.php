<?php
    include_once('config/database.php');
    session_start();

    $warn = 'LOGIN';

    if(isset($_POST['login'])){
        $uname = $_POST['uname'];
        $pword = $_POST['pword'];
        
        $q = "SELECT * FROM tb_user WHERE username='$uname' AND password='$pword'";
        $prepare = $conn->prepare($q);
        $prepare->execute();
    
        $fetch = $prepare->fetch(PDO::FETCH_ASSOC);
    
        if(is_array($fetch)){
            if($fetch['username']==$uname AND $fetch['password']==$pword){
                $_SESSION['username'] = $fetch['username'];
                // $warn = "<p style=\"background-color: #EF9E9E; color: #ffffff; padding-top: 10px; padding-bottom: 10px; margin: auto 65px; border-radius: 10px; text-align: center; font-size: small; margin-top: -8px; margin-bottom: -8px;\">Login Success</p>";
                $warn = "Login Success";
                header('refresh: 1;view/home.php');
            }
        }else{
            // $warn = "<p style=\"background-color: #EF9E9E; color: #ffffff; padding-top: 10px; padding-bottom: 10px; margin: auto 65px; border-radius: 10px; text-align: center; font-size: small; margin-top: -8px; margin-bottom: -8px;\">Wrong Username or Password</p>";
            $warn = "Wrong Data";
            header('refresh: 1.5');
        }
}