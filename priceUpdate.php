<?php
echo var_dump($_POST);
$updateJavaQuan=$_POST['updateJavaQuan'];
$updateSingleCafeQuan=$_POST['updateSingleCafeQuan'];
$updateDoubleCafeQuan=$_POST['updateDoubleCafeQuan'];
$updateSingleCappQuan=$_POST['updateSingleCappQuan'];
$updateDoubleCappQuan=$_POST['updateDoubleCappQuan'];

 echo "<p>Price updated at ".date('H:i, jS F Y')."</p>";
 if (!$updateJavaQuan||!$updateSingleCafeQuan||!$updateDoubleCafeQuan||!$updateSingleCappQuan||!$updateDoubleCafeQuan||!$updateDoubleCappQuan){
      echo"You have not entered a price. Please enter!";
   exit;
 }
 if (!get_magic_quotes_gpc()) {
  $updateJavaQuan= doubleval($updateJavaQuan);
  $updateSingleCafeQuan= doubleval($updateSingleCafeQuan);
  $updateDoubleCafeQuan= doubleval($updateDoubleCafeQuan);
  $updateSingleCappQuan= doubleval($updateSingleCappQuan);
  $updateDoubleCappQuan= doubleval($updateDoubleCappQuan);
  }
  @$db = new mysqli('localhost', 'f37ee', 'f37ee', 'f37ee');

  if (mysqli_connect_errno()) {
     echo 'Error: Could not connect to database.  Please try again later.';
     exit;
  }

if (isset($_POST ['javachkb']) && $_POST ['javachkb']=='1'){
  if ($updateJavaQuan!=NULL){
      $updateJavaQuan= doubleval($updateJavaQuan);
      $query =" UPDATE  `coffee` SET  `price` = '".$updateJavaQuan."' WHERE  `name` = 'Java'";
      $result = $db->query($query);
    }
  }

if (isset($_POST ['cafechkb']) && $_POST ['cafechkb']=='1'){
  if($updateSingleCafeQuan!=NULL){
  $updateSingleCafeQuan= doubleval($updateSingleCafeQuan);
  $query =" UPDATE  `coffee` SET  `price` = '".$updateSingleCafeQuan."' WHERE  `name` = 'CafeSingle'";
  $result=$db->query($query);
  }
  if($updateDoubleCafeQuan!=NULL){
   $updateDoubleCafeQuan= doubleval($updateDoubleCafeQuan);
   $query =" UPDATE  `coffee` SET  `price` = '".$updateDoubleCafeQuan."' WHERE  `name` = 'CafeDouble' ";
   $result=$db->query($query);
  }
}

if (isset($_POST ['capchkb']) &&$_POST ['capchkb']=='1'){
  if($updateSingleCappQuan!=NULL){
   $updateSingleCappQuan= doubleval($updateSingleCappQuan);
   $query =" UPDATE  `coffee` SET  `price` = '".$updateSingleCappQuan."' WHERE  `name` ='CapSingle' ";
   $result=$db->query($query);
  }
  if($updateDoubleCappQuan!=NULL){
  $updateDoubleCappQuan= doubleval($updateDoubleCappQuan);
   $query =" UPDATE  `coffee` SET  `price` = '".$updateDoubleCappQuan."' WHERE  `name` ='CapDouble' ";
   $result=$db->query($query);
  }
}
  $db->close();
header('location: price.php');
