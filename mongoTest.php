<?php
define("SITE_ROOT", __DIR__);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 

// É preciso carregar o autoload feito pelo composer
require './vendor/autoload.php';  
	echo "mongoTest 1<br>";
	
	$connection = new MongoDB\Client('mongodb://127.0.0.1:27017');
	echo $connection . "<br>";
	$db = $connection->local;
	echo $db->getDatabaseName() . "<br>";
	$collection = $db->Produtos;
	$cursor = $collection->find(['cod' => '201']);
	echo "----<br>";
	print_r($cursor);
	/*
	$arr = $cursor->toArray();
	var_dump($arr[0]->cod);
	echo "<br>";
	var_dump($arr[0]->descri);
	echo "<br>";
	*/
?>