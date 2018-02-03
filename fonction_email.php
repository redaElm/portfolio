<?php 
	
	/*public function connecter()
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "mysitdb";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection echoue: " . $conn->connect_error);
		} 

		
	}
	public function ajouter_message()
	{
		connecter();
		$sql = "INSERT INTO message (nom,telephone,email,messag)
		VALUES ('@nom','@telephone','@email','@messag')";

		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
}*/


function ajouter($table,$data=array()){
	$names=array();
	$values=array();
	$trous=array();
	foreach ($data as $key => $value) {
		$names[]=$key;
		$values[]="'".e($value)."'";

	}
	$valsdb=implode(',', $values);
	$namesdb=implode(',', $names);
	$cnx=connecter_db();
	$sql=sprintf("insert into $table ($namesdb) values($valsdb)");
	mysqli_query($cnx,$sql) or die("erreur d'ajout  de $table ".mysqli_error($cnx));
	
}


function connecter_db()
{
	$adresse=mysqli_connect('localhost', 'root', '', 'db') or die("erreur de connexion à la bd") ;
return $adresse;
}




 ?>
























