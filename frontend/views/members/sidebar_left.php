<script>
	$(document).ready(function(e){
		$('#flower_btn').click(function(e){
				$('menucontents div.container:not(#flowercontainer)').fadeOut(100);
				$('#flowercontainer').slideDown(200);
		});
		$('#profile_btn').click(function(e){
				$('menucontents div.container:not(#profilecontainer)').fadeOut(100);
				$('#profilecontainer').slideDown(200);	
		});
		$('#stream_btn').click(function(e){
				$('menucontents div.container:not(#streamcontainer)').fadeOut(100);
				$('#streamcontainer').slideDown(200);
		});
		$('#gallery_btn').click(function(e){
				$('menucontents div.container:not(#gallerycontainer)').fadeOut(100);
				$('#gallerycontainer').slideDown(200);
		});
		$('#game_btn').click(function(e){
				$('menucontents div.container:not(#gamecontainer)').fadeOut(100);
				$('#gamecontainer').slideDown(200);
		});
		$('#travels_btn').click(function(e){
				$('menucontents div.container:not(#travelscontainer)').fadeOut(100);
				$('#travelscontainer').slideDown(200);
		});
		$('#projects_btn').click(function(e){
				$('menucontents div.container:not(#projectscontainer)').fadeOut(100);
				$('#projectscontainer').slideDown(200);
		});
		$('#events_btn').click(function(e){
				$('menucontents div.container:not(#eventscontainer)').fadeOut(100);
				$('#eventscontainer').slideDown(200);
		});
		$(window).resize(function(e){
			originalHeight = $('#scroll-pane').height();
			height = $(window).height() -50;
			console.log(height);
		//	$('#scroll-pane').jScrollPane();
			$('#scroll-pane').css({
				'max-height': height -20,
			});
		});
		//SELECT ELEMENTS
		$("select").change(function () {
		          $("option:selected").each(function () {
						if($(this).hasClass('post')) 	{}
						if($(this).hasClass('review')) 	{$('#review').css('display','block');}
						if($(this).hasClass('article')) {$('#article').css('display','block');}
						});
		        })
		        .trigger('change');
		
	});
</script>
<leftbar>
	
	<div id="mainmenu">
		<div id="profile_btn" class="icon pointer tiptip" title="My Profile"></div>
		<div id="flower_btn" class="icon pointer tiptip" title="My Skills" onClick="load_html('content', '<?php echo $array_goto["flower"][1].$array_goto["flower"][2];?>')"></div>
		<div id="stream_btn" class="icon pointer tiptip" title="My Stream" onClick="load_html('content', '<?php echo $array_goto["stream"][1].$array_goto["stream"][2];?>')"></div>
		<div id="gallery_btn" class="icon pointer tiptip" title="My Pictures" onClick="load_html('content', '<?php echo $array_goto["gallery"][1].$array_goto["gallery"][2];?>?no_page='+current_gallery_page+'&user_id=<?php echo $user_id;?>')"></div>
		<div id="game_btn" class="icon pointer tiptip" title="The Game"></div>
		<div id="travels_btn" class="icon pointer tiptip" title="My Trips"></div>
		<div id="projects_btn" class="icon pointer tiptip" title="My Projecs"></div>
		<div id="events_btn" class="icon pointer tiptip" title="My Events"></div>
	</div>
	<menucontents>
		<div id="flowercontainer" class="container">
			<div id="title">My Skills</div>
			<div id="flower"></div>
	
			
		</div>
		<div id="profilecontainer" class="container">
			<name><?php echo members_get_info("nombre",$user_id)?> <?php echo members_get_info("apellido",$user_id)?> </name>
			<div id="scroll-pane">
				
				<profilepic>
					<?php
					$user=isset($_GET['user_id']) ? $_GET['user_id'] : $GEN_USER_ID;
					$user_dir=members_get_info("hash",$user);
					if(file_exists($GEN_PATH_MEMBERS_PICTURES.$user_dir."/profile.jpg")){?>
						<img src="<?php echo $GEN_URL_MEMBERS_PICTURES.$user_dir."/profile.jpg";?>">
					<?php }else{?>
						<img src="<?php echo _ROOT_URL_."/images/avatar.png";?>">
					<?php }?>
				</profilepic>
				<fields>
					<div id = "email"><div class="icon"></div><?php echo members_get_info("email",$user_id)?></div>
					<div id = "telephone"><div class="icon"></div><?php echo members_get_info("telefono",$user_id)?></div>
					<div id = "sex"><div class="icon"></div><?php echo get_word_translation("MEMBER_GENDER",members_get_info("sexo",$user_id))?></div>
					<div id = "dob"><div class="icon"></div><?php echo members_get_info("medium_dob",$user_id)?></div>
					<div id = "nationality"><div class="icon"></div><?php echo members_get_info("nationality",$user_id)?></div>
					<div id = "languages"><div class="icon"></div>
						<span id = "language">
							<span id ="langname">Spanish<level> (Expert)</level></span>
						</span>
					</div>
				</fields>
			</div><!-- Scroll Pane -->
		</div>
		<div id="streamcontainer" class="container">
			<div id="title">Share Knowledge</div>
			<div id="containercontent">
				<textarea name="stream_comment" id="stream_comment"></textarea>
				<div id="filter">
					<select id="typeofcont">
						<option>- Type of Contribution</option>
						<option class="comment">Comment</option>
						<option class="post">Post</option>
						<option class="article">Article</option>
						<option class="review">Review</option>
					</select>
				</div>
				<div class="subfilter" id="review">
					<p>Sustainable Center</p><input type="text" value="sustcent_id"/>
				</div>
				<div class="subfilter" id="article">
					<input type="text" value="article_title"/>
				</div>
				<div class="subfilter" id="post">
					<input type="text" value="post_title"/>
				</div>
				
				<h3>Select a Petal to post</h3>
				<div id="postcomment">
				 	<div id="buttons">
				 	<div class="btn_container tiptip" title="Land & Nature"><input type="button" onclick="javascript:stream_post(4);" name="post" id="ln_share_button" value="" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only"/></div>
				 	<div class="btn_container tiptip" title="Building"><input type="button" onclick="javascript:stream_post(1);" name="post" id="bc_share_button" value="" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only"/></div>
				 	<div class="btn_container tiptip" title="Community Government"><input type="button" onclick="javascript:stream_post(2);" name="post" id="cg_share_button" value="" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only"/></div>
					<div class="btn_container tiptip" title="Finance & Economics"><input type="button" onclick="javascript:stream_post(3);" name="post" id="fe_share_button" value="" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only"/></div>
					<div class="btn_container tiptip" title="Culture & Education"><input type="button" onclick="javascript:stream_post(5);" name="post" id="ce_share_button" value="" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only"/></div>
					<div class="btn_container tiptip" title="Tools & Technology"><input type="button" onclick="javascript:stream_post(6);" name="post" id="tt_share_button" value="" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only"/></div>
					<div class="btn_container tiptip" title="Health & Spirituality"><input type="button" onclick="javascript:stream_post(7);" name="post" id="hs_share_button" value="" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only"/></div>
				 </div><!--Buttons-->
			 	</div><!--Post Comment-->
				<h3>Comment <span class="points">+10 ecopoints</span></h3>
				<p>You can share a useful short comment to earn
				
				</p>
				<h3>Post <span class="points">+20 ecopoints</span></h3>
				<p>You can write a post about interesting stuff to earn
				
				</p>
				<h3>Article <span class="points">+40 ecopoints</span></h3>
				<p>You can write an insightful article to expose your opinion to earn
				
				</p>
				<h3>Review <span class="points">+80 ecopoints</span></h3>
				<p>You can write an indepth review of one of your travels to earn 
				
				</p>
			</div><!-- Container Content-->
		</div><!--Stream Container -->
		<div id="gallerycontainer" class="container">
			<div id="title">My Pictures</div>
			<?php if($GEN_USER_ID && $GEN_USER_ID==$user_id){?>
			<div id="loadpics" onClick="javascript:$(location).attr('href','<?php echo _ROOT_URL_;?>/profile.php?goto=image-uploader');">Subir Imagenes</div>
			<?php } ?>
		</div>
		<div id="gamecontainer" class="container">
			<div id="title">My Game</div>
			<div id="containercontent">
				<div id="gamediv">
					<div id="reactionpoints">100</div>
					<div id="actionpoints">100</div>
					<div id="bc_share_button" class="petalicon"></div><h3>Building</h3>
					<img src="http://ecologikal.sytes.net/ecologikal/images/game/land_nature/thumbs/1.png">
					<span id="levelname">Urban Victim</span>
				</div>
			</div>
		</div>
		<div id="travelscontainer" class="container">
			<div id="title">My Trips</div>
		</div>
		<div id="projectscontainer" class="container">
			<div id="title">My Projects</div>
		</div>
		<div id="eventscontainer" class="container">
			<div id="title">My Events</div>
		</div>
	</menucontents>
	
</leftbar>