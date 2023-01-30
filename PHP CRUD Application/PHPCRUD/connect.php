<?php

$connect = new mysqli('localhost', 'root', 'root', 'crud_php');

if($connect){
    echo "Connection established!";
}else{
    die(mysqli_error($connect));
}

?>