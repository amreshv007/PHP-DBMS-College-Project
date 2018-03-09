<?php
		session_start();
		include('C:\wamp64\www\project\connection\connection.php');
		$doctor_id=$_SESSION['id'];
		//echo=$s
		$date=$_POST['date1'];
		$time=$_POST['time1'];
		$date2=$_POST['date2'];


		$query1="SELECT `doctor_id`, `date1`, `time1` FROM `camp_free_slot` WHERE doctor_id='$doctor_id' and date1='$date' ";
		$result1=mysql_query($query1);


		$date1=date('y-m-d');
		//echo $date1;
		//echo "<br>";
		//echo $date;

		if(strtotime($date) < strtotime($date1)){

			echo "please enter date after the current date";
			echo "<a href=campFreeSlot.php> click here to insert data again";
		}

		else if(mysql_num_rows($result1)>=1 &&  $_POST['submit']=='insert'){
			echo "you have inserted already this date";
			echo "<a href=campFreeSlot.php> click here to insert data again";
		}
		


		else if($_POST['submit']=='insert'){
		$query="INSERT INTO `camp_free_slot`(`doctor_id`, `date1`, `time1`) VALUES ('$doctor_id','$date','$time')";

		$result=mysql_query($query) or die(mysql_error());

		echo "data insered successfully";
	}

	else if($_POST['submit']=='update'){
		
			$query4="SELECT `doctor_id`, `date1`, `time1` FROM `camp_free_slot` WHERE doctor_id='$doctor_id' and date1='$date2' ";
			$result4=mysql_query($query4);

		if(mysql_num_rows($result1)==0){
			echo "you have not inserted this date yet<br><a href=campFreeSlot.php> click here to insert data again";
		}

		else if(mysql_num_rows($result4)>0){

			echo "you are busy in a another camp on this date<br>
			<a href=campFreeSlot.php> click here to insert data again";

		}
		else{
		

		$query3="update camp_free_slot set time1='$time', date1='$date2'  where doctor_id='$doctor_id' and date1='$date' ";
		$result3=mysql_query($query3) or die(mysql_error());
		
		echo "your data update successfuly";
	}
	}
	else if($_POST['submit']=='delete'){
		if(mysql_num_rows($result1)==0){
			echo "no such date exist in your table<br>";
			echo "<a href=campFreeSlot.php> click here to insert data again";
		}
		else{
		$query3="SELECT `doctor_id`, `date1`, `time1` FROM `camp_free_slot` WHERE doctor_id='$doctor_id' and date1='$date' ";
		$result1=mysql_query($query1);
		echo "data delete successfuly";
	}
	}
?>