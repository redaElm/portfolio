<?php 
include 'fonction_email.php';
include 'index.php';
extract($_GET);//$action & $table &$id
extract($_POST);


switch ($action) {
	case 'add':
		 ajouter("contact",$_POST);	 
		break;
	default:	
		break;
}

 ?>