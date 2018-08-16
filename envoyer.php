<?php

$user = 'root';
$password = 'root';
$db = 'site_chap';
$host = 'localhost';
$port = 3306;

//$mysqli = new mysqli($host, $user, $password, $db);
$mysqli = mysqli_connect($host, $user, $password, $db);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get values from the form
$titre=$_POST['titre'];
$type1=$_POST['type1'];
$type2=$_POST['type2'];
$date_app=$_POST['date_app'];

//On insère les informations du formulaire dans la table
$sql="INSERT INTO chants (titre, type1, type2, dateApp) values ('$titre', '$type1', '$type2', '$date_app')" ;

if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

mysqli_close($mysqli);

?>