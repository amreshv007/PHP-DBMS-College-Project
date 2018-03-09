<center>
<?php
		if(isset($_POST['username']) && isset($_POST['pass'])){
			include('C:\wamp64\www\project\connection\connection.php');
			session_start();
			//$_SESSION['name']=$username;


			$username=$_POST['username'];
			$pass=$_POST['pass'];

			$_SESSION['name']=$username;


			$query="select * from admin where name='$username' and password1='$pass' ";
			$result=mysql_query($query) or die(mysql_error());

		
			
			if(mysql_num_rows($result)==1){
				echo "login successfully<br><a href=..\person\assignVolunteer.php>click here to assign volunteer<br>
					  <a href=../doctor/assignDoctor.php>click here to assign doctor<br>
					  <a href=../person/deleteVolunteer>click here to delete volunteer<br>
					  <a href=../doctor/deleteDoctor.php>click here to delete a doctor<br>";
			}

			else
				echo "wrong username or password<br><a href=adminLogin.php>click here to login again";

		}

		else
		{
			echo "nothing to show";
		}
?>
</center>