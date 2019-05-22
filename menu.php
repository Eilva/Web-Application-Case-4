<!doctype html>
<html lang="en">
<head>
<title>JavaJam Coffee House - Menu</title>

<!--<script type ="text/javascript" src="menu2.js"></script>-->
<meta charset="utf-8">
<link rel="stylesheet" href="styles.css">
  <script type ="text/javascript"  src="cost.js" />
  <script type ="text/javascript"  src="menu.js" /></script>
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

input[type="text"]{
  border: 0;
  width: 50px;
  display:inline-block;
}

 </style>

<body>
<div id="wrapper">
  <header>
  </header>

 <div id="leftcolumn">
  <nav>
    <ul type="none" >
      <li><a href="home.html">Home</a></li>
      <li><a href="menu.html">Menu</a></li>
      <li><a href="music.html">Music</a></li>
      <li><a href="jobs.html">Jobs</a></li>
	</ul>
  </nav>
</div>
<div id="centercolumn">
 <div class="content">
  <h2>Coffee at JavaJam</h2>
  <form  action="QtyUpdate.php" method="post">
  <table id="customOrder" border ="0"> <!--No Border-->
    <tr></tr>
    <tr>
      <td></td>
      <td></td>
      <td><font size="4">Quantity</font></td>
      <td><font size="4">Subtotal($)</font></td>
    </tr>
	<tr>
	<td><strong>Just Java</strong></td>
	<td><font size="4">Regular house blend , decaffeinated coffee, or flavor of the day.<br>
	Endless Cup </font><input id="javaPrice" name="javaname"  type="text" value=" <?php echo $prices[0] ?>" readonly></td>
   <td>   <input id="cutomJavaQuan" class="input-table" type="number" min="0"  name ="cutomJavaQuan" value="0" size= 10></td>
   <td>   <input id="cutomJavaSubTotal" class="input-table" type="number" value="0.00" readonly></td>
  </tr>
	<tr>
	<td><strong>Cafe au Lait</strong></td>
	<td><font size="4">House blended coffee infused into a smooth , steamed milk.<br>
  <input type = "radio" name = "cafe" value = "SingleCafe" checked/>Single
  <input id="cafePrice1"name="cafe1name" type="text" value=" <?php echo $prices[1] ?>" readonly><br>
  <input type = "radio" name = "cafe" value = "DoubleCafe"/>Double
  <input id="cafePrice2" name="cafe2name" type="text" value=" <?php echo $prices[2] ?>" readonly></td>
    <td> <input id = "cutomCafeQuan" class="input-table" type="number" name ="cutomCafeQuan"  min="0" value="0"> </td>
    <td> <input id = "cutomCafeSubTotal" class="input-table" type="number" value="0.00" readonly></td>
	</tr>
	<tr>
	<td><strong>Iced Cappuccino</strong></td>
	<td><font size="4">Sweetened espresso blended with icy-cold milk and served in a chilled glass.<br>
	<input type = "radio" name = "cappuccino" value = "SingleCappu" checked/>Single
  <input id="capPrice1" name="cap1name" type="text" value=" <?php echo $prices[3] ?>" readonly> <br>
  <input type = "radio" name = "cappuccino" value = "DoubleCappu"/>Double
  <input id="capPrice2"name="cap2name"  type="text" value=" <?php echo $prices[4] ?>" readonly></font>
    </td>
  <td> <input id="cutomCappQuan" class="input-table" type="number" min="0"   name ="cutomCappQuan" value="0"></td>
  <td> <input id="cutomtCappSubTotal" class="input-table" type="number" value="0.00" readonly></td>
	</tr>
  <tr>
    <td align ="center"><input type="submit"  name ="submit" value="Update Quantity"></td>
    <td></td>
    <td><font size="4">Total($)</font></td>
    <td><input id="cutomTotal" class="input-total" type="number" value="0.00" readonly></td>
  </tr>
  </table>
</form>
  <script type = "text/javascript"  src = "menur.js" ></script>
 </div>
</div>

<footer>
<small><i>Copyright &copy; 2014 JavaJam Coffee House <br>
<a href= "mailto: wu@weijie.com">wu@weijie.com</a></i></small>
</footer>
 </body>
</html>
