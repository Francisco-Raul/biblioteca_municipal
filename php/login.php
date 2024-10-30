


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
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
						<li><a href="../html/login.html">Biblioteca Virtual </a></li>
						<li><a href="../html/parceiros.html">Parceiros </a></li>
						<!--<li><a href="php/pesquisar.php">Colaboradores </a></li> -->
						<li><a href="../html/contacto.html">Contactos </a></li>

				</ul>
					
		</div>
			
			<!-- Inicio do conteudo-->
					<div>
						
						<header>
					        <h1>Login de Usuário Registrado</h1>
					    </header>

					     <form method="POST" action="control.php">
					     	
					        <label for="numero_cartao">Codigo do Visitante:</label>
					        <input type="text" id="numero_cartao" name="numero_cartao" required>
					        <input type="submit" value="Aceder Emprestimos"></input>

                          

					       
					    </form>

					</div>
			


			</div>
			
		<!-- Inicio do rodape-->
				<div id="rodape_container" style= "clear: both;">
					<div id="rodape" align="center">
					 &copy; Copyright 2011-2024  Biblioteca Municpal da Beira
					</div>

				</div>



	</body>
</html>
<style type="text/css">

	
	
	
input[type=text]  {
  width: 30%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  background-color: #fff;
  height: 10px;
}
input[type=submit] {
  background-color: #294C71;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  
}

input[type=submit]:hover {
  background-color: white;
  color:#294C71;
  border:  2px solid #294C71 ;
}
</style>