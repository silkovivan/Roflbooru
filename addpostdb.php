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
    $stmt = $conn->prepare("INSERT INTO roflbooru (id, title, star, date, thumbnail, content) VALUES (NULL, '$title', '$star', '$date', '$thumbnail', '$content')");
        $stmt->execute();
        echo "Данные изменены";
        $stmt->close();
    $conn->close();
    }

?>