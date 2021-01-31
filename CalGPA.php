<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
* {
  box-sizing: border-box;
}

.button { 
    
    height : 50px;
    width  : 150px;
} 

body {
  font-family: Arial, Helvetica, sans-serif;
}

</style>
</head>
<body>

<form method="GET" action="CalGPA2.php">

  <center><h1> Calculate Grade Period Average(GPA) </h1></center>
 
      <center><h2> Subject 1    : <input type="text" name="Sub1"> </h2> </center>
      <center><h2> First Grade   : <input type="text" name="Grade1"size="1">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Credit : <input type="number" name="operator"size="1"> </h2></center>
      <center><h2> Subject 2    : <input type="text" name="Sub2"> </h2> </center> 
      <center><h2> Second Grade   : <input type="text" name="Grade2"size="1"> 
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Credit : <input type="number" name="operator2"size="1"> </h2></center>
      <center><h2> Subject 3    : <input type="text" name="Sub3"> </h2> </center> 
      <center><h2> Third Grade   : <input type="text" name="Grade3"size="1"> 
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Credit : <input type="number" name="operator3"size="1"> </h2></center>
      <center><h2> Subject 4    : <input type="text" name="Sub4"> </h2> </center> 
      <center><h2> Forth Grade   : <input type="text" name="Grade4"size="1"> 
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Credit : <input type="number" name="operator4"size="1"> </h2></center>
      <center><h2> Subject 5    : <input type="text" name="Sub5"> </h2> </center> 
      <center><h2> Fifth Grade   : <input type="text" name="Grade5"size="1"> 
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Credit : <input type="number" name="operator5"size="1"> </h2></center>
      
      <center><h2><button class="button">Submit</button> </h2></center> <br>
     
    </form>
  

</body>
</html>