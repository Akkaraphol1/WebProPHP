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
      <center><h1>  HW2-1:Find Character </h1></center> 
      <center><h4>  Your Text: <input type="text" name="Texts" size = "25"> </h4></center> <br>
      
      <center> <h4> <input type="submit" value="submit" > 
      <button onClick="window.​location.reload();">clear</button> </h4>  </center>
      <center><h2>  Count Char in Sentence </h2></center> <br>

    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $RANGE = 255;

    // The main function that sort 
    // the given string arr[] in
    // alphabatical order
    function countSort($n1)
    {
        global $RANGE;
        
        // The output character array 
        // that will have sorted arr
        $output = array(strlen($n1));
        $len = strlen($n1);
        
        // Create a count array to 
        // store count of inidividul 
        // characters and initialize
        // count array as 0
        $count = array_fill(0, $RANGE + 1, 0);
    
        // Store count of 
        // each character
        for($i = 0; $i < $len; ++$i)
            ++$count[ord($n1[$i])];
    
        // Change count[i] so that 
        // count[i] now contains 
        // actual position of this
        // character in output array
        for ($i = 1; $i <= $RANGE; ++$i)
            $count[$i] += $count[$i - 1];
    
        // Build the output
        // character array
        // To make it stable we are operating 
        // in reverse order.
        for ($i = $len-1; $i >= 0 ; $i--)
        {
            $output[$count[ord($n1[$i])] - 1] = $n1[$i];
            --$count[ord($n1[$i])];
        }
    
        // Copy the output array to 
        // arr, so that arr now 
        // contains sorted characters
        for ($i = 0; $i < $len; ++$i)
            $n1[$i] = $output[$i];
    return $n1;
    }

    $n1 = $_POST['Texts'];
    $ccs = count_chars($n1,3); // เอาตั้งเเต่ค่าที่น้อยที่สุด ไปจนมากที่สุด
    $c1 = strlen($ccs); //ความยาวของ ccs 
   

    //    4         4 3 2 1 > 0   
    for($x = $c1 ; $x > 0 ; $x--){
        //    

        $s = substr($ccs,-$x);
        $c = ord($s);
        $i = chr($c);
        $LL = strlen(countSort($n1));

        if($c == 32 || $i == " "){
            $i = "Space";
            echo "$i = 1,";
           }
           else {
               echo "$i = 1,";
           }

    }
}
    ?>

</body>
</html>