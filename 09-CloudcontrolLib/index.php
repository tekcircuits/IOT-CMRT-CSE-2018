<html>

<head>
<link href="bootstrap.min.css" rel="stylesheet">
<script src="bootstrap.min.js"></script>
<style>
.container{
	
	height:650px;
	width:80%;
	background-color:#f5f5f5;
	margin-top:15px
	
}
.custom-select{
	width:50%;
}


</style>
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
  <style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
  </head>
     
<body>
 <div class="container" style="height:1500px">
        <div  style="padding-top:40px;color:#254970">
         <h4 align="center"><strong>Cloud Control Library</strong></h4>
         </div>
		 <form action="add.php" method="post">
		  <input type="submit" value="Add"  style="float:right"/> 
		  
		  </form>
                       
					   <?php
							require_once'config.inc.php'; 

							$query = "SELECT `id`, `user_id`, `pt_id`, `sw1`, `sw2`, `sw3`, `sw4`, `sw1_pt`, `sw2_pt`, `sw3_pt`, `sw4_pt` FROM `switches` WHERE user_id=1";
							$result = mysqli_query($con, $query);
                             
							if (!$result) {
								echo 'Could not run query: ' . mysql_error();
								exit;
							}
							$row= array();
							
						while($r=mysqli_fetch_assoc($result)){
							$row[]=$r;
						}
						
						 //print_r(sizeof($row));
							
                               
                               
                              
					   ?>
					   
					   

	 
	     
	 		 <?php 
                $i=1;
	          foreach($row as $r){
  // print_r($i);
                  echo '<div style="padding-bottom:0px"> <h5><strong>Pattern '.$i.'</strong></h5></div><br> 
                     <div class="row" style="margin-left:7px;padding-top:50px">';
            
				for($j=1;$j<5;$j++){
				echo '
				

	 <div class="col-lg-3">
        
	 <form action="save.php" method="post">
	 	<div style="padding-left:15px">
             <p style="color:#2196F3"><b>Switch'.$j.'</b></p>
                <label class="switch">
                 <input id = "check'.$i.$j.'" type="checkbox" id="cb" name="check'.$j.'">
                  <span class="slider"></span>
                </label><br>
		</div>
		 <div class="form-group" style="padding-top:10px">
            <select class="custom-select" id="sel'.$i.$j.'" name="sel'.$j.'">
				  <option selected="">Sequence</option>
				  <option value="1">1</option>
				  <option value="2">2</option>
				  <option value="3">3</option>
				  <option value="4">4</option>
            </select>
			<input type = "hidden" value = "'.$r['id'].'" name = "id">
         </div> 
  

		</div>
			  ';
				}
				$i++;
				echo '<div style="padding-left:900px">
				<input type="submit" value="Save" align="right"/>
				</div>
				</form>
  </div> 
';
			  }
			  
  
  ?>
  
   
		  

</div>
<script>
var switches = <?php print_r(json_encode($row)); ?>;
console.log(switches);
var k;
for(i=0;i<switches.length;i++){
	k = i+1;
	if(switches[i].sw1 == 1)
		$('#check'+k+1).prop('checked', true);
	if(switches[i].sw2 == 1)
		$('#check'+k+2).prop('checked', true);
	if(switches[i].sw3 == 1)
		$('#check'+k+3).prop('checked', true);
	if(switches[i].sw4 == 1)
		$('#check'+k+4).prop('checked', true);
	
	
	$("#sel"+k+1+" option").each(function (a, b) { 
			if ($(this).val() == $.trim(switches[i].sw1_pt)) 
				$(this).attr("selected", "selected");
		});
		$("#sel"+k+2+" option").each(function (a, b) { 
			if ($(this).val() == $.trim(switches[i].sw2_pt)) 
				$(this).attr("selected", "selected");
		});
		$("#sel"+k+3+" option").each(function (a, b) { 
			if ($(this).val() == $.trim(switches[i].sw3_pt)) 
				$(this).attr("selected", "selected");
		});
		$("#sel"+k+4+" option").each(function (a, b) { 
			if ($(this).val() == $.trim(switches[i].sw4_pt)) 
				$(this).attr("selected", "selected");
		});

}


	

	
	
</script>
	
</body>
</html>