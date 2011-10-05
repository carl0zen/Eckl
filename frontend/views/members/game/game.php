<?php require_once($_SERVER['DOCUMENT_ROOT']."/github/Eckl/_config/bootstrap.php"); ?>
<game>
<h1>Play the Game! <?php if(!is_logged_in()){ ?><button>Join Now<br/><span id="free">(it's free)</span></button> <?php } ?></h1>
<link rel="stylesheet" href="<?=_CSS_URL_?>game.css" type="text/css" media="screen" title="no title" charset="utf-8">
<script src="<?=_JS_URL_?>game.js" type="text/javascript" charset="utf-8"></script>
<div id="titles">
	<div class="title">Comment</div>
	<div class="title">Article</div>
	<div class="title">Review</div>
	<div class="title">Event</div>
	<div class="title">EcoTrip</div>
	<div class="title">Volunteer</div>
	<div class="title">Project</div>
	
</div>

<?php for($x=1;$x<7;$x++):?>
<div id="petal<?php echo $x; ?>">
	<div id="petalname"><?php echo $petal_name[$x];?></div>
	<div id="comment" class="square">
		<a href="#">Flx Clld</a> wrote:
		"This is just a test comment"
		<span class="karma">100</span>
		<span class="points">200</span>
		<div class="squareinfo">
			<span id="points">+10</span>
			<a href="#">Write a comment</a>
		</div>
	</div>
	<div id="article" class="square">
		<div class="squareinfo"></div>
	</div>
	<div id="review" class="square">
		<div class="squareinfo"></div>
	</div>
	<div id="EcoTrip" class="square">
		<div class="squareinfo"></div>
	</div>
	<div id="event" class="square">
		<div class="squareinfo"></div>
	</div>
	<div id="volunteer" class="square">
		<div class="squareinfo"></div>
	</div>
	<div id="project" class="square">
		<div class="squareinfo"></div>
	</div>
</div>
<?php endfor;?>
</game>