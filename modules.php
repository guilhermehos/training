
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
  <li class="active">Modules</li>
</ol>

    <div class="panel panel-default">
    <div class="panel-heading">Modules</div>
    <div class="panel-body">
    <table class="table table-bordered">        <tr>
          <td>
            <div class="row">
            <div class="col-md-8">Featured Product<span class="label label-danger pull-right">Disabled</span></div>
            <div class="col-md-4">
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#FeaturedProductModal">
            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
            </button>

                  		  <a href=modules.php?name=Featured%Product&change=Enabled class="btn btn-success btn-sm" role="button"><span class="glyphicon glyphicon-off"></span></a>
                        </div>
            </div>
          </td>
        </tr>
                <tr>
          <td>
            <div class="row">
            <div class="col-md-8">Payment Goal<span class="label label-danger pull-right">Disabled</span></div>
            <div class="col-md-4">
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#PaymentGoalModal">
            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
            </button>

                  		  <a href=modules.php?name=Payment%Goal&change=Enabled class="btn btn-success btn-sm" role="button"><span class="glyphicon glyphicon-off"></span></a>
                        </div>
            </div>
          </td>
        </tr>
                <tr>
          <td>
            <div class="row">
            <div class="col-md-8">Text Box<span class="label label-danger pull-right">Disabled</span></div>
            <div class="col-md-4">
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#TextBoxModal">
            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
            </button>

                  		  <a href=modules.php?name=Text%Box&change=Enabled class="btn btn-success btn-sm" role="button"><span class="glyphicon glyphicon-off"></span></a>
                        </div>
            </div>
          </td>
        </tr>
              </table>
    </div>
    </div>
        <!-- Payment Goal Module -->
    <div class="modal fade" id="PaymentGoalModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Edit Payment Goal Module</h4>
          </div>
          <div class="modal-body">
              <form name="editPaymentGoal" action="" method="POST">
                <fieldset>
                  <div class="form-group">
                     <label for="paymentGoal">Payment Goal:</label>
                     <input class="form-control" placeholder="Your payment goal" name="paymentGoal" type="text" required="required" id="paymentGoal">
                  </div>
                  <div class="modal-footer">
                  <input type="hidden" name="token" value="686d377776367572466e30435361333869702f71706765306a6d52736e6e5a774a6c6e6e74546957444e673d">
                     <input type="reset" class="btn btn-default" value="Reset">
                     <input type="submit" class="btn btn-success" value="Edit Payment Goal">
                  </div>
               </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Text Box -->
    <div class="modal fade" id="TextBoxModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Edit Text Box Module</h4>
          </div>
          <div class="modal-body">
              <form name="textBox" action="" method="POST">
                 <fieldset>
                    <div class="form-group">
                      <label for="textBox">Text Box Content:</label>
                      <textarea class="form-control" placeholder="Text Box Content" name="textBox" required="required" rows="5" id="textBox"></textarea>
                    </div>
                    <div class="modal-footer">
                    <input type="hidden" name="token" value="686d377776367572466e30435361333869702f71706765306a6d52736e6e5a774a6c6e6e74546957444e673d">
                      <input type="reset" class="btn btn-default" value="Reset">
                      <input type="submit" class="btn btn-success" value="Edit Text Box">
                    </div>
                </fieldset>
              </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Featured Product -->
    <div class="modal fade" id="FeaturedProductModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Edit Featured Product</h4>
          </div>
          <div class="modal-body">
              <form name="featuredPorduct" action="" method="POST">
                <fieldset>
                    <div class="form-group">
                      <label for="featuredProduct">Products:</label>
                      <select name="featuredProduct" id="featuredProduct" class="form-control">
                      <option>Diamond Sword</option><option>Diamond Pickaxe</option><option>Diamond Sword</option><option>Diamond Pickaxe</option>                      </select>
                    </div>
                    <div class="modal-footer">
                    <input type="hidden" name="token" value="686d377776367572466e30435361333869702f71706765306a6d52736e6e5a774a6c6e6e74546957444e673d">
                      <input type="reset" class="btn btn-default" value="Reset">
                      <input type="submit" class="btn btn-success" value="Edit Featured Product">
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