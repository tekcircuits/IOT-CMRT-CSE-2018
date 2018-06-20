<?php 
require_once 'config.inc.php';
//http://localhost/workshop/url.php?api=/input1=/input2=

$data = $_GET['mode'];

//print_r($data);


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




?>