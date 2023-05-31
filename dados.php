

<?php
    $quant = filter_input(INPUT_POST, "quant"); 
    $nome = filter_input(INPUT_POST, "nome");
    $telefone = filter_input(INPUT_POST, "telefone");
    $conta = filter_input(INPUT_POST, "conta");
    $entrega = filter_input(INPUT_POST, "entrega");
    $email = filter_input(INPUT_POST, "email");
    $data = filter_input(INPUT_POST, "data");

    
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "cas";

        //Criando a conexão

        $connect = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
        if(mysqli_connect_error()){
            die('Conect error('.mysqli_connect_errno() .')'
            .mysqli_connect_error());

          
        }

        else{   
            $sql = "INSERT INTO facturas (nome, telefone,quantidade,entrega,email,data) VALUES ('$nome', $telefone, '$quant','$entrega', '$email','$data')";
            if($connect->query($sql)){
                echo "Dados enviados com sucesso";
            }
            else{
                echo "ERRO: ".$sql ."<br>".$connect->error;
            }
            $connect->close();
        }

    
?>