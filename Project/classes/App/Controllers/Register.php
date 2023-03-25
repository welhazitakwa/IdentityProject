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
		$date = date_create(date('Y-m-d')); 
		$utilisateur['updatedAt']= date_format($date, 'Y-m-d H:i:s');
		$utilisateur['createdAt']= date_format($date, 'Y-m-d H:i:s');
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

	public function edit(){
		
		if (isset($_GET['id'])){
			$utilisateur = $this->utilisateursTable->findById($_GET['id']);

		}
		
		$user = $this->authentication->getUser();
		$title = 'Traitement :: edit';
		return ['template' => 'back/editprofile.html.php',
				'title' => $title,
				'variables' => [
					'utilisateur' => $utilisateur ?? null,
					'user' => $user
					]
				];
	}
	public function editprofil(){
		
		if (isset($_GET['id'])){
			$utilisateur = $this->utilisateursTable->findById($_GET['id']);
		}
		
		$user = $this->authentication->getUser();
		$title = 'edit';
		return ['template' => 'back/editprofile.html.php',
				'title' => $title,
				'variables' => [
					'utilisateur' => $utilisateur ?? null,
					'user' => $user
					]
				];
	}


//--------Enregistrement de données---------//

	public function saveEdit(){

		$dossier="img_utilisateurs/";
//Gold 2.jpg
		$file=rand(1000,100000)."-".basename($_FILES["fileToUpload"]["name"]);
									// 10001-Gold 2-20000.jpg
		$new_file_name=strtolower($file);		
			// 10001-gold 2.jpg
		$final_file=str_replace(' ','-',$new_file_name);
// 10001-gold-2.jpg
		$target_file=$dossier.$final_file;
// img_abn/10001-gold-2.jpg
		$file_loc=$_FILES['fileToUpload']['tmp_name'];
//Gold 2.jpg /pc/tmp
		move_uploaded_file($file_loc,$target_file); // mv tmpfile dossier/nexnamefile
			
		if ($_FILES['fileToUpload']['error'] == 4 || ($_FILES['fileToUpload']['size'] == 0 && $_FILES['fileToUpload']['error'] == 0))
{
		
	$utilisateur = $_POST['utilisateur'];
	$date = date_create(date('Y-m-d')); 
	$utilisateur['updatedAt']= date_format($date, 'Y-m-d H:i:s');
    // cover_image is empty (and not an error), or no file was uploaded
}else{
	$utilisateur = $_POST['utilisateur'];
		$utilisateur['avatar']=$final_file;
		$date = date_create(date('Y-m-d')); 
		$utilisateur['updatedAt']= date_format($date, 'Y-m-d H:i:s');
		}
		$this->utilisateursTable->save($utilisateur);
		header('location: /editprofil?id='.$_GET['id'].'&msg=1');
	}

	public function bloquer(){
		
		$utilisateur['id'] = $_GET['id'];
		$utilisateur['etat'] = $_GET['etat'];
		
		$this->utilisateursTable->save($utilisateur);
		header('location: /doctor/listall');
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