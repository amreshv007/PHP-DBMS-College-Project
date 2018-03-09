<?php
		session_start();
		if($_SESSION['member']=='volunteer'){
			include('C:\wamp64\www\project\connection\connection.php');


			$fname=$_SESSION['f_name'];
			$lname=$_SESSION['l_name'];
			$mobile=$_SESSION['mobile'];
			$user=$_SESSION['user_id'];
			$pass=$_SESSION['password'];
			$village=$_POST['village'];
			$region=$_POST['region'];
			$district=$_POST['district'];



			$query="INSERT INTO `volunteer`( `f_name`, `l_name`, `village`, `region`, `district`, `user_id`, `volunteer1`, `contact`, `password1`) VALUES ('$fname' ,  '$lname'  , '$village' , '$region' ,'$district' , '$user', '0',  '$mobile'  , '$pass')";

			$result=mysql_query($query) or die(mysql_error());

			echo "thank you <br> your request is on pending please wait for some time";

		}
		else
		{
			if($_SESSION['member']=='doctor'){
			include('C:\wamp64\www\project\connection\connection.php');

			$fname=$_SESSION['f_name'];
			$lname=$_SESSION['l_name'];
			$mobile=$_SESSION['mobile'];
			$user=$_SESSION['user_id'];
			$pass=$_SESSION['password'];
			$disease=$_POST['disease'];
			$experience=$_POST['experience'];
			$qualification=$_POST['quallification'];
			$city=$_POST['city'];
			$state=$_POST['state'];
		/*	if(isset($_POST['submit'])){
			$image=addslashes($_FILES['f1']['tmp_name']);
						$name=addslashes($_FILES['f1']['name']);
			$image=file_get_contents($image);
			$image=base64_encode($image);
			}
			if(!empty($_FILES['f1']['name']) 
     && file_exists($_FILES['f1']['name'])) {
    $image= addslashes(file_get_contents($_FILES['f1']['name']));*/
}

			//echo $mobile;

			$_SESSION['disease']=$disease;

			$query1= "select d_id from disease where d_name='$disease' ";
			$result1=mysql_query($query1) or die(mysql_error());

			$id=0;

			while($row=mysql_fetch_array($result1))
				$id=$row['d_id'];

			
			$query="INSERT INTO `doctor` ( `f_name`, `l_name`, `experience`, `qualification`, `contact_no`, `city`, `state`, `d_id`, `password1`, `user_id`) VALUES ('$fname', '$lname', '$experience', '$qualification' , '$mobile',  '$city',  '$state',  '$id',  '$pass',      '$user')";   

			$result=mysql_query($query) or die(mysql_error());

			if(mysql_num_rows($result1)==0){
				echo "<h1> Click here to fill information of </h1>".$disease.  
				     "<br><form action=http://localhost/project/disease/diseaseInsert.php method=POST>
				     <p>symptom1<input type=text name=symptom1></p>
				      <p>symptom2<input type=text name=symptom2></p>
				      <p>symptom3<input type=text name=symptom3></p>
				      <p>medicine1<input type=text name=medicine1></p>
				      <p>medicine2<input type=text name=medicine2></p>
				      <p>medicine1<input type=text name=medicine3></p>
				      <p><input type=submit name=submit> </p> </form>";
			}

			echo "thank you <br> your request is on pending please wait for some time";

		}
		
?>