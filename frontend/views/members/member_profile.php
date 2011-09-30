<?php include("../../../header.php");?>
	<div id="wrapper">
		<?php include ("sidebar_left.php") ?>
		<div id= "overlay"></div><!-- overlay-->
		<div id="modalbox">
			<div id="close"></div>
			<script src="<?=_JS_URL_?>flower.js" type="text/javascript"></script>
			<?php include("flower.php");?>
		
		</div><!-- modalbox -->

		<content>
			
			  <?php if($goto)include($array_goto[$goto][0].$array_goto[$goto][2]);?>
          </content>
 			<?php include("sidebar_right.php"); ?>
 		</div>
<?php include("../../../footer.php") ?>