<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Multiplication Table!</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <h1>Multiplication Table!</h1>
  <p>Multiplication Table for 100x100</p>
  <?php
  //creates the table 
    echo "<table>"; 
    for ($rows = 1; $rows<=100;$rows++) //start at 1 so you don't have a row of zeros
    {
      echo('<tr>'); //creates a new row at the beginning of each outer for-loop
      for($columns=1; $columns<=100;$columns++)
      {
        echo('<td>'.$rows*$columns.'<td>'); //creates a new data cell in the table which has the multiplication value
      }
      echo('</tr>');//this closes the row at the end of the outer for-loop
    }
  echo "</table>"//ends the table 
    ?>
  

</body>

</html>