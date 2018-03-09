<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
      <link href="../log.css" rel="stylesheet">
    <link href="../cust.css" rel="stylesheet">
  </head>
  <body>
<?php
//include('formValidation.php');
 


$village=$_SESSION['village'];
include('C:\wamp64\www\project\connection\connection.php');

	$query= "select * from person where village = '$village' ";
	$result=mysql_query($query);

	if(mysql_num_rows($result)==0)
		echo "<h1><center>No patient in your village</center></h1>";


	else{
			echo "<center><h1>patient</h1>";
			echo "<table border='1' cellpadding = '10'>
			<tr><th>first name</th>
			<th>last name</th>
			<th>village</th>
			<th>region</th>
			<th>destrict</th>
			</tr>";

				while($row=mysql_fetch_array($result)){
					echo "<tr><td>".$row['f_name']."</td>
				  <td>".$row['l_name']."</td>
				  <td>".$row['village']."</td>
				  <td>".$row['region']."</td>
				  <td>".$row['district']."</td>
				  </tr>";
  }
}
?>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>