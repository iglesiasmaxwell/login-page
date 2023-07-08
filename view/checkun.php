<?php
include_once('../config/check.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN-PAGE-UKK</title>
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="login-box middle-chk" id="loginBox">
        <div class="title-box">
            <p>CHE<span class="title-span">CK</span></p>
        </div>
        <!-- <p>
        
        </p> -->
    <div class="input-box">
        <form action="" method="POST">
            <input class="input" type="text" placeholder="Username" name="uname" autocomplete="off">
            <div>
                <a class="pw-fgt" href="updatepw.php">Forgot Password?</a>
            </div>
            <div class="button-box center">
                <button class="login-button" type="submit" name="check"> <?= $warn; ?> </button>
            </div>
        </form>
    </div>

    <div><p class="or">or</p></div>
    <div class="hr"><hr></div>
    <div class="hr"><hr></div>
    
    <!-- <div class="login-icon-con">
        <a href="#" class="fa fa-google fa-fw login-icon"></a>
        <a href="#" class="fa fa-facebook fa-fw login-icon"></a>
        <a href="#" class="fa fa-twitter fa-fw login-icon"></a>
        <a href="#" class="fa fa-github fa-fw login-icon"></a>
    </div> -->

    <form action="" method="POST">
        <div class="options-con">
            <a href="../index.php" class="option-button">
                <p class="option-text">LOG IN</p>
            </a>
            <a href="signup.php" class="option-button">
                <p class="option-text">SIGN UP</p>
            </a>
        </div>
    </form>

</div>

    <script src="../js/script.js"></script>

</body>
</html>