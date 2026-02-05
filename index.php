<?php
    include "conexao.php";

    $sql = "SELECT * FROM usuarios";
    $resultado = mysqli_query ($conn, $sql);
//query o comando que voce vai criar para o banco de dados
?>

<h2>Lista de Usuários</h2>
<a href = "criar.php">Novo Usuário</a>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
<?php while ($u = mysqli_fetch_assoc($resultado)) { ?>
<!--While como se fosse um if, sendo um loop-->
<tr>
    <td><?= $u['nome'] ?></td>
    <td><?= $u['email'] ?></td>
    <td>
        <a href = "editar.php?id=<?= $u['id']?>">Editar</a>
<!--?id está indo como um get-->
        <a href = "excluir.php?id=<?= $u['id']?>">Editar</a>
    </td>
</tr>
<?php } ?>
    </table>