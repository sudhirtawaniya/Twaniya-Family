
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <title>Make New Data</title>
	<style>
	body{
	background-image:url('bg-form.jpg');
	
	
	}
	#master-div{
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
	
	document.getElementById("wife").style.visibility="visible";
	document.getElementById("wife").style.display="block";
	document.getElementById("childreen").style.display="block";
	document.getElementById("wife1").required=true;
	document.getElementById("childreen").style.visibility="visible";
	document.getElementById("mother").className="col-md-6";
	document.getElementById("child").style.visibility="visible";
	document.getElementById("child").style.display="block";
	}
	else{
	document.getElementById("wife").style.display="none";
	document.getElementById("childreen").style.display="none";
	document.getElementById("wife").style.visibility="hidden";
	document.getElementById("childreen").style.visibility="hidden";
	document.getElementById("mother").className="col-12";
	document.getElementById("wife1").required=false;
	document.getElementById("child").style.display="none";
	document.getElementById("child").style.visibility="hidden";
	var y=document.getElementById("child0").value;
	document.getElementById("child").innerHTML=y.value="0";
	}
	}
	function child(){
	var x=document.getElementById("child0").value;
	document.getElementById("child").innerHTML=x.value="0";
	var data0=" <div class='col-md-6'>";
	var data=" <label for='cname' class='form-label'>Child</label><input type='text' class='fr' onKeyDown='javascript: var keycode = keyPressed(event); if(keycode==32){ return false;}' required id='cname' name='jh' required></input></div>";
	
	var z=parseInt(x);
	var n=["0","1","2","3","4","5","6","7","8"];
	for(var i=0;i<z;i++){
	document.getElementById("child").innerHTML+=data0;
	document.getElementById("child").innerHTML+=data;
	document.getElementById("cname").id=n[i];
	document.getElementById(n[i]).name=n[i];
	console.log(n[i]);
	

	
	}
	
	return i;
	}
	var sub=false;
	function resel(){
		
		if(document.getElementById("frms").checkValidity()){
			sub=true;
	document.getElementById("frms").submit(); 
	document.getElementById("frms").reset();
  document.getElementById("master-div").style.display="none";
	document.getElementById("master-div").style.visibility="hidden";
	document.getElementById("tawaniya").style.visibility="visible";
	document.getElementById("tawaniya").style.display="block";
	var option={
				animation : true,
				delay : 2000
			};
			
		var myt=document.getElementById("to");
		var tsel=new bootstrap.Toast(myt,option);
		tsel.hide();
	
      return true;
		}
		else{
			var option={
				animation : true,
				delay : 2000
			};
			
		var myt=document.getElementById("to");
		var tsel=new bootstrap.Toast(myt,option);
		tsel.show();
		
		
		document.getElementById("frms").focus();
		
		
   return false;
		}
	}
	function keyPressed(){
var key = event.keyCode || event.charCode || event.which ;
return key;
}
	</script>
  </head>
  <body   >
  <div id="progerssm" style="display:none;" >
 <div class="progress" style="height:5px">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 25%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div> 
 <div role="alert" aria-live="assertive" aria-atomic="true" class="toast position-absolute bottom-0 end-0 p-3 text-white bg-secondary border-0" id="to" data-bs-autohide="false">
  <div class="toast-header">
    <img src="tawaniya_family_toast.png" class="rounded me-2" alt="..." width="40px">
    <strong class="me-auto">Tawaniya Family</strong>
    <small id="time">...</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    Please fill the form properly.
  </div>
</div>
<div id="tawaniya" align="center" style="visibility:hidden; display:none;">
<img src="tawaniya_family.png" class="img-fluid"  >
</div>

  
  
  <div align="center" id="master-div" >
    
	
  <h1 style="padding-bottom:3%;color:#e44d12;" class="grow text-light">Welcomes To Tawaniyas</h1>
	<form class="row g-3 needs-validation" name="hii" id="frms" style="color:white" action="makefor.php" method="POST" >
	
  <div class="col-md-6"  >
    <label for="inputEmail4" class="form-label">Name</label>
    <input type="text" class="form-control" required id="name" name="name" onKeyDown="javascript: var keycode = keyPressed(event); if(keycode==32){  return false;}">
  </div>
   <div class="col-md-6"  >
    <label for="inputEmail4" class="form-label">Father's name
	</label>
    <input type="text" class="form-control" required id="fathername" name="fathername" onKeyDown="javascript: var keycode = keyPressed(event); if(keycode==32){ return false;}" >
  </div>
  <div class="col-12" id="mother">
    <label for="inputPassword4" class="form-label">Mother's Name</label>
    <input type="text" class="form-control" id="mother" name="mothername" onKeyDown="javascript: var keycode = keyPressed(event); if(keycode==32){ return false;}" required>
  </div>
  <div class="col-md-6" name="wife" id="wife" style="visibility:hidden; display:none">
    <label for="inputwife"  class="form-label">Wife's Name</label>
    <input type="text" class="form-control" id="wife1" name="wifename" >
  </div>
  
  
  <div class="col-12">
    <label for="inputAddress" class="form-label" >Address</label>
    <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St" required>
  </div>
  <div class="col-12">
    <label for="phone" class="form-label">Phone:</label>
    <input type="number" class="form-control" id="phone" name="phone" placeholder="+917346872363" onKeyDown="javascript: var keycode = keyPressed(event); if(keycode==32){  return false;}" >
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label" >City</label>
    <input type="text" class="form-control" id="inputCity" name="city" required>
  </div>
  
  <div class="col-md-6">
    <label for="zip" class="form-label">Zip</label>
    <input type="text" class="form-control" name="zip" id="zip">
  </div>
  <div align="center">
   <input class="form-check-input" type="checkbox"  name="married" id="gridCheck" onclick="wife()" >
  <label class="form-check-label" for="gridCheck">
        I'm married 
      </label>
     
      </div>
   
  <div class="col-12" id="childreen" style="visibility:hidden; display:none">
  <select class="form-select" style="width:130px" aria-label=" select example" align="right" onchange="child()" id="child0" name="child0" >
  <option selected value="0"  >Childreen</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
  <option value="4">Four</option>
  <option value="5">Five</option>
  <option value="6">Six</option>
  <option value="7">Seven</option>
  <option value="8">Eight</option>
  <option value="9">Nine</option>
</select>
 
 </div>
<div id="child" name="ch"></div>
    <button type="submit" class="btn btn-primary" name="btnsubmit" onclick="resel()" id="btnsubmit" >Submit</button>
 
  
</form>
  </div>
  
  
  <script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		
		
		$('#btnsubmit').on("click",function(e){
			if(sub){
			$('#progerssm').show();
			}
			
			$.ajax({
				
				url: "makefor.php",
				type: "POST",
			
				success:function(data){
					
					
					}
				
			});
		})
		
	});
	</script>


 
  </body>
</html>