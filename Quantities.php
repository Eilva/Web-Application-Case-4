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

  $query = "SELECT qty FROM coffee";
  $result = $db->query($query);
  $qty = [];
  while ($row = $result->fetch_assoc()) {
    $qty[] = $row['qty'];
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
      <form action="price.php" method="post">
      <table id="customOrder" border ="0">
        <tr>Total quantities by product categories:</tr>
        <tr>
          <td>Categories</td>
          <td>type</td>
          <td>Quantities</td>
        </tr>
        <tr>
        <td rowspan="1"><b>Just Java</b></td>
        <td>Endless Cup</td>
        <td><?php echo $qty[0] ?></td>
         </tr>

        <tr>
        <td rowspan="2"><b>Cafe au Lait</b></td>
        <td>Single</td>
        <td><?php echo $qty[1] ?></td>
         </tr>

         <tr>
         <td>Double</td>
         <td><?php echo $qty[2] ?></td>
          </tr>
          <tr>
          <td rowspan="2"><b>Iced Cappuccino</b></td>
          <td>Single</td>
          <td><?php echo $qty[3] ?></td>
           </tr>

           <tr>
           <td>Double</td>
           <td><?php echo $qty[4] ?></td>
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
