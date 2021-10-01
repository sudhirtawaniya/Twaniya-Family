<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Regestration</title>
	<style>
	body{
	background-color:black;
	background-image:url("tawaniya_family.png");
	background-repeat: no-repeat;
	 background-attachment: fixed;
  background-position: center;
	}
	</style>
	<script>
	function info(){
		document.getElementById("card").style.visibility="visible";
	    document.getElementById("card").style.display="block";
	    document.getElementById("fb").click();
		document.getElementById("card").style.position="absolute";
	}
	function infoc(){
		document.getElementById("card").style.visibility="hidden";
	    document.getElementById("card").style.display="none";
	}
	</script>
	
  </head>
  <body >
  <div id="progerssm" style="display:none;" >
 <div class="progress" style="height:5px">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 25%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div> 



  <div class="alert alert-danger alert-dismissible fade show" width="40px;" id="failed" role="alert" style="visibility:hidden; display:none;margin-top:123px;width:324px">
  <strong>Worng User name & Password!</strong><p>There are entered User name and Password are worng please check else contact To <a class="txt-info" onclick="info();" >Sudhir Tawaniya</a>.</p>
  <button type="button" class="btn-close" id="fb" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

  <div class="card text-dark bg-dark text-white mb-3" id="card"  style="max-width: 18rem; visibility:hidden; display:none;">
  <div class="card-header"style="border-bottom:2px solid white">Tawaniya Family
  <button type="button" class="btn-close" style="padding-left:100px;" onclick="infoc();"></button>
  </div>
  <div class="card-body">
    <h5 class="card-title" >Sudhir Tawaniya</h5>
    <p class="card-text">Name: sudhir</p><p>Email: sudhirtwaniya30@gmail.com</p><p>Phone: +919316035986</p><p>Address: 345,Tejarasar Bikaner</p><p style="border-top:2px solid white">A Sudhir Twaniya Product</p>
  </div>
  </div>
  
</div>
<div id="fm">
    <h1 style="color:#495057">Welcome TO STRF</h1>
	
  <div class="mb-3" style="text-align:center">
    <label for="exampleInputEmail1" class="form-label">User Name</label></br>
    <input type="text"   style="width:30%" "color:#" "margin-left:20%"class="form-control" id="username" name="username" aria-describedby="emailHelp">
    <div id="emailHelp" style="color:white" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3"  style="text-align:center">
    <label for="exampleInputPassword1" class="form-label">Password</label></br>
    <input type="password"  style="width:30%" "margin-left:20%"class="form-control" name="password"id="Password">
  </div>
  
  <button type="submit" name="submit" id="submit" class="btn btn-primary" style="margin-left:55%">Submit</button>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		function insert(){
			
			
		}
		insert();
		$('#submit').on("click",function(){
			$('#progerssm').show();
			
			var username=$("#username").val();
			var password=$("#password").val();
			
			
			$.ajax({
				
				url: "connect.php",
				type: "POST",
			data: {username:username,password:password},
				success:function(data){
					$('#fm').html(data);
					$('#progerssm').hide();
					
					},
				error: function (){console.log("error");}
			});
		})
		
	});
	</script>
  </body>
</html>