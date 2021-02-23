<?php 
// PHP program for implementation  
// of selection sort  

function selection_sort(&$arr, $n)  
{ 
    for($i = 0; $i < $n ; $i++) 
    { 
        $low = $i; // 0,1,2,3,4 
           //  12345    12345 <  5  1+1
        for($j = $i + 1; $j < $n ; $j++) 
        {                   
            if ($arr[$j] < $arr[$low]) 
            { 
                $low = $j; 
            } 
        } 
          
        // swap the minimum value to $ith node 
        if ($arr[$i] > $arr[$low]) 
        { 
            $tmp = $arr[$i]; 
            $arr[$i] = $arr[$low]; 
            $arr[$low] = $tmp; 
        } 
    } 
} 
  
// Driver Code 
$arr = array(64, 25, 12, 22, 11); 
$len = count($arr); //5
//64, 25, 12, 22, 11     5
selection_sort($arr, $len); 
echo "Sorted array : \n";  
  
for ($i = 0; $i < $len; $i++)  
    echo $arr[$i] . " ";  
  
// This code is contributed  
// by Deepika Gupta.  
?>  