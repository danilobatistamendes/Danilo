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

<div class="oa">

	<div class="op">

<?php

require './Conexao.php';
require './Usuario.php';

$formDados= filter_input_array(INPUT_POST,FILTER_DEFAULT);
//var_dump($formDados);
if(!empty($formDados['SendCaduser'])){
	$veruser = new Usuario();
	$veruser->formDados = $formDados;
	$veru = $veruser->username();
	if($veru){
		echo'<script language="javascript"alert("Nome de usuário existente");</
		script';
	}else if(!empty($formDados['SendCaduser'])){
		$cadUser = new Usuario();
		$cadUser->formDados = $formDados;
		$valor = $cadUser->cadastrar();
			if ($valor){
		echo'<script language="javascript">alert(Usuário cadastrado com sucesso!")</script>';
	}else{
		echo'<script language="javascript"alert(Erro: Usuário não cadastrado!");</script>';
	}
	}
}

$formDados= filter_input_array(INPUT_POST,FILTER_DEFAULT);
//var_dump($formDados);
if(!empty($formDados['SendCadprod'])){


	// echo $formDados['nome'];

	$verpro = new Produto();
	$verpro->formDados = $formDados;

	$verp = $verpro->Cadastrar();
	// if($verp){
	// 	echo'<script language="javascript"alert("Nome de usuário existente");</
	// 	script';
	// }
	//else if(!empty($formDados['SendCaduser'])){
	// 	$cadProd = new Produto();
	// 	$cadProd->formDados = $formDados;
	// 	$valor = $cadProd->cadastrar();
	// 		if ($valor){
	// 	echo'<script language="javascript">alert(Produto cadastrado com sucesso!")</script>';
	// }else{
	// 	echo'<script language="javascript"alert(Erro: Produto não cadastrado!");</script>';
	// }
	// }
}
?>




 <form action="" method="POST">
  <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Visitante</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Empresa</label>

		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="nome" class="label">Nome</label>
					<input id="nome" name="nome" type="text" class="input">
				</div>
				<div class="group">
					<label for="nome" class="label">Cpf</label>
					<input id="cpf" name="cpf" type="text" class="input">
				</div>
				<div class="group">
					<label for="nome" class="label">Telefone</label>
					<input id="telefone" name="telefone" type="text" class="input">
				</div>
				<div class="group">
					<label for="email" class="label">Email</label>
					<input id="email" name="email" type="text" class="input">
				</div>
				<div class="group">
					<label for="usuario"  class="label">Usuario</label>
					<input id="usuario" name="usuario" type="text" class="input">
				</div>
				<div class="group">
					<label for="senha" class="label">Senha</label>
					<input id="senha" name="senha" type="password" class="input" data-type="password">
				</div>


				<div class="group">
					<input type="submit" name="SendCaduser" class="button" value="Registrar">
				</div>


				<div class="foot-lnk">

				</div>
			</div>
		</form>










   <form class="cadastro" action="" method="POST" >
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Razão social ou Nome fantasia</label>

					<input id="nome"  type="text" class="input" name="razao" >
				</div>
				<div class="group">
					<label for="pass" class="label">Locação</label>
					<input  id="descricao" type="text" class="input"  name="locacao">
				</div>
				<div class="group">
					<label for="pass" class="label">Descrição</label>
					<input  id="compra" type="text" class="input"  name="descricao">
				</div>
				<div class="group">
					<label for="pass" class="label">Valor da Diaria</label>
					<input id="venda" type="text" class="input"  name="diaria">
				</div>


				<div class="group">
					<label for="pass" class="label">Contato</label>
					<input id="quantidade" type="text" class="input"  name="contato">
				</div>

				<div class="group">
					<input type="submit"  name="SendCadprod" class="button" value="Cadastrar">
				</div>
				<div class="group">
					<input type="hidden"   class="button" value="Listar Produtos">
					<a href="listagem.php">Listar</a>
				</div>

				<div class="foot-lnk">

				</div>
			</div>
		</div>
	</div>
   </div>

   </div>
   </form>




	 </div>
	 </div>
	</div>

						</div>
					</div>
				</div>


























	 </div>


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
</body>
</html>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
