<?php

include 'DataHandler.php';


$info_history = <<<html
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Minimal Decor">
    <meta name="description" content="">
    <title>East Quad History and introduction</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
    <link rel="stylesheet" href="css/main.css" media="screen">
    <meta name="generator" content="Nicepage 4.11.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">    
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    <style>
      .center {
      margin: auto;
      width: 60%;
      padding: 10px;
      text-align: center;
    }
    </style>
  </head>
  <body class="u-body u-xl-mode">
    <audio class = "center" controls autoplay>
      <source src="audio/east_quad_history.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio> 
    <header class="u-clearfix u-header u-header" id="sec-56a3">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="https://www.tudublin.ie/" class="u-image u-logo u-image-1" data-image-width="1200" data-image-height="700">
          <img src="images/Technological-University-Dublin-Logo.jpg" class="u-logo-image u-logo-image-1">
        </a>
    </div>
    </header>
    <section class="u-clearfix u-section-1" id="carousel_6829">
      <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-align-center-md u-align-center-sm u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
              <div class="u-container-layout u-valign-middle u-container-layout-1">
                <h6 class="u-align-center u-text u-text-default u-text-1">welcome to The East Quad</h6>
                <h2 class="u-align-center u-custom-font u-font-playfair-display u-text u-text-default u-text-2">The East Quad Introduction and History</h2>
                <p class="u-align-center u-text u-text-palette-4-dark-2 u-text-3">Construction of the Quads was completed in December 2020 (East Quad)<br>
                  <br>East Quad is the first TU Dublin building that you reach after alighting from the LUAS at the new Broadstone plaza that connects to the University via an open, paved walkway.  <br>
                  <br>As a new home to TU Dublin’s Arts disciplines, East Quad will cater to 3,500 students and 160 staff covering the areas of Media, Social Sciences, Creative Arts, and Music & Drama.  <br>
                </p>
                <a href="https://www.tudublin.ie/media/grangegorman/documents/East-Quad.pdf" class="u-active-none u-border-2 u-border-black u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-1">read more</a>               
              </div>
            </div>
            <div class="u-container-style u-layout-cell u-palette-4-dark-1 u-right-cell u-size-30 u-layout-cell-2">
              <div class="u-container-layout u-valign-middle u-container-layout-2">
                <img src="images/East_Quad.jpg" alt="" class="u-image u-image-default u-image-1" data-image-width="1000" data-image-height="1500">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-c148"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Digital Tu Dublin</p>
      </div></footer>
  </body>
</html>
html;

$info_nature = <<<html
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Minimal Decor">
    <meta name="description" content="">
    <title>Nature near the East Quad</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
    <link rel="stylesheet" href="css/main.css" media="screen">
    <meta name="generator" content="Nicepage 4.11.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">    
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    <style>
      .center {
      margin: auto;
      width: 60%;
      padding: 10px;
      text-align: center;
    }
    </style>
  </head>
  <body class="u-body u-xl-mode">
    <audio class = "center" controls autoplay>
      <source src="audio/east_quad_nature.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio> 
    <header class="u-clearfix u-header u-header" id="sec-56a3">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="https://www.tudublin.ie/" class="u-image u-logo u-image-1" data-image-width="1200" data-image-height="700">
          <img src="images/Technological-University-Dublin-Logo.jpg" class="u-logo-image u-logo-image-1">
        </a>
    </div>
    </header>
    <section class="u-clearfix u-section-1" id="carousel_6829">
      <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-align-center-md u-align-center-sm u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
              <div class="u-container-layout u-valign-middle u-container-layout-1">
                <h6 class="u-align-center u-text u-text-default u-text-1">welcome to the Biodiversity near the East Quad</h6>
                <h2 class="u-align-center u-custom-font u-font-playfair-display u-text u-text-default u-text-2">Planting and Biodiversity</h2>
                <p class="u-align-center u-text u-text-palette-4-dark-2 u-text-3">Lavender is a flowering plant in the mint family that's easily identified by its sweet floral scent. It's believed to be native to the Mediterranean, the Middle East, and India, with a history dating as far back as 2,500 years. In ancient times, lavender was used as a holy herb.<br>
                  <br> Bluebell flowers are dainty bulbous perennials that provide a profusion of color ranging from deep purple to pinks, whites and blues from April to mid May. Although some confusion may occur from various English and Latin names, most bluebells are also known as wood hyacinths.<br>
                  <br> rosemary, (Salvia rosmarinus), small evergreen plant of the mint family (Lamiaceae), the leaves of which are used to flavour foods. Native to the Mediterranean region, rosemary has naturalized throughout much of Europe and is widely grown in gardens in warm climates.<br>                                                                  
                </p>
                <a href="https://www.tudublin.ie/media/website/explore/about-the-university/sustainability/documents/21-05-TU-Dublin-GG-Biodiversity.pdf" class="u-active-none u-border-2 u-border-black u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-1">read more</a>              
              </div>
            </div>
            <div class="u-container-style u-layout-cell u-palette-4-dark-1 u-right-cell u-size-30 u-layout-cell-2">
              <div class="u-container-layout u-valign-middle u-container-layout-2">
                <img src="images/East-Quad-plant.PNG" alt="" class="u-image u-image-default" data-image-width="1000" data-image-height="1500">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-c148"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Digital Tu Dublin</p>
      </div></footer>
  </body>
</html>
html;

$info_not_found = <<<html
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Minimal Decor">
    <meta name="description" content="">
    <title>Not Registered</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
    <link rel="stylesheet" href="css/main.css" media="screen">
    <meta name="generator" content="Nicepage 4.11.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">    
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode">
    <header class="u-clearfix u-header u-header" id="sec-56a3">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="https://www.tudublin.ie/" class="u-image u-logo u-image-1" data-image-width="1200" data-image-height="700">
          <img src="images/Technological-University-Dublin-Logo.jpg" class="u-logo-image u-logo-image-1">
        </a>
    </div>
    </header>
    <section class="u-clearfix u-section-1" id="carousel_6829">
      <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-align-center-md u-align-center-sm u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
              <div class="u-container-layout u-valign-middle u-container-layout-1">
                <h6 class="u-align-center u-text u-text-default u-text-1">You have not registered yet</h6>
                <h2 class="u-align-center u-custom-font u-font-playfair-display u-text u-text-default u-text-2">Please go back to the starting point</h2>
                <p class="u-align-center u-text u-text-palette-4-dark-2 u-text-3">Here is the map of TU Grangegorman<br>
                  <br>Our Starting pint is Printmaking Workshop which is No.10 on the map<br>
                  <br>Please follow the map instruction and go back to the starting point.<br>
                  <br>Our Other locations : East Quad(19), Rathdown House(5), Central Quad (18), Lower House(20), Park House(11)<br>
                </p> 
                <a href="https://www.tudublin.ie/media/website/explore/our-campuses/city-centre-campuses/grangegorman/documents/GDA-Grangegorman-Wayfinding-Map.pdf" class="u-active-none u-border-2 u-border-black u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-1">Check Map PDF</a>             
              </div>
            </div>
            <div class="u-container-style u-layout-cell u-palette-4-dark-1 u-right-cell u-size-30 u-layout-cell-2">
              <div class="u-container-layout u-valign-middle u-container-layout-2">
                <img src="images/map.jpg" alt="" class="u-image u-image-default u-image-2" data-image-width="1000" data-image-height="1500">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-c148"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Digital Tu Dublin</p>
      </div></footer>
  </body>
</html>
html;


if ( (isset($_COOKIE["experience"])) && (isset($_COOKIE["duration"])) && $_COOKIE["experience"] == "nature" ){
    echo $info_nature;
    if($_COOKIE["database"] == "database_yes"){
        insert_history($_COOKIE["user_id"], "the_east_quad", "nature");
    }
}
else if( (isset($_COOKIE["experience"])) && (isset($_COOKIE["duration"])) && $_COOKIE["experience"] == "history" ){
    echo $info_history;
    if($_COOKIE["database"] == "database_yes"){
        insert_history($_COOKIE["user_id"], "the_east_quad", "history");
    }
}
else{
    echo $info_not_found;
}
?>