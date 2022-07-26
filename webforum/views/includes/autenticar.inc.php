<?php
session_start();
$estado = $_SESSION['logado'];

if(!$estado || isset($_SESSION['logado'])){
    header('Location: LoginUsuario.php?erro=2');
}

?>