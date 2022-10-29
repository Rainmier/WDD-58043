<html>
<head>
  <title>Grade Evaluator</title>
  <style>
    body {
      background-color: white;
    }
    .main-div {
      margin: 30px auto;
      text-align: center;
      padding: 10px;
      width: 100&;
      min-height: 100px;
      border-radius: 100px;
      background-color: pink;
    }
  </style>

</head>
<body>

  <div class = "main-div">
  <h1>Student Grade Evaluator</h1>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="name"><br>
    Grade: <input type="integer" name="grade"><br><br>
    <input type="submit">
  </form>

  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // collect value of input field
      $name = $_REQUEST["name"];
      $grade = $_REQUEST["grade"];
      if ($grade >= 70) 
      {
        echo "Name: <b>".$name . "</b><br>Grade: <b>". $grade . "</b><br> <b>PASSED</b><br><br>";
      } 
      elseif (($grade >=60) && ($grade <=69))
      {
        echo "Name: <b>".$name . "</b><br>Grade: <b>".$grade . "</b><br> <b>REMEDIAL</b><br><br>";
      }
      else
      {
        echo "Name: <b>".$name . "</b><br>Grade: <b>".$grade . "</b><br> <b>FAILED</b><br><br>";
      }
    }
  ?>

</body>
</html>