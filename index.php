<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="Scripts/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="Styles/custom.css" rel="stylesheet">

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
          <nav class="navbar navbar-default navbar-apsolute" style="background-color: #001333; border: none;">
               <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                         </button>
                         <a class="navbar-brand" href="index.php">Dvori Kralja Tomislava</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                         <ul class="nav navbar-nav navbar-right">
 <!--                             <li class="active" id="navPrvi"><a href="index.php?page=Jela">Jela <span class="sr-only">(current)</span></a></li>  -->
                              <li id="navPrvi"><a href="index.php?page=Jela">Jela <span class="sr-only">(current)</span></a></li>
                              <li><a href="index.php?page=Pica" id="navDrugi">Pića</a></li>
                              <li class="dropdown">
                                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Jezik<span class="caret"></span></a>
                                   <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Hrvatski</a></li>
                                        <li><a href="#">Engleski</a></li>
                                        <li><a href="#">Njemački</a></li>
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
                    <div class="item active">
                         <img src="Images/hrana1.jpg" class="">
                         <div class="carousel-caption">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                              Hrana 1
                         </div>
                    </div>
                    <div class="item">
                         <img src="Images/hrana2.jpg" class="">
                         <div class="carousel-caption">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                              Hrana 2
                         </div>
                    </div>
                    <div class="item">
                         <img src="Images/hrana3.jpg" class="">
                         <div class="carousel-caption">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                              Hrana 3
                         </div>
                    </div>
                    <div class="item">
                         <img src="Images/hrana4.jpg" class="">
                         <div class="carousel-caption">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                              Hrana 4
                         </div>
                    </div>
                    <div class="item">
                         <img src="Images/hrana5.jpg" class="">
                         <div class="carousel-caption">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                              Hrana 5
                         </div>
                    </div>
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
                    else echo 'Sorry, page not found';                     
               }
               else
                    include('Pages/Home.php');

               ?>
          </div>

  	</div>
</div>


     
     <script src="Scripts/jquery-1.11.2.min.js"></script>
     <script src="Scripts/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
     <script src="Scripts/custom.js"></script>
  </body>
</html>
