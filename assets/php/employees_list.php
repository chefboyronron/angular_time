<?php

$employees = array();
$emp_one = array("name"=>"Ron Seminiano", "title"=>"PHP Developer", "company"=>"Circus Int. Philippines", "username"=>"ron");
array_push($employees, $emp_one);
$emp_two = array("name"=>"Kyle Fineza", "title"=>"Cute baby", "company"=>"HTA", "username"=>"kyle");
array_push($employees, $emp_two);
$emp_three = array("name"=>"Aaron Aguas", "title"=>"Cute boy", "company"=>"Eloisa", "username"=>"kyle");
array_push($employees, $emp_three);
echo json_encode($employees);



?>