<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Medical Help</title>

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
		  <li><a href="#divvision" style="color:#CD6155  ">Vision </a></li>
		  <li><a href="#divdoc"  style="color:#CD6155  ">Who we are</a></li>
		  <li><a href="#divbox"  style="color:#CD6155  " >How can you help us</a></li>
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
      
    
      
      
    
        
       <div class="row" style="margin-top:140px;height:500px;background-color:#1A5276;">
             <div class="col-md-3">
             <div style="margin-left:50px;height:380px;background-color:#D1F2EB     ">
                 <div style="margin-top:40px" >
                   <?php
				      include('camp_time.php');
				   ?>
                 </div>
                 </div>
             </div>
		 <div class="col-md-6 ">
		 <div id="imagega" class="carousel slide " data-wrap="true" data-pause="false" data-interval="4000" data-ride="carousel"style="margin-top:40px">
		 <ol class="carousel-indicators">
		 <li data-target="#imagega" data-slide-to="0" class="active"></li>
		 <li data-target="#imagega" data-slide-to="1"></li>
		 <li data-target="#imagega" data-slide-to="2"></li>
		 <li data-target="#imagega" data-slide-to="3"></li>
		 </ol>
		 <div class="carousel-inner">
		 <div class="item active">
		 <img src="image/doc.jpg" class="img-responsive"  style="height:380px;width:750px">
		 <div class="carousel-caption">
		 <h3>doctor</h3>
		 <p>we help u to help the poor</p>
		 </div>
		 </div>
		 <div class="item">
		 <img src="image/n.png" class="img-responsive" style="height:380px;width:750px">
		 <div class="carousel-caption">
		 <h3>doctor</h3>
		 <p>we help u to help the poor</p>
		 </div>
		 </div>
		 <div class="item">
		 <img src="image/lo.jpg" class="img-responsive" style="height:380px;width:750px">
		 <div class="carousel-caption">
		 <h3>villager</h3>
		 <p>we help the poor</p>
		 </div>
		 </div>
		 <div class="item">
		 <img src="image/liv.jpg" class="img-responsive" style="height:380px;width:750px">
		 <div class="carousel-caption">
		 <h3>doctor</h3>
		 <p>we help u to help the poor</p>
		 </div>
		 </div>
		  </div>
		 <a href="#imagega " class="carousel-control left" data-slide="prev">
		 <span class="glyphicon glyphicon-chevron-left"></span></a>
		 <a href="#imagega " class="carousel-control right" data-slide="next">
		 <span class="glyphicon glyphicon-chevron-right"></span></a>
		 </div>
		 </div>
              <div class="col-md-3">
             <div style="height:380px;width:275px;background-color:#D1F2EB   ">
            
                 <div style="margin-top:40px" >
                   <ul style="padding-top:20px">
                     <li>  Hello i am anuj srivatava</li>
                        <li>  Hello i am anuj srivatava</li>
                        <li>  Hello i am anuj srivatava</li>
                     </ul>
                 </div>
                 
                 </div>
             </div>
	 </div>
	 
          
	  
      <div id ="divvision" >
       <div class=" amit ">
      <div class="container" style="width:970px">
          <div class="row">
          <div class="col-md-8" >
               <div style="margin-top:40px">
              <div class="row">
                   <div class="col-xs-12">
                  <div style="height:195px;background-color:#D1F2EB   ">
                   
                   <ul style="padding-top:20px">
                     <li>  Hello i am anuj srivatava</li>
                        <li>  Hello i am anuj srivatava</li>
                        <li>  Hello i am anuj srivatava</li>
                     </ul>
                 
                   </div>
                  </div>
                   </div>
                   <div class="row">
                   <div class="col-xs-12">
                  <div style="height:200px;background-color:#D1F2EB   ">
                   <div style="margin-top:10px" >
                   <ul style="padding-top:20px">
                     <li>  Hello i am anuj srivatava</li>
                        <li>  Hello i am anuj srivatava</li>
                        <li>  Hello i am anuj srivatava</li>
                     </ul>
                 </div>
                   </div>
                  </div>
                   </div>
              </div>
               </div>
               <div class="col-md-4">
                   <div style="height:405px;background-color:#D1F2EB   ">
                   <div style="margin-top:40px" >
                   <ul style="padding-top:20px">
                     <li>  Hello i am anuj srivatava</li>
                        <li>  Hello i am anuj srivatava</li>
                        <li>  Hello i am anuj srivatava</li>
                     </ul>
                 </div>
                   </div>
              </div>
               
                
          </div>
          </div>
      </div>
	  </div>
	  <div id ="divdoc" >
     <div style="height:600px;"  >
          <div class="container">
              <center><img src="image/Who.png" height="100px" width="200px"/></center>
              <hr>
              <div class="row">
              <div class="col-md-3"><img src="image/girl.jpg" class="img-responsive img-circle" style="height:230px;width"/>
                  <h3><center>Knowing us</center></h3>
                  </div>
                   <div class="col-md-3"><img src="image/Prese.jpg" class="img-responsive img-circle" style="height:230px"/>
                    <h3><center>From urban discard to rural dignity</center></h3>
                  </div>
                   <div class="col-md-3"><img src="image/reach.jpg" class="img-responsive img-circle" style="height:230px"/>
                  <h3><center>Our reach</center></h3>
                  </div>
                   <div class="col-md-3"><img src="image/box.png" class="img-responsive img-circle" style="height:230px"/>
                  <h3><center>We helped eachother</center></h3>
                  </div>
              </div>
          </div>
      </div>
      </div>
	  <div id ="divbox" >
        <div style="height:400px;background-color:#2E4053   " >
          
      <img src="image/ma.jpg" height="400px" width="1350px"  style="opacity:0.3;background-attachment:fixed"/>
          
      </div>
        <div style="height:400px;margin-top:-400px;">
          
      <div class="container" style="width:1000px">
          <div class="row">
          <div class="col-md-4">
              <center>
              <img src="image/imag.jpg" style="height:70px;width:70px;margin-top:13px" />
                  
              </center>
              <hr style="border: dotted 1px red;" />
              
              </div>
              <div class="col-md-4">
                  <center>
               <img src="image/money.jpg" style="height:70px;width:70px;margin-top:13px"  />
                  </center>
                   <hr style="border: dotted 1px;color:blue" />
              </div>
              <div class="col-md-4">
                  <center>
               <img src="image/oppo.png" style="height:70px;width:100px;margin-top:13px" />
                  </center>
                   <hr style="border: dotted 1px yellow;" />
              </div>
          </div>
          </div>
      </div>
	  </div >
       <div style="height:200px;background-color:#17202A  ">
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