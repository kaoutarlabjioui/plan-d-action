<?php 
include './../connection/connection.php';


function Create($prenom,$nom,$email,$password){

$sql="insert into users (firstname,lastname,email,password) values ('$prenom','$nom','$email','$password')";

 mysqli_query($connection,$sql);

}




?>