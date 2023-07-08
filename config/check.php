<?php
    include_once('../config/database.php');
    session_start();

    $warn = 'CHECK';

    if(isset($_POST['check'])){
        $un = $_POST['uname'];

        if(empty($un)){
            $warn = "No Username Specified";
            header('refresh: 1.5');
        }else{
            $q_un = "SELECT * FROM tb_user WHERE username='$un'";
            $prepareun = $conn->prepare($q_un);
            $prepareun->execute();

            $fetchun = $prepareun->fetch(PDO::FETCH_ASSOC);

            if(is_array($fetchun)){
                if($fetchun['username']==$un){
                    $warn = "Username Already Exist";
                    header('refresh: 1');
                }
            }else{
                $warn = "Username is Available";
                header('refresh: 1; signup.php');
            }
        }
    }
?>