<?php

//Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/Database.php';
include_once '../../models/Post.php';

//Instantiate DB and connect
$database = new Database();
$db = $database->connect();

//Instantiate blog post object
$post = new Post($db);

//Blog post query
$result = $post->read();

//Get Row count
$num = $result->rowCount();
