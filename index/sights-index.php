<?php
$server="localhost";
$database = 'tulaTur_db';
$user="root";
$pass="";
  $dsn = "mysql:host=$host;dbname=$database;";
  $options = array(
      PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  );
  $pdo = new PDO($dsn, $user, $pass, $options);

  function user() {
    global $pdo;
    $stmt = $pdo->query('SELECT * FROM sights');
    $data = $stmt->fetchAll();
    return $data;
   }
   $datas = user();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tula sights</title>
    <link rel="stylesheet" href="../css/sights-style.css">
    <link rel="stylesheet" href="../css/main-style.css">
    <link rel="stylesheet" href="../css/main-media-style.css">
</head>

<body>
    <header class="header">
        <div class="nav">
          <div class="logo">Tula Tur</div></div>
        </div>
    </header>
  <?php foreach ($datas as $data): ?>
    <div class="accordion">
        <div class="accordion-block">
          <div class="block">
            <h3 class="accordion-title"><?= $data['name']; ?></h3>
          </div>

          <div class="subscribe">
            <picture class="picture-block-1">
              <img src="<?= $data['image']; ?>" alt="картинка">
            </picture>
            <div class="about">
              <p class="accordion-text"><?= $data['subscribe']; ?></p>
            </div>
          </div>    
        </div>

    </div>
  <?php endforeach; ?>

      

         



</body>
</html>