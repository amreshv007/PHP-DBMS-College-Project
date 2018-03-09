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

	
	
	 
	  <form role="form" class="form-horizontal"action="insert_person.php" method="post" >
	  
                               <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        First Name</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" id="email" placeholder="first name" name="email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Last Name</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" id="email" placeholder="last name" name="email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="mobile" class="col-sm-2 control-label">
                                        Village</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" id="mobile" placeholder="village" name="mobile" />
                                    </div>
                                </div>
								 <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label">
                                        Region</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" id="username" placeholder="region" name="user" />
                                    </div>
                                </div>
								 <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">
                                        District</label>
                                    <div class="col-md-4">
                                        <input type="password" class="form-control" id="username" placeholder="district" name="password" />
                                    </div>
                                </div>
                                  
	<center><p><select name="disease"   >
		<option value="" >Select Disease</option>
		

		<?php
		$query="select * from disease";
		$result=mysql_query($query) or die(mysql_error());
		
		while($disease=mysql_fetch_array($result)){
		?>

		<option value="<?php echo $disease['d_id']; ?>"><?php echo $disease['d_name']; ?></option>
		<?php
		}
		?>
	</select></center></p>
	<p><input type="submit" name="submit" class="form-control btn btn-primary" ></p>
	
</form> 
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>