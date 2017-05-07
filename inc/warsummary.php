<?php 
	$statement = $db->prepare("SELECT league, enemy, score, matchid FROM wars ORDER BY date DESC LIMIT 4");
	$statement->execute();
	$array = $statement->fetchAll();
?>

<div class="left">
	<?php
		$id = 0;
		
		foreach ($array as $arr) {
			$league = $array[$id]['league'];
			$score = $array[$id]['score'];
			$enemy = $array[$id]['enemy'];
			echo $league.".........: ".$score." VS ".$enemy."<br/>";
			$id++;
		}
	?>

</div>

<div class="right">
	<?php
		$id = 0;
		foreach ($array as $arr2) {
			$matchid = $array[$id]['matchid'];
			if(empty($matchid)) {
				echo "<br/>";
			}
			else {
				echo "<a href='war.php?id=".$matchid."'>MATCH DETAILS</a><br/>";
			}
			$id++;

		}
		echo "<a href='history.php'>...</a>";
	?>
</div>
