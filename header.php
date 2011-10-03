<?php require_once($_SERVER['DOCUMENT_ROOT']."/github/Eckl/_config/bootstrap.php"); ?>
<!DOCTYPE html> 
<html> 
    <head> 
        <meta charset="utf-8" /> 
        <title>Ecologikal</title> 

		<?php if (function_exists('load_css_files')){ load_css_files($view);} ?>
		
		<?php if (function_exists('load_js_scripts')){ load_js_scripts($view);$js_loaded=true;} ?>

    </head> 
	    <body> 
			<header>
						<toolbar>
							
							<account>
								<?php if (is_logged_in()){
									include(_ROOT_PATH_."login/logged_form.php");
								?>
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
								<?php }else{
										 include(_ROOT_PATH_."login/login_form.php");
										?>
									<div id="login_btn" class="icon tiptip" title="Login"></div>
									<div id="register_btn" class="icon tiptip" title="Register"></div>
								<?php }?>
							</account>
							
							<div class="icon" id="search_btn"></div>
							<input id="search" type="text">

						</toolbar>
						<logo onClick="load_html('content', '<?php echo $array_goto["profile"][1].$array_goto["profile"][2];?>?no_page='+current_gallery_page+'&user_id=<?php echo $user_id;?>')"></logo>
			</header>