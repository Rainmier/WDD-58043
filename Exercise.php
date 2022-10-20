<html>
<body>
<head>

<?php

$student_grade = 75;
if($student_grade>=70)
{
	echo"PASSED";
}
elseif($student_grade >=60 && $student_grade <= 69)
{
	echo"REMEDIAL";
}
else
{
	echo"FAILED";
}

echo"<br>";

$student_grade = 63;
if($student_grade>=70)
{
	echo"PASSED";
}
elseif($student_grade >=60 && $student_grade <= 69)
{
	echo"REMEDIAL";
}
else
{
	echo"FAILED";
}

echo"<br>";

$student_grade = 59;
if($student_grade>=70)
{
	echo"PASSED";
}
elseif($student_grade >=60 && $student_grade <= 69)
{
	echo"REMEDIAL";
}
else
{
	echo"FAILED";
}

?>


</head>
</body>
</html>