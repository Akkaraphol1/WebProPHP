<!DOCTYPE html>
<html lang="en">
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
    <title>Document</title>
</head>
<body>

<p>
       <h2><a href="CalGPA.php">Back</a></h2>
</p>

    <?php
    
     $s1 = $_GET['Sub1'];         // input text Subject value.
     $s2 = $_GET['Sub2'];
     $s3 = $_GET['Sub3'];
     $s4 = $_GET['Sub4'];
     $s5 = $_GET['Sub5'];
     $G1 = $_GET['Grade1'];       // Input Grade 1.
     $G2 = $_GET['Grade2'];
     $G3 = $_GET['Grade3'];
     $G4 = $_GET['Grade4'];
     $G5 = $_GET['Grade5'];
     $o = $_GET['operator'];      // input Credit 1.
     $o2 = $_GET['operator2'];
     $o3 = $_GET['operator3'];
     $o4 = $_GET['operator4'];
     $o5 = $_GET['operator5'];

     $B = "Back";

   echo "<table align='center' width='60%' border='10'>";
   echo "<tr><th><center><h1>Subject</h1></center></th><th><center><h1>Grade</h1></center></th><th><center><h1>Credits</h1></center></th></tr>";

  if((($s1 != "") && ($s2 != "") && ($s3 != "") && ($s4 != "") && ($s5 != "")) 
    && (($o >= 1) && ($o <= 3)) && (($o2 >= 1) && ($o2 <= 3)) && (($o3 >= 1) && ($o3 <= 3)) 
        && (($o4 >= 1) && ($o4 <= 3)) && (($o5 >= 1) && ($o5 <= 3))){
    
            if($G1 == "A" || $G1 == "a") $G6 = 4;
            else if($G1 == "B+" || $G1 == "b+") $G6 = 3.5;
            else if($G1 == "B" || $G1 == "b") $G6 = 3;
            else if($G1 == "C+" || $G1 == "c+") $G6 = 2.5;
            else if($G1 == "C" || $G1 == "c") $G6 = 2;
            else if($G1 == "D" || $G1 == "d") $G6 = 1;
            else if($G1 == "F" || $G1 == "f") $G6 = 0;
           
            if($G2 == "A" || $G2 == "a") $G7 = 4;
            else if($G2 == "B+" || $G2 == "b+") $G7 = 3.5;
            else if($G2 == "B" || $G2 == "b") $G7 = 3;
            else if($G2 == "C+" || $G2 == "c+") $G7 = 2.5;
            else if($G2 == "C" || $G2 == "c") $G7 = 2;
            else if($G2 == "D" || $G2 == "d") $G7 = 1;
            else if($G2 == "F" || $G2 == "f") $G7 = 0;
       
            if($G3 == "A" || $G3 == "a") $G8 = 4;
            else if($G3 == "B+" || $G3 == "b+") $G8 = 3.5;
            else if($G3 == "B" || $G3 == "b") $G8 = 3;
            else if($G3 == "C+" || $G3 == "c+") $G8 = 2.5;
            else if($G3 == "C" || $G3 == "c") $G8 = 2;
            else if($G3 == "D" || $G3 == "d") $G8 = 1;
            else if($G3 == "F" || $G3 == "f") $G8 = 0;
       
            if($G4 == "A" || $G4 == "a") $G9 = 4;
            else if($G4 == "B+" || $G4 == "b+") $G9 = 3.5;
            else if($G4 == "B" || $G4 == "b") $G9 = 3;
            else if($G4 == "C+" || $G4 == "c+") $G9 = 2.5;
            else if($G4 == "C" || $G4 == "c") $G9 = 2;
            else if($G4 == "D" || $G4 == "d") $G9 = 1;
            else if($G4 == "F" || $G4 == "f") $G9 = 0;
       
            if($G5 == "A" || $G5 == "a") $G10 = 4;
            else if($G5 == "B+" || $G5 == "b+") $G10 = 3.5;
            else if($G5 == "B" || $G5 == "b") $G10 = 3;
            else if($G5 == "C+" || $G5 == "c+") $G10 = 2.5;
            else if($G5 == "C" || $G5 == "c") $G10 = 2;
            else if($G5 == "D" || $G5 == "d") $G10 = 1;
            else if($G5 == "F" || $G5 == "f") $G10 = 0;
       

    if($o == "1") 
       {
            $GD = (1*$G6);
            $GA1 = 1;
        } // 1 * grade
        else if($o == "2") 
        {
            $GD = (2*$G6);
            $GA1 = 2;
        }
        else if($o == "3")
        {
            $GD = (3*$G6);
            $GA1 = 3;
        }
        echo "<tr><td><center><h2>$s1</h2></center></td><td><center><h2>$G1</h2></center></td><td><center><h2>$o</h2></center></td></tr>";
       
    if($o2 == "1")
        {
            $GD2 = (1*$G7);
            $GA2 = 1;
        }
        else if($o2 == "2") 
        {
            $GD2 = (2*$G7);
            $GA2 = 2;
        }
        else if($o2 == "3")
        {
            $GD2 = (3*$G7);
            $GA2 = 3;
        }
        echo "<tr><td><center><h2>$s2</h2></center></td><td><center><h2>$G2</h2></center></td><td><center><h2>$o2</h2></center></td></tr>";
    
    if($o3 == "1") 
        {
            $GD3 = (1*$G8);
            $GA3 = 1;
        }
        else if($o3 == "2") 
        {
            $GD3 = (2*$G8);
            $GA3 = 2;
        }
        else if($o3 == "3") 
        {
            $GD3 = (3*$G8);
            $GA3 = 3;
        }   
        echo "<tr><td><center><h2>$s3</h2></center></td><td><center><h2>$G3</h2></center></td><td><center><h2>$o3</h2></center></td></tr>";


    if($o4 == "1") 
        {
                $GD4 = (1*$G9);
                $GA4 = 1;
        }
        else if($o4 == "2") 
        {
            $GD4 = (2*$G9);
            $GA4 = 2;
        }
        else if($o4 == "3") 
        {
            $GD4 = (3*$G9);
            $GA4 = 3;
        }   
        echo "<tr><td><center><h2>$s4</h2></center></td><td><center><h2>$G4</h2></center></td><td><center><h2>$o4</h2></center></td></tr>";
    

    if($o5 == "1") 
        {
            $GD5 = (1*$G10);
            $GA5 = 1;
        }
        else if($o5 == "2") 
        {
            $GD5 = (2*$G10);
            $GA5 = 2;
        }
        else if($o5 == "3") 
        {
            $GD5 = (3*$G10);
            $GA5 = 3;
        }
        echo "<tr><td><center><h2>$s5</h2></center></td><td><center><h2>$G5</h2></center></td><td><center><h2>$o5</h2></center></td></tr>";

        $GPA = (($GD + $GD2 + $GD3 + $GD4 + $GD5)/($GA1 + $GA2 + $GA3 + $GA4 + $GA5));
       // $GPA2 = var_dump(round($GPA, 2));
        $GPA3 = (round($GPA,2));
       echo "<th colspan='2' width='100%' ><center><h2>Grade Average</h2></center></th><td><center><h2>",$GPA3."</h2></center></td>";
                   
    }

   else
    {
        echo "<tr><td><center><h2></h2></center></td><td><center><h2></h2></center></td><td><center><h2></h2></center></td></tr>";
        echo "<tr><td><center><h2></h2></center></td><td><center><h2></h2></center></td><td><center><h2></h2></center></td></tr>";
        echo "<tr><td><center><h2></h2></center></td><td><center><h2></h2></center></td><td><center><h2></h2></center></td></tr>";
        echo "<tr><td><center><h2></h2></center></td><td><center><h2></h2></center></td><td><center><h2></h2></center></td></tr>";
        echo "<tr><td><center><h2></h2></center></td><td><center><h2></h2></center></td><td><center><h2></h2></center></td></tr>";
        $GPA = "0.00";
        echo "<th colspan='2' width='100%' ><center><h2>Grade Period Average</h2></center></th><td><center><h2>",$GPA."</h2></center></td>";
        echo "<center><h2>Error You can not checking grade. Please to Enter link Back for check data. </h2></center><br>";
       
    }

    ?>
    
   
</body>
</html>