<?

    session_start();
    // echo '<pre>';
    // print_r($_SESSION);
    // echo '</pre>';
    //remover indices do array de sessão
    //unset(); //inteligencia para remover o indice apenas se existir

    //destruir a variavel de sessao
    //session_destroy(); //sera destruida
    //forçar um redirecionamento

    session_destroy();
    header('Location: index.php');
?>