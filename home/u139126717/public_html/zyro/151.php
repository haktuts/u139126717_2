<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>File Management</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=1333" />
		<meta name="description" content="Linux File Management" />
	<meta name="keywords" content="Linux File Management" />
		<meta name="generator" content="Zyro - Website Builder" />
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<link href="css/site.css?v=1.0.12" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1433701547" rel="stylesheet" type="text/css" />
	<link href="css/151.css?ts=1433701547" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="http://haktuts.com/gallery/icon-ts1413278622.png" type="image/png" /><meta name="google-site-verification" content="google6bc4eec58925fc74.html" />
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_header">
	
<div id="wb_element_instance1485" class="wb_element"><ul class="hmenu"><li><a href="Home/" target="_self" title="Home">Home</a></li><li><a href="Free-ethical-hacking-course-online/" target="_self" title="Ethical Hacking">Ethical Hacking</a></li><li><a href="Linux/" target="_self" title="Linux">Linux</a></li><li><a href="Tips-and-tricks/" target="_self" title="Tips and Trick ">Tips and Trick </a><ul><li><a href="how-to-share-internet-without-wifi/" target="_self" title="Windows">Windows</a></li><li><a href="basic-windows-command/" target="_self" title="Windows Shortcut">Windows Shortcut</a></li><li><a href="top-20-notepad-trick/" target="_self" title="Notepad Hacking">Notepad Hacking</a></li><li><a href="list-of-top-cydia-tweaks-for-ios/" target="_self" title="iOS">iOS</a></li><li><a href="how-to-install-kali-linux-nethunter/" target="_self" title="Android">Android</a></li></ul></li><li><a href="download-all-hacking-tools/" target="_self" title="Download">Download</a></li><li><a href="Contact-us/" target="_self" title="Contact us">Contact us</a></li><li><a href="Book/" target="_self" title="Book">Book</a></li><li><a href="Earn-Money/" target="_self" title="Earn Money">Earn Money</a></li><li><a href="http://haktuts.blogspot.in" target="_self" title="Blog">Blog</a></li><li><a href="https://cse.google.com/cse/publicurl?cx=001639366659799729802:vr921b1tgry#gsc.tab=0&amp;gsc.q=haktuts&amp;gsc.sort=" target="_blank" title="Hackers Search Engine">Hackers Search Engine</a></li></ul></div><div id="wb_element_instance1486" class="wb_element"><div></div></div><div id="wb_element_instance1487" class="wb_element"><a class="wb_button" href="Home/"><span>HaKTuts</span></a></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance1488" class="wb_element" style=" overflow: hidden;"><script id="airpushScript" type="text/javascript" src="//ab.airpush.com/apportal/client/airpush.js?siteid=263411&amp;testmode=0&amp;banner360=1&amp;banner=slot1&amp;placementid=0&amp;tp=0">
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
                    </tr></tbody></table></div><div id="wb_element_instance1489" class="wb_element"><div style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 1px solid #303030;"></div></div><div id="wb_element_instance1490" class="wb_element"><!-- Tags Code For AdPrimary.Com -->
<script type="text/javascript">
document.write('<s'+'cript src="http://c.pioneeringad.com/?adid=8905&adtp=banner&adsz=1&adrd='+new Date().getTime()+'" type="text/javascript">'+'cript>');
</script><!-- End Tags AdPrimary.Com --></div><div id="wb_element_instance1492" class="wb_element" style=" line-height: normal;"><h2 class="wb-stl-heading2">File Permission</h2>

<p> </p>

<h1 class="wb-stl-heading1">- rwx rwx rwx</h1>

<p class="wb-stl-normal"><br><span style="color:#f01633;">-</span> means file<br><span style="color:#f01633;">r</span> means read<br><span style="color:#f01633;">w</span> means write<br><span style="color:#f01633;">x</span> means excute<br>
first <span style="color:#f01633;">rwx</span> is for user permission<br>
next <span style="color:#f01633;">rwx</span> is for group permission <br>
and last <span style="color:#f01633;">rwx</span> is for other permission<br><br><span style="color:#f01633;">-</span> means permission is for file<br><span style="color:#f01633;">d</span> means permission is for directory<br><span style="color:#f01633;">l</span> means for links<br><span style="color:#f01633;">p</span> means for process file<br><span style="color:#f01633;">s</span> means for socket file<br><span style="color:#f01633;">b</span> means for block device<br><span style="color:#f01633;">c</span> means for character device<br><span style="color:#f01633;">Note:</span>if permission started with <span style="color:#f01633;">d</span> instead of <span style="color:#f01633;">-</span> .It means particuler permission is for directory.</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<h2 class="wb-stl-heading2"><br>
 </h2>

<h2 class="wb-stl-heading2"> </h2>

<h2 class="wb-stl-heading2"> </h2>

<h2 class="wb-stl-heading2"> </h2>

<h2 class="wb-stl-heading2"> </h2>

<h2 class="wb-stl-heading2"> </h2>

<h2 class="wb-stl-heading2">How to change the <span style="color:#f01633;">file</span> or <span style="color:#f01633;">directory</span> permission<br>
 </h2>

<p class="wb-stl-normal"><span style="color:#f01633;">chmod</span> command is used to change the permission<br>
File or Directory permission can be change in two ways<br>
Method 1<br><span style="color:#f01633;">chmod &lt;permission&gt; &lt;file or directory name&gt;</span><br>
eg:<br>
1 : if user file permission change from rwx to rw only<br><span style="color:#f01633;">chmod u+rw filename</span><br>
2 : if user and group file permission change from rwx to rw only<br><span style="color:#f01633;">chmod ug+rw filename</span><br><br>
Method 2<br><span style="color:#f01633;">chmod &lt;permission&gt; &lt;file or directory name&gt;</span><br>
eg:<br>
1 : if user file permission change from rwx to  rw only  ,group file permission change from rwx to r only and other file permission change from rwx to r only<br><span style="color:#f01633;">chmod 644 filename</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">Changing file ownership</p>

<p class="wb-stl-normal"><br>
You can change the owner of a file by using the chown command<br><span style="color:#f01633;">chown  &lt;new user name&gt; &lt;file name&gt;</span><br>
eg:<br>
1 :  I wanted to change the owner of file from "Haktuts" to "hak". <br><span style="color:#f01633;">chown hak filename</span><br><br>
Changing group ownership<br>
You can change the owner of group by using the chgrp command<br><span style="color:#f01633;">chgrp  &lt;new user name&gt; &lt;file name&gt;</span><br>
eg:<br>
1 :  I wanted to change the owner of group from "Haktuts" to "hak". <br><span style="color:#f01633;">chgrp hak filename</span><br><br>
changing user and group ownership<br><span style="color:#f01633;">chown &lt;user&gt;:&lt;group&gt; filename</span><br>
eg:<br>
if user want to change both user and group ownership<br><span style="color:#f01633;">chown haktuts:hak filename</span><br>
 </p>
</div><div id="wb_element_instance1493" class="wb_element"><img alt="" src="gallery/7c162c06f99f1521f7448a8ba023ca16_486x304.gif"></div><div id="wb_element_instance1494" class="wb_element"><img alt="" src="gallery/a836283f9d09a9207660a68a8fbda0ca_681x461.png"></div><div id="wb_element_instance1495" class="wb_element"><img alt="" src="gallery/cc298537b48524e806b1aac34c3475a7_700x180.png"></div><div id="wb_element_instance1496" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(151);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance1496");
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
					$("#wb_element_instance1496").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 161px;">
	
<div id="wb_element_instance1491" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle">haktuts © 2014. All Rights Reserved </h4>
</div><div id="wb_element_instance1497" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
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