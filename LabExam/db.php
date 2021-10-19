<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aiub";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
 }
 echo "Connected successfully";

$firstName =  $_REQUEST['firstName'];
$lastName = $_REQUEST['lastName'];
$email = $_REQUEST['email'];
$gender =  $_REQUEST['gender'];
$mobile = $_REQUEST['mobile'];
$dob = $_REQUEST['dob'];
$ssc = $_REQUEST['ssc'];
$hsc = $_REQUEST['hsc'];
$courses = $_REQUEST['courses'];
$year = $_REQUEST['year'];
$semester = $_REQUEST['semester'];


$sql = "INSERT INTO new_students (firstName, lastName, email,gender,mobile,dob,ssc,hsc,courses,year,semester)
VALUES ('$firstName', '$lastName', '$email','$gender','$mobile','$dob','$ssc','$hsc','$courses','$year','$semester')";
if ($conn->query($sql) === TRUE) {
 echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>
</body>
</html>