
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
  <li class="active">Tickets</li>
</ol>

		<div class="panel panel-default">
    <div class="panel-heading">Tickets</div>
    <div class="panel-body">
    <table class="table table-bordered"><tr><th>ID</th><th>Email</th><th>Minecraft IGN</th><th>Urgency</th><th>Subject</th><th>Status</th><th>Action</th></tr><tr><td>1</td><td>markbarrett42@hotmail.com</td><td>MCxJB<td><p class="text-success">Low</p></td><td>Received only one purchase</td><td><span class="label label-success">Open</span></td><td>
          <div class="btn-group">
          <a href=view_ticket.php?id=1 class="btn btn-info btn-sm" role="button"><span class="glyphicon glyphicon-eye-open"></span></a>
          <a href=tickets.php?id=1 class="btn btn-danger btn-sm" role="button"><span class="glyphicon glyphicon-trash"></span></a>
          </div>
          </td></tr></table></div></div></div>
 <?php

    include("footer.php");

 ?>
</body>
</html>