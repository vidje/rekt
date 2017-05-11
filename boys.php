<?php 
	include('inc/dbconn.php'); 
  $pid = $_GET["id"];
	$egg = "freeAsh";

	$statement = $db->prepare("SELECT * FROM boys WHERE nick = '$pid'");	
	$statement->execute();
	$array = $statement->fetchAll();

  $nick = $array['0']['nick'];
  $name = $array['0']['realname'];
  $dob = $array['0']['dob'];
  //calc age
  $dob = new DateTime($dob);
  $today = new DateTime('today');
  $age = $dob->diff($today)->y;
  $pic = $array['0']['pic'];
  $bio = $array['0']['bio'];
  $cfg = $array['0']['config'];
  $hw = $array['0']['hardware'];
  $fb = $array['0']['fb'];
  $vk = $array['0']['vk'];
  $yt = $array['0']['yt'];
  $ttv = $array['0']['twitch'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>#rekt <?= $nick; ?></title>
	<link href="css/stil.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/fontello.css" type="text/css">
</head>
<body>
<div id="main">

<div class="logo"></div>
<div class="spacer"></div>
<div class="header">#rekt <?= $nick; ?></div>
<div class="spacer"></div>
<div class="container">
  <span class="wleft">NAME............: <?= $name; ?></span>
  <span class="wright"><img src="<?= $pic ?>" class="ppic"/></span><br/>
  <span class="wleft">AGE.............: <?= $age; ?></span><br/>
  <span class="wleft warlist">CONFIG..........: <a href="<?= $cfg; ?>">dl</a></span>
<br/><br/>
	<?php
		if ($pid == $egg) {
			echo "EASTER EGG UNLOCKED IN 5 SECONDS!!!";
			header("refresh:5;url=memory/");
	}
	
		if(!empty($bio)) {
			echo "About:<br/>".$bio."<br/><br/>";
		}
		if(!empty($hw)) {
			echo "Hardware:<br/>".$hw."<br/><br/>";
		}
	?>
	<div class="social">
		<?php
			if(!empty($fb)) {
				echo '<a href="https://www.facebook.com/'.$fb.'" target="_blank"><i class="demo-icon icon-facebook"></i></a> ';
			}
			if(!empty($vk)) {
				echo '<a href="https://www.vk.com/'.$vk.'" target="_blank"><i class="demo-icon icon-vkontakte"></i></a> ';
			}
			if(!empty($yt)) {
				echo '<a href="https://www.youtube.com/channel/'.$yt.'" target="_blank"><i class="demo-icon icon-youtube"></i></a> ';
			}
			if(!empty($ttv)) {
				echo '<a href="https://www.twitch.tv/'.$ttv.'" target="_blank"><i class="demo-icon icon-twitch"></i></a> ';
			}
		?>
	</div>
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
