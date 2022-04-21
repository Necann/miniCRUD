<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css"/>
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
        <div class="div-start">
            <div class="headline">
              <img class="sushilogo" src="afbeeldingen/sushilogo.png" alt="Sushi Logo">
                <h1>Welkom bij 'T Plekje!</h1>
                <h2>Bestel nu gemakkelijk online!</h2>
            </div>
        </div>
    </main>

    <main>
        <div class="div-menu">
          <div class="container-menu" id="menu">
            <nav>
              <ul>
                <li><h1 href="#menu"><div class="button1"></div></h1></li>
              </ul>
            </nav>
          </div>
          <div id="menu" class="menu"><div class="categories">
            <a href="#nyrolls">New York Rolls</a>
            <a href="#crrolls">Crispy Rolls</a>
            <a href="#urrolls">Urumaki Rolls</a>
            <a href="#maki">Maki/Futo maki</a>
            <a href="#nigiri">Nigiri/Temari</a>
            <a href="#temaki">Temaki Hand-Roll</a>
            <a href="#pokebowls">Poké Bowls</a>
            <a href="#drinks">Drinks</a>
          </div>
          
          <div class="category" id="nyrolls">
            
            <a href="#nyrolls"></a><br>
            
            <div class="category1_0">
              <p>New York Rolls</p>
            </div>

            <div class="menuboxes">
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
            </div>
          </div>

          <div class="category" id="crrolls">
            
            <a href="#crrolls"></a><br>
            
            <div class="category1_0">
              <p>Crispy Rolls</p>
            </div>

            <div class="menuboxes">
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
            </div>
          </div>

          <div class="category" id="urrolls">
            
            <a href="#urrolls"></a><br>
            
            <div class="category1_0">
              <p>Urumaki Rolls</p>
            </div>

            <div class="menuboxes">
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
            </div>

            <div class="menuboxes">
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
            </div>

            <div class="menuboxes">
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
            </div>

            <div class="menuboxes">
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox2">
              </div>
              <div class="menubox2">
              </div>
            </div>
          </div>

          <div class="category" id="maki">
            
            <a href="#maki"></a><br>
            
            <div class="category1_0">
              <p>Maki/Futo maki</p>
            </div>

            <div class="menuboxes">
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
            </div>

            <div class="menuboxes">
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
            </div>

            <div class="menuboxes">
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
            </div>

            <div class="menuboxes">
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox2">
              </div>
              <div class="menubox2">
              </div>
            </div>
          </div>

          <div class="category" id="nigiri">
            
            <a href="#nigiri"></a><br>
            
            <div class="category1_0">
              <p>Nigiri/Temari</p>
            </div>

            <div class="menuboxes">
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
            </div>

            <div class="menuboxes">
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
            </div>

            <div class="menuboxes">
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
            </div>

            <div class="menuboxes">
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox2">
              </div>
              <div class="menubox2">
              </div>
            </div>
          </div>

          <div class="category" id="temaki">
            
            <a href="#temaki"></a><br>
            
            <div class="category1_0">
              <p>Temaki Hand-Roll</p>
            </div>

            <div class="menuboxes">
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
            </div>

            <div class="menuboxes">
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
            </div>

            <div class="menuboxes">
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox2">
              </div>
              <div class="menubox2">
              </div>
            </div>
          </div>

          <div class="category" id="pokebowls">
            
            <a href="#pokebowls"></a><br>
            
            <div class="category1_0">
              <p>Poké Bowls</p>
            </div>

            <div class="menuboxes">
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
              <div class="menubox1">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>New York Spicy Ebi</p>
                  <p>8 stuks | Tempura ebi, avocado, komkommer, Spaanse peper, red hot chili saus</p>
                  <p>€ 9,95<p>
                </div>
              </div>
            </div>
          </div>

          <div class="category" id="drinks">
            
            <a href="#drinks"></a><br>
            
            <div class="category1_0">
              <p>Drinks</p>
            </div>

            <div class="menuboxes">
              <div class="menubox1_2">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>Coca Cola</p>
                  <p>330ml</p>
                  <p>€ 2,00<p>
                </div>
              </div>
              <div class="menubox1_2">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>Coca Cola</p>
                  <p>330ml</p>
                  <p>€ 2,00<p>
                </div>
              </div>
              <div class="menubox1_2">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>Coca Cola</p>
                  <p>330ml</p>
                  <p>€ 2,00<p>
                </div>
              </div>
              <div class="menubox1_2">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>Coca Cola</p>
                  <p>330ml</p>
                  <p>€ 2,00<p>
                </div>
              </div>
            </div>

            <div class="menuboxes">
              <div class="menubox1_2">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>Coca Cola</p>
                  <p>330ml</p>
                  <p>€ 2,00<p>
                </div>
              </div>
              <div class="menubox1_2">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>Coca Cola</p>
                  <p>330ml</p>
                  <p>€ 2,00<p>
                </div>
              </div>
              <div class="menubox1_2">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>Coca Cola</p>
                  <p>330ml</p>
                  <p>€ 2,00<p>
                </div>
              </div>
              <div class="menubox1_2">
                <img class="dish" src="afbeeldingen/placeholder.png">
                <div class="dish_info">
                  <p>Coca Cola</p>
                  <p>330ml</p>
                  <p>€ 2,00<p>
                </div>
              </div>
            </div>
          </div>
                      
        </div>
    </main>

    <main>
        <div class="div-about">
          <div class="container-about">
            <nav>
              <ul>
                <li><h1 href="#about"><div class="button1"></div></h1></li>
              </ul>
            </nav>
          </div>
          <h4 id="about">About Us</h4>

          <div class="about_us">
            <img class="restaurant_logo" src="afbeeldingen/sushilogo.png">
            <p class="restaurant_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum ducimus aspernatur fuga voluptatum voluptate cumque facere quo officiis omnis, provident et, laborum soluta aperiam hic sequi ullam repudiandae est, vel consequuntur saepe recusandae inventore cupiditate assumenda voluptatem. Autem aperiam fugit beatae dolores neque iste quam, voluptate in aspernatur velit. Sequi blanditiis laboriosam officiis illo ratione nulla, quod harum. Natus quisquam aut ipsam nam assumenda tempore molestias dolore illum voluptates, quaerat hic veritatis minus a vitae necessitatibus accusantium! Dignissimos deserunt esse rem iusto doloremque officia pariatur explicabo repudiandae tempora eaque ad at asperiores quas exercitationem quis, numquam ab quisquam beatae ducimus!</p>
            <img class="sushi_plate" src="afbeeldingen/sushi_plate_photo.png">
          </div>
        </div>
    </main>

    <main>
        <div class="div-contact">
          <div class="container-contact">
            <nav>
              <ul>
                <li><h1 href="#contact"><div class="button1"></div></h1></li>
              </ul>
            </nav>
          </div>
          <h4 id="contact">Contact Us</h4>

          <form method="post" id="form">
            <label id="label__fullname" for="fullname">Full Name</label>
            <input id="input__fullname" type="text" name="fullname" maxlength="" placeholder="Your Name" required="">

            <label id="label__email" for="">Email</label>
            <input id="input__email" type="text" name="email" maxlength="" placeholder="example@gmail.com" required="" data-nlok-ref-guid="1cbf07a5-3461-45ae-8515-c2fbf3468704"><div id="norton-idsafe-field-styling-divId" style="height:32.72727272727273px;max-width:32.72727272727273px;vertical-align:top; position:absolute; top:3164.1363636363635px;left:1466.863453079179px;cursor:pointer;resize: both;z-index:2147483646;"><img id="norton-idsafe-field-logo-imgId" src="chrome-extension://admmjipmmciaobhojoghlmleefbicajg/content/images/ic-field-logo.svg" style="height:32.72727272727273px; max-width:32.72727272727273px;"></div>

            <label id="label__discription" for="discription">Send A Message</label>
            <textarea id="input__discription" name="discription" rows="10" placeholder="Write something..." required=""></textarea>
            <input id="click__submit" type="Submit" value="Submit" data-nlok-ref-guid="05f4c7eb-ddc4-4fdd-82e8-4a5d16c85204">
          </form>
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