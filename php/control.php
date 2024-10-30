<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $numero_cartao = $_POST['numero_cartao'];

$sql_usuario = "SELECT * FROM usuarios WHERE numero_cartao = '$numero_cartao'";
 $result_usuario = $conn->query($sql_usuario);
								    
if ($result_usuario->num_rows > 0) {
  // Redirecionar para uma página onde o usuário pode ver seus empréstimos
  header("Location: usuario.php?id=".$result_usuario->fetch_assoc()['id']);
 } else {
    echo "Usuario nao encontado";
  }
}
?>