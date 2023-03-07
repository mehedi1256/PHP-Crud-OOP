<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	
</body>
</html>
<?php
	include 'database.php';

	$obj = new Database();

	$colName = "students.id,students.student_name,students.age,citytb.cname";
	$join = "citytb ON students.city = citytb.cid";
	$limit = 3;

	$obj->select('students','*',$join,null,null,$limit);
	$result = $obj->getResult();

	echo "<table border='1' width='500px' cellspacing = '0' cellpadding='10px'>
					<tr>
						<th>Id</th>
						<th>Student Name</th>
						<th>Age</th>
						<th>City</th>
					</tr>
				";
	foreach ($result as list("id"=>$id,"student_name"=>$name,"age"=>$age,"cname"=>$city)) {
		echo "<tr><td>$id </td><td> $name </td><td> $age </td><td> $city</td></tr>";
	}

	echo "</table>";

	$obj->pagination('students',$join,null,$limit);

	?>