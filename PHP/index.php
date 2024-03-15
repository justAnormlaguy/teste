<?php
$senha_user;
$senha_bd;

$options = [
    'cost' => 15,
];
$senhacrypto = password_hash($senha_user, PASSWORD_DEFAULT, $options);

if(password_verify($senha_user, $senha_bd)):
    echo "Senha válida";
else:
    echo "Senha inválida";
endif;

?>