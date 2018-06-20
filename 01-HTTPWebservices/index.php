

<html>


<head>

<title>
HTTp WEB IOT
</title>
<link href="bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<style>
.chat
{
    list-style: none;
    margin: 0;
    padding: 0;
}

.chat li
{
    margin-bottom: 10px;
    padding-bottom: 5px;
    border-bottom: 1px dotted #B3A9A9;
}

.chat li.left .chat-body
{
    margin-left: 60px;
}

.chat li.right .chat-body
{
    margin-right: 60px;
}


.chat li .chat-body p
{
    margin: 0;
    color: #777777;
}

.panel .slidedown .glyphicon, .chat .glyphicon
{
    margin-right: 5px;
}

.panel-body
{
    overflow-y: scroll;
    height: 250px;
}

::-webkit-scrollbar-track
{
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    background-color: #F5F5F5;
}

::-webkit-scrollbar
{
    width: 12px;
    background-color: #F5F5F5;
}

::-webkit-scrollbar-thumb
{
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
    background-color: #555;
}


</style>
</head>
<body>


<div class="container" style="margin-top:29px">
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <i class="fas fa-comments"></i> HTTP Web Services for IOT connected Devices
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                            <i class="fas fa-angle-double-down"></i>
                        </button>
                        <ul class="dropdown-menu slidedown">
                            <li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-refresh">
                            </span>Refresh</a></li>
                            <li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-ok-sign">
                            </span>Available</a></li>
                            <li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-remove">
                            </span>Busy</a></li>
                            <li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-time"></span>
                                Away</a></li>
                            <li class="divider"></li>
                            <li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-off"></span>
                                Sign Out</a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
                    <ul class="chat">
                       
                        
                        <li class="left clearfix"><span class="chat-img pull-right">
                            <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                        </span>
                         <?php
							require_once'config.inc.php'; 
								session_start();

                             $user_id = $_SESSION['user_id'];
							$query = "SELECT `ROLL_ID`, `INPUT1`, `INPUT2`, `time` FROM `data` WHERE ROLL_ID='$user_id'";
							//echo $query;
							$result = mysqli_query($con, $query);
							//print_r($result);
							

							if (!$result) 
                            {
								echo 'Could not run query: ' . mysql_error();
								exit;
							}
							$row= array();
						     while($r=mysqli_fetch_assoc($result))
                              {
							    $row[]=$r;
						      }
                         // print_r($row);


                  
						  //$i=0;
	                       foreach($row as $r){
                                    
                                

                            echo '<div class="chat-body clearfix">
                                <div class="header" style="padding-top:10px">
								  <p>
								     
									 INPUT1:'.$r["INPUT1"].' INPUT2 : '.$r["INPUT2"].';

                                 </p>
                                    <small class=" text-muted"><i class="far fa-clock"></i>'.$r["time"].'</small>

                                </div>
                                
                            </div>';
                            }//$i++
                                   echo ' <strong class="pull-right primary-font">  '.$r["ROLL_ID"].' </strong>';
							?>
                        </li>
                        <li class="right clearfix"><span class="chat-img pull-left">
                            <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
                        </span>
							
							<?php
							require_once'config.inc.php'; 
							
							//session_start();

                             $user_id = $_SESSION['user_id'];

							$query = "SELECT `id`,`message`, `time` FROM `sentmsg` WHERE roll_id='$user_id'";
							echo $query;
							
							$result = mysqli_query($con, $query);
							//print_r($result);
							

							if (!$result) 
                            {
								echo 'Could not run query: ' . mysql_error();
								exit;
							}
							$row= array();
						     while($r=mysqli_fetch_assoc($result))
                              {
							    $row[]=$r;
						      }
                        // print_r($row);


                  
						  //$i=0;
	                       foreach($row as $r){
                                    
                                         echo           '<p>INPUT1:'.$r["message"].'.<br></p>';


                            echo '<div class="chat-body clearfix ">
                                <div class="header" style="padding-bottom:10px">
                                   
                                    <small class=" text-muted"><i class="far fa-clock"></i>'.$r["time"].'</small>
                                  
                                </div>
                              
                            </div>';
                            }//$i++
                                   echo ' <strong class="pull-left primary-font">  '.$r["id"].' </strong>';
							?>
                        </li>
                    </ul>
                </div>
                <div class="panel-footer">
                    <div class="input-group">
					<form action="process.php" method="post">
				 <div class="row" style="padding-bottom:15px">
                   <div class="col-lg-6" style="padding-left:15px">
				   <!-- <input id="btn-input" type="text" class="form-control input-sm pull-left" name="id" placeholder="Enter ID" />-->
                      </div>
                       <div class="col-lg-6">
                        <input id="btn-input" type="text" class="form-control input-sm pull-right" name="msg" placeholder="Type your message here..." />
                    </div>
				   </div>
                        <span class="input-group-btn">
                            <button class="btn btn-warning btn-sm" id="btn-chat">
                                Send</button>
                        </span>
						</form>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>