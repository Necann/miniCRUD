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
<body id="top">

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
              <img class="sushilogo2" src="afbeeldingen/sushilogo2.png" alt="Sushi Logo">
                <h1>Welkom bij 'T Plekje!</h1>
                <h2>Bestel nu gemakkelijk online!!</h2>
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
          <div class="menubar">
            <h3>New York Rolls</h3>
            <h3>Crispy Rolls</h3>
            <h3>Urumaki Rolls</h3>
            <h3>Maki/Futo maki</h3>
            <h3>Nigiri/Temari</h3>
            <h3>Temaki Hand-Roll</h3>
            <h3>Poké Bowls</h3>
            <h3>Drinks</h3>
          </div>
          <div class="menuboxes">

          </div>
        </div>
    </main>

    <main>
        <div class="box2">
          <div class="container-about" id="about">
            <nav>
              <ul>
                <li><h1 href="#about"><div class="button1"></div></h1></li>
              </ul>
            </nav>
          </div>
        </div>
    </main>

    <main>
        <div class="box3">
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
        <div class="box4">
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

<!-- 
  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-6 prod-col">
    <div class="inner">
      <div class="block-prod-container" id="cbaae122863646d480a1954bee90ffe8">
        <div class="block-product">
          <a class="cover-img" href="https://static.sushipoint.nl/products/cbaae122-8636-46d4-80a1-954bee90ffe8-8.jpg" data-lightbox="image-21" data-title="<div class='lightbox-product-container'><p class='lightbox-title'>New York Spicy ebi </p><p class='lightbox-description'>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p><button class='btn btn-primary lightbox-add-prod' onclick='ProductAddClickLightbox(this)' prod-id='cbaae122863646d480a1954bee90ffe8'>€ 9,95 <i class='fa fa-plus'></i></button></div>">
            <img src="https://static.sushipoint.nl/products/cbaae122-8636-46d4-80a1-954bee90ffe8-8.jpg" data-original="https://static.sushipoint.nl/products/cbaae122-8636-46d4-80a1-954bee90ffe8-8.jpg" alt="New York Spicy ebi " class="img-responsive lazy col-center" loaded="true">
          </a>
        <div class="product-info">
          <p class="block-product-title">New York Spicy ebi </p>
          <p class="product-description">8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
        </div>
        <button class="block-product-cta add-product" onclick="ProductAddClick('cbaae122863646d480a1954bee90ffe8')">
          <span class="price">
            <span class="price_new">€ 9,95</span>
          </span>
          <div class="add">+</div>
        </button>
      </div>
      <div id="options_cbaae122863646d480a1954bee90ffe8" class="toppings" style="display:none">
        <div class="select-topping topping-container">
          <div class="row">
          </div>
        </div>
        <div class="select-topping topping-container">
        </div>
        <div class="add-prod-container">
          <div class="adding-prods">
            <div class="form-group">
              <i class="fa fa-cart-plus count-prod-icon" aria-hidden="true"></i>
              <label for="prod_count_1" class="sr-only">Aantal: </label>
              <input type="number" min="1" max="999" id="count_cbaae122863646d480a1954bee90ffe8" class="form-control prod-count" value="1">
            </div>
          </div>
          <div class="add-prod" onclick="ProductAddSubClick('cbaae122863646d480a1954bee90ffe8')">
            <button class="btn btn-success btn-block">Toevoegen <strong class="big">+</strong></button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>