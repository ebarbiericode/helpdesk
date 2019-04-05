<?php
	//inicia sessão. se o login for correto podera ver as telas do sistema.
	session_start();


	//variavel que verifica se a autenticacao foi realizada
	$usuario_autenticado = false;
	$usuario_id = null;
	$usuario_perfil_id = null;
	$perfis = array(1 => 'Administrativo', 2 => 'Usuário');

	//usuarios do sistema - ID, Email, Senha, Permissão (1 - adm, 2 - usuario)
	$usuarios_app = array(
		array('id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '12345', 'perfil_perm' => 1),
		array('id' => 2, 'email' => 'user@teste.com.br', 'senha' => '12345', 'perfil_perm' => 1),
		array('id' => 3, 'email' => 'jose@teste.com.br', 'senha' => '12345', 'perfil_perm' => 2),
		array('id' => 4, 'email' => 'maria@teste.com.br', 'senha' => '12345', 'perfil_perm' => 2),
	);

	// echo '<pre>';
	// print_r($usuarios_app);
	// echo '</pre>';

	foreach($usuarios_app as $user){

		if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
			$usuario_autenticado = true;
			$usuario_id = $user['id'];
			$usuario_permissao = $user['perfil_perm'];
		}

	}

	if($usuario_autenticado){
		echo 'Usuário autenticado';
		$_SESSION['autenticado'] = 'SIM';
		$_SESSION['id'] = $usuario_id;
		$_SESSION['perfil_perm'] = $usuario_permissao;
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