<? 
	include('db/dbconn.php'); 
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
	<title>#rekt - the last div1 team standing</title>
	<link href="css/stil.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">

<div class="logo"></div>
<div class="spacer"></div>
<div class="header">#rekt vs <? echo $enemy; ?> (<? echo $score; ?>)</div>

<div class="spacer"></div>
<div class="container">

	<div class="left">
	LEAGUE..........: <? echo $league; ?> (<? echo $game; ?>)<br />
	SEASON..........: <? echo $season; ?><br />
	TIER............: <? echo $tier; ?><br />
	DATE PLAYED.....: <? echo $date; ?>
	<br /><br />
	</div>
	
	<div class="right">
	VODS............: <a href="<? echo $yt; ?>">yt</a><br />
	DEMOS...........: <a href="<? echo $demos; ?>">dl</a><br /> 
	</div>
	<div class="left">
	MAPS<br />

	MAP 1...........: <a href="<? echo $map1; ?>"><? echo $m1n; ?></a><br />
	MAP 2...........: <a href="<? echo $map2; ?>"><? echo $m2n; ?></a><br />
	MAP 3...........: 
	<? if($map3 !== '') {
		echo "Not needed";
	}
	else
	{
		echo '<a href="'.$map3.'">'.$m3n.'</a><br/>';
	}
	?><br /><br />
	</div>
	<div class="right"><br/><br/><br/><br/><br/></div>
	<div class="left">LINEUPS<br/>
	<span class="teamname">#rekt</span> <br/>
		<? echo str_replace(" ","<br/>",$rekt); ?>
	</div>
	<div class="right"><br/>
	<span class="teamname"><? echo $enemyln; ?> (<? echo $enemy; ?>)</span> <br />
		<? echo str_replace(" ","<br/>",$enemylu); ?>
	</div>
</div>
<div class="container">
<? echo "<span class='wleft'><a href='".$_SERVER['HTTP_REFERER']."'>BACK</a></span>"; ?>
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
