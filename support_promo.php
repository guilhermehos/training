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

<img src="store_content/images/storeLogo" height="75"><br/>  
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
</nav><div class="panel panel-default">
  <div class="panel-heading">Support Center</div>
  <div class="panel-body">
  	<div class="row">
  <div class="col-md-6"><p class="lead">Login to your ticket</p>
      <form name="loginTicket" action="view_ticket.php" method="POST">
<div class="form-group">
                                    <label for="emailAddress">Email Address:</label>
                                    <input class="form-control" placeholder="Email asscoiated with the ticket" name="emailAddress" type="text" autofocus="autofocus" required="required" id="emailAddress">
                                </div>
                                <div class="form-group">
                                    <label for="ticketAccessCode">Ticket Access Code:</label>
                                    <input class="form-control" placeholder="Sent to your email" name="ticketAccessCode" type="text" autofocus="autofocus" required="required" id="ticketAccessCode">
                                </div>
                                <input name="token" type="hidden" value="476777526a396f5a4b6546524d377837696969776e6a6e755461582f773648716e39413856434e52326c513d">
                <input name="login" type="submit" class="btn btn-success" value="Login to Ticket >">
            </form>
      </div>
  <div class="col-md-6"><p class="lead">Submit a ticket</p>
      <form name="sendTicket" action="" method="POST">
       <div class="row">
          <div class="col-md-6">
             <div class="form-group">
                <label for="username">Username:</label>
                <input class="form-control" placeholder="Minecraft Username" name="username" type="text" autofocus="autofocus" required="required" id="username">
             </div>
          </div>
          <div class="col-md-6">
             <div class="form-group">
                <label for="emailAddress">Email Address:</label>
                <input class="form-control" placeholder="Email asscoiated with the ticket" name="emailAddress" type="text" autofocus="autofocus" required="required" id="emailAddress">
             </div>
          </div>
       </div>
       <div class="form-group">
          <label for="urgency">Urgency:</label>
          <select name="urgency" id="urgency" class="form-control">
             <option>Low</option>
             <option>Medium</option>
             <option>High</option>
          </select>
       </div>
       <div class="form-group">
          <label for="subject">Subject:</label>
          <input class="form-control" placeholder="Ticket subject" name="subject" type="text" autofocus="autofocus" required="required" id="subject">
       </div>
       <div class="form-group">
          <label for="description">Description:</label>
          <textarea class="form-control" placeholder="Ticket Description. Please give as much detail as possible" name="description" required="required" rows="5" id="description"></textarea>
       </div>
       <div class="form-group">
          <label for="relevantURL">Relevant URL(s):</label>
          <input class="form-control" placeholder="Any relevant URL(s)" name="relevantURL" type="text" autofocus="autofocus" id="relevantURL">
       </div>
       <input type="hidden" name="token" value="476777526a396f5a4b6546524d377837696969776e6a6e755461582f773648716e39413856434e52326c513d">
       <input name="submitTicket" type="submit" class="btn btn-success" value="Submit Ticket >">
    </form>
    </div>
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