<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add New Supplier</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
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
          // createHeader('group', 'Add Supplier', 'Add New Supplier');
          // header section end
        ?>
        <div class="row">
          <div class="row col col-md-6">
            <?php
              // form content
              require "sections/add_new_supplier.html";
            ?>
          </div>
        </div>
        <hr style="border-top: 2px solid #9732DAFF;">

      </div>
    </div>
        <script src="js/validateForm.js"></script>
    <script src="js/restrict.js"></script>
  </body>
</html>
