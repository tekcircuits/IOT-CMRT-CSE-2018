<?php
 if(isset($_POST['login']))
{
    login();
}

function login(){
	require_once 'config.inc.php';

	$email = $_POST["email"];
	$password = $_POST["password"];

	$query = "SELECT * FROM user WHERE email = '$email'";
	$result = mysqli_query($con,$query);
	$row = mysqli_fetch_assoc($result);
  //print_r($row);
	if($row["email"]==$email && $row["password"]==$password){
		session_start();
		$_SESSION['email'] = $email;
		$_SESSION['name'] = $row["full_name"];
		$_SESSION['u_id'] = $row["rfid_tag"];
		
	
		header('Location:dashboard.php');
		}
	else{
		echo "<script type = 'text/javascript'>alert('Invalid login credentials') </script>";
		echo "<script>window.location='login.html'</script>";
		}

}

?>