<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<?php
 error_reporting(0);
include 'create.php';	
include 'join.php';
$sql="SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME LIKE '$search%' AND TABLE_SCHEMA='family'";

$q=mysqli_query($GLOBALS['conn'],$sql);
if($q AND mysqli_num_rows($q)>0){
	$val="";
	 if($search!=""){
	while($row = mysqli_fetch_assoc($q)){
	$val=$val."<button type='button' id='b1' value='{$row['TABLE_NAME']}' class='btn bu btn-outline-info me-3 mt-2 mb-3' style='paddping:12px;'>{$row['TABLE_NAME']}</button>";
	}
	echo "{$val}.'<script type='text/javascript' src='jquery.js'></script>
	<script type='text/javascript'>
	var show='';
	$(document).ready(function(){
		
		$('.bu').on('click',function(e){
			$('#progerssm').show();
			e.preventDefault();
			$('#sh').hide();
			 show=$(this).val();
			$('#hea').removeClass('borderClass');
			
			$.ajax({
				
				url: 'show.php',
				type: 'POST',
			data: {show_value:show},
				success:function(data){
					$('#data').html(data);
					
					
					$('#progerssm').hide();
					$('#hea').addClass('borderClass');
					
					},
				error: function (){console.log('error');}
			});
		})
		
		
		
	});
	</script>'";
	 }
	 
}
else{
	echo "<button type='button' class='btn btn-outline-danger disabled mt-2'>NOT FOUND</button>
	<script type='text/javascript' src='jquery.js'></script>
	<script type='text/javascript'>
	$(document).ready(function(){
		$('#data').html('');
		});";
}
if($search==null){
	echo "
	<script type='text/javascript' src='jquery.js'></script>
	<script type='text/javascript'>
	$(document).ready(function(){
		$('#data').html('');
		});";
	
}
?>