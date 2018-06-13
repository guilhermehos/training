
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
  <li class="active">Expenses</li>
</ol>

    <div class="pull-right"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#addExpenseModal">
      <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Expense
      </button>
    </div>
    <br/><br/>
    <div class="panel panel-default">
    <div class="panel-heading">Expenses</div>
    <div class="panel-body">
    <table class="table table-bordered"><tr><th>Date</th><th>Description</th><th>Amount</th><th>Action</th></tr><tr><td>2016-11-05 11:03:44</td><td>Transaction from MCxJB</td><td>4EUR</td>
          <td>
          <div class="btn-group">
          <a href=expenses.php?id=1 class="btn btn-danger btn-sm" role="button"><span class="glyphicon glyphicon glyphicon-trash"></span></a>
          </div>
          </td></tr></table>    <p class="pull-right">
      <strong>Total Sales - Total Expenses: </strong>4EUR    </p>
    </div>
    </div>
        <div class="modal fade" id="addExpenseModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Add a New Expense</h4>
         </div>
         <div class="modal-body">
            <form name="addExpense" action="" method="POST">
               <fieldset>
                  <div class="form-group">
                     <label for="description">Description:</label>
                     <input class="form-control" placeholder="The description of the expense e.g Server Hosting" name="description" type="text" required="required" id="description">
                  </div>
                  <div class="form-group">
                     <label for="amount">Amount:</label>
                     <input class="form-control" placeholder="Minus (-) for expenses, Plus (+) for money in." name="amount" type="text" required="required" id="amount">
                  </div>
                  <div class="modal-footer">
                  <input type="hidden" name="token" value="586a5a594c68647354517131346a4c51656874574557444d6f4f733437685352752b3861716572487970303d">
                     <input type="reset" class="btn btn-default" value="Reset">
                     <input type="submit" class="btn btn-success" value="Add Expense">
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