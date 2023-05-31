<?php 

	$quant = filter_input(INPUT_POST, "quant");	
	$nome = filter_input(INPUT_POST, "nome");
	$telefone = filter_input(INPUT_POST, "telefone");
	$conta = filter_input(INPUT_POST, "conta");
	$entrega = filter_input(INPUT_POST, "entrega");
	$email = filter_input(INPUT_POST, "email");  $data = strftime("%d-%m-%y");

	 $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "cas";

        //Criando a conexão

      $host = "localhost";
		$db = "cas";
		$user = "root";
		$pass ="";

		//Conecta ao banco de dados

		@$con = mysql_pconnect($host, $user, $pass) or trigger_error(mysql_error(), E_USER_ERROR);

		//Seleciona a base de dados em que vamos trabalhar

		mysql_select_db($db,$con);

		//Cria a instrução SQL que vai selecionar os dados 
            $query = sprintf("SELECT * FROM facturas");
            	//Executa a query

		$dados = mysql_query($query, $con) or die(mysql_error());

		//Transforma os dados em um array(vector)

		$linha = mysql_fetch_assoc($dados);

		//Calcular quantos dados retornam

		$total = mysql_num_rows($dados);

          
            
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/estilos.css">
			<style type="text/css">
				body{
					/*background-image: url('img/Cas.jpg');*/
				}
				*{
					font-size: 15pt;
				}
			</style>
</head>
<body>

	<div class="folha container">
		<form class="form-control" action="dados.php" method="POST">
			<input type="hidden" name="nome" value="<?php echo($nome) ?>">
						<input type="hidden" name="quant" value="<?php echo($quant) ?>">
						<input type="hidden" name="telefone" value="<?php echo($telefone) ?>">
						<input type="hidden" name="email" value="<?php echo($email) ?>">
						<input type="hidden" name="conta" value="<?php echo($conta) ?>">
						<input type="hidden" name="entrega" value="<?php echo($entrega) ?>">
						<input type="hidden" name="data" value="<?php echo($data) ?>">
		<table class="table table-bordered">
			<thead class="thead-dark">
				<tr>
				<th>Dados Pessoais</th>
				<th>Compra</th>
				</tr>
			</thead>
			<tbody>
			<tr>
				<td>Nome: <?php echo $nome; ?></td>
				<td>Quantidade: <?php echo $quant; ?></td>
			</tr>
			<tr>
				<td>Telefone: <?php echo $telefone; ?></td>
				<td>FACTURA n - <?php echo $total+1; ?></td>
			</tr>
			<tr>
				<td>Correio: Eletronico<?php echo $email; ?></td>
				<td><?php if ($entrega == "on") {
				echo "Entrega ao domicilio - SIM"; 
				} else {

				} ?></td>
			</tr>
			</tbody>
		</table>
		<center><input style="position: relative; font-size: 14pt;" type="submit" value="Enviar" class="btn btn-success"></center>
		</form>
	</div>

</body>
</html>