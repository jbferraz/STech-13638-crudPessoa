<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php
$id = null;
if(isset($_POST['editar'])){
    $id = $_POST['idUsuario'];
}
require_once '../controller/CUsuario.php';
$cadUser = new CUsuario();
$user = $cadUser->getUsuarioById($id);
var_dump($user);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
