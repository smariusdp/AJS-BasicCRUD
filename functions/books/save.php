<?php
require_once('../connect.php');
require_once('../../Classes/Books.php');

$class = new Books(
						NULL, 
						$_POST['callNo'], 
						$_POST['title'],
						$_POST['author'],
						$_POST['subject'], 
						$_POST['cover']
					);

$data = $class->save();

header("HTTP/1.0 404 Error saving contact");
if($data['status']){
	header("HTTP/1.0 200 OK");
}

header('Content-Type: application/json');
print(json_encode($data));
?>