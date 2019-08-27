<?php
if(!isset($_GET["pid"]))
{
 header('Location: index.php');   
}


$pid = $_GET["pid"];
	  include "tools.php";
							 $con = Connect();
							 						
$type = GetProductType($pid);			

?>

<!doctype html>
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <link rel="canonical" href="/" />
  
  <meta name="description" content="" />
  
  <title>Boutique Mactown - Information du Produit</title>
  
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

<body class="template">
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
  <?php
  $pi = GetProductInfo($pid,$type);
  
  ?>
  <div id="content-wrapper-parent">
    <div id="content-wrapper">
	
      <div id="content" class="container clearfix">
        <div class="group_breadcrumb">
          <div id="breadcrumb" class="row breadcrumb">
            <div class="col-md-24">
              <a href="./index.php" class="homepage-link" title="Back to the frontpage">Home</a>
              <i class="angle-right">&gt;</i>
              <a href="" title=""><?php echo GetTypeName(intval($pi["type"])); ?></a>
              <i class="angle-right">&gt;</i>
              <span class="page-title"><?php echo $pi["name"]; ?> </span>
            </div>
          </div>
        </div>
        <section class="row content">
          
          <!--sidebar-->
          <div class="col-md-5 sidebar hidden-xs">
            <div class="sb-wrapper">
              <div class="sb-title box featured_game">Produits Vedette</div>
              <ul class="featured-products sb-content list-unstyled list-styled">

			  				  <?php 
	  
$res = GetMostExpensiveVehicles("N");
if($type == 5)
$res = GetMostExpensiveHouses("N");
else if($type == 6 || $type == 7)
  $res = GetMostExpensiveBizz("N");

while($row = mysql_fetch_array($res))
{
$pics = mysql_query("SELECT * FROM pics WHERE pid='".$row["pid"]."';");
$picr = mysql_fetch_array($pics);
	echo ' <li>                  <div class="row">                    <div class="col-md-8 row-left unpadding-right">                      <a href="item.php?pid='.$row["pid"].'" class="product-link">';
echo '<img src="'.$picr["img"].'" width="60" height="85" class="image-fly img-responsive" alt="Cras in nunc non ipsum duo  cursus ultrices">                   </a>                    </div>                    <div class="col-md-16 row-right parent-fly">                      <div class="product-wrapper">';

                       echo '<div class="fprod-title">                         <a href="item.php?pid='.$row["pid"].'" >'.$row["name"].'</a>                       </div>';
                      echo  '<a class="col-title" href="products.php?type='.$type.'"> ';
					  echo GetTypeName($row["type"]);
					  echo '</a>      <div class="product-price"><span class="price"> <span class="money">'.$row["prix"].' PG</span>  </span>';
                      echo '  </div>                      <div class="clearfix">                        ';                    
				
                   //    echo    ' <input type="hidden" name="quantity" value="1">            <button class="btn add-to-cart" data-parent=".parent-fly" type="submit" name="add">More</button>';
                    echo '                      </div>                      </div>                    </div>                  </div>            </li>';
}
				?>
			  
			 </ul>
            </div>
            <div class="sb-wrapper">
              <div class="sb-title box text_widget">Bienvenu</div>
              <ul class="list-unstyled sb-content textwidget list-styled">
                <li><p>Notre equipe vous souhaite un bon tour dans notre boutique</p></li>
              </ul>
            </div>


	  </div>
          <!--end sidebar-->
          
          <!--col-main-->
          <div id="col-main" class="product-page col-content col-md-19">
            <div itemscope="" itemtype="http://schema.org/Product">
              <meta itemprop="url" content="/products/curabitur-mattis-tellus-rutrum-enim-facilisis">
              <div id="product" class="content row clearfix">
                <div id="product-image" class="col-md-12 product-image">
                  <div class="product-image-wrapper">
				  		<?php
					$pics = mysql_query("SELECT * FROM pics WHERE pid='$pid'");
					$picr = mysql_fetch_array($pics);
				   $img = $picr["img"];
				   	   $img1 = $picr["img1"];
					   	   $img2 = $picr["img2"];
						   	   $img3 = $picr["img3"];
					?>
                    <a target="_blank" href="./screen/products/product_03_1024x1024.jpg" class="main-image elevatezoom">
                      <img itemprop="image" class="img-zoom img-responsive image-fly" src="<?php echo $img;?>" width="420" height="600" data-zoom-image="<?php echo $img;?>">
                      <span class="main-image-bg"></span>
                    </a>
                    <div id="gallery_main" class="product-image-thumb">
			
                      <a target="_blank" class="image-thumb active" data-image="<?php echo $img;?>" data-zoom-image="<?php echo $img;?>" href="<?php echo $img;?>" width="420" height="600">
                        <img src="<?php echo $img;?>" width="60" height="60" >
                      </a>
                                      <a target="_blank" class="image-thumb active" data-image="<?php echo $img1;?>" data-zoom-image="<?php echo $img1;?>" href="<?php echo $img1;?>" width="420" height="600">
                        <img src="<?php echo $img1;?>" width="60" height="60" >
                      </a>
				  <a target="_blank" data-image="<?php echo $img2;?>" data-zoom-image="<?php echo $img2;?>" href="<?php echo $img2;?>" width="420" height="600">
                        <img src="<?php echo $img2;?>" width="60" height="60" >
                      </a>
					                        <a target="_blank" class="image-thumb active" data-image="<?php echo $img3;?>" data-zoom-image="<?php echo $img3;?>" href="<?php echo $img3;?>" width="420" height="600">
                        <img src="<?php echo $img3;?>" width="60" height="60" >
                      </a>
                    </div>
                  </div>
                </div>
                <div id="product-information" class="col-md-12 product-information">
                  <div id="product-header" class="clearfix">
                    <h3 id="page-product-title" itemprop="name">
                    <?php echo $pi["name"]; ?>
                    </h3>
                    <div class="description" itemprop="description">
                      <p>      <?php echo $pi["desc"]; ?></p>
                    
                    </div>
                    <div class="sharing">
                      <div class="addthis_toolbox addthis_default_style">
                        <a class="addthis_button_email"></a>
                        <a class="addthis_button_print"></a>
                        <a class="addthis_button_facebook"></a>
                        <a class="addthis_button_twitter"></a>
                        <a class="addthis_button_pinterest_share"></a>
                        <a class="addthis_button_compact"></a>
                        <a class="addthis_counter addthis_bubble_style"></a>
                      </div>
                      <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-526dd1ed7110a16a"></script>
                    </div>
                    <div class="relative">
                      <ul class="list-unstyled">
               			   
			   <?php 
			   
		
if(intval($pi["type"]) == 5)
{
echo '   <li class="vendor"> <span>Pieces:</span> <a href=""> '.$pi["pieces"].'</a>        </li>';
echo '   <li class="vendor"> <span>Id Intérieur:</span> <a href=""> '.$pi["idint"].'</a>        </li>';
echo '   <li class="vendor"> <span>Ville et quartier: </span> <a href=""> '.$pi["ville"].'</a>        </li>';
echo '   <li class="vendor"> <span>Popularité:</span> <a href=""> '.$pi["popularity"].' </a>        </li>';
echo '   <li class="vendor"> <span>Classe:</span> <a href=""> '.$pi["category"].'</a>        </li>';
if(intval($pi["garage"]) == 1)
echo '   <li class="vendor"> <span>Garage:</span> <a href=""> Oui</a>        </li>';
else
{
echo '   <li class="vendor"> <span>Garage:</span> <a href=""> Non</a>        </li>';

if(intval($pi["garagemap"]) == 1)
echo '   <li class="vendor"> <span>Mapping Garage:</span> <a href=""> Possible</a>        </li>';
else
echo '   <li class="vendor"> <span>Mapping Garage:</span> <a href=""> Impossible</a>        </li>';

}

if(intval($pi["wall"]) == 1)
echo '   <li class="vendor"> <span>Sécurisé:</span> <a href=""> Oui</a>        </li>';
else
{
echo '   <li class="vendor"> <span>Sécurisé:</span> <a href=""> Non</a>        </li>';

if(intval($pi["wallmap"]) == 1)
echo '   <li class="vendor"> <span>Mapping Murs:</span> <a href=""> Possible</a>        </li>';
else
echo '   <li class="vendor"> <span>Mapping Murs:</span> <a href=""> Impossible</a>        </li>';

}

if(intval($pi["jardin"]) == 1)
echo '   <li class="vendor"> <span>Jardin:</span> <a href=""> Oui</a>        </li>';
else
echo '   <li class="vendor"> <span>Jardin:</span> <a href=""> Non</a>        </li>';

if(intval($pi["piscine"]) == 1)
echo '   <li class="vendor"> <span>Piscine:</span> <a href=""> Oui</a>        </li>';
else
echo '   <li class="vendor"> <span>Piscine:</span> <a href=""> Non</a>        </li>';
echo '   <li class="vendor"> <span>Prix de vente:</span> <a href=""> '.$pi["prixig"].'</a>        </li>';


}
else if(intval($pi["type"]) == 6 || intval($pi["type"]) == 7)
{

echo '   <li class="vendor"> <span>Stock:</span> <a href=""> '.$pi["stock"].'</a>        </li>';
if(intval($pi["depot"]) == 1)
echo '   <li class="vendor"> <span>Depot:</span> <a href=""> Oui</a>        </li>';
else
{
echo '   <li class="vendor"> <span>Depot:</span> <a href=""> Non</a>        </li>';

if(intval($pi["depotmap"]) == 1)
echo '   <li class="vendor"> <span>Mapping Depot:</span> <a href=""> Possible</a>        </li>';
else
echo '   <li class="vendor"> <span>Mapping Depot:</span> <a href=""> Impossible</a>        </li>';

}

echo '   <li class="vendor"> <span>Locale:</span> <a href=""> '.$pi["ville"].'</a>        </li>';
echo '   <li class="vendor"> <span>Popularité:</span> <a href=""> '.$pi["popularity"].'</a>        </li>';
echo '   <li class="vendor"> <span>Prix In Game:</span> <a href=""> '.$pi["prixig"].'</a>        </li>';

}
else{

echo '   <li class="vendor"> <span>Categorie:</span> <a href=""> '.$pi["category"].'</a>        </li>';
echo '   <li class="vendor"> <span>Vitesse maximale:</span> <a href=""> '.$pi["speed"].'</a>        </li>';
echo '   <li class="vendor"> <span>Réservoir essence:</span> <a href=""> '.$pi["fuel"].'</a>        </li>';
echo '   <li class="vendor"> <span>Places:</span> <a href=""> '.$pi["places"].'</a>        </li>';
if(intval($pi["tuning"]) == 1)
echo '   <li class="vendor"> <span>Tunable:</span> <a href=""> Oui</a>        </li>';
else
echo '   <li class="vendor"> <span>Tunable:</span> <a href=""> Non</a>        </li>';

echo '   <li class="vendor"> <span>Prix de vente:</span> <a href=""> '.$pi["prixig"].'</a>        </li>';
if(intval($pi["type"]) == 3)
{
if(intval($pi["water"]) == 1)
echo '   <li class="vendor"> <span>Water Landing:</span> <a href=""> Oui</a>        </li>';
else
echo '   <li class="vendor"> <span>Water Landing:</span> <a href=""> Non</a>        </li>';

}


}
		
			?>
                        <li class="tags">
                          <span>Type:</span>
                          <a href="./products.php?type=" ><?php echo GetTypeName(intval( $pi["type"])); ?>
                          
                          </a>
                        
                        </li>
                      </ul>
                    </div>
                    <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                      <meta itemprop="priceCurrency" content="EUR">
                      <link itemprop="availability" href="http://schema.org/InStock">
                
                        <div id="product-actions-200046165" class="options clearfix">
                          <div id="purchase-200046165">
                            <div class="detail-price" itemprop="price">
                              <span class="price_sale"><span class="money"> <?php  echo $pi["prix"]; ?> <img src="./screen/pieces.png" alt="Points GIG"></span></span>
                            </div>
                          </div>
                             <form action="./buy_item.php" method="post" class="variants" id="product-actions">
							 <p> Options</p>
				<?php
				if($type != 5 && $type != 6 && $type != 7)
				{
				                echo '             <div class="selector-wrapper clearfix"> <label for="product-select-200046165-option-0">Couleur 1</label> <div class="wrapper">                  <select class="single-option-selector col-md-12" id="product-select-200046165-option-0" style="z-index:1000;position:absolute;opacity:0;font-size:11px" name="color">';

				$g = explode(',',$pi["color"]);
				for ($i = 0; $i < count($g); $i++)
				{
				echo '  <option value="'.$g[$i].'">'.$g[$i].' +'.GetColorPrice($g[$i]).' PG</option>';
				}
     
                             echo '   </select>   <button type="button" class="custom-style-select-box btn-block changed">';
                              echo '  <span class="custom-style-select-box-inner">'.$g[0].' +'.GetColorPrice($g[0]).' PG</span>     </button>';

echo '                                <i class="fa fa-caret-up"></i>                                <i class="fa fa-caret-down"></i>                              </div>                            </div>';
                     
			                echo '             <div class="selector-wrapper clearfix"> <label for="product-select-200046165-option-0">Couleur 2</label> <div class="wrapper">                  <select class="single-option-selector col-md-12" id="product-select-200046165-option-0" style="z-index:1000;position:absolute;opacity:0;font-size:11px" name="color2">';

				$g = explode(',',$pi["color2"]);
				for ($i = 0; $i < count($g); $i++)
				{
		echo '  <option value="'.$g[$i].'">'.$g[$i].' +'.GetColorPrice($g[$i]).' PG</option>';
				}
     
                             echo '   </select>   <button type="button" class="custom-style-select-box btn-block changed">';
                                                      echo '  <span class="custom-style-select-box-inner">'.$g[0].' +'.GetColorPrice($g[0]).' PG</span>     </button>';

echo '                                <i class="fa fa-caret-up"></i>                                <i class="fa fa-caret-down"></i>                              </div>                            </div>';
                  
					 }
					 else if($type == 5)
					 {
					    if(intval($pi["garagemap"]) == 1)
						  {
						    echo '<input type="checkbox" name="garagemap" value="1"> Mapping Garage<br>';
						
						  }
						     if(intval($pi["wallmap"]) == 1)
						  {
						    echo '<input type="checkbox" name="wallmap" value="1"> Mapping de sécurité<br>';
						
						  }
					 }
					 else if($type == 6 || $type == 7)
					 {
					    if(intval($pi["depotmap"]) == 1)
						  {
						    echo '<input type="checkbox" name="depotmap" value="1"> Mapping Depôt<br>';
						  }
					 }
				
				$last = intval($pid) - 1;
				if($pid == 1)
				 {
				    $last = 1;
				 }
				 $result = mysql_query('SELECT pid FROM products ORDER BY pid DESC LIMIT 1;');
				 $maxpid =0; 
if (mysql_num_rows($result) > 0) {
   $last_pid = mysql_fetch_row($result);
   $maxpid = $last_pid[0]; //Here it is
}
				 $next = intval($pid) + 1;
				 if($pid == $maxpid)
				 {
				 $next = $maxpid;
				 }
				
				?>	
				
				
				
				
                   
						<div class="others-bottom">
                            <input class="btn btn-prev" type="submit" name="add" value="Acheter">
							<input type="hidden" name="item" value="<?php  echo $pi["name"]; ?>" />
							<input type="hidden" name="price" value="<?php  echo $pi["prix"]; ?>" />
										<input type="hidden" name="pid" value="<?php  echo $pi["pid"]; ?>" />
                          </div>
                          <div class="control-navigation">
                            <a class="btn btn-prev" href="./item.php?pid=<?php  echo $last;?>">Produit prècèdent</a>
                            <a class="btn btn-next" href="./item.php?pid=<?php  echo $next;?>">Produit suivant</a>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
         <!-- Section Related Products-->
          </div>
          <!--end-col-main-->
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