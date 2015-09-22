<?php
$page_title = 'Contact Us Page';
$matatag_description = '';
include('header.php');
include('include/captcha.php'); 
?>
  <div class="content_main"><table id="table_format_main" width="100%" border="0" cellspacing="3" cellpadding="3">
  <tr>
    <td align="left"><form action="include/formmail_recaptcha.php" method="post" accept-charset="utf-8" name="contact_form" >
<input type="hidden" name="subject" value="Online Contact form from Alliance Properties" />
     <!--<input type="hidden" name="recipient" value="" />-->
     <input type="hidden" name="recipient" value="john@naturecoastdesign.net" />
     <input type="hidden" name="required" value="Name,email,user_answer" />
     <input type="hidden" name="redirect" value="../thank_you.php" />
<fieldset>								
<legend>Contact Us</legend>
<p align="center"><strong><u>To contact us please call Patty Sweet at 352-212-4071, or Donnie Sweet at 352-212-4545 or fill out the email form below. (We currently travel only to Florida, Georgia, Tennessee, and Kentucky)</u></strong><br /></p>


<p><em>Required fields indicated by *</em></p>
<p>
  <label for="first_name">Your Organization Name:</label> 
	<input type="text" name="organization" id="organization"/> 
</p>
<p>
  <label for="first_name">*Your Name:</label> 
	<input type="text" name="first_name" id="first_name"/> 
</p>
<p>
  <label for="first_name">Your Phone:</label> 
	<input type="text" name="phone" id="phone"/> 
</p>
<p><input type="checkbox" value="Yes" name="contact me about booking" />I would like you to contact me about booking your carnival in our town.</p>
<p>
  	<label for="email">* Email:</label>
	<input type="text" name="email" id="email" />
</p>
  <label for="comments">Questions/Comments:</label><br />
<textarea name="comments" id="text" cols="35" rows="5" align="right"></textarea></p>
<p><?php captcha();?></p>
<div><button type="submit"><span>Submit</span></button></div>

</fieldset>
							</form></td>
  </tr>
</table>
  </div><!-- end .content -->
<?php include('footer.php');?> 