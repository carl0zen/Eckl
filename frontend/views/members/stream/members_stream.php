<?php 
require_once($_SERVER['DOCUMENT_ROOT']."/ecologikal/_config/config.php");

$user_id=isset($_GET['user_id']) ? $_GET['user_id'] : "";
if($user_id=="")$user_id=$GEN_USER_ID;

?>

<script>
	$(document).ready(function(e){
       
		

		$('#content').click(function(){ 
		        mouse_is_inside=true; 
		    });
		$('#content').hover(function(){ 
		        mouse_is_inside=true; 
		    }, function(){ 
		        mouse_is_inside=false; 
		    });

		    $("body").mouseup(function(){ 
		        if(! mouse_is_inside){
					$('#stream #postcomment').slideUp(300);
					$('#stream textarea').animate({
						height:'15'
					});
					$('div#profile_info').slideDown(400);
				} 
		    });
		
		$('#stream textarea').mouseup(function(){
			$(this).animate({
				height:'45'
			});
			$('#stream #postcomment').slideDown(300);
			$('div#profile_info').slideUp(400);
		});
		
		load_html("#stream_comments",'<?php echo _HOME_URL_;?>/include/members/stream/members_stream_get_messages.php?user_id=<?php echo $user_id;?>&q='+ 1*new Date());
	});
</script>

<div id="stream">
	<h1><div id="stream_btn" class="pageicon"></div><?php echo LANGUAGE_MEMBERS_TEXT_STREAM_KNOWLEDGE;?></h1>
	<textarea name="stream_comment" id="stream_comment"></textarea>
<div id="postcomment">
	<div id="filter"><p>Filter Knowledge</p>
		<select>
			<option>Building</option>
			<option>Community Governance</option>
			<option>Finance & Economics</option>
			<option>Land & Nature</option>
			<option>Culture & Education</option>
			<option>Tools & Technology</option>
			<option>Health & Spirituality</option>
		</select>
	</div>
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

<div id="stream_comments">
    <div id="stream_comments2">
    </div><!--stream_comments2-->
</div><!--stream_comments-->
		
</div>