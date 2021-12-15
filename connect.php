<?php

$con=new mysqli('localhost','root','',
'animal');

if(!$con){
    die(mysqli_error($con));
}


?>