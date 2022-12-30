<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sales Report</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/icon.svg" type="image/x-icon">
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
          createHeader('book', 'Sales Report', 'Showing Sales Report');
        ?>
        <!-- header section end -->

        <!-- form content -->
        <div class="row">

          <div class="col-md-12 form-group form-inline">
            <label class="font-weight-bold" for="">Start Date :&emsp;</label>
            <input type="date" class="form-control" id="start_date" onchange="showReport('sales');">
            &emsp;
            <label class="font-weight-bold" for="">End Date :&emsp;</label>
            <input type="date" class="form-control" id="end_date" onchange="showReport('sales');">
            &emsp;
            <button class="btn btn-success mt-3" onclick="location.reload();"><i class="fa fa-refresh"></i></button>
          </div>

          <div class="col col-md-12">
            <hr class="col-md-12" style="padding: 0px; border-top: 2px solid  #02b6ff;">
          </div>

          <div class="col col-md-12 table-responsive">
            <div id="print_content" class="table-responsive">
            	<table class="table table-bordered table-striped table-hover" id="sales_report_div">
                <?php
                require "includes/report.php";
                showSales("", "");
                ?>
            	</table>
            </div>
          </div>

          <div class="col-md-12 text-center">
            <button class="btn btn-primary" onclick="printReport('Sales');">Print</button>
          </div>

        </div>
        <!-- form content end -->
        <hr style="border-top: 2px solid #9732DAFF;">
      </div>
    </div>
    
    <script src="js/report.js"></script>
    <script src="js/restrict.js"></script>
  </body>
</html>
