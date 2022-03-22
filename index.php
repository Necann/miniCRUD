<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="icon" href="afbeeldingen/websitelogo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display&display=swap" rel="stylesheet">
    <title>'T Plekje | Bestel Nu!</title>
</head>
<body>

    <?php 
      include_once 'header.php';
    ?>

    <?php
      require_once("connect.php");
      /**
       * @var PDO $connect
       */
    ?>

    <?php
      $sql = "SELECT * FROM album";
      $stmt = $connect->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll();
    ?>

    <main>
        <div class="box">
            <div class="headline">
                <h1>Welcome!</h1>
            </div>
        </div>
    </main>

    <main>
        <div class="box1">
          <div class="container-menu" id="menu">
            <nav>
              <ul>
                <li><h1 href="#menu"><div class="button1"></div></h1></li>
              </ul>
            </nav>
          </div>
        </div>
    </main>

    <main>
        <div class="box2">
          <div class="container-order" id="order">
            <nav>
              <ul>
                <li><h1 href="#order"><div class="button1"></div></h1></li>
              </ul>
            </nav>
          </div>
        </div>
    </main>

    <main>
        <div class="box3">
          <div class="container-contact" id="contact">
            <nav>
              <ul>
                <li><h1 href="#contact"><div class="button1"></div></h1></li>
              </ul>
            </nav>
          </div>
        </div>
    </main>

    <footer>
    </footer>

    <?php
      foreach($result as $value)
      {
        //Je uit te voeren code
        //Je verschillende onderdelen benader je dan met
        echo $value["artiest"];
      }
    ?>

</body>
</html>