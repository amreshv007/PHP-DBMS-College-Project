<center></center>
<?php
		include('C:\wamp64\www\project\connection\connection.php');
		$query="select * from volunteer where volunteer1='1' ";
		$result=mysql_query($query) or die(mysql_error());


		if(mysql_num_rows($result)>0){
		echo "<form action=confirm_delete_Volunteer.php method=post><h1>assign volunteer</h1><br>";
		echo "<table border='1' cellpadding = '10'>
		<tr><th>First Name</th>
		<th>Last Name</th>
		<th>user-id</th>
		<th>village</th>
		<th>Region</th>
		<th>District</th>
		<th>Contact-Info</th>
		<th>Delete</th>
		</tr>";

		while($row = mysql_fetch_array($result))
			 {
					echo "<tr><td>" . $row['f_name'] . "</td>
					<td>" . $row['l_name']."</td>
					<td>" . $row['user_id'] . "</td>
					<td>" . $row['village']."</td>
					<td>" . $row['region']."</td>
					<td>" . $row['district']."</td>
					<td>" . $row['contact']."</td>
					<td><button value=".$row['user_id']." name=delete>delete</button></td>
					</tr>";
				echo "<br/>"; }
 
    }
else
{ 
 echo "No volunteer to assign"; }  

?>
</center>