<?php
session_start();
include_once("include/DBConn.php"); 
$Name=$_GET['Name']; 

$selectStudentResult="select * from UploadData where Name='$searchall'";

$resStudentResult=mysql_query($selectStudentResult,$link) or die("Internal Server Error:".mysql_error());
$numStudentResult=mysql_num_rows($resStudentResult);
$rowStudentResult=mysql_fetch_array($resStudentResult);


$Certificate_No= $rowStudentResult["Certificate_No"];
$Name= $rowStudentResult["Name"];
$Course= $rowStudentResult["Course"];
$PassingDate= $rowStudentResult["PassingDate"];
$Result= $rowStudentResult["Result"];
$Marks= $rowStudentResult["Marks"];
$Grade= $rowStudentResult["Grade"];
?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>::::    Welcome To  Oscillate Technical Insitute    ::::</title>
<!-- InstanceEndEditable -->
<link href="style.css" rel="stylesheet" type="text/css" />
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<script src="file:///C|/xampp/htdocs/bhushan/static/mahesh-pawar/project/Scripts/swfobject_modified.js" type="text/javascript"></script>



 <!-- drop down menu starts here-->
     
<link rel="stylesheet" type="text/css" href="dropdown/ddsmoothmenu.css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="dropdown/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "smoothmenu1", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

ddsmoothmenu.init({
	mainmenuid: "smoothmenu2", //Menu DIV id
	orientation: 'v', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu-v', //class added to menu's outer DIV
	//customtheme: ["#804000", "#482400"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>
        
        
        <!-- dropdown menu ends here-->
<SCRIPT type="text/javascript" src="jquery/jquery.min.js" ></SCRIPT>
<!-- include Cycle plugin -->
<SCRIPT type="text/javascript" src="jquery/jquery.cycle.all.2.74.js"></SCRIPT>
<!--  initialize the slideshow when the DOM is ready -->
  <SCRIPT type="text/javascript">
<!--
$(document).ready(function() {
    $('.slideshow').cycle({
		fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
	});
});
//-->
</SCRIPT>

</head>

<body>
  <div class="main-panel">
    <div class="middle-bg">
      <div class="middle-bg-inner">
      <div class="left"><img src="images/name.jpg" width="500" height="150" alt="" /><br />
        <strong>Act Reg.No. : mstbho/2011/11/61&nbsp; Act Reg.No. : mstbho/2011/11/62</strong> </div>
       <div class="right" align="center" style="padding:20px 0 0 0">
         <object id="FlashID2" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="379" height="54">
           <param name="movie" value="flash/oscillate-head-flash.swf" />
           <param name="quality" value="high" />
           <param name="wmode" value="opaque" />
           <param name="swfversion" value="8.0.35.0" />
           <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don't want users to see the prompt. -->
           <param name="expressinstall" value="Scripts/expressInstall.swf" />
           <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
           <!--[if !IE]>-->
           <object type="application/x-shockwave-flash" data="flash/oscillate-head-flash.swf" width="379" height="54">
             <!--<![endif]-->
             <param name="quality" value="high" />
             <param name="wmode" value="opaque" />
             <param name="swfversion" value="8.0.35.0" />
             <param name="expressinstall" value="Scripts/expressInstall.swf" />
             <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
             <div>
               <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
               <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
             </div>
             <!--[if !IE]>-->
           </object>
           <!--<![endif]-->
         </object>
        <div class="right" >
            <div  id='menu' >
    <ul>
                  <li style="border-left:none;"><a href="branch-locator.html">Branch Locator</a>
                   <ul>
         <li><a href='branch-locator.html'>Mumbai</a></li>
         <li><a href='branch-locator.html'>Delhi</a></li>
         <li style="border-bottom:1px solid #000;"><a href='branch-locator.html'>Chennai</a></li>
     </ul>
                  </li>
                  <li><a href="http://www.oscillateinstitute.com/exam/">Online Examination</a></li>
              </ul>
            
            </div>
         </div>
       </div>
       <div class="top-img">
         <div class="menu-left">
           <!--dropdown menu starts here-->
       
  
<div class="menu-dropdowm">
  <div id="smoothmenu1" class="ddsmoothmenu">
              <ul>
                <li style="background:none;"><a href="index.html">Home</a>
                <ul>
              <li> <a href="about.html">About Us</a></li>
               </ul>
                   
                </li>
                <li><a>Courses Fees</a>
                    <ul>
                       <li><a href="laptop.html">Laptop & Desktop Mother Board Course</a></li>
                        <li><a href="mobile.html">Mobile Repairing Course.</a></li>
                        <li><a href="printer-syllabus.html">Printer Repairing Course.</a></li>                         
                      <!--  <li><a href="printer.html"> Printer Fee, Duration, Details.</a></li>
                        <li><a href="combine.html">Laptop Desktop & Mobile Fee, Details.</a></li>-->
                        
                        
                        
                        
                        
                        
                    </ul>
                </li>
                <li><a href="job.html">Placement</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                 <li><a href="search-result.php">Search Result</a></li>
             </ul>
</div>
</div>


        
        <!--dropdown menu ends here-->
            <!--<ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.html">Courses</a></li>
                <li><a href="franchise.html">Contact Us</a></li>
                <li><a href="search-result.html">Search Result</a></li>
            </ul>-->
         </div>
         <div class="menu-right">
            <span class="phone"><img src="images/phone.jpg" width="32" height="33" alt=""  class="phone"/></span>
            <span class="con-no">9819185050</span>
         </div>
         <div><marquee scrolldelay="200"></marquee></div>
       </div>
      
   
        
    <div class="wel-left">
      <div class="flash-inn">
        <div style="float:left; margin-top: 0px; margin-left:1px;" class="slideshow" align="center"> <img src="images/banner02.jpg" width="685" height="352" alt="" /> <img src="images/banner06.jpg" width="685" height="352" alt="" /><span class="slideshow" style="float:left; margin-top: 0px; margin-left:1px;"><img src="images/banner04.jpg" width="685" height="352" alt="" /></span><img src="images/banner05.jpg" width="685" height="352" alt="" /> </div>
      </div>
      <!-- InstanceBeginEditable name="left side" -->
     <div class="welcome"><span class="blue">Sutdents</span> Result</div>
     <div class="text">
       <div class="certificate-bg">
<table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="33%" align="left" valign="top">&nbsp;</td>
    <td width="33%" rowspan="6" align="left" valign="top"><table width="75%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="120" align="center" valign="middle"><a href="prop.php?imagpath=<?php echo  $rowStudentResult["StudImage"];?>" title="<?php echo $rowStudentResult["compName"];?> in <?php echo $rowStudentResult["cityState"];?>" target="_blank"><img src="<?php echo $rowStudentResult["StudImage"];?>" alt="<?php echo $rowStudentResult["compName"];?> in <?php echo $rowStudentResult["cityState"];?>" width="128" height="118" border="0" align="middle" id='img1' /></a></td>
      </tr>
    </table></td>
    <td width="33%" align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td width="33%" align="left" valign="top">&nbsp;</td>
    <td width="33%" align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td width="33%" align="left" valign="top">&nbsp;</td>
    <td width="33%" align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td width="33%" align="left" valign="top">&nbsp;</td>
    <td width="33%" align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td width="33%" align="left" valign="top">&nbsp;</td>
    <td width="33%" align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td width="33%" align="left" valign="top">&nbsp;</td>
    <td width="33%" align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td width="33%" align="left" valign="top">&nbsp;</td>
    <td colspan="2" align="left" valign="top" style="padding:0 0 0 120px;"><?php echo $rowStudentResult["Certificate_No"];?></td>
    </tr>
  <tr>
    <td width="33%" align="left" valign="top">&nbsp;</td>
    <td width="33%" align="left" valign="top">&nbsp;</td>
    <td width="33%" align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top"><span class="ratebox-font"><?php echo $rowStudentResult["Name"];?></span></td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td width="33%" align="left" valign="top"><span class="ratebox-font"><?php echo $rowStudentResult["sqPrice"];?></span></td>
    <td width="33%" align="left" valign="top">&nbsp;</td>
    <td width="33%" align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td width="33%" align="left" valign="top">&nbsp;</td>
    <td width="33%" align="left" valign="top">&nbsp;</td>
    <td width="33%" align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td width="33%" align="left" valign="top"><span class="ratebox-font"><?php echo $rowStudentResult["sqPrice"];?></span></td>
    <td width="33%" align="left" valign="top">&nbsp;</td>
    <td width="33%" align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td width="33%" align="left" valign="top">&nbsp;</td>
    <td width="33%" align="left" valign="top">&nbsp;</td>
    <td width="33%" align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td width="33%" align="left" valign="top"><span class="ratebox-font"><?php echo $rowStudentResult["sqPrice"];?></span></td>
    <td width="33%" align="left" valign="top">&nbsp;</td>
    <td width="33%" align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td width="33%" align="left" valign="top">&nbsp;</td>
    <td width="33%" align="left" valign="top">&nbsp;</td>
    <td width="33%" align="left" valign="top">&nbsp;</td>
  </tr>
</table>
</div>
     </div>
     <!-- InstanceEndEditable --></div>
    <div class="wel-right">
    <div>
      <table width="100%" border="0" cellspacing="0" cellpadding="0" style="background:url(images/enquiry-bg-inn.jpg) top no-repeat;">
        <tr>
          <th align="left" valign="top" scope="col">&nbsp;</th>
        </tr>
        <tr>
          <td align="left" valign="top"><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td height="30" align="left" valign="top">&nbsp;</td>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td width="25%" height="30" align="left" valign="top">Name</td>
              <td width="75%" align="left" valign="top"><input type="text" name="name" id="name"  class="textfield-inn"/></td>
            </tr>
            <tr>
              <td align="left" valign="top" height="30px">Email</td>
              <td align="left" valign="top"><input type="text" name="email" id="email"  class="textfield-inn"/></td>
            </tr>
            <tr>
              <td align="left" valign="top" height="30px">Mobile</td>
              <td align="left" valign="top"><input type="text" name="mobile" id="mobile"  class="textfield-inn"/></td>
            </tr>
            <tr>
              <td align="left" valign="top" height="30px">Address</td>
              <td align="left" valign="top"><input type="text" name="address" id="address"  class="textfield-inn"/></td>
            </tr>
            <tr>
              <td height="30" align="left" valign="top">Enquiry </td>
              <td align="left" valign="top" style="font-size:10px;"><label>
                <input type="checkbox" name="Demo session" value="Demo session" id="CheckboxGroup1_0" " />
                Demo session</label>
                <label>
                  <input type="checkbox" name="course" value="course" id="CheckboxGroup1_1" />
                  Course</label></td>
            </tr>
            <tr>
              <td align="left" valign="top" height="30px">Comment</td>
              <td align="left" valign="top"><input type="text" name="comment" id="comment"  class="textfield-inn"/></td>
            </tr>
            <tr>
              <td align="left" valign="top" colspan="2">Security Code<br />
                <img src="securimage_show.php?sid=<?php echo md5(time()) ?>" alt="" name="siimage2" id="siimage2" style=" border: 0;width:130px ; height:30px; float:left; margin-top:5px;" />&nbsp;&nbsp;
                <!--<a tabindex="-1" style="border-style: none" href="#" class="refresh"  onClick="document.getElementById('siimage2').src = 'securimage_show.php?sid=' + Math.random();return false;"><img src="images/refresh.png" alt="Reload Image" width="26" height="28" border="0" onClick="this.blur()" /></a>-->
                <input type="text" name="code" id="code"  class="textfield11"/></td>
            </tr>
            <tr>
              <td height="20" colspan="2" align="right" valign="top">I Agree for email/call/sms
                <input name="input" type="image" src="images/submit-button.gif" /> 
                &nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
              <td height="15" colspan="2" align="left" valign="top"><strong><span class="color1" style="font-size:10px">*Please make a call for faster enquiry.</span></strong></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td align="left" valign="top">&nbsp;</td>
        </tr>
      </table>
    </div>
      <div class="side-bg" align="center"><a href="hostel.html"><blink>Free Hostel Package</blink></a></div>
       <div class="side-bg" align="center"><a href="payment.html">Online Payment</a></div>
       <div class="side-bg" align="center"><a href="combine.html">Discount On Combine Course</a></div>
       <div class="side-bg" align="center"><a href="batch.html">Batch Timing &amp; Duration</a></div>
        <div class="side-bg" align="center"><a href="teaching.html">Teaching Pattern</a></div>
      <div class="con-bg">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr align="left" valign="top">
            <td>Please contact us anytime! We look forward to hear from you.</td>
          </tr>
          <tr align="left" valign="top">
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:10px;">
              <tr class="con-name">
                <td align="left" valign="top">Office</td>
                <td align="left" valign="top">&nbsp;:</td>
                <td align="left" valign="top">&nbsp;&nbsp;+919220079945</td>
              </tr>
              <tr class="con-name">
                <td align="left" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td align="left" valign="top">:</td>
                <td align="left" valign="top">&nbsp;&nbsp;&nbsp;022-66739737</td>
              </tr>
              <tr class="con-name">
                <td align="left" valign="top">Mahesh Sir</td>
                <td align="left" valign="top">:</td>
                <td align="left" valign="top">+919819185050</td>
              </tr>
              <tr class="con-name">
                <td align="left" valign="top">Mayur Sir</td>
                <td align="left" valign="top">:</td>
                <td align="left" valign="top">+919833411577</td>
              </tr>
            </table></td>
          </tr>
          <tr align="left" valign="top">
            <td class="contact-head">Email : </td>
          </tr>
          <tr align="left" valign="top">
            <td class="con-name"><a href="mailto:oscillate.technical@gmail.com">oscillate.technical@gmail.com</a></td>
          </tr>
          <tr align="left" valign="top">
            <td class="contact-head">Website :</td>
          </tr>
          <tr align="left" valign="top">
            <td class="con-name"><a href="http://www.saffroninstitute.com/" target="_blank">www.saffroninstitute.com</a></td>
          </tr>
          <tr align="left" valign="top">
            <td class="con-name"><a href="http://www.mobileclasses.com/" target="_blank">www.mobileclasses.com</a></td>
          </tr>
          <tr align="left" valign="top">
            <td>&nbsp;</td>
          </tr>
          <tr align="left" valign="top">
            <td class="hostels"><a href="hostel.html">Hostels Available <img src="images/hand-click.png" alt="" width="20" height="15" border="0" /> <span style="font-family:Verdana, Geneva, sans-serif; font-size:9px; color:#333;">Click Here</span></a></td>
          </tr>
        </table>
      </div>
    </div>
     
      </div>
      <div class="footer-strp-pad">
        <div class="footer-strp">
         <ul>
            <li><a href="index.html">Home </a></li>
            <li><a href="about.html">About Us </a></li>
            <li><a href="laptop.html">Laptop Course Syllabus   </a></li>
            <li><a href="mobile.html">Mobile Course Syllabus </a></li>
            <li><a href="franchise.html">Franchise </a></li>
            <li><a href="contact.html">Contact Us</a></li>
            <li><a href="sitemap.html">Sitemap</a></li>
         </ul>
         <span class="copy">Copyright  © 2010 Oscillate Technical Institute. All Rights Reserved</span>
         <span class="copy1">Website Design By <a href="www.professionalwebworld.com" target="_blank">Professional Web World</a></span>
     </div>
      </div>
    </div>
    
  </div>
<script type="text/javascript">
swfobject.registerObject("FlashID");
  </script>
</body>
<!-- InstanceEnd --></html>
