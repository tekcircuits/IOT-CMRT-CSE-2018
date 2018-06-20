
<?php 
require_once 'config.inc.php';

if (mysqli_connect_errno()) {
die("Database connection failed: " .
mysqli_connect_error() .
" (" . mysqli_connect_errno() . ")"
);
}


$query="SELECT count(*) cnt FROM `switches` WHERE user_id=1";

                  $result = mysqli_query($con, $query);
                             
							if (!$result) {
								echo 'Could not run query: ' . mysql_error();
								exit;
							}
							
							
						while($r=mysqli_fetch_assoc($result)){
							$row=$r;
						}
						//print_r($row);
 
 
 
 $count = $row['cnt']+1;
 //print($count);

$query  = " INSERT INTO `switches`( `user_id`, `pt_id`) VALUES ( 1,'$count')";

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