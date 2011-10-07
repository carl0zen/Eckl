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
			<headerindex>
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
								<search>
									<div class="icon" id="search_btn"></div>
									<input id="search" type="text">
								</search>
							</accountindex>
							

						</toolbar>
						<logoindex></logoindex>
			</headerindex>

			<index>
			<maincontent>
	
					<h1>Travel, Live, Be and Play...</h1>
					<mainquote>Travel to amazing and natural destinations. Live the Ecologikal experience while making a positive impact in the environment and your everyday life.</mainquote>
					<button class="green">JOIN US</button>
<<<<<<< HEAD
					
					<h2 class="play">Play the game</h2>
					<gamequote> With Ecologikal you can develop your skills while sharing <strong>useful</strong> info, traveling as <strong>volunteer</strong> or ecotourist to <a href="#" class="tiptip" title="Click to learn what are these?">Sustainable centers</a>. Each action adds up in <strong>ecopoints</strong>
=======
					<h2 class="kins">Kins Exchange</h2>
					<kinsquote>
						With your <strong>ecopoints</strong> you can enjoy lots of benefits that other members are willing to exchange for
					</kinsquote>
					<h2 class="play">Play the game</h2>
					<arrow1></arrow1>
					<arrow2></arrow2>
					<gamequote> With Ecologikal you can develop your skills while sharing <strong>useful</strong> info, traveling as <strong>volunteer</strong> or ecotourist to <a href="#" class="tiptip" title="Click to learn what are these?">Sustainable centers</a>. Each action adds up in <strong>ecopoints</strong>. All these while playing <strong>a real life game</strong>
>>>>>>> Testimonials added to Index
					</gamequote>
			</maincontent>
			<testimonials>
				<h2>-Testimonials-</h2>
				<testimonial>
					<picture>
						<img src="<?php echo _IMAGES_URL_.'testimonial1.png'?>"></img>
					</picture>
					<description>
						"I wanted to feel rooted again and feel my connection with nature"
						<author>Tim Schneider, Professional Artist (Germany)</author>
					</description>
				</testimonial>
				<testimonial>
					<picture>
						<img src="<?php echo _IMAGES_URL_.'testimonial2.png'?>"></img>
					</picture>
					<description>
					"I wish I had knew about ecovillages before! There is so much to learn!"
						<author>Minnie (Canada)</author>
					</description>
				</testimonial>
				<testimonial>
					<picture>
						<img src="<?php echo _IMAGES_URL_.'testimonial3.png'?>"></img>
					</picture>
					<description>
"As soon as I left home and started traveling, I realized the best place to grow and learn is out there, in nature and in community."						<author>Enrico, (Italy)</author>
					</description>
				</testimonial>
			</testimonials>
			</index>
		</div><!--Wrapper Index -->
<footerindex>
	<></>
</footerindex>
