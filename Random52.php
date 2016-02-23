<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Random52</title>
</head>

<body>
  <?php
    $ran=52;
    $count = 0;
    for($r = 1; $r<=$ran;$r++)
    {
      $value[$count] = rand(1,$ran);
      for($i=0;$i<$count;$i++)
      {
        if($value[$count] == $value[$i])
        {
        $value[$count] = rand(1,$ran);
        $i=0;
        }
      }
      $count ++ ;
    }
  ?>
    <table width="80%" align="center" border="1">
  <?php
      $count = 0;
      for($row = 1 ; $row <=13 ; $row++)
      {
      echo "<tr>";
      for($col=1 ; $col<=4 ;$col++)
      {
        echo "<td><center>",$value[$count],"</center></td>" ;
        $count ++;
      }
      echo "</tr>";
    }
    ?>
    </table>
</body>
</html>
