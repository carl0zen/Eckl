<?php include_once(_ROOT_URL_"/include/idiomas/"._LANG_."/gen.php");
	
function find_url($text){
	$reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
	
	// The Text you want to filter for urls
	//$text = "The text you want to filter goes here. http://google.com";
	
	// Check if there is a url in the text
	if(preg_match($reg_exUrl, $text, $url)) {
			   // make the urls hyper links
		   $t = preg_replace($reg_exUrl, "<a class=\"oembed\" target=\"_blank\"  href=\"".$url[0]."\">".$url[0]."</a> ", $text);
		   return $t;
	
	} else {
	
		   // if no urls in the text just return the text
		   return false;
	
	}

}



function get_youtube_videos($string) {

    $ids = array();
	$x= array();
	$t="";
    // find all urls
    preg_match_all('/(http|https)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/', $string, $links);

    foreach ($links[0] as $link) {
        if (preg_match('~youtube\.com~', $link)) {
            if (preg_match('/[^=]+=([^?]+)/', $link, $id)) {
				$x[0]="youtube";
				$x[1]=$id[1];
				$x[3]=$link;
                $ids[]=$x;
            }
        }
        if (preg_match('~vimeo\.com~', $link)) {
			preg_match('/vimeo\.com\/([0-9]{1,10})/', $link, $matches);
			//if ($matches){
				$x[0]="vimeo";
				$x[1]=$matches[1];
				$x[3]=$link;
                $ids[]=$x;
         //   }
        }
    }

		foreach ($ids as $id) {
			if($id[0]=="youtube"){
				$t.='<div class="media"><iframe class="youtube-player" type="text/html" width="320" height="240" src="http://www.youtube.com/embed/'.$id[1].'?autoplay=0&rel=0" frameborder="0"></iframe></div>';
			}
			if($id[0]=="vimeo"){
				$t.='<div class="media"><iframe src="http://player.vimeo.com/video/'.$id[1].'?title=0&amp;byline=0&amp;portrait=0" width="320" height="240" frameborder="0"></iframe></div>';
			}
		}
    return $t;
}
function members_get_url_profile_picture($user_id=0,$size=0){
	$pic="";
	global $GEN_PATH_MEMBERS_PICTURES, $GEN_URL_MEMBERS_PICTURES, $GEN_USER_ID;
	if($user_id==0)$user_id=$GEN_USER_ID;
	$user_dir=members_get_info("hash",$user_id);
	$array_profiles= array("profile.jpg","profile_mini.jpg","profile_mini2.jpg");
	if(file_exists($GEN_PATH_MEMBERS_PICTURES.$user_dir."/profile.jpg")){
		$pic=$GEN_URL_MEMBERS_PICTURES.$user_dir."/".$array_profiles[$size];
	}else{
		$pic=_ROOT_URL_."/images/avatar.png";
	}
	return $pic;
}
function stream_get_post_formatted($post_id){
	$r="";
	global $database_ecologikal, $ecologikal, $GEN_USER_ID;
	mysql_select_db($database_ecologikal, $ecologikal);
	$sql="Select * From members_stream where to_user_id=$GEN_USER_ID ";
	$rst = mysql_query($sql, $ecologikal) or die(mysql_error());
	if(mysql_num_rows($rst)){
		$row=mysql_fetch_assoc($rst);
		$r="";
	}
	return r;
}
function members_get_info($field,$user_id=0){
	$array_fields = array("usuario","nombre","apellido","settings_tracking","text_display","hash","medium_dob", "sexo","nationality", "email");
	$r="";
	global $database_ecologikal, $ecologikal, $GEN_USER_ID;
	$months=explode(",",LANG_MONTHS);
	if($user_id==0)$user_id=$GEN_USER_ID;
	if($field && in_array($field,$array_fields)){
		$field_=$field;
		if($field=="medium_dob")$field_="day(fecha_nacimiento) as dob_d, month(fecha_nacimiento) as dob_m, year(fecha_nacimiento) as dob_y";
		mysql_select_db($database_ecologikal, $ecologikal);
		$sql="Select $field_ From miembros Where user_id='$user_id'";
		$rst = mysql_query($sql, $ecologikal) or die(mysql_error());
		if(mysql_num_rows($rst)>0){
			$row=mysql_fetch_row($rst);
			$r=$row[0];
			if($field=="medium_dob")$r=$row[0] ." " . $months[($row[1]-1)] . " " . $row[2];
		}
	}
	return $r;
}
function members_picture($field,$user_id=0){
	$array_fields = array("member_picture_id");
	$r="";
	global $database_ecologikal, $ecologikal, $GEN_USER_ID;
	if($user_id==0)$user_id=$GEN_USER_ID;
	if($field && in_array($field,$array_fields)){
		mysql_select_db($database_ecologikal, $ecologikal);
		$sql="SELECT member_picture_id From members_pictures Where user_id='$user_id' ORDER BY member_picture_id DESC Limit 1";
		$rst = mysql_query($sql, $ecologikal) or die(mysql_error());
		if(mysql_num_rows($rst)>0){
			$row=mysql_fetch_row($rst);
			$r=$row[0];
		}
	}
	return $r;
}
function member_insert_picture($picture_hash,$desc){

		global $database_ecologikal, $ecologikal, $GEN_USER_ID;

		mysql_select_db($database_ecologikal, $ecologikal);
		$sql=sprintf("Insert Into members_pictures (date, user_id, hash, description ) Values(now(), $GEN_USER_ID, '$picture_hash',%s);",GetSQLValueString($desc,'text'));
		$rst = mysql_query($sql, $ecologikal);
		if (mysql_errno()){
			return false;
		}else{
			return true;
		}
}
function member_delete_picture($picture_hash){

		global $database_ecologikal, $ecologikal, $GEN_USER_ID;

		mysql_select_db($database_ecologikal, $ecologikal);
		$sql="Delete From members_pictures Where user_id=$GEN_USER_ID And hash='$picture_hash';";
		$rst = mysql_query($sql, $ecologikal);
		if (mysql_errno()){
			return false;
		}else{
			return true;
		}
}
?>