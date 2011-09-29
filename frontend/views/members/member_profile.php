<?php include("../../../header.php");?>
	<div id="wrapper">
		<?php include ("sidebar_left.php") ?>
		<div id= "overlay"></div><!-- overlay-->
		<div id="modalbox">
			<div id="close"></div>
			<?php include("flower.php");?>
		</div><!-- modalbox -->

		<content>
			
			  <?php if($goto)include($array_goto[$goto][0].$array_goto[$goto][2]);?>
          </content>
 			<?php include("sidebar_right.php"); ?>
 		</div>
<?php include("footer.php") ?>