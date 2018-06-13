
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
<ol class="breadcrumb">
  <li><a href="control_panel.php">Control Panel</a></li>
  <li class="active">Minecraft Commands</li>
</ol>

    <div class="row">
    <div class="col-md-6">
    <div class="panel panel-default">
    <div class="panel-heading">Pending Commands</div>
    <div class="panel-body">

    <table class="table table-bordered" width="100%"><tr><th>Command ID</th><th>Command</th><th>Purchase Code</th><th>User</th><th>Action</th></tr><tr><td>1</td><td>give MCxJB diamond_sword 1</td><td>njKNISYA8u3E</td><td><img height="25" src="https://minotar.net/avatar/MCxJB"> MCxJB</td>
          <td>
          <div class="btn-group">
          <a href=commands.php?id=1 class="btn btn-danger btn-sm" role="button"><span class="glyphicon glyphicon-trash"></span></a>
          </td></tr></table>    </div>
    </div>
    </div>
    <div class="col-md-6"><div class="panel panel-default">
    <div class="panel-heading">Used Commands</div>
    <div class="panel-body">
    <table class="table table-bordered" width="100%"><tr><th>Command ID</th><th>Command</th><th>Purchase Code</th><th>User</th><th>Action</th></tr><tr><td>2</td><td>give MCxJB diamond_pickaxe 1</td><td>njKNISYA8u3E</td><td>MCxJB<img height="25" src="https://minotar.net/avatar/MCxJB"></td>
          <td>
          <div class="btn-group">
          <a href=commands.php?reinstate=2 class="btn btn-info btn-sm" role="button"><span class="glyphicon glyphicon-refresh"></span></a>
          </td></tr></table>    </div>
    </div>
    </div>
    </div>
 <?php

    include("footer.php");

 ?>
</body>
</html>