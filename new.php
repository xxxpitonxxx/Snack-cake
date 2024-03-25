<?
session_start();
include 'dbconnect.php';
$category = $_GET['category'];

//echo $category;
//if(!empty($_SESSION['login']))
//{
//
//}

if ($_POST['add']) {

  $productname = $_POST['productname'];
  $cost = $_POST['cost'];
  $ves = $_POST['ves'];
  $article = $_POST['article'];
  $sostav = $_POST['sostav'];
  $description = $_POST['description'];
  $category = $_POST['category'];
  //var_dump($_POST);

  if (!empty($productname) and !empty($cost) and !empty($ves) and !empty($article) and !empty($sostav) and !empty($description)) {

    $db = dbconn();


    $uploaddir = 'files/';
    $uploadfile = $uploaddir . basename($_FILES['photo']['name']);
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
      //  echo 'ok';
    } else {
      echo 'ne ok';
    }
  }

  $query = $db->query("INSERT INTO `$category`(`Название`, `Цена`, `Вес`, `photo`, `Артикул`, `Состав`, `Описание`) 
                                       VALUES ('$productname','$cost','$ves','$uploadfile','$article','$sostav','$description')");

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

  <? include "header.php" ?>




  <div class="back">

    <h1 class="textNew">Добавить товар</h1>
    <br>





    <div class="but">
      <div class="container">

        <form method="post" enctype="multipart/form-data">

          <select class="form-select form-select-lg mb-3" name="category">
            <option value="Cheese-cake">Чиз-кейк</option>
            <option value="Croissant">Круасан</option>
            <option value="Cake">Пирожные</option>
            <option value="Donut">Пончики</option>
            <option value="Ice-cream">Мороженое</option>
            <option value="Novinki">Новинки</option>
            <option value="Pie">Пироги</option>
            <option value="Plate">Ассорти</option>
            <option value="Tort">Торты</option>
            <option value="Snack-cake">Популярные</option>
          </select>
          
          <input class="reginput1" type="text" name="productname" placeholder="Введите название" required>

          <input class="reginput1" type="text" name="cost" placeholder="Введите цену" required>
          <input class="reginput1" type="text" name="ves" placeholder="Введите вес" required>
          
          <div class="input-group mb-3 comment-third">
            <input type="file" class="form-control" name="photo" id="inputGroupFile02" value="Выбери фото" required>
          </div>
          
          <input class="reginput1" type="text" name="article" placeholder="Введите артикул" required>
          <textarea class="reginput1" name="sostav" placeholder="Введите состав" cols="40" rows="8"
            required></textarea>
          <textarea class="reginput1" name="description" placeholder="Введите описание" cols="40" rows="8"
            required></textarea>

          <div class="comment mt-3">
            <input type="submit" class="btn btn-danger" value="Добавить" name="add">
          </div>
          <br>
          <br>
        </form>

      </div>
    </div>
  </div>




  <?include "footer.php"?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>