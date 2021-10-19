<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<h1>Please fill up the Form</h1><hr>
<form action="./db.php"  method='post'>
First Name: <input type="text" name='firstName' ><br><br>

Last Name: <input type="text" name='lastName' ><br><br>
E-mail: <input type="email" name='email' ><br><br>

Gender: 
      <input type="radio" name="gender" id="male" value="male">
      <label for="male">Male</label>

      <input type="radio" name="gender" id="female" value="female">
      <label for="female">female</label><br><br>

Mobile no: <input type="number" name='mobile' ><br><br>
Date of birth: <input type="date" name="dob" id="dob"><br><br>
SSC results: <input type="text" name='ssc' ><br><br>
HSC results: <input type="text" name='hsc' ><br><br>
<label for="courses">Select a course you want to enroll:</label>
  <select id="courses" name="courses">
    <option value="cse">CSE</option>
    <option value="eee">EEE</option>
    <option value="bba">BBA</option>
  </select><br><br>
<label for="year">Choose a enrolling year:</label>
  <select id="year" name="year">
    <option value="2021">2021</option>
    <option value="2022">2022</option>
  </select><br><br>
<label for="semester">Choose a enrolling year:</label>
  <select id="semester" name="semester">
    <option value="summer">Summer</option>
    <option value="fall">Fall</option>
    <option value="winter">Winter</option>
  </select><br><br>
  <input type="submit" name="submit" value="Submit"><br><br><br>


</form>
</body>
</html>