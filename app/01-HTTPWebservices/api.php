<?php 
require_once 'config.inc.php';
//http://localhost/workshop/url.php?api=/input1=/input2=

$data = $_GET['mode'];

//print_r($data);




session_start();
//$_SESSION['user_id'] = $roll;
$user_id = $_SESSION['user_id'];

$query="SELECT count(*) cnt, roll_id FROM sentmsg where roll_id ='$user_id'";
$result = mysqli_query($con,$query);
//print_r($result);
$r=mysqli_fetch_assoc($result);
$count=$r['cnt'];
//echo $count;

if($data==1){

$query ="SELECT `id`, `roll_id`, `message`, `time` FROM `sentmsg` WHERE id=$count and roll_id='$user_id'";
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