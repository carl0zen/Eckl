<?php include_once($_SERVER['DOCUMENT_ROOT']."/github/Eckl/_config/config.php");

$user_id=isset($_GET['user_id']) ? $_GET['user_id'] : $GEN_USER_ID;
$goto=isset($_GET['goto']) ? $_GET['goto'] : "stream";

$array_goto["gallery"]=array($GEN_PATH_SERVIDOR,$GEN_URL_SERVIDOR,"/include/members/gallery/gallery.php");;
$array_goto["stream"]=array($GEN_PATH_SERVIDOR,$GEN_URL_SERVIDOR,"/include/members/stream/members_stream.php");;
$array_goto["profile"]=array($GEN_PATH_SERVIDOR,$GEN_URL_SERVIDOR,"/include/members/profile.php");;
$array_goto["image-uploader"]=array($GEN_PATH_SERVIDOR,$GEN_URL_SERVIDOR,"/include/members/image_uploader/index.php");;
$array_goto["sc-image-uploader"]=array($GEN_PATH_SERVIDOR,$GEN_URL_SERVIDOR,"/include/centros/image_uploader/index.php");;
$array_goto["sc-gallery"]=array($GEN_PATH_SERVIDOR,$GEN_URL_SERVIDOR,"/include/centros/gallery/gallery.php");;
$array_goto["flower"]=array($GEN_PATH_SERVIDOR,$GEN_URL_SERVIDOR,"/flower.php");;

?>
<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="utf-8" /> 
        <title>Ecologikal</title> 
        <link rel="stylesheet" href="<?php echo $GEN_URL_SERVIDOR?>/_frontend/css/global.css" media="screen" />
		<link rel="stylesheet" href="<?php echo $GEN_URL_SERVIDOR?>/_frontend/css/stream.css" type="text/css" />        
        <link rel="stylesheet" href="<?php echo $GEN_URL_SERVIDOR?>/_plugins/jquery/css/jquery.ui.theme.css"  type="text/css" />
        <link rel="stylesheet" href="<?php echo $GEN_URL_SERVIDOR?>/_plugins/jquery/css/jquery.ui.all.css"  type="text/css" />

        <link rel="stylesheet" href="<?php echo $GEN_URL_SERVIDOR;?>/js/juery-File-Upload/jquery.fileupload-ui.css" />

        <script src="NEW/raphael.js"></script>

		<script src="<?php echo $GEN_URL_SERVIDOR;?>/js/jquery/jquery-1.6.1.min.js"></script>
        <script src="<?php echo $GEN_URL_SERVIDOR?>/jquery-ui-1.8.14.custom/development-bundle/external/jquery.bgiframe-2.1.2.js"></script>
        <script src="<?php echo $GEN_URL_SERVIDOR?>/jquery-ui-1.8.14.custom/development-bundle/ui/jquery.ui.core.js"></script>
        <script src="<?php echo $GEN_URL_SERVIDOR?>/jquery-ui-1.8.14.custom/development-bundle/ui/jquery.ui.widget.js"></script>
        <script src="<?php echo $GEN_URL_SERVIDOR?>/jquery-ui-1.8.14.custom/development-bundle/ui/jquery.ui.mouse.js"></script>
        <script src="<?php echo $GEN_URL_SERVIDOR?>/jquery-ui-1.8.14.custom/development-bundle/ui/jquery.ui.button.js"></script>
        <script src="<?php echo $GEN_URL_SERVIDOR?>/jquery-ui-1.8.14.custom/development-bundle/ui/jquery.ui.draggable.js"></script>
        <script src="<?php echo $GEN_URL_SERVIDOR?>/jquery-ui-1.8.14.custom/development-bundle/ui/jquery.ui.position.js"></script>
        <script src="<?php echo $GEN_URL_SERVIDOR?>/jquery-ui-1.8.14.custom/development-bundle/ui/jquery.ui.resizable.js"></script>
        <script src="<?php echo $GEN_URL_SERVIDOR?>/jquery-ui-1.8.14.custom/development-bundle/ui/jquery.ui.dialog.js"></script>
        <script src="<?php echo $GEN_URL_SERVIDOR?>/jquery-ui-1.8.14.custom/development-bundle/ui/jquery.effects.core.js"></script>
        <script src="<?php echo $GEN_URL_SERVIDOR?>/jquery-ui-1.8.14.custom/development-bundle/ui/jquery.ui.accordion.js"></script>
        <script src="<?php echo $GEN_URL_SERVIDOR?>/jquery-ui-1.8.14.custom/development-bundle/ui/jquery.ui.button.js"></script>
        <script src="<?php echo $GEN_URL_SERVIDOR?>/jquery-ui-1.8.14.custom/development-bundle/ui/jquery.ui.autocomplete.js"></script>
        <script src="<?php echo $GEN_URL_SERVIDOR?>/jquery-ui-1.8.14.custom/development-bundle/ui/jquery.ui.selectmenu.js"></script>
        <script src="<?php echo $GEN_URL_SERVIDOR?>/jquery-ui-1.8.14.custom/development-bundle/ui/jquery.ui.slider.js"></script>

        <script src="<?php echo $GEN_URL_SERVIDOR?>/js/main.js"></script>
        <script src="<?php echo $GEN_URL_SERVIDOR?>/js/jquery.livequery.js"></script>

        <script src="<?php echo $GEN_URL_SERVIDOR;?>/jquery-ui-1.8.14.custom/js/jquery-ui-1.8.14.custom.min.js"></script>
        <script src="//ajax.aspnetcdn.com/ajax/jquery.templates/beta1/jquery.tmpl.min.js"></script>
        <script src="<?php echo $GEN_URL_SERVIDOR;?>/js/juery-File-Upload/jquery.iframe-transport.js"></script>
        <script src="<?php echo $GEN_URL_SERVIDOR;?>/js/juery-File-Upload/jquery.fileupload.js"></script>
        <script src="<?php echo $GEN_URL_SERVIDOR;?>/js/juery-File-Upload/jquery.fileupload-ui.js"></script>
        <script src="<?php echo $GEN_URL_SERVIDOR;?>/include/members/image_uploader/application.js"></script>

		<script type="text/javascript" src="js/jquery.mousewheel.js"></script> 
		<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>        
		<script src="js/jquery.tipTip.minified.js"></script>
		
		<script src="js/flower.js" type="text/javascript"></script>

        <?php include_once($GEN_PATH_SERVIDOR."/include/members/stream/members_stream_javascript.php") ?>

        <script> 
			$(document).ready(function(e){
				<?php if($goto=="image-uploader"){?>
					$("rightbar").hide();
					$("content").addClass("uploader");
				<?php }?>
				
				// INTERACTION
				// This will handle all the animations and interaction

				
				// CENTER MODALBOX
				var thickbox = $('#modalbox');
				var height = $(window).height();
				var width = $(document).width();
			    thickbox.css({
			        'left' : width/2.5 - (thickbox.width() / 2),  // half width - half element width
			    });
				$('#overlay').css('height', height);
				$('#overlay').click(function(e){
					$(this).fadeOut(100);
					$('div#modalbox').fadeOut(100);
				});
				$('#close').click(function(e){
					$('div#modalbox').fadeOut(100);
					$('#overlay').fadeOut(100);
				});
				
				//TOOLBAR ICONS
				$('.tiptip').tipTip();
				$('div.icon#account').click(function(e){
					$('div.#accountlist').toggle();
				});

				// SCROLL PANE
				
			});
        </script>
		
    </head> 
	    <body> 
			<header>
						<toolbar>
							<account>
								<div class="icon tiptip" id="account" title="My Account"></div>
								<div class="icon tiptip" id="notifications" title="Notifications">
									<nomessages>
										12
									</nomessages>
								</div>
								<div class="icon tiptip" id="messages" title="My Messages">
									<nomessages>
										12
									</nomessages>
								</div>

								<div id="accountlist">
									<ul>
										<li><a  href="<?php echo $GEN_URL_SERVIDOR?>/profile.php">Profile</a></li>
										<li><a  href="#">Settings</a></li>
										<li><a  href="#">Log out</a></li>
									</ul>
								</div>
							</account>
							
							<div class="icon" id="search_btn"></div>
							<input id="search" type="text">

						</toolbar>
						<logo onClick="load_html('content', '<?php echo $array_goto["profile"][1].$array_goto["profile"][2];?>?no_page='+current_gallery_page+'&user_id=<?php echo $user_id;?>')"></logo>
			</header>

