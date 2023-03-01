<?php
namespace App\Controllers;

use \AIFrame\DatabaseTable;
use \AIFrame\Authentication;

class abonnement{
	private $abonnementsTable;
	private $utilisateursTable;
	private $authentication;

//---------Constructeur---------------//
	public function __construct(
							\AIFrame\DatabaseTable $abonnementsTable,
							\AIFrame\DatabaseTable $utilisateursTable,
							\AIFrame\Authentication $authentication
		){
		
		$this->abonnementsTable = $abonnementsTable;
		$this->utilisateursTable = $utilisateursTable;
		$this->authentication = $authentication;
	}

//----------Formulaire de Traitement-----------//

	public function edit(){
		
		if (isset($_GET['id'])){
			$abonnement = $this->abonnementsTable->findById($_GET['id']);
		}
		
		$user = $this->authentication->getUser();
		$title = 'Traitement :: abonnement';
		return ['template' => 'back/editabonnement.html.php',
				'title' => $title,
				'variables' => [
					'abonnement' => $abonnement ?? null,
					'user' => $user
					]
				];
	}

//--------Enregistrement de données---------//

	public function saveEdit(){
		
		$abonnement = $_POST['abonnement'];
		$this->abonnementsTable->save($abonnement);
		header('location: /abonnement/list');
	}

//--------Affichage de données---------//

	public function list(){
		
		$abonnements = $this->abonnementsTable->findAll();
		$user = $this->authentication->getUser();

		$title = 'Liste :: abonnements';
		return ['template' => 'back/abonnement.html.php',
				'title' => $title,
				'variables' => [
					'abonnements' => $abonnements,
					'user' => $user
					]
				];
	}

//--------Suppression de données---------//

	public function delete(){
		
		$this->abonnementsTable->delete($_GET['id']);
		header('location: /abonnement/list');
	}

}