
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../templates/style/bootstrap.min.css" type="text/css"/>
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
  <li class="active">Customer List</li>
</ol>

		<div class="panel panel-default">
    <div class="panel-heading">Customer List</div>
    <div class="panel-body">
    <table class="table table-bordered"><tr><th>Username</th><th>Action</th></tr><tr><td><img height="25" src="https://minotar.net/avatar/MCxJB"> MCxJB</td>
          <td>
          <div class="btn-group">
          <a href=view_customer.php?username=MCxJB class="btn btn-info btn-sm" role="button"><span class="glyphicon glyphicon-eye-open"></span></a>
          </div>
          </td></tr></table>    </div>
    </div>
    </div>
<?php
  include ("footer.php");
?>
</body>
</html>