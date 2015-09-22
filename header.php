<?php
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $page_title; ?></title>
<meta name="description" content="<?php echo $matatag_description; ?>">
<meta name="title" content="<?php echo $page_title; ?>">
<meta name="robots" content="index, follow">
<link href="include/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="include/accordian.pack.js"></script>

<!-- lightbox plugin -->
<script type="text/javascript" src="lightbox/prototype.js"></script>
<script type="text/javascript" src="lightbox/scriptaculous.js?load=effects"></script>
<script type="text/javascript" src="lightbox/lightbox.js"></script>
<link rel="stylesheet" href="lightbox/lightbox.css" type="text/css" media="screen" />

<script type="text/javascript" src="js/swfobject.js"></script>
<script type="text/javascript" src="js/CU3ER.js"></script>
<script type="text/javascript">
// add your FlashVars
var vars = { xml_location : 'js/CU3ER-config.xml', width:'950', height:'330' };
// add Flash embedding parameters, etc. wmode, bgcolor...
var params = { bgcolor : '#ffffff' };
params.allowScriptAccess = "always";
// Flash object attributes id and name
var attributes = { id:'CU3ER', name:'CU3ER' };
// dynamic embed of Flash, set the location of expressInstall if needed
swfobject.embedSWF('js/CU3ER.swf', "CU3ER", 950, 330, "10.0.0", 
"js/expressinstall.swf", vars, params, attributes );
// initialize CU3ER class containing Javascript controls and events for CU3ER
var CU3ER_object = new CU3ER("CU3ER");
</script>	

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  
</head>
<body_main onload="new Accordian('basic-accordian',5,'header_highlight');">

<div class="container_main">
  <div class="header_main">
  <table align="center" id="table_format_main" width="100%" border="0" cellspacing="3" cellpadding="0">
  <tr align="left">
    <td><img src="images/header2.png" width="960" height="286"><p style="margin-bottom: 5px;"></p></td>
  </tr>
  <tr>
    <td align="center" style="background-color:#0a72ff"><table id="table_format_main" align="center" width="75%" border="0" cellspacing="3" cellpadding="3" style="color:#FFF;font-weight:bold;font-size:16px">
  <tr align="center">
    <td><a href="index.php" style="text-decoration:none">Home</a></td>
    <td>|</td>
    <td><a href="our_midway.php" style="text-decoration:none">Our Midway</a></td>
    <td>|</td>
    <td><a href="calendar.php" style="text-decoration:none">Calendar</a></td>
    <td>|</td>
    <td><a href="safety.php" style="text-decoration:none">Safety</a></td>
    <td>|</td>
    <td><a href="contact_us.php" style="text-decoration:none">Contact Us</a></td>
  </tr>
</table>
</td>
  </tr>
  <?php if(isset($page)){ ?>
  <tr align="center" >
    <td><p style="margin-top: 15px;"></p><div id="CU3ER">  		  
<!-- modify this content to provide users without Flash or enabled Javascript with alternative content information -->  		
<p>Click to get Flash Player<br />
<a href="http://www.adobe.com/go/getflashplayer">
<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
</a>
</p>  		  
<p>or try to enable JavaScript and reload the page</p>
<!-- generated SEO content starts here -->  	
<div style="position:absolute;left:-50000px;">  <ul>
    <li>
      <img src='images/Slide-1.JPG' alt=''/>
      <h2></h2>
      <p></p>
      <p></p>
    </li>
    <li>
      <img src='images/Slide-2.JPG' alt=''/>
      <h2></h2>
      <p></p>
      <p></p>
    </li>
    <li>
      <img src='images/Slide-3.JPG' alt=''/>
      <h2></h2>
      <p></p>
      <p></p>
    </li>
    <li>
      <img src='images/Slide-4.JPG' alt=''/>
      <h2></h2>
      <p></p>
      <p></p>
    </li>
    <li>
      <img src='images/Slide-5.JPG' alt=''/>
      <h2></h2>
      <p></p>
      <p></p>
    </li>
    <li>
      <img src='images/Slide-6.JPG' alt=''/>
      <h2></h2>
      <p></p>
      <p></p>
    </li>
    <li>
      <img src='images/Slide-7.JPG' alt=''/>
      <h2></h2>
      <p></p>
      <p></p>
    </li>
    <li>
      <img src='images/Slide-8.JPG' alt=''/>
      <h2></h2>
      <p></p>
      <p></p>
    </li>
    <li>
      <img src='images/Slide-9.JPG' alt=''/>
      <h2></h2>
      <p></p>
      <p></p>
    </li>
    <li>
      <img src='images/Slide-10.JPG' alt=''/>
      <h2></h2>
      <p></p>
      <p></p>
    </li>
    <li>
      <img src='images/Slide-11.JPG' alt=''/>
      <h2></h2>
      <p></p>
      <p></p>
    </li>
  </ul></div>
<!-- generated SEO content ends here -->  
</div>		
		
	
	</td>
  </tr>
  <?php } ?>
</table>
    </div><!-- end .header -->
  <div class="sidebar_main">
    <table align="center" width="100%" border="0" cellspacing="3" cellpadding="3">
  <tr align="center">
    <td><img src="images/kid_rides.png" width="217" height="195"></td>
  </tr>
  <tr align="center">
    <td><img src="images/games.png" width="217" height="196"></td>
  </tr>
  <tr align="center">
    <td><img src="images/teen_adult_rides.png" width="216" height="194"></td>
  </tr>
  <tr align="center">
    <td><img src="images/food.png" width="217" height="194"></td>
    </tr>
    <!--<tr align="center">
    <td>
    <div align="center"><embed src="include/home_page_song.mp3" type="application/x-mplayer2" width="100%" height="45" autostart="false" repeat="true" loop="true"> </embed></div></td>
  </tr>-->
</table>
</div><!-- end .sidebar -->