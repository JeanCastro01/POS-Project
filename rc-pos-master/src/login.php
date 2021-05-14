<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>CCT-POS - Login</title>
        <link href="../src/css/bootstrap.css" rel="stylesheet">
        <link href="../src/css/font-awesome.css" rel="stylesheet" type="text/css">
        <link href="../src/css/loginStyle.css" rel="stylesheet">

    </head>

    <body class="bg-dark">

        <div class="container">
            <div class="img">
                <img
                    src="https://raw.githubusercontent.com/sefyudem/Responsive-Login-Form/82b8d8efd3b0ac6382b9d0d71a99c6cf9dcefa23/img/bg.svg">
            </div>
            <div class="login-content">

                <form action="../includes/loginValidator.php" method="post">
                    <img
                        src="https://raw.githubusercontent.com/sefyudem/Responsive-Login-Form/82b8d8efd3b0ac6382b9d0d71a99c6cf9dcefa23/img/avatar.svg">
                    <h2 class="title">Welcome</h2>
                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>


                        <div class="div">


                            <?php
                    if(isset($_GET['userInvalid'])){
                      echo " <input type= 'text' name='username' placeholder='username' id='username' value={$_GET['userInvalid']} required >";
                    } else {
                      echo " <input type='text' id= 'username' name= 'username' placeholder='Username' required>";
                    }
                  ?>
                        </div>
                    </div>
                    <div class="input-div pass">
                        <div class="i">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="div">

                            <input type="password" name="password" placeholder="password" id="password" required>
                            <?php
                        if(isset($_GET['userInvalid'])){
                          echo " <Span class= 'error'>Username or Password Incorrect! Please try again!!</Span>";
                        }
                   ?>
                        </div>


                    </div>


            </div>
            <a href="#">Forgot Password?</a>
            <input type="submit" class="btn" value="Login">

            </form>
        </div>



        <script src="../src/js/jquery.min.js"></script>
        <script src="../src/js/bootstrap.bundle.min.js"></script>
        <script src="../src/js/jquery.easing.min.js"></script>
    </body>

</html>