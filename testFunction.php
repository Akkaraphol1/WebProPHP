<?php
 $x = 100;
 $y = 10 ;
 $operator = "+";
function plus(); // บวก
{
    global $x, $y;
    echo "x + y = ".$x + $y."<br />"; 
}

function sub(); // ลบ
{
    global $x, $y;
    echo "x - y =  .$x - $y";
}

function mul(); // คูณ
{
    global $x, $y;
    echo "x * y =  .$x * $y";
}

function div(); // หาร
{
    global $x, $y;
    echo "x / y =  .$x / $y";
}

switch($operator) {
    case "+":
    plus();
    break;
    case "-":
    sub();
    break;
    case "*":
    mul();
    break;
    case "/":
    div();
    break;
    default:
      // code block
  }
?>