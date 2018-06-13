
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="templates/style/bootstrap.min.css" type="text/css"/>
    </head>
    <body>   <div class="alert alert-dismissible alert-success">
</div>
<br/>
<br/>
<img src="img/logo2.png" class="center-block" height="200" />
<br/>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-body">
                <h2>Login <small>Good to see you again</small></h2>
                <hr/>
                <form action="valida.php" method="post" enctype="multipart/form-data">
                    <label for="login">Usuario:</label>
                    <div class="input-group">
                        <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-user"></span></span>
                        <input class="form-control" placeholder="Email" name="email" type="text" required="required" id="email">
                    </div>
                    <label for="senha">Senha:</label>
                    <div class="input-group">
                        <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-lock"></span></span>
                        <input class="form-control" placeholder="Password" name="senha" type="password" required="required" id="senha">
                    </div>
                    <br/>
                    <p class="pull-right"><a href="forgot_password.php">Esqueci a senha</a>
                    <br/>
                    <p class="pull-down"><a href="cadastro.php">Cadastro</a>
                    </p>
                    <input type="hidden" name="token" value="6e6c6c466b6c652b716d2b644e5358665a466a4a63466576543067586f457275495a304e772b454d6d76773d">
                    <input name="submit" type="submit" class="btn btn-success" value="Login">
                </form>
            </div>
        </div>
        <p class="text-center"><br/><br/>This webstore is powered by <a href="www.gametrading.com.br">GameTrading Store</a>
        </p>
    </div>
    <div class="col-md-4"></div>
</div>
    