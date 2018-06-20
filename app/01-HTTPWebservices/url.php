<?php 
require_once 'config.inc.php';
//http://localhost/workshop/url.php?api=/input1=/input2=
$data = $_GET['api'];
$arr = (explode('/',$data));
print_r($arr);
$roll = $arr[0]; 
session_start();
$_SESSION['user_id'] = $roll;
$user_id = $_SESSION['user_id'];
//print_r($user_id);


$input1 = explode('=',$arr[1]);
//print_r($input1);

$input2 = explode('=',$arr[2]);
//print_r($input2);
$query = "insert into data(ROLL_ID,INPUT1,INPUT2) values('$roll','$input1[1]','$input2[1]')";
$result = mysqli_query($con,$query);
//print_r($result);
if($result)
	echo "success";
?>