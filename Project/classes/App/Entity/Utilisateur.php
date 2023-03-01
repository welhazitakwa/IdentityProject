<?php
namespace App\Entity;

class Utilisateur {


	const EDIT_USER_ACCESS = 1;
	const ADD_CATEGORY = 2;
	const EDIT_CATEGORY = 4;
	const DELETE_CATEGORY = 8;
	const ADD_PRODUCT = 16;
	const EDIT_PRODUCT = 32;
	const DELETE_PRODUCT = 64;
	

	

	public $id;
	public $name;
	public $prenom;
	public $email;
	public $password;
	public $pin;
	public $rue;
	public $ville;
	public $codepostal;
	
	//private $groupesTable;

	public function __construct() {
	
	}
	public function hasPermission($permission) {
		return $this->permissions & $permission;  
	}
	
	
	
	
	
}