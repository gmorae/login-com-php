<?php

$email = "admin@admin.com";
$senha = 12345;

if(($email == $_POST['email']) && ($senha == $_POST['senha'])) {
    header('Location: adm.html');
} else {
    $mensagem = 'Login ou senha invalidos';
    header('Location: index.html');
}
