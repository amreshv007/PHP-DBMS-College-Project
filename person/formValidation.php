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
   <div class="row">
      <div class="col-md-12">
          <ul class="nav nav-tabs nav-justified navbar-inverse nav-pills navbar-fixed-top" style="height:140px;background-color:#293352" >
          
              <img src="../image/lo.jpg"  class="an img-responsive " />
         <div class="mw">Medical help in villages</div>
         <div style="margin-top:-30px;margin-left:1100px">
  
</div>
              
              <li class="dropdown"><a href="anu.html"  class="dropdown-toggle" style="color:white;margin-top:40px;background-color:#1C2833 ">
			  <span class="glyphicon glyphicon-home">
			  </span> Home <b class="caret"></b></a>
              <ul class="dropdown-menu" style="background-color:#AED6F1  ">
		  <li><a href="#divvision" style="color:#CD6155  ">Vision </a></li>
		  <li><a href="#divdoc"  style="color:#CD6155  ">Who we are</a></li>
		  <li><a href="#divbox"  style="color:#CD6155  " >How can you help us</a></li>
		  </ul>
              
              </li>
               <li class="dropdown" >
		  <a href="#"  class="dropdown-toggle" style="color:white;margin-top:40px;background-color:#1C2833  ">
		  <span class="glyphicon glyphicon-user" ></span> Member
		  <b class="caret"></b></a>
		  <ul class="dropdown-menu">
		  <li><a href="view_doctor.php" >Doctor <img src="image/st.jpg" width="20px" height="20px"/></a></li>
		  <li><a href="view_volunteer.php">Volunteer<span class="glyphicon glyphicon-user"></span></a></li>
		  
		  </ul>
		  </li>
              <li ><a href="campdetails.php"style="color:white;margin-top:40px;background-color:#1C2833  ">Medical camp</a></li>
		   	    <li ><a href="contact.html"  style="color:white;margin-top:40px;background-color:#1C2833  "><span class="glyphicon glyphicon-phone-alt" >
				</span>  Contact</a></li>
					    <li ><a href="team.html"  style="color:white;margin-top:40px;background-color:#1C2833  ">
						<img src="../image/Member.png" width="40px" height="20px" style="margin-top:-5px">Our team</a></li>
          </ul>
           
          </div>
      </div>  
<?php  
	if(isset($_POST['username']) && isset($_POST['pass'])){
		
		$username = $_POST['username'];
		$pass = $_POST['pass'];

		if($_POST['submit']=="volunteer"){
			
			
			include('C:\wamp64\www\project\connection\connection.php');
		$query="select * from volunteer where user_id='$username' and password1='$pass'";
		$result=mysql_query($query)  or die (mysql_error());;
		
		$row = mysql_fetch_array($result);

		session_start();
		$_SESSION['village']=$row['village'];

			

				if($row['volunteer1']=='1')
				{
                     
								 
								echo'<div class="container" style="margin-top:180px;width:800px;mar" >
   
  <div class="panel-group" id="accordion" >
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">';
		  
		    echo ' <center>Click here to Insert Patient</center></a>
        </h4>
      </div>';
     echo ' <div id="collapse1" class="panel-collapse collapse ">
        <div class="panel-body"> ';
 include('entry_form.php');	
 
 echo '</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><center>Click here to View Patient</center></a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse ">
        <div class="panel-body">';
		include('view_person.php');
		 
		echo'</div>
      </div>
    </div>
   
  </div> 
  
</div>';
    
				}
								
			    else{
					echo'<div style="margin-top:200px">';
					echo "wrong username or password<br>
				<a href=../anu.php>click here to login";
				}
		
		
		
	}
	else{
		if($_POST['submit']=="doctor"){
		
	include('C:\wamp64\www\project\connection\connection.php');

		
		$query="select * from doctor where user_id='$username' and password1=$pass ";
		$result=mysql_query($query)  or die (mysql_error());;
		
		$row = mysql_fetch_array($result);

		session_start();
		$_SESSION['doctor_id']=$row['doctor_id'];

			

				if(mysql_num_rows($result)==1){
      echo'<div style="margin-top:220px">';
					echo "<br><center > <a href=disease_entry_form.php >click here to insert a disease ,symptoms and general medicine 
								<br> <a href=campFreeSlot.php> update the time when you free<br></center>";
				echo'</div>';}
			    else
					echo "wrong username or password";
		
		
	}
	}
	}
	else{
		echo "Nothing to disaplay";
	}

	
	
	
	
	echo'<div style="margin-top:120px">';  
	include('../footer.php');  
echo'</div>';
?>
 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>