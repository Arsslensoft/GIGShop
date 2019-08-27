<?php
include "tools.php";
$con = Connect();

if(!isset($_GET["name"]))
{
 header('Location: index.php');   
}


$nam = $_GET["name"];
$page = 1;
if(isset($_GET["page"]))
{
  $page = intval($_GET["page"]);
}
$rescount =FindCount($nam);

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
  
  <title>Boutique Mactown - Recherche</title>
  
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
  
  <div id="content-wrapper-parent">
    <div id="content-wrapper">
      <div id="content" class="container clearfix">
        <div class="group_breadcrumb">
          <div id="breadcrumb" class="row breadcrumb">
            <div class="col-md-24">
              <a href="./index.php" class="homepage-link" title="Back to the frontpage">Products</a>
              <i class="angle-right">&gt;</i>
              <span class="page-title">Recherche</span>
            </div>
          </div>
        </div>
        <section class="row content">
          <!--sidebar-->
          <div id="prodcoll" class="col-md-5 sidebar hidden-xs">
            <div class="sb-wrapper">
              <div class="sb-title box featured_game">Produits Vedette</div>
              <ul class="featured-products sb-content list-unstyled list-styled">
           	  <?php 
	  

$res =GetMostPopular();
while($row = mysql_fetch_array($res))
{
$pics = mysql_query("SELECT * FROM pics WHERE pid='".$row["pid"]."'");
$picr = mysql_fetch_array($pics);
$typ = intval($row["type"]);
$re = GetProductInfo($row["pid"],$typ);

	echo ' <li>                  <div class="row">                    <div class="col-md-8 row-left unpadding-right">                      <a href="item.php?pid='.$row["pid"].'" class="product-link">';
echo '<img src="'.$picr["img"].'" width="60" height="85" class="image-fly img-responsive" >                   </a>                    </div>                    <div class="col-md-16 row-right parent-fly">                      <div class="product-wrapper">';

                       echo '<div class="fprod-title">                         <a href="item.php?pid='.$row["pid"].'" >'.$row["name"].'</a>                       </div>';
                      echo  '<a class="col-title" href="products.php?type='.$row["type"].'"> ';
					  echo  GetTypeName($row["type"]);
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
          <div id="col-main" class="collection collection-page col-content col-md-19">
            <div id="collection-slider-wrapper">
              <div id="collect-slider" class="responsive-slider hideControls">
                <div class="slides" data-group="slides">
                  <ul>
                    <li>
                      <div class="slide-body" data-group="slide">
                        <a href="#">
                          <img src="./screen/demos/demo_banner_920x155.png" alt="">
                        </a>
                      </div>
                    </li>
                    <li>
                      <div class="slide-body" data-group="slide">
                        <a href="#">
                          <img src="./screen/demos/demo_banner_920x155.png" alt="">
                        </a>
                      </div>
                    </li>
                    <li>
                      <div class="slide-body" data-group="slide">
                        <a href="#">
                          <img src="./screen/demos/demo_banner_920x155.png" alt="">
                        </a>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="pages">
                  <a class="page active" href="javascript:" data-jump-to="1">1</a>
                  <a class="page" href="javascript:" data-jump-to="2">2</a>
                  <a class="page" href="javascript:" data-jump-to="3">3</a>
                </div>
              </div>
            </div>
            
            <div id="page-header">
              <div class="row text-center">
                <h4 id="page-title">Résultats pour "<?php echo $nam; ?>"</h4>
                <div class="col-md-22 col-md-push-1">
                
                </div>
              </div>
            </div>
            
            <div id="options" class="container-nav clearfix">
              <p class="collect-option">Options</p>
              <ul class="list-inline text-right">
                <li>Affichage</li>
                <li class="grid_list hidden-phone">
                  <ul class="unstyled unmargin-bottom option-set" data-option-key="layoutMode">
                    <li data-option-value="fitRows" id="goGrid" class="goAction btooltip active" data-toggle="tooltip" data-placement="top" title="" data-original-title="Grille">
                      <i class="fa fa-th"></i>
                    </li>
                    <li data-option-value="straightDown" id="goList" class="goAction btooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Liste">
                      <i class="fa fa-th-list"></i>
                    </li>
                  </ul>
                </li>
                <li class="sortBy">
                  <strong class="title-3">Trier Par</strong>
                  <div id="sortButtonWarper" class="dropdown-toggle" data-toggle="dropdown">
                    <button id="sortButton">
                      <span class="name">Originale</span><i class="fa fa-caret-down"></i>
                    </button>
                    <i class="sub-dropdown1"></i>
                    <i class="sub-dropdown"></i>
                  </div>
                  <div id="sortBox" class="control-container dropdown-menu">
                    <ul id="sortForm" class="list-unstyled option-set text-left list-styled" data-option-key="sortBy">
                      <li class="sort" data-option-value="name" data-order="asc">Nom: A à Z</li>
                      <li class="sort" data-option-value="name" data-order="desc">Nom: Z à A</li>
                      <li class="sort" data-option-value="price" data-order="asc">Prix: Haut à Bas</li>
                      <li class="sort" data-option-value="price" data-order="desc">Prix: Bas à Haut</li>
                      <li class="sort" data-option-value="random">Alèatoire</li>
                      <li class="sort selected" data-option-value="original-order">Originale</li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
            
            <div id="sandBox-wrapper">
              <ul id="sandBox" class="list-unstyled row isotope">
  
  <?php

$res =FindProduct($nam,$page);
while($row = mysql_fetch_array($res))
{
$picr = mysql_query("SELECT * FROM pics WHERE pid='".$row["pid"]."'");
$pic = mysql_fetch_array($picr);
$typ = intval($row["type"]);
$re = GetProductInfo($row["pid"],$typ);


echo '<li class="element first" data-alpha="'.$row["name"].'" data-price="'.$row["prix"].'">';
echo '                  <form action="/cart/add" method="post" enctype="multipart/form-data">                <ul class="row-container list-unstyled clearfix">                      <li class="row-left">';
                     echo '   <a href="./item.php?pid='.$row["pid"].'" class="hoverBorder">                          <span class="hoverBorderWrapper">';
                          echo '  <img src="'.$pic["img"].'" width="152" height="216"> </span>        <div class="product-ajax-cart hidden-phone">                            <span class="overlay_mask"></span>                                                  </div>   </a></li>';
                         
                    echo ' <li class="row-right text-left parent-fly animMix"> <div class="group_info">';
                     echo '<a class="title-5" href="./item.php?pid='.$row["pid"].'">'.$row["name"].'</a>';
                     echo '     <br> <a class="col-title" href="">'. $re["category"].'                         </a>                          <p class="hidden-list">';
                      echo  $row["desc"];
                       echo '  </p>                          <div class="product-price">                            <span class="price">                              <span class="money">'.$row["prix"].'</span>';
                       echo '     </span>                          </div>           <a class="btn btn-prev" href="./item.php?pid='.$row["pid"].'">Acheter</a>                      </div>                      </li>                    </ul>                  </form>                </li>';


				

          
                        
}

?>
	
	
			 </ul>
            </div>
            
            <div class="pagination title-3 clearfix">
              <div class="col-md-8 text-left"><?php echo $rescount;  ?> PRODUITS TROUVÉ </div>
              <ul class="col-md-8 list-inline top-paginate">
                <li>PAGES</li>
                <li class="prev"><a class="disabled" href="javascript:;">Previous</a></li>
 
				<?php
				$maxpages = intval($rescount / 10); 
				if(($maxpages * 10) < $rescount)
				   {
				   $maxpages = $maxpages + 1;
				   }
				   
				   for ($i = 1; $i <= $maxpages; $i++)
				   {
				   if($i == $page)
				   {
				   echo  '  <li class="active"><a href="javascript:;">'.$i.'</a></li>';
				   }
				   else{
				   echo '      <li><a href="search.php?name='.$nam.'&page='.$i.'">'.$i.'</a></li>';
				   }
				   
				   }
				   
				
				?>
              
<?php
$shown = $page * 10;
if(($rescount - $shown ) >= 0)
{
$pager = $page + 1;
echo '			  <li class="next"><a href="products.php?name='.$nam.'&page='.$pager.'">Next Page</a></li>';
}			  
			  ?>
              </ul>
              <div class="col-md-8 text-right" id="scroll-to-top-collect"><span>TOP</span></div>
            </div>
            
          </div>
          <script type="text/javascript">
            
            $(document).ready(function() {
                imagesLoaded( '#sandBox', function() {
                  var $container = $('#sandBox');
                  
                  $container.isotope({
                    itemSelector : '.element',
                    layoutMode : 'fitRows',
                    getSortData : {
                      name : function( $elem ) {
                        return $elem.attr('data-alpha');
                      },
                      price : function( $elem ) {
                        return $elem.attr('data-price');
                      }
                    }
                  });
                  
                  
                  var $optionSets = $('#options .option-set'),
                      $optionLinks = $optionSets.find('li');
                  
                  $optionLinks.click(function(){
                    var $this = $(this);
                    // don't proceed if already selected
                    if ( $this.hasClass('selected') ) {
                      return false;
                    }
                    
                    var $direction = $(this).attr('data-order');
                    var key1 = 'sortAscending',
                        value1 = true;
                    switch($direction){
                      case 'asc':
                        value1 = true;
                        break;
                        
                      case 'desc':
                        value1 = false;
                        break;
                    }
                    
                    var $optionSet = $this.parents('.option-set');
                    $optionSet.find('.selected').removeClass('selected');
                    $this.addClass('selected');
                    
                    // make option object dynamically, i.e. { filter: '.my-filter-class' }
                    var options = {},
                        key = $optionSet.attr('data-option-key'),
                        value = $this.attr('data-option-value');
                    // parse 'false' as false boolean
                    value = value === 'false' ? false : value;
                    options[ key ] = value;
                    options[ key1 ] = value1;
                    if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
                      // changes in layout modes need extra logic
                      changeLayoutMode( $this, options )
                    } else {
                      // otherwise, apply new options
                      $container.isotope( options );
                    }
                    
                    return false;
                  });
                });
            });
          </script>
          
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
  <script src="./assets/javascripts/jquery.isotope.min.js" type="text/javascript"></script>
  <script src="./assets/javascripts/application.js" type="text/javascript"></script>
  <script src="./assets/javascripts/cs.script.js" type="text/javascript"></script>
</body>
</html>
<?php
CloseCon($con);

?>