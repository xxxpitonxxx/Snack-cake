

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
      
      


  <div class="container">
  

<div class="map">	
	<div class="wrp">
		<div class="map-box">
			<h2>Наши контакты</h2>
			<p>г. Калуга, Ленина 7</p>
			<p><a href="tel:+7 (495) 123-45-67">+7 (4842) 91-91-91</a></p>
			<p><a href="mailto:info@site.com">snack-cake.@mail.ru</a></p>
		</div>
	</div>
	<div id="map"></div>
</div>
 
<script src="//api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU"></script>
<script>
ymaps.ready(init); 
function init(){
	var myMap = new ymaps.Map("map",{center: [54.531758, 36.276711],zoom: 13});
	
	// Элементы управления картой
	//myMap.controls.add("zoomControl").add("typeSelector").add("mapTools");
	
	ymaps.geocode("г. Москва, Тверская 7").then(function (res) {
		var coord = res.geoObjects.get(0).geometry.getCoordinates();
		var myPlacemark = new ymaps.Placemark(coord, {}, {
			iconImageHref: "/img/map.png",
			iconImageSize: [54, 74],
			iconImageOffset: [-27, -74]
		});
		myMap.geoObjects.add(myPlacemark);
		myMap.setCenter(coord);	
			
		// Сдвиг центра карты вправо
		var newcoord = myMap.getGlobalPixelCenter();
		newcoord[0] -= 150;
		myMap.setGlobalPixelCenter(newcoord);				
	});
}
</script>
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









