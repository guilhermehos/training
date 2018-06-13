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
  <li class="active">Account Settings</li>
</ol>

    <div class="panel panel-default">
       <form name="updateAccountSettings" action="" method="POST" enctype="multipart/form-data">
          <div class="panel-heading">Account Settings</div>
          <div class="panel-body">
             <div class="row">
                <div class="col-md-4">
                   <p class="text-center lead">admin<br/>
                      <img src="" width="200"><br/><small>
                      ID: 4 <br/>
                      admin@admin.com</small>
                   </p>
                </div>
                <div class="col-md-8">
                   <p class="lead">Details</p>
                   <hr/>
                   <div class="form-group">
                      <label for="realName">Real Name:</label>
                      <input class="form-control" placeholder="admin" name="realName" type="text" id="realName">
                   </div>
                   <div class="form-group">
                      <label for="emailAddress">Email Address:</label>
                      <input class="form-control" name="emailAddress" placeholder="admin@admin.com" type="text" id="emailAddress">
                   </div>
                   <div class="form-group">
                      <label for="password">Password:</label>
                      <input class="form-control" name="password" type="password" id="password">
                   </div>
                   <div class="form-group">
                      <label for="profileImage">Update Profile Image:</label>
                      <input type="file" id="profileImage" name="profileImage">
                      <p class="help-block">This will be re-sized</p>
                   </div>
                   <input type="hidden" name="token" value="69656636557a67356b34796a347a6673782b39745975434575736e4b696c435175783253633372307267343d">
                   <input type="submit" class="btn btn-success pull-right" value="Update settings">
                </div>
             </div>
          </div>
    </div>
    </form>
    </div>
 <?php

    include("footer.php");

 ?>
</body>
</html>