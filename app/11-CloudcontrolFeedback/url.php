<?php 
require_once 'config.inc.php';
//http://localhost/workshop/url.php?api=/input1=/input2=
$data = $_GET['user_id'];
$arr = explode('/',$data);
//print_r($arr[0]); //pt_id
$tag = explode('=',$arr[1]);
 //print_r($tag[1]);   //user_id
$query = "SELECT  `pt_id`, `sw1`, `sw2`, `sw3`, `sw4`, `sw1_pt`, `sw2_pt`, `sw3_pt`, `sw4_pt` FROM `switches` WHERE user_id='$arr[0]' and pt_id='$tag[1]'";


$result = mysqli_query($con,$query);
//print_r($result);
	$row = mysqli_fetch_array($result);
	//print_r($row);
	echo json_encode($row);


if($row==true){
  //print_r($row);

$user_id ="";
foreach ($row as $r)
{
	$user_id=$r;
	//echo $user_id;
}





}




?>