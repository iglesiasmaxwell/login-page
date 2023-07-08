<?php
    include_once('../config/database.php');
    session_start();

    $warn = 'SIGNUP';

    if(isset($_POST['signup'])){
        $un = $_POST['uname'];
        $pw = $_POST['pword'];

        if(empty($un&&$pw)){
            $warn = "Fill The Data";
            header('refresh: 1');
        }else{
            $q_un = "SELECT * FROM tb_user WHERE username='$un'";
            $prepareun = $conn->prepare($q_un);
            $prepareun->execute();

            $fetchun = $prepareun->fetch(PDO::FETCH_ASSOC);

            if(is_array($fetchun)){
                if($fetchun['username']==$un){
                    $warn = "Username Already Exist";
                    header('refresh: 1; ../index.php');
                }
            }else{
                $q = "INSERT INTO tb_user (`username`, `password`) VALUE('$un', '$pw')";
                $prepare = $conn->prepare($q);

                if($prepare->execute()){
                    $warn = "Sign Up Success";
                    header('refresh: 1;../index.php');
                }else{
                    $warn = "Sign Up Error";
                    header('refresh: 1.5;../index.php');
                }
            }
        }
    }
?>