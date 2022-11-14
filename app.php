<?php

$database = array(
    "user" => array( 
        "user1" => array(
            "id" => 1,
            "name" => "Faisal",
            "email" => "faisal04@gmail.com",
        ),
        "user2"  => array(
            "id" => 2,
            "name" => "John",
            "email" => "john12@gmail.com",
        ),
    ),
);

$header = "Welcome to my Website!";
$par = "this is my content!";

$user1_name = $database["user"]["user1"]["name"];
$user2_name = $database["user"]["user2"]["name"];

$user1_email = $database["user"]["user1"]["email"];
$user2_email = $database["user"]["user2"]["email"];

$user1_id = $database["user"]["user1"]["id"];
$user2_id = $database["user"]["user2"]["id"];


?>