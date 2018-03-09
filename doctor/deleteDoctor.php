<center></center>
<?php
		include('C:\wamp64\www\project\connection\connection.php');
		$query="select * from doctor where valid='1' ";
		$result=mysql_query($query) or die(mysql_error());


		if(mysql_num_rows($result)>0){
		echo "<form action=confirmDeleteDoctor.php method=post><h1>Delete Doctor</h1><br>";
		echo "<table border='1' cellpadding = '10'>
		<tr><th>First Name</th>
		<th>Last Name</th>
		<th>user-id</th>
		<th>qualification</th>
		<th>experience</th>
		<th>city</th>
		<th>state</th>
		<th>Contact-Info</th>
		<th>Delete</th>
		</tr>";

		while($row = mysql_fetch_array($result))
			 {
					echo "<tr><td>" . $row['f_name'] . "</td>
					<td>" . $row['l_name']."</td>
					<td>" . $row['user_id'] . "</td>
					<td>" . $row['qualification'] . "</td>
					<td>" . $row['experience'] . "</td>
					<td>" . $row['city']."</td>
					<td>" . $row['state']."</td>
					<td>" . $row['contact_no']."</td>
					<td><button value=".$row['user_id']." name=delete>delete</button></td>
					</tr>";
				echo "<br/>"; }
 
    }
else
{ 
 echo "No Doctor to assign"; }  

?>
</center>