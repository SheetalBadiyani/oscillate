<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>:: Welcome To We Deal All ::</title>
</head>

<body>
<?php
 $strTo = "saffron_mahesh@yahoo.com";//saffron_mahesh@yahoo.com
 $strSubject = "Enquiry For Saffron Technical Institute ";

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
        <td width=\'67%\'>'.$_REQUEST['state'].'</td>
        </tr>
		<tr>
        <td>
          Course:
        </td>
        <td width=\'67%\'>'.$_REQUEST['course']." ".$_REQUEST['franchise'].'</td>
        </tr>
		<tr>
        <td>
          Comment:
        </td>
        <td width=\'67%\'>'.$_REQUEST['comments'].'</td>
        </tr>
		
      </table>
    </td>
  </tr>
</table>
	</body>
	</html>';

	//*** Uniqid Session ***//
	$strSid = md5(uniqid(time()));
	$email1="saffron_mahesh@yahoo.com"; //saffron.technical@gmail.com
	$strHeader = "";
	$strHeader .= "From: ".$email1."\n";
	//$strHeader .= "Cc: bcmhatre@gmail.com\n";
	//$strHeader .= "Cc: info@professionalwebworld.com\n";

	$strHeader .= "MIME-Version: 1.0\n";
	$strHeader .= "Content-Type: multipart/mixed; boundary=\"".$strSid."\"\n\n";
	$strHeader .= "This is a multi-part message in MIME format.\n";
	
	$strHeader .= "--".$strSid."\n";
	$strHeader .= "Content-type: text/html; charset=utf-8\n";
	$strHeader .= "Content-Transfer-Encoding: 7bit\n\n";
	$strHeader .= $strMessage."\n\n";
	
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
	

	$flgSend = @mail($strTo,$strSubject,$message,$strHeader);  // @ = No Show Error //

	if($flgSend)
	{
		$upload_name="syllabus.rar";
		$upload_type="application/rar";
		//[size] => 1369409
		$strTo=$_REQUEST['email'];
		$strSubject="Syllabus copy and fee structure";
		$message="Thank you for your interest.<br>Please find attachment for syllabus copy and fee structure.<br><br>
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
Mobile chip level Rs.4000/-<br>
<br><br>
Special offer for limited period on one time payment :<br>
Laptop & Desktop chip level training Rs.11,000 + (Free Mobile repairing<br>
Hardware/Software course & Printer introduction course)<br>
<br><br>

Note: Printer Repairing Course<br>
Regular batch Timings: Morning 8 am to 11 am.<br>
5 days a week. Monday to Friday.<br>
Fast track batch course duration 10 to 12days.<br>
Printer course Fee Please Check attachment.<br>
<br><br>
Note: New batch of any course starts on every Monday.<br>
Contact us for FRANCHISE<br>
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
+918652109924<br>
<br><br>
Regards,<br>
Saffron / Oscillate Technical Institute.<br>
ISO 9001:2008 certified<br>
<br>";
		$fp = fopen($_SERVER['DOCUMENT_ROOT']."/syllabus.rar", "rb");
    	$file = fread($fp, 1369409);
		$file = chunk_split(base64_encode($file));
		$num = md5(time());
		
		$headers  = "From: ".$_SERVER['SERVER_NAME']."<saffron_mahesh@yahoo.com>\r\n";
		$headers  .= "MIME-Version: 1.0\r\n";
		$headers  .= "Content-Type: multipart/mixed; ";
		$headers  .= "boundary=".$num."\r\n";
		$headers  .= "--$num\r\n";
		
		$headers .= "Message-ID: <".gettimeofday()." TheSystem@".$_SERVER['SERVER_NAME'].">\r\n";
		$headers .= "X-Mailer: PHP v".phpversion()."\r\n";
		
		$headers .= "Content-Type: text/html; charset=iso-8859-1\r\n";
		$headers .= "Content-Transfer-Encoding: 8bit\r\n";
		$headers .= "".$message."\n";
		$headers .= "--".$num."\n";
		
		$headers  .= "Content-Type:".$upload_type." ";
		$headers  .= "name=\"".$upload_name."\"r\n";
		$headers  .= "Content-Transfer-Encoding: base64\r\n";
		$headers  .= "Content-Disposition: attachment; ";
		$headers  .= "filename=\"".$upload_name."\"\r\n\n";
		$headers  .= "".$file."\r\n";
		$headers  .= "--".$num."--";
		
		mail($strTo,$strSubject,$message,$headers);
		
	?> 
	<META HTTP-EQUIV="refresh" content="0;URL=thankyou.html">
										
   <?php
	}
	else
	{?> 
    <SCRIPT LANGUAGE="javascript">alert("Internal Server Error, Please Try Again.");</SCRIPT> 
	<META HTTP-EQUIV="refresh" content="0;URL=thankyou.html">
										
   <?php
	}
?>
</body>
</html>
<!--- This file download from www.shotdev.com -->