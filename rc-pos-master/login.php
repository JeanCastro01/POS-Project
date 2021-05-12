<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>RC-POS - Login</title>
    <link href="src/css/bootstrap.css" rel="stylesheet">
    <link href="src/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="src/css/styles.css" rel="stylesheet">
  </head>
  <body class="bg-dark">
    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header bg-primary text-white">Login to your account</div>
        <div id="login" class="card-body">

        
        <form method="post" action=""> <!--sends information to loginValidator-->
        <div class="form-group">
          
        <?php
       
                    if(isset($_GET['userInvalid'])){
                      echo " <input type='text' id= 'username' name= 'username' placeholder='username' value={$_GET['userInvalid']}>";
                    } else {
                      echo " <input type='text' id= 'username' name= 'username' placeholder='username'>";
                    }
                  ?>
                  <input type="password" id="password" name= "password" placeholder="Password">
                 
                  <?php
                        if(isset($_GET['userInvalid'])){
                          echo " <Span class= 'error'>Username or Password Incorrect! Please try again!!</Span>";
                        }
                   ?>

        </div>


         
            <a class="btn btn-primary btn-block" href="index.html">Login</a>
          </form>
          <div class="text-center">
            <br>
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>
    <script src="src/js/jquery.min.js"></script>
    <script src="src/js/bootstrap.bundle.min.js"></script>
    <script src="src/js/jquery.easing.min.js"></script>
  </body>
</html>
