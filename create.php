<!doctype html>
<html lang="en">
  <head>
<?php


    
    $username="root";
	$password="";
	$host="localhost";
	$dbname="family";
    $name=$_POST['name'];
	$fathername=$_POST['fathername'];
	$mothername=$_POST['mothername'];
	$wifename=$_POST['wifename'];
	$choldname=$_POST['choldname'];
	$id=$_POST['id'];
	$search=$_POST['search_value'];
	$show=$_POST['show_value'];
	$value=$_POST['tb_name'];	
	$child0=$_POST['child0'];
	$childreen=array();
	$i=0;
	for($i=0;$i<$child0;$i++){
		$j=strval($i);
		$childreen[$i]=$_POST[$j];
		
	}
	$city=$_POST['city'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$zip=$_POST['zip'];
	$state=$_POST['state'];
	$m=false;
	
	
	
	
	?>