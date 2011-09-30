<?php require_once($_SERVER['DOCUMENT_ROOT']."/github/Eckl/_config/bootstrap.php"); ?>
<!DOCTYPE html> 
<html> 
    <head> 
        <meta charset="utf-8" /> 
        <title>Ecologikal</title> 

		<?php if (function_exists('load_css_files')){ load_css_files($view);} ?>
		
		<?php if (function_exists('load_js_scripts')){ load_js_scripts($view);} ?>


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
								<?php if (is_logged_in()){?>
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
										<li><a  href="<?=_VIEWS_URL_?>members/member_profile.php">Profile</a></li>
										<li><a  href="#">Settings</a></li>
										<li><a  href="#">Log out</a></li>
									</ul>
								</div>
								<?php }else{?>
									<div id="login" class="icon tiptip" title="Login"></div>
									<div id="register" class="icon tiptip" title="Register"></div>
								<?php }?>
							</account>
							
							<div class="icon" id="search_btn"></div>
							<input id="search" type="text">

						</toolbar>
						<logo onClick="load_html('content', '<?php echo $array_goto["profile"][1].$array_goto["profile"][2];?>?no_page='+current_gallery_page+'&user_id=<?php echo $user_id;?>')"></logo>
			</header>
			

