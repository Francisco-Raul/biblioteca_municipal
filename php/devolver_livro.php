
<?php
include 'db.php';

// Consultar lista de livros
$sql_livros = "SELECT * FROM emprestimos";
$result_livros = $conn->query($sql_livros);
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

                                <h2>~Devolução de Livros e Controle dos mesmos~</h2><br><br>
                                     <section>
                                    <table border="1">
                                        <tr>
                                            <th>Nome do visitante</th>
                                            <th>Autor</th>
                                            <th>Data da Devolução</th>
                                            <th>Estado</th>
                                            <th>Operações</th>
                                            
                                        </tr>
                                        <?php while($livro = $result_livros->fetch_assoc()) { ?>
                                        <tr>
                                            <td><?php echo $livro['nome']; ?></td>
                                            <td><?php echo $livro['autor']; ?></td>
                                            <td><?php echo $livro['data_devolucao']; ?></td>
                                            <td><?php echo $livro['devolvido'] ? 'Sim' : 'Não'; ?></td>
                                            <td> <label class="switch">
                                                  <input type="checkbox">
                                                  <span class="slider round"></span>
                                                </label>
                                                                                            
                                              </td>
                                            
                                            
                                        </tr>
                                        <?php } ?>
                                    </table>
                                </section> <br><br>

                                <a href="../index.html"><img src="../img/btn-back.png" alt="Voltar"></a>


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


.switch {
  position: relative;
  display: inline-block;
  width: 40px;
  height: 10px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 15px;
  width: 15px;
  left: 2px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
a img{

    width: 100px;
    height: 50px;
}
</style>


    </body>
</html>