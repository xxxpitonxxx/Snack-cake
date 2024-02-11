

<?
    session_start();
    include 'dbconnect.php';

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
   body {
    margin-top: 50px;
    background: #333; /* Цвет фона */
    color: #fc0; /* Цвет текста */
   }
  </style>
</head>



<body>

<?
$id = $_GET['id'];

$db = dbconn();

    $query = $db->query("SELECT * FROM `Snack-cake` WHERE `id`='$id'");
    while($row = $query->fetch_assoc()) {
        ?>
        
        <h1><p class="card-title text"><?=$row['Название']?></p></h1>
        <br>

        <div class="card mb-3 podr" style="max-width: 800px;">
          <div class="row g-0 card1  back">
            <div class="col-md-4 card_foto">
              <img src="<?=$row['photo']?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body bor">

                <p class="card-text">Цена: <?=$row['Цена']?></p>
                <p class="card-text">Артикул: <?=$row['Артикул']?></p>
                <p class="card-text">Описание<br><?=$row['Описание']?></p>
                <p class="card-text">Состав<br><?=$row['Состав']?></p>
              </div>
            </div>
          </div>
        </div>

        <div class="but">
        <button class="btn btn-outline-warning but">Добавить в корзину</button>
        </div>
        
        
        <?
        
        ?>
        <br>
            <!-- <img class="img" src="<?=$row['photo']?>" alt=""> -->
        <?
    }

?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>



