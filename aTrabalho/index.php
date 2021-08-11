<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cadastro de Usuario</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="style.css" rel="stylesheet">
	</head>
	<body>
<?php
      require './Conexao.php';
	  require './Usuario.php';

    $formDados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

 if(!empty($formDados['SendLogin'])){

	// echo $formDados['senha'];

	 $Valogin = new Login();
     $Valogin->formDados = $formDados;
     $valor = $Valogin->validar();
     if($valor){
         header("Location:listagem.php?nome=$login");
         die();
     }else{
		header("Location:listagem.php");
         echo '<script language="javascript"alert("Login e/ou senhar incorretos");</script>';
     }
 }
?>


<form action="" method="POST">
  <div class="login-wrap">

	<div class="login-html">

		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab"> <img src="icon.png"><br>Caminhos
		Da Serra                  </label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"> </label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">

					<label for="user" class="label">Usuario</label>
					<input id="usuario"  type="text" class="input" name="usuario" >
				</div>
				<div class="group">
					<label for="pass" class="label">Senha</label>
					<input  id="senha" type="password" class="input"  name="senha">
				</div>

				<div class="group">
					<input type="submit"  name="SendLogin" class="button" value="Login Visitante "><br>

					<div class="group">
						<a href="listagemempresas.php">
	        <input type="button" value="Login Empresa" class="button">
	    </a>
					</div>
				</div>
				<div class="group">
					<a href="main.php">
        <input type="button" value="Cadastre-se" class="button">
    </a>
				</div>

				<div class="foot-lnk">

				</div>
			</div>
		</form>
<?php

$pg = (isset($_GET['pg'])) ? $_GET['pg'] : null;

   if($pg==''){
	   echo "<center>" .isset($_GET['nome']);"</center>";
   }elseif(file_exists($pg)){
	   include $pg;
   }else{
	   include "404.php";
   }
