<?php 	

require_once 'core.php';

$sql = "SELECT emp_id, emp_name, emp_salary, emp_incentive, emp_mobile, emp_gender, emp_age, emp_address FROM employee";
$result = $connect->query($sql);

$output = array('data' => array());

$result = $connect->query($sql);
$data = $result->fetch_row();
$valid['data'] = $data;


$connect->close();

echo json_encode($valid);
?>