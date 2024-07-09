<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

	  $empName = $_POST['empName'];
	  $empSalary = $_POST['empSalary']; 
	 // $empIncentive = $_POST['empIncentive']; 
	  $empMobile = $_POST['empMobile']; 
	  $empGender = $_POST['empGender']; 
	  $empAge = $_POST['empAge']; 
	  $empAddress = $_POST['empAddress']; 

	$sql = "INSERT INTO employee (emp_name, emp_salary, emp_mobile, emp_gender, emp_age, emp_address) VALUES ('$empName', '$empSalary','$empMobile', '$empGender', '$empAge', '$empAddress')";

	if($connect->query($sql) === TRUE) {
	 	$valid['success'] = true;
		$valid['messages'] = "Successfully Added";	
		header('Refresh: 3; URL = ../employee.php');
	} else {
	 	$valid['success'] = false;
	 	$valid['messages'] = "Error while adding the members";
	}
	 

	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST