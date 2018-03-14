<?php
session_start();
require "helper.php";
if (isset($_POST["add"])){
$db = database();
$id = $_POST["id"];
$password = $_POST["password"];
$email = $_POST["email"];
$query = $db->prepare("SELECT * FROM users WHERE username = :user");
$query->execute(array("user"=>$id));
$query = $db->prepare("SELECT * FROM users WHERE email = :email");
$query->execute(array("email"=>$email));
$all = $query->fetch();
if (!$all){
$result = $db->prepare("INSERT INTO users (username, password, email) VALUES (:id, :pass, :email)");
$result->execute(array("id" => $id, "pass" => $password, "email" => $email));
}
}
$dologin = $db->lastInsertId();
$_SESSION["id"] = $dologin;
$_SESSION["users"] = $id;
header("location:index.php");
