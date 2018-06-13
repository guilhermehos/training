
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
  <li class="active">Transactions</li>
</ol>

    <form name="searchTransactions" method="POST" action="">
      <div class="input-group">
        <input class="form-control" placeholder="Search transactions by ID" name="searchTransactions" type="text" id="searchTransactions">
        <span class="input-group-btn">
        <input type="submit" class="btn btn-success" value="Search >">
        </span>
      </div>
    </form>
    <br/>
    <div class="panel panel-default">
    <div class="panel-heading">Transactions</div>
    <div class="panel-body">
    <table class="table table-bordered"><tr><th>Username</th><th>Amount</th><th>Status</th><th>Date</th><th>Action</th></tr><tr><td><img height="25" src="https://minotar.net/avatar/MCxJB"> MCxJB</td><td>4EUR</td><td>Complete</td><td>6:03pm</td>
          <td>
          <div class="btn-group">
          <a href=view_transaction.php?id=3 class="btn btn-info btn-sm" role="button"><span class="glyphicon glyphicon-eye-open"></span></a>
          </div>
          </td></tr></table>    </div>
    </div>
    </div>
 <?php

    include("footer.php");

 ?>
</body>
</html>