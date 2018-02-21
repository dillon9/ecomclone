<?php
require "helper.php";
session_start();
$error = "";
$db = database();
if (isset($_POST["login"])){
$username = $_POST["id"];
$password = $_POST["password"];
$query=$db->prepare("SELECT * FROM users WHERE username = :id && password = :pass");
$query->execute(array("id"=>$username, "pass"=>$password));
$checker = $query->fetch();
}
if ($checker){
	$_SESSION["id"] = $checker["id"];
	$_SESSION["users"] = $checker["userId"];
	header("location:index.php");
	}
else{
	$error = "Invalid Credentials";
	header("location:index.php");
	}