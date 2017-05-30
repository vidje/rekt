<?php 
	include('inc/dbconn.php'); 
	$filter = $_GET["f"];

	$fstatement = $db->prepare("SELECT DISTINCT league, season FROM wars ORDER BY league ASC");
	$fstatement->execute();
	$filters = $fstatement->fetchAll();

	if (empty($filter)) {
		$statement = $db->prepare("SELECT * FROM wars ORDER BY date DESC");
	}
	else {
		$statement = $db->prepare("SELECT * FROM wars WHERE season LIKE '$filter' ORDER BY date DESC");
	}
	$statement->execute();
	$array = $statement->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
	<title>#rekt - war history</title>
	<link href="css/stil.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">

<a href="./"><div class="logo"></div></a>
<div class="spacer"></div>
<div class="header">war history</div>
<div class="spacer"></div>
<div class="container warlist">
The wars are listed from newest to oldest.
If the match details link isn't next to the war then this is the only info that survived.
<br/><br/>

<form action="history.php?f=" name="filter">
	Show <select name="f">
	<option value="">All</option>
	<?php
	$i = 0;
	foreach($filters as $flt) {
		$fleague = $filters[$i]['league'];
		$fseason = $filters[$i]['season'];
		echo '<option value="'.$fseason.'">'.$fleague.' '.$fseason.'</option>';
		$i++;
	}
	?>
	</select>
	<input type="submit" value="Apply"></input>
	</form><br/>
<?php
	$id = 0;
	foreach($array as $arr) {
		$league = $array[$id]['league'];
		$season = $array[$id]['season'];
		$tier = $array[$id]['tier'];
		$enemy = $array[$id]['enemy'];
		$timestamp = $array[$id]['date'];
		$date = date('d-m-y', $timestamp);
		$score = $array[$id]['score'];
		$mid = $array[$id]['matchid'];
		if(empty($mid)) {
			echo "<span class='wleft htrunc'>".$date." - ".$league." - ".$season." - ".$score." VS ".$enemy."</span>";
			echo "<span class='wright'></span><br/>";
		}
		else {
			echo "<span class='wleft htrunc'>".$date." - ".$league." - ".$season." - ".$score." VS ".$enemy."</span>";
			echo "<span class='wright'>".
			"<a href='war.php?id=".$mid."'>DETAILS</a></span><br/>";
		}
		$id++;
	}
?>

</div>
<div class="container warlist">
<?php
	echo "<span class='wleft'><a href='./'>BACK</a></span>";
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
