<?php
  if($_SERVER["REQUEST_METHOD"] == 'POST' && $_POST){
    $subj1 = $_POST ['subject1'];
    $subj2 = $_POST ['subject2'];
    $subj3 = $_POST ['subject3'];
    $subj4 = $_POST ['subject4'];
    $subj5 = $_POST ['subject5'];
    $total = $subj1 + $subj2 + $subj3 + $subj4 + $subj5;
   $precentage = ($total / 500) * 100;
 
    if ($precentage >= 90){
	      $grade = " Grade A "; 
	  }
    else if ($precentage >= 80){
	      $grade = " Grade B ";
	  }
    else if ($precentage >= 70){
	      $grade = " Grade C ";
	  }
    else if ($precentage >= 60){
	      $grade = " Grade D ";
	  }
    else if ($precentage >= 40){
	      $grade = " Grade E ";
	  }
    else if ($precentage < 40){
	      $grade = " Grade F ";
	  }
	  
	  echo " <p class='output'> $precentage % $grade </p> ";
 
  }

?>

<!doctype html>
<style>
 .grades{
	   height: 600px;
     width: 500px;
     background-color:#f2f2f2;
	   border: 7px;
	   padding: 25px 100px 40px 100px;
	   margin: auto;
 }
  .submit_button{
	   width: 100%;
     background-color: DarkBlue;
     color: white;
     padding: 14px 20px;
     margin: 12px 0;
	   border: none;
     border-radius: 4px;
 }
 .input_button{
	   width: 100%;
     padding: 12px 20px;
     margin: 8px 0;
     border: 1px solid;
     border-radius: 4px;
     box-sizing: border-box;
 }
 .output{
	   text-align: center;
	   border: 2px solid DarkBlue;
     border-radius: 5px;
	   margin: 20px;
	   padding: 8px;
     background-color: f2f2f2;
     font-size: larger;

 }
</style>

<body>
<div class = "grades">
  <h1 style = "text-align: center; font-size: 40px;"> Calculate Grade </h1>
<form method="POST">

  <label for = "subject1" style ="font-size: 20px"> Physics </label><br>
  <input class = "input_button" type = "number" id = "subject1" name = "subject1" min = "0" max = "100"><br>
  
  <label for = "subject2" style ="font-size: 20px"> Chemistry </label><br>
  <input class = "input_button" type = "number" id = "subject2" name = "subject2" min = "0" max = "100"><br>
  
  <label for = "subject3" style ="font-size: 20px"> Biology </label><br>
  <input class = "input_button" type = "number" id = "subject3" name = "subject3" min = "0" max = "100"><br>
  
  <label for = "subject4" style ="font-size: 20px"> Mathematics </label><br>
  <input class = "input_button" type = "number" id = "subject4" name = "subject4" min = "0" max = "100"><br>
  
  <label for = "subject5" style ="font-size: 20px"> Computer </label><br>
  <input class = "input_button" type = "number" id = "subject5" name = "subject5" min = "0" max = "100"><br>
  
  <input class = "submit_button" type = "submit" value = "Submit">
  
  
</form>
</div>
</body>