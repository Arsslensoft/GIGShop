<?php

function Connect($auth)
{
include "config.php";
$con = null;
if($auth == "TRANS_AUTH")
{
$con = mysql_connect("$db_host","$db_user","$db_pass")
 or die("Impossible de se connecter : " . mysql_error());

 mysql_select_db("$db_name", $con) or die('Erreur BD.');

}
return $con;
}



function SendFriendGIGP($source,$secret ,$dst, $amount, $auth)
{
$con = Connect($auth);
  // Transfert Vers un amis -3 %
  if($auth == "TRANS_AUTH" && $amount > 0)
	{
$money_src = 0;
$money_dst = 0;
      $result = mysql_query("SELECT money FROM gig_bank WHERE username='$source' AND secret='$secret'");

while($row = mysql_fetch_array($result))
  {
  $money_src =  intval($row['money']); 
   
  }
    $result = mysql_query("SELECT money FROM gig_bank WHERE username='$dst'");

while($row = mysql_fetch_array($result))
  {
  $money_dst =  intval($row['money']); 
   
  }

       if($money_src > $amount)
           {
             // Transfer
                $money_dst =   $money_dst + ($amount - (($amount / 100) * 3));
                $money_src =   $money_src - $amount;
                mysql_query("UPDATE  gig_bank SET money ='$money_dst' WHERE username='$dst'");   
                mysql_query("UPDATE  gig_bank SET money ='$money_src' WHERE username='$source'");   
               

 $today = date("Y-m-d H:i:s"); 
         
     mysql_query("INSERT INTO gig_bank_log Set sender='$source', receiver='$dst', amount='$amount', dt='$today'");   
Disconnect($auth, $con);
                return 2; 

           }
       else
          {
             // solde insuffisant
Disconnect($auth, $con);
             return 1;
          }
        }
   else
        {
         // Unauthorized
Disconnect($auth, $con);
          return 0;
        }
      
}

function ConvertGIGP($source, $secret,$gtauser, $amount, $auth)
{
$con = Connect($auth);
// Convertissement vers monaie GTA
    if($auth == "TRANS_AUTH")
	{
$money_src = 0;
$money_dst= 0;
      $result = mysql_query("SELECT money FROM gig_bank WHERE username='$source'  AND secret='$secret'");

while($row = mysql_fetch_array($result))
  {
  $money_src =  intval($row['money']); 
  }

    $result = mysql_query("SELECT Money FROM srp_players_stats WHERE Name='$gtauser'");

while($row = mysql_fetch_array($result))
  {
  $money_dst =  intval($row['Money']); 
  }

       if($money_src > $amount)
           {
             // Transfer
                $money_dst =   $money_dst + $amount;
                $money_src =   $money_src - $amount;
                mysql_query("UPDATE  srp_players_stats SET Money ='$money_dst' WHERE Name='$gtauser'");   
                mysql_query("UPDATE  gig_bank SET money ='$money_src' WHERE username='$source'");   
Disconnect($auth, $con);
                return 2; 
           }
       else
          {
             // solde insuffisant
Disconnect($auth, $con);
             return 1;
          }
        }
   else
        {
Disconnect($auth, $con);
          return 0;
        }
}

function BuyGIGP($source,$amount, $auth)
{
$con = Connect($auth);
// Achat
  if($auth == "TRANS_AUTH")
	{
$money_src = 0;
      $result = mysql_query("SELECT money FROM gig_bank WHERE username='$source'");

while($row = mysql_fetch_array($result))
  {
  $money_src =  intval($row['money']); 
  }

                $money_src =   $money_src + $amount;
                mysql_query("UPDATE  gig_bank SET money ='$money_src' WHERE username='$source'");   
Disconnect($auth, $con);
                return 1; 

        }
   else
        {
Disconnect($auth, $con);
          return 0;
        }

}

function Disconnect($auth, $con)
{

if($auth == "TRANS_AUTH")
{
mysql_close($con);
return 1;
        }
   else
        {
          return 0;
        }


}

function RegisterBank($username, $secret, $password, $auth)
{

if($auth == "TRANS_AUTH")
{
$con = Connect($auth);
    $result = mysql_query("SELECT money FROM gig_bank WHERE username='$username'");
$exist = 0;
while($row = mysql_fetch_array($result))
  {
    $exist = 1;
break;
  }
if($exist == 0)
{
     mysql_query("INSERT INTO gig_bank Set username='$username', secret='$secret', money=0, password='$password'");   
Disconnect($auth, $con);
return 1;
}
else
{
Disconnect($auth, $con);
return 0;
}

Disconnect($auth, $con);
return 0;
}
else
{
return 0;
}

}
function IsMember($username, $auth)
{
if($auth == "TRANS_AUTH")
{
$con = Connect($auth);
    $result = mysql_query("SELECT money FROM gig_bank WHERE username='$username'");
$exist = 0;
while($row = mysql_fetch_array($result))
  {
    $exist = 1;
break;
  }

Disconnect($auth, $con);
return $exist;

}
else
{
return 0;
}

}


function GetAmount($username, $password, $auth)
{

if($auth == "TRANS_AUTH")
{
$con = Connect($auth);
    $result = mysql_query("SELECT money FROM gig_bank WHERE username='$username' AND password='$password'");
$exist = 0;
while($row = mysql_fetch_array($result))
  {
    $exist = $row["money"];
  }

Disconnect($auth, $con);
return $exist;
}
else
{
return 0;
}

}

function GetSystemAmount($username, $auth)
{

if($auth == "TRANS_AUTH")
{
$con = Connect($auth);
    $result = mysql_query("SELECT money FROM gig_bank WHERE username='$username'");
$exist = 0;
while($row = mysql_fetch_array($result))
  {
    $exist = $row["money"];
  }

Disconnect($auth, $con);
return $exist;
}
else
{
return 0;
}

}

?>