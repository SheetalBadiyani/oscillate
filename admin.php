<?php
session_start();

ob_Start();
$ServerName = 'localhost';
$User = 'oscillat_search';
$Password = '3SABOR!FU3_E';
$DatabaseName = 'oscillat_result';
$link = mysql_connect($ServerName, $User, $Password);
if (!$link) {
die('Could not connect: ' . mysql_error());
}else {
echo "conneted successfully";
}
mysql_select_db($DatabaseName,$link);





$username= $_POST["username"];

$password= $_POST["password"];

if(! $link)

{

        die('Connection Failed'.mysql_error());

}

mysql_select_db("oscillat_result",$link);

$result=mysql_query("select * from user");

while($row=mysql_fetch_array($result))

{

    if($row["username"]==$username && $row["password"]==$password)
       
	     header("location:insert1.html");
		
		 
	else

        echo"Sorry,plz try again";

}
 
 
 
?>
