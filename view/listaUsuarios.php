<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php
//posteriormente iremos trabalhar com session
require_once '../controller/CUsuario.php';
$cadUsuario = new CUsuario();
$listaUsuarios = $cadUsuario->getUsuarios();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div id="Lista" >
            <h2>Lista de Usuários</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome Usuário</th>
                        <th>Usuário</th>
                        <th>Perfil Acesso</th>
                        <th>Funções</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listaUsuarios as $user) : ?>
                        <tr>
                            <td><?php echo $user['idUsuario']; ?></td>
                            <td><?php echo $user['nomeUsuario']; ?></td>
                            <td><?php echo $user['usuario']; ?></td>
                            <td><?php echo $user['perfilAcesso']; ?></td>
                            <td> 
                                <form action="editarUser.php" method="post">
                                    <input type="hidden" name="idUsuario" 
                                           value="<?php echo $user['idUsuario']; ?>">
                                    <input type="submit" value="Editar" name="editar">
                                </form>
                                <form action="../controller/deletarUser.php" method="POST">
                                    <input type="hidden" name="idUsuario" 
                                           value="<?php echo $user['idUsuario']; ?>">
                                    <input type="submit" value="Deletar" name="deletar">
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <br/>
            <input type="button" value="Voltar ao cadastro" onclick="location.href = 'cadUsuario.php'">
        </div>
    </body>
</html>
