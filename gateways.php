
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

<div class="container">
<ol class="breadcrumb">
  <li><a href="control_panel.php">Control Panel</a></li>
  <li class="active">Gateways</li>
</ol>

		<div class="panel panel-default">
  		<div class="panel-heading">Gateways</div>
  		<div class="panel-body">
  					<div class="well well-sm">
   				<div class="row">
      				<div class="col-md-4"><img src="../templates/images/paypal.png" height="40"></div>
      				<div class="col-md-4">
         				<h4>markbarrett42@hotmail.com &nbsp;<span class="label label-success">Active</span></h4>
      				</div>
      				<div class="col-md-4"><a href=gateways.php?email=markbarrett42@hotmail.com&delete=yes class="btn btn-danger pull-right" role="button"><span class="glyphicon glyphicon-trash"></span></a>      				</div>
   				</div>
			</div>
					</div>
		</div>
				<div class="modal fade" id="gatewayModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   			<div class="modal-dialog" role="document">
      			<div class="modal-content">
         			<div class="modal-header">
            			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            			<h4 class="modal-title" id="myModalLabel">Add a New Gateway</h4>
         			</div>
         			<div class="modal-body">
            			<form name="addGateway" action="" method="POST">
               				<fieldset>
                  				<div class="form-group">
                     				<label for="name">Email:</label>
                     				<input class="form-control" placeholder="Pay Pal Email" name="email" type="text" required="required" id="email">
                  				</div>
                  				<div class="modal-footer">
                  					<input type="hidden" name="token" value="38567169446d7745616a665341346e783741395071364134626632684a6c6b4258764b344434436b4536493d">
                     				<input type="reset" class="btn btn-default" value="Reset">
                     				<input type="submit" class="btn btn-success" value="Add Gateway">
                  				</div>
               				</fieldset>
            			</form>
         			</div>
      			</div>
   			</div>
		</div>
		</div>
<?php
  include ("footer.php");
?>
</body>
</html>