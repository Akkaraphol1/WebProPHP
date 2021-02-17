<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <center>
            <h2> Modify Code LAB 8 - 4 </h2>
        </center>
        <center>
            <h4> Row : <input type="text" name="Row" size="10"> </h4>
        </center> <br>
        <center>
            <h4> Column : <input type="text" name="Column" size="10"> </h4>
        </center> <br>
        <center>
            <h4> StartNum : <input type="text" name="StartNum" size="10"> </h4>
        </center> <br>
        <center>
            <h4> End Num : <input type="text" name="EndNum" size="10"> </h4>
        </center> <br>
        <center>
            <h4> <input type="submit" value="submit">

                <center>
                    <h2> Modify Code LAB 8 - 4 </h2>
                </center> <br>

    </form>

</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $r1 = $_POST['Row'];
    $c1 = $_POST['Column'];
    $rowMax = intval( $r1);
    $colMax = intval( $c1);
    $SN = $_POST['StartNum'];
    $ED = $_POST['EndNum'];
    // declare function page_header with argument and defualt value
    function page_header($title, $bgcolor = "ffffff")
    {
        echo '<html lang="en"><head><meta charset="UTF-8">';
        echo '<title>' . $title . '</title></head>';
        echo '<body bgcolor="#' . $bgcolor . '">';
    }
    // declare function page_footer
    function page_footer($message = "ขอบคุณ")
    {
        echo '<hr>' . $message;
        echo '</body></html>';
    }

    function NumMin($SN,$ED,$s){
        if(($s <= $SN && $s <= $ED))
        {
            return $s; 
        }
        else if(($SN <= $s && $SN <= $ED))
        {
            return $SN; 
        }
        else if(($ED <= $s && $ED <= $SN))
        {
            return $ED;  
        }
     }
     
     function NumMax($SN,$ED,$s){
        if(($s >= $SN && $s >= $ED))
        {
            return $s; 
        }
        else if(($SN >= $s && $SN >= $ED))
        {
            return $SN; 
        }
        else if(($ED >= $s && $ED >= $SN))
        {
            return $ED;  
        }
     }
     
     function Averages($SN,$ED,$s){
        return (($SN + $ED + $s)/3); 
     }


    // declare function checker
    function show_checker( $bgcolor1, $bgcolor2, &$colMax ,&$rowMax , &$SN, &$ED , &$s)
    {
        echo "<p align='center'> Row = $rowMax, Column = $colMax </p>";
        echo '<table align="center" border="1">';
        
        for($r = 1; $r <= $rowMax ; $r++) {
            echo "<tr>";
            for($c = 1; $c <= $colMax ; $c++) {
                $s = rand($SN, $ED);
                if ($s % 2 == 1) {
                   
                    echo '<td bgcolor="#' . (($s % 2 == 1) ? $bgcolor2 : $bgcolor1) . '">';
                    echo $s; 
                    echo "</font></td>";
                } else {
        
                    echo '<td bgcolor="#' . (($s % 2 == 1) ? $bgcolor2 : $bgcolor1) . '">';
                    echo $s; 
                        echo "</font></td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";

        if ($r == $c) $message = "This is Square";
        else $message = "This is Rectangle";
        echo "Minimum = ". NumMin($SN,$ED,$s),"<br>";
        echo "Maximum = ". NumMax($SN,$ED,$s),"<br>";
        echo "Averages = ". Averages($SN,$ED,$s),"<br>";

        echo "<p align='center'> $message </p>";

    }

    page_header("Example 8-4", "FFDDEE");
    show_checker("33ff99","ffff99", $colMax ,$rowMax , $SN, $ED, $s);
    page_footer("Thank You.");
}
?>