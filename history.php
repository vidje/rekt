<? 
	include('db/dbconn.php'); 
	$statement = $db->prepare("SELECT * FROM wars ORDER BY date DESC");	
	$statement->execute();
	$array = $statement->fetchAll();
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
<div class="header">war history</div>
<div class="spacer"></div>
<div class="container">
The wars are listed from newest to oldest.
If the match details link isn't next to the war then this is the only info that survived.
<br/><br/>
<?
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
			echo "<span class='wleft'>".$date." - ".$league." - ".$season." - ".$score." VS ".$enemy."</span>";
			echo "<span class='wright'></span>";
		}
		else {
			echo "<span class='wleft'>".$date." - ".$league." - ".$season." - ".$score." VS ".$enemy."</span>";
			echo "<span class='wright'>".
			"<a href='war.php?id=".$mid."'>MORE</a></span>";
		}
		$id++;
	}
?>

</div>
<div class="container">
<?
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
