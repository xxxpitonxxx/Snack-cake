<?session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/all.css">
</head>


<body class="back">
<?
session_start();
?>
<?include "header.php"?>





<?php


include 'dbconnect.php';
// Проверка формы на пустоту
if(!empty($_POST['message'])) {
    // Подключение к базе данных
    $db = dbconn();
    // Подготовка данных
    $name = $db->real_escape_string($_SESSION['login']);
    $email = $db->real_escape_string($_SESSION['email']);
    $message = $db->real_escape_string($_POST['message']);
    // Запрос к базе данных
    $sql = "INSERT INTO `reviews`(`name`, `email`, `message`) VALUES ('$name', '$email', '$message')";
    // Выполнение запроса
    if($db->query($sql)) {
       // echo "Ваш отзыв отправлен!";
    } else {
        //echo "Ошибка: " . $sql . "<br>" . $db->error;
    }
    // Закрытие подключения
    $db->close();
}
?>



<?php
// Подключение к базе данных
$db = dbconn();
// Запрос к базе данных
$sql = "SELECT * FROM reviews ORDER BY date DESC";
// Выполнение запроса
$result = $db->query($sql);
if($result->num_rows > 0) {
    // Вывод данных построчно
    while($row = $result->fetch_assoc()) {
        echo '<p><strong>' . $row['name'] . '</strong> ' . $row['date'] . '<br>' . $row['message'] . '</p>';
    }
} else {
    //echo "Отзывов пока нет.";
}
// Закрытие подключения
$db->close();
?>





    <h2 class="mar">Ваши отзывы</h2>

    <div class="comment">

    <div class="conteiner">


    <form class="" method="post">
    
        <textarea class="t2 t4" name="message" placeholder="Оставьте отзыв о нашем интернет магазине" required></textarea><br>
        <input class="authinput btn btn-dark t2" type="submit" value="Отправить">
    </form>

    </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>








