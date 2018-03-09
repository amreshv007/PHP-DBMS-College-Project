<?php

	

	if(isset($_POST['username']) && isset($_POST['pass'])){
		include('C:\wamp64\www\project\connection\connection.php');
		$username = $_POST['username'];
		$pass = $_POST['pass'];

		
		$query="select * from doctor where user_id='$username' and password1=$pass ";
		$result=mysql_query($query)  or die (mysql_error());;
		
		$row = mysql_fetch_array($result);

		session_start();
		$_SESSION['doctor_id']=$row['doctor_id'];

			

				if(mysql_num_rows($result)==1)

					echo "<br><center> <a href=disease_entry_form.php >click here to insert a disease ,symptoms and general medicine 
								<br> <a href=campFreeSlot.php> update the time when you free<br></center>";
			    else
					echo "wrong username or password";
		
		
		
	}
	else{
		echo "Nothing to disaplay";
	}


?>