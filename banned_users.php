
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
?>

<ol class="breadcrumb">
  <li><a href="control_panel.php">Control Panel</a></li>
  <li class="active">Account Settings</li>
</ol>

    <div class="pull-right"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#banUserModal">
       <span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span> Ban User
       </button>
    </div>
    <br/><br/>
    <div class="modal fade" id="banUserModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
       <div class="modal-dialog" role="document">
          <div class="modal-content">
             <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Ban User</h4>
             </div>
             <div class="modal-body">
                <form name="banUser" action="" method="POST">
                   <fieldset>
                      <div class="form-group">
                         <label for="username">Username:</label>
                         <input class="form-control" placeholder="Minecraft Username" name="username" type="text" required="required" id="username">
                      </div>
                      <div class="form-group">
                         <label for="ipAddress">IP Address:</label>
                         <input class="form-control" placeholder="IP Address, optional" name="ipAddress" type="text" id="ipAddress">
                      </div>
                      <div class="form-group">
                         <label for="reason">Reason:</label>
                         <textarea class="form-control" placeholder="The reason for banning this user" name="reason" required="required" rows="5" id="reason"></textarea>
                      </div>
             </div>
             <div class="modal-footer">
             <input type="hidden" name="token" value="5670706b5450306768476c484674707843674f4d6870626d50364e69793556324639746c6f69304e65646b3d">
             <input type="reset" class="btn btn-default" value="Reset">
             <input type="submit" class="btn btn-success" value="Add Ban">
             </div>
             </fieldset>
             </form>
          </div>
       </div>
    </div>
        <div class="panel panel-default">
    <div class="panel-heading">Banned Users</div>
    <div class="panel-body">
    <table class="table table-bordered"><tr><th>Username</th><th>Reason</th><th>IP</th><th>Action</th></tr><tr><td>Notch</td><td>Greifer</td><td>Not Availible</td><td><a href=banned_users.php?id=1 class="btn btn-danger btn-sm" role="button"><span class="  glyphicon glyphicon-trash"></span></a></td></tr></table>  </div>
  </div>
  </div>
 <?php

    include("footer.php");

 ?>
</body>
</html>