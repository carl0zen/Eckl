<?php require_once($_SERVER['DOCUMENT_ROOT']."/github/Eckl/_config/bootstrap.php"); ?>
<!DOCTYPE html> 
<html> 
    <head> 
        <meta charset="utf-8" /> 
        <title>Ecologikal</title> 
		
		<?php if (function_exists('load_css_files')){ $view= "index";load_css_files($view);} ?>
		<?php if (function_exists('load_js_scripts')){ load_js_scripts($view);$js_loaded=true;} ?>

    </head> 
	    <body>
		<div id="wrapperindex">
			<header>
						<toolbar>
							
							<accountindex>
								<?php if (is_logged_in()){?>
								<div class="icon tiptip" id="account" title="My Account"></div>
								<div class="icon tiptip" id="notifications" title="Notifications">
									<nomessages>
										18
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
										<li><a  href="?command=logout">Log out</a></li>
									</ul>
								</div>
								<?php }else{
										 include(_ROOT_PATH_."login/login_form.php");
										?>
									<div id="login_btn" class="icon tiptip" title="Login"></div>

								<?php }?>
							</accountindex>
							<search>
								<div class="icon" id="search_btn"></div>
								<input id="search" type="text">
							</search>

						</toolbar>
						<logoindex></logoindex>
			</header>

			<index>
	
					<h1>Travel, Live, Be and Play...</h1>
					<mainquote>Travel to amazing and natural destinations. Live the Ecologikal experience while making a positive impact in the environment and your everyday life.</mainquote>
					<button class="green">JOIN US</button>
					
					<h2 class="play">Play the game</h2>
					<gamequote> With Ecologikal you can develop your skills while sharing <strong>useful</strong> info, traveling as <strong>volunteer</strong> or ecotourist to <a href="#" class="tiptip" title="Click to learn what are these?">Sustainable centers</a>. Each action adds up in <strong>ecopoints</strong>
					</gamequote>

			</index>
		</div><!--Wrapper Index -->
<?php include("footer.php") ?>