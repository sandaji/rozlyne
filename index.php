<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>
       rozelyne pharmacy
    </title>
    
    <link rel="stylesheet" type="text/css"
            href="style.css">

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
</head>
<body class="text-center">
   <div class="container wrapper">
<main>
        <h2 class="h3 mb-3 fw-normal">Login page!</h2>

     
    <form method="post" action="index.php"  class='login-form'>
  
        <?php include('errors.php'); ?>
  
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
         
    <p class="mt-5 mb-3 text-muted">rozelyne pharmacy&copy;<?php echo date("Y") ?></p>
    </form>
    </main>
    </div>
</body>
 
</html>