<?php

$servername="localhost:3306";
$dBUsername="root";
$dBPassword="";
$dBName="prisondb";

$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

//if the connection doesnt work:

if(!$conn){
    die("Connection failed:".mysqli_connect_error());
    //closes the connection and prints the error
}

