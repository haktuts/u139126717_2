<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Security</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=1333" />
		<meta name="description" content="How to secure Your apache server" />
	<meta name="keywords" content="How to secure Your apache server" />
		<meta name="generator" content="Zyro - Website Builder" />
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<link href="css/site.css?v=1.0.12" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1433701547" rel="stylesheet" type="text/css" />
	<link href="css/158.css?ts=1433701547" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="http://haktuts.com/gallery/icon-ts1413278622.png" type="image/png" /><meta name="google-site-verification" content="google6bc4eec58925fc74.html" />
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_header">
	
<div id="wb_element_instance1558" class="wb_element"><ul class="hmenu"><li><a href="Home/" target="_self" title="Home">Home</a></li><li><a href="Free-ethical-hacking-course-online/" target="_self" title="Ethical Hacking">Ethical Hacking</a></li><li><a href="Linux/" target="_self" title="Linux">Linux</a></li><li><a href="Tips-and-tricks/" target="_self" title="Tips and Trick ">Tips and Trick </a><ul><li><a href="how-to-share-internet-without-wifi/" target="_self" title="Windows">Windows</a></li><li><a href="basic-windows-command/" target="_self" title="Windows Shortcut">Windows Shortcut</a></li><li><a href="top-20-notepad-trick/" target="_self" title="Notepad Hacking">Notepad Hacking</a></li><li><a href="list-of-top-cydia-tweaks-for-ios/" target="_self" title="iOS">iOS</a></li><li><a href="how-to-install-kali-linux-nethunter/" target="_self" title="Android">Android</a></li></ul></li><li><a href="download-all-hacking-tools/" target="_self" title="Download">Download</a></li><li><a href="Contact-us/" target="_self" title="Contact us">Contact us</a></li><li><a href="Book/" target="_self" title="Book">Book</a></li><li><a href="Earn-Money/" target="_self" title="Earn Money">Earn Money</a></li><li><a href="http://haktuts.blogspot.in" target="_self" title="Blog">Blog</a></li><li><a href="https://cse.google.com/cse/publicurl?cx=001639366659799729802:vr921b1tgry#gsc.tab=0&amp;gsc.q=haktuts&amp;gsc.sort=" target="_blank" title="Hackers Search Engine">Hackers Search Engine</a></li></ul></div><div id="wb_element_instance1559" class="wb_element"><div></div></div><div id="wb_element_instance1560" class="wb_element"><a class="wb_button" href="Home/"><span>HaKTuts</span></a></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance1561" class="wb_element" style=" overflow: hidden;"><script id="airpushScript" type="text/javascript" src="//ab.airpush.com/apportal/client/airpush.js?siteid=263411&amp;testmode=0&amp;banner360=1&amp;banner=slot1&amp;placementid=0&amp;tp=0">
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
                    </tr></tbody></table></div><div id="wb_element_instance1562" class="wb_element"><div style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 1px solid #303030;"></div></div><div id="wb_element_instance1563" class="wb_element"><!-- Tags Code For AdPrimary.Com -->
<script type="text/javascript">
document.write('<s'+'cript src="http://c.pioneeringad.com/?adid=8905&adtp=banner&adsz=1&adrd='+new Date().getTime()+'" type="text/javascript">'+'cript>');
</script><!-- End Tags AdPrimary.Com --></div><div id="wb_element_instance1565" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1">SECURITY </h1>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">Things to be considered before configuring apache server.</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<h2 class="wb-stl-heading2">1.Hiding Apache version and OS information:</h2>

<p> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">Apache displays its version and the name of the operating system in errors. A hacker can use this information to launch an attack. so server administration must hide the server signature. This can be with following command</p>

<p class="wb-stl-normal"><span style="color:#f10631;">vim /etc/httpd/conf/httpd.conf</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">&gt;Go to the above directory</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#f10631;">ServerSignature Off</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">&gt;Off the default signature</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#f10631;">service httpd restart</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">&gt;restart the server to take effect the changes</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<h3 class="wb-stl-heading3">2.Disable Directory Listing</h3>

<p> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">If /var/www/ don’t have the index file then webserver shows the document root directory</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">This feature could be turn off for a specific directory through “options directive” available in the Apache configuration file.</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#f10631;">&lt;Directory /var/www/html&gt;</span></p>

<p class="wb-stl-normal"><span style="color:#f10631;">Options -Indexes</span></p>

<p class="wb-stl-normal"><span style="color:#f10631;">&lt;/Directory&gt;</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<h2 class="wb-stl-heading2">3.Restricting Access to files outside the root directory</h2>

<p> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">Configure the file like given below:</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#f10631;">&lt;Directory/&gt;</span></p>

<p class="wb-stl-normal"><span style="color:#f10631;">Options None</span></p>

<p class="wb-stl-normal"><span style="color:#f10631;">AllowOverride None</span></p>

<p class="wb-stl-normal"><span style="color:#f10631;">Order deny,allow</span></p>

<p class="wb-stl-normal"><span style="color:#f10631;">Deny from all</span></p>

<p class="wb-stl-normal"><span style="color:#f10631;">&lt;/Directory&gt;</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">This will not allow user to access outside the web root directory</p>

<p> </p>

<p> </p>

<p class="wb-stl-normal"> </p>

<h2 class="wb-stl-heading2">HOW TO INSERT RESTRICTION. </h2>

<p> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">To view the current iptables configuration</p>

<p class="wb-stl-normal"><span style="color:#f10631;">iptables -L</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<h3 class="wb-stl-heading3">How to block all connections from a specific IP Address.</h3>

<p> </p>

<p class="wb-stl-normal"><span style="color:#f10631;">iptables -A INPUT -s (ip address) -j DROP</span></p>

<p class="wb-stl-normal">e.g.: <span style="color:#f10631;">iptables -A INPUT -s 192.168.1.22 -j DROP</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<h3 class="wb-stl-heading3">How to block all of the IP Addresses in the 192.168.1.1/24 network range.</h3>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">Standard method: <span style="color:#f10631;">iptables -A INPUT -s 192.168.1.1/24 -j DROP</span></p>

<p class="wb-stl-normal">OR</p>

<p class="wb-stl-normal">Netmask method: <span style="color:#f10631;">iptables -A INPUT -s 192.168.1.1/255.255.255.0 -j DROP</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<h2 class="wb-stl-heading2">How to block SSH connections from any IP address.</h2>

<p class="wb-stl-normal"> </p>

<p><span style="color:#f10631;">iptables -A INPUT -p tcp --dport ssh -j DROP</span></p>

<p> </p>

<h3 class="wb-stl-heading3">How to block SSH connections from a specific IP Address.</h3>

<p> </p>

<p class="wb-stl-normal"><span style="color:#f10631;">iptables -A INPUT -p tcp --dport ssh -s 10.10.10.10 -j DROP</span></p>

<p class="wb-stl-normal">For tcp protocol use <span style="color:#f10631;">-p tcp</span></p>

<p class="wb-stl-normal">&amp; for udp protocol use <span style="color:#f10631;">-p udp</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">The changes that you make to your iptables rules will be scrapped the next time that the iptables service gets restarted unless you execute a command to save the changes</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">For Ubuntu:</p>

<p class="wb-stl-normal"><span style="color:#f10631;">sudo /sbin/iptables-save</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">Red Hat / CentOS:</p>

<p class="wb-stl-normal"><span style="color:#f10631;">/sbin/service iptables save</span></p>

<p class="wb-stl-normal">Or</p>

<p class="wb-stl-normal"><span style="color:#f10631;">/etc/init.d/iptables save</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">To clear all the currently configured rules:</p>

<p class="wb-stl-normal"><span style="color:#f10631;">iptables -F</span></p>

<p class="wb-stl-normal"> </p>
</div><div id="wb_element_instance1566" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(158);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance1566");
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
					$("#wb_element_instance1566").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 161px;">
	
<div id="wb_element_instance1564" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle">haktuts © 2014. All Rights Reserved </h4>
</div><div id="wb_element_instance1567" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
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