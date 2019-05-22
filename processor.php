<?php
$updateJavaQuan = $_POST['updateJavaQuan'];
$updateSingleCafeQuan = $_POST['updateSingleCafeQuan'];
$updateDoubleCafeQuan = $_POST['updateDoubleCafeQuan'];
$updateSingleCappQuan = $_POST['updateSingleCappQuan'];
$updateDoubleCappQuan = $_POST['updateDoubleCappQuan'];
?>
<html>
<head>
  <title>Product Price Update</title>
</head>
<body>
<h1>Results:</h1>
<?php
echo "<p>Price updated at ".date('H:i, jS F Y')."</p>";
if (!get_magic_quotes_gpc()) {
  $updateJavaQuan= doubleval($updateJavaQuan);
  $updateSingleCafeQuan= doubleval($updateSingleCafeQuan);
  $updateDoubleCafeQuan= doubleval($updateDoubleCafeQuan);
  $updateSingleCappQuan= doubleval($updateSingleCappQuan);
  $updateDoubleCappQuan= doubleval($updateDoubleCappQuan);
}
if (isset($_POST ['javachkb']) && $_POST ['javachkb']=='1'){
  if ($updateJavaQuan!=NULL){
  $updateJavaQuan= doubleval($updateJavaQuan);
  echo "$ ".$updateJavaQuan." is the new price for Just Java<br />";
}

}
if (isset($_POST ['cafechkb']) && $_POST ['cafechkb']=='1'){
  if($updateSingleCafeQuan!=NULL){

    echo "$ ".$updateSingleCafeQuan." is the new price for Cafe au Lait single price <br />";

  }
  if($updateDoubleCafeQuan!=NULL){
    echo "$ ".$updateDoubleCafeQuan." is the new price for Cafe au Lait double price <br />";

  }
}
if (isset($_POST ['capchkb']) &&$_POST ['capchkb']=='1'){
  echo "$ ".$updateSingleCappQuan." is the new price for Iced Cappuccino single price <br />";
  echo "$ ".$updateDoubleCappQuan." is the new price for Iced Cappuccino double price <br />";
}


?>
</body>
</html>
