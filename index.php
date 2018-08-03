<!doctype html>


<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
  
    <body>
      <!--[if lt IE 8]>
          <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
      <![endif]-->
    
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <form class="navbar-form navbar-right" role="form">
              <div class="form-group">
                <input type="text" placeholder="Email" class="form-control">
              </div>
              <div class="form-group">
                <input type="password" placeholder="Password" class="form-control">
              </div>
              <button type="submit" class="btn btn-success">Sign in</button>
            </form>
          </div><!--/.navbar-collapse -->
        </div>
      </nav>

      <!-- Main jumbotron for a primary marketing message or call to action -->
      
      <div class="jumbotron">
        <div class="overlay">
          <section class="search">
            <div class="container">
              <form class="search">
                <input>
                <button class="search-btn">
                  <i class="material-icons">search</i>
                </button>
              </form>
            </div>
          </section>
        </div>
      </div>
      
      <!-- Always shows a header, even in smaller screens. -->
     
      <main class="mdl-layout__content">
        <div class="page-content">
          <div class="container">
          <div class="row">
            <div class="col-xs-12 col-md-3">
              <div class="demo-card-square mdl-card mdl-shadow--2dp">
                <div class="filter-categorie">
                  <h3 class="filter-title">Category</h3>
                  <ul class="filter-list">
                   
                      <?php
    $host = "localhost";
    $user = "root";
    $nombdd = "Amana";
    $passwd = null;
    $bdd  = new mysqli($host, $user,$passwd,$nombdd);
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=Amana', $user, $passwd);
       
    
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

                      $reponse =  $dbh->query('SELECT * from category') ;
                    
                    while($donnees = $reponse -> fetch())
                    {
                     
                       echo "<li>". $donnees['designation']. "</li>";

                       
                    }
                      ?>

                 </ul>


                
                    
                  
                </div>
                <div class="filter-city">
                  <h3 class="filter-title">City</h3>
                  <ul class="filter-list">
                    <li>Elem</li>
                    <li>Elem</li>
                    <li>Elem</li>
                    <li>Elem</li>
                    <li>Elem</li>
                    <li>Elem</li>
                    <li>Elem</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-md-9">;
              <div class="row">;
                      
                      <?php
                      
               echo " <div class=\"col-xs-12 col-sm-6 col-md-4\">";
                  echo "<div class=\"demo-card-square mdl-card mdl-shadow--2dp\">";
                    
                        $host = "localhost";
                         $user = "root";
                        $nombdd = "Amana";
                        $passwd = null;
                        $bdd  = new mysqli($host, $user,$passwd,$nombdd);
                        try {
                          $dbh = new PDO('mysql:host=localhost;dbname=Amana', $user, $passwd);
                        } catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

                      $reponse =  $dbh->query('SELECT * from annonce') ;

                    while($donnees = $reponse -> fetch())
                    {
                     
                       $idUser = $donnees['idUser'];
                       $reponse1 =  $dbh->query("SELECT * from users where id = ".$idUser) ;
                      // var_dump($reponse1);
                      $donnees1 = $reponse1->fetch();
                       echo "<div class=\"img-support\">";
                      echo '<img src="'.$donnees['photo'].'"/>';
                    // echo "<h2 class=\"\">Update</h2>";
                      echo "<span class=\"elem-type lost-object-type\">".$donnees['type']."</span>";
                    echo "</div>";
                    echo "<div>";
                    echo "<div class=\"mdl-card__supporting-text\">";
                        echo "<div>". $donnees['date']. "</div>";
                        echo "<div class=\"elem-person-area\">";
                          echo "<div class=\"avatar\"></div>";

  echo "<h3 class=\"elem-person-name\">".$donnees1['firstName']."</h3>";

                       
                          
                        echo "</div>";
                        echo "<div><span class=\"elem-info\"><i class=\"material-icons\">location_on</i>".$donnees['place'] ."</span></div>";
                        echo "<div><span class=\"elem-info\"><i class=\"material-icons\">access_time</i>".$donnees['date']."</span></div>";
                        echo " <div><span class=\"elem-info\"><i class=\"material-icons\">home</i>Saoudi Arabia </span></div>";
                      echo "</div>";
                      echo "<div class=\"mdl-card__actions mdl-card--border\">";
                        echo "<a class=\"mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect text-capitalize\">
                          View more details
                        </a>";
                      echo "</div>";
                    echo "</div>";
                  echo "</div>";

                echo "</div>";
              }
                ?>
                <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="demo-card-square mdl-card mdl-shadow--2dp">
                    <div class="img-support">
                      <img src="img/elem01.jpg"/>
                      <h2 class="">Update</h2>
                      <span class="elem-type found-object-type">Found Object</span>
                    </div>
                    <div>
                      <div class="mdl-card__supporting-text">
                        <div>Today, 02 August </div>
                        <div class="elem-person-area">
                          <div class="avatar"></div>
                          <h3 class="elem-person-name">Muhammed Muhammed</h3>
                        </div>
                        <div><span class="elem-info"><i class="material-icons">location_on</i>Red Sea Palace</span></div>
                        <div><span class="elem-info"><i class="material-icons">access_time</i>Monday, 30 July</span></div>
                        <div><span class="elem-info"><i class="material-icons">home</i>Dar Jeddah</span></div>
                      </div>
                      <div class="mdl-card__actions mdl-card--border">
                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect text-capitalize">
                          View more details
                        </a>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="demo-card-square mdl-card mdl-shadow--2dp">
                    <div class="img-support">
                      <img src="img/elem01.jpg"/>
                      <h2 class="">Update</h2>
                      <span class="elem-type found-object-type">Found Object</span>
                    </div>
                    <div>
                      <div class="mdl-card__supporting-text">
                        <div>Today, 02 August </div>
                        <div class="elem-person-area">
                          <div class="avatar"></div>
                          <h3 class="elem-person-name">Muhammed Muhammed</h3>
                        </div>
                        <div><span class="elem-info"><i class="material-icons">location_on</i>Red Sea Palace</span></div>
                        <div><span class="elem-info"><i class="material-icons">access_time</i>Monday, 30 July</span></div>
                        <div><span class="elem-info"><i class="material-icons">home</i>Dar Jeddah</span></div>
                      </div>
                      <div class="mdl-card__actions mdl-card--border">
                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect text-capitalize">
                          View more details
                        </a>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="demo-card-square mdl-card mdl-shadow--2dp">
                    <div class="img-support">
                      <img src="img/elem01.jpg"/>
                      <h2 class="">Update</h2>
                      <span class="elem-type lost-object-type">Found Object</span>
                    </div>
                    <div>
                      <div class="mdl-card__supporting-text">
                        <div>Today, 02 August </div>
                        <div class="elem-person-area">
                          <div class="avatar"></div>
                          <h3 class="elem-person-name">Muhammed Muhammed</h3>
                        </div>
                        <div><span class="elem-info"><i class="material-icons">location_on</i>Red Sea Palace</span></div>
                        <div><span class="elem-info"><i class="material-icons">access_time</i>Monday, 30 July</span></div>
                        <div><span class="elem-info"><i class="material-icons">home</i>Dar Jeddah</span></div>
                      </div>
                      <div class="mdl-card__actions mdl-card--border">
                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect text-capitalize">
                          View more details
                        </a>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="demo-card-square mdl-card mdl-shadow--2dp">
                    <div class="img-support">
                      <img src="img/elem01.jpg"/>
                      <h2 class="">Update</h2>
                      <span class="elem-type lost-object-type">Found Object</span>
                    </div>
                    <div>
                      <div class="mdl-card__supporting-text">
                        <div>Today, 02 August </div>
                        <div class="elem-person-area">
                          <div class="avatar"></div>
                          <h3 class="elem-person-name">Muhammed Muhammed</h3>
                        </div>
                        <div><span class="elem-info"><i class="material-icons">location_on</i>Red Sea Palace</span></div>
                        <div><span class="elem-info"><i class="material-icons">access_time</i>Monday, 30 July</span></div>
                        <div><span class="elem-info"><i class="material-icons">home</i>Dar Jeddah</span></div>
                      </div>
                      <div class="mdl-card__actions mdl-card--border">
                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect text-capitalize">
                          View more details
                        </a>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="demo-card-square mdl-card mdl-shadow--2dp">
                    <div class="img-support">
                      <img src="img/elem01.jpg"/>
                      <h2 class="">Update</h2>
                      <span class="elem-type found-object-type">Found Object</span>
                    </div>
                    <div>
                      <div class="mdl-card__supporting-text">
                        <div>Today, 02 August </div>
                        <div class="elem-person-area">
                          <div class="avatar"></div>
                          <h3 class="elem-person-name">Muhammed Muhammed</h3>
                        </div>
                        <div><span class="elem-info"><i class="material-icons">location_on</i>Red Sea Palace</span></div>
                        <div><span class="elem-info"><i class="material-icons">access_time</i>Monday, 30 July</span></div>
                        <div><span class="elem-info"><i class="material-icons">home</i>Dar Jeddah</span></div>
                      </div>
                      <div class="mdl-card__actions mdl-card--border">
                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect text-capitalize">
                          View more details
                        </a>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>
        </div>
        </div>
      </main>
      <!-- Content -->
        

      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
      <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
      <script src="js/vendor/bootstrap.min.js"></script>
      <script src="js/main.js"></script>

      <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
      <script>
          (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
          function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
          e=o.createElement(i);r=o.getElementsByTagName(i)[0];
          e.src='//www.google-analytics.com/analytics.js';
          r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
          ga('create','UA-XXXXX-X','auto');ga('send','pageview');
      </script>
    </body>
</html>
