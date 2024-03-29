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
		$title = 'abonnement ';
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
				if (isset($_GET['id'])){

	$abonnement = $_POST['abonnement'];
	$date = date_create(date('Y-m-d')); 
	$abonnement['updatedAt']= date_format($date, 'Y-m-d H:i:s');
  
		}else {
		$abonnement = $_POST['abonnement'];
		$date = date_create(date('Y-m-d')); 
		$abonnement['updatedAt']= date_format($date, 'Y-m-d H:i:s');
		$abonnement['createdAt']= date_format($date, 'Y-m-d H:i:s');
	
		}

		$this->abonnementsTable->save($abonnement);
		header('location: /abonnement/list');
	}



		public function publier(){
		$abonnement['id'] = $_GET['id'];
		$abonnement['etat'] = $_GET['etat'];
		$this->abonnementsTable->save($abonnement);
		header('location: /abonnement/list');
	}

//--------Affichage de données---------//

	public function list(){
		
		$abonnements = $this->abonnementsTable->findAll();
				$count = $this->abonnementsTable->total();

		$user = $this->authentication->getUser();

		$title = 'Liste abonnements';
		return ['template' => 'back/abonnement.html.php',
				'title' => $title,
				'variables' => [
					'abonnements' => $abonnements,
					'count' => $count,
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