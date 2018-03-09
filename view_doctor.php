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
include('header.php');
 /*Create query*/ 
 echo '<div style="margin-top:142px;background-image:url(mewr.png);" >';
 echo'<h1 style="font-family:sans serif " ><center><b><i>Our Doctor Team</i></b></center></h1>';
$qry ='SELECT * FROM doctor,disease WHERE doctor.d_id=disease.d_id AND valid=1'; 

/*Execute query*/ 
$result = mysql_query($qry);
echo '<div class="container" style="margin-left:150px;margin-top:40px">';
echo '<div class="row">';
echo '<div class="col-md-4" style="background-color:#1F618D  ;opacity:0.7 ">';
echo '<form name="doctordetails" method="post" action="doctorsdetails.php"> ';
echo '<div class="row"> 
<div class="col-md-4" ><h3 style="font-size:20px;color:#D0D3D4  "><b>Name</b></h3></div>
<div class="col-md-4" style="margin-left:-30px;color:#D0D3D4"><h3 style="font-size:20px"><b>Specialisation</b></h3></div>
<div class="col-md-4" style="margin-left:25px"><h3 style="font-size:20px;color:#D0D3D4"><b>Details</b></h3></div>';

//<th>  </th>';

/*Show the rows in the fetched result set one by one*/ 
while ($row = mysql_fetch_assoc($result))
{ 
echo '<div class="row" style="padding:5px"> 

<div class="col-md-4" ><b style="color:#D0D3D4">'.$row['f_name'].'</b><b style="color:#D0D3D4"> '.$row['l_name'].'</b></div>
<div class="col-md-4"><b style="color:#D0D3D4">'.$row['d_name'].'</b></div> 
<div class="col-md-4"><button value='.$row['doctor_id'].' name="submit" >Profile</button></div>

</div>'; 
}

echo '</div></form>';
echo'</div>';
 echo '<div class="col-md-8" style="width:600px;margin-left:50px;background-color:#293352;height:200px;opacity:0.8">';
 echo '<p style="font-size:30px;color:white;font-family:sans serif;padding:40px"><i>Helping a person will not necessarily change the world 
 ,but it will change the world for that person .</i></p>';
echo'</div>';
echo '</div>';
echo '</div>';
echo'</div>';
echo '<div style="margin-top:-20px">';
include('footer.php');
echo'</div>';
//} 
/*else{ 
header('location:login_form.php'); 
exit(); 
} */
?>
