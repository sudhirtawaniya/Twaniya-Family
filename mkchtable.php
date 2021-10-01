 
 
 <?php

 
 

 $q= "SELECT * FROM $tb_name";





echo $soldname;
//echo $_SESSION['table'];
 $sql=mysqli_query($GLOBALS['conn'],$q);
 $btn=1;
 ?>
 <div id="if-else">
 <?php
 if($once==true and $child0==0){?>
 
 <div class='alert alert-success alert-dismissible fade show' style='position:absolute;'  role='alert'>
  <strong><?php echo $name ?>!</strong>  Your Recoard sucessfuly Inserted in Tawaniya family.<p>Your ID is <?php echo $id ?></p><strong>
  PLEASE KEEP SECURE Your ID</strong><p>If any diffculty arrise then contact to Sudhir Twaniya</p>
  <button type='button' id="rady" class='btn-close' data-bs-dismiss='alert'  aria-label='Close'></button>
</div>

 <?php }
 elseif($m==true and $child0>0 and $once==true){
	
	  while($go = mysqli_fetch_assoc($sql)) {?>
	   <div class='alert alert-success alert-dismissible fade show' style='position:absolute;'  role='alert'>
  <strong><?php echo $go['childreen']; ?>!</strong>  Your Recoard sucessfuly Inserted in Tawaniya family.<p>Your ID is <?php echo $go['id']; ?></p><strong>
  PLEASE KEEP SECURE Your ID</strong><p>If any diffculty arrise then contact to Sudhir Twaniya</p>
  <button type='button' id="rady" class='btn-close' data-bs-dismiss='alert'  aria-label='Close'></button>
</div>
	  <?php }
	 
 }
 elseif($once==false and mysqli_num_rows($sql)==0){?>
	 <div class='alert alert-danger alert-dismissible fade show ' style='position:absolute; ' role='alert'>
  <strong><?php echo $name ?>!</strong>We are unable to insert your data in Tawaniya Family <strong>Because 
  This Recoard Already Exists.<p>We did't give the ID</p>
  </strong>The Releated data showing in table<p>If any diffculty arrise then contact to Sudhir Twaniya</p>
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>
<?php }

 ?>
 </div>
 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Family</title>
	<style>
	body{
	background-color:black;
	  
	background-image:url("tawaniya_family.png");
	
	background-repeat: no-repeat;
	 background-attachment: fixed;
  background-position: center;
	
	
	}
	
	#ms-div{
	width:690px;
	text-align: center;
	padding-left:33%;
	color:#e0ebeb;
	}
	</style>
	<script>
	
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
		
		
        var name = document.getElementById("tb").rows[clicked].cells.item(0).innerHTML;
		
		var fathername = document.getElementById("tb").rows[clicked].cells.item(1).innerHTML;
		
		  var mothername = document.getElementById("tb").rows[clicked].cells.item(2).innerHTML;
		   var phone = document.getElementById("tb").rows[clicked].cells.item(4).innerHTML;
		    var address = document.getElementById("tb").rows[clicked].cells.item(5).innerHTML;
			
			 document.getElementById("hd").innerHTML=name.trim();
		    document.getElementById("mother").value = mothername.trim();
			document.getElementById("fathername").value = fathername.trim();
			document.getElementById("fathername").readOnly=true;
			document.getElementById("phone").value = phone.trim();
			document.getElementById("address").value = address.trim();
		 document.getElementById("sh").style.visibility="visible";
		document.getElementById("sh").style.display="block";
		
		
       document.getElementById("tb").style.display="none";
	
	  document.getElementById("tb").style.visibility="hidden";
		
	}
	 function visible1(clicked){
		
		
        var name = document.getElementById("tb").rows[clicked].cells.item(0).innerHTML;
		
		var fathername = document.getElementById("tb").rows[clicked].cells.item(1).innerHTML;
		
		  var mothername = document.getElementById("tb").rows[clicked].cells.item(2).innerHTML;
		   var phone = document.getElementById("tb").rows[clicked].cells.item(4).innerHTML;
		    var address = document.getElementById("tb").rows[clicked].cells.item(5).innerHTML;
			
		     	 document.getElementById("hd").innerHTML=name.trim();
		    document.getElementById("mother").value = mothername.trim();
			document.getElementById("fathername").value = fathername.trim();
			document.getElementById("phone").value = phone.trim();
			document.getElementById("address").value = address.trim();
		 document.getElementById("sh").style.visibility="visible";
		document.getElementById("sh").style.display="block";
		
       document.getElementById("tb").style.display="none";
	
	  document.getElementById("tb").style.visibility="hidden";
		
	}
	
	
	</script>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$('#rady').on("click",function(e){
		var l=document.getElementById("tb").rows.length;
	   console.log(l);
	if(l<2){
		
			$('#progerssm').show();
			
			
			$.ajax({
				
				
				success:function(data){
					
					location.reload();
					$('#progerssm').hide();
					},
				error: function (){console.log("error");}
			});
	}
		})
	});
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
  <div id="inc"   >
  
  </div> 
 
  <div id="tb-alt">
 <?php  if($child0>0){
	
	 ?>
 
  <h1 name="cap" align="center"><?php echo $name."'s Family"; ?></h1>
   <table class="table table-dark" id="tb"  align="center">
   
   <thead>
   <tr>
   <th>
   NAME
   </th>
    <th>
   FATHERNAME
   </th>
    <th>
  MOTHER NAME
   </th>
       <th>
  WIFE NAME
   </th>
   <th>PHONE</th>
   <th>ADDRESS</th>
   <th>UPDATE</th>
   </tr>
    </thead>
   <?php
  $k=0;  
 if (mysqli_num_rows($sql) > 0) {?>
	 <tbody>
	 <?php
	 
  // output data of each row
  while($row = mysqli_fetch_assoc($sql)) {?>
   
   <tr>
   <td>
   <?php echo $row["childreen"]; ?>
   </td>
   <td>
    <?php echo $name; ?>
	</td>
	<td>
	 
	  <?php echo $row["mothername"]; ?>
   </td>
   <td>
	 
	  <?php if($row["daughter_in_law"]==null){$row["daughter_in_law"]="UNMARRIED";} echo $row["daughter_in_law"]; ?>
   </td>
    <td>
   <?php echo $row["phone"]; ?>
   </td>
    <td>
   <?php echo $row["address"]; ?>
   </td>
   <td><button type="button" class="btn btn-outline-info" id="btn<?php echo $btn; ?>" name="<?php echo $btn; ?>" onclick="visible(this.name)">Edit</button></td>
   </tr>
   
   
  <?php 
  $btn++;
  $k=$k+1;
 $zip=$row['zip'];
 $city=$row['city'];
 
  }
 } 

 ?>
    </tbody> 
   </table>
 <?php } 
 else{ 
  
 ?>
	<table class="table table-dark" id="tb"  align="center">
   
   <thead>
   <tr>
   <th>
   NAME
   </th>
    <th>
   FATHERNAME
   </th>
    <th>
  MOTHER NAME
   </th>
    <th>
  WIFE NAME
   </th>
   
   <th>PHONE</th>
   <th>ADDRESS</th>
   <th>UPDATE</th>
   </tr>
    </thead>
   <?php
  $k=0;  
 if (mysqli_num_rows($sql) > 0) {?>
	 <tbody>
	 <?php
	 
  // output data of each row
  while($row = mysqli_fetch_assoc($sql)) {?>
   
   <tr>
   <td>
   <?php echo $name; ?>
   </td>
   <td>
    <?php echo $row["fathername"]; ?>
	</td>
	<td>
	 
	  <?php echo $row["mothername"]; ?>
   </td>
    <td>
	 
	  <?php echo $row["wife"]; ?>
   </td>
    <td>
   <?php echo $row["phone"]; ?>
   </td>
    <td>
   <?php echo $row["address"]; ?>
   </td>
   <td><button type="button" class="btn btn-outline-info" id="btn<?php echo $btn; ?>" name="<?php echo $btn; ?>" onclick="visible1(this.name)">Edit</button></td>
   </tr>
    
 <?php 
 $btn++;
  $zip=$row['zip'];
 
 $city=$row['city'];
 
 }?> 
 </tbody> 
   </table>
 <?php } }?>
   </div>
 <div id="ms-div">
 
   <div style="visibility:hidden; display:none" id="sh">
   <form class="row g-3 text-white"  >
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
    <label for="inputwife"  class="form-label">Wife's/Husband Name</label>
    <input type="text" class="form-control" id="wife1" name="wifename"  >
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
    <input type="text" class="form-control" id="city" name="city" value="<?php echo $city; ?>" required>
  </div>
  
  <div class="col-md-6">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" name="zip" value="<?php echo $zip; ?>" id="zip">
  </div>
  <div align="center">
   <input class="form-check-input" type="checkbox"  name="married" id="gridCheck" onclick="wife()" >
  <label class="form-check-label" for="gridCheck">
        I'm married 
      </label>
     
      </div>
   
 
 
 
     <div class="col-md-6">
	 <button type="button"  class="btn btn-outline-warning" onclick="location.reload();"><- Go Back</button>
      </div>
	  <div class="col-md-6">
    <button type="submit" id="submit" class="btn btn-outline-primary" name="submit" >Submit</button>
	
     </div>
	 
	 <div class="col-12">
    
    <input type="text"  class="form-control" id="choldname" name="choldname" style="visibility:hidden; display:none" value="<?php echo $tb_name ?>" placeholder="" >
  </div>
  
</form>
</div>

 
  


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
   
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		
		$('#submit').on("click",function(e){
			$('#progerssm').show();
			e.preventDefault();
			var fathername=$("#fathername").val();
			var mothername=$("#mother").val();
			var wifename=$("#wife1").val();
			var phone=$("#phone").val();
			var address=$("#address").val();
			var city=$("#city").val();
			var zip=$("#zip").val();
			var value=$("#choldname").val();
			var id=$("#id").val();
			
			$.ajax({
				
				url: "up.php",
				type: "POST",
			data: {fathername:fathername,mothername:mothername,wifename:wifename,phone:phone,address:address,city:city,zip:zip,value:value,id:id},
				success:function(data){
					$('#inc').html(data)
					$('#progerssm').hide();
					},
				error: function (){console.log("error");}
			});
		})
		
	});
	</script>
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	 </div>
  </body>
</html>
<?php 


mysqli_close($GLOBALS['conn']);


?>