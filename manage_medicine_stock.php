<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Manage Medicines Stock</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
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
          createHeader('capsules', 'Manage Medicines Stock', 'Manage Existing Medicine Stock');
        ?>
        <!-- header section end -->

        <!-- form content -->
        <div class="row">

          <div class="col-md-12 form-group form-inline">
            <label class="font-weight-bold" for="">Search By:&emsp;</label>
            
            <div class="d-flex justify-content-center align-items-center">
            <input type="text" class="form-control" id="by_name" placeholder="Medicine Name" onkeyup="searchMedicineStock(this.value, 'NAME');">
            &emsp;<input type="text" class="form-control" id="by_generic_name" placeholder="Generic Name" onkeyup="searchMedicineStock(this.value, 'GENERIC_NAME');">
            &emsp;<input type="text" class="form-control" id="by_suppliers_name" placeholder="supplier Name" onkeyup="searchMedicineStock(this.value, 'SUPPLIER_NAME');">   </div>
            &emsp;<button class="mt-3 btn btn-danger font-weight-bold" onclick="searchMedicineStock('0', 'QUANTITY');">Out of Stock</button>
            &emsp;<button class="mt-3 btn btn-warning font-weight-bold" onclick="searchMedicineStock('', 'EXPIRY_DATE');">Expired</button>
            &emsp;<button class="mt-3 btn btn-success font-weight-bold" onclick="cancel();"><i class="fa fa-refresh"></i></button>
          </div>
       


          <div class="col col-md-12">
            <hr class="col-md-12" style="padding: 0px; border-top: 2px solid  #02b6ff;">
          </div>

          <div class="col col-md-12 table-responsive">
            <div class="table-responsive">
            	<table class="table table-bordered table-striped table-hover">
            		<thead>
            			<tr>
            				<th style="width: 1%;">SL.</th>
            				<th style="width: 14%;">Medicine Name</th>
                    <th style="width: 5%;">Packing</th>
                    <th style="width: 14%;">Generic Name</th>
                    <th style="width: 10%;">Batch No</th>
                    <th style="width: 8%;">Ex. Date (mm/yy)</th>
            				<th style="width: 15%;">Supplier</th>
                    <th style="width: 7%;">Qty.</th>
                    <th style="width: 8%;">M.R.P.</th>
                    <th style="width: 8%;">Rate</th>
                    <th style="width: 10%;">Action</th>
            			</tr>
            		</thead>
                <tbody id="medicines_stock_div">
                  <?php
                    require 'includes/manage_medicine_stock.php';
                    if(isset($_GET['out_of_stock']))
                      echo "<script>searchMedicineStock('0', 'QUANTITY');</script>";
                    else if(isset($_GET['expired']))
                      echo "<script>searchMedicineStock('', 'EXPIRY_DATE');</script>";
                    else
                      showMedicinesStock("0");
                  ?>
            		</tbody>
            	</table>
            </div>
          </div>

        </div>
        <!-- form content end -->
        <hr style="border-top: 2px solid #9732DAFF;">
      </div>
    </div>
        <script src="js/manage_medicine_stock.js"></script>
    <script src="js/validateForm.js"></script>
    <script src="js/restrict.js"></script>
    
  </body>
</html>
