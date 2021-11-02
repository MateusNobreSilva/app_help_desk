<?php

session_start();

$_SESSION['autenticado'] = 'Oi, sou um valor de sessão!';

print_r($_SESSION);
echo '<hr />';

// print_r($_GET);

// echo $_GET['email'];
// echo $_GET['senha'];


$usuarios_app = array(
    array('email' => 'mateus@gmail.com', 'senha' => '123456'),
    array('email' => 'admin@admin.com', 'senha' => '123456'),
);

$usuario_autenticado = false;

// echo '<pre>';
// print_r($usuarios_app);
// echo '</pre>';

foreach ($usuarios_app as $user) {



    if ($user['email'] ==  $_POST['email']  &&  $user['senha'] ==  $_POST['senha']) {
        $usuario_autenticado = true;
    }



    // echo '<hr>';
    // // print_r($user);
    // echo '<hr>';
}

if ($usuario_autenticado) {
    echo 'Usuário autenticado';
    $_SESSION['autenticado'] = 'SIM';
    header('Location: home.php');
} else {
    $_SESSION['autenticado'] = 'NAO';
    //  echo 'Erro na autenticação do usuário';
    header('Location: index.php?login=erro');
}


// print_r($_POST);

// echo '<br />';

// echo $_POST['email'];
// echo '<br />';
// echo $_POST['senha'];
