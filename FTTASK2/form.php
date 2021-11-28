<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <form action="" onsubmit="return validateForm()" method="post">
  <label class="label" for="">First Name:</label>
        <input type="text" name="firstName" id="firstName" /><br /><br />

        <label class="label" for="">Last Name:</label>
        <input type="text" name="lastName"  /><br /><br />

        <label class="label" for="">Age:</label>
        <input type="number" name="age"  /><br /><br />
        <label class="label" for="">Designation:</label>
        <input
          type="radio"
          name="designation"
          id="juniorProgrammer"
          value="juniorProgrammer"
        />
        <label for="juniorProgrammer">Junior Programmer</label>

        <input
          type="radio"
          name="designation"
          id="seniorProgrammer"
          value="seniorProgrammer"
        />
        <label for="seniorProgrammer">Senior Programmer</label>

        <input
          type="radio"
          name="designation"
          id="projectLead"
          value="projectLead"
        />
        <label for="projectLead">Project Lead</label><br /><br />

        <label class="label" for="">Preferred Language:</label>
        <input type="checkbox" id="java" name="language1" value="java" />
        <label for="language1"> JAVA</label>
        <input type="checkbox" id="php" name="language2" value="php" />
        <label for="language2"> PHP</label>
        <input type="checkbox" id="c++" name="language3" value="c++" />
        <label for="language3"> C++</label><br /><br />
        <label class="label" for="">E-mail:</label>
        <input type="email" name="email"  /><br /><br />

        <label class="label" for="">Password:</label>
        <input type="password" name="password"  /><br /><br />

        <label class="label" for="">Please choose a file</label>
        <input type="file" name="" id="file" />
        <input type="submit" value="Submit">

  </form>
  <p id="show"></p>
  <script src="./myjs.js"></script>
</body>
</html>