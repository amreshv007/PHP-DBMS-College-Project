<?php
if(isset($_POST['delete'])){

	$user=$_POST['delete'];
	include('C:\wamp64\www\project\connection\connection.php');

	$query="DELETE FROM `doctor` WHERE  user_id='$user' ";
	$result=mysql_query($query) or die(mysql_error());

	echo "request delete successfully<br>
		  <a href=deleteDoctor.php>click here to delete another request";	
}

else{
	

	echo "something went wrong<br>
		  <a href=deleteDoctor.php>click here to try again";	
}
?>