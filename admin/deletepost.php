<?php

$id = $_GET['id'];

$conn = new mysqli('localhost', 'root', '','rolf');
if($conn->connect_error){
echo "$conn->connect_error";
die("Соединение не удалось: ". $conn->connect_error);
} else {
$stmt = $conn->prepare("DELETE FROM roflbooru WHERE id = '$id'");
    $stmt->execute();
    echo "Пост удален";
    $stmt->close();
$conn->close();
}

?>