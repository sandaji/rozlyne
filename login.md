<?php
session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
header("location: home.php");
  exit;
}

require_once './includes/dbConfig.php';

$USERNAME = $PASSWORD = "";

$USERNAME_err =$PASSWORD_err =$login_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(empty(trim($_POST["username"]))){
    $USERNAME_err = "please enter your username";
  }else{
    $USERNAME = trim($_POST["username"]);
  }

  if(empty(trim($_POST["password"]))){
    $PASSWORD_err = "please enter your password";
  }else{
    $PASSWORD = trim($_POST["password"]);
  }

  if(empty($USERNAME_err) && empty($PASSWORD_err)){
    $sql = "SELECT USERNAME, PASSWORD FROM admin WHERE USERNAME= ?";

    if($stmt=mysqli_prepare($link,$sql)){
      mysqli_stmt_bind_param($stmt, "s", $param_username);

      $param_username = $USERNAME;

      if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);

        if(mysqli_stmt_num_rows($stmt)==1){
          mysqli_stmt_bind_result($stmt, $USERNAME, $hashed_password);
          if(mysqli_stmt_fetch($stmt)){
            if(password_verify($PASSWORD,$hashed_password)){
              session_start();
              $_SESSION["loggedin"] = true;
              $_SESSION["username"] = $USERNAME;

              header("Location:home.php");
            }else{
              $login_err="invalid username or password";
                }
            } 
          }else{
              $login_err="invalid username or password";

            }
          } else {
            echo "opps! something went wrong";
          }
          mysqli_stmt_close($stmt);
        }
      }
      mysqli_close($link);
}
 


?>






<?php include ('server.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pharmacy - Login</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome/css/all.min.css">
    <link rel="shortcut icon" href="images/icon.svg" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    
  </head>

      <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

   <body class="text-center">
   <div class="container wrapper">
<main>

   <form name="login-form" class='login-form' action="index.php" method="post">
    <?php include('errors.php') ?>
    <img class="mb-4 rounded" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
          
    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" name="username" id="username" placeholder="username" onkeyup="validate();">
      <label for="floatingInput " class="text-white">username </label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="password" id="password" placeholder="Password" onkeyup="validate();">
      <label for="floatingPassword" class="text-white">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="login_user">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy;<?php echo date("Y") ?></p>
  </form>
</main></div> 
<script src="js/index.js"></script>

    
  </body>
</html>







git remote add origin https://github.com/sandaji/rozlyne.git
git branch -M main
git push -u origin main