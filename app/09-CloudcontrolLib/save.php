
<?php 
require_once 'config.inc.php';

if (mysqli_connect_errno()) {
die("Database connection failed: " .
mysqli_connect_error() .
" (" . mysqli_connect_errno() . ")"
);
}


$sel1 = $_POST['sel1'];
$sel2 = $_POST['sel2'];
$sel3 = $_POST['sel3'];
$sel4 = $_POST['sel4'];
$id = $_POST['id'];
if(!isset($_POST['check1'])){
	$check1 = 0;
}else
	$check1 = 1;
if(!isset($_POST['check2'])){
	$check2 = 0;
}else
	$check2 = 1;
if(!isset($_POST['check3'])){
	$check3 = 0;
}else
	$check3 = 1;
if(!isset($_POST['check4'])){
	$check4 = 0;
}else
	$check4 = 1;

print_r($check1.$check2.$check3.$check4);
// print_r($sel);
// print_r($id);
// print_r($id);



$query  = " UPDATE `switches` SET `sw1`='$check1',`sw2`='$check2',`sw3`='$check3',`sw4`='$check4',`sw1_pt`='$sel1',`sw2_pt`='$sel2',`sw3_pt`='$sel3',`sw4_pt`='$sel4' where id = '$id'";

 $result = mysqli_query($con, $query);
     if ($result) {
            header('Location:index.php');
        } 
       else 
		{
            die("Database query failed. " ); 
        }

	
mysqli_close($con);


?>