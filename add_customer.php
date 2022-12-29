<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add New Customer</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome/css/all.min.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- including side navigations -->
    <?php include("sections/sidenav.html"); ?>
    <div class="container-fluid">
      <div class="container">
        <!-- header section -->
        <?php
          require "includes/header.php";
          // createHeader('handshake', 'Add Customer', 'Add New Customer');
          // header section end
        ?>
        <div class="row">
          <div class="row col col-md-6">
            <?php
              // form content
              require "sections/add_new_customer.html";
            ?>
          </div>
        </div>
        <hr style="border-top: 2px solid #ff5252;">
      </div>
    </div>
    
    <script src="js/validateForm.js"></script>
    <script src="js/restrict.js"></script>
  </body>
</html>