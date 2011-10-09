<?php
 	$view = 'member'; // This is for determining which scripts and css are going to be loaded
	include("../../../header.php");
	require_once(_VIEWS_PATH_."members/stream/members_stream_javascript.php");
?>
	
	<div id="wrapper">
		<?php include ("sidebar_left.php") ?>
		<div id= "overlay"></div><!-- overlay-->
		<div id="modalbox">
			<div id="close"></div>
			
		
		</div><!-- modalbox -->

		<content>
			  <?php if($goto)include($array_goto[$goto][0].$array_goto[$goto][2]);?>
        </content>
 		<?php include("sidebar_right.php"); ?>
 	</div><!--Wrapper-->
<?php include("../../../footer.php") ?>