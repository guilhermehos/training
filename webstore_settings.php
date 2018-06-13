
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
  <li class="active">Webstore Settings</li>
</ol>

              <div class="panel panel-default">
  <div class="panel-heading">Webstore Settings</div>
  <div class="panel-body">
<form name="updateWebstoreSettings" action="" method="POST">
                                    <div class="form-group">
            <label for="currency">Currency: <small>This is the currency that will be applied on your store and at the PayPal checkout</small></label>
            <select name="currency" id="currency" class="form-control">
            <option></option>
  <option>AUD - Australian Dollar</option>
  <option>BRL - Brazilian Real</option>
  <option>CAD - Canadian Dollar</option>
  <option>CZK - Czech Koruna</option>
  <option>DKK - Danish Krone</option>
  <option>EUR - Euro</option>
  <option>HKD - Hong Kong Dollar</option>
  <option>MXN - Mexican Peso</option>
  <option>NOK - Norwegian Krone</option>
  <option>NZD - New Zealand Dollar</option>
  <option>PHP - Philippine Peso</option>
  <option>PLN - Polish Zloty</option>
  <option>GBP - Pound Sterling</option>
  <option>SGD - Singapore Dollar</option>
  <option>SEK - Swedish Krona</option>
  <option>CHF - Swiss Franc</option>
  <option>THB - Thai Baht</option>
  <option>USD - U.S. Dollar</option>
</select>
            </div>
            <input type="hidden" name="token" value="4a536759374e64724c6b6f706d5458424b7a766d746c4a4f4162524c4d343845304473714b5262536974773d">
            <input type="submit" class="btn btn-success pull-right" value="Update">
            </form></div>
            </div>
            </div>
    </div>
 <?php

    include("footer.php");

 ?>
</body>
</html>