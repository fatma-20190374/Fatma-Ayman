<?php
 if($_SERVER["REQUEST_METHOD"] == 'POST' && $_POST){
 $num1 = $_POST ['num1'];
 $num2 = $_POST ['num2'];
 $operator = $_POST ['operator'];
 
  if ($operator == "+"){
	  $result = $num1 + $num2; 
	  }
  else if ($operator == "-"){
	  $result = $num1 - $num2;
	  }
  else if ($operator == "*"){
	  $result = $num1 * $num2;
	  }
  else if ($operator == "/"){
	  $result = $num1 / $num2;
	  }
	  echo "<p class='output'> $result </p> ";
	  
 }
?>

<!doctype html>
<style>
 .calc{
	 height: 400px;
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
	   border: 3px solid DarkBlue;
     background-color: f2f2f2;
     border-radius: 5px;
	   margin: 20px;
	   padding: 8px;
     font-size: larger;
 }
</style>

<body>
<div class = "calc">
<h1 style = "text-align: center; font-size: 40px;"> Calculator </h1>
<form method="POST">
  <label for = "num1" style ="font-size: 20px"> First Number </label><br>
  <input class = "input_button" type = "text" id = "num1" name = "num1"><br>
  <select class = "input_button" name = "operator" style = "width: 73px">
    <option>   </option>
    <option> + </option>
    <option> - </option>
    <option> * </option>
    <option> / </option>
  </select><br>
  <label for = "num2" style ="font-size: 20px"> Second Number </label><br>
  <input class = "input_button" type = "text" id = "num2" name = "num2"><br>
  <input class = "submit_button" type = "submit" value = "Submit">
 
 
  
</form>
</div>
</body>