<?php
error_reporting(0);

  $query_fail=false;
	   include 'create.php';
	   include 'join.php';
	
       $check="SELECT * FROM $value WHERE id='$id'";
		$st=mysqli_query($GLOBALS['conn'],$check);
		if(!$st){
			$query_fail=true;
			echo $check;
			
		}
	
		


	if($GLOBALS['conn']->connect_error){
		
		echo "<div class='alert alert-danger alert-dismissible fade show' style='position:absolute; margin-top:123px;width:324px' role='alert'>
  <strong>Connection Failed!</strong>  connection failed please try again some time later.<p>If any diffculty arrise then contact to Sudhir Twaniya</p>
  <button type='button' class='btn-close' data-bs-dismiss='alert'  aria-label='Close'></button>
</div>";
		
	}
	
	
	
	
	
	
	
	
	
	else{
		
		
		$affect=mysqli_affected_rows($GLOBALS['conn']);
			if($affect>0 and !$query_fail){
				echo "<div class='alert alert-success alert-dismissible fade show' style='position:absolute; margin-top:123px;width:324px' role='alert'>
  <strong>{$value}!</strong>  Your Recoard sucessfuly updated in Tawaniya family.<p>If any diffculty arrise then contact to Sudhir Twaniya</p>
  <button type='button' class='btn-close' data-bs-dismiss='alert'  aria-label='Close'></button>
</div>";
			}
			else{
				echo "<div class='alert alert-danger alert-dismissible fade show ' style='position:absolute; margin-top:123px;width:324px' role='alert'>
  <strong>{$value} !</strong>  Worng ID please check mannualy.<p>If any diffculty arrise then contact to Sudhir Twaniya</p>
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
			}
		
		
	
		if($wifename==null)
		{
			$wifename="UNMARRIED";
	}
	$wifecol=false;
	while($row = mysqli_fetch_assoc($st)){
		if(isset($row['wife'])){
			$wifecol=true;
			
		}
	}
	
		if($wifecol==true){
		$update="UPDATE  $value SET wife= '$wifename',mothername= '$mothername',address= '$address',phone= '$phone',city= '$city',zip='$zip' WHERE id='$id'";
		}
		else{
			$update="UPDATE  $value SET daughter_in_law= '$wifename',mothername= '$mothername',address= '$address',phone= '$phone',city= '$city',zip='$zip' WHERE id='$id'";
			
		}
		
		$sql=mysqli_query($GLOBALS['conn'],$update);
		if(!$sql){
			
			$query_fail=true;
			
		}
		
		
		
		
			
		
		
	}
   
	

