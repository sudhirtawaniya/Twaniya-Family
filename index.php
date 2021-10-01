<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	
    <title>Hello, world!</title>
	<style>
      .input-icons i {
            position: absolute;
        }
          
        .input-icons {
            width: 100%;
           
        }
          
        .icon {
            padding: 10px;
            color: Mediumslateblue;
            min-width: 50px;
            text-align: center;
        }
          
        .input-field {
            width: 100%;
            padding: 5px;
			margin-top:0px;
			background-color:#343a40;
			
            text-align: center;
        } 
       
#ms-div{
	width:690px;
	text-align: center;
	padding-left:33%;
	}	
	.borderClass{
		border-bottom:3px solid Mediumslateblue;
	}	

	</style>
	<script>
	var tb_name=show;
	function wife(){
		
	var x=document.getElementById("gridCheck");
	var t=0;
	if(x.checked){
	
	document.getElementById("wife").style.visibility="visible";
	document.getElementById("wife").style.display="block";
	
	document.getElementById("wife1").required=true;
	
	document.getElementById("mother1").className="col-md-6";
	
	}
	else{
		document.getElementById("wife1").required=false;
	document.getElementById("wife").style.display="none";
	
	document.getElementById("wife").style.visibility="hidden";
	
	document.getElementById("mother1").className="col-12";
	
	
	}
	}
	function visible(clicked){
		tb_name=show;
		
        var name = document.getElementById("tb").rows[clicked].cells.item(0).innerHTML;
		
		var fathername = document.getElementById("tb").rows[clicked].cells.item(1).innerHTML;
		
		  var mothername = document.getElementById("tb").rows[clicked].cells.item(2).innerHTML;
		   var phone = document.getElementById("tb").rows[clicked].cells.item(4).innerHTML;
		    var address = document.getElementById("tb").rows[clicked].cells.item(5).innerHTML;
			var city=document.getElementById("city").value;
			console.log(city);
			var zip=document.getElementById("zip").value;
			 document.getElementById("hd").innerHTML=name.trim();
		    document.getElementById("mother").value = mothername.trim();
			document.getElementById("fathername").value = fathername.trim();
			document.getElementById("fathername").readOnly=true;
			document.getElementById("phone").value = phone.trim();
			document.getElementById("address").value = address.trim();
			document.getElementById("cityi").value=city;
			document.getElementById("zipi").value=zip;
		 document.getElementById("sh").style.visibility="visible";
		document.getElementById("sh").style.display="block";
		
		
       document.getElementById("tb").style.display="none";
	
	  document.getElementById("tb").style.visibility="hidden";
		
	}
	</script>
	
  </head>
  
  <body class="bdh" style="background-color:#343a40;">
   


<div class="offcanvas offcanvas-start bg-dark text-white" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel" style="border-right:1px solid white">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel" style="border-bottom:2px solid #343a40;"><img src="tawaniya_family.png"  class="rounded md-115"  width="50px">Tawaniya Family</img></h5>
	 <div class="input-icons">
	 
	  <i class="fas fa-search icon"></i>
    <input name="se" id="srg" class="form-control input-field" type="search" placeholder="search..." >
	  
        
     
	  </div>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body text-white">
    <p>Welcome To Tawaniyas.</p>
	<div class="br text-white">
	 <a class="nav-link text-white" aria-current="page" href="index.php" style="width:15%;">Home</a>
        
          <a  class="nav-link text-white" href="#" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="width:15%;">
    Contact
  <a>


       
       
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:15%;">
            Dropdown
          </a>
         <ul class="dropdown-menu" style="background-color:#343a40" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" style="color: Mediumslateblue;" href="index2.php" target="_blank">Admin Page</a></li>
            <li><a class="dropdown-item"style="color: Mediumslateblue;"  href="Makenewdata.php" target="_blank">Add New Recoard</a></li>
           
          </ul>
       
        
      </ul>
	</div>
  </div>
</div>
<nav class="navbar navbar-dark bg-dark" id="hea" >

  <div class="container-fluid">
 

<img src="tawaniya_family_toast.png" class="rounded me-auto mb-2 mb-lg-0" alt="..." width="90px" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 
    <a class="navbar-brand"  >Tawaniyas</a>
	
    
 
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
        
  <a class="nav-link active" data-bs-toggle="collapse" href="#collapseExample"  aria-expanded="false" >
   Contact
  </a>
 


       </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" style="background-color:#343a40" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" style="color: Mediumslateblue;" href="index2.php" target="_blank">Admin Page</a></li>
            <li><a class="dropdown-item"style="color: Mediumslateblue;"  href="Makenewdata.php" target="_blank">Add New Recoard</a></li>
           
          </ul>
        </li>
        
      </ul>
    
	

	 <div class="input-icons">
	 <form>
	  <i class="fas fa-search icon"></i>
   <input name="se" id="sr" class="form-control input-field" type="search" placeholder="search..." >
	  
        
      </form>
	  </div>
    </div>

  </div>
  
</nav>
</nav>
<div class="collapse text-white" id="collapseExample" style="border-bottom:2px solid Mediumslateblue">
   
  <div class="card-header"style="border-bottom:2px solid white">Tawaniya Family
  
  </div>
  <div class="card-body">
    <h5 class="card-title" >Sudhir Tawaniya</h5>
    <p class="card-text">Name: sudhir</p><p>Email: sudhirtwaniya30@gmail.com</p><p>Phone: +919316035986</p><p>Address: 345,Tejarasar Bikaner</p><p style="border-top:2px solid white">A Sudhir Twaniya Product</p>
  </div>
  </div>
  
</div>
</div>
<div id="progerssm" style="display:none;" >
 <div class="progress" style="height:5px">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 25%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div> 
<div id="inc">


</div>
<div id="data"></div>

<div id="recoard">
</div>

<div id="ms-div">
 
   <div style="visibility:hidden; display:none" id="sh" class="fr mb-3 text-white">
   <form class="row g-3"  >
   <h1 align="center" id="hd"></h1>
  <div class="col-md-6"  >
    <label for="inputEmail4" class="form-label">Father's Name</label>
    <input type="text" class="form-control" required id="fathername" name="fathername" >
  </div>
    <div class="col-md-6"  >
    <label for="inputEmail4" class="form-label">ID
	</label>
    <input type="text" class="form-control" required id="id" name="id" >
  </div>
  <div class="col-12" id="mother1">
    <label for="inputPassword4" class="form-label">Mother's Name</label>
    <input type="text" class="form-control" id="mother" name="mothername" value="s" required>
  </div>
  <div class="col-md-6" name="wife1" id="wife" style="visibility:hidden; display:none" >
    <label for="inputwife"  class="form-label">Wife's Name</label>
    <input type="text" class="form-control" id="wife1" name="wifename"  >
  </div>
 
  <div class="col-12">
    <label for="inputAddress" class="form-label" >Address</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
  </div>
  <div class="col-12">
    <label for="phone" class="form-label">Phone:</label>
    <input type="number" class="form-control" id="phone" name="phone" placeholder="+917346872363">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label" >City</label>
    <input type="text" class="form-control" id="cityi" name="cityi"  required>
  </div>
  
  <div class="col-md-6">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" name="zipi"  id="zipi">
  </div>
  <div align="center">
   <input class="form-check-input" type="checkbox"  name="married" id="gridCheck" onclick="wife()" >
  <label class="form-check-label" for="gridCheck">
        I'm married 
      </label>
     
      </div>
   
 
 
 
     <div class="col-md-6">
	 <button type="button"  class="btn btn-outline-warning" onclick=" document.getElementById('sh').style.display='none';"><- Go Back</button>
      </div>
	  <div class="col-md-6">
    <button type="submit" id="submit" class="btn btn-outline-primary" name="submit" >Submit</button>
	
     </div>
	 
	
    
    
  
</form>
</div>
  </div>
  <div id="carouselExampleCaptions" class="carousel slide mt-3" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" >
    <div class="carousel-item active" align="center" >
      <img src="tawaniya_family_toast.png" class="d-block w-50" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Tawaniya Family</h5>
        <p>A Sudhir Tawaniya product.</p>
      </div>
    </div>
    <div class="carousel-item" align="center">
      <img src="tawaniya_family.png" class="d-block w-50" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item" align="center">
      <img src="tawaniya_family.png" class="d-block w-50" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
 <script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$("#hea").addClass('borderClass');
		$('.input-field').on("keyup",function(e){
			$('#progerssm').show();
			$("#hea").removeClass('borderClass');
			e.preventDefault();
			var search=$(this).val();
			
			
			$.ajax({
				
				url: "search.php",
				type: "POST",
			data: {search_value:search},
				success:function(data){
					$('#inc').html(data)
					$('#progerssm').hide();
					$("#hea").addClass('borderClass');
					
					},
				error: function (){console.log("error");}
			});
		})
		
		$('#submit').on("click",function(e){
			$('#progerssm').show();
			$("#hea").removeClass('borderClass');
			e.preventDefault();
			var fathername=$("#fathername").val();
			var mothername=$("#mother").val();
			var wifename=$("#wife1").val();
			var phone=$("#phone").val();
			var address=$("#address").val();
			var city=$("#cityi").val();
			var zip=$("#zipi").val();
			var value=$("#choldname").val();
			var id=$("#id").val();
			
			
			$.ajax({
				
				url: "update.php",
				type: "POST",
			data: {tb_name:tb_name,fathername:fathername,mothername:mothername,wifename:wifename,phone:phone,address:address,city:city,zip:zip,value:value,id:id},
				success:function(data){
					$('#recoard').html(data)
					$('#progerssm').hide();
					$("#hea").addClass('borderClass');
					},
				error: function (){console.log("error");}
			});
		})
		
	});
  </script>
	
	
  </body>
</html>