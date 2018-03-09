

<?php
include('C:\wamp64\www\project\connection\connection.php');
include('header.php');
$qry='select * from camp order by date1';
$result=mysql_query($qry);
echo'<div style="margin-top:140px">';
echo '<div class="container">';
echo '<h1 style=" font-family:sans serif"><center><b>Camp Details</b></center></h1>';
echo '<center><form name="campdetails" action=""> ';
echo '<table border="0"> 
<th>Camp No.</th>
<th>Date</th>
<th>Time</th>
<th>Village</th>';
while($row=mysql_fetch_assoc($result))
{
	echo '<tr> 

<td>'.$row['camp_id'].'</td>
<td>'.$row['date1'].'</td> 
<td>'.$row['time1'].'</td>
<td>'.$row['village'].'</td>  
</tr>';

}
echo '</center></table></form>';
echo '</div>';
echo '</div>';
echo '<div style="margin-top:50px;">';
include('footer.php');
echo '</div>';
?>
