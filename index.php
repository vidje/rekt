<?php
	include('inc/dbconn.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>#rekt - the last div1 team standing</title>
	<link href="css/stil.css" rel="stylesheet" type="text/css">
</head>
<body>

<div id="main">

<div class="logo"></div>
<div class="spacer"></div>
<div class="header">wars</div>
<div class="spacer"></div>
<div class="container">
	<?php
		include('inc/warsummary.php'); 
	?>
</div>
<div class="spacer"></div>
<div class="header">about</div>
<div class="spacer"></div>
<div class="container">
	From its humble beginnings in QL's iCTF to becoming a TDM powerhouse we've always managed to give y'all a reason to stay salty.
<br /><br />
	Up until recently our motto has been to start the season on a high and steamroll towards a disappointing finish due to lars not showing up for the deciding games.
	The moment DIV1 competitions got sponsored by Disney, we've become the undisputed kings of Mickey Mouse leagues.  
<br/><br/>
	Here's to many more seasons of demonic skill, impossible rails and "these fucking campers", may it be in QL, QC or Diabetical.
</div>
<div class="spacer"></div>
<div class="header">the boys</div>
<div class="spacer"></div>
<div class="container">
	The list of #rekt greats, in no particular order:<br/><br/>
	<div class="left"><ol>
	<li>ash (#vacation)</li>
	<li>xron</li>
	<li>gienon</li>
	<li>rehepapp</li>
	<li>lars</li>
	<li>spawnz</li></ol></div>
	<div class="right"><ol><li>khan</li>
	<li>vidje</li>
	<li>h8m3</li>
	<li>kodisha</li>
	<li>luke_ie</li>
	<li>batu</li>
	</ol></div>
</div>
<div class="spacer"></div>
<div class="header">extras</div>
<div class="spacer"></div>
<div class="container">
	In case you're one of those spoonfed kids who don't like
	opening demo files in game client, we've got you covered. 
	Check out our <a href="https://www.youtube.com/channel/UCkkMgl_SKOEj7QmdqDh4xvw" target="_blank">YouTube</a> 
	and make sure you SMASH THAT <a href="https://www.youtube.com/channel/UCkkMgl_SKOEj7QmdqDh4xvw?sub_confirmation=1" target="_blank">SUBSCRIBE BUTTON</a> 
	to stay up to date with everyone who we've rekt.<br/><br/>
	In addition to 1080p60 renders of pure steamrolling, 
	we're also providing you with our configs and some 
	#rekt emojis you can use with your discord/twitch/whatever.<br/><br/>
	
	<div class="left">HoQ Spring 2017 demos:
		<div class="dirlist"><ol>
			<?php
				include('inc/demolist.php'); 
			?>
		</ol></div>
	</div>
	<div class="right">Configs:<br/>
		<div class="dirlist">
		<ol>
			<?php
				include('inc/cfglist.php'); 
			?>
		</ol>
		</div>
	</div>
</div>
<div class="spacer"></div>
<div class="header">(c) rekt 2017</div>
<div class="spacer"></div>
<div class="container dsclmr">
	PS! Why are we so cocky? So failure stings more.
</div>
<div class="fcontainer">

</div>
<!-- //end main -->
</div>

</body>
</html>
