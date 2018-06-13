
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="templates/style/bootstrap.min.css" type="text/css"/>
	</head>
	<body>

<?php
  include ("include.php");
    include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
echo "Olá, " . $_SESSION['usuarioNome'];
?>

<div class="container">
<ol class="breadcrumb">
  <li><a href="control_panel.php">Control Panel</a></li>
  <li class="active">Discounts</li>
</ol>

    <div class="pull-right">
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#couponModal">
      <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Coupon
      </button>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#saleModal">
      <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Sale
      </button>
    </div>
    <br/><br/>
    		<div class="panel panel-default">
    <div class="panel-heading">Coupons</div>
    <div class="panel-body">
    <table class="table table-bordered"><tr><th>Name</th><th>Discount</th><th>Use As</th><th>Use With Sale</th><th>Action</th></tr><tr><td>10CHRISTMAS</td><td>10</td><td>A percentage discount<td>Yes</td><td>
          <a href=discounts.php?name=10CHRISTMAS&type=coupon class="btn btn-danger btn-sm" role="button"><span class="glyphicon glyphicon-trash"></span></a>
          </td></tr></table></div></div>		<div class="panel panel-default">
    <div class="panel-heading">Sales</div>
    <div class="panel-body">
    <table class="table table-bordered"><tr><th>Name</th><th>Amount</th><th>Active on Category</th><th>Action</th></tr><tr><td>10% Off Item Blocks</td><td>10</td><td>Items as Blocks</td><td>
          <a href=discounts.php?name=10%%Off%Item%Blocks&type=sale class="btn btn-danger btn-sm" role="button"><span class="glyphicon glyphicon-trash"></span></a>
          </td></tr></table></div></div>    <div class="modal fade" id="couponModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Add a New Coupon</h4>
         </div>
         <div class="modal-body">
            <form name="addGateway" action="" method="POST">
               <fieldset>
                  <div class="form-group">
                     <label for="name">Name:</label>
                     <input class="form-control" placeholder="Coupon Name is the same as coupon code" name="name" type="text" required="required" id="name">
                  </div>
                  <div class="form-group">
                     <label for="useAs">Use coupon as:</label>
                     <select name="useAs" id="useAs" class="form-control">
                        <option></option>
                        <option>A percentage discount</option>
                        <option>An amount off</option>
                     </select>
                  </div>
                  <div class="form-group">
                     <label for="couponDiscount">Discount:</label>
                     <input class="form-control" placeholder="Discount" name="couponDiscount" type="text" required="required" id="couponDiscount">
                  </div>
                  <div class="form-group">
                     <label for="allowWithSale">Allow to use in conjunction with a sale:</label>
                     <select name="allowWithSale" id="allowWithSale" class="form-control">
                        <option></option>
                        <option>Yes</option>
                        <option>No</option>
                     </select>
                  </div>
                  <div class="modal-footer">
                     <input type="hidden" name="token" value="346c7679474863355558787571564e434f387348393674506d494634524e33652b6936654c5846464a6d343d">
                     <input type="reset" class="btn btn-default" value="Reset">
                     <input type="submit" class="btn btn-success" value="Add Coupon">
                  </div>
               </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="saleModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Add a New Sale</h4>
         </div>
         <div class="modal-body">
            <form name="addGateway" action="" method="POST">
               <fieldset>
                  <div class="form-group">
                     <label for="name">Name:</label>
                     <input class="form-control" placeholder="Name of the sale" name="name" type="text" required="required" id="name">
                  </div>
                  <div class="form-group">
                     <label for="activeOnCategory">Active on Category:</label>
                     <select name="activeOnCategory" id="activeOnCategory" class="form-control">
                     <option>Items as Blocks</option><option>Items as List</option>                     </select>
                  </div>
                  <div class="form-group">
                     <label for="discount">Discount (Percent):</label>
                     <input class="form-control" placeholder="Discount" name="discount" type="text" required="required" id="name">
                  </div>
                  <div class="modal-footer">
                  <input type="hidden" name="token" value="346c7679474863355558787571564e434f387348393674506d494634524e33652b6936654c5846464a6d343d">
                     <input type="reset" class="btn btn-default" value="Reset">
                     <input type="submit" class="btn btn-success" value="Add Sale">
                  </div>
               </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
 <?php

    include("footer.php");

 ?>
</body>
</html>