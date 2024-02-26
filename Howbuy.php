

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/all.css">

    
</head>


<body>
<?
session_start();
?>
<nav class="navbar navbar-expand-lg bg-light">
        <div class="container card1">
          <a class="navbar-brand" href="index.php">Snack<i class="fa-regular fa-handshake"></i>cake</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                      <li><hr class="dropdown-divider"></li>
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
            
            <button onclick="window.location.href = 'auth.php';" class="btn btn-outline-danger"  type="submit">Войти <i class="fas fa-arrow-right-to-bracket"></i></button>
            </div>
            
          </div>
        </div>
      </nav>
      
      

<div class="back">
<div class="responsive-container-block big-container">
  <div class="responsive-container-block container">
    <div class="responsive-container-block">
      <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-6 wk-ipadp-12 img-one">
        <img alt="golden-lines.png" class="image-block bg-image" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/golden%20lines.png">
      </div>
      <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-6 wk-ipadp-12 content-one">
      <p class="text-blk section-text ">
      Сделать заказ в нашем магазине очень просто, даже если вы раньше ничего не покупали в интернет-магазинах.
        </p>
        <p class="text-blk section-head">
          Выбираем вкусняшки
        </p>
        <div class="">
        <p class="text-blk section-text ">
        В нашем магазине тортов много вкусных товаров. Это торты, чизкейки, брауни, мороженое и много другое. 
        Сверху на странице есть меню Каталог продукции, в котором все товары разделены на категории. Выбирайте, 
        например, торты и увидите ассортимент тортов, который мы предлагаем. У каждого торта есть своя страничка,
         на которой фотографии и описание торта, в т.ч. состав. Понравился — добавляйте в корзину.
        </p>
        </div>


        <p class="text-blk section-head">
        Корзина 
        </p>
        <div class="">
        <p class="text-blk section-text ">
        Добавляйте в корзину те товары, которые хотите купить. В корзину можно положить несколько товаров, а потом 
        перед заказом отредактировать. Для перехода в корзину нажмите ссылку «Моя корзина», расположенную справа 
        вверху, правее и выше поиска. На странице корзины будет список товаров, которые вы выбрали, их стоимость 
        и общая сумма заказа. Если вы передумали заказывать какой-либо товар, то его можно удалить из корзины, 
        нажав на ссылку «удалить».
        </p>
        </div>

        <p class="text-blk section-head">
        Оформление заказа
        </p>
        <div class="">
        <p class="text-blk section-text ">
        Для оформления заказа перейдите в корзину, проверьте правильно ли все указано — что, в каком количестве, 
        сумма заказа и если все ок — нажимайте кнопку «Оформить» для перехода к оформлению заказа.
        Для оформления заказа нужно заполнить форму, в которой указывается кому и куда будет доставлен заказ. 
        Если вы уже заказывали в нашем магазине, то достаточно ввести ваш номер телефона и магазин сам заполнит 
        форму по данным вашего последнего заказа.
        При заполнении формы заказа, пожалуйста, обратите внимание, что поля отмеченные красной звездочкой 
        обязательны к заполнению, например, «Адрес доставки».
        Если по каким-либо причинам у вас не получается заполнить форму заказа, сайт выдает какую-то ошибку 
        или возник какой-либо вопрос, позвоните нам по телефону 8 (4842) 91-91-91
        </p>
        </div>


        
      </div>
    </div>
  </div>
</div>
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
              <i class="fas fa-gem me-3" href="index.php"></i>Snack<i class="fa-regular fa-handshake"></i>cake</a>
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
              Продукция
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
              <a href="Donut.php" class="text-reset">Пончики</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Покупателям
            </h6>
            <p>
              <a href="#!" class="text-reset"></a>
            </p>
            <p>
              <a href="Howbuy.php" class="text-reset">Как сделать заказ</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Способ оплаты</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Доставка</a>
              <p>
              <a href="#!" class="text-reset">Возврат денежных средств</a>
            </p>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Контакты</h6>
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










