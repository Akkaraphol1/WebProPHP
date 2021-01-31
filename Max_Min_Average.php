<!DOCTYPE HTML>
<html>
<body>

      <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
      <center><h1>  HW1 : Find Max Min Average  </h1></center> 
      <center><h2>  Num 1: <input type="text" name="num1"> </h2></center> <br>
      <center><h2>  Num 2: <input type="text" name="num2"> </h2></center> <br>
      <center><h2>  Num 3: <input type="text" name="num3"> </h2></center> <br>
      
      <center><h2> <input type="radio" name="operator" value="Max"> Maximum  </h2></center> <br>
      <center><h2> <input type="radio" name="operator" value="Min"> Minimum  </h2></center> <br>
      <center><h2> <input type="radio" name="operator" value="Aver"> Average </h2></center> <br>
      <center><h2> <input type="submit"> </h2></center> <br>

    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];
    $n3 = $_POST['num3'];
    $oper = $_POST['operator'];
   //Max
  if ($oper == "Max") {
    if(($n1 > $n2 && $n1 > $n3))
    {
    echo "<center><h2> Maximum number = ".$n1 ."</h2></center> <br> ";   
    }
    else if(($n2 > $n1 && $n2 > $n3))
    {
    echo "<center><h2> Maximum number = ".$n2 ."</h2></center> <br> ";   
    }
    else if(($n3 > $n1 && $n3 > $n2))
    {
    echo "<center><h2> Maximum number = ".$n3 ."</h2></center> <br> ";   
    }
  }
   //Min
   if ($oper == "Min") {
    if(($n1 < $n2 && $n1 < $n3))
    {
    echo "<center><h2> Minimum number = ".$n1 ."</h2></center>  <br> ";   
    }
    else if(($n2 < $n1 && $n2 < $n3))
    {
    echo "<center><h2>  Minimum number = ".$n2 ."</h2></center>  <br> ";   
    }
    else if(($n3 < $n1 && $n3 < $n2))
    {
    echo "<center><h2>  Minimum number = ".$n3 ."</h2></center>  <br> ";   
    }
   }
   // Average
   if(($oper == "Aver"))
   {
    echo "<center><h2>  Average number = ".(($n1 + $n2 + $n3)/3)."</h2></center>  <br> ";  
   } 
   else if($oper == " ") 
    {
        echo "<center><h2> Value is empty </h2></center>  <br> ";
    } 
}
?>
</body>

</html>

