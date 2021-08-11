<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cadastro de Usuario</title>
		<link href="style.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		
	</head>
	<body>

    <div class="oa">
    <div class="op">
    <div class="login-wrap">
    <div class="login-html">

<table id="lista" cellspacing="6">
<tbody>
<?php   
require './Conexao.php';
require './Usuario.php';
$listproduto = new Produto();
$list_produto = $listproduto->Listar();

foreach($list_produto as $row_produto) {
    extract($row_produto);


?>

<table  border="3" cellspacing="6" rules="none" id="oi">

<tr><tr><tr><tR>
<tr>
<td id="dest"><?php echo "" . $locacao . "<br>" ;?></td><tr><tr>
<tr><tr><td><?php echo "" . $descricao . "<br>" ;?></td><tr>
<td><?php echo "" . $diaria . "<br>" ;?></td>
<td><?php echo "" . $contato . "<br>" ;?></td><tr>
<tr>
<tr><tr><tr><tr>
</table>
<br><br><br>

<?php } ?>
</tbory>
</table>






























    </div>
    </div>
    </div>
    </div>



    </body>
    </html>