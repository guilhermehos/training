

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
  <li class="active">Users</li>
</ol>

  <div class="pull-right">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#inviteUserModal">
        <span class="glyphicon glyphicon glyphicon-envelope" aria-hidden="true"></span> Invite User
    </button>
</div>
<br/>
<br/>
    <div class="panel panel-default">
  <div class="panel-heading">Users</div>
  <div class="panel-body">
  <table class="table table-bordered"><tr><th>ID</th><th>Username</th><th>Real Name</th><th>Email</th><th>Action</th></tr><tr><td>4</td><td>admin</td><td>admin</td><td>admin@admin.com</td><td>
          <div class="btn-group">
          <a href=users.php?username=admin class="btn btn-danger btn-sm" role="button"><span class="glyphicon glyphicon-trash"></span></a>
          </div>
          </td></tr></table></div></div>      <div class="modal fade" id="inviteUserModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Invite a user</h4>
            </div>
            <div class="modal-body">
                <form name="addGateway" action="" method="POST">
                    <fieldset>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input class="form-control" placeholder="The email of the person you are inviting" name="email" type="text" required="required" id="email">
                        </div>

                        <div class="form-group">
                            <label for="userLevel">User Level:</label>
                            <select name="userLevel" id="userLevel" class="form-control">
                                <option>Support (Access to support tickets only)</option>
                                <option>Products (Inherits support and access to editing and creating products)</option>
                                <option>Full Access (Admin access)</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="token" value="3454776b627362654e34384b34736d4874346376755a366338422b4b5a476b79676370645a75774e4175733d">
                            <input type="reset" class="btn btn-default" value="Reset">
                            <input type="submit" class="btn btn-success" value="Invite User">
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