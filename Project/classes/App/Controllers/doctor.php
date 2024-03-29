<?php
namespace App\Controllers;

use \AIFrame\DatabaseTable;
use \AIFrame\Authentication;

class doctor{
	private $doctorsTable;
	private $specialitesTable;
	private $abonnementsTable;
	private $utilisateursTable;
	private $authentication;
	

//---------Constructeur---------------//
	public function __construct(
		     
							\AIFrame\DatabaseTable $doctorsTable,
							\AIFrame\DatabaseTable $specialitesTable,
							\AIFrame\DatabaseTable $abonnementsTable,
							\AIFrame\DatabaseTable $utilisateursTable,
							\AIFrame\Authentication $authentication
		){
		
		$this->doctorsTable = $doctorsTable;
		$this->specialitesTable = $specialitesTable;
		$this->abonnementsTable = $abonnementsTable;
		$this->utilisateursTable = $utilisateursTable;
		$this->authentication = $authentication;
	}

//----------Formulaire de Traitement-----------//

	public function edit(){
		
		if (isset($_GET['id'])){
			$doctor = $this->doctorsTable->findById($_GET['id']);
		}
		
		$user = $this->authentication->getUser();
		$title = 'Traitement :: doctor';
		return ['template' => 'back/editdoctor.html.php',
				'title' => $title,
				'variables' => [
					'doctor' => $doctor ?? null,
					'user' => $user
					]
				];
	}

//--------Enregistrement de données---------//

	public function saveEdit(){
		
		$doctor = $_POST['doctor'];
		$this->doctorsTable->save($doctor);
		header('location: /doctor/list?idspc='.$_GET['idspc']);
	}



		public function publier(){
		
		$doctor['id'] = $_GET['id'];
		$doctor['etat'] = $_GET['etat'];
		
		$this->doctorsTable->save($doctor);
		header('location: /doctor/list');
	}

//--------Affichage de données---------//

	public function list(){
		
		$doctors = $this->doctorsTable->findAll();
		$count = $this->doctorsTable->total();
		$specialite = $this->specialitesTable->findById($_GET['idspc']);
		$abonnement = $this->abonnementsTable->findById($_GET['idabn_idx']);
		$utilisateurs = $this->utilisateursTable->findAll();

		$user = $this->authentication->getUser();


		$title = 'Liste :: doctors';
		return ['template' => 'back/doctor.html.php',
				'title' => $title,
				'variables' => [
					'doctors' => $doctors,
					'specialite' => $specialite,
					'abonnement' => $abonnement,
     'utilisateurs' => $utilisateurs,
     'count' => $count,
     'user' => $user
					
					]
				];
	}


		public function listAbn(){
		
		$doctors = $this->doctorsTable->findAll();
		$count = $this->doctorsTable->total();
		//$specialite = $this->specialitesTable->findById($_GET['idspc']);
		$abonnement = $this->abonnementsTable->findById($_GET['idabn_idx']);
		$utilisateurs = $this->utilisateursTable->findAll();

		$user = $this->authentication->getUser();


		$title = 'Liste :: doctors';
		return ['template' => 'back/doctorAbn.html.php',
				'title' => $title,
				'variables' => [
					'doctors' => $doctors,
					//'specialite' => $specialite,
					'abonnement' => $abonnement,
     'utilisateurs' => $utilisateurs,
     'count' => $count,
     'user' => $user
					
					]
				];
	}











	public function listAll(){
		
		$doctors = $this->doctorsTable->findAll();
		$count = $this->doctorsTable->total();
	//	$specialite = $this->specialitesTable->findById($_GET['idspc']);
		$utilisateurs = $this->utilisateursTable->findAll();
  $specialite = $this->specialitesTable->findAll();
		$user = $this->authentication->getUser();


		$title = 'Liste Docteurs';
		return ['template' => 'back/doctorAll.html.php',
				'title' => $title,
				'variables' => [
					'doctors' => $doctors,
					'specialites' => $specialite,
     'utilisateurs' => $utilisateurs,
     'count' => $count,
     'user' => $user
					
					]
				];
	}

//--------Suppression de données---------//

	public function delete(){
		
		$this->doctorsTable->delete($_GET['id']);
		header('location: /doctor/listall');
	//	header('location: /doctor/list?idspc='.$_GET['idspc']);
	}

}