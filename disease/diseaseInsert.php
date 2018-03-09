<?php
	session_start();
	include('C:\wamp64\www\project\connection\connection.php');
	$disease=$_SESSION['disease'];

	$symptom1=$_POST['symptom1'];
	$symptom2=$_POST['symptom2'];
	$symptom3=$_POST['symptom3'];
	$medicine1=$_POST['medicine1'];
	$medicine2=$_POST['medicine2'];
	$medicine3=$_POST['medicine3'];

	echo $symptom1;
	$query="INSERT INTO `disease`(`d_name`) VALUES ('$disease') ";
	$result=mysql_query($query) or die (mysql_error());

	$query1="select d_id from disease where d_name='$disease' ";
	$result1=mysql_query($query1) or die (mysql_error());

	while($row=mysql_fetch_array($result1))
		 $id=$row['d_id'];

	$query="INSERT INTO `disease_symptoms`(`symptoms`, `d_id`) VALUES ('$symptom1','$id')" ;
	$result=mysql_query($query) or die (mysql_error());

	$query="INSERT INTO `disease_symptoms`(`symptoms`, `d_id`) VALUES ('$symptom2','$id')" ;
	$result=mysql_query($query) or die (mysql_error());

	$query="INSERT INTO `disease_symptoms`(`symptoms`, `d_id`) VALUES ('$symptom3','$id')" ;
	$result=mysql_query($query) or die (mysql_error());

	

	$query="INSERT INTO `disease_medicine`(`medicine`, `d_id`) VALUES ('$medicine1','$id')" ;
	$result=mysql_query($query) or die (mysql_error());

	$query="INSERT INTO `disease_medicine`(`medicine`, `d_id`) VALUES ('$medicine2','$id')" ;
	$result=mysql_query($query) or die (mysql_error());

	$query="INSERT INTO `disease_medicine`(`medicine`, `d_id`) VALUES ('$medicine3','$id')" ;
	$result=mysql_query($query) or die (mysql_error());

	echo "data inserted successfully";
?>