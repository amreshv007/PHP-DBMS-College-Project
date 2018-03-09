<?php
include('C:\wamp64\www\project\connection\connection.php');
$recent='SELECT *     
FROM camp_free_slot c3  
WHERE date1 = (
   SELECT min(date1)
   FROM camp_free_slot c2
)';
$result=mysql_query($recent) or die(mysql_error());
$result1 = mysql_fetch_array($result);
echo 'Date:'.$result1['date1'].'</br>
	Time:'.$result1['time1']
;

/* SELECT *     
FROM camp_free_slot c3 
where time1=(
select min(time1)
from camp_free_slot c1
WHERE date1 = (
   SELECT min(date1)
   FROM camp_free_slot c2 */
   
  /* SELECT *     
FROM camp_free_slot c3  
WHERE date1 = (
   SELECT min(date1)
   FROM camp_free_slot c2
)';   */
   ?>