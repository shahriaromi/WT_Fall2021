<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "employee";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
 
 return $conn;
 }
 function Search($conn,$table,$search,$minSearch,$maxSearch)
 {
$result = $conn->query("SELECT * FROM $table WHERE Name='$search' OR ID='$search' OR Department='$search'  OR Salary='$minSearch' OR Salary='$maxSearch' ");
 return $result;
 }

 function SearchbyIDandName($conn,$table,$ename,$eid)
 {
$result = $conn->query("SELECT * FROM $table WHERE Name='$ename' AND ID='$eid' ");
 return $result;
 }



function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>