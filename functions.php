<?php

require 'config.php';

$dbh = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8', DB_USER, DB_PASS);

function get_tasks() {
	global $dbh;
	$tasks = $dbh->query('SELECT task FROM tasks');
	if ($tasks->rowCount()){
		return $tasks->fetchAll(PDO::FETCH_COLUMN);
	} else {
		return false;
	}
}



?>
