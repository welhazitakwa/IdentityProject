<?php
namespace App\Controllers;
use \AIFrame\DatabaseTable;
use \AIFrame\Authentication;

class Register {
	private $utilisateursTable;	
	private $authentication;


	public function __construct(DatabaseTable $utilisateursTable, \AIFrame\Authentication $authentication) {
		$this->utilisateursTable = $utilisateursTable;
		$this->authentication = $authentication;

	}
	public function home() {
		$title = 'Bienvenue dans notre monde';
		return ['template' => 'board.html.php', 
		'title' => $title,'variables' => []];
	}

	public function getSession(){
		$this->utilisateursTable->find('login', $_SESSION['username']);
		return ['template' => 'layout.html.php', 
				'title' => 'Register an account'];
	}

	public function registrationForm() {
		return ['template' => 'layout.html.php', 
				'title' => 'Register an account'];
	}




	public function registerUser() {
		$utilisateur = $_POST['utilisateur'];
		$utilisateur['email'] = strtolower($utilisateur['email']);
		if (count($this->utilisateursTable->find('email', $utilisateur['email'])) > 0 && count($this->utilisateursTable->find('login', $utilisateur['login'])) > 0) {
			return ['template' => 'layout.html.php', 
				    'title' => 'erreur_register',
				    'variables' => [
				    		'utilisateur' => $utilisateur
				    ]
				   ]; 
		}
		else {
			$utilisateur['password'] = password_hash($utilisateur['password'], PASSWORD_DEFAULT);
			$this->utilisateursTable->save($utilisateur);
			session_start();
			session_regenerate_id();
			$_SESSION['username'] = $utilisateur['login'];
			$_SESSION['password'] = $utilisateur['password'] ;
			header('location: /');
		}
	}

	public function profil() {
		$utilisateurs = $this->utilisateursTable->findAll();
		$user = $this->authentication->getUser();

		return ['template' => 'back/profil.html.php',
				'title' => 'utilisateur List',
				'variables' => [
						'utilisateurs' => $utilisateurs,
						'user' => $user
					]
				];
	}
	public function list() {
		$utilisateurs = $this->utilisateursTable->findAll();

		return ['template' => 'back/utilisateur.html.php',
				'title' => 'utilisateur List',
				'variables' => [
						'utilisateurs' => $utilisateurs
					]
				];
	}

	// public function permissions() {

		// $utilisateur = $this->utilisateursTable->findById($_GET['id']);

		// $reflected = new \ReflectionClass('\Ijdb\Entity\utilisateur');
		// $constants = $reflected->getConstants();

		// return ['template' => 'permissions.html.php',
				// 'title' => 'Edit Permissions',
				// 'variables' => [
						// 'utilisateur' => $utilisateur,
						// 'permissions' => $constants
					// ]
				// ];	
	// }

	// public function savePermissions() {
		// $utilisateur = [
			// 'id' => $_GET['id'],
			// 'permissions' => array_sum($_POST['permissions'] ?? [])
		// ];

		// $this->utilisateursTable->save($utilisateur);

		// header('location: /utilisateur/list');
	// }
}