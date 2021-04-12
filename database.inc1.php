<?php
class database_connection{
  function database_connection($database_name,$host,$userid,$password){
    MySQL_connect($host,$userid,$password);
    //Select the database we want to use
    MySQL_select_db($database_name) or die("Could not select database");
  }
}
#################################### FOR LOCAL CONNECTION############################################
//$conection     =  new database_connection('oscillat_result','localhost','root','');
$conection     =  new database_connection('oscillat_exam','localhost','oscillat','m@hesh#123');
########################################################################################################

#################################### FOR SERVER CONNECTION ############################################
//$conection     =  new database_connection('ihmct_resultdata','localhost','ihmct_ihmctresul','ihmct_resultdata');
########################################################################################################
?>
