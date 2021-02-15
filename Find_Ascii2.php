<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
      <center><h2>  HW2-2: Find Ascii </h2></center> 
      <center><h4>  Your Text: <input type="text" name="Text1" size = "40"> </h4></center> <br>
      
      <center> <h4> <input type="submit" value="submit" > 
      <button onClick="window.​location.reload();">clear</button> </h4>  </center>
      <center><h2>  Count Char in Sentence </h2></center> <br>

    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    function Find_Ascii($c1,$css,$s,$cc){
        for($x = $c1 ; $x > 0 ; $x--){
        
            $s = substr($ccs,-$x);
            $cc = ord($s);
          
                
                echo "<center>$s[0]  : Ascii = ".$cc."</center><br>\n";      
        } 
       return; 
    }
    
    $n1 = $_POST['Text1'];

    $new_str = preg_replace("/[^a-zA-Z\d]/i", '', $n1);
    $ccs = count_chars($new_str,3);

    $c1 = strlen($ccs);
    
   echo Find_Ascii($c1,$css,$s,$cc);
}

    ?>


</body>
</html>