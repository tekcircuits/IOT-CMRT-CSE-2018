<?php 
require_once 'config.inc.php';

//http://localhost/workshop/feedback.php?user_id=1/pt_id=1/mode=    //feedback

//http://localhost/nodemcu/11-CloudcontrolFeedback/app/url.php?user_id=1/pt_id=2     //json data

$data = $_GET['user_id'];

//print_r($data);



$arr = explode('/',$data);
//print_r($arr[0]);  //user_id



$pt=explode('=',$arr[1]);
//print_r($pt[1]);  //pattern_id

$mode = explode('=',$arr[2]);
//print_r($mode[1]);  //mode

$query="INSERT INTO `feedback`(`user_id`, `pt_id`, `feedback`) VALUES ($arr[0],$pt[1],$mode[1])";
$result = mysqli_query($con,$query);
/*
$query="SELECT count(*) cnt, user_id FROM switches where user_id =1";
$result = mysqli_query($con,$query);
//print_r($result);
$r=mysqli_fetch_assoc($result);
$count=$r['cnt'];
//echo $count;

if($data==1){

$query ="SELECT `id`, `user_id`, `pt_id`, `sw1`, `sw2`, `sw3`, `sw4`, `sw1_pt`, `sw2_pt`, `sw3_pt`, `sw4_pt` FROM `switches` WHERE id=$count and user_id=1
";
//echo $query;
	$result = mysqli_query($con,$query);
	//print_r($result);
	
	$r=mysqli_fetch_assoc($result);
						
						
						print_r(json_encode($r));
}else
{
	
	
	echo 'invalid url';
}



*/
?>