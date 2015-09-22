<?php
$page_title = 'Midway Page';
$matatag_description = '';
include('header.php');
?>
  <div class="content_main"><table id="table_format_main" width="100%" border="0" cellspacing="3" cellpadding="3">
  <tr>
    <td align="left">
	<div id="basic-accordian" ><!--Parent of the Accordion-->


<!--Start of each accordion item-->
  <div id="test-header" class="accordion_headings header_highlight" >Home</div><!--Heading of the accordion ( clicked to show n hide ) -->
  
  <!--Prefix of heading (the DIV above this) and content (the DIV below this) to be same... eg. foo-header & foo-content-->
  
  <div id="test-content"><!--DIV which show/hide on click of header-->
  
  	<!--This DIV is for inline styling like padding...-->
    <div class="accordion_child">
    	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nunc ligula nisl, egestas non, pharetra vel, scelerisque accumsan, lacus. Proin nibh. Aenean dapibus. Quisque facilisis, ligula ut blandit hendrerit, purus neque rhoncus ipsum, sit amet ultrices mauris augue non arcu. Donec et sem nec libero viverra accumsan.<br /><br /> Quisque facilisis, ligula ut blandit hendrerit, purus neque rhoncus ipsum, sit amet ultrices mauris augue non arcu. Donec et sem nec libero viverra accumsan.
    </div>
    
  </div>
<!--End of each accordion item--> 


<!--Start of each accordion item-->
  <div id="test1-header" class="accordion_headings" >About Us</div><!--Heading of the accordion ( clicked to show n hide ) -->
  
  <!--Prefix of heading (the DIV above this) and content (the DIV below this) to be same... eg. foo-header & foo-content-->
  
  <div id="test1-content"><!--DIV which show/hide on click of header-->
  
  	<!--This DIV is for inline styling like padding...-->
    <div class="accordion_child">
    	Quisque facilisis, ligula ut blandit hendrerit, purus neque rhoncus ipsum, sit amet ultrices mauris augue non arcu. Donec et sem nec libero viverra accumsan.
    </div>
    
  </div>
<!--End of each accordion item--> 



<!--Start of each accordion item-->
  <div id="test2-header" class="accordion_headings" >Downloads</div><!--Heading of the accordion ( clicked to show n hide ) -->
  
  <!--Prefix of heading (the DIV above this) and content (the DIV below this) to be same... eg. foo-header & foo-content-->
  
  <div id="test2-content"><!--DIV which show/hide on click of header-->
  
  	<!--This DIV is for inline styling like padding...-->
    <div class="accordion_child">
    	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nunc ligula nisl, egestas non, pharetra vel, scelerisque accumsan, lacus. Proin nibh. Aenean dapibus. Quisque facilisis, ligula ut blandit hendrerit, purus neque rhoncus ipsum, sit amet ultrices mauris augue non arcu. Donec et sem nec libero viverra accumsan.<br />
    </div>
    
  </div>
<!--End of each accordion item--> 







</div><!-- #main --></td>
  </tr>
  <tr><td>
  
</td></tr>
</table>
  </div><!-- end .content -->
<?php include('footer.php');?> 