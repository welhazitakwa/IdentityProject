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
			if (isset($_GET['id'])){
			$dossier="img_spc/";
			$file=rand(1000,100000)."-".basename($_FILES["fileToUpload"]["name"]);
			$new_file_name=strtolower($file);		
			$final_file=str_replace(' ','-',$new_file_name);
			$target_file=$dossier.$final_file;
			$file_loc=$_FILES['fileToUpload']['tmp_name'];
			move_uploaded_file($file_loc,$target_file);
	if ($_FILES['fileToUpload']['error'] == 4 || ($_FILES['fileToUpload']['size'] == 0 && $_FILES['fileToUpload']['error'] == 0))
					{
						$specialite = $_POST['specialite'];
						$date = date_create(date('Y-m-d')); 
						$specialite['updatedAt']= date_format($date, 'Y-m-d H:i:s');
						}
		else{
					$specialite = $_POST['specialite'];
					$specialite['image']=$final_file;
					$date = date_create(date('Y-m-d')); 
					$specialite['updatedAt']= date_format($date, 'Y-m-d H:i:s');
				
						}


			}else{
			
		$dossier="img_spc/";
			$file=rand(1000,100000)."-".basename($_FILES["fileToUpload"]["name"]);
			$new_file_name=strtolower($file);		
			$final_file=str_replace(' ','-',$new_file_name);
			$target_file=$dossier.$final_file;
			$file_loc=$_FILES['fileToUpload']['tmp_name'];
			move_uploaded_file($file_loc,$target_file); // mv tmpfile dossier/nexnamefile
			
	if ($_FILES['fileToUpload']['error'] == 4 || ($_FILES['fileToUpload']['size'] == 0 && $_FILES['fileToUpload']['error'] == 0))
	{
		$specialite = $_POST['specialite'];
		$date = date_create(date('Y-m-d')); 
		$specialite['createdAt']= date_format($date, 'Y-m-d H:i:s');
		$specialite['updatedAt']= date_format($date, 'Y-m-d H:i:s');
		}
		else{
			$specialite = $_POST['specialite'];
			$specialite['image']=$final_file;
			$date = date_create(date('Y-m-d')); 
			$specialite['createdAt']= date_format($date, 'Y-m-d H:i:s');
			$specialite['updatedAt']= date_format($date, 'Y-m-d H:i:s');
		
	}
			

		
		}	
		 $this->specialitesTable->save($specialite);
			header('location: /specialite/list');
	}
//--------Affichage de données---------//

	public function list(){
		
		$specialites = $this->specialitesTable->findAll();
		$count = $this->specialitesTable->total();
		$user = $this->authentication->getUser();
		

		$title = 'Liste :: specialites';
		return ['template' => 'back/specialite.html.php',
				'title' => $title,
				'variables' => [
					'specialites' => $specialites,
					'count' => $count,
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