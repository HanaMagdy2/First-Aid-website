<?php
$name=$_REQUEST['user_name'];
$age=$_REQUEST['age'];
$male_or_female=$_REQUEST['Female'];
$female_or_male=$_REQUEST['male'];



if(isset($_POST['btntest']))
{
$host="localhost";
$user="root";
$password="";
$db="bis_level_4";

$conn = mysqli_connect($host,$user,$password,$db)

$insert="insertinto studentsbisinfo values('$name','$age','$male_or_female','$female_or_male',)";

mysqil_query($conn,$insert);

if($conn){
	echo("<h1 style='color:green;')> your registration is done! </h1>");
}
else{
	echo("<h1 style='color:red;')> your registration is failed! </h1>");
}

}


