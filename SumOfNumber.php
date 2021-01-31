<!DOCTYPE HTML>
<html>
<body>

      <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
      <center><h1>  HW2 : Sum of number  </h1></center> 
      <center><h2>  Num 1: <input type="text" name="num1"> </h2></center> <br>
      <center><h2> <input type="radio" name="operator" value="+"> + : 
               <input type="radio" name="operator" value="-"> - :
               <input type="radio" name="operator" value="*"> * :
               <input type="radio" name="operator" value="/"> / : </h2></center> <br>
      <center><h2>  Num 2: <input type="text" name="num2"> </h2></center> <br>
      <center><h2> <input type="radio" name="operator2" value="+"> + :  
               <input type="radio" name="operator2" value="-"> - :  
               <input type="radio" name="operator2" value="*"> * : 
               <input type="radio" name="operator2" value="/"> / : </h2></center> <br>
      <center><h2>  Num 3: <input type="text" name="num3"> </center> <h2><br>
      <center>  <input type="submit"> </center> <br>

    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];
    $n3 = $_POST['num3'];
    $oper = $_POST['operator'];

      if($oper == "+"){
      $x = $n1+$n2;
      }
     else if($oper == "-"){ 
       $x = $n1-$n2;
      }
     else if($oper == "*"){ 
       $x = $n1*$n2;
     }
     else if($oper == "/"){ 
       $x = $n1/$n2;
      }

      $oper2 = $_POST['operator2'];
      // Add
      if(($oper2 == "+") && ($oper == "+"))
      { 
        $y = $x+$n3;
        echo "<center><h2> Sum of Number = " .$y. "</h2></center><br>";
      }
      else if(($oper2 == "-") && ($oper == "+"))
      { 
        $y = $x-$n3;
        echo "<center><h2> Sum and Sub of Number = " .$y. "</h2></center><br>";
      }
      else if(($oper2 == "*") && ($oper == "+"))
      { 
        $y = $x*$n3;
        echo "<center><h2> Sum and Mul of Number = " .$y. "</h2></center><br>";
      }
      else if(($oper2 == "/") && ($oper == "+"))
      { 
        $y = $x/$n3;
        echo "<center><h2> Sum and Div of Number = " .$y. "</h2></center><br>";
      }

      //Sub
      if(($oper2 == "+") && ($oper == "-"))
      { 
        $y = $x+$n3;
        echo "<center><h2> Sub and Sum of Number = " .$y. "</h2></center><br>";
      }
      else if(($oper2 == "-") && ($oper == "-"))
      { 
        $y = $x-$n3;
        echo "<center><h2> Sub of Number = " .$y. "</h2></center><br>";
      }
      else if(($oper2 == "*") && ($oper == "-"))
      { 
        $y = $x*$n3;
        echo "<center><h2> Sub and Mul of Number = " .$y. "</h2></center><br>";
      }
      else if(($oper2 == "/") && ($oper == "-"))
      { 
        $y = $x/$n3;
        echo "<center><h2> Sub and Div of Number = " .$y. "</h2></center><br>";
      }

      //Mul
      if(($oper2 == "+") && ($oper == "*"))
      { 
        $y = $x*$n3;
        echo "<center><h2> Mul and Sum of Number = " .$y. "</h2></center><br>";
      }
      else if(($oper2 == "-") && ($oper == "*"))
      { 
        $y = $x-$n3;
        echo "<center><h2> Mul and Sub of Number = " .$y. "</h2></center><br>";
      }
      else if(($oper2 == "*") && ($oper == "*"))
      { 
        $y = $x*$n3;
        echo "<center><h2> Mul of Number = " .$y. "</h2></center><br>";
      }
      else if(($oper2 == "/") && ($oper == "*"))
      { 
        $y = $x/$n3;
        echo "<center><h2> Mul and Div of Number = " .$y. "</h2></center><br>";
      }

      //Div
      if(($oper2 == "+") && ($oper == "/"))
      { 
        $y = $x+$n3;
        echo "<center><h2> Div and Sum of Number = " .$y. "</h2></center><br>";
      }
      else if(($oper2 == "-") && ($oper == "/"))
      { 
        $y = $x-$n3;
        echo "<center><h2> Div and Sub of Number = " .$y. "</h2></center><br>";
      }
      else if(($oper2 == "*") && ($oper == "/"))
      { 
        $y = $x*$n3;
        echo "<center><h2> Div and Mul of Number = " .$y. "</h2></center><br>";
      }
      else if(($oper2 == "/") && ($oper == "/"))
      { 
        $y = $x/$n3;
        echo "<center><h2> Div of Number = " .$y. "</h2></center><br>";
      }

      else if(($oper2 == "") || ($oper == "") || (($oper2 == "") && ($oper == "")))
      {
        $y = 0;
        echo "<center><h2> Error Please check Data Try again!!! " .$y. "</h2></center><br>";
      }
            // code block
}
?>
</body>

</html>

