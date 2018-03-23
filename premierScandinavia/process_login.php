<?php
session_start();
require "helper.php";
$error = "";
$db = database();
if (isset($_POST["login"])){
$username = $_POST["id"];
$password = $_POST["password"];
$password = crypt($password, "a tiny bit of yolo");
$query=$db->prepare("SELECT * FROM users WHERE username = :id && password = :pass");
$query->execute(array("id"=>$username, "pass"=>$password));
$checker = $query->fetch();
}
if ($checker){
	$_SESSION["id"] = $checker["id"];
	$_SESSION["users"] = $checker["username"];
	header("location:index.php");
	}
else{
	$error = "Invalid Credentials";
	header("location:index.php");
	}