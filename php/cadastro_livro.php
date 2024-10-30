 <?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $autor = $_POST['autor'];
    $total_paginas = $_POST['total_paginas'];
    $num_copias = $_POST['num_copias'];
    $ano_lancamento = $_POST['ano_lancamento'];

    $copias_disponiveis = $num_copias;  // Inicialmente todas as cópias estão disponíveis
    $foto_capa = $_FILES['foto_capa']['name'];

    move_uploaded_file($_FILES['foto_capa']['tmp_name'], "../img/$foto_capa");

    $sql = "INSERT INTO livros (titulo, genero, autor, total_paginas, num_copias, copias_disponiveis, foto_capa, ano_lancamento) 
            VALUES ('$titulo', '$genero', '$autor', $total_paginas, $num_copias, $copias_disponiveis, '$foto_capa', $ano_lancamento)";

    if ($conn->query($sql) === TRUE) {
       echo '
            <script type="text/JavaScript">
            alert("O Livro foi Cadastrado com sucesso!");
            </script>';
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Livros</title>
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
                                <h2>Cadastro de Livro</h2><br><br>
                                    <form method="POST" action="cadastro_livro.php" enctype="multipart/form-data">
                                        

                                        <label for="designacao">Título:</label>
                                         <input type="text" name="titulo" required>
                                        <label for="designacao">Gênero:</label> 
                                        <select name="genero">
                                            <option value="policial">Policial</option>
                                            <option value="romance">Romance</option>
                                            <option value="ficcao">Ficção</option>
                                        </select><br><br>
                                        <label for="designacao">Autor:</label>
                                         <input type="text" name="autor" required>
                                        <label for="designacao">Páginas:</label>
                                         <input type="text" name="total_paginas" required>
                                        <label for="designacao">Cópias:</label>
                                         <input type="text" name="num_copias" required>
                                        <label for="designacao">Foto da Capa:</label>
                                         <input type="file" name="foto_capa" required><br><br>
                                        <label for="designacao">Ano de Lançamento:</label>
                                         <input type="text" name="ano_lancamento"><br><br>

                                        
                                        <a href="../index.html"><img src="../img/btn-back.png"></a>
                                        <input type="submit" value="Cadastrar Livro"><br><br>

                                        
                                         
                                         

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
  width: 35%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  background-color: #fff;
}
select{
  width: 35%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  background-color: #fff;
  height: 40px;
}



a img{

    width: 100px;
    height: 50px;
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

</style>


    </body>
</html>
