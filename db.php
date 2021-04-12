<?php
$con=mysql_connect("professionalwebworld.co.in","pwwcoin","professi@123");
// Check connection
if (mysql_error())
  {
  echo "Failed to connect to MySQL: " . mysql_error();
  }

// Create database
$sql="CREATE DATABASE my_ddb";
if (mysql_query($con,$sql))
  {
  echo "Database my_ddb created successfully";
  }
else
  {
  echo "Error creating database: " . mysql_error($con);
  }
?> 