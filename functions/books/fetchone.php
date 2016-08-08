<?php
require_once('../connect.php');
require_once('../../Classes/Books.php');

$class = new Books(
						$_POST['pk'],
						NULL,
						NULL,
						NULL,
						NULL,
						NULL
					);

$data = $class->fetchone();

header("HTTP/1.0 404 Error saving contact");
if($data['status']){
	header("HTTP/1.0 200 OK");
}

header('Content-Type: application/json');
print(json_encode($data));
?>