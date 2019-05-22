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
      td[rowspan] {
         background: #DEB887 !important;
      }
    table{border-collapse: collapse;}
    table, td, th {border: 3px solid  #FFF8DC;}
    td.itemcenter{text-align:center:}
    .input-table{
     width: 40px;
     display:inline-block;
    }

    </style>
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

  $query2="SELECT qty FROM coffee";
  $result = $db->query($query2);
  $qty = [];
  while ($row = $result->fetch_assoc()) {
    $qty[] =$row['qty'];
  }
  $query3="SELECT sales FROM coffee";
  $result = $db->query($query3);
  $sales = [];
  while ($row = $result->fetch_assoc()) {
  $sales[] =number_format($row['sales'], 2);
  }

 $max= max($sales[0],$sales[1],$sales[2],$sales[3],$sales[4]);

 echo "Today highest sales amount is $max";
 $query4="SELECT * FROM `coffee` WHERE `sales`='".$max."' ";
 $result = $db->query($query4);
 $num_results = $result->num_rows;
 for ($i=0; $i <$num_results; $i++) {
    $row = $result->fetch_assoc();
    echo "</strong><br />Catergory: ";
    echo stripslashes($row['catergory']);
    echo "<br />Name: ";
    echo stripslashes($row['name']);
    echo "<br />Price: ";
    echo stripslashes($row['price']);
    echo "<br />Quantities: ";
    echo stripslashes($row['qty']);
    echo "</p>";
 }

  ?>
  <body>
    <div id="wrapper">
      <header>
      </header>
     <div id="leftcolumn">
      <nav>
        <ul type="none" >
            <li><a href="">Daily Sales Report</a></li>
    	</ul>
      </nav>
    </div>
    <div id="centercolumn">
     <div class="content">
      <h2>Click to generate daily report</h2>
      <form action="priceUpdate.php" method="post">
      <table id="customOrder" border ="0">
        <tr>Total Sales by product categories:</tr>
        <tr>
          <td>Categories</td>
          <td>Price</td>
          <td>Quantities</td>
          <td>Sales</td>
        </tr>
        <tr>
        <td rowspan="1"><b>Just Java</b></td>
        <td>Endless Cup price: $<?php echo $prices[0] ?></td>
        <td><?php echo $qty[0] ?></td>
        <td>$<?php echo $sales[0]?></td>
         </tr>

        <tr>
        <td rowspan="2"><b>Cafe au Lait</b></td>
        <td>Single price:$<?php echo $prices[1] ?></td>
        <td><?php echo $qty[1] ?></td>
        <td>$<?php echo $sales[1]?></td>
         </tr>

         <tr>
         <td>Double price :$<?php echo $prices[2] ?></td>
         <td><?php echo $qty[2] ?></td>
         <td>$<?php echo $sales[2]?></td>
          </tr>
          <tr>
          <td rowspan="2"><b>Iced Cappuccino</b></td>
          <td>Single price:$<?php echo $prices[3] ?></td>
          <td><?php echo $qty[3] ?></td>
          <td>$<?php echo $sales[3]?></td>
           </tr>

           <tr>
           <td>Double price:$<?php echo $prices[4] ?></td>
           <td><?php echo $qty[4] ?></td>
           <td>$<?php echo $sales[4]?></td>
            </tr>
      </table>
  </div>
 </div>

 <footer>
 <small><i>Copyright &copy; 2018 JavaJam Coffee House <br>
 <a href= "mailto: wu@weijie.com">wu@weijie.com</a></i></small>
 </footer>

  </body>
</html>
</form>
