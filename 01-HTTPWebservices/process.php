<?php // Create a database connection.
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "httpiot";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

//Test if connection occurred.
if (mysqli_connect_errno()) {
die("Database connection failed: " .
mysqli_connect_error() .
" (" . mysqli_connect_errno() . ")"
);
}

$msg = $_POST['msg'];
$id = $_POST['id'];

session_start();
//$_SESSION['user_id'] = $roll;
$user_id = $_SESSION['user_id'];
  
  echo $user_id;


$query  = " INSERT INTO `sentmsg`(`roll_id`, `message`) VALUES ('$user_id','$msg')";

 $result = mysqli_query($connection, $query);
     if ($result) {
            header('Location:index.php');
        } 
       else 
		{
            die("Database query failed. " . mysqli_error($connection)); 
        }

	
mysqli_close($connection);

?>
