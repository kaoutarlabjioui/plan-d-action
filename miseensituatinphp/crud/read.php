<?php
include './../connection/connection.php';



function Readone($id){

$sql='select * from users where id ='.$id;

    return mysqli_query($connection,$sql);


}


function Readall($table){

$sql='select * from '.$table;

$result=mysqli_query($connection,$sql);
 $row= [];
while(fetch_assoc($result)){

    echo $row['id'];
    echo $row['firstname'];
    echo $row ['email'];
    echo $row ['password'];
}
}





?>