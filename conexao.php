<?php
      	$host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "cas";

		 //Criando a conexão

     
		@$con = mysql_pconnect($host, $dbusername, $dbpassword) or trigger_error(mysql_error(), E_USER_ERROR);

		//Seleciona a base de dados em que vamos trabalhar

		mysql_select_db($dbname,$con);

		//Cria a instrução SQL que vai selecionar os dados
		$busca = sprintf("SELECT * FROM produtos");

		$dados = mysql_query($busca, $con) or die(mysql_error());

	   	//Transforma os dados em um array(vector)

	   	$linha = mysql_fetch_assoc($dados);

	   	//Calcular quantos dados retornam

	   	$total = mysql_num_rows($dados);

?>