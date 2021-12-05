<?php
include('../model/db.php');


 $error="";

if (isset($_POST['submit'])) {


$minSearch="";
$maxSearch="";
$search="";
if($_POST['ename']){
  $search=$_POST['ename'];
}
if($_POST['eid']){
  $search=$_POST['eid'];
}
if($_POST['minnumber']){
  $minSearch=$_POST['minnumber'];
}
if($_POST['maxnumber']){
  $maxSearch=$_POST['maxnumber'];
}


$connection = new db();
$conobj=$connection->OpenCon();


$userQuery=$connection->Search($conobj,"employee",$search,$minSearch,$maxSearch);

if ($userQuery->num_rows > 0) {
    echo "<table><tr><th>Employee ID</th><th> Employee Name</th><th>Department</th><th>JoiningDate</th><th>Salary</th></tr>";
  
    while($row = $userQuery->fetch_assoc()) {

      echo "<tr><td>".$row["ID"]."</td><td>".$row["Name"]."</td><td>".$row["Department"]."</td><td>".$row["JoiningDate"]."</td><td>".$row["Salary"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "";
  }




$connection->CloseCon($conobj);

}



?>
