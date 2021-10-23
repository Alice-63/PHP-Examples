<?php




if($_GET){

$name=$_GET["name"];
$lastname=$_GET["lastname"];
$web=$_GET["web"];
$email=$_GET["email"];
$phone=$_GET["phone"];
$facebook=$_GET["facebook"];
$twitter=$_GET["twitter"];
$birthday=$_GET["birthday"];
$note=$_GET["note"];
$adress=$_GET["adress"];


try{
$db=new PDO("mysql:host=localhosst;dbname=notbook;charset=utf8","root","");}
catch(PDOException $e){
    echo $e->getMessage();
};


}








?>