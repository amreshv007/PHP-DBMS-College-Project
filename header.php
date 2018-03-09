<?php
?>

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
	<link href="social/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="social/bootstrap-social.css" rel="stylesheet" >
	<link href="social/bootstrap-social.less" rel="stylesheet" >
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
                                <form role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label">
                                        Username</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="username" placeholder="username" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control" id="Password1" placeholder="password" />
                                    </div>
                                </div>
                                   <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary btn-sm" name="submit" value="doctor">
                                            Doctor </button>
											<button type="submit" class="btn btn-primary btn-sm" name="submit" value="volunteer">
                                            Volunteer</button>
                                        <a href="javascript:;">Forgot your password?</a>
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
                                        <input type="submit" name="submit">
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
		  <li><a href="view_volunteer.php" >volunteer<span class="glyphicon glyphicon-user"></span></a></li>
		  
		  </ul>
		  </li>
              <li ><a href="campdetails.php" style="color:white;margin-top:40px;background-color:#1C2833  ">Medical camp</a></li>
		   	    <li ><a href="contact.html"  style="color:white;margin-top:40px;background-color:#1C2833  "><span class="glyphicon glyphicon-phone-alt" ></span>  Contact</a></li>
					    <li ><a href="team.html"  style="color:white;margin-top:40px;background-color:#1C2833  "><img src="image/Member.png" width="40px" height="20px" style="margin-top:-5px">Our team</a></li>
          </ul>
           
          </div>
      </div>
       <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>