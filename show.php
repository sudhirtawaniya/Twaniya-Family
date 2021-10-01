<?php
error_reporting(0);
include 'create.php';
include 'join.php';
$q="SELECT * FROM $show"; 
$btn=1;
$sql=mysqli_query($GLOBALS['conn'],$q);
if($sql){
?>
 <div id="tb-alt">
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
   <?php if(isset($row['childreen'])){
	   echo $row['childreen'];
   }
elseif(isset($row['name'])){
	echo $row['name'];
}
else{
	echo $show;
	
}
   ?>
   </td>
   <td>
    <?php  if(isset($row['fathername'])){
	   echo $row['fathername'];
   }

else{
	echo substr($show, 0, strpos($show, "_"));
	
} ?>
	</td>
	<td>
	 
	  <?php echo $row["mothername"]; ?>
   </td>
    <td>
	 
	   <?php if(isset($row['wife'])){
	   echo $row['wife'];
   }

else{
	if($row['daughter_in_law']==null){
		$row['daughter_in_law']="UNMARRIED";
	}
	 echo $row['daughter_in_law'];
	
}
   ?>
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
  $zip=$row['zip'];
 
 $city=$row['city'];
 
 }?> 

 </tbody> 
   </table>
   <div style=" display:none">
 <input type="text" class="form-control" id="city" name="city" value="<?php echo $city; ?>" >
 <input type="text" class="form-control" id="zip" name="zip" value="<?php echo $zip; ?>" >
 </div>
<?php } }   ?></div>