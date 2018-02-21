<?php
require "helper.php";
session_start();
if (isset($_POST["add"])){
$db = database();
$id = $_POST["id"];
$password = $_POST["password"];
$query = $db->prepare("SELECT * FROM users WHERE username = :user");
$query->execute(array("user"=>$id));
$all = $query->fetch();
if (!$all){
$result = $db->prepare("INSERT INTO users (username, password) VALUES (:id, :pass)");
$result->execute(array("id" => $id, "pass" => $password));
}
}
$dologin = $db->lastInsertId();
$_SESSION["id"] = $dologin;
$_SESSION["users"] = $id;
header("location:index.php");
