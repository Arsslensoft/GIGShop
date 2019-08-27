<!doctype html>
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <link rel="canonical" href="/" />
  
  <meta name="description" content="" />
  
  <title>Boutique Mactown - Validation d'achat HCP</title>
  
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
                  <a href="./buy/buy_gigp.php">
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
              <a href="/" class="homepage-link" title="Back to the frontpage">Home</a>
              <i class="angle-right">&gt;</i>
              <span class="page-title">Achat</span>
			     <i class="angle-right">&gt;</i>
              <span class="page-title">Validation HCP</span>
            </div>
          </div>
        </div>
        <section class="row content">
          <div id="col-main" class="col-md-24 contact-page clearfix">
            <div class="clearfix">
              <div class="col-md-19 col-md-push-2">
                <h4 id="page-title" class="large">Achat</h4>
                <div class="contact-content text-center">
                  <div>Veuillez bien lire les termes et conditions avant d'acheter n'importe quel produit.</div>
               
                </div>
              </div>
            </div>
            <div class="clearfix">
            
              <div class="col-md-12">
          
<div align="center">


<?php
function kConnect()
{
include "config.php";
$con = null;

$con = mysql_connect("$db_host","$db_user","$db_pass")
 or die("Impossible de se connecter : " . mysql_error());

 mysql_select_db("$db_name");



return $con;
}
function kDisconnect($con)
{
mysql_close($con);
}

function GenerateSID($length = 20) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $characters = str_shuffle($characters);
    return substr($characters, 0, $length);
}


function Checkout()
{

if(isset($_POST["terms"]))
{
if(isset($_POST["username"]) && isset($_POST["gtaun"]) && isset($_POST["nom"]) && isset($_POST["gigitem"]) && isset($_POST["email"]) && isset($_POST["cemail"]))
{
 $username = $_POST["username"];
 $gtaun = $_POST["gtaun"];
 $nom = $_POST["nom"];
 $packa = $_POST["gigitem"];
 $packprice = intval($_POST["gigitemprice"]);
 $email = $_POST["email"];
 $cemail = $_POST["cemail"];

include "BANK.php";

if(IsMember($username, "TRANS_AUTH") == 1)
{
$solde = GetSystemAmount($username, "TRANS_AUTH");
if($solde >= intval($packprice))
{
     $con = KConnect();
	 
$sid = GenerateSID(20);
date_default_timezone_set('Europe/Belgrade'); 
//CheckPrice($pid, $packprice);


 $today = date("Y-m-d H:i:s"); 
$ppricegig = intval($packprice);
  mysql_query("INSERT INTO shop.gig_hcp_cmd(sid, username, gtaun, email, cemail, timestamp, pack, payment, name, price) VALUES ('$sid','$username','$gtaun','$email','$cemail','$today','".$packa."','Starpass','$nom', $ppricegig)");   
   KDisconnect($con);

echo "<span style='color:green'> Votre commande a ètè validè avec succès. $packa </span><br /> <span style='color:blue'>Note! : Cette commande sera traitè dans 1h à 24h. <br />Votre ID : $sid <br/> .</span><br /><span style='color:orange'>Attention! : Cette commande sera traitè si et seulement si votre solde PG est suffisant.</span>";

}
else
{
echo "<span style='color:red'>Votre solde PG est insuffisant.</span>";
}

}
else
{
echo "<span style='color:red'>Vous n'êtes pas un membre de la communautè GIG.</span>";
}

}
else
{
echo "<span style='color:red'>Vous n'avez pas remplis tous les champs.</span>";
}

}
else
{
echo "<span style='color:red'>Vous n'avez pas accèptè nos termes et conditions.</span>";
}


}



  require_once('recaptchalib.php');
  $privatekey = "6LfLBewSAAAAAPxLeDz4dzQrDCuZx5FbwkNX0jvN";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
  } else {
  Checkout();
    
  
}

  ?>



</div>
				
				
				
              </div>
            </div>
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
  <script src="./assets/javascripts/jquery.isotope.min.js" type="text/javascript"></script>
  <script src="./assets/javascripts/application.js" type="text/javascript"></script>
  <script src="./assets/javascripts/cs.script.js" type="text/javascript"></script>
</body>
</html>
