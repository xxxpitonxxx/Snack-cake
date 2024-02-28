

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

<?include "header.php"?>

      
      

      
      
<div class="back">

<h1>Добро пожаловать в магазин Snack-cake!</h1>

<br>
<h2>У нас очень вкусно!</h2>


<div id="carouselExampleDark" class="carousel carousel-dark slide carus">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
    <img src="files\красивая подача.jpg" class="d-block w-100 carus" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2>Вкуснейшие пирожные</h5>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
    <img src="files\кондитерские изделия.jpg" class="d-block w-100 carus" alt="...">
      
      <div class="carousel-caption d-none d-md-block">
        <h2>Только натуральные свежие продукты</h5>
      </div>
    </div>
    <div class="carousel-item">
      
      <img src="files\мини пирожные.jpg" class="d-block w-100 carus" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2>Профессиональная подача десертов</h5>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Назад</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Вперёд</span>
  </button>
</div>


<br>
<h2>Популярные товары</h2>

    
<div class="shop">

<?
session_start();
include 'dbconnect.php';

if($_SESSION['role'] == 'admin'){?>
 <!--  <div>
        You Admin!  
    </div>-->
    <?}else{

       // echo 'hello user';
        
    }
    


           

            //заменяем на функцию ооп
            $db = dbconn();

            $query = $db->query("SELECT * FROM `Snack-cake`");

            while($row = $query->fetch_assoc()) {
             
            ?>
            
            
            <div class="tovar">
           
            <img class="foto" src="<?=$row['photo']?>" alt="">
            <br>
              <div class="name">
            <?=$row['Название']?>
            <br>
            <?=$row['Цена']?>
            <br> 
            <?=$row['Вес']?>
            <br>
              </div>

            <div class="podr btn btn-outline-info">
            <a href="/card.php?id=<?=$row['id']?>">Подробнее</a>
            </div>
              
            </div>
            <?
            }
        
            if($_SESSION['role'] == 'admin'){?>
                <div class="tovar">

                  <a href="new.php" class=""><div  class=" btn btn-outline-secondary tovar foto but"></div></a>
                  <div class="">
                  <a class="podr btn btn-outline-info" href="/new.php?id=<?=$row['id']?>">Добавить товар</a>
                  </div>
                </div>
                
                <?}


?>
</div>
</div>

<?include "footer.php"?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>










