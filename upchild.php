<?php
 $term++;
	if(!empty($_POST['submit'])){

   
   $grandfathername=$_POST['grandfname'];
   $grandmname=$_POST['grandmname'];
	
	if($conn->connect_error){
		echo "Failed";
		
	}
	else{
		
		
		
		echo "connected fsjlfkjsalfjslfsjafsajfsdajfsdjflsjfsdljsjdfsdjf;sldjfsldjflajsflsjfsjflsjfsdjfdfsljfsdsafiejeijfnjdsfjsjlfjsflksfijsdfjeljosdjfjsja";
		echo $no_ch;
		
			
			
			$connect="$fathername$grandfathername$grandmname";
		$q="UPDATE  $connect SET mothername= '$mothername',address= '$address',phone= '$phone' WHERE childreen='$name'";
		$sql=mysqli_query($GLOBALS['conn'],$q);
		if(!$sql){
			echo "error";
			echo $q;
		}
		else{
			$run=true;
		}
		
		
		
	}
	}
	
if($m==true and $child0>$k){
	
?>
	<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>GIVE THE INFORMATION ABOUT...</title>
	<style>
	body{
	background-image:url('bg2.jpg');
	
	
	}
	div{
	width:690px;
	text-align: center;
	padding-left:33%;
	}
	</style>
		
		
	
	
	<script>
	function wife(){
	var x=document.hii.gridCheck;
	var t=0;
	if(x.checked){
	
	document.getElementById("wife1").style.visibility="visible";
	document.getElementById("wife1").style.display="block";
	
	document.getElementById("wife1").required;
	
	document.getElementById("mother").className="col-md-6";
	
	}
	else{
	document.getElementById("wife1").style.display="none";
	
	document.getElementById("wife1").style.visibility="hidden";
	
	document.getElementById("mother").className="col-12";
	
	}
	}
	function set(){
		var x=document.hii.seti;
		var y=document.hii.gridCheck;
		if(x.checked){
			alert("hellow");
		
        var grandm=document.getElementById("grandmname").value;
		var grandf=document.getElementById("grandfname").value;
        var motherN=document.getElementById("mother1").value;
        var father=document.getElementById("fathername").value;
		if(y.checked){
		var wife1=document.getElementById("wifename1").value;
		 document.getElementById("wifename1").setAttribute('readonly',true);
		}
        var address=document.getElementById("address").value;
        var phone=document.getElementById("phone").value;
        var city=document.getElementById("city").value;		
		var zip=document.getElementById("zip").value;
		var state=document.getElementById("inputState").value;
		
		
		document.getElementById("mother1").setAttribute('readonly',true);
		document.getElementById("fathername").setAttribute('readonly',true);
	   
		document.getElementById("address").setAttribute('readonly',true);
		document.getElementById("phone").setAttribute('readonly',true);
	    document.getElementById("city").setAttribute('readonly',true);
		document.getElementById("zip").setAttribute('readonly',true);
		document.getElementById("inputState").setAttribute('readonly',true);
		
		
		
		}
		else{
			alert("hellow");
			document.getElementById("mother1").removeAttribute('readonly');
		document.getElementById("fathername").removeAttribute('readonly');
	   document.getElementById("inputState").removeAttribute('readonly');
		document.getElementById("address").removeAttribute('readonly');
		document.getElementById("phone").removeAttribute('readonly');
	    document.getElementById("city").removeAttribute('readonly');
		document.getElementById("zip").removeAttribute('readonly');
		if(y.checked){
		document.getElementById("wifename1").removeAttribute('readonly');
		}
		}
	} 
	
	</script>


		
		
	  </head>	
	
  <body style="color:white"  >
  
    <h1 align="center"style="padding-bottom:3%">Welcome To Tawaniyas</h1>
	
<div align="center" id="main"  readonly="true">
	<form class="row g-3 needs-validation" name="hii" id="form" style="color:white" action=# method="POST">
	
	 <div class="col-md-6"  >
    <label for="inputEmail4" class="form-label">Grand Father Name</label>
    <input type="text" class="form-control" required id="grandfname" name="grandfname" value="<?php echo $fathername?>"  readonly >
  </div>
  <div class="col-md-6"  >
    <label for="inputEmail4" class="form-label">Grand Mother Name</label>
    <input type="text" class="form-control" required id="grandmname" name="grandmname" value="<?php echo $mothername ?>"  readonly >
  </div>
  <div class="col-md-6"  >
    <label for="inputEmail4" class="form-label">Name</label>
    <input type="text" class="form-control" required id="name" name="name" value="<?php echo $childreen[$k]?>"  readonly >
  </div>
   <div class="col-md-6"  >
    <label for="inputEmail4" class="form-label">Father's name
	</label>
    <input type="text" class="form-control" required id="fathername" name="fathername" value="<?php echo $name ?>" readonly required >
  </div>
  <div class="col-12" id="mother" >
    <label for="inputPassword4" class="form-label">Mother's Name</label>
    <input type="text" class="form-control" id="mother1" name="mothername" value="<?php echo $wifename  ?>" required>
  </div>
  <div class="col-md-6" name="wife" id="wife1" style="visibility:hidden; display:none">
    <label for="inputwife"  class="form-label">Wife's Name</label>
    <input type="text" class="form-control" id="wifename1" name="wifename" >
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label" >Address</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
  </div>
  <div class="col-12">
    <label for="phone" class="form-label">Phone:</label>
    <input type="phone" class="form-control" id="phone" name="phone" placeholder="+917346872363">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label" >City</label>
    <input type="text" class="form-control" id="city" name="city" required>
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label" >State</label>
    <select id="inputState" class="form-select"  name="state" required>
      <option selected >Choose...</option>
      <option value="r">Raj</option>
	  <option value="g">guj</option>
	   <option value="m">MH</option>
	    <option value="c">cal</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" name="zip" id="zip">
  </div>
  <div align="center">
   <input class="form-check-input" type="checkbox"  name="married" id="gridCheck" onclick="wife()" >
  <label class="form-check-label" for="gridCheck">
        I'm married 
      </label>
     
      </div>
  <input name="no_ch" value="<?php echo $child0 ?>" style="visibility:hidden; display:none;"></input>
   <div align="center">
   
      </div>
	     <div align="center">
      <input class="form-check-input" type="checkbox"  name="seti" id="seti" onchange="set()" onclick="<?php $pr=true ?>" >
  <label class="form-check-label" for="seti">
        All Set
      </label>
	  </div>
 	  <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
	
  <button type="submit" class="btn btn-primary" >Submit</button>
	
	</form>
 
   </div>
  


  
  


   
	

	
</body>
</html>		
<?php
	
	



 }


	?>
	