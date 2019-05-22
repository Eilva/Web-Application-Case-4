<?php
echo var_dump($_POST);
$cutomJavaQuan=$_POST['cutomJavaQuan'];
$cutomCafeQuan=$_POST['cutomCafeQuan'];
$cutomCappQuan=$_POST['cutomCappQuan'];

 if (!$cutomJavaQuan||!$cutomCafeQuan||!$cutomCappQuan){
   echo"You have not selected a price. Please enter!";
exit;
 }

 if (!get_magic_quotes_gpc()) {
  $cutomJavaQuan= doubleval($cutomJavaQuan);
  $cutomCafeQuan= doubleval($cutomCafeQuan);
  $cutomCappQuan= doubleval($cutomCappQuan);
  }

  @$db = new mysqli('localhost', 'f37ee', 'f37ee', 'f37ee');

  if (mysqli_connect_errno()) {
     echo 'Error: Could not connect to database. Please try again later.';
     exit;
  }
  if($cutomJavaQuan!=0){
    $query2 = "SELECT `qty` FROM `coffee` WHERE name = 'Java'";
    $result = $db->query($query2);
    $row = $result->fetch_assoc();
    $qty1 = stripslashes($row['qty']);

    $query3 = "SELECT `price` FROM `coffee` WHERE name = 'Java'";
    $result = $db->query($query3);
    $row = $result->fetch_assoc();
    $javaPrice = stripslashes($row['price']);
    $totaljava=$qty1+ $cutomJavaQuan;
    $query =" UPDATE  `coffee` SET  `qty` = '".$totaljava."',`sales`='".$javaPrice*$totaljava."' WHERE  `name` = 'Java'";
    $result = $db->query($query);
  }

  if($cutomCafeQuan!=0){
    if ( $_POST ['cafe']=='SingleCafe'){
      $query2 = "SELECT `qty` FROM `coffee` WHERE name = 'CafeSingle'";
      $result = $db->query($query2);
      $row = $result->fetch_assoc();
      $qty2 = stripslashes($row['qty']);

      $query3 = "SELECT `price` FROM `coffee` WHERE name = 'CafeSingle'";
      $result = $db->query($query3);
      $row = $result->fetch_assoc();
      $cafePrice1 = stripslashes($row['price']);

      $totalcafe1=$cutomCafeQuan+$qty2;
      $query =" UPDATE  `coffee` SET  `qty` = '".$totalcafe1."',`sales`='".$cafePrice1*$totalcafe1."' WHERE  `name` = 'CafeSingle'";
      $result = $db->query($query);
        }
  }
   if($cutomCafeQuan!=0){
     if( $_POST ['cafe']=='DoubleCafe'){
       $query2 = "SELECT `qty` FROM `coffee` WHERE name = 'CafeDouble'";
       $result = $db->query($query2);
       $row = $result->fetch_assoc();
       $qty3 = stripslashes($row['qty']);

       $query3 = "SELECT `price` FROM `coffee` WHERE name = 'CafeDouble'";
       $result = $db->query($query3);
       $row = $result->fetch_assoc();
       $cafePrice2 = stripslashes($row['price']);

       $totalcafe2=$cutomCafeQuan+$qty3;
       $query =" UPDATE  `coffee` SET  `qty` = '".$totalcafe2."',`sales`='".$cafePrice2*$totalcafe2."' WHERE  `name` = 'CafeDouble'";
       $result = $db->query($query);  }
   }
  if($cutomCappQuan!=0){
    if ( $_POST ['cappuccino']=='SingleCappu'){
     $query2 = "SELECT `qty` FROM `coffee` WHERE name = 'CapSingle'";
     $result = $db->query($query2);
     $row = $result->fetch_assoc();
     $qty4 = stripslashes($row['qty']);

     $query3 = "SELECT `price` FROM `coffee` WHERE name = 'CapSingle'";
     $result = $db->query($query3);
     $row = $result->fetch_assoc();
     $capPrice1 = stripslashes($row['price']);

     $totalcap1=$cutomCappQuan+$qty4;
     $query =" UPDATE  `coffee` SET  `qty` = '".$totalcap1."',`sales`='".$capPrice1*$totalcap1."' WHERE  `name` = 'CapSingle'";
     $result = $db->query($query);
      }
    }

if ($cutomCappQuan!=0){
  if( $_POST ['cappuccino']=='DoubleCappu'){
    $query2 = "SELECT `qty` FROM `coffee` WHERE name = 'CapDouble'";
    $result = $db->query($query2);
    $row = $result->fetch_assoc();
    $qty5 = stripslashes($row['qty']);

    $query3 = "SELECT `price` FROM `coffee` WHERE name = 'CapDouble'";
    $result = $db->query($query3);
    $row = $result->fetch_assoc();
    $capPrice2 = stripslashes($row['price']);

    $totalcap2=$cutomCappQuan+$qty5;
    $query =" UPDATE  `coffee` SET  `qty` = '".$capPrice2."',`sales`='".$capPrice2*$totalcap2."' WHERE  `name` = 'CapDouble'";
    $result = $db->query($query);
  }
}

  $db->close();
 ?>
