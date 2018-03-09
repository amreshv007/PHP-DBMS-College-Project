<?php
	
	


	if(isset($_POST['user']) && isset($_POST['password'])){
	include('C:\wamp64\www\project\connection\connection.php');

	//echo $_POST['mobile'];
	session_start();
	$_SESSION['f_name']=$_POST['f_name'];
	$_SESSION['l_name']=$_POST['l_name'];
	$_SESSION['mobile']=$_POST['mobile'];
	$_SESSION['user_id']=$_POST['user'];
	$_SESSION['password']=$_POST['password'];
	$_SESSION['member']=$_POST['member'];

	if($_POST['member']=='volunteer'){
		$username=$_POST['user'];
		//echo "query run";
		$query="select * from volunteer where user_id = '$username' ";
		$result=mysql_query($query) or die(mysql_error());


		if(mysql_num_rows($result)==0){
			echo "<h1>please enter the details given billow</h1>";
			echo "<form action=registrationConfrirmation.php  method=POST><center><br>
					<p>village<input type=text name=village></p>
					<p>region<input type=text name=region></p>
					<p>district<input type=text name=district></p>
					<p><input type=submit name=submit ></p>
					</center></form>";
		}
		else
			echo "user name should be distinct<a href=registrationForm.php>click here to try again";
	}

	if($_POST['member']=='doctor'){
		$username=$_POST['user'];
		//echo "query run";
		$query="select * from doctor where user_id = '$username' ";
		$result=mysql_query($query) or die(mysql_error());


		if(mysql_num_rows($result)==0){
			echo "<h1>please enter the details given billow</h1>";
			echo '<form action=registrationConfrirmation.php  method="post" enctype="multipart/form-data">
			<table><tr>
					<td>experience</td><td><input type=text name=experience></td></tr>
					<tr>
					<td>qualification</td><td><input type=text name=quallification></td></tr><tr>
					<td>city</td><td><input type=text name=city></td></tr><tr>
					<td>state</td><td><input type=text name=state></td></tr><tr>
					<td>disease specialisation</td><td><input type=text name=disease></td></tr><tr>
					<td>Upload Photo</td><td><input type="file" name="f1"></td>
					</tr>
					<tr><td></td><td><input type=submit name=submit value="upload"></td></tr>
					</table></form>
					';
		}
		else
			echo "user name should be distint<a href=registrationForm.php>click here to try again";
		
}
}
else
			echo "please fill all the entry<br>< a href=registrationForm.php>click here to try again";		
?>