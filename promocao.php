<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
echo "Olá, " . $_SESSION['usuarioNome'];
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="templates/style/bootstrap.min.css" type="text/css"/>
	</head>
	<body><div class="container"></div><div class="well well-sm"><div class="container"><strong>Server IP:</strong> 193.0.159.161:25780<div class="pull-right">Not currently logged in &nbsp;</div></div></div><div class="container"><br/>
      <div class="btn-group pull-right" role="group" aria-label="...">
      <a href="tickets.php" class="btn btn-info" role="button">Support</a>
         <button type="button" class="btn btn-info">Currency EUR</button>
        <a href="view_cart.php" class="btn btn-info" role="button"><span class="glyphicon glyphicon-cart"></span>0 item(s) for 0.00EUR</a>
         </div>

<img src="../store_content/images/storeLogo" height="75"><br/>  
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
      <a class="navbar-brand" href="index.php">Home</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav">
    <li><a href="view_category.php?categoryName=Items as Blocks">Items as Blocks</a></li><li><a href="view_category.php?categoryName=Items as List">Items as List</a></li>    </ul>
  </div>
  </div>
</nav><img src="../store_content/images/storeCoverPhoto" height="250" width="100%">
<br/><br/>
<div class="row">
  <div class="col-md-8">
  <div class="panel panel-default">
  <div class="panel-heading">Welcome to the McToolbox Store</div>
  <div class="panel-body">Welcome to the McToolbox store. This store is powered by Donation Store. Here you can purchase all the things you may need to make your stay on our server really awesome. Thank you for visiting our store! &lt;br/&gt;&lt;br/&gt;You can even use
&lt;h1&gt;HTML&lt;/h1&gt;
in this description!</div>
</div>
</div>
  <div class="col-md-4"><div class="panel panel-default">
  <div class="panel-heading">Need support?</div>
  <div class="panel-body">If you have any queries about payments, transactions or problems recieving your in game ranks, please send us a support ticket. A member of staff will reply as soon as possible, and you'll even get a notfication in game when a staff member replies!</div>
</div>
</div>
</div> 
<?php

    include("footer.php");

 ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../templates/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
    $("body").tooltip({ selector: '[data-toggle=tooltip]' });
});
</script>