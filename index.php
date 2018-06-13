<?php 
include ("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
// echo "" . $_SESSION['loginNome'];
$id = $_SESSION['loginID'];
?>
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
  dadosUsuario($id);
  $nick = $_SESSION['nick'];
  $quantidade =  $_SESSION['quantVendas'];
?>

          </div><div class="container">
<div class="row">
        <div class="col-xs-6 col-md-3">
           
            <div class="panel status panel-success">
                <div class="panel-heading">
                    <h1 class="panel-title text-center">
                        Vendas
                    </h1>
                </div>
                <div class="panel-body text-center">
                <strong>
                    <?php echo $quantidade; ?> 
                </strong>
                </div>
            </div>

         
        </div>
        <div class="col-xs-6 col-md-3">
           
            <div class="panel status panel-success">
                <div class="panel-heading">
                    <h1 class="panel-title text-center">
                      Total Expenses
                    </h1>
                </div>
                <div class="panel-body text-center">                        
                    <strong>                                    EUR 4</strong>
                </div>
            </div>

         
        </div>
           <div class="col-xs-6 col-md-3">
           
            <div class="panel status panel-info">
                <div class="panel-heading">
                    <h1 class="panel-title text-center">
                      Nickname
                    </h1>
                </div>
                <div class="panel-body text-center">                        
                    <strong>  <?php echo $nick; ?>                    </strong>
                </div>
            </div>

         
        </div>
        <div class="col-xs-6 col-md-3">
           
            <div class="panel status panel-info">
                <div class="panel-heading">
                    <h1 class="panel-title text-center">
                      Number of Transactions
                    </h1>
                </div>
                <div class="panel-body text-center">                        
                    <strong>

                    1                      

                    </strong>
                </div>
            </div>

         
        </div>
        </div>
<div class="row">
  <div class="col-md-6"><div class="panel panel-default">
  <div class="panel-heading">Welcome</div>
  <div class="panel-body">
  Welcome to your Donation Store control panel. This is mission control for your webstore and helpdesk. You can control everything here, from product/category creation, responding to support tickets, viewing transactions, setting up commands, or even doing some accounting with the server expenses page.

  Explore the control panel and find all the different aspects it has to offer. Read our knowledgebase for tutorials on how to operate your control panel. If you are running into trouble and need some help, or feel like a certain feature should be added, please email us and we will be more than happily help you.

  </div>
</div></div>
  <div class="col-md-6"><a class="twitter-timeline" data-height="250" href="https://twitter.com/donationstoremc">Tweets by donationstoremc</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>
</div>
</div></div>
<?php
  include ("footer.php");
?>
</body>
</html>