<?php
namespace App;

class mapRoutes implements \AIFrame\Routes {
	private $utilisateursTable;
	private $authentication;
	#etape 1
	private $categoriesTable;
		private $doctorTable;	
	private $produitsTable;	
	private $abonnementsTable;	
	private $specialitesTable;
	private $doctorsTable;	
	private $patientsTable;	
	private $appointmentsTable;	
	
	
		

	public function __construct() {
		include __DIR__ . '/../../includes/DatabaseConnection.php';
		$this->utilisateursTable = new \AIFrame\DatabaseTable($pdo, 'utilisateurs', 'id');
		$this->authentication = new \AIFrame\Authentication($this->utilisateursTable, 'login', 'password');
		
//////////////////////////////////////////////////////////Model instance  # etape 2
		
		$this->categoriesTable = new \AIFrame\DatabaseTable($pdo, 'categories', 'id');
		$this->produitsTable = new \AIFrame\DatabaseTable($pdo, 'produits', 'id');
		$this->abonnementsTable = new \AIFrame\DatabaseTable($pdo, 'abonnements', 'id');
		$this->specialitesTable = new \AIFrame\DatabaseTable($pdo, 'specialites', 'id');
		$this->doctorsTable = new \AIFrame\DatabaseTable($pdo, 'doctors', 'id');
		$this->patientsTable = new \AIFrame\DatabaseTable($pdo, 'patients', 'id');
		$this->appointmentsTable = new \AIFrame\DatabaseTable($pdo, 'appointments', 'id');
	
	
	}

	public function getRoutes(): array {
		
		$utilisateurController = new \App\Controllers\Register($this->utilisateursTable,$this->authentication, 	$this->doctorsTable, $this->patientsTable, $this->appointmentsTable, $this->specialitesTable);
		$loginController = new \App\Controllers\Login($this->authentication);
	
//////////////////////////////////////////////////////////Control instance  # ETAPE 3 
		$categorieController = new \App\Controllers\categorie($this->categoriesTable,$this->utilisateursTable,$this->authentication);
		$produitController = new \App\Controllers\produit($this->produitsTable,$this->utilisateursTable,$this->authentication);
	    $abonnementController = new \App\Controllers\abonnement($this->abonnementsTable,$this->utilisateursTable,$this->authentication);
		$specialiteController = new \App\Controllers\specialite($this->specialitesTable,$this->utilisateursTable,$this->authentication);
		$doctorController = new \App\Controllers\doctor($this->doctorsTable,$this->specialitesTable,$this->abonnementsTable,$this->utilisateursTable,$this->authentication);

		$patientController = new \App\Controllers\patient($this->patientsTable,$this->utilisateursTable,$this->authentication);

		$appointmentController = new \App\Controllers\appointment($this->appointmentsTable,$this->doctorsTable,
		$this->patientsTable,$this->utilisateursTable,$this->authentication);
		
		$routes = [
		// Home
			'' => [
					'GET' => [
						'controller' => $utilisateurController,
						'action' => 'home'
					]
				],
		// Login
			'login' => [
				'GET' => [
					'controller' => $loginController,
					'action' => 'loginForm'
				],
				'POST' => [
					'controller' => $loginController,
					'action' => 'processLogin'
				]
			],
			'login/error' => [
				'GET' => [
					'controller' => $loginController,
					'action' => 'error'
				]
			],
			'login/permissionserror' => [
				'GET' => [
					'controller' => $loginController,
					'action' => 'permissionsError'
				]
			],
		// Register
			'register' => [
				'GET' => [
					'controller' => $utilisateurController,
					'action' => 'registrationForm'
				],
				'POST' => [
					'controller' => $utilisateurController,
					'action' => 'registerUser'
				]
			],
		// logout
			'logout' => [
				'GET' => [
					'controller' => $loginController,
					'action' => 'logout'
				]
			],
		// Utilisateur
			'profil' => [
				'GET' => [
					'controller' => $utilisateurController,
					'action' => 'profil'
				],
				'login' => true
			],
			'editprofil' => [
				'POST' => [
					'controller' => $utilisateurController,
					'action' => 'saveEdit'
				],
				'GET' => [
					'controller' => $utilisateurController,
					'action' => 'editprofil'
				],
				'login' => true
			],
			'utilisateur/list' => [
				'GET' => [
					'controller' => $utilisateurController,
					'action' => 'list'
				],
				'login' => true,
				'permissions' => \App\Entity\utilisateur::EDIT_USER_ACCESS
			],
			'utilisateur/edit' => [
				'POST' => [
					'controller' => $utilisateurController,
					'action' => 'saveEdit'
				],
				'GET' => [
					'controller' => $utilisateurController,
					'action' => 'edit'
				],
				'login' => true
			],
			'utilisateur/delete' => [
				'GET' => [
					'controller' => $utilisateurController,
					'action' => 'delete'
				],
				'login' => true
			],
			'utilisateur/permissions' => [
				'GET' => [
					'controller' => $utilisateurController,
					'action' => 'permissions'
				],
				'POST' => [
					'controller' => $utilisateurController,
					'action' => 'savePermissions'
				],
				'login' => true,
				'permissions' => \App\Entity\utilisateur::EDIT_USER_ACCESS
			],
						'utilisateur/bloquer' => [
				'GET' => [
					'controller' => $utilisateurController,
					'action' => 'bloquer'
				],
				'login' => true
			],
			//categorie
			'categorie/list' => [
				'GET' => [
					'controller' => $categorieController,
					'action' => 'list'
				],
				'login' => true
			],
			'categorie/edit' => [
				'POST' => [
					'controller' => $categorieController,
					'action' => 'saveEdit'
				],
				'GET' => [
					'controller' => $categorieController,
					'action' => 'edit'
				],
				'login' => true
			],
			'categorie/logout' => [
				'GET' => [
					'controller' => $loginController,
					'action' => 'logout'
				]
			],

			'categorie/delete' => [
				'GET' => [
					'controller' => $categorieController,
					'action' => 'delete'
				],
				'login' => true
			],
			//produit
			'produit/list' => [
				'GET' => [
					'controller' => $produitController,
					'action' => 'list'
				],
				'login' => true
			],
			'produit/edit' => [
				'POST' => [
					'controller' => $produitController,
					'action' => 'saveEdit'
				],
				'GET' => [
					'controller' => $produitController,
					'action' => 'edit'
				],
				'login' => true
			],

			'produit/delete' => [
				'GET' => [
					'controller' => $produitController,
					'action' => 'delete'
				],
				'login' => true
			],




			//abonnement
			'abonnement/list' => [
				'GET' => [
					'controller' => $abonnementController,
					'action' => 'list'
				],
				'login' => true
			],
			'abonnement/edit' => [
				'POST' => [
					'controller' => $abonnementController,
					'action' => 'saveEdit'
				],
				'GET' => [
					'controller' => $abonnementController,
					'action' => 'edit'
				],
				'login' => true
			],

			'abonnement/delete' => [
				'GET' => [
					'controller' => $abonnementController,
					'action' => 'delete'
				],
				'login' => true
			],

			'abonnement/publier' => [
				'GET' => [
					'controller' => $abonnementController,
					'action' => 'publier'
				],
				'login' => true
			],
			'abonnement/logout' => [
				'GET' => [
					'controller' => $loginController,
					'action' => 'logout'
				]
			],


			//specialite
			'specialite/list' => [
				'GET' => [
					'controller' => $specialiteController,
					'action' => 'list'
				],
				'login' => true
			],
			'specialite/edit' => [
				'POST' => [
					'controller' => $specialiteController,
					'action' => 'saveEdit'
				],
				'GET' => [
					'controller' => $specialiteController,
					'action' => 'edit'
				],
				'login' => true
			],

			'specialite/delete' => [
				'GET' => [
					'controller' => $specialiteController,
					'action' => 'delete'
				],
				'login' => true
			],
			'specialite/logout' => [
				'GET' => [
					'controller' => $loginController,
					'action' => 'logout'
				]
			],


			//doctor
			'doctor/list' => [
				'GET' => [
					'controller' => $doctorController,
					'action' => 'list'
				],
				'login' => true
			],
			
			'doctor/listall' => [
				'GET' => [
					'controller' => $doctorController,
					'action' => 'listAll'
				],
				'login' => true
			],
			'doctor/listabn' => [
				'GET' => [
					'controller' => $doctorController,
					'action' => 'listAbn'
				],
				'login' => true
			],
			
			'doctor/edit' => [
				'POST' => [
					'controller' => $doctorController,
					'action' => 'saveEdit'
				],
				'GET' => [
					'controller' => $doctorController,
					'action' => 'edit'
				],
				'login' => true
			],

			'doctor/delete' => [
				'GET' => [
					'controller' => $doctorController,
					'action' => 'delete'
				],
				'login' => true
			],
			'doctor/logout' => [
				'GET' => [
					'controller' => $loginController,
					'action' => 'logout'
				]
			],


			//patient
			'patient/list' => [
				'GET' => [
					'controller' => $patientController,
					'action' => 'list'
				],
				'login' => true
			],
			
			'patient/edit' => [
				'POST' => [
					'controller' => $patientController,
					'action' => 'saveEdit'
				],
				'GET' => [
					'controller' => $patientController,
					'action' => 'edit'
				],
				'login' => true
			],

			'patient/delete' => [
				'GET' => [
					'controller' => $patientController,
					'action' => 'delete'
				],
				'login' => true
			],
			'patient/logout' => [
				'GET' => [
					'controller' => $loginController,
					'action' => 'logout'
				]
			],



			//appointment
			'appointment/list' => [
				'GET' => [
					'controller' => $appointmentController,
					'action' => 'list'
				],
				'login' => true
			],
			
			'appointment/edit' => [
				'POST' => [
					'controller' => $appointmentController,
					'action' => 'saveEdit'
				],
				'GET' => [
					'controller' => $appointmentController,
					'action' => 'edit'
				],
				'login' => true
			],

			'appointment/delete' => [
				'GET' => [
					'controller' => $appointmentController,
					'action' => 'delete'
				],
				'login' => true
			],
			'appointment/logout' => [
				'GET' => [
					'controller' => $loginController,
					'action' => 'logout'
				]
			],
			
			
		];
		

		return $routes;
	}

	public function getAuthentication(): \AIFrame\Authentication {
		return $this->authentication;
	}

	public function checkPermission($permission): bool {
		$user = $this->authentication->getUser();

		if ($user && $user->hasPermission($permission)) {
			return true;
		} else {
			return false;
		}
	}

}