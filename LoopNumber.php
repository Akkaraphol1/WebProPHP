<!DOCTYPE HTML>
<html>
<body>

      <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
      <center><h1>  LoopNumber  </h1></center> 
      <center><h2>  Number : <input type="number" name="num1" value = 0> </h2></center> <br>
    
      <center><h2> <input type="submit"> </h2></center> <br>

    </form>

    <?php

    $odd = 0;
    $even = 0;
    $zero = 0;
   $num = $_POST['num1'];
   $cout = 0;
   while($cout < strlen($num)){
       if($num[$cout] % 2 == 0 && $num[$cout] != 0)
       $even;

       else if($num[$cout] % 2 != 0){
          $odd;
       }
       else{
           $zero;
       }
   }
            echo "<table border=1>";
            echo "<tr><td>Odd = </td>";
            echo "<td>".$odd."</td>";
            echo "</tr>";
            echo "<tr><td>Even = </td>";
            echo "<td>".$even."</td>";
            echo "</tr>";
            echo "<tr><td>Zero = </td>";
            echo "<td>".$zero."</td>";
            echo "</tr>";
            echo "</table>";
   

?>
</body>

</html>

