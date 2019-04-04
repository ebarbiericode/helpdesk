<?php
	//inicia sessão. se o login for correto podera ver as telas do sistema.
	session_start();


	//variavel que verifica se a autenticacao foi realizada
	$usuario_autenticado = false;

	//usuarios do sistema
	$usuarios_app = array(
		array('email' => 'adm@teste.com.br', 'senha' => '12345'),
		array('email' => 'user@teste.com.br', 'senha' => 'abcd'),
	);

	// echo '<pre>';
	// print_r($usuarios_app);
	// echo '</pre>';

	foreach($usuarios_app as $user){

		if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
			$usuario_autenticado = true;
		}

	}

	if($usuario_autenticado){
		echo 'Usuário autenticado';
		$_SESSION['autenticado'] = 'SIM';
		header('Location: home.php');
	} else {
		$_SESSION['autenticado'] = 'NAO';
		header('Location: index.php?login=erro');
	}

	print_r($_POST);

	echo '<br />';

	echo $_POST['email'];
	echo '<br />';
	echo $_POST['senha'];

?>