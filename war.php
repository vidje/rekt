<?php 
	include('inc/dbconn.php'); 
	$mid = $_GET["id"];
	$statement = $db->prepare("SELECT * FROM wars WHERE matchid = '$mid'");
	$statement->execute();
	$array = $statement->fetchAll();

	$game = $array['0']['game'];
	$league = $array['0']['league'];
	$season = $array['0']['season'];
	$tier = $array['0']['tier'];
	$enemy = $array['0']['enemy'];
	$enemyln = $array['0']['enemylong'];
	$timestamp = $array['0']['date'];
	$date = date('d-m-Y', $timestamp);
	$score = $array['0']['score'];
	$rekt = $array['0']['rektlineup'];
	$enemylu = $array['0']['enemylineup'];
	$score = $array['0']['score'];
	$map1 = $array['0']['map1'];
	$map2 = $array['0']['map2'];
	$map3 = $array['0']['map3'];
	$m1n = $array['0']['map1name'];
	$m2n = $array['0']['map2name'];
	$m3n = $array['0']['map3name'];
	$demos = $array['0']['demos'];
	$yt = $array['0']['yt'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>#rekt vs <?= $enemyln; ?></title>
	<link href="css/stil.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">

<div class="logo"></div>
<div class="spacer"></div>
<div class="header">#rekt vs <?= $enemy; ?> (<?= $score; ?>)</div>

<div class="spacer"></div>
<div class="container warlist">

	<div class="left">
	LEAGUE..........: <?= $league; ?> (<?= $game; ?>)<br />
	SEASON..........: <?= $season; ?><br />
	TIER............: <?= $tier; ?><br />
	DATE PLAYED.....: <?= $date; ?>
	<br /><br />
	</div>
	
	<div class="right">
	VODS............: <a href="<?= $yt; ?>" target="_blank">yt</a><br />
	DEMOS...........: 
	<?php if(empty($demos)) {
		echo "&nbsp;n/a <br/>";
	}
	else
	{
		echo '<a href="'.$demos.'">dl</a><br />';
	}
	?>
	</div>
	<div class="left">
	MAPS<br />

	MAP 1...........: <span class="trunc"><a href="<?= $map1; ?>" target="_blank"><?= $m1n; ?></a></span><br />
	MAP 2...........: <span class="trunc"><a href="<?= $map2; ?>" target="_blank"><?= $m2n; ?></a></span><br />
	MAP 3...........: 
	<?php if(empty($map3)) {
		echo "Not needed";
	}
	else
	{
		echo '<span class="trunc"><a href="'.$map3.'" target="_blank">'.$m3n.'</a></span><br/>';
	}
	?><br /><br />
	</div>
	<div class="right"><br/><br/><br/><br/><br/></div>
	<div class="left">LINEUPS<br/>
	<span class="teamname">#rekt</span> <br/>
		<?= str_replace(" ","<br/>",$rekt); ?>
	</div>
	<div class="right"><br/>
	<span class="teamname"><?= $enemyln; ?> (<?= $enemy; ?>)</span> <br />
		<?= str_replace(" ","<br/>",$enemylu); ?>
	</div>
</div>
<div class="container warlist">
	<?php 
		if(!empty($backlink)) {
			$backlink = $_SERVER['HTTP_REFERER'];
			echo "<span class='wleft'><a href='".$backlink."'>BACK</a></span>"; 
		}
		else {
			echo "<a href='./'>BACK</a>";
		}	
	?>
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
