<?php
namespace App\Controllers;

use \AIFrame\DatabaseTable;
use \AIFrame\Authentication;

class appointment{
	private $appointmentsTable;
	private $doctorsTable;
 private $patientsTable;
	private $utilisateursTable;
	private $authentication;
	

//---------Constructeur---------------//
	public function __construct(
		     
							\AIFrame\DatabaseTable $appointmentsTable,
							\AIFrame\DatabaseTable $doctorsTable,
       \AIFrame\DatabaseTable $patientsTable,
							\AIFrame\DatabaseTable $utilisateursTable,
							\AIFrame\Authentication $authentication
		){
		
		$this->appointmentsTable = $appointmentsTable;
		$this->doctorsTable = $doctorsTable;
  $this->patientsTable = $patientsTable;
		$this->utilisateursTable = $utilisateursTable;
		$this->authentication = $authentication;
	}

//----------Formulaire de Traitement-----------//

	public function edit(){
		
		if (isset($_GET['id'])){
			$appointment = $this->appointmentsTable->findById($_GET['id']);
		}
		
		$user = $this->authentication->getUser();
		$title = 'Traitement :: appointment';
		return ['template' => 'back/editappointment.html.php',
				'title' => $title,
				'variables' => [
					'appointment' => $appointment ?? null,
					'user' => $user
					]
				];
	}

//--------Enregistrement de données---------//

	public function saveEdit(){
		
		$appointment = $_POST['appointment'];
		$this->appointmentsTable->save($appointment);
		header('location: /appointment/list?idspc='.$_GET['idspc']);
	}



		public function publier(){
		
		$appointment['id'] = $_GET['id'];
		$appointment['etat'] = $_GET['etat'];
		
		$this->appointmentsTable->save($appointment);
		header('location: /appointment/list');
	}

//--------Affichage de données---------//

	public function list(){
		
		$appointments = $this->appointmentsTable->findAll();
		$count = $this->appointmentsTable->total();
		$doctors = $this->doctorsTable->findAll();
		$utilisateurs = $this->utilisateursTable->findAll();

		$user = $this->authentication->getUser();


		$title = 'Liste :: appointments';
		return ['template' => 'back/appointment.html.php',
				'title' => $title,
				'variables' => [
					'appointments' => $appointments,
					'doctors' => $doctors,
     'utilisateurs' => $utilisateurs,
     'count' => $count,
     'user' => $user
					]
				];
	}
	

//--------Suppression de données---------//

	public function delete(){
		
		$this->appointmentsTable->delete($_GET['id']);
		header('location: /appointment/list?idspc='.$_GET['idspc']);
	}

}