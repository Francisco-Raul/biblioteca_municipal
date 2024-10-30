

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

                                <h2>Emprestar Livro</h2><br><br>
                                    <form method="POST" action="emprestar_livro.php">
                                        

                                        <label for="cod_livro">Cod do Livro:</label>
                                         <input type="text" name="cod_livro" required disabled>


                                        <label for="titulo">Livro:</label> 
                                        <select name="titulo">
                                            <option value="" >Seleccione uma opção</option>
                                                  <?php 
                                            include 'db.php';

                                               $result = "SELECT titulo, id FROM livros";
                                               $resultado = mysqli_query($conn, $result);

                                               while($row = mysqli_fetch_assoc($resultado)) {
                                                 echo '<option value="'.$row['titulo'].'"> '.$row['titulo'].' </option>';
                                               }
                                            ?>
                                           
                                        </select><br><br>

                                        <label for="cod_visitante">Cod Visitante:</label>
                                         <input type="text" name="cod_visitante" required disabled>

                                         <label for="nome_visitante">Nome:</label>  

                                         <select name="nome">
                                            <option value=""> Seleccione uma opção </option>
                                            
                                            <?php 
                                            include 'db.php';

                                               $result = "SELECT nome, id  FROM usuarios";
                                               $resultado = mysqli_query($conn, $result);

                                               while($row = mysqli_fetch_assoc($resultado)) {
                                                 echo '<option value="'.$row['nome'].'"> '.$row['nome'].' </option>';
                                               }
                                            ?>

                                            
                                        </select><br><br>

                                        
                                         <a href="../index.html"><img src="../img/btn-back.png" alt="Voltar"></a>
                                        <input type="submit" value="Emprestar Livro"><br><br>
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
  width: 20%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  background-color: #fff;
}
select{
  width: 50%;
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