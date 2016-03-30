<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Tim St.Clair</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css"><!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	    <![endif]-->
	<title>HTML Online Editor Sample</title>
	</head>
	<body>
	<div class="container">
		
		<h1><img alt="" src="tim & sam.png" class="img-thumbnail pull-right">Tim St.Clair</h1>
		<p>I'm a web coder living in Coffs Harbour, NSW, Australia. I started using <i>email & telnet</i> in 1989, <i>the web</i> in 1992 on the NCSA Mosiac web browser, and coding HTML in 1995. After that I got into Director, Flash, Javascript, and various other bits and bobs. I currently write web apps and do custom Moodle programming.</p>
		<h2>Projects</h2>
		<p>You can check out my github repos <a href="https://github.com/frumbert‎">here</a>.</p>
		<h2>Employment history</h2>
		<p>I've linked to my current resume <a href="tim_st_clair_resume.pdf">here</a>.</p>
		<h3>Current: Avide / Coursesuite</h3>
		<p>I currently work part time at <a href="http://etc.coursesuite.com.au/">CourseSuite</a> / <a href="http://avide.com.au/">Avide Elearning</a>, producing e-learning materials, skinning Moodle sites, crafting SCORM packages, and integrating elearning into corporate products.</p>
		<p>Some of our work includes products and development for:</p>
		<ul>
			<li><a href="http://www.avant.org.au/Risk/IQ/">Avant</a> - we have implemented over 60 courses and provided a custom themed Moodle installation with rich jQuery-based video and interactions</li>
			<li><a href="http://www.aspenmedical.com.au/">Aspen Medical</a> - skinning and integrating their Moodle and other portal sites.</li>
			<li><a href="http://www.globalskm.com/">Sinclair Knight Merz</a> - put together a learning package for their CourseMill LMS that demonstrated their various communication technologies and tools</li>
			<li><a href="http://www.cliniciansmatrix.com/">Clinicians Matrix</a> - a moodle site development featuring a custom skin, wordpress single-sign on authentication and web services, and CPD collaboration.</li>
			<li><a href="http://www.ittacademy.net.au/">International Teacher Training Academy (Australia)</a> - implementation, advice and custom design work for this Moodle-based learning provider.</li>
			<li><a href="http://etc.coursesuite.com.au/">Enterprise & Training Company Ltd</a> - Moodle-based portal with custom skin, PayPal sales integration, and customisations to environment.</li>
		</ul>
		<p>I also have created an internal webapp for rapid content authoring for Avide / CourseSuite that significantly cost-reduces the content authoring process. What used take 6 weeks now takes about 2 days. It's <i>better</i>.</p>
		<h3>Janison</h3>
		<p>I worked for over a decade at a local company known as <a href="http://janison.com.au/">Janison</a>, who produced [then] an e-learning management and authoring tool (LMS) known as <b style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent;">Toolbox</b> (later called <b style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent;">Janison LMS</b>). Janison have since [apparently] moved out of the LMS space. I parted ways as their company direction changed, preferring to work in smaller organisations without top-heavy management.</p>
		<h3>McDonagh Computers</h3>
		<p>In the late 1990's, I was a computer repair technician working for a Tamworth based organisation that sold and repaired computers. I started as the single technician in a 4 person business, and helped build it up to a 20+ staff organisation across 3 towns in the region. My skills in particular were dealing with on-site repair (out of town, often on mining sites, factories, depots, or other small businesses) without access to many spare parts, and thus I learned to improvise fixes and always left a site with a workaround where a final solution was not possible. I worked with AS400 systems, Windows NT networks, Novell Netware LAN's, Windows 3.11 networks, and even the crazy phone-cable jigs that Apple had before Ethernet solved everything. I fixed telephones, soldered power supplies for dead Amigas and Apple II's, degaussed monitors, electrocuted myself frequently, fixed laptops, recovered deleted files: if there's a tech job, I've probably done it. I left the company to work on the early days of dynamic web pages.</p>
		<h2>Music</h2>
		<p>I used to write a lot of computer music. Some of it is good, a lot of it is average to bad. Some of it is still on my BBC Micro, which is currently waiting for me to resolder its long-dry joints, if the 5.25&quot; floppies don't rust first; some of them I never converted from various Tracker formats to anything remotely modern; some of it is on Atari ST floppies in Notator format - and it's highly unlikely I'll find a working one of those ever again. Here's links to all I currently have left on file.</p>
		<ul>
		<?php
		$files = glob('mp3/*.{mp3}', GLOB_BRACE);
		foreach($files as $file) {
			echo "<li><a href='".$file."'>".basename($file,'.mp3')."</a></li>";
		}
		?>
		</ul>
		<h2>Creative writing</h2>
		<p>I used do a lot of creative writing. Much of this was done more than 25 years ago. Like the music, some of it is good, some bad. Linked to everything I could find - apologies for the web-unfriendly formats. I've linked these through Google Viewer, so you should be able to read them online.</p>
		<ul>
		<?php
		$files = glob('txt/*.{doc,rtf,pdf,txt}', GLOB_BRACE);
		foreach($files as $file) {
			echo "<li><a href='http://docs.google.com/viewer?url=http%3A%2F%2Ftimstclair.me%2F".$file."' target='_blank'>/".$file."</a></li>";
		}
		?>
		</ul>
		<h2>Poetry</h2>
		<p>The teenage writer thing - late 80's, early 90's. Some of these won poetry competitions and such. Most of them are silly. Some I still like.
		<ul>
			<?php
			$files = glob('txt/poetry/*.{doc,rtf,DOC}', GLOB_BRACE);
			foreach($files as $file) {
				echo "<li><a href='http://docs.google.com/viewer?url=http%3A%2F%2Ftimstclair.me%2F".$file."' target='_blank'>/".$file."</a></li>";
			}
			?>
		</ul>
		<h2>Game ideas</h2>
		<p>They were notes and ideas when I was entertaining the idea of joining a MMORPG programming group (back in my <a href="http://www.truevision3d.com/forums/index.php">TrueVision3D</a> days). The principal game idea was that the game would be based on crafting and exploration of world and story, rather than monster battles. Never got off the ground significantly, but I still think the idea is workable, for a different gamer market than you normally associate with massively multiplayer games.</p>
		<ul>
			<?php
			$files = glob('txt/mmo/*.{odt,txt}', GLOB_BRACE);
			foreach($files as $file) {
				echo "<li><a href='http://docs.google.com/viewer?url=http%3A%2F%2Ftimstclair.me%2F".$file."' target='_blank'>/".$file."</a></li>";
			}
			?>
		</ul>
		<h2>Travel diary</h2>
		<p>In 2004, I went to Italy. I took some notes. Evidently, I was unimpressed by Naples.</p>
		<ul>
			<?php
			$files = glob('txt/italy/*.{odt,txt,gdoc,doc,pdf,sxw}', GLOB_BRACE);
			foreach($files as $file) {
				echo "<li><a href='http://docs.google.com/viewer?url=http%3A%2F%2Ftimstclair.me%2F".$file."' target='_blank'>/".$file."</a></li>";
			}
			?>
		</ul>
		<h2>Assignments</h2>
		<p>I studied horticulture. Here's the files I could find.</p>
		<ul>
			<?php
			$files = glob('txt/tafe/*.{odt,txt,gdoc,doc,pdf}', GLOB_BRACE);
			foreach($files as $file) {
				echo "<li><a href='http://docs.google.com/viewer?url=http%3A%2F%2Ftimstclair.me%2F".$file."' target='_blank'>/".$file."</a></li>";
			}
			?>
		</ul>
		<h2>Other random files</h2>
		<p>I've carried these files in my documents folder for years. Often surprised at the things I jot down.</p>
		<ul>
			<?php
			$files = glob('txt/notes/*.{odt,txt,gdoc,doc,pdf,rtf,sxw}', GLOB_BRACE);
			foreach($files as $file) {
				echo "<li><a href='http://docs.google.com/viewer?url=http%3A%2F%2Ftimstclair.me%2F".$file."' target='_blank'>/".$file."</a></li>";
			}
			?>
		</ul>		<h2>Design stuff, Old Site Versions</h2>
		<p>As I resurect old floppy disks I discover graphics or old web designs I did long ago. The first web site I made was nearly 20 years ago on a campus intranet. Here's what I can find of it.</p>
		<ul>
			<?php
			$files = glob('gfx/*.{jpg,gif,png,zip,txt}', GLOB_BRACE);
			foreach($files as $file) {
				echo "<li><a href='".$file."'>".$file."</a></li>";
			}
			?>
		</ul>
		<h2>Online presence</h2>
		<ul>
		<li>SiteExperts (dead domain)</li>
		<li><a href="https://github.com/frumbert‎">Github</a></li>
		<li><a href="https://frumbert.org‎">Frumbert.org</a></li>
		<li><a href="https://twitter.com/_frumbert‎">Twitter</a></li>
		<li><a href="http://frumbert.blogspot.com.au/">Blogspot</a></li>
		<li>Facebook</li>
		<li><a href="http://flickr.com/photos/frumbert/">Flickr</a></li>
		<li><a href="http://about.me/timstclair/">About.Me</a></li>
		<li><a href="http://au.linkedin.com/pub/tim-st-clair/1/404/86a">LinkedIn</a></li>
		</ul>
	</div>
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

    <script type="text/javascript">
         (function($) { 
                var defaults = {
                    total : 10
                };
                $.dots = function(settings) {
                    $.dots.settings = $.extend({}, defaults, settings);
                    for (i = 0; i < $.dots.settings.total; i++) $.dots.zip($.dots.create());
                    return;
                };
                $.dots.create = function(){
                    var z = $.dots.random(5),
                        c = $.dots.random(255),
                        a = Math.random();
                    return $('<div />').css({
                            width: z,
                            height: z,
                            "background-color": "rgba("+c+","+c+","+c+","+a+")",
                            position: "absolute",
                            "z-index": -1,
                            top: $.dots.random($(window).height()),
                            left: $.dots.random($(window).width())
                        }).appendTo(document.body);
                }
                $.dots.zip = function(sp) {
                    $(sp).animate({
                        top: $.dots.random($(window).height()),
                        left: $.dots.random($(window).width())
                    }, (($.dots.random(10) + 5) * 2000), function() {
                        $.dots.zip(sp)
                    });
                };
                $.dots.random = function(max) {
                    return Math.ceil(Math.random() * max) - 1;
                }
                    
            })(jQuery);
            $(document).ready(function() {
                $.dots({
                    total : 20
                });
            });
    </script>
</body>
</html>
