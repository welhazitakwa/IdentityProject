<?php
namespace App\Controllers;

use \AIFrame\DatabaseTable;
use \AIFrame\Authentication;

class blog{
	private $blogsTable;
	private $utilisateursTable;
	private $authentication;
	

//---------Constructeur---------------//
	public function __construct(
		     
							\AIFrame\DatabaseTable $blogsTable,
							\AIFrame\DatabaseTable $utilisateursTable,
							\AIFrame\Authentication $authentication
		){
		
		$this->blogsTable = $blogsTable;
		$this->utilisateursTable = $utilisateursTable;
		$this->authentication = $authentication;
	}

//----------Formulaire de Traitement-----------//

	public function edit(){
		
		if (isset($_GET['id'])){
			$blog = $this->blogsTable->findById($_GET['id']);
		}
		
		$user = $this->authentication->getUser();
		$title = 'Traitement :: blog';
		return ['template' => 'back/editblog.html.php',
				'title' => $title,
				'variables' => [
					'blog' => $blog ?? null,
					'user' => $user
					]
				];
	}

//--------Enregistrement de données---------//

	public function saveEdit(){
		
		$blog = $_POST['blog'];
		$this->blogsTable->save($blog);
		header('location: /blog/list?idDocT='.$_GET['idDocT']);
	}



		public function publier(){
		
		$blog['id'] = $_GET['id'];
		$blog['etat'] = $_GET['etat'];
		
		$this->blogsTable->save($blog);
		header('location: /blog/list');
	}

//--------Affichage de données---------//

	public function list(){
		
		$blogs = $this->blogsTable->findAll();
		$count = $this->blogsTable->total();
		$utilisateurs = $this->utilisateursTable->findAll();

		$user = $this->authentication->getUser();


		$title = 'Liste :: blogs';
		return ['template' => 'back/blog.html.php',
				'title' => $title,
				'variables' => [
					'blogs' => $blogs,
     'utilisateurs' => $utilisateurs,
     'count' => $count,
     'user' => $user
					
					]
				];
	}

//--------Suppression de données---------//

	public function delete(){
		
		$this->blogsTable->delete($_GET['id']);
		header('location: /blog/list?idDocT='.$_GET['idDocT']);
	}

}