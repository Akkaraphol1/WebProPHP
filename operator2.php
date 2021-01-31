<?php
/*
$a = 1;
echo "\$a &= ".($a &= 2) ;
echo "<br><br>";
$a = 1;
echo "\$a ^= ".($a ^= 2) ;
echo "<br><br>";
$a = 1;
echo "\$a |= ".($a |= 2) ;
echo "<br><br>";

$a = 8;
echo "\$a &= ".($a &= 2) ;
echo "<br><br>";
$a = 8;
echo "\$a ^= ".($a ^= 2) ;
echo "<br><br>";
$a = 8;
echo "\$a |= ".($a |= 2) ;
echo "<br><br>";
*/

$a = 8;
$b = 3;
echo "a & b = ", $a & $b, "<br>";
echo "a | b = ", $a | $b, "<br>";
echo "a ^ b = ", $a ^ $b, "<br>";
echo "~a = ", ~$a, "<br>";
echo "a << 1 = ", $a << 1, "<br>";
echo "a >> 1 = ", $a >> 1, "<br>";

?>