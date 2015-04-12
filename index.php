<?php
//Spajanje na mysql bazu.

$con = mysqli_connect('127.0.0.1', 'root', 'root', 'restoran');
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
} 

mysqli_set_charset($con, "utf8");

// Provjera i postavljanje cookija ako je to potrebno.

if(isset($_COOKIE['language'])){
    $j = $_COOKIE['language'];
}
else{
    setcookie("language", "hr", time() + (10 * 365 * 24 * 60 * 60)); $j = "hr";
}

// Specificni nazivi koji ovise o jeziku.

if($j == 'hr'){ $jelo = "Jela"; $pice = "Piće"; $jezik = "Jezik"; $jezik1 = "Hrvatski"; $jezik2 = "Engleski"; $jezik3 = "Njemački"; $prilog = "Prilozi: "; $ci = "Cijena: "; $p = "popust"; $sa = ', prilozi: ';}
if($j == 'en'){ $jelo = "Food"; $pice = "Drinks"; $jezik = "Language"; $jezik1 = "Croatian"; $jezik2 = "English"; $jezik3 = "German"; $prilog = "Side dish: "; $ci = "Price: "; $p = "discount"; $sa = ' with';}
if($j == 'de'){ $jelo = "Lebensmittel"; $pice = "Getränke"; $jezik = "Sprache"; $jezik1 = "Kroatisch"; $jezik2 = "Englisch"; $jezik3 = "Deutsch"; $prilog = "Beilage: "; $ci = "Preis: "; $p ="rabatt"; $sa = ' mit';}

// Query za dohvacanje vrijednosti za slider.

$q = "SELECT ID, image_url as URL, Naziv_".$j." AS 'Naziv', Cijena, Popust,
     (SELECT GROUP_CONCAT(LOWER(prilozi.naziv_".$j.") SEPARATOR ', ') FROM jela AS jela2
     INNER JOIN prilozi_list ON jela2.id = prilozi_list.Jelo_id
     INNER JOIN prilozi ON prilozi_list.prilog_id = prilozi.id
     WHERE jela2.id = jela1.id
     GROUP BY jela2.id) AS 'Prilozi' 
FROM jela AS jela1
GROUP BY jela1.id
ORDER BY jela1.Popust DESC Limit 5";

$res = mysqli_query($con, $q);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Dvori kralja Tomislava</title>

    <!-- Bootstrap -->
    <link href="Scripts/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="Styles/custom.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Economica|Jura|Shadows+Into+Light+Two|Amaranth' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

<div id="dwa-wrapper">
  	<div class="container">

<!-- Navigation
************************************************************************************************** -->
          <nav class="navbar navbar-default navbar-apsolute customNavbar">
               <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarCollapse">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                         </button>
                         <a class="navbar-brand" href="index.php" style="color: #D4A66F;">Dvori kralja Tomislava</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                         <ul class="nav navbar-nav navbar-right">
                              <li id="navPrvi"><a href="index.php?page=Jela"><?php echo $jelo; ?><span class="sr-only">(current)</span></a></li>
                              <li><a href="index.php?page=Pica" id="navDrugi"><?php echo $pice; ?></a></li>
                              <li class="dropdown">
                                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $jezik; ?><span class="caret"></span></a>
                                   <ul class="dropdown-menu" role="menu">
                                        <li><a class="chooseLanguage" href="#" data-lang="hr"><?php echo $jezik1; ?></a></li>
                                        <li><a class="chooseLanguage" href="#" data-lang="en"><?php echo $jezik2; ?></a></li>
                                        <li><a class="chooseLanguage" href="#" data-lang="de"><?php echo $jezik3; ?></a></li>
                                   </ul>
                              </li>
                         </ul>
                    </div><!-- /.navbar-collapse -->
               </div><!-- /.container-fluid -->
          </nav>


<!-- Carousel
************************************************************************************************** -->
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
               <!-- Indicators -->
                    <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
               </ol>

               <!-- Wrapper for slides -->
               <div class="carousel-inner" role="listbox">
                <?php
                $item = 0;
                while($cArray = mysqli_fetch_array($res))
                {   
                    $popustCijena = $cArray['Cijena'] - ($cArray['Cijena'] * ($cArray['Popust'] / 100));
                    echo '
                    <a href="index.php?page=Jela&id='.$cArray['ID'].'" class="item'.($item == 0 ? ' active' : '').'">
                         <img src="Images/Jela/'.$cArray['URL'].'.jpg" class="img-responsive">
                         <div class="carousel-caption">
                            <p style="margin-bottom: 0px;"><b>'. $cArray['Naziv'] .'</b>'. (isset($cArray['Prilozi']) ? $sa : '') .'
                            '. $cArray['Prilozi'] .' </br>
                            Cijena: '. ($popustCijena) .' kn</p>
                         </div>
                    </a>
                    ';
                    $item++;
                }
                ?>
               </div>

               <!-- Controls -->
               <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
               </a>
               <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
               </a>
          </div>

<!-- Content
************************************************************************************************** -->

          <div class="row contentArea">
               <?php
               if( !empty($_GET['page']))
               {
                    $pages_dir = 'Pages';
                    $pages = scandir($pages_dir, 0);
                    unset($pages[0], $pages[1]);                      
                    $a = $_GET['page'];

                    if(in_array($a . '.php', $pages )) 
                    {
                         include ($pages_dir.'/'.$a.'.php');
                    }
                    else echo '
                         <div class="col-xs-12 homeDiv" style="background-color:#96652B; height: auto;">
                              <p>Stranica nije pronađena</p>
                         </div>
                         ';                     
               }
               else
                    include('Pages/Home_'.$j.'.php');

               ?>
          </div>

<!-- Footer
************************************************************************************************** -->

    
      <div class="col-xs-12" style="background-color:#96652B; max-height: 50px; height: auto; margin-top: 5px;">
        <p style="font-family: 'Sans-serif'; color: white; font-weight: bold; line-height: 50px; text-align: center; margin-bottom: 0px;">
          Copyright © 2015 Dvori kralja Tomislava
        </p>
      </div>
    

  	</div>

</div>

<!-- Potrebne skripte
************************************************************************************************** -->
     
     <script src="Scripts/jquery-1.11.2.min.js"></script>
     <script src="Scripts/jquery-1.3.2-mobile.custom.min.js"></script>
     <script src="Scripts/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
     <script src="Scripts/jquery.cookie.js"></script>
     <script src="Scripts/custom.js"></script>
<!--     <script src="Scripts/custom-mobile"></script>  -->

  </body>
</html>
