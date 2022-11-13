<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Shopping Time!</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <h1>Plant Party!</h1>
  <h2>Your Purchase was SUCCESSFUL!</h2>
  <?php
 $aloeCost = $_POST["aloe"]*5.55;
 $fittoniaCost = $_POST["fittonia"]*8.99;
 $cyclamenCost = $_POST["cyclamen"]*12.49;
$freeShip= 0.00;
$threeDayShip = 5.00;
$overNightShip = 50.00; 
  echo "<h3>"."The password you entered is: "; 
  echo "<h2>". $_POST["password"]."</h2> </h3> <br>";
  echo "<h1>Your Receipt: </h1> <br>";
  echo "<table style=font-family: Arial, Helvetica, sans-serif >";
  echo '<tr style="background-color:rgb(139, 192, 227)">' ;
  echo '<th>'." ".'</th>';
    echo '<th>'."Quantity".'</th>';
    echo '<th>'."Cost Per Item".'</th>';
    echo '<th>'."Sub Total".'</th>';
  echo '</tr>' ;
 
  echo '<tr>' ;
  echo '<td style="background-color:rgb(139, 192, 227)">'."Aloe plant".'</td>';
    echo '<td style="background-color:rgb(154, 201, 154)">'.$_POST["aloe"].'</td>';
    echo '<td style="background-color:rgb(154, 201, 154)">'."$5.55".'</th>';
    echo '<td style="background-color:rgb(154, 201, 154)">'."$".$aloeCost.'</td>';
  echo '</tr>' ;

  echo '<tr>' ;
  echo '<td style="background-color:rgb(139, 192, 227)">'."Cyclamen plant".'</td>';
    echo '<td style="background-color:rgb(154, 201, 154)">'.$_POST["cyclamen"].'</td>';
    echo '<td style="background-color:rgb(154, 201, 154)">'."$12.49".'</th>';
    echo '<td style="background-color:rgb(154, 201, 154)">'."$".$cyclamenCost.'</td>';
  echo '</tr>' ;
 
  echo '<tr>' ;
  echo '<td style="background-color:rgb(139, 192, 227)">'."Fittonia plant".'</td>';
    echo '<td style="background-color:rgb(154, 201, 154)"> '.$_POST["fittonia"].'</td>';
    echo '<td style="background-color:rgb(154, 201, 154)">'."$8.99".'</th>';
    echo '<td style="background-color:rgb(154, 201, 154)">'."$".$fittoniaCost.'</td>';
  echo '</tr>' ;
  
  if($_POST["ship"]=="free"){
    $shipWay = "free";
    $shipCost = 0.00;
  }
  if($_POST["ship"]=="threeDay"){
    $shipWay = "Three-Day";
    $shipCost = 5.00;
  }
  if($_POST["ship"]=="overNight"){
    $shipWay = "OverNight";
    $shipCost = 50.00;
  }

  echo '<tr>' ;
  echo '<td style="background-color:rgb(139, 192, 227)">'."Shipping".'</td>';
    echo '<td colspan=2 style="background-color:rgb(154, 201, 154)">'.$shipWay.'</td>';
    echo '<td style="background-color:rgb(154, 201, 154)">'."$".$shipCost.'</td>';
  echo '</tr>' ;

$totalCost =$fittoniaCost+$cyclamenCost+$aloeCost+$shipCost;
  echo '<tr style="background-color:rgb(139, 192, 227)">' ;
  echo '<td colspan=3 >'."Total Cost".'</td>';
    echo '<td>'."$".$totalCost.'</td>';
  echo '</tr>' ;
  echo "</table>";
  ?>
<h1>Thank You For Your Order!</h1>

