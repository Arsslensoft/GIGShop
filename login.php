<?php
function SetLogout()
{
setcookie("ShopUser", "unknown", time()-7200);
setcookie("ShopMoney", "unknown", time()-7200);
setcookie("ShopUN", "unknown", time()-7200);
}

function SetLogin($name,$money, $un)
{
setcookie("ShopUser", $name, time()+7200);
setcookie("ShopMoney", $money, time()+7200);
setcookie("ShopUN", $un, time()+7200);
}
function GetInfo(&$name, &$money)
{
if(isset($_COOKIE["ShopUser"]))
{
$name = $_COOKIE["ShopUser"];
$money = intval($_COOKIE["ShopMoney"]);
return 1;
}
else return 0;
}

$name ="";
$money =0;

if(isset($_GET["username"]) && isset($_GET["password"]))
{
$passmd5 = md5($_GET["password"]);
include "config.php";
$username = $_GET["username"];
$con = mysql_connect("$db_host","$db_user","$db_pass")
 or die("Impossible de se connecter : " . mysql_error());

 mysql_select_db("$bankdb", $con) or die('Erreur BD.');

$result = mysql_query("SELECT name FROM GUSERS WHERE username='$username' AND password='$passmd5'");
while($row = mysql_fetch_array($result))
{
  $name = $row["name"];
 $resulta = mysql_query("SELECT money FROM gig_bank WHERE username='$username'");
while($rowa = mysql_fetch_array($resulta))
{
  $money = intval($rowa["money"]);
}
}

mysql_close($con);

if(strlen($name) > 0)
{
SetLogin($name,$money, $username);
  header('Location: index.php');   
}


}
 if(isset($_GET["logout"]))
{
SetLogout();
  header('Location: index.php');   
}


?>