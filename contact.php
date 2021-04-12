<?php
include("securimage.php");
	$img = new Securimage();
	$valid = $img->check($_REQUEST['code']);
  	if($valid == "true") {
$strTo = "saffron_mahesh@yahoo.com, oscillate.technical@gmail.com, saffron.technical@gmail.com, bcmhatre@gmail.com, sales@professionalwebworld.com";//saffron_mahesh@yahoo.com ";//saffron_mahesh@yahoo.com,oscillate.technical@gmail.com
 $strSubject = "Enquiry For Oscillate Technical Institute ";

	$strMessage ='<html>
	<head>
	<title>Enquiry</title>
	</head>
	<body>
	
	<table width=\'500\' border=\'0\'  cellpadding=\'0\' cellspacing=\'0\' bordercolor=\'#ffffff\'>
  <tr>
    <td>
      <table  border=\'0\' width=\'90%\' cellpadding=\'2\' cellspacing=\'2\' >
	  <tr><td colspan=2><b>Please assist me</b></td></tr>
        <tr>
        <td width=\'33%\'>Name:</td>
        <td width=\'67%\'>'.$_REQUEST['name'].'</td>
        </tr>        
        <tr>
        <td>
          Email:
        </td>
        <td width=\'67%\'>'.$_REQUEST['email'].'</td>
        </tr>
        <tr>
        <td>
         Phone / Mobile:
        </td>
        <td width=\'67%\'>'.$_REQUEST['mobile'].'</td>
        </tr>  		
        <tr>
        <td>
          Address:
        </td>
        <td width=\'67%\'>'.$_REQUEST['address'].'</td>
        </tr>
		<tr>
        <td>
          Enquiry:
        </td>
        <td width=\'67%\'>'.$_REQUEST['course'].' '.$_REQUEST['franchise'].'</td>
        </tr>
		<tr>
        <td>
          Comment:
        </td>
        <td width=\'67%\'>'.$_REQUEST['comment'].'</td>
        </tr>
		
      </table>
    </td>
  </tr>
</table>
	</body>
	</html>';

	//*** Uniqid Session ***//
	$strSid = md5(uniqid(time()));
	$email1="Oscillate Technical Institute <oscillate.technical@gmail.com>"; //saffron.technical@gmail.com
	$strHeader = "";
	$strHeader .= "From: ".$email1."\r\n";
	//$strHeader .= "Cc: bcmhatre@gmail.com\n";
	//$strHeader .= "Cc: info@professionalwebworld.com\n";

	$strHeader .= "MIME-Version: 1.0\r\n";
	$strHeader .= "Content-Type: multipart/mixed; boundary=\"".$strSid."\"\r\n";
	//$strHeader .= "This is a multi-part message in MIME format.\n";
	
	$strHeader .= "--".$strSid."\r\n";


$strHeader .= "Content-type:text/html;charset=UTF-8" . "\r\n";


	$strHeader .= "Content-Transfer-Encoding: 7bit\r\n";
	//$strHeader .= $strMessage."\n\n";
	
	//*** Attachment ***//
	/*for($i=0;$i<count($_FILES["fileAttach"]["name"]);$i++)
	{
		if($_FILES["fileAttach"]["name"][$i] != "")
		{
			$strFilesName = $_FILES["fileAttach"]["name"][$i];
			$strContent = chunk_split(base64_encode(file_get_contents($_FILES["fileAttach"]["tmp_name"][$i]))); 
			$strHeader .= "--".$strSid."\n";
			$strHeader .= "Content-Type: application/octet-stream; name=\"".$strFilesName."\"\n"; 
			$strHeader .= "Content-Transfer-Encoding: base64\n";
			$strHeader .= "Content-Disposition: attachment; filename=\"".$strFilesName."\"\n\n";
			$strHeader .= $strContent."\n\n";
		}
	}*/
	

	$flgSend = mail($strTo,$strSubject,$strMessage, $strHeader);  // @ = No Show Error //
if($flgSend)
	{
		$message = "Thank you for your interest.<br>Please find attachment for syllabus copy and fee structure.<br><br>
		Websites: www.oti1.com <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              www.saffroninstitute.com<br>
<br>
Batch details laptop & Desktop Motherboard repairing:-
<br><br>
Daily batch Monday to Saturday<br>
Duration :45days<br>
Timing :2 hrs between 11am to 8pm<br>
<br><br>
Weekend Sunday batch<br>
Duration :15days<br>
Timing :full day from 11am<br>
<br><br>
Fast track course<br>
Duration :15days<br>
Timing :full day from 11am<br>
<br><br>
Course Fees:<br>
Laptop chip level Rs.10,000/-<br>
Desktop motherboard chip level Rs.5000/-<br>
Mobile chip level Rs.5000/-<br>
<br><br>
Special offer for limited period on one time payment :<br>
3 Chip Level Courses with only practical<br>
Laptop + Desktop Motherboard + free Mobile Hardware Software course + Printer Introduction = Rs.12,500/-(on one time payment, Service Tax Included)<br>
(Online and Practical Exam fee as applicable)<br />
<br><br>

<strong>Batch Timing & Duration</strong><br>
Regular Daily Batch:-</br>
Daily batch Monday to Saturday</br>
Duration :12 Working days</br>
Timing : Full day from 11am</br>
</br></br>
Weekend Sunday batch</br>
Duration :12 days</br>
Timing :full day from 11am</br>
Note: New batch of any course starts on every Monday.<br>


<!--Contact us for FRANCHISE<br>
<br><br>
Address:<br>
H-211, 2nd floor,behind lift no.7 & 8, tower no.4, Belapur railway station<br>
complex, Navi Mumbai Maharashtra, INDIA<br>
<br><br>
For Paying Guest:<br>
1)Paying guest, Agroli: +919320416068<br>
2)Paying guest, Belapur: +919930400195<br>
3)SUHANI SEAMAN LODGE<br>
Matoshri Niwas, plot no.B-47, Sector-20, Belapur, Near Water Tank, Navi<br>
Mumbai-400614<br>
+918652109924<br>-->


<br><br>
Regards,<br>
Saffron / Oscillate Technical Institute.<br>
ISO 9001:2008 certified<br>
<br>
";

  $mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";

	     $email="Oscillate Technical Institute <oscillate.technical@gmail.com>";
		 $headers = "From: $email\r\n" .
	      "MIME-Version: 1.0\r\n" .
	         "Content-Type: multipart/mixed;\r\n" .
	         " boundary=\"{$mime_boundary}\"";

	     ######################################
		 
		 
		 ######################################
		 
		  $message = "This is a multi-part message in MIME format.\n\n" .
	         "--{$mime_boundary}\n" .
	         "Content-type: text/html; charset=utf-8\n" .
	         "Content-Transfer-Encoding: 7bit\n\n" .
	      $message . "\n\n";




			 $tmp_name[0] = $_SERVER['DOCUMENT_ROOT']."/mobile_chip_level_repairing_course_syllabus.pdf";
	         $type[0] = "application/octet-stream";
	         $name[0] = "mobile_chip_level_repairing_course_syllabus.pdf";
	         $size[0] = 156067;

			 $tmp_name[1] = $_SERVER['DOCUMENT_ROOT']."/printer_visitors_Course_syllabus_with_pictures.pdf";
	         $type[1] = "application/octet-stream";
	         $name[1] = "printer_visitors_Course_syllabus_with_pictures.pdf";
	         $size[1] = 367494;
			 
			 
			 $tmp_name[2] = $_SERVER['DOCUMENT_ROOT']."/saffron_laptop_syllabus_with_pictures.pdf";
	         $type[2] = "application/octet-stream";
	         $name[2] = "saffron_laptop_syllabus_with_pictures.pdf";
	         $size[2] = 632858;
			 
			 
			 $tmp_name[3] = $_SERVER['DOCUMENT_ROOT']."/schedule_for_fasttrack_course-15_days.pdf";
	         $type[3] = "application/octet-stream";
	         $name[3] = "schedule_for_fasttrack_course-15_days.pdf";
	         $size[3] = 409010;



	      for($i=0;$i<count($tmp_name);$i++)
	      {
	         /*$tmp_name = $_SERVER['DOCUMENT_ROOT']."/mobile_chip_level_repairing_course_syllabus.pdf";
	         $type = "application/octet-stream";
	         $name = "mobile_chip_level_repairing_course_syllabus.pdf";
	         $size = 156067;*/

	         if (file_exists($tmp_name[$i]))
	         {
			   $file = fopen($tmp_name[$i],'rb');

			   $data = fread($file,$size[$i]);

			   fclose($file);

			   $data = chunk_split(base64_encode($data));
	           
				
				####################################################
				
				
		$strTo=$_REQUEST['email'];
		$strSubject="Syllabus copy and fee structure";
				
				
				#####################################################
				
				
				
				$message .= "--{$mime_boundary}\n" .
	               "Content-Type: {$type[$i]};\n" .
	               " name=\"{$name[$i]}\"\n" .
	               "Content-Disposition: attachment;\n" .
	               " filename=\"{$name[$i]}\"\n" .
	               "Content-Transfer-Encoding: base64\n\n" .
	            $data . "\n\n";
	         }
	      }

	      $message.="--{$mime_boundary}--\n";
if (mail($strTo, $strSubject, $message, $headers))
	//echo "Mail sent successfully.";
	header('location:thankyou.html');
else
	echo "Error in mail";
	}
	}
	else
	{
		echo "<script>alert('Wrong security code entered.Try again !');window.history.go(-1);</script>";
	}
?>