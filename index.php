

<?php
	include 'database.php';

	$obj = new Database();

	$colName = "students.id,students.student_name,students.age,citytb.cname";
	$join = "citytb ON students.city = citytb.cid";
	$limit = 3;

	$obj->select('students',$colName,$join,null,null,$limit);
	echo "\n\nSelect result is : ";
	echo "<pre>";
	print_r($obj->getResult());
	echo "</pre>";
	$obj->pagination('students',$join,null,$limit);

	// $obj->insert('students',['student_name'=>'mehedi','age'=>'22','city'=>'dhaka']);
	// echo "Insert result is : ";
	// print_r($obj->getResult());

	// $obj->update('students',['city'=>'dhaka'],'city="rajshahi"');
	// echo "Update result is : ";
	// print_r($obj->getResult());

	// $obj->delete('students','age ="20"');
	// echo "Delete result is : ";
	// print_r($obj->getResult());

	// $obj->sql('SELECT * FROM students WHERE age = "20"');
	// echo "SQL result is : ";
	// print_r($obj->getResult());



?>