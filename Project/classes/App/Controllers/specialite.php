<?php
namespace App\Controllers;

use \AIFrame\DatabaseTable;
use \AIFrame\Authentication;

class specialite{
	private $specialitesTable;
	private $utilisateursTable;
	private $authentication;

//---------Constructeur---------------//
	public function __construct(
							\AIFrame\DatabaseTable $specialitesTable,
							\AIFrame\DatabaseTable $utilisateursTable,
							\AIFrame\Authentication $authentication
		){
		
		$this->specialitesTable = $specialitesTable;
		$this->utilisateursTable = $utilisateursTable;
		$this->authentication = $authentication;
	}

//----------Formulaire de Traitement-----------//

	public function edit(){
		
		if (isset($_GET['id'])){
			$specialite = $this->specialitesTable->findById($_GET['id']);
		}
		
		$user = $this->authentication->getUser();
		$title = 'Traitement :: specialite';
		return ['template' => 'back/editspecialite.html.php',
				'title' => $title,
				'variables' => [
					'specialite' => $specialite ?? null,
					'user' => $user
					]
				];
	}

//--------Enregistrement de données---------//

	public function saveEdit(){
		
		$specialite = $_POST['specialite'];
		$this->specialitesTable->save($specialite);
		header('location: /specialite/list');
	}

//--------Affichage de données---------//

	public function list(){
		
		$specialites = $this->specialitesTable->findAll();
		$user = $this->authentication->getUser();

		$title = 'Liste :: specialites';
		return ['template' => 'back/specialite.html.php',
				'title' => $title,
				'variables' => [
					'specialites' => $specialites,
					'user' => $user
					]
				];
	}

//--------Suppression de données---------//

	public function delete(){
		
		$this->specialitesTable->delete($_GET['id']);
		header('location: /specialite/list');
	}

}