<?php
session_start();
/*Connect to mysql server*/ 
$link = @mysql_connect('localhost', 'aryan', '');  
/*Check link to the mysql server*/ 
if(!$link)
{ 
die('Failed to connect to server: ' . mysql_error());
 } 
include('header.php');
/*Select database*/ 
 echo '<div style="margin-top:142px;background-image:url(mon.png);" >';
 echo '<h2 style="font-family:sans serif;padding-top:10px;color:#2471A3  "><center><b>Doctor Profile</b></center></h2>';
$db = mysql_select_db('medical_help'); 
if(!$db)
{
	die("Unable to select database"); 
}
//include('view_doctor.php'); 
//echo $_POST['submit'];
$var=$_POST['submit'];
$qry='SELECT * FROM doctor WHERE doctor_id='.$var;
$result = mysql_query($qry);
echo '<div class="container" style="margin-left:200px;padding-top:15px">';
$result1 = mysql_fetch_array($result);
echo '<div class="row">';
echo '<div class="col-md-4" ><img src="data:image/jpeg;base64,'.base64_encode($result1['image1']).'" height=200 width=200 class="img-circle"></div>
		<div class="col-md-4" style="margin-left:-80px;width:270px;background-color:#293352;opacity:0.7"><p style="color:white;font-size:20px">Name: '.$result1['f_name'].'
	  '.$result1['l_name'].'</br>
	  Experience: '.$result1['experience'].'</br>
	  Qualification: '.$result1['qualification'].'</br>
	  Contact No: '.$result1['contact_no'].'</br>
	  City: '.$result1['city'].'</br>
	  State: '.$result1['state'].'</p></br>
	  <a onclick="" class="btn btn-social-icon btn-sm btn-twitter"><i class="fa fa-twitter"></i><center style="font-size:22px;margin-top:-6px" >t</center></a>
    <a onclick="" class="btn btn-social-icon btn-sm btn-facebook"><i class="fa fa-facebook"></i><center style="font-size:22px;margin-top:-6px" >f</center></a>
        <a onclick="" class="btn btn-social-icon btn-sm btn-google"><i class="fa fa-google"><center style="font-size:22px;" >G</center></i></a>
        <a onclick="" class="btn btn-social-icon btn-sm btn-linkedin"><i class="fa fa-linkedin"></i><center style="font-size:22px;margin-top:-6px" >in</center></a></div>
	  </div></b><div class="col-md-4" style="margin-left:-50px">
	   
	  </div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div style="margin-top:-20px">';
include('footer.php');
echo'</div>';
?>