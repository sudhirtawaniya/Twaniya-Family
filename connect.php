
<?php

     
	error_reporting(0);
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	include 'join.php';

	if($conn->connect_error){
		
		include 'index2.php';
		?>
		<script>
		document.getElementById("failed").style.visibility="visible";
	    document.getElementById("failed").style.display="block";
		document.getElementById("failed").style.position="absolute";
		
		</script>
		<body>
		
		</body>
<?php
	}
	else{?>
	

	<script>
	function makenew(){

window.location="Makenewdata.php";

}
function update(){
window.location="index.php";
}
	</script>
	
  
  
   <h1 align="center" style="padding-bottom:220px">What You Want?</h1>
<div align="center">
<input type="radio" class="btn-check" name="makefor" id="makefor" autocomplete="off" onclick="makenew()">
<label class="btn btn-outline-success" for="makefor">Make new</label>

<input type="radio" class="btn-check" name="update" id="update" autocomplete="off" onclick="update()">
<label class="btn btn-outline-danger" for="update" >Update</label></br>
   </div>
  
	
	<?php
	}
	
?>
	</body>
</html>