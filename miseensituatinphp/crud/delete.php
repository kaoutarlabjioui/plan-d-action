<?php 
include './../connection/connection.php';

function Delete($id){
$sql='delete from users where id='.$id;
mysqli_query($connection,$sql);


}



?>