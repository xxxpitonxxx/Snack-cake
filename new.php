<?
session_start();
include 'dbconnect.php';

//if(!empty($_SESSION['login']))
//{
//
//}

if ($_POST['add']) {

  $article = $_POST['article'];
  $productname = $_POST['productname'];
  $brand = $_POST['brand'];
  $cost = $_POST['cost'];
  $description = $_POST['description'];


  if (!empty($article) and !empty($productname) and !empty($brand) and !empty($cost) and !empty($description)) {

    $db = dbconn();


    $uploaddir = 'files/';
    $uploadfile = $uploaddir . basename($_FILES['photo']['name']);
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
      echo 'ok';
    } else {
      echo 'ne ok';
    }
  }

  $query = $db->query("INSERT INTO `Snack-cake`(`Название`, `Цена`, `Вес`, `photo`, `Артикул`, `Состав`, `Описание`) 
            VALUES ('$article','$productname','$brand','$cost','$description','$uploadfile')");

}


?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/all.css">
  <title>Добавление товара</title>

</head>

<body>

<?include "header.php"?>




  <div class="back">

    <h1 class="textNew">Добавить товар</h1>
    <br>


    

      <div class="but">

        <form method="post" enctype="multipart/form-data">

          <input  type="text" name="article" placeholder="Введите название" required><br>
          <input  type="text" name="productname" placeholder="Введите цену" required><br>
          <input type="text" name="brand" placeholder="Введите вес" required><br>
          <br>
          <input type="file" name="photo" placeholder="Выбери фото" required><br>
          <br>
          <input type="text" name="cost" placeholder="Введите артикул" required><br>
          <br>
          <textarea name="description" placeholder="Введите состав" cols="60" rows="5" required></textarea><br>
          <br>
          <textarea name="description" placeholder="Введите описание" cols="60" rows="5" required></textarea><br>
          <br>

          <input type="submit" class="btn btn-outline-secondary" value="Добавить" name="add"><i
            class="fa-thin fa-plus fa-2xl"></i>
        </form>
      </div>
      <br>
      <br>


    </div>
  




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>