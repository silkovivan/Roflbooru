<?php

$dbhost 	= "localhost";
$dbuser 	= "root";
$dbpass 	= "";
$dbname 	= "rolf";

$dbcon = mysqli_connect($dbhost, $dbuser, $dbpass);
$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $dbuser, $dbpass);

$dbhost = "localhost";
$dbname = "rolf";
$username = "root";
$password = "";

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);

//получение всех статей
function get_post_all($id){
    global $db;
    $post = $db->query("SELECT * FROM roflbooru WHERE id = $id");
    return $post;
}

function post_random(){
    global $db;
    $post = $db->query("SELECT * FROM roflbooru ORDER BY rand() LIMIT 3");
    return $post;
}

function lable_random(){
    global $db;
    $post = $db->query("SELECT * FROM lable ORDER BY rand() LIMIT 1");
    return $post;
}

//получения статьи по по ее id

function get_post_by_id($id){
    global $db;
  $post = $db->query("SELECT * FROM roflbooru WHERE id = $id");
    foreach ($post as $posts){
        return $posts;
    }
}
?>