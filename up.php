<?php

error_reporting(0);

  $query_fail=false;
	   include 'create.php';
	   include 'join.php';
	if($GLOBALS['conn']->connect_error){
		
		
		
	}
	else{
		
	
		$value=$_POST['value'];	
		
		
		
	
		if($wifename==null)
		{
			$wifename="UNMARRIED";
	}
		if($m==true and $child0>$k){
		$update="UPDATE  $value SET wife= '$wifename',mothername= '$mothername', childreen= '$name',address= '$address',phone= '$phone',city= '$city',zip='$zip' WHERE id='$id'";
		}
		else{
			$update="UPDATE  $value SET daughter_in_law= '$wifename',mothername= '$mothername',address= '$address',phone= '$phone',city= '$city',zip='$zip' WHERE id='$id'";
			
		}
		
		$sql=mysqli_query($GLOBALS['conn'],$update);
		if(!$sql){
			echo $update;
			$query_fail=true;
			
		}
		else{
			
			
			
		}
		$check="SELECT * FROM $value WHERE id='$id'";
		$sql=mysqli_query($GLOBALS['conn'],$check);
		if(!$sql){
			$query_fail=true;
		}
		else{
			$affect=mysqli_affected_rows($GLOBALS['conn'])."</br>";
			if($affect>0&&!$query_fail){
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
		}
		?>
		
		
	<?php }
   
	?>