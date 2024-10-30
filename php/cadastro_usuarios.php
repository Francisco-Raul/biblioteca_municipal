<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tipo_utilizador= $_POST['tipo_utilizador'];
    $nome = $_POST['nome'];
    $numero_cartao = $_POST['numero_cartao'];
    $email = $_POST['email'];
    $morada = $_POST['morada'];
    $nacionalidade = $_POST['nacionalidade'];
    $senha = password_hash($_POST['senha'], PASSWORD_BCRYPT);  // Criptografando a senha
    $registo = date('Y-m-d');  // Data de registro

    // Verificar se o número de cartão já existe
    $sql_check = "SELECT * FROM usuarios WHERE numero_cartao='$numero_cartao'";
    $result_check = $conn->query($sql_check);

    if ($result_check->num_rows > 0 ) {
        echo "O número do cartão já está registrado!";
    } else {
        $sql = "INSERT INTO usuarios (tipo_utilizador, nome, numero_cartao, email, morada, nacionalidade, senha, registo) 
                VALUES ('$tipo_utilizador','$nome', '$numero_cartao', '$email', '$morada', '$nacionalidade', '$senha', '$registo')";

        if ($conn->query($sql) === TRUE) {
            echo "Usuário cadastrado com sucesso!";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Utilizadores</title>
    <link rel="stylesheet" type="text/css" href="../css/estilosC.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    <body id ="tres_colunas"class ="home">
        <div id = "cabecalho">
            
            <div id ="topo">
                <div id ="logotipo">
                <h1> Biblioteca <br>Municipal </h1>
                
                <img src="../img/logomarca.png" align="center" /> 

                
                <!---->
                </div>

                <ul class="navegacao" >
                        <li class ="fundo"><a href="../index.html">Inicio </a></li>
                        <li><a href="../html/missao.html">Sobre a Empresa</a></li>
                        <li><a href="../html/portifolio.html">Portifolio </a></li>
                        <li><a href="pesquisar.php">Biblioteca Virtual </a></li>
                        <li><a href="../html/parceiros.html">Parceiros </a></li>
                        <!--<li><a href="php/pesquisar.php">Colaboradores </a></li> -->
                        <li><a href="../html/contacto.html">Contactos </a></li>

                </ul>
                    
        </div>
            
            <!-- Inicio do conteudo-->
                <div id="conteudo">
                        
                        <!--inicio da lateral-->
                        <div id="contacto">
                            
                                
                            
                            <div class="caixa">
                            <!-- Conteudo a ser apresentado no centro -->     
                                <div class="container">
                                <h2>Cadastro de Utilizadores</h2><br><br>
                                
                                   <form method="POST" action="cadastro_usuarios.php">
                                   Tipo de Utilizador: 
                                    <select name="tipo_utilizador" id="select">
                                            <option value="visaitante">Visitante</option>
                                            <option value="administrador">Administrador</option>
                                            <option value="recepcionista">Recepcionista</option>
                                        </select>
                                    Nome completo: <input type="text" name="nome" required placeholder="Digite o seu nome completo aqui"><br><br>
                                    Cartão: <input type="text" name="numero_cartao" required placeholder="20230786">
                                    Email: <input type="email" name="email" required placeholder="exemplodeemail@gmail.com">
                                    Morada: <input type="text" name="morada" required placeholder="Provincia, Bairro">
                                     Nacionalidade: 
                                    <select name="nacionalidade" id="select">
                                            <option value="mocambique">Moçambicana</option>
                                            <option value="estrangeiro">Estrangeiro</option>
                                        </select><br><br>
                                    Senha: <input type="text" name="senha" required placeholder="*****@#$****">
                                    Registo: <input type="date" name="estado" required><br><br>

                                    <a href="../index.html"><img src="../img/btn-back.png" alt="Voltar"></a>
                                    <input type="submit" value="Cadastrar Usuário"><br><br>
                                </form>  

                                    </div>                
                                
                            </div>

                        </div>

                </div>
            

            </div>
            
<!-- Inicio do rodape-->
                <div id="rodape_container" style= "clear: both;">
                    <div id="rodape" align="center">
                     &copy; Copyright 2011-2024  Biblioteca Municpal da Beira
                    </div>

                </div>


<style type="text/css">
    
* {
  box-sizing: border-box;
}

input[type=text]{
  width: 40%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  background-color: #fff;
}
#select{
  width: 30%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  height: 40px;
  background-color: #fff;
}

input[type=email]  {
  width: 43%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  background-color: #fff;
}
input[type=date]  {
  width: 43%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  background-color: #fff;
  font-size: 15px;
}
input[type=password]  {
  width: 35%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  background-color: #fff;
}


label {
  padding: 12px 12px 12px 0;
  display: inline;
}

input[type=submit] {
  background-color: #294C71;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: white;
  color:#294C71;
  border:  2px solid #294C71 ;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

input[type=file]::file-selector-button {
  background-color: #fff;
  color: #000;
  border: 0px;
  border-right: 1px solid #e5e5e5;
  padding: 10px 15px;
  margin-right: 20px;
  transition: .5s;
}

input[type=file]::file-selector-button:hover {
  background-color: #fff;
  border: 1px solid black;
  border-right: 1px solid #e5e5e5;
}
a img{

    width: 100px;
    height: 50px;
}

</style>


    </body>
</html>