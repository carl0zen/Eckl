<h1>Play the Game!</h1>
<link rel="stylesheet" href="<?=_CSS_URL_?>game.css" type="text/css" media="screen" title="no title" charset="utf-8">
<script src="<?=_JS_URL_?>game.js" type="text/javascript" charset="utf-8"></script>

<?php for($x=1;$x<7;$x++):?>
<div id="petal<?php echo $x; ?>">
	<div id="comment" class="square"></div>
	<div id="article" class="square"></div>
	<div id="review" class="square"></div>
	<div id="trip" class="square"></div>
	<div id="volunteer" class="square"></div>
	<div id="project" class="square"></div>
</div>
<?php endfor;?>