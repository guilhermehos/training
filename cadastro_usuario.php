
<!-- FUNÇÃO DE CADASTRO DE CLIENTES PHP BY GUILHERME -->
<?php


$nome= $_POST["nome"];
$email= $_POST["email"]; 
$ddd= $_POST["ddd"]; 
$tel= $_POST["celular"]; 
$endereco= $_POST["endereco"]; 
$cidade= $_POST["cidade"];
$estado= $_POST["estado"];
$pais= $_POST["pais"]; 
$senha= $_POST["senha"];
$senha2= $_POST["senha2"];
$sexo= $_POST["sexo"];
$connect = mysqli_connect('localhost','root','123456');
$db = mysqli_select_db($connect, 'banco_site');
$query_select = "SELECT email FROM users WHERE email = '$email'";
$select = mysqli_query($connect,$query_select);
$array = mysqli_fetch_array($select,MYSQLI_BOTH);
$logarray = $array['email'];

		
  if($senha == "" || $senha == null || $senha != $senha2){
    echo"<script language='javascript' type='text/javascript'>alert('O campo senha deve ser preenchido');window.location.href='cadastro.php';</script>"
		or die();
    }
  if($pais == "" || $pais == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo pais deve ser preenchido');window.location.href='cadastro.php';</script>"
		or die();
    }
  if($email == "" || $email == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo email deve ser preenchido');window.location.href='cadastro.php';</script>";


    }else{
      if($logarray == $email){

        echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.php';</script>";
        die();

      }else{
        $query = "INSERT INTO users (nome,email,sexo,DDD,celular,endereco,cidade,estado,pais,senha) VALUES ('$nome','$email','$sexo','$ddd','$tel','$endereco','$cidade','$estado','$pais','$senha')"
        or die();
        $insert = mysqli_query($connect,$query);
        
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.php'</script>";
        }
      }
    }
?>

