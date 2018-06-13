
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
  <li class="active">General</li>
</ol>

      <div class="panel panel-default">
      <div class="panel-heading">General Design</div>
      <div class="panel-body">
      <div id="content">
        <form name="updateGeneralDesign" action="" method="POST" enctype="multipart/form-data">
        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
          <li class="active"><a href="#homepage" data-toggle="tab">Homepage</a></li>
          <li><a href="#toc" data-toggle="tab">Terms &amp; Conditions</a></li>
          <li><a href="#emailNote" data-toggle="tab">Email Note</a></li>
        </ul>
        <div id="my-tab-content" class="tab-content">
          <div class="tab-pane active" id="homepage">
            <br/>
            <div class="form-group">
              <textarea class="form-control" placeholder="The text displayed at the homepage of your store." name="homepageMessage" rows="5" id="homepageMessage"></textarea>
            </div>
          </div>
          <div class="tab-pane" id="toc">
            <br/>
            <div class="form-group">
              <textarea class="form-control" placeholder="The terms and conditions of your store. These are displayed at checkout." name="termsAndConditions" rows="5" id="termsAndConditions"></textarea>
            </div>
          </div>
          <div class="tab-pane" id="emailNote">
            <br/>
            <div class="form-group">
              <textarea class="form-control" placeholder="The note sent to a customer when they purchase a product." name="emailNote" rows="5" id="emailNote"></textarea>
            </div>
          </div>
        </div>
      </div>
            <br/>
      <div class="form-group">
        <label for="storeName">Store Name:</label>
        <input class="form-control" placeholder="" name="storeName" type="text" id="storeName">      </div>
      <div class="form-group">
        <label for="serverIP">Server IP:</label>
        <input class="form-control" placeholder="" name="serverIP" type="text" id="serverIP">      </div>
      <input type="hidden" name="token" value="4e3631336635777345555971567273436e52795a7a61637a4f6a6d4530764e4d654c3179793349463650413d">
      <div class="form-group">
        <label for="logo">Store Logo:</label>
        <input type="file" id="logo" name="logo">
        <p class="help-block">This will be re-sized</p>
      </div>
      <div class="form-group">
        <label for="cover_photo">Store Cover Photo:</label>
        <input type="file" id="cover_photo" name="cover_photo">
        <p class="help-block">This will be re-sized</p>
      </div>
      <input type="submit" class="btn btn-success pull-right" value="Update">
      </form>
      <!-- TWO DIVS </div> WERE HERE -->
      </div>
			</div>
<?php
  include ("footer.php");
?>
</body>
</html>
