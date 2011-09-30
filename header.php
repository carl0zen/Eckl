<?php require_once($_SERVER['DOCUMENT_ROOT']."/github/Eckl/_config/bootstrap.php"); ?>
<!DOCTYPE html> 
<html> 
    <head> 
        <meta charset="utf-8" /> 
        <title>Ecologikal</title> 
        <link rel="stylesheet" href="<?=_ROOT_URL_?>frontend/css/global.css" media="screen" />
		<link rel="stylesheet" href="<?=_ROOT_URL_?>frontend/css/stream.css" type="text/css" />        
        <link rel="stylesheet" href="<?=_ROOT_URL_?>_plugins/jquery/css/jquery.ui.theme.css"  type="text/css" />
        <link rel="stylesheet" href="<?=_ROOT_URL_?>_plugins/jquery/css/jquery.ui.all.css"  type="text/css" />
        <link rel="stylesheet" href="<?=_ROOT_URL_?>_plugins/jquery.fileupload/jquery.fileupload-ui.css" />
			
			
			
		
		<script src="<?=_PLUGIN_URL_?>raphael.js"></script>

<!--		<script src="<?=_PLUGIN_URL_?>jquery/jquery-1.5.1.min.js"></script> -->
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
		<script src="//ajax.aspnetcdn.com/ajax/jquery.templates/beta1/jquery.tmpl.min.js"></script>
		
		<script src="<?=_PLUGIN_URL_?>jquery/jquery-ui-1.8.14.custom.min.js"></script>
        <script src="<?=_PLUGIN_URL_?>jquery/jquery.bgiframe.min.js"></script>
        <script src="<?=_PLUGIN_URL_?>jquery/ui/minified/jquery.ui.core.min.js"></script>
        <script src="<?=_PLUGIN_URL_?>jquery/ui/minified/jquery.ui.widget.min.js"></script>
        <script src="<?=_PLUGIN_URL_?>jquery/ui/minified/jquery.ui.mouse.min.js"></script>
        <script src="<?=_PLUGIN_URL_?>jquery/ui/minified/jquery.ui.button.min.js"></script>
        <script src="<?=_PLUGIN_URL_?>jquery/ui/minified/jquery.ui.draggable.min.js"></script>
        <script src="<?=_PLUGIN_URL_?>jquery/ui/minified/jquery.ui.position.min.js"></script>
        <script src="<?=_PLUGIN_URL_?>jquery/ui/minified/jquery.ui.resizable.min.js"></script>
        <script src="<?=_PLUGIN_URL_?>jquery/ui/minified/jquery.ui.dialog.min.js"></script>
        <script src="<?=_PLUGIN_URL_?>jquery/ui/minified/jquery.effects.core.min.js"></script>
        <script src="<?=_PLUGIN_URL_?>jquery/ui/minified/jquery.ui.accordion.min.js"></script>
        <script src="<?=_PLUGIN_URL_?>jquery/ui/minified/jquery.ui.button.min.js"></script>
        <script src="<?=_PLUGIN_URL_?>jquery/ui/minified/jquery.ui.autocomplete.min.js"></script>
        <script src="<?=_PLUGIN_URL_?>jquery/ui/jquery.ui.selectmenu.js"></script>
        <script src="<?=_PLUGIN_URL_?>jquery/ui/minified/jquery.ui.slider.min.js"></script>
        
        <script src="<?=_PLUGIN_URL_?>jquery.livequery/jquery.livequery.js"></script>
        <script src="<?=_PLUGIN_URL_?>jquery.fileupload/jquery.iframe-transport.js"></script>
        <script src="<?=_PLUGIN_URL_?>jquery.fileupload/jquery.fileupload.js"></script>
        <script src="<?=_PLUGIN_URL_?>jquery.fileupload/jquery.fileupload-ui.js"></script>
        <script src="<?=_VIEWS_URL_?>members/image_uploader/application.js"></script>
		
        
		<script src="<?=_PLUGIN_URL_?>jquery.mousewheel.js"></script> 
		<script src="<?=_PLUGIN_URL_?>jquery.scrollpane/jquery.jscrollpane.min.js"></script>        
		<script src="<?=_PLUGIN_URL_?>jquery.tipTip/jquery.tipTip.minified.js"></script>
		
		
		
		
		<script src="<?=_JS_URL_?>main.js"></script>
		<script src="<?=_JS_URL_?>flower.js"></script>
		
		
        <?php include_once(_VIEWS_PATH_."members/stream/members_stream_javascript.php") ?>

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
										<li><a  href="<?=_VIEWS_URL ?>members/member_profile.php">Profile</a></li>
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
			

