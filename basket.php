<?
include 'dbconnect.php';
session_start();
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


<body>
<?
session_start();
?>
<?include "header.php"?>

         
      
<div class="back">
<br>
<h1 class="">Корзина покупок.</h1>



<div class="container">
<?php


if($_SESSION['basket'] != null) {
  foreach ($_SESSION['basket'] as $stuff) {
   
    ?>
    <div class="d-flex justify-content-between mt-4 border border-white form-control border-success">
      
    <img class="foto1" src ="<?=$stuff['photo']?>">
    <h4><?=$stuff['name']?></h4>
    
    <h3><?=$stuff['ves']?></h3>
    <h3><?=$stuff['price']?></h3>
    
  </div>
    <?
  }
}
?>
</div>


    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5 card1">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
            <a href="index.php"><i class="fas fa-gem me-3 textBasket" ></i><i class="textBasket">Snack</i><i class="fa-regular fa-handshake textBasket"></i><i class="textBasket">cake</i></a>
            </h6>
            <p>
                По интересующим вопросам обращайтесь по телефону: +7(4842) 91-91-91 или напишите нам на почту snack-cake.@mail.ru 
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
            <a class="textBasket" href="index.php">Продукция</a>
            </h6>
            <p>
              <a href="Icecream.php" class="text-reset">Мороженое</a>
            </p>
            <p>
              <a href="Cake.php" class="text-reset">Пирожные</a>
            </p>
            <p>
              <a href="Tort.php" class="text-reset">Торты</a>
            </p>
            <p>
              <a href="Novinki.php" class="text-reset">Новинки</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
            <a class="textBasket" href="Howbuy.php">Покупателям</a>
            </h6>
            <p>
              <a href="#!" class="text-reset"></a>
            </p>
            <p>
              <a href="Howbuy.php" class="text-reset">Как сделать заказ</a>
            </p>
            <p>
              <a href="cash.php" class="text-reset">Способ оплаты</a>
            </p>
            <p>
              <a href="delivery.php" class="text-reset">Доставка</a>
              <p>
              <a href="priz.php" class="text-reset">Акции</a>
            </p>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4"><a class="textBasket" href="Contact.php">Контакты</a></h6>
            <p><i class=""></i><i class="fa fa-home" aria-hidden="true"></i>     Калуга, Россия</p>
            <p>
              <i class=""></i>
              <i class="" aria-hidden="true"></i><i class="fa fa-envelope" aria-hidden="true"></i>     snack-cake.@mail.ru
            </p>
            <p><i class=""></i><i class="fa fa-envelope" aria-hidden="true"></i>     +7(4842) 91-91-91</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>










