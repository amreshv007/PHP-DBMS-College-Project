<?php
	include('C:\wamp64\www\project\connection\connection.php');
	$f_name=$_POST['f_name'];
	$l_name=$_POST['l_name'];
	$village=$_POST['village'];
	$region=$_POST['region'];
	$destrict=$_POST['destrict'];
	$d_id=$_POST['disease'];

	$query1="select p_key from person where f_name='$f_name' and l_name='$l_name' and village='$village' and region='$region' and district='$destrict' ";

	$result1=mysql_query($query1) or die (mysql_error());

		$row = mysql_fetch_array($result1);

		$pkey=$row['p_key'];

	if(mysql_num_rows($result1)>0){
				$query="INSERT INTO `have_in`(`d_id`, `p_key`) VALUES ('$d_id','$pkey')";
				$result=mysql_query($query);
				echo "data insert successfully";
	}
	
	else{
			$query="insert into person (f_name,l_name,village,region,district) values ('$f_name','$l_name','$village','$region','$destrict')";
			$result=mysql_query($query) or die(mysql_error());


			$query1="select d_id from person where f_name='$f_name' and l_name='$l_name' and village='$village' and region='$region' and district='$destrict' ";
			$result1=mysql_query($query1);


			$query="INSERT INTO `have_in`(`d_id`, `p_key`) VALUES ('$d_id','$pkey')";
			$result=mysql_query($query);

			echo "data insert successfully";
	}
	?>