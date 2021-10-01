<?php

$once=false;
if($conn->connect_error){
		echo "Failed";
	}
	else{
		
    $faild=false;
	if(isset($_POST['married'])){
		
		 
		$connect=$name.'_Family';	
		$tb_name=$connect;	
	if($child0!=0){
		  
		
   $q="CREATE TABLE $connect(id char(20),childreen char(26),mothername char(26),grandmother char(26),daughter_in_law char(26),phone varchar(120),address varchar(100),city char(34),zip varchar(10))";	
   $q1="CREATE TABLE $name(id char(27),fathername char(26),mothername char(26),wife char(26),phone varchar(12),address varchar(40),city char(34),zip varchar(10))";
       $sql=mysqli_query($GLOBALS['conn'],$q);
	    $pql=mysqli_query($GLOBALS['conn'],$q1);
			if(!$sql || !$pql){
				$faild=true;
				$m=true;
				
				
				
               				
				
			}
			
			
			
			  else{	
          $m=true;	
	
	
	
	
	if(!$faild){
	for($i=0;$i<$child0;$i++){
		$id=uniqid();
		$q="INSERT INTO $connect(id,childreen,mothername,grandmother,phone,address,city,zip)VALUES('$id','$childreen[$i]','$wifename','$mothername','$phone','$address','$city','$zip')";
		$sql=mysqli_query($GLOBALS['conn'],$q);
				
			
			if(!$sql){
				$faild=true;
				$m=true;
				
               	
				
			}
			else{
				$once=true;
			}
			
		
	}
	$id=uniqid();
	$q1="INSERT INTO $name(id,fathername,mothername,wife,phone,address,city,zip)VALUES('$id','$fathername','$mothername','UNMARRIED','$phone','$address','$city','$zip')";
				
	    $pql=mysqli_query($GLOBALS['conn'],$q1);
		if(!$pql){
				$faild=true;
				$m=true;
				
				
			}
		
	}
		
	}
		}
		else{
			  $q="CREATE TABLE $connect(id char(20),name char(26),wife char(26),mothername char(26),fathername char(26),phone varchar(120),address varchar(100),city char(34),zip varchar(10))";	
			  $sql=mysqli_query($GLOBALS['conn'],$q);
			if(!$sql){
				
				$faild=true;
				$m=true;
              	
			
				
			}
			
			
			
			  else{	
     $m=true;	
	
	
	
	
	if(!$faild){
		
	
		$id=uniqid();
		$q="INSERT INTO $connect(id,name,wife,mothername,fathername,phone,address,city,zip)VALUES('$id','$name','$wifename','$mothername','$fathername','$phone','$address','$city','$zip')";
				$sql=mysqli_query($GLOBALS['conn'],$q);
				if(!$sql){
					
					$m=false;
					
				
			}
			else{
				$once=true;
			}
			
		
	
	}
		
	}
		}

  
	}	
	
	

		
		
	
		else{
			$tab=$name;
			$tb_name=$tab;
			$q="CREATE TABLE $tab(id char(27),fathername char(26),mothername char(26),wife char(26),phone varchar(12),address varchar(100),city char(34),zip varchar(10))";
			
			$sql=mysqli_query($GLOBALS['conn'],$q);
			if(!$sql){
				$m=false;
				
				
				$faild=true;
				
				
			}
			if(!$faild){
				
				$id=uniqid();
			$q="INSERT INTO $tab(id,fathername,mothername,wife,phone,address,city,zip)VALUES('$id','$fathername','$mothername','UNMARRIED','$phone','$address','$city','$zip')";
			$m=true;
				$sql=mysqli_query($GLOBALS['conn'],$q);
				if(!$sql){
					$m=false;
					
					exit;
				
			}
			else{
				$once=true;
			}
			}
			
	}

	
	}

	
?>
