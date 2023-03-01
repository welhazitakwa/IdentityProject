<?php
namespace App\Controllers;

use \AIFrame\DatabaseTable;
use \AIFrame\Authentication;

class categorie{
	private $categoriesTable;
	private $utilisateursTable;
	private $authentication;

//---------Constructeur---------------//
	public function __construct(
							\AIFrame\DatabaseTable $categoriesTable,
							\AIFrame\DatabaseTable $utilisateursTable,
							\AIFrame\Authentication $authentication
		){
		
		$this->categoriesTable = $categoriesTable;
		$this->utilisateursTable = $utilisateursTable;
		$this->authentication = $authentication;
	}

//----------Formulaire de Traitement-----------//

	public function edit(){
		
		if (isset($_GET['id'])){
			$categorie = $this->categoriesTable->findById($_GET['id']);
		}
		
		$user = $this->authentication->getUser();
		$title = 'Traitement :: categorie';
		return ['template' => 'back/editcategorie.html.php',
				'title' => $title,
				'variables' => [
					'categorie' => $categorie ?? null,
					'user' => $user
					]
				];
	}

//--------Enregistrement de données---------//

	public function saveEdit(){
		
		$categorie = $_POST['categorie'];
		$this->categoriesTable->save($categorie);
		header('location: /categorie/list');
	}

//--------Affichage de données---------//

	public function list(){
		
		$categories = $this->categoriesTable->findAll();
		$user = $this->authentication->getUser();

		$title = 'Liste :: categories';
		return ['template' => 'back/categorie.html.php',
				'title' => $title,
				'variables' => [
					'categories' => $categories,
					'user' => $user
					]
				];
	}

//--------Suppression de données---------//

	public function delete(){
		
		$this->categoriesTable->delete($_GET['id']);
		header('location: /categorie/list');
	}

}