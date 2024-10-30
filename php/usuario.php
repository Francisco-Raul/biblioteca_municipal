<?php
include 'db.php';

$id_usuario = $_GET['id'];

// Consultar informações do usuário e empréstimos
$sql_usuario = "SELECT * FROM usuarios WHERE id = $id_usuario";
$result_usuario = $conn->query($sql_usuario);
$usuario = $result_usuario->fetch_assoc();

$sql_emprestimos = "SELECT livros.titulo, emprestimos.data_emprestimo, emprestimos.data_devolucao, emprestimos.devolvido FROM emprestimos 
                    JOIN livros ON emprestimos.id_livro = livros.id WHERE emprestimos.id_usuario = $id_usuario";
$result_emprestimos = $conn->query($sql_emprestimos);
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico de Empréstimos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Histórico de Empréstimos - <?php echo $usuario['nome']; ?></h1>
    </header>

    <section>
        <h2>Empréstimos Recebidos</h2>
        <table border="1">
            <tr>
                <th>Título</th>
                <th>Data de Empréstimo</th>
                <th>Data de Devolução</th>
                <th>Devolvido</th>
            </tr>
            <?php while($emprestimo = $result_emprestimos->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $emprestimo['titulo']; ?></td>
                <td><?php echo $emprestimo['data_emprestimo']; ?></td>
                <td><?php echo $emprestimo['data_devolucao']; ?></td>
                <td><?php echo $emprestimo['devolvido'] ? 'Sim' : 'Não'; ?></td>
            </tr>
            <?php } ?>
        </table>
    </section>
</body>
</html>

