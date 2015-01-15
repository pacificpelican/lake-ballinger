changelog for Lake Ballinger theme http://djmcloud.danieljmckeown.com/lakeballinger/

new for version 0.3.0
Jan. 14, 2015
-widgetized 'sidebar' now shows up on right side of content on larger screens,
	still sits below content on smaller ones using Foundation's grid system
-a few small CSS tweaks to allow for more padding on content without excessive
	padding on nav element

new for version 0.3.1
Jan. 14, 2015
-single posts now have widget sidebar too

new for version 0.4.0
Jan. 14, 2015
-footer redesign: uses Foundation to put WordPress credit on 1 line, then theme credit
-removed unnecessary "Posts Navigation" from template tags

new for version 0.4.1
Jan. 14, 2015
-date improvements: the new, simpler functions doesn't sometimes output two

new for version 0.4.2
Jan. 14, 2015
-updated screenshot

new for version 0.4.3
Jan. 14, 2015
-links in footer.php and header.php that reference template directory use newer escapier functions now

new for version 0.4.4
Jan. 15, 2015
-layout fix: div ID 'page' was below row where now it is above (and contains it):
	this fixes as layout problem where sites would show L-R arrows even on sites
	that appeared to not have any content overflowing that way: a space was sitting
	to the right of the nav bar on medium size screens

new for version 0.4.5
Jan. 15, 2015
-layout fix for pages: the previous fix revealed how behind the pages template had fallen from the inedex;
	now pages should act as in 0.4.3 but through an intentional design;
	NO SIDEBARS on pages now