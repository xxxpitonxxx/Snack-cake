

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


<h1 class="mar"><div class="mt-3">Добро пожаловать в магазин Snack-cake!</div></h1>


    
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

            $query = $db->query("SELECT * FROM `Tort`");

            while($row = $query->fetch_assoc()) {
             
            ?>
            
            
            <div class="tovar mt-3">
           
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

            <div class="podr btn btn-outline-danger">
            <a class="t3" href="/card.php?id=<?=$row['id']?>&type=Tort">Подробнее</a>
            </div>
              
            </div>
            <?
            }
        
            if($_SESSION['role'] == 'admin'){?>
              <div class="tovar mt-3">

                <a href="new.php" class=""><div  class=" btn btn-outline-danger tovar foto but"></div></a>
                <div class="">
                <a class="podr btn btn-outline-danger" href="/new.php?id=<?=$row['id']?>">Добавить товар</a>
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










