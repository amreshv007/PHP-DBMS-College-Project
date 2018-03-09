<?php
	session_start();
	$doctor_id=$_SESSION['doctor_id'];
	$_SESSION['id']=$doctor_id;
	//echo $_SESSION['id'];
?>
<body>
<center>
<form action="campFreeSlot1.php" method="POST">
<h1>Free time</h1>
<p>date<input type="date" name="date1" value="yyyy-mm-dd"></p>
<p>time<input type="time" name="time1" value="hh:mm:ss"></p>
<p>new date<input type="date" name="date2" value="if you want update"></p>
<p><input type="submit" name="submit" value="insert"></p>
<p><input type="submit" name="submit" value="update"></p>
<p><input type="submit" name="submit" value="delete"></p>
</form>
</center>
</body>
