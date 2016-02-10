<?php

$user = json_decode(file_get_contents("php://input"));

//Post values
$username = $user->name;
$password = $user->pass;

//Dummy account
$DummyUsername = "ron";
$DummyPassword = "12345";

//Proccess
if($username == $DummyUsername && $password == $DummyPassword){
	echo json_encode(array("msg"=>"success"));
}else{
	echo json_encode(array("msg"=>"failed"));
}


?>