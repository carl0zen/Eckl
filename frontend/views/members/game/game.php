<?php require_once($_SERVER['DOCUMENT_ROOT']."/github/Eckl/_config/bootstrap.php"); 
	$view = 'game';
	load_js_scripts($view);
	load_css_files($view);
?>
<game>
<h1>Play the Game! </h1>
<link rel="stylesheet" href="<?=_CSS_URL_?>game.css" type="text/css" media="screen" title="no title" charset="utf-8">

<div id="titles">
	<div class="title">Comment</div>
	<div class="title">Article</div>
	<div class="title">Event</div>
	<div class="title">Workshop</div>
	<div class="title">EcoTrip</div>
	<div class="title">Volunteer</div>
	<div class="title">Project</div>
	
</div>


<?php for($x=1;$x<7;$x++):?>

<div id="petal<?php echo $x; ?>">
	
	<div id="bw comment" class="square">
		<img src="<?php echo _PICS_URL_."members/".members_get_info("hash",$x)."/profile.jpg"?>">
		<span class="karma">100</span>
		<span class="points">200</span>
		<div class="squareinfo">
			<span id="points">+3</span>
			<a href="#">Write a comment</a>
		</div>
	</div>
	<div id="article" class="square">
		<img src="<?php echo _PICS_URL_."members/".members_get_info("hash",$x)."/profile.jpg"?>">
		<span class="karma">100</span>
		<span class="points">200</span>
		<div class="squareinfo">
			<span id="points">+10</span>
			<a href="#">Write an article</a>
		</div>	
	</div>
	<div id="event" class="square">
		<img src="<?php echo _PICS_URL_."members/".members_get_info("hash",$x)."/profile.jpg"?>">
		<span class="karma">100</span>
		<span class="points">200</span>
		<div class="squareinfo">
			<span id="points">+7</span>
			<a href="#">Attend</a>
			<span id="points">+100</span>
			<a href="#">Create</a>
		</div>
	</div>
	<div id="workshop" class="square">
		<img src="<?php echo _PICS_URL_."members/".members_get_info("hash",$x)."/profile.jpg"?>">
		<span class="karma">100</span>
		<span class="points">200</span>
		<div class="squareinfo">
			<span id="points">+50</span>
			<a href="#">Find a Workshop</a>
		</div>
	</div>
	<div id="ecotrip" class="square">
		<img src="<?php echo _PICS_URL_."members/".members_get_info("hash",$x)."/profile.jpg"?>">
		<span class="karma">100</span>
		<span class="points">200</span>
		<div class="squareinfo">
			<span id="points">+10</span>
			<a href="#">Travel to a S.C.</a>
		</div>
	</div>
	<div id="volunteer" class="square">
		<img src="<?php echo _PICS_URL_."members/".members_get_info("hash",$x)."/profile.jpg"?>">
		<span class="karma">100</span>
		<span class="points">200</span>
		<div class="squareinfo">
			<span id="points">+10</span>
			<a href="#">Volunteer in a S.C.</a>
		</div>
	</div>
	<div id="project" class="square">
		<img src="<?php echo _PICS_URL_."members/".members_get_info("hash",$x)."/profile.jpg"?>">
		<span class="karma">100</span>
		<span class="points">200</span>
		<div class="squareinfo">
			<span id="points">+10</span>
			<a href="#">Start a Project</a>
		</div>
	</div>
</div>
<?php endfor;?>
</game>