<?php

    $id = $_POST['id'];
    $title = $_POST['title'];
    $star = $_POST['star'];
    $date = $_POST['date'];
    $thumbnail = $_POST['thumbnail'];
    $content = $_POST['content'];

    $conn = new mysqli('localhost', 'root', '','rolf');
    if($conn->connect_error){
    echo "$conn->connect_error";
    die("Соединение не удалось: ". $conn->connect_error);
  } else {
    $stmt = $conn->prepare("UPDATE roflbooru SET title='$title', star='$star', thumbnail='$thumbnail', date='$date', content='$content' WHERE id='$id'");
        $stmt->execute();
        echo "Данные изменены";
        $stmt->close();
    $conn->close();
    }

?>