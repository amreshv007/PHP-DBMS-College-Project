<?php
if(isset($_POST['disease'])){
	session_start();
	$_SESSION['disease']=$_POST['disease'];

	echo "<h1> Click here to fill information of disease </h1> 
				     <br><form action=../disease/diseaseInsert.php method=POST>
				     <p>symptom1<input type=text name=symptom1></p>
				      <p>symptom2<input type=text name=symptom2></p>
				      <p>symptom3<input type=text name=symptom3></p>
				      <p>medicine1<input type=text name=medicine1></p>
				      <p>medicine2<input type=text name=medicine2></p>
				      <p>medicine1<input type=text name=medicine3></p>
				      <p><input type=submit name=submit> </p> </form>";
}
else{
	echo "please enter the name of disease <br><a href=disease_entry_form.html>click here to go back";
}
?>