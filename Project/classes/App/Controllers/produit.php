<?php
namespace App\Controllers;

use \AIFrame\DatabaseTable;
use \AIFrame\Authentication;

class produit{
	private $produitsTable;
	private $utilisateursTable;
	private $authentication;

//---------Constructeur---------------//
	public function __construct(
							\AIFrame\DatabaseTable $produitsTable,
							\AIFrame\DatabaseTable $utilisateursTable,
							\AIFrame\Authentication $authentication
		){
		
		$this->produitsTable = $produitsTable;
		$this->utilisateursTable = $utilisateursTable;
		$this->authentication = $authentication;
	}

//----------Formulaire de Traitement-----------//

	public function edit(){
		
		if (isset($_GET['id'])){
			$produit = $this->produitsTable->findById($_GET['id']);
		}
		
		$user = $this->authentication->getUser();
		$title = 'Traitement :: produit';
		return ['template' => 'back/editproduit.html.php',
				'title' => $title,
				'variables' => [
					'produit' => $produit ?? null,
					'user' => $user
					]
				];
	}

//--------Enregistrement de données---------//

	public function saveEdit(){
		
		$produit = $_POST['produit'];
		$this->produitsTable->save($produit);
		header('location: /produit/list');
	}

//--------Affichage de données---------//

	public function list(){
		
		$produits = $this->produitsTable->findAll();
		$user = $this->authentication->getUser();

		$title = 'Liste :: produits';
		return ['template' => 'back/produit.html.php',
				'title' => $title,
				'variables' => [
					'produits' => $produits,
					'user' => $user
					]
				];
	}

//--------Suppression de données---------//

	public function delete(){
		
		$this->produitsTable->delete($_GET['id']);
		header('location: /produit/list');
	}

}