<?php
include 'db.php';
$id_usuario = $_GET['id'];

// Consultar informações do usuário e empréstimos
$sql_usuario = "SELECT * FROM usuarios WHERE id = $id_usuario";
$result = $conn->query($sql_usuario);
$usuario = $result->fetch_assoc();

// Consultar lista de livros
$sql_livros = "SELECT * FROM livros";
$result_livros = $conn->query($sql_livros);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Livros</title>
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

                <header>
                    <h1>Histórico de Empréstimos - <?php echo $usuario['nome']; ?></h1>
                </header>
                    
        </div>
            
            <!-- Inicio do conteudo-->
                <div id="conteudo">
                        <!--inicio de Livros mais Lidos-->

                        <div id="tlivros">
                            <h2>Lista de Livros Disponiveis</h2>

                            <!--inicio da tabela que vai listar todos livros-->

                             <section>
                                    <table border="1">
                                        <tr>
                                            <th>Título</th>
                                            <th>Autor</th>
                                            <th>Gênero</th>
                                            <th>Total de Páginas</th>
                                            <th>Cópias Disponíveis</th>
                                            <th>Capa</th>
                                        </tr>
                                        <?php while($livro = $result_livros->fetch_assoc()) { ?>
                                        <tr>
                                            <td><?php echo $livro['titulo']; ?></td>
                                            <td><?php echo $livro['autor']; ?></td>
                                            <td><?php echo ucfirst($livro['genero']); ?></td>
                                            <td align="center"><?php echo $livro['total_paginas']; ?></td>
                                            <td align="center"><?php echo $livro['copias_disponiveis']; ?></td>
                                            <td align="center"><img src="../img/<?php echo $livro['foto_capa']; ?>" alt="Capa do livro" width="30px" ></td>
                                        </tr>
                                        <?php } ?>
                                    </table>
                                </section>
                            
                            
                        </div>

    
                        <!--inicio da lateral-->
                        <div id="lateral">
                            <h2>Menu de Navegação</h2>
                            <div class="caixa">
                                
                                <div class="caixa_conteudo">
                                    <form method="POST" action="livros.php">
                                        <label for="criterio"><h3>Pesquisar Livro</h3></label><br>
                                        <select name="criterio" class="criterio" id="select">
                                            <option value="titulo" >Título</option>
                                            <option value="autor">Autor</option>
                                            <option value="genero">Gênero</option>
                                        </select><br>

                                        <input type="text" name="valor" placeholder=" Digite o nome do autor">

                                        <button type="submit" id="pesquisar"><i class="fa fa-search" > </i> Pesquisar</button>

                                    </form><br><br>

                                    <div>
                                    <h3> Menu Principal</h3>
                                        <div id="navegacao1">
                                        <ul>
                                            <li><a href="cadastro_livro.php">Cadastrar Livros </a></li><br>
                                            <li><a href="emprestar_livro.php">Emprestar Livros</a></li><br>
                                            <li><a href="devolver_livro.php">Devolver Livros</a></li><br>
                                            <li><a href="cadastro_usuarios.php">Cadastro de Usuarios</a></li><br>
                                            
                                            

                                        </ul>
                                        </div>

                                    </div>


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
                    #select{
                      width: 115%;
                      padding: 12px;
                      border: 1px solid #ccc;
                      border-radius: 4px;
                      height: 39px;
                      background-color: #fff;
                    }
                    input[type=text]{
                      width: 100%;
                      padding: 12px;
                      border: 1px solid #ccc;
                      border-radius: 4px;
                      resize: vertical;
                      background-color: #fff;
                      height: 15px;
                    }

                    #navegacao1 ul a {
                        font-size: 1.0em;
                        display:block;
                        line-height: 1.1em;
                        text-decoration: none;
                        color: #blue;
                        
                    }
                     #navegacao1 ul a:hover{
                        background: none;
                        color: black;
                        background: url(img/divisor.png) no-repeat left center;

                    }
                     #navegacao1 ul a:visited{
                        background: none;
                        color: #294C71;
                        background: url(img/divisor.png) no-repeat left center;

                    }   
                    #navegacao1 ul a:link,{
                        background: none;
                        color: #black;
                        background: url(img/divisor.png) no-repeat left center;

                    }               
                </style>

    </body>
</html>
