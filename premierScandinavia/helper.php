<?php
function database (){
	$mysql = new PDO ("mysql:host=127.0.0.1;dbname=notAmazon","root","root");
	return $mysql;
}