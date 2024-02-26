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

  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container card1">
      <a class="navbar-brand" href="index.php">Snack<i class="fa-regular fa-handshake"></i>cake</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Наша продукция
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="Icecream.php">Мороженое</a></li>
              <li><a class="dropdown-item" href="Cake.php">Пирожные</a></li>
              <li><a class="dropdown-item" href="Tort.php">Торты</a></li>
              <li><a class="dropdown-item" href="Donut.php">Пончики</a></li>
              <li><a class="dropdown-item" href="Pie.php">Пироги</a></li>
              <li><a class="dropdown-item" href="Cheesecake.php">Чизкейки</a></li>
              <li><a class="dropdown-item" href="Croissant.php">Круассаны</a></li>
              <li><a class="dropdown-item" href="Plate.php">Ассорти</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="Novinki.php">Новинки</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Акции <i class="fas fa-gift"></i></a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Howbuy.php">Как купить</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="aboutUs.php">О компании</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Contact.php">Контакты</a>
          </li>


        </ul>

        <div class="but1">
          <button class="btn btn-outline-danger" type="submit">Корзина <i class="fas fa-cart-shopping"></i></button>

          <button onclick="window.location.href = 'auth.php';" class="btn btn-outline-danger" type="submit">Войти <i
              class="fas fa-arrow-right-to-bracket"></i></button>
        </div>

      </div>
    </div>
  </nav>


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