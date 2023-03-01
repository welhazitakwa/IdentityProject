<?php
if ($loggedIn):
	if($user->profil==1):
		//Administration
		include 'administration/index.php';
	else:
		//BackOffice
		include 'back/index.php';
	endif;

else: 
	
	if($_SERVER['REQUEST_URI']=='/register'): 
		//Inscription
		include 'register.php';
	elseif($_SERVER['REQUEST_URI']=='/login'): 
		//Login
		include 'login.php';
	else: 
		// Frontend
		include 'login.php' ;
		//include 'front/index.php';
	endif;
endif;
	
	
?>
