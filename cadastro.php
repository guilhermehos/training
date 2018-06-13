<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script language="JavaScript" src="scripts.js"></script>
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
                <h2><small>Cadastre-se para começar utilizar!</small></h2>
<script type="text/javascript"><!--mce:0--></script>


	<form action ="cadastro_usuario.php" method="POST">
  	<div class="form-group">

  	<label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Email">
  	</div>
  		<div class="form-group">
    		<label for="senha">Senha</label>
    		<input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
  		</div>
  		<div class="form-group">
    		<label for="senha">Confirme a Senha</label>
    		<input type="password" class="form-control" name="senha2" id="senha2" placeholder="Confirme a senha">
  		</div>
  		<div class="form-group">
    		<label for="nome">Nome</label>
    		<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
  		</div>
  		<div class="form-group">
    		<label for="endereco">Endereço</label>
    		<input type="text" class="form-control" name="endereco" id="endereco" placeholder="Endereço">
  		</div>
  		<div class="form-group">
    		<label for="cidade">Cidade</label>
    		<input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade">
  		</div>
  		<div class="form-group">
    		<label for="estado">Estado</label>
    		<input type="text" class="form-control" name="estado" id="estado" placeholder="Estado">
  		</div>
  		<div class="form-group">
    		<label for="ddd">DDD</label>
    		<input type="telefone" class="form-control" name="ddd" id="ddd" placeholder="DDD">
  		</div>
  		<div class="form-group">
    		<label for="celular">Celular</label>
    		<input type="telefone" class="form-control" name="celular" id="celular" placeholder="Celular">
  		</div>
  		<div class="form-group">
    		<label for="pais">Pais</label>
    		<input type="text" class="form-control" name="pais" id="pais" placeholder="Pais">
  		</div>
  		<div class="form-group">
    		<label for="sexo">Sexo</label>
    		<input type="text" class="form-control" name="sexo" id="sexo" placeholder="Sexo">
  		</div>

  		<div class="form-check">
    	<label class="form-check-label">
      <input type="checkbox" checked="false" value="1"  class="form-check-input"> Li e aceito as <a href="regras.php" target="_blank"> regras</a><br>
    </label>
  </div>
  <button type="submit" id="cadastrar" name="submit" onclick="verificaChecks()" class="btn btn-primary">Enviar</button>
</form>
	<!-- <form action="cadastro_usuario.php" method="POST">
		
		<table style="width: 100%;" border="0">

			<tbody><tr>
			<td width="69">Nome<span class="style1">*</span>:</td>
			<td width="100%"><input id="nome" maxlength="60" name="nome" size="70" type="text" /></td>

			
				
		</tr>
		<tr>
			<td >Email<span class="style1">*</span>:</td>

			<td> <input id="email" maxlength="60" name="email" size="70" type="text" />

			
				
		</tr>

		<tr>
			<td >DDD<span class="style1">*</span>:</td>

			<td> <input id="ddd" maxlength="2" name="ddd"  type="text" />
		</tr>
		<tr>
			<td >Telefone<span class="style1">*</span>:</td>

			<td><input id="telefone" maxlength="9" name="telefone" type="text" /></td>
				
		</tr>
		<tr>
			<td >Cidade<span class="style1">*</span>:</td>

			<td> <input id="endereco" maxlength="20" name="endereco" size="70" type="text" />
				
		</tr>
		<tr>
			<td >Estados<span class="style1">*</span>:</td>

			<td><select id="estado" name="estado">
			<option>Selecione...</option>
			<option value="AC">AC</option>
			<option value="AL">AL</option>
			<option value="AP">AP</option>
			<option value="AM">AM</option>
			<option value="BA">BA</option>
			<option value="CE">CE</option>
			<option value="ES">ES</option>
			<option value="DF">DF</option>
			<option value="MA">MA</option>
			<option value="MT">MT</option>
			<option value="MS">MS</option>
			<option value="MG">MG</option>
			<option value="PA">PA</option>
			<option value="PB">PB</option>
			<option value="PR">PR</option>
			<option value="PE">PE</option>
			<option value="PI">PI</option>
			<option value="RJ">RJ</option>
			<option value="RN">RN</option>
			<option value="RS">RS</option>
			<option value="RO">RO</option>
			<option value="RR">RR</option>
			<option value="SC">SC</option>
			<option value="SP">SP</option>
			<option value="SE">SE</option>
			<option value="TO">TO</option>
			</select>
			
					
			</tr>
			<tr>
				<td >Bairro<span class="style1">*</span>:</td>

			<td> <input id="bairro" maxlength="20" name="bairro" type="text" />
			
				
			</tr>
			<tr>
				<td >Pais<span class="style1">*</span>:</td>

			<td> <input id="pais" maxlength="20" name="pais" type="text" />
				
			</tr>
			</tr>
			<tr>
				<td >Login<span class="style1">*</span>:</td>

			<td> <input type="text" name="login" id="login" maxlength="20" />

				
			</tr>
			<tr>
				<td >Senha<span class="style1">*</span>:</td>

			<td> <input type="password" name="senha" id="senha" maxlength="12" />
				
			</tr>
		<tr>
			<td >Sexo<span class="style1">*</span>:</td>


			<td align="center"><input checked="checked" align="center" name="sexo" type="radio" value="Masculino">Masculino 
			<input name="sexo" type="radio" value="Feminino">Feminino </td>
		
		</tr>
		</tbody></table>
				<td colspan="2"><p>
				<input type="submit" value="Cadastrar" id="cadastrar" name="submit"  />
				<input id="limpar" name="limpar" type="reset" value="Limpar" />
				
				<span class="style1">Campos com * são obrigatorios!	</span></p>
			<p> </p></td>

			</tr>
				</form> -->
			</form>
			</body>
			</html>