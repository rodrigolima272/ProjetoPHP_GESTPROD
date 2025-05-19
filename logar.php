<?php

if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){

    require 'Gerenciador/conexao2.php'
    require 'usuario.php'

$email = addslashes($_POST['email']);
$senha = addcslashes($_POST['senha']);

}else{
    header('Location: login.php');
}