<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Manage Invoice</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome/css/all.min.css">
    <link rel="shortcut icon" href="images/icon.svg" type="image/x-icon">
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
          createHeader('address-book', 'Manage Invoice', 'Manage Existing Invoice');
        ?>
        <!-- header section end -->

        <!-- form content -->
        <div class="row">

          <div class="col-md-12 form-group form-inline">
            <label class="font-weight-bold" for="">Search By:&emsp;</label>
            <div class="d-flex justify-content-center align-items-center">
            <input type="number" class="form-control" id="by_invoice_number" placeholder="Invoice Number" onkeyup="searchInvoice(this.value, 'INVOICE_ID');">
            &emsp;
            <input type="text" class="form-control" id="by_customer_name" placeholder="Customer Name" onkeyup="searchInvoice(this.value, 'NAME');">
            &emsp;<label class="font-weight-bold" for="">Invoice Date :&emsp;</label>
            <input type="date" class="form-control" id="by_date" onchange="searchInvoice(this.value, 'INVOICE_DATE');">
            &emsp;<button class="btn mt-3 btn-success font-weight-bold" onclick="refresh();"><i class="fa fa-refresh"></i></button>
          </div>
</div>
          <div class="col col-md-12">
            <hr class="col-md-12" style="padding: 0px; border-top: 2px solid  #02b6ff;">
          </div>


          <div class="col col-md-12 table-responsive">
            <div class="table-responsive">
            	<table class="table table-bordered table-striped table-hover">
            		<thead>
            			<tr>
            				<th>SL.</th>
            				<th>Invoice No</th>
            				<th>Customer Name</th>
            				<th>Date</th>
                    <th>Total Amount</th>
                    <th>Total Discount</th>
                    <th>Net Total</th>
                    <th>Action</th>
            			</tr>
            		</thead>
                <tbody id="invoices_div">
                  <?php
                    require 'includes/manage_invoice.php';
                    showInvoices();
                  ?>
                </tbody>
            	</table>
            </div>
          </div>

        </div>
        <!-- form content end -->
        <hr style="border-top: 2px solid #ff5252;">
      </div>
    </div>
        <script src="js/manage_invoice.js"></script>
    <script src="js/restrict.js"></script>
  </body>
</html>
