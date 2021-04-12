<?php
include("database.inc.php");
if(isset($_REQUEST['action']) && $_REQUEST['action']=='show_result')
{
	//echo "select * from uploaddata where Certificate_No=".$_REQUEST['certi_no']." ";exit;
	$sql=mysql_query("select * from uploaddata where Certificate_No='".$_REQUEST['certi_no']."' ");
	$result=mysql_num_rows($sql);
}
?>
<html>
<head>
<link href="http://www.oscillateinstitute.com/style.css" rel="stylesheet" type="text/css" />
</head>
<body>

     <div class="text">
       <br />
       <br />
<table width="94%" border="0" cellspacing="0" cellpadding="0" align="center">
           
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr valign="top">
              <td class="text">
               <script language='javascript'>
				 function scrolltoresult()
				 {
					var el=document.getElementById('form_result');
					el.scrollIntoView(true);
				 }
		   </script>
           <div class="hotel-page2">
            <div class="center-bg">
              <form id="form_result" name="form_result" method="post" action="search_result.php?action=show_result" onSubmit="return chk_fields()">
                <div class="center-bg-inner">
                  <table width="90%" border="0" cellspacing="0" cellpadding="0">
  <tr align="left" valign="top">
  <td width="4%">&nbsp;</td>
    <td width="26%">Certificate No.</td>
    <td width="3%">:</td>
    <td width="48%"><input type="text" name="certi_no" id="certi_no" class="textfield1" size="25" maxlength="200" /></td>
    <td width="19%" valign="middle">&nbsp;</td>
    
  </tr>
  <tr align="left" valign="top">
  <td width="4%">&nbsp;</td>
    <td width="26%">&nbsp;</td>
    <td width="3%">&nbsp;</td>
    <td width="48%"><input type="submit" name="button" id="button" value="" style="background-image:url(images/result.gif); width:62px; height:26px; border:none;background-repeat:no-repeat; cursor:pointer; " />
      <br />
      <br /></td>
    <td width="19%" valign="middle">&nbsp;</td>
    
  </tr>
</table>
</div>
                   <?php
		   if(isset($_REQUEST['action']) && $_REQUEST['action']=='show_result')
{
		   if($result >0)
				{
					while($row=mysql_fetch_row($sql))
					{
			   if(file_exists("admin/student_images/thumb2/".$row[8]))
			   {
				   $image="http://www.oscillateinstitute.com/admin/student_images/thumb2/".$row[8];
			   }
			   else
				{
					$image="http://www.oscillateinstitute.com/admin/student_images/thumb2/image_not_found.jpg";
				}
			   ?>
                <div>&nbsp;</div>
                <div class="center-bg-inner1">
                  <table id="myresult" width="100%" border="1" cellspacing="0" cellpadding="0" rules="groups" background="#000000" >
                  <tr valign="top">
                    <td colspan="3"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr valign="top">
                        <td colspan="3" class="exa-result-head">Examination Result</td>
                      </tr>
                      <tr valign="top">
                        <td>&nbsp;</td>
                        <td align="left">&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr valign="top" class="fields">
                        <td><span class="center-form-left1">Certificate Number</span></td>
                        <td><?php echo $row[1]; ?></td>
                        <td rowspan="7" style="background:#f3f1f1" align="center"><img src="<?php echo $image;?>" width="105" height="123" alt="student photo" style="border:1px #000 solid" /></td>
                      </tr>
                      <tr valign="top">
                        <td><span class="center-form-left1">Name</span></td>
                        <td><?php echo $row[2]; ?></td>
                      </tr>
                      <tr valign="top" class="fields">
                        <td><span class="center-form-left1">Course</span></td>
                        <td><?php echo $row[3]; ?></td>
                      </tr>
                      <tr valign="top">
                        <td><span class="center-form-left1">Passing Date</span></td>
                        <td><?php echo $row[4]; ?></td>
                      </tr>
                      <tr valign="top" class="fields">
                        <td><span class="center-form-left1">Result</span></td>
                        <td><?php echo $row[5]; ?></td>
                      </tr>
                      <tr valign="top">
                        <td><span class="center-form-left1">Marks</span></td>
                        <td><?php echo $row[6]; ?></td>
                      </tr>
                      <tr valign="top" class="fields">
                        <td><span class="center-form-left1">Grade</span></td>
                        <td><?php echo $row[7]; ?></td>
                      </tr>
                      <tr valign="top" >
                        <td colspan="3">&nbsp;</td>
                      </tr>
                      
                      <tr valign="top">
                        <td colspan="2" align="left"><span style="line-height:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Website :  
                          www.saffroninstitute.com</span></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                  </table>
                  
                </div>
               <?php echo "<script language='javascript'>scrolltoresult();</script>"; 
                
					}
				}
				else
				{   echo "Certificate No. ".$_REQUEST['certi_no']." does not exist<br><ol><li> Check Certificate number and enter properly. </li>
                                                 <li> Use / symbol while entering number</li>
                                                  <li> Enter full number printed on the back side of your certificate.</li>
                                                  <li> Contact Institute. Call from 12:00 pm in noon to 5:00 pm in evening.</li></ol>";	}
				
				} ?>
              </form></div></div></td></tr><tr><td>&nbsp;</td></tr>
          </table></div>
</body>
</html>