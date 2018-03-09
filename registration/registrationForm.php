<body>
<center>
	<form action="registrationValidation.php" method="POST">
		<h1>REGISTRATION</h1>
		<p>first name<input type="text" name="f_name"></p>
		<p>last name<input type="text" name="l_name"></p>
		<p>username<input type="text" name="user"></p>
		<p>mobile<input type="text" name="mobile"></p>
		<p>email<input type="text" name="email"></p>
		<p>password<input type="password" name="password"></p>
		<p><input type = "radio" name = "member" id = "volunteer" value = "volunteer">
		 <label for = "volunteer"> volunteer </label><br>
		 <input type = "radio" name = "member" id = "doctor" value = "doctor">
		 <label for = "doctor"> doctor </label><br> </p>
		<p><input type="submit" name="submit" ></p>
		
	</form>
</center>
</body>