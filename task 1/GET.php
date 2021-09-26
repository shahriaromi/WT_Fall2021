<?php
if (isset($_POST['submit'])){

  $firstName=$_POST['firstName'];
  $lastName=$_POST['lastName'];
  $email=$_POST["email"];
  $password=$_POST["password"];
  $age=$_POST["age"];
  $check1=$_POST['language1'];
  $check2=$_POST['language2'];
  $check3=$_POST['language3'];
  $designation=$_POST['designation'];

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <h1>Registration Form</h1>
    <form action="" method='post'>
      First Name: <input type="text" name='firstName' required><br><br>

      Last Name: <input type="text" name='lastName' required><br><br>

      E-mail: <input type="email" name='email' required><br><br>

      Password: <input type="password" name='password' required><br><br>
      
      Age: <input type="number" name='age' required><br><br>


      Designation: 
      <input type="radio" name="designation" id="juniorProgrammer" value="juniorProgrammer">
      <label for="juniorProgrammer">Junior Programmer</label>

      <input type="radio" name="designation" id="seniorProgrammer" value="seniorProgrammer">
      <label for="seniorProgrammer">Senior Programmer</label>

      <input type="radio" name="designation" id="projectLead" value="projectLead">
      <label for="projectLead">Project Lead</label><br><br>


    Preferred Language: 
    <input type="checkbox" id="java" name="language1" value="java" >
   <label for="language1"> JAVA</label>
    <input type="checkbox" id="php" name="language2" value="php">
   <label for="language2"> PHP</label>
    <input type="checkbox" id="c++" name="language3" value="c++">
    <label for="language3"> C++</label><br><br>

    <input type="submit" name="submit" value="Submit"><br><br><br>
    </form>
    <?php

      if (isset($_POST['submit'])){
        if(empty($firstName) || strlen($firstName) >5 || !ctype_alpha($firstName)){
          echo " Enter first name again. <br>";
        }
        else {
          echo "First name: $firstName <br>";
        }
        if(empty($lastName) || strlen($lastName) >5 || !ctype_alpha($lastName)){
          echo "Enter last name again. <br>";
        }
        else {
          echo "last name: $lastName <br>";
        }
        if(strlen($password) >=8){
          echo "Password: $password <br>";
        }
        else{
          echo "Enter password again. <br>";
        }

       
        if(empty($age)){
         
          echo "Enter age again. <br>";
        }
        else{
          echo "Age: $age <br>";
        }
        if(isset($_POST['designation'])){
          echo "Designation: $designation <br>";
        }
        if(!isset($_POST['language1']) && !isset($_POST['language2']) && !isset($_POST['language3'])){
          echo "Check language. <br>";
        }
        else{
          echo "<span>Preferred language: </span>";
          if(isset($_POST['language1'])){
            echo "<span>$check1</span><br>";
          }
          else{
            echo "";
          }
          if(isset($_POST['language2'])){
            echo "<span>$check2</span><br>";
          }
          else{
            echo "";
          }
          if(isset($_POST['language3'])){
            echo "<span>$check3</span>";
          }
          else{
            echo "";
          }
          echo "<br>";
        }
      }
    ?>    
</body>
</html>
