<!doctype html>
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <link rel="canonical" href="/" />
  
  <meta name="description" content="" />
  
  <title>Boutique Mactown - Accueil</title>
  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet" type="text/css">
  
  <link href="./assets/stylesheets/cs.animate.css" rel="stylesheet" type="text/css" media="all">
  <link href="./assets/stylesheets/application.css" rel="stylesheet" type="text/css" media="all">
  <link href="./assets/stylesheets/bootstrap.min.3x.css" rel="stylesheet" type="text/css" media="all">
  <link href="./assets/stylesheets/cs.bootstrap.3x.css" rel="stylesheet" type="text/css" media="all">
  <link href="./assets/stylesheets/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
  <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
  <link href="./assets/stylesheets/responsive-slider.css" rel="stylesheet" type="text/css" media="all">
  <link href="./assets/stylesheets/cs.global.css" rel="stylesheet" type="text/css" media="all">
  <link href="./assets/stylesheets/cs.style.css" rel="stylesheet" type="text/css" media="all">
  <link href="./assets/stylesheets/cs.media.3x.css" rel="stylesheet" type="text/css" media="all">
  <!--[if IE 8 ]> 
  <link href="./assets/stylesheets/ie8.css" rel="stylesheet" type="text/css" media="all">
  <![endif]-->
  <script src="./assets/javascripts/jquery-2.1.0.min.js" type="text/javascript"></script>
  <script src="./assets/javascripts/modernizr.js" type="text/javascript"></script>
</head>

<body class="templateIndex">

     <?php
                include "login.php";
                $uname = "";
                $umoney = 0;
                $urlog = "login.php?logout=true";
                $namelog = "Logout";
                $inf = GetInfo($uname, $umoney);
                if($inf == 1)
			    {
			 $namelog = "Déconnexion";
			 $urlog = "login.php?logout=true";
			    }
				else
				{
					 $namelog = "Connexion";
			 $urlog = "login.php?login=true";
				}
                  ?>
				  

  <!-- Header -->
  <header id="top" class="clearfix">
    
    <!--top-other-->
    <div id="top-other">
      <div class="container">
        <div class="row">
          <div class="welcome col-md-9 text-left">
           Boutique Mactown
          </div>
          <div class="top-other col-md-15">
            <ul class="list-inline text-right">
              <li class="currencies-switcher">
                <div class="currency-plain">
                  <ul class="currencies list-inline unmargin">
                    <li class="heading">Joueur :  </li>
                    <li class="currency-EUR active">
                      <a href="#">                 <?php
    if($inf == 1) {
	echo $uname;
	}
	else
	{
	echo "Anonyme";
	}


?>	
</a>
                      <input type="hidden" value="EUR">
                    </li>
                  </ul>
            
                </div>
              </li>
              <li class="customer-links">
                <ul id="accounts" class="list-inline">
                  <li class="login">
                   
                   <?php
    if($inf == 1) {
	echo '<a href="'.$urlog.'">Logout</a>';
	}
	else
	{
	echo ' <span id="loginButton" class="dropdown-toggle" data-toggle="dropdown">';
	echo 'Login       <i class="sub-dropdown1"></i> <i class="sub-dropdown"></i>   </span>';
	}


?>				   
               
                 <?php
  if($inf != 1)
			    {
				echo '<div id="loginBox" class="dropdown-menu text-left" style="overflow:hidden;display:none">';
				echo '    <form method="get" action="'.$urlog.'" id="customer_login" accept-charset="UTF-8">';
				echo ' <input name="form_type" type="hidden" value="customer_login">   <input name="utf8" type="hidden" value="✓"><div id="bodyBox">  <div class="sb-title">Se Connecter</div>';
				echo '                         <ul class="control-container customer-accounts list-unstyled">                            <li class="clearfix">                              <label for="customer_email_box" class="control-label">Pseudo <span class="req">*</span></label>';
				echo ' <input type="text" value="" name="username" id="customer_email_box" class="form-control">';
				echo ' </li>  <li class="clearfix">   <label for="customer_password_box" class="control-label">Mot de passe <span class="req">*</span></label>';
				echo ' <input type="password" value="" name="password" id="customer_password_box" class="form-control password">';
				echo '  </li>      <li class="clearfix last1">     <button class="btn btn-1" type="submit">Connexion</button>  </li> <li>      <a class="register" href="./register.html">créer un nouveau compte</a>';
				echo '  </li></ul> </div> </form> </div>	';
				}
				
?>

                  </li>
               
                </ul>
              </li>
              <li class="umbrella">
                <div id="umbrella" class="list-inline unmargin">
                  <div class="cart-link">
                    <div class="dropdown-toggle" data-toggle="dropdown">
                      <i class="sub-dropdown1"></i>
                      <i class="sub-dropdown"></i>
                      <a class="num-items-in-cart link-dropdown" href="./cart.html">
                        <span>Mes Points</span>
                        <span class="icon">
                          <span class="total"> - <span class="money" >   <?php
    if($inf == 1) {
	echo $umoney.' <span style="color:#cc9800">PG</span>';
	}
	else
	{
	echo '00 <span style="color:#cc9800">PG</span>';
	}


?>	
</span></span>
                        </span>
                      </a>
                    </div>
                   
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--end top-other -->
    
    <div class="container">
      <div class="row">
        <div class="col-md-12 top-logo">
          <a id="site-title" href="./index.php" title="HTML Game Store Theme">
            <img src="./assets/images/logo.png" alt="HTML Game Store Theme">
          </a>
        </div>
        <div class="col-md-12 top-support">
        
          <div class="top-search">
    <form id="header-search" class="search-form" action="./search.php" method="get">
              <input type="hidden" name="type" value="product">
              <input type="text" class="input-block-level" name="name" value="" accesskey="4" autocomplete="off" placeholder="Trouver un produit">
              <button type="submit" class="search-submit" title="Search">
                <i class="fa fa-search"></i>
              </button>
            </form>
          </div>
        </div>
      </div>
   
   </div>
    
    <div class="container">
      <div class="row top-navigation">
        <nav class="navbar" role="navigation">
          <div class="clearfix">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle main navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="is-mobile visible-xs">
              <ul class="list-inline">
                <li class="is-mobile-menu">
                  <div class="btn-navbar" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar-group">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </span>
                  </div>
                </li>
                <li class="is-mobile-login">
                  <div class="btn-group">
                    <div class="dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-user"></i>
                    </div>
                    <ul class="customer dropdown-menu">
                      <li class="logout">
                        <a href="./login.html">Log in</a>
                      </li>
                      <li class="account">
                        <a href="./register.html">Register</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="is-mobile-currency currencies-switcher">
                  <div class="currency btn-group uppercase">
                    <a class="currency_wrapper dropdown-toggle" href="#" data-toggle="dropdown">
                      <i class="sub-dropdown1"></i>
                      <i class="sub-dropdown"></i>
                      <span class="currency_code">EUR</span>
                      &nbsp;<i class="icon-caret-down"></i>
                    </a>
                    <ul class="currencies dropdown-menu text-left">
                      <li class="currency-EUR active">
                        <a href="javascript:">EUR</a>
                        <input type="hidden" value="EUR">
                      </li>
                      <li class="currency-USD">
                        <a href="javascript:">USD</a>
                        <input type="hidden" value="USD">
                      </li>
                      <li class="currency-GBP">
                        <a href="javascript:">GBP</a>
                        <input type="hidden" value="GBP">
                      </li>
                    </ul>
                    <select class="currencies_src hide" name="currencies">
                      <option value="EUR" selected="selected">EUR</option>
                      <option value="USD">USD</option>
                      <option value="GBP">GBP</option>
                    </select>
                  </div>
                </li>
                <li class="is-mobile-cart">
                  <a href="./cart.html"><i class="fa fa-shopping-cart"></i></a>
                </li>
              </ul>
            </div>
         <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav hoverMenuWrapper">
			     <li class="">
                  <a href="./index.php">
                    Accueil
                    <span></span>
                  </a>
                </li>
                <li class="dropdown">
                  <a href="./products.php?type=1" class="dropdown-toggle link-dropdown" data-toggle="dropdown">
                    Véhicules
                    <i class="fa fa-caret-down"></i>
                    <i class="sub-dropdown1 visible-md visible-lg"></i>
                    <i class="sub-dropdown visible-md visible-lg"></i>
                  </a>
                  <ul class="dropdown-menu" style="overflow:hidden;display:none">
                    <li><a tabindex="-1" href="./products.php?type=1" title="Voitures">Voitures</a></li>
                    <li><a tabindex="-1" href="./products.php?type=2">Bateaux</a></li>
                    <li><a tabindex="-1" href="./products.php?type=3" >Avions & Hélico</a></li>
                    <li><a tabindex="-1" href="./products.php?type=4" >Camions</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="./products.php?type=6" class="dropdown-toggle link-dropdown" data-toggle="dropdown">
                    Business
                    <i class="fa fa-caret-down"></i>
                    <i class="sub-dropdown1 visible-md visible-lg"></i>
                    <i class="sub-dropdown visible-md visible-lg"></i>
                  </a>
                  <ul class="dropdown-menu" style="overflow:hidden;display:none">
                    <li><a tabindex="-1" href="./products.php?type=6" >Magasin / Entreprise</a></li>
                    <li><a tabindex="-1" href="./products.php?type=7">Usine</a></li>
          
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="./products.php?type=8" class="dropdown-toggle link-dropdown" data-toggle="dropdown">
                    Armes
                    <i class="fa fa-caret-down"></i>
                    <i class="sub-dropdown1 visible-md visible-lg"></i>
                    <i class="sub-dropdown visible-md visible-lg"></i>
                  </a>
                  <ul class="dropdown-menu" style="overflow:hidden;display:none">
                    <li><a tabindex="-1" href="./products.php?type=8">Armes</a></li>
                    <li><a tabindex="-1" href="./skills.php" >Skills</a></li>
                  
                  </ul>
                </li>
                <li class="">
                  <a href="./products.php?type=5">
                    Maisons
                    <span></span>
                  </a>
                </li>
             <li class="dropdown">
                  <a href="./hcp.php" class="dropdown-toggle link-dropdown" data-toggle="dropdown">
                    HCP
                    <i class="fa fa-caret-down"></i>
                    <i class="sub-dropdown1 visible-md visible-lg"></i>
                    <i class="sub-dropdown visible-md visible-lg"></i>
                  </a>
                  <ul class="dropdown-menu" style="overflow:hidden;display:none">
                    <li><a tabindex="-1" href="./hcp.php?type=1">HCP Wooden Skull</a></li>
                    <li><a tabindex="-1" href="./hcp.php?type=2" >HCP Silver Skull</a></li>
                   <li><a tabindex="-1" href="./hcp.php?type=3" >HCP Golden Skull</a></li>
                  </ul>
                </li>
               <li class="">
                  <a href="./account.php">
                    Mon Compte
                    <span></span>
                  </a>
                </li>

                <li class="last">
                  <a href="./buy_gigp.php">
                    Achat PG <img src="./screen/pieces.png">
                    <span></span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
    
    <div class="gr-below-nav">
      <div class="container">
        <div class="home_below_nav top-below-nav clearfix">
          <div class="sub_menu">
            <ul class="list-inline list-unstylet text-left clearfix">
              <li class="col-md-5">
                <a href="http://www.greedingames.com">
                  <span>GIG</span>
                </a>
                <span>Site Officiel</span>
              </li>
              <li class="col-md-5">
                <a href="./collection.html">
                  <span>Forums</span>
                </a>
                <span>Macktown Forums</span>
              </li>
              <li class="col-md-5">
                <a href="./collection.html">
                  <span>Vente</span>
                </a>
                <span>Vente d'objets</span>
              </li>
              <li class="col-md-5">
                <a href="./collection.html">
                  <span>GIG Client</span>
                </a>
                <span>Téléchargement</span>
              </li>
            </ul>
            <span class="sub_nav"></span>
          </div>
        </div>
      </div>
    </div>
  </header>
  
  <div id="content-wrapper-parent">
    <div id="content-wrapper">
      <div class="container">
        <div class="row">
          <div id="home-slider-wrapper">
            <div id="home-slider" class="responsive-slider hideControls">
              <div class="slides" data-group="slides">
                <ul>
                  <li>
                    <div class="slide-body" data-group="slide">
                      <img src="./screen/demos/banner_1180x400.png" alt="">
                      <div class="caption image">
                        <img src="./screen/demos/demo_200x267.png" alt="">
                      </div>
                      <div class="caption header">
                        <div class="heading" data-animate="slideAppearRightToLeft" data-delay="500" data-length="300">
                          <a href="./collection.html">
                            <span class="caption-content" style="color:#47cbde">
                              <span>Lorem of Ipsum</span><br>
                              Amet Space
                            </span>
                          </a>
                        </div>
                        <div class="content" data-animate="slideAppearRightToLeft" data-delay="800" data-length="300">
                          <span class="caption-content" style="color:#ea5210">PRE-ORDER</span>
                          <span class="caption-content" style="color:#ea5210"><br>
                            RELEASE DATE :<span style="color:#ffffff"> Dec 30 2013</span>
                          </span>
                        </div>
                        <div class="caption1" data-animate="slideAppearRightToLeft" data-delay="1000">
                          <span class="caption-content" style="color:#ffffff">
                            Several major cities around the world have been reported to be under attack. New York Harbor in Manhattan is among those in distress. <br> Will you accept the call ?
                          </span>
                        </div>
                        <div class="slide-price">
                          <span class="caption-content" style="color:#ea5210">
                            $58.89
                          </span>
                          <a href="./collection.html">Details</a>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="slide-body" data-group="slide">
                      <img src="./screen/demos/banner_1180x400.png" alt="">
                      <div class="caption image">
                        <img src="./screen/demos/demo_200x267.png" alt="">
                      </div>
                      <div class="caption header">
                        <div class="heading" data-animate="slideAppearLeftToRight" data-delay="500" data-length="300">
                          <a href="./collection.html">
                            <span class="caption-content" style="color:#47cbde">
                              <span>Lorem for Ipsum</span><br>
                              Ipsum Race
                            </span>
                          </a>
                        </div>
                        <div class="content" data-animate="slideAppearLeftToRight" data-delay="800" data-length="300">
                          <span class="caption-content" style="color:#ea5210">PRE-ORDER</span>
                          <span class="caption-content" style="color:#ea5210"><br>
                            RELEASE DATE :<span style="color:#ffffff"> Dec 30 2013</span>
                          </span>
                        </div>
                        <div class="caption1" data-animate="slideAppearRightToLeft" data-delay="1000">
                          <span class="caption-content" style="color:#ffffff">
                            Several major cities around the world have been reported to be under attack. New York Harbor in Manhattan is among those in distress.
                          </span>
                        </div>
                        <div class="slide-price">
                          <span class="caption-content" style="color:#ea5210">
                            $49.95
                          </span>
                          <a href="./collection.html">Details</a>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="slide-body" data-group="slide">
                      <img src="./screen/demos/banner_1180x400.png" alt="">
                      <div class="caption image">
                        <img src="./screen/demos/demo_200x267.png" alt="">
                      </div>
                      <div class="caption header">
                        <div class="heading" data-animate="slideAppearRightToLeft" data-delay="500" data-length="300">
                          <a href="./collection.html">
                            <span class="caption-content" style="color:#47cbde">
                              <span>Lorem the Ipsum</span><br>
                              LID Sword
                            </span>
                          </a>
                        </div>
                        <div class="content" data-animate="slideAppearLeftToRight" data-delay="800" data-length="300">
                          <span class="caption-content" style="color:#ea5210">PRE-ORDER</span>
                          <span class="caption-content" style="color:#ea5210"><br>
                            RELEASE DATE :<span style="color:#ffffff"> Dec 30 2013</span>
                          </span>
                        </div>
                        <div class="caption1" data-animate="slideAppearLeftToRight" data-delay="1000">
                          <span class="caption-content" style="color:#ffffff">
                            Several major cities around the world have been reported to be under attack. New York Harbor in Manhattan is among those in distress.
                          </span>
                        </div>
                        <div class="slide-price">
                          <span class="caption-content" style="color:#ea5210">
                            $60.95
                          </span>
                          <a href="./collection.html">Details</a>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="control-slideshow">
                <span class="control">
                  <a class="slider-control fa fa-angle-left s-prev" href="javascript:" data-jump="prev">
                    <span class="sub-control"></span>
                    <span class="btn-label hidden-xs">PREV</span>
                  </a>
                  <a class="slider-control fa fa-angle-right s-next" href="javascript:" data-jump="next">
                    <span class="sub-control"></span>
                    <span class="btn-label hidden-xs">NEXT</span>
                  </a>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div id="content" class="container clearfix">
        <section class="row content">
          <div id="col-main" class="clearfix">
            
			<script type="text/javascript">
			  jQuery(document).ready(function($){
				
				initTabActive();
				
				//  When user clicks on tab, this code will be executed
				$(".head_tabs").on(clickEv, function() {
				  
				  if(!$(this).parent().hasClass('active')) {
					//  First remove class "active" from currently active tab
					$(".head_tabs").parent().removeClass("active");
					
					//  Here we get the data-src(parent) value of the selected tab
					var $src_tab = $(this).attr("data-src");
					
					//  Now add class "active" to the selected/clicked tab
					$($src_tab).parent().addClass("active");
					
					//  Hide all tab content
					$(".content_tabs").hide();
					
					
					//  Here we get the href value of the selected tab
					var $selected_tab = $(this).attr("href");
					
					//  Show the selected tab content
					if(isMobile.any())
					  $($selected_tab).show();
					else
					  $($selected_tab).fadeIn();
					
					// Scroll to content
					$('html, body').animate({
					  scrollTop: $($selected_tab).offset().top - 80
					},300);
					
					// re-call position quickshop
					positionQuickshop();
					
					//  Here we get the href value of the selected tab
					var $selected_carousel = $(this).attr("data-crs");
					
				  }
				  //  At the end, we add return false so that the click on the link is not executed
				  return false;
				});

				 /* Function: init item active */
				 function initTabActive(){
				   // Content
				   jQuery('#tabs_content_container').find('.content_tabs').first().show();
				   jQuery('#tabs_content_container').find('.content_tabs').first().prev().addClass('active');
				   
				   
				   jQuery('#tabs_container #tabs').find('.head_tabs').first().parent().addClass('active');
				   
				 }
				 });
			</script>
            <!--home-tabs-->
            <div id="tabs_container" class="visible-md visible-lg clearfix">
              <ul id="tabs" class="list-unstyled">
                <li class="active">
                  <a class="head_tab2 head_tabs" href="#content_tab2" data-src=".head_tab2" data-crs="#carousel_tab2">
                   Véhicules
                  </a>
                </li>
                <li class="">
                  <a class="head_tab3 head_tabs" href="#content_tab3" data-src=".head_tab3" data-crs="#carousel_tab3">
                    Maisons
                  </a>
                </li>
                <li class="">
                  <a class="head_tab4 head_tabs" href="#content_tab4" data-src=".head_tab4" data-crs="#carousel_tab4">
                    Bizz
                  </a>
                </li>
                <li class="">
                  <a class="head_tab5 head_tabs" href="#content_tab5" data-src=".head_tab5" data-crs="#carousel_tab5">
                    Armes
                  </a>
                </li>
               
              </ul>
            </div>
            
            <div id="tabs_content_container" class="col-md-24">
              <h3 class="hidden-md hidden-lg">
                <a class="head_tab2 head_tabs" href="#content_tab2" data-src=".head_tab2" data-crs="#carousel_tab2">All systems</a>
              </h3>
              <div id="content_tab2" class="content_tabs list_carousel responsive" style="display:none">
                <ul id="carousel_tab2" data-prev="#prev_tab2" data-next="#next_tab2" class="list-unstyled clearfix">
				<?php 
include "tools.php";
$con = Connect();
$res = GetMostPopularVehicles("N");

while($row = mysql_fetch_array($res))
{

$pics = mysql_query("SELECT * FROM pics WHERE pid='".$row["pid"]."';");
$picr = mysql_fetch_array($pics);

 echo '<li class="col-md-4 items">  <form action="/cart/add" method="post" enctype="multipart/form-data"> <ul class="row-container list-unstyled clearfix"> <li class="row-left">';
echo '   <a href="./item.php?pid='.$row["pid"].'" class="hoverBorder"> <img src="'.$picr["img"].'"   width="160" height="227" >	';
if(intval($row["sale"]) == 1)
{
// on sale
echo ' <span class="sale_banner animated">  <img src="./assets/images/saleoff.png" title="Sale Off" alt="Sale Off">      </span>';
}

echo '</a> </li> ';
             
        
echo '<li class="row-right text-left parent-fly animMix"> <div class="group_info"> <a class="title-5" href="./item.php?pid='.$row["pid"].'">'.$row["name"].'</a>';
echo  '<br> <a class="col-title" href="">'.$row["category"].'</a>       <div class="product-price">  <span class="price">';
                    
						 echo ' <span class="money">'.$row["prix"].'</span> </span>  </div> </div></li> </ul>           </form></li>';
						 
        }   

		
			?>

			
			  </ul>
                <div class="line"></div>
                <div class="clearfix"></div>
              </div>
              
              <h3 class="hidden-md hidden-lg">
                <a class="head_tab3 head_tabs" href="#content_tab3" data-src=".head_tab3" data-crs="#carousel_tab3">Xbox 360</a>
              </h3>
              <div id="content_tab3" class="content_tabs list_carousel responsive" style="display:none;">
                <ul id="carousel_tab3" data-prev="#prev_tab3" data-next="#next_tab3" class="list-unstyled clearfix">
                
				  <?php 
$res = GetMostPopularHouses("N");

while($row = mysql_fetch_array($res))
{

$pics = mysql_query("SELECT * FROM pics WHERE pid='".$row["pid"]."';");
$picr = mysql_fetch_array($pics);

 echo '<li class="col-md-4 items">  <form action="/cart/add" method="post" enctype="multipart/form-data"> <ul class="row-container list-unstyled clearfix"> <li class="row-left">';
echo '   <a href="./item.php?pid='.$row["pid"].'" class="hoverBorder"> <span class="hoverBorderWrapper"><img src="'.$picr["img"].'" width="160" height="227" >	</span> ';
if(intval($row["sale"]) == 1)
{
// on sale
echo ' <span class="sale_banner animated">  <img src="./assets/images/saleoff.png" title="Sale Off" alt="Sale Off">      </span>';
}

echo '</a> </li> ';
             
        
echo '<li class="row-right text-left parent-fly animMix"> <div class="group_info"> <a class="title-5" href="./item.php?pid='.$row["pid"].'">'.$row["name"].'</a>';
echo  '<br> <a class="col-title" href="">'.$row["type"].'</a>       <div class="product-price">  <span class="price">';
                    
						 echo ' <span class="money">'.$row["prix"].'</span> </span>  </div> </div></li> </ul>           </form></li>';
						 
        }   

		
			?>
			 </ul>
                <div class="line"></div>
                <div class="clearfix"></div>
              </div>
              <h3 class="hidden-md hidden-lg">
                <a class="head_tab4 head_tabs" href="#content_tab4" data-src=".head_tab4" data-crs="#carousel_tab4">PlayStation 3</a>
              </h3>
              <div id="content_tab4" class="content_tabs list_carousel responsive" style="display:none">
                <ul id="carousel_tab4" data-prev="#prev_tab4" data-next="#next_tab4" class="list-unstyled clearfix">
      
				  <?php 
$res = GetMostPopularBizz("N");

while($row = mysql_fetch_array($res))
{

$pics = mysql_query("SELECT * FROM pics WHERE pid='".$row["pid"]."';");
$picr = mysql_fetch_array($pics);

 echo '<li class="col-md-4 items">  <form action="/cart/add" method="post" enctype="multipart/form-data"> <ul class="row-container list-unstyled clearfix"> <li class="row-left">';
echo '   <a href="./item.php?pid='.$row["pid"].'" class="hoverBorder"> <span class="hoverBorderWrapper"><img src="'.$picr["img"].'"  width="160" height="227" >	</span> ';
if(intval($row["sale"]) == 1)
{
// on sale
echo ' <span class="sale_banner animated">  <img src="./assets/images/saleoff.png" title="Sale Off" alt="Sale Off">      </span>';
}

echo '</a> </li> ';
             
        
echo '<li class="row-right text-left parent-fly animMix"> <div class="group_info"> <a class="title-5" href="./item.php?pid='.$row["pid"].'">'.$row["name"].'</a>';
echo  '<br> <a class="col-title" href="">'.$row["type"].'</a>       <div class="product-price">  <span class="price">';
                    
						 echo ' <span class="money">'.$row["prix"].'</span> </span>  </div> </div></li> </ul>           </form></li>';
						 
        }   

		
			?>


			  </ul>
                <div class="line"></div>
                <div class="clearfix"></div>
              </div>
              <h3 class="hidden-md hidden-lg">
                <a class="head_tab5 head_tabs" href="#content_tab5" data-src=".head_tab5" data-crs="#carousel_tab5">Wii</a>
              </h3>
              <div id="content_tab5" class="content_tabs list_carousel responsive" style="display:none">
                <ul id="carousel_tab5" data-prev="#prev_tab5" data-next="#next_tab5" class="list-unstyled clearfix">
                  <li class="col-md-4 items">
                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                      <ul class="row-container list-unstyled clearfix">
                        <li class="row-left">
                          <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="./screen/demos/demo_160x227.png" class="image-fly img-responsive" alt="Curabitur mattis tellus rutrum enim facilisis">
                            </span>
                            <div class="product-ajax-cart hidden-phone">
                              <span class="overlay_mask"></span>
                              <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                Quickshop
                              </div>
                            </div>
                            <span class="sale_banner animated">
                              <img src="./assets/images/saleoff.png" title="Sale Off" alt="Sale Off">
                            </span>
                          </a>
                        </li>
                        <li class="row-right text-left parent-fly animMix">
                          <div class="group_info">
                            <a class="title-5" href="./product.html">Curabitur mattis tellus rutrum enim facilisis</a>
                            <br>
                            <a class="col-title" href="./collection.html">
                              Wii
                            </a>
                            <p class="hidden-list">
                              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                            </p>
                            <div class="product-price">
                              <del class="price_compare"> <span class="money"><img src="./screen/pieces.png" alt="Points GIG">69.00</span></del>
                              <span class="price_sale"><span class="money"><img src="./screen/pieces.png" alt="Points GIG">59.00</span></span>
                            </div>
                            <div class="hide clearfix">
                              <select name="id">
                                <option selected="selected" value="455695609">Ferrari / Modern - <img src="./screen/pieces.png" alt="Points GIG">59.00</option>
                                <option value="502625841">Lamborghini / Modern - <img src="./screen/pieces.png" alt="Points GIG">70.00</option>
                              </select>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </form>
                  </li>
                  <li class="col-md-4 items">
                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                      <ul class="row-container list-unstyled clearfix">
                        <li class="row-left">
                          <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="./screen/demos/demo_160x227.png" class="image-fly img-responsive" alt="Nam at lectus eget mi vista  hendrerit tincidunt">
                            </span>
                            <div class="product-ajax-cart hidden-phone">
                              <span class="overlay_mask"></span>
                              <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                Quickshop
                                
                              </div>
                            </div>
                          </a>
                        </li>
                        <li class="row-right text-left parent-fly animMix">
                          <div class="group_info">
                            <a class="title-5" href="./product.html">Nam at lectus eget mi vista hendrerit tincidunt</a>
                            <br>
                            <a class="col-title" href="./collection.html">
                              Wii
                            </a>
                            <p class="hidden-list">
                              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                            </p>
                            <div class="product-price">
                              <span class="price">
                                <span class="money"><img src="./screen/pieces.png" alt="Points GIG">59.00</span>
                              </span>
                            </div>
                            <div class="hide clearfix">
                              <select name="id">
                                <option selected="selected" value="455695573">action - <img src="./screen/pieces.png" alt="Points GIG">59.00</option>
                              </select>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </form>
                  </li>
                  <li class="col-md-4 items">
                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                      <ul class="row-container list-unstyled clearfix">
                        <li class="row-left">
                          <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="./screen/demos/demo_160x227.png" class="image-fly img-responsive" alt="Pellentesque habitant morbi  tristique senectus">
                            </span>
                            <div class="product-ajax-cart hidden-phone">
                              <span class="overlay_mask"></span>
                              <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                Quickshop
                                
                              </div>
                            </div>
                          </a>
                        </li>
                        <li class="row-right text-left parent-fly animMix">
                          <div class="group_info">
                            <a class="title-5" href="./product.html">Pellentesque habitant morbi tristique senectus</a>
                            <br>
                            <a class="col-title" href="./collection.html">
                              Wii
                            </a>
                            <p class="hidden-list">
                              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                            </p>
                            <div class="product-price">
                              <span class="price">
                                <span class="money"><img src="./screen/pieces.png" alt="Points GIG">59.00</span>
                              </span>
                            </div>
                            <div class="hide clearfix">
                              <select name="id">
                                <option selected="selected" value="455695585">action - <img src="./screen/pieces.png" alt="Points GIG">59.00</option>
                                <option value="502628309">horror - <img src="./screen/pieces.png" alt="Points GIG">65.00</option>
                              </select>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </form>
                  </li>
                  <li class="col-md-4 items">
                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                      <ul class="row-container list-unstyled clearfix">
                        <li class="row-left">
                          <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="./screen/demos/demo_160x227.png" class="image-fly img-responsive" alt="Suspendisse sed libero consequat">
                            </span>
                            <div class="product-ajax-cart hidden-phone">
                              <span class="overlay_mask"></span>
                              <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                Quickshop
                                
                              </div>
                            </div>
                          </a>
                        </li>
                        <li class="row-right text-left parent-fly animMix">
                          <div class="group_info">
                            <a class="title-5" href="./product.html">Suspendisse sed libero consequat</a>
                            <br>
                            <a class="col-title" href="./collection.html">
                              Wii
                            </a>
                            <p class="hidden-list">
                              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                            </p>
                            <div class="product-price">
                              <span class="price">
                                <span class="money"><img src="./screen/pieces.png" alt="Points GIG">59.00</span>
                              </span>
                            </div>
                            <div class="hide clearfix">
                              <select name="id">
                                <option selected="selected" value="456848697">venture - <img src="./screen/pieces.png" alt="Points GIG">59.00</option>
                                <option value="502630317">science fiction - <img src="./screen/pieces.png" alt="Points GIG">69.00</option>
                              </select>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </form>
                  </li>
                  <li class="col-md-4 items">
                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                      <ul class="row-container list-unstyled clearfix">
                        <li class="row-left">
                          <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="./screen/demos/demo_160x227.png" class="image-fly img-responsive" alt="Suspendisse sed libero consequat">
                            </span>
                            <div class="product-ajax-cart hidden-phone">
                              <span class="overlay_mask"></span>
                              <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                Quickshop
                                
                              </div>
                            </div>
                          </a>
                        </li>
                        <li class="row-right text-left parent-fly animMix">
                          <div class="group_info">
                            <a class="title-5" href="./product.html">Suspendisse sed libero consequat</a>
                            <br>
                            <a class="col-title" href="./collection.html">
                              Wii
                            </a>
                            <p class="hidden-list">
                              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                            </p>
                            <div class="product-price">
                              <span class="price">
                                <span class="money"><img src="./screen/pieces.png" alt="Points GIG">59.00</span>
                              </span>
                            </div>
                            <div class="hide clearfix">
                              <select name="id">
                                <option selected="selected" value="456848681">war - <img src="./screen/pieces.png" alt="Points GIG">59.00</option>
                                <option value="502628861">action - <img src="./screen/pieces.png" alt="Points GIG">65.00</option>
                              </select>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </form>
                  </li>
                  <li class="col-md-4 items">
                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                      <ul class="row-container list-unstyled clearfix">
                        <li class="row-left">
                          <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="./screen/demos/demo_160x227.png" class="image-fly img-responsive" alt="Suspendisse sed libero consequat">
                            </span>
                            <div class="product-ajax-cart hidden-phone">
                              <span class="overlay_mask"></span>
                              <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                Quickshop
                                
                              </div>
                            </div>
                          </a>
                        </li>
                        <li class="row-right text-left parent-fly animMix">
                          <div class="group_info">
                            <a class="title-5" href="./product.html">Suspendisse sed libero consequat</a>
                            <br>
                            <a class="col-title" href="./collection.html">
                              Wii
                            </a>
                            <p class="hidden-list">
                              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                            </p>
                            <div class="product-price">
                              <span class="price">
                                <span class="money"><img src="./screen/pieces.png" alt="Points GIG">59.00</span>
                              </span>
                            </div>
                            <div class="hide clearfix">
                              <select name="id">
                                <option selected="selected" value="455709189">action - <img src="./screen/pieces.png" alt="Points GIG">59.00</option>
                                <option value="502631905">animation - <img src="./screen/pieces.png" alt="Points GIG">69.00</option>
                              </select>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </form>
                  </li>
                </ul>
                <div class="line"></div>
                <div class="clearfix"></div>
              </div>

		  </div>
            <!--end home-tabs-->
            
            <!--home-platforms-->
            <div id="home-platforms">
              <div class="platforms-title text-center">
                <div class="sb-title">Highly Classified Players</div>
              
              </div>
              <div class="platforms_products col-md-8 not-animated clearfix" data-animate="fadeInUp" data-delay="300">
                <header class="control-group control-group-1 clearfix">
                  <div class="platforms-wrapper-title">
                    <span class="sb-title">HCP Wooden Skull</span>
                    <a href="./collection.html">Voir tout</a>
                  </div>
                </header>
                <div class="platforms_products_wrapper">
                  <div id="platforms_products_1" class="clearfix">
                    <div class="platforms-item bounceIn animated" data-animate="bounceIn" data-delay="300">
                      <ul class="row-container list-unstyled clearfix">
                        <li class="col-md-12 row-left">
                          <span class="hoverBorderWrapper">
                            <img src="./screen/demos/wood.gif" alt="">
                          </span>
                        </li>
                        <li class="col-md-12 row-right">
						<div class="group-platform">
                          <div class="platforms-from">À partir de</div>
                          <div class="platforms-price">
                           <img src="./screen/pieces.png">197
                          </div>
                          <div class="platforms-caption">Hors Taxes/Mois</div>
						</div>
                          <div class="shop_platform">
                            <a class="btn_shop_platform btn_shop_platform_1" href="./collection.html">&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp;Acheter&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  </a>
                          </div>
                          <div class="platform_shop">
                            <a class="btn_shop_Accessories" href="./product.html">&nbsp;&nbsp;&nbsp;&nbsp;Informations&nbsp;&nbsp;&nbsp;&nbsp;  </a>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="platforms_products col-md-8 not-animated clearfix" data-animate="fadeInUp" data-delay="300">
                <header class="control-group control-group-2 clearfix">
                  <div class="platforms-wrapper-title">
                    <span class="sb-title">HCP Silver Skull</span>
                    <a href="./collection.html">Voir tout</a>
                  </div>
                </header>
                <div class="platforms_products_wrapper">
                  <div id="platforms_products_2" class="clearfix">
                    <div class="platforms-item bounceIn animated" data-animate="bounceIn" data-delay="600">
                      <ul class="row-container list-unstyled clearfix">
                        <li class="col-md-12 row-left">
                          <span class="hoverBorderWrapper">
                            <img src="./screen/demos/silver.gif" alt="">
                          </span>
                        </li>
                        <li class="col-md-12 row-right">
						<div class="group-platform">
                          <div class="platforms-from">À partir de</div>
                          <div class="platforms-price">
                            <img src="./screen/pieces.png">299
                          </div>
                           <div class="platforms-caption">Hors Taxes/Mois</div>
						</div>
                          <div class="shop_platform">
                            <a class="btn_shop_platform btn_shop_platform_2" href="./collection.html">&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp;Acheter&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  </a>
                          </div>
                          <div class="platform_shop">
                            <a class="btn_shop_Accessories" href="./product.html">&nbsp;&nbsp;&nbsp;&nbsp;Informations&nbsp;&nbsp;&nbsp;&nbsp;  </a>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="platforms_products col-md-8 not-animated clearfix" data-animate="fadeInUp" data-delay="300">
                <header class="control-group control-group-3 clearfix">
                  <div class="platforms-wrapper-title">
                    <span class="sb-title">HCP Golden Skull</span>
                    <a href="./collection.html">Voir tout</a>
                  </div>
                </header>
                <div class="platforms_products_wrapper">
                  <div id="platforms_products_3" class="clearfix">
                    <div class="platforms-item bounceIn animated" data-animate="bounceIn" data-delay="900">
                      <ul class="row-container list-unstyled clearfix">
                        <li class="col-md-12 row-left">
                          <span class="hoverBorderWrapper">
                            <img src="./screen/demos/gold.gif" alt="">
                          </span>
                        </li>
                        <li class="col-md-12 row-right">
						<div class="group-platform">
                          <div class="platforms-from">À partir de</div>
                          <div class="platforms-price">
                          <img src="./screen/pieces.png">99 
                          </div>
                          <div class="platforms-caption">Hors Taxes/Mois</div>
						</div>
                          <div class="shop_platform">
                            <a class="btn_shop_platform btn_shop_platform_3" href="./collection.html">&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp;Acheter&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  </a>
                          </div>
                          <div class="platform_shop">
                            <a class="btn_shop_Accessories" href="./product.html">&nbsp;&nbsp;&nbsp;&nbsp;Informations&nbsp;&nbsp;&nbsp;&nbsp;  </a>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
            <!--end home-platforms-->
            
         
            

            
          </div>
        </section>
      </div>
    </div>
  </div>

  <footer id="footer">
    <div class="container">
     

	  <div class="footer_bottom row">

          <div class="footer_categories not-animated" data-animate="fadeInUp" data-delay="300">
            <ul class="list-inline">
              <li><h5>Categories</h5></li>
              <li>
                <a href="./collection.html">Vehicules</a>
                <span>|</span>
              </li>
              <li>
                <a href="./collection.html">Maisons</a>
                <span>|</span>
              </li>
              <li>
                <a href="./collection.html">Bizz</a>
                <span>|</span>
              </li>
              <li>
                <a href="./collection.html">Armes</a>
                <span>|</span>
              </li>
              <li>
                <a href="./collection.html">HCP</a>
                <span>|</span>
              </li>
              <li>
                <a href="./collection.html">Points</a>
              </li>
      
            </ul>
          </div>
          <div class="wrap_bot">
            <div class="footer_bot_info col-md-12">
         
              <div class="copyright">© 2014 <a href="./index.php">Greed in Games</a>. Tous droits réservés.<br>Provided by <a href="http://www.arsslensoft.com" title="">Arsslensoft</a></div>
            </div>
            <div id="widget-payment" class="col-md-12">
              <ul id="payments" class="list-inline animated">
                <li class="btooltip tada" data-toggle="tooltip" data-placement="top" title="" data-original-title="e-dinar"><a href="javascript:" class="icons visa"></a></li>
                <li class="btooltip tada" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mastercard"><a href="javascript:" class="icons mastercard"></a></li>
                <li class="btooltip tada" data-toggle="tooltip" data-placement="top" title="" data-original-title="Paypal"><a href="javascript:" class="icons paypal"></a></li>
       <li class="btooltip tada" data-toggle="tooltip" data-placement="top" title="" data-original-title="Starpass"><a href="javascript:" class="icons moneybookers"></a></li>
              </ul>
            </div>
          </div>
        </div>
    
	</div>
    </div>
  </footer>
  
  <div class="modal fade" id="quick-shop-modal"></div>
  <script src="./assets/javascripts/bootstrap.min.3x.js" type="text/javascript"></script>
  <script src="./assets/javascripts/cs.global.js" type="text/javascript"></script>
  <script src="./assets/javascripts/owl.carousel.js" type="text/javascript"></script>
  <script src="./assets/javascripts/jquery.responsive-slider.min.js" type="text/javascript"></script>
  <script src="./assets/javascripts/jquery.imagesloaded.min.js" type="text/javascript"></script>
  <script src="./assets/javascripts/application.js" type="text/javascript"></script>
  <script src="./assets/javascripts/cs.script.js" type="text/javascript"></script>
</body>
</html>
<?php 
CloseCon($con);

?>