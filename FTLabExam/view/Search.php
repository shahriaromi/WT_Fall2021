<?php
include('../control/SearchControl.php');

?>
<!DOCTYPE html>
<html>
<body>

<h2>Search Employee</h2>

<form action="" method="post">
   Seacrh By ID: <input type="text" name="eid"  ><br>
   Search By Name:  <input type="text" name="ename"  ><br>
   Search By Name: <br>
   minimum <input type="number" name="minnumber"><br>
   maximum <input type="number" name="maxnumber"><br><br>
  
    <input name="submit" type="submit" value="Search">
</form>
<br>
<?php echo $error; ?>

</body>
</html>