
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
    <title>The Lower House History and introduction</title>
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
      <source src="audio/lower_house_history.mp3" type="audio/mpeg">
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
                <h6 class="u-align-center u-text u-text-default u-text-1">welcome to The Lower House</h6>
                <h2 class="u-align-center u-custom-font u-font-playfair-display u-text u-text-default u-text-2">The Lower House Introduction and History</h2>
                <p class="u-align-center u-text u-text-palette-4-dark-2 u-text-3">The Lower House is the name given to the former Richmond Asylum which opened to patients in 1814 and served over 2,000 patients at its peak. It is one of the 11 protected structures on the Grangegorman site. This old building will be refurbished to be available for a variety of student uses for TU Dublin. This ambitious recovery project aims to be completed for September 2020. <br>
                  <br>The building’s new uses will include music practice rooms, students’ union workspace, a food hall, sports rooms, a dance studio and general student support services. FKP Architects are leading the multi-disciplinary design team on the project.<br>
                  <br>the building will be restored and transformed into a multi-purpose space for students by FKP Architects<br>
                </p>
                <a href="https://www.tudublin.ie/explore/news/archive-2021/revealing-grangegorman---the-lower-house.html" class="u-active-none u-border-2 u-border-black u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-1">read more</a>              
              </div>
            </div>
            <div class="u-container-style u-layout-cell u-palette-4-dark-1 u-right-cell u-size-30 u-layout-cell-2">
              <div class="u-container-layout u-valign-middle u-container-layout-2">
                <img src="images/Lower-House-Video-Reveal-Main.jpg" alt="" class="u-image u-image-default u-image-1" data-image-width="1000" data-image-height="1500">
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
    <title>Tree near the Lower House</title>
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
      <source src="audio/lower_house_nature.mp3" type="audio/mpeg">
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
                <h6 class="u-align-center u-text u-text-default u-text-1">welcome to the tree near the Lower House</h6>
                <h2 class="u-align-center u-custom-font u-font-playfair-display u-text u-text-default u-text-2">Magnolia denudata/Yulan Magnolia</h2>
                <p class="u-align-center u-text u-text-palette-4-dark-2 u-text-3">Magnolia denudata is a rather low, rounded, thickly branched, and coarse-textured tree to 30 feet (9.1 m) tall. The leaves are ovate, bright green, 15 cm long and 8 cm wide. The bark is a coarse, dark gray. The 10–16 cm white flowers that emerge from early to late spring, while beautiful and thick with a citrus-lemon fragrance, are prone to browning if subjected to frost.  <br>
                  <br>It has been cultivated in Chinese Buddhist temple gardens since 600 AD. Its flowers were regarded as a symbol of purity in the Tang Dynasty and it was planted in the grounds of the Emperor's palace. It is the official city flower of Shanghai.<br>
                </p>
                <a href="https://en.wikipedia.org/wiki/Magnolia_denudata" class="u-active-none u-border-2 u-border-black u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-1">read more</a>               
              </div>
            </div>
            <div class="u-container-style u-layout-cell u-palette-4-dark-1 u-right-cell u-size-30 u-layout-cell-2">
              <div class="u-container-layout u-valign-middle u-container-layout-2">
                <img src="images/Lower-House-Trees.jpg" alt="" class="u-image u-image-default u-image-1" data-image-width="1000" data-image-height="1500">
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
        insert_history($_COOKIE["user_id"], "the_lower_house", "nature");
    }
    
}
else if( (isset($_COOKIE["experience"])) && (isset($_COOKIE["duration"])) && $_COOKIE["experience"] == "history" ){
    echo $info_history;
    if($_COOKIE["database"] == "database_yes"){
        insert_history($_COOKIE["user_id"], "the_lower_house", "history");
    }
}
else{
    echo $info_not_found;
}
?>