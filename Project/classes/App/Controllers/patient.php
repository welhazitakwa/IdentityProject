<?php
namespace App\Controllers;

use \AIFrame\DatabaseTable;
use \AIFrame\Authentication;

class patient{
	private $patientsTable;
	//private $specialitesTable;
	private $utilisateursTable;
	private $authentication;
	

//---------Constructeur---------------//
	public function __construct(
		     
							\AIFrame\DatabaseTable $patientsTable,
							//\AIFrame\DatabaseTable $specialitesTable,
							\AIFrame\DatabaseTable $utilisateursTable,
							\AIFrame\Authentication $authentication
		){
		
		$this->patientsTable = $patientsTable;
		//$this->specialitesTable = $specialitesTable;
		$this->utilisateursTable = $utilisateursTable;
		$this->authentication = $authentication;
	}

//----------Formulaire de Traitement-----------//

	public function edit(){
		
		if (isset($_GET['id'])){
			$patient = $this->patientsTable->findById($_GET['id']);
		}
		
		$user = $this->authentication->getUser();
		$title = 'Traitement :: patient';
		return ['template' => 'back/editpatient.html.php',
				'title' => $title,
				'variables' => [
					'patient' => $patient ?? null,
					'user' => $user
					]
				];
	}

//--------Enregistrement de données---------//

	public function saveEdit(){
		
		$patient = $_POST['patient'];
		$this->patientsTable->save($patient);
		header('location: /patient/list?idspc='.$_GET['idspc']);
	}



		public function publier(){
		
		$patient['id'] = $_GET['id'];
		$patient['etat'] = $_GET['etat'];
		
		$this->patientsTable->save($patient);
		header('location: /patient/list');
	}

//--------Affichage de données---------//

	public function list(){
		
		$patients = $this->patientsTable->findAll();
		$count = $this->patientsTable->total();
		//$specialite = $this->specialitesTable->findById($_GET['idspc']);
		$utilisateurs = $this->utilisateursTable->findAll();

		$user = $this->authentication->getUser();


		$title = 'Liste :: patients';
		return ['template' => 'back/patient.html.php',
				'title' => $title,
				'variables' => [
					'patients' => $patients,
					//'specialite' => $specialite,
     'utilisateurs' => $utilisateurs,
     'count' => $count,
     'user' => $user
					
					]
				];
	}

//--------Suppression de données---------//

	public function delete(){
		
		$this->patientsTable->delete($_GET['id']);
		header('location: /patient/list?idspc='.$_GET['idspc']);
	}

}