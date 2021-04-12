<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Post_property</title>
</head>

<body>
<?php
include_once("include/DBConn.php"); 


		$Certificate_No=$_POST['Certificate_No'];
		$Name=$_POST['Name']; 
		$Course=$_POST['Course'];  
		$PassingDate=$_POST['PassingDate']; 
		$Result=$_POST['Result'];
		$Marks=$_POST['Marks'];
		$Grade=$_POST['Grade'];

		 
 
 
// For Image
//make Directory
 
  $uploaddir="uploded_student_image";
  if(is_dir($uploaddir))
   {
     $makeDir="uploded_student_image/";

   }
   else
   {
     mkdir($uploaddir);
     $makeDir="uploded_student_image/";
   }
   $makeDirName="uploded_student_image/".$Name;
  if(is_dir($makeDirName))
   {
     $pathName="uploded_student_image/".$Name."/";

   }
   else
   {
     mkdir($makeDirName);
     $pathName="uploded_student_image/".$Name."/";
   }
  $makeDirPropCat="uploded_student_image/".$Name."/".$Course;
   
   if(is_dir($makeDirPropCat))
   {
    $pathProdName="uploded_student_image/".$Name."/".$Course."/";

   }
   else
   {
    mkdir($makeDirPropCat);
     $pathProdName="uploded_student_image/".$Name."/".$Course."/";
   }

   
  
 //$uploaddir = 'uploded_student_image/';
$photoname = $Course."$".$Name."-";

if(count($_FILES["Attachment"]['name'])>0) { //check if any file uploaded
		$GLOBALS['msg'] = ""; //initiate the global message		
		for($j=0; $j < count($_FILES["Attachment"]['name']); $j++) { //loop the uploaded file array
			$filen = $_FILES["Attachment"]['name']["$j"]; //file name
			//$path = 'uploads/'.$filen; //generate the destination path
		$path= "$pathProdName"."$photoname".$filen;
			
			//$path1=	$path.",".$path;		
			if(move_uploaded_file($_FILES["Attachment"]['tmp_name']["$j"],$path)) { //upload the file
				$GLOBALS['msg'] .= "File# ".($j+1)." ($filen) uploaded successfully<br>"; //Success message			
			}
		}
	}	
	else {
		$GLOBALS['msg'] = "No files found to upload"; //Failed message	
	}
	
	
	
	
	
//Insert Data Into databse.

  $insert_property="Insert Into 
  UploadData(Certificate_No,Name,Course,PassingDate,Result,Marks,Grade,StudImage)
  values ('$Certificate_No','$Name','$Course','$PassingDate','$Result','$Marks','$Grade','$path')";
 $result_property=mysql_query($insert_property,$link) or die("Internal Server Error:".mysql_error());

 $msg="";
 if($result_property)
 {   
   ?> 
    <SCRIPT LANGUAGE="javascript">alert("Information Uploaded Successfully,Thank You For Posting Propety...");</SCRIPT>
	<META HTTP-EQUIV="refresh" content="0;URL=postProject.php">
										
<?php
									
 }
 else
 {
     ?> 
    <SCRIPT LANGUAGE="javascript">alert("Fail to upload Information ,Please Try again later...");</SCRIPT>
	<META HTTP-EQUIV="refresh" content="0;URL=postProject.php">
										
<?php
 }

?>
</body>
</html>