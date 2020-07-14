<?php

$name = $_POST['name'];
$wish = $_POST['wish'];
$relation = $_POST['relation'];

$con = mysqli_connect('127.0.0.1','root','','wishes','3308');

$query = " insert into birthdaywish (name, wish,relation) values ('$name', '$wish', '$relation') ";
mysqli_query($con, $query);
?>