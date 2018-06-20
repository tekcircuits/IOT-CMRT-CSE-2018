<?php 
require_once 'config.inc.php';
//http://localhost/workshop/url.php?api=/input1=/input2=
$data = $_GET['user_id'];
$arr = (explode('/',$data));
//print_r($arr[0]);

$mode=(explode('=',$arr[1]));
//print_r($mode[1]); //mode
/*
$roll = $arr[0]; 

$input1 = explode('=',$arr[1]);
print_r($input1);

$input2 = explode('=',$arr[2]);
print_r($input2);*/
$query = "SELECT count(*) cnt, user_id FROM encrypt where user_id =$arr[0]";
$result = mysqli_query($con,$query);
//print_r($result);
$r=mysqli_fetch_assoc($result);
$count=($r['cnt']);

//echo $count;




if($mode[1]==1){
	
$query = "SELECT `id`, `user_id`, `data`, `date_time` FROM `encrypt` WHERE id=$count";
//echo $query;
$result = mysqli_query($con,$query);
$r=mysqli_fetch_assoc($result);
print_r(json_encode($r));
}

else if($mode[1]==0){
	
	$query = "SELECT `id`, `user_id`, `data`, `date_time` FROM `decrypt` WHERE id=$count";
//echo $query;
$result = mysqli_query($con,$query);
$r=mysqli_fetch_assoc($result);
print_r(json_encode($r));

}

?>