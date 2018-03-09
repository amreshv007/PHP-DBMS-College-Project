<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="log.css" rel="stylesheet">
    <link href="cust.css" rel="stylesheet">
  </head>
  <body>
   <div class="container">
   <div class="row">
       
   <div class="col-sm-6">
       
<!-- Large modal -->
<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Login modal</button>
<div class="modal " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="false" style="margin-top:150px;background-image:url('image/hom.png')">
    <div class="modal-dialog modal-md">
        <div class="modal-content" style="background-color:lightblue">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false" ><span style="color:red">
                    ×</span></button>
                <h4 class="modal-title" id="myModalLabel">
                    Login/Registration </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#Login" data-toggle="tab">Login</a></li>
                            <li><a href="#Registration" data-toggle="tab">Registration</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="Login">
                                <form role="form" class="form-horizontal" method="POST" action="person/formValidation.php">
                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label">
                                        Username</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="username" placeholder="username"  name="username" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control" id="Password1" placeholder="password" name="pass" required/>
                                    </div>
                                </div>
                                   <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="submit" class="btn btn-primary btn-sm" name="submit" value="doctor">
                                             </input>
											<input type="submit" class="btn btn-primary btn-sm" name="submit" value="volunteer">
                                            </input>
                                        <a href="#">Forgot your password?</a>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="Registration">
                                <form role="form" class="form-horizontal" method="POST" action="registration/registrationValidation.php">
                                <div class="form-group">
                                    <label for="name" class="col-sm-2 control-label">
                                        Name</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-md-5">
                                              <input type="text" class="form-control" placeholder="fname" name="f_name"/>  
                                            </div>
                                            <div class="col-md-5" style="margin-left:-10px">
                                                <input type="text" class="form-control" placeholder="lname"  name="l_name"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" id="email" placeholder="Email" name="email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="mobile" class="col-sm-2 control-label">
                                        Mobile</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="mobile" placeholder="Mobile" name="mobile" />
                                    </div>
                                </div>
								 <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label">
                                        Username</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="username" placeholder="username" name="user" />
                                    </div>
                                </div>
								 <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-md-6">
                                        <input type="password" class="form-control" id="username" placeholder="username" name="password" />
                                    </div>
                                </div>
                                 <div class="form-group">
                                     
							 <label for="submit" class="col-sm-2 control-label">
                                        Signup</label>
                                    <div class="col-sm-6">
                                        <input type = "radio" name = "member" id = "doctor" value = "doctor">
                                  <label for = "doctor"> doctor </label><br>
                             <input type = "radio" name = "member" id = "volunteer" value = "volunteer">
                                    <label for = "volunteer"> volunteer </label><br>
                                    </div>
                                </div>
								<div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="submit" name="submit" class="btn btn-primary btn-sm" value="Save & Continue">
                                            </input>
                                         <button type="button"  class="btn btn-primary btn-sm" class="close" data-dismiss="model" aria-hidden="false" >
                    Cancel</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

       </div>
       <div class="col-md-6"></div>
      </div>
      
      </div>
      
      <div class="row">
      <div class="col-md-12">
          <ul class="nav nav-tabs nav-justified navbar-inverse nav-pills navbar-fixed-top" style="height:140px;background-color:#293352" >
          
              <img src="image/lo.jpg"  class="an img-responsive " />
         <div class="mw">Medical help in villages</div>
         <div style="margin-top:-30px;margin-left:1100px">
   
<button class="btn  btn-success" data-toggle="modal" data-target="#myModal" >Login<span style="color:red"><b>/</b></span>Signup</button>
 
<button class="btn btn-info"  style="margin-left:10px" ><a href="admin/adminLogin.php">Admin</a></button>
</div>
              
              <li class="dropdown"><a href="anu.php"  class="dropdown-toggle" style="color:white;margin-top:40px;background-color:#1C2833 ">
			  <span class="glyphicon glyphicon-home">
			  </span> Home <b class="caret"></b></a>
              <ul class="dropdown-menu" style="background-color:#AED6F1  ">
		  <li><a href="anu.php" style="color:#CD6155  ">Vision </a></li>
		  <li><a href="anu.php"  style="color:#CD6155  ">Who we are</a></li>
		  <li><a href="anu.php"  style="color:#CD6155  " >How can you help us</a></li>
		  </ul>
              
              </li>
               <li class="dropdown" >
		  <a href="#"  class="dropdown-toggle" style="color:white;margin-top:40px;background-color:#1C2833  "><span class="glyphicon glyphicon-user" ></span> Member
		  <b class="caret"></b></a>
		  <ul class="dropdown-menu">
		  <li><a href="view_doctor.php" >Doctor <img src="image/st.jpg" width="20px" height="20px"/></a></li>
		  <li><a href="view_volunteer.php">Volunteer<span class="glyphicon glyphicon-user"></span></a></li>
		  
		  </ul>
		  </li>
              <li ><a href="campdetails.php"  style="color:white;margin-top:40px;background-color:#1C2833  ">Medical camp</a></li>
		   	    <li ><a href="contact.html"  style="color:white;margin-top:40px;background-color:#1C2833  "><span class="glyphicon glyphicon-phone-alt" ></span>  Contact</a></li>
					    <li ><a href="team.html"  style="color:white;margin-top:40px;background-color:#1C2833  "><img src="image/Member.png" width="40px" height="20px" style="margin-top:-5px">Our team</a></li>
          </ul>
           
          </div>
      </div>
      
    
<?php 
session_start(); 
/*Connect to mysql server*/ 
$link = @mysql_connect('localhost', 'aryan', '');  
/*Check link to the mysql server*/ 
if(!$link)
{ 
die('Failed to connect to server: ' . mysql_error());
 } 

/*Select database*/ 
$db = mysql_select_db('medical_help'); 
if(!$db)
{
	die("Unable to select database"); 
}
 /*Create query*/ 
$qry ='SELECT * FROM volunteer where volunteer1=1'; 

/*Execute query*/ 
$result = mysql_query($qry);
echo'<div style="margin-top:100px;margin-left:200px;">';
echo '<form name="volunteerdetails" method="post" action="volunteerdetails.php"> ';

echo '<table border="1"> 
<th>Name</th>
<th>District</th>';
//<th>  </th>';

/*Show the rows in the fetched result set one by one*/ 
while ($row = mysql_fetch_assoc($result))
{ 
echo '<tr> 

<td>'.$row['f_name'].' '.$row['l_name'].'</br><button value='.$row['p_key'].' name="submit" >Details</button></td>
<td>'.$row['district'].'</td> 
</tr>'; 
}

echo '</table></form>';
echo'</div>';
//} 
/*else{ 
header('location:login_form.php'); 
exit(); 
} */
?>
<div style="height:200px;background-color:#17202A ;margin-top:30px ">
          <div class="container" style="width:1000px">
              <div class="row">
          <div class="col-md-3"> <b style="color:white">ABOUT US</b> <br/>
              <a href="#">  History</a><br/>
              <a href="#">Vision And Mission</a><br/>
              <a href="#">Trustees</a><br/>
              <a href="#">Advisors</a><br/>
              <a href="#">Audit & System</a><br/>
              <a href="#">Transparency</a><br/>
              <a href="#">How Is Your Money Spent</a><br/>
                  </div>
                   <div class="col-md-3"> <b style="color:white">OUR WORK</b><br/>
                  <a href="#">Stories Of Hope</a><br/>
              <a href="#">Mid-Day Meal</a><br/>
              <a href="#">Our Role</a><br/>
              <a href="#">Our Kitchens</a><br/>
              <a href="#">Impact</a><br/>
              <a href="#">Awards</a><br/>
              <a href="#">Our Reach</a><br/>
                  </div>
                   <div class="col-md-3"> <b style="color:white"> GET INVOLVED</b><br/>
                  <a href="#"> Partnerships </a><br/>
              <a href="#">Fundraise With Us</a><br/>
              <a href="#">CSR</a><br/>
              <a href="#">Volunteer</a><br/>
              <a href="#">Join Us Online</a><br/>
              <a href="#">Campaigns</a><br/>
              <a href="#">Careers</a><br/>
                  </div> 
                  <div class="col-md-3"><b style="color:white">DONATE</b> <br/>
                  <a href="#"> Online Donation</a><br/>
              <a href="#">Sponsor A Kitchen Equipment</a><br/>
              <a href="#">Sponsor A School For A Year</a><br/>
              <a href="#">Donate A Vehicle</a><br/>
              <a href="#">Donate for Tax Benefits</a><br/>
              <a href="#">Tax Exemption Donation Faqs</a><br/>
              <a href="#">Tax Faqs</a><br/>
                  </div>
              </div>
          </div>
          
        
      </div>
      <div style="height:50px;background-color:#212F3D  ">
          
              <b style="color:white"><center>&#169;ANUJ SRIVASTAVA 2017-All right reserved|
                  <a herf="#">Web Team</a>
                  </center></b>
      </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>