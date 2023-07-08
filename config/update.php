<?php
    include_once('../config/database.php');
    session_start();

    $warn = 'UPDATE';
    
    if(isset($_POST['update'])){
        $un = $_POST['uname'];
        $pw = $_POST['pword'];
        
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
                    $q = "UPDATE tb_user SET password='$pw' WHERE username='$un'";
                    $prepare = $conn->prepare($q);
        
                    if($prepare->execute()){
                        $warn = "Password Changed";
                        header('refresh: 1; ../index.php');
                    }else{
                        $warn = "Password Can't Be Changed";
                        header('refresh: 1.5; ../index.php');
                    }
                    header('refresh: 1; ../index.php');
                }
            }else{
                $warn = "Username Not Exist";
                header('refresh: 1; signup.php');
            }
        }
    }
?>