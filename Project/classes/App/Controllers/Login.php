<?php
//détermination de la racine 
namespace App\Controllers;
// création de la classe Login
class Login {
	//declaration des variables privées
	private $authentication;
//création de la fonction constructeur, avec affectation des variables
	public function __construct(\AIFrame\Authentication $authentication) {
		$this->authentication = $authentication;
	}

	public function loginForm() {
		return ['template' => 'login.html.php', 'title' => 'Log In'];
	}

	public function processLogin() {
		//determiner les attributs responsable à l'authentification  en se basant sur la fonction Login() affin d'accéder à l'application
		if ($this->authentication->login($_POST['login'], $_POST['password'])) {
			//refraiche vers la page /login/success
			header('location: /');
		}
		//si on est dans le cas d'une invalide authentification le système gére un message d'erreur
		else {
			return ['template' => 'layout.html.php',
					'title' => 'Error log in',
					'variables' => [
							'error' => 'Invalid username/password.'
						]
					];
		}
	}
//fonction pour  indiquer que l'authentification est bien faite en affichant l'interface loginsuccess.html.php
	public function success() {
		return ['template' => 'home.html.php', 'title' => 'Login Successful'];
	}
//fonction pour  indiquer que l'authentification est incorrecte en affichant l'interface loginerror.html.php
	public function error() {
		return ['template' => 'layout.html.php', 'title' => 'You are not logged in'];
	}
//fonction pour  indiquer que l'utilisateur n'a pas la permission en affichant l'interface permissionserror.html.php
	
	public function permissionsError() {
		return ['template' => 'permissionserror.html.php', 'title' => 'Access Denied'];
	}
//fonction de deconnexion
	public function logout() {
		unset($_SESSION);
		session_destroy();
		return ['template' => 'home.html.php', 'title' => 'You have been logged out'];
	}
}
