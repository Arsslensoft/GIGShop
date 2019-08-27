<?php
function Connect()
{
include "config.php";
$con = mysql_connect("$db_host","$db_user","$db_pass")
 or die("Impossible de se connecter : " . mysql_error());

 mysql_select_db("$bankdb", $con) or die('Erreur BD.');
 
 return $con;
}

function CloseCon($con)
{
mysql_close($con);
}

// Vehicles
function GetAllVehciles($page, $type)
{
$endp = $page * 10;
$start =$endp - 10;

if($type == 0)
   return mysql_query("SELECT * FROM products P, vehicles V WHERE (V.pid = P.pid) AND P.qte > 0   LIMIT $start,$endp;");
else
  return mysql_query("SELECT * FROM products P, vehicles V WHERE (V.pid = P.pid) AND P.type='$type' AND P.qte > 0  LIMIT $start,$endp;");
}

function GetVehicleCount($type)
{
$res = mysql_query("SELECT * FROM products P, vehicles V WHERE (V.pid = P.pid) AND P.type='$type' AND P.qte > 0 ;");
if($type == "N")
   $res = mysql_query("SELECT * FROM products P, vehicles V WHERE (V.pid = P.pid) AND P.qte > 0;");

  return mysql_num_rows($res);
   
}
function FindCount($name)
{
$res = mysql_query("SELECT DISTINCT * FROM products P WHERE P.name LIKE '%$name%' AND P.qte > 0;");
  return mysql_num_rows($res);
   
}
function FindProduct($name, $page)
{
$endp = $page * 10;
$start =$endp - 10;
return mysql_query("SELECT DISTINCT * FROM products P WHERE P.name LIKE '%$name%' AND P.qte > 0 LIMIT $start, $endp ;");

}

function GetMostPopularVehicles($type)
{
if($type == "N")
return mysql_query("SELECT * FROM products P, vehicles V WHERE (V.pid = P.pid)  AND P.qte > 0  ORDER BY featured DESC LIMIT 6;");
else
return mysql_query("SELECT * FROM products P, vehicles V WHERE (V.pid = P.pid)  AND P.qte > 0   AND P.type='$type' ORDER BY DESC featured LIMIT 6;");
}

function GetMostExpensiveVehicles($type)
{
if($type == "N")
return mysql_query("SELECT * FROM products P, vehicles V WHERE (V.pid = P.pid)  AND P.qte > 0   ORDER BY prix DESC LIMIT 3;");
else
return mysql_query("SELECT * FROM products P, vehicles V WHERE (V.pid = P.pid)  AND P.qte > 0   AND P.type='$type' ORDER BY prix DESC LIMIT 3;");
}






// Houses
function GetAllHouses($page)
{
$endp = $page * 10;
$start =$endp - 10;
  return mysql_query("SELECT * FROM products P, houses H WHERE  (H.pid = P.pid)  AND P.qte > 0   LIMIT $start,$endp;");

}
function GetHouseCount()
{

   $res = mysql_query("SELECT * FROM products P, houses V WHERE (V.pid = P.pid) AND P.qte > 0 ;");

  return mysql_num_rows($res);
   
}
function GetMostPopularHouses()
{
return mysql_query("SELECT * FROM products P, houses H WHERE (H.pid = P.pid)  AND P.qte > 0   ORDER BY featured DESC LIMIT 6;");

}

function GetMostExpensiveHouses()
{
return mysql_query("SELECT * FROM products P, houses H WHERE (H.pid = P.pid)  AND P.qte > 0   ORDER BY prix DESC LIMIT 3;");

}



// Bizz
function GetAllBizz($page, $type)
{
$endp = $page * 10;
$start =$endp - 10;
 $res = mysql_query("SELECT * FROM products P, bizz V WHERE (V.pid = P.pid) AND P.type='$type' AND P.qte > 0;");
if($type == 0)
   $res = mysql_query("SELECT * FROM products P, bizz V WHERE (V.pid = P.pid) AND P.qte > 0;");
   
   return $res;
}
function GetBizzCount($type)
{
$res = mysql_query("SELECT * FROM products P, bizz V WHERE (V.pid = P.pid) AND P.type='$type' AND P.qte > 0;");
if($type == 0)
   $res = mysql_query("SELECT * FROM products P, bizz V WHERE (V.pid = P.pid) AND P.qte > 0;");

  return mysql_num_rows($res);
   
}

function GetMostPopularBizz()
{
return mysql_query("SELECT * FROM products P, bizz B WHERE (B.pid = P.pid)  AND P.qte > 0   ORDER BY featured DESC LIMIT 6;");

}

function GetMostExpensiveBizz()
{
return mysql_query("SELECT * FROM products P, bizz B WHERE (B.pid = P.pid)  AND P.qte > 0   ORDER BY prix DESC LIMIT 3;");

}



// All
function GetProductType($pid)
{
$res = mysql_query("SELECT type FROM products WHERE pid = '$pid';");
$row = mysql_fetch_array($res);
return intval($row["type"]);
}

function GetProductInfo($pid,$type)
{
$table = "vehicles";
if(intval($type) == 5)
  $table = "houses";
else if($type == 6 || $type == 7)
  $table = "bizz";
else if($type == "W")
 $table = "weapons";
//die("SELECT * FROM products P, $table T WHERE (T.pid = P.pid) AND (P.pid = '$pid'); ");
 $res =  mysql_query("SELECT * FROM products P, $table T WHERE (T.pid = P.pid) AND (P.pid = '$pid');");
  return mysql_fetch_array($res);
}

function GetProductPrice($pid)
{
return mysql_query("SELECT prix FROM products WHERE pid = '$pid';");
}

// Set Product
function SetProductRank($pid){
$type = intval(GetProductType($pid));
$table = "vehicles";
if($type ==5)
  $table = "houses";
else if($type == 6 || $type ==7)
  $table = "bizz";
else if($type == 8)
 $table = "weapons";
$res = mysql_query("SELECT * FROM sales WHERE pid = '$pid';");
$saled = mysql_num_rows($res);
$res = mysql_query("SELECT * FROM sales");
 $total = mysql_num_rows($res);
 $rank = intval( ($saled / $total ) * 100);
 $res = mysql_query("UPDATE $table SET featured='$rank' WHERE pid = '$pid';");
 if(mysql_affected_rows($res) >= 1)
    return 1;
  else
   return 0;
 
}
function GetMostPopular()
{
return mysql_query("SELECT * FROM products P WHERE P.qte > 0   ORDER BY prix DESC LIMIT 6;");

}

function SetProductQuantity($pid){
 
 $res = mysql_query("UPDATE products SET qte= qte - 1 WHERE pid = '$pid';");
 if(mysql_affected_rows($res) >= 1)
    return 1;
  else
   return 0;
 
}
function GetTypeName($typ)
{
$type = intval($typ);
if($type == 5)
{
return "Maisons";
}
else if($type == 7)
{
return "Usines";
}
else if($type == 6)
{
return "Business";
}
else if($type == 1)
{
return "Voitures";
}
else if($type ==3)
{
return "Avions";
}
else if($type == 2)
{
return "Bateaux";
}
else{
return "Inconnu";
}

}

function GetCommands($username)
{
return mysql_query("SELECT * FROM gig_item_history WHERE username='$username'");

}
function GetOrders($username)
{
return mysql_query("SELECT * FROM gig_cmd WHERE username='$username'");

}

function GetUserEmail($username)
{
$res = mysql_query("SELECT email FROM gusers WHERE username='$username'");
$row = mysql_fetch_array($res);
return $row["email"];
}

function GetColorPrice($color)
{
$res = mysql_query("SELECT price FROM colors WHERE color='$color'");
$row = mysql_fetch_array($res);
return $row["price"];
}

?>