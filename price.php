<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>JavaJam Coffee House</title>
    <link rel="stylesheet" href="styles.css">
    <style>
    table {
        margin: auto;
      border: 0px solid #eaeaea;
      width: 600px;
      border-spacing:0;
      }
      td, th{
        padding: 5px;
      font-family: Arial, sans-serif;

      }
      tr:nth-of-type(odd) {
        background-color: #DEB887;
      }
      tr:nth-of-type(even) {
        background-color: #FFF8DC;
      }
    table{border-collapse: collapse;}
    table, td, th {border: 3px solid  #FFF8DC;}
    td.itemcenter{text-align:center:}
    .input-table{
     width: 40px;
     display:inline-block;
    }
    </style>
    <script>

function  myfunction1(){
var javachkb = document.getElementById("javachkb");
if (javachkb.checked == true){
  document.getElementById("updateJavaQuan").disabled = false;
}
else{
  document.getElementById("updateJavaQuan").disabled = true;
}
}

function  myfunction2(){
  var cafechkb = document.getElementById("cafechkb");
  if(cafechkb.checked == true){
  document.getElementById("updateSingleCafeQuan").disabled=false;
  document.getElementById("updateDoubleCafeQuan").disabled=false;
}
else{
  document.getElementById("updateSingleCafeQuan").disabled=true;
  document.getElementById("updateDoubleCafeQuan").disabled=true;
}
}

function  myfunction3(){
  var capchkb = document.getElementById("capchkb");
  if(capchkb.checked == true){
  document.getElementById("updateSingleCappQuan").disabled=false;
  document.getElementById("updateDoubleCappQuan").disabled=false;
}
else{
  document.getElementById("updateSingleCappQuan").disabled=true;
  document.getElementById("updateDoubleCappQuan").disabled=true;
}

}
    </script>
  </head>

<?php
@$db = new mysqli('localhost', 'f37ee', 'f37ee', 'f37ee');

if (mysqli_connect_errno()) {
   echo 'Error: Could not connect to database.  Please try again later.';
   exit;
}

$query = "SELECT price FROM coffee";
$result = $db->query($query);
$prices = [];
while ($row = $result->fetch_assoc()) {
  $prices[] = number_format($row['price'], 2);
}
?>

  <body>
    <div id="wrapper">
      <header>
      </header>
     <div id="leftcolumn">
      <nav>
        <ul type="none" >
            <li><a href="">Product Price Update</a></li>
    	</ul>
      </nav>
    </div>
    <div id="centercolumn">
     <div class="content">
      <h2>Update Price</h2>

   <form action="priceUpdate.php" method="post">
   <table id="customOrder" border ="0">
     <tr>Click to update product prices:</tr>
     <tr>
       <td></td>
       <td></td>
       <td></td>
     </tr>
  <tr>
  <td><input type="checkbox"  id="javachkb"  name="javachkb" value="1" onclick="myfunction1()" ><strong>Just Java</strong></td>
  <td><font size="4">Regular house blend , decaffeinated coffee, or flavor of the day.<br>
  Endless Cup </font></td>
  <td><input id="updateJavaQuan" class="input-table" type="text" name ="updateJavaQuan" min="0" value="<?php echo $prices[0] ?>" size= 10 disabled="disabled"></td>
  <td></td>
   </tr>

  <tr>
  <td><input type="checkbox" id="cafechkb" name="cafechkb" value="1" onclick="myfunction2()" ><strong>Cafe au Lait</strong></td>
  <td><font size="4">House blended coffee infused into a smooth , steamed milk.<br>
   Single <br>
   Double </font></td>
  <td> Single <input id = "updateSingleCafeQuan" class="input-table" type="text"  name = "updateSingleCafeQuan" min="0" value="<?php echo $prices[1] ?>" disabled="disabled"></td>
  <td> Double <br> <input id = "updateDoubleCafeQuan" class="input-table" type="text" name="updateDoubleCafeQuan"  value="<?php echo $prices[2] ?>" disabled="disabled" ></td>
   </tr>

  <tr>
  <td><input type="checkbox" id="capchkb" name="capchkb" value="1" onclick="myfunction3()" ><strong>Iced Cappuccino</strong></td>
  <td><font size="4">Sweetened espresso blended with icy-cold milk and served in a chilled glass.<br>
  Single  <br>
  Double  </font></td>
  <td> Single <input id="updateSingleCappQuan" class="input-table"  name ="updateSingleCappQuan" type="text" min="0" value="<?php echo $prices[3] ?>" disabled="disabled"></td>
  <td> Double <br> <input id="updateDoubleCappQuan" class="input-table"  name="updateDoubleCappQuan" type="text" value="<?php echo $prices[4] ?>" disabled="disabled"></td>
  </tr>

   <tr>
     <td></td>
     <td></td>
     <td></td>
     <td align ="center"><input type="submit" value="Update"></td>
   </tr>

   </table>
 </form>
  </div>
 </div>

 <footer>
 <small><i>Copyright &copy; 2018 JavaJam Coffee House <br>
 <a href= "mailto: wu@weijie.com">wu@weijie.com</a></i></small>
 </footer>

  </body>
</html>
