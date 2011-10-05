<?php


function time_ago($fromTime, $toTime = 0, $showLessThanAMinute = false) {
    $distanceInSeconds = round(abs($toTime - $fromTime));
    $distanceInMinutes = round($distanceInSeconds / 60);
       
        if ( $distanceInMinutes <= 1 ) {
            if ( !$showLessThanAMinute ) {
                return ($distanceInMinutes == 0) ? 'less than a minute' : '1 minute';
            } else {
                if ( $distanceInSeconds < 5 ) {
                    return 'less than 5 seconds';
                }
                if ( $distanceInSeconds < 10 ) {
                    return 'less than 10 seconds';
                }
                if ( $distanceInSeconds < 20 ) {
                    return 'less than 20 seconds';
                }
                if ( $distanceInSeconds < 40 ) {
                    return 'about half a minute';
                }
                if ( $distanceInSeconds < 60 ) {
                    return 'less than a minute';
                }
               
                return '1 minute';
            }
        }
        if ( $distanceInMinutes < 45 ) {
            return $distanceInMinutes . ' minutes';
        }
        if ( $distanceInMinutes < 90 ) {
            return 'about 1 hour';
        }
        if ( $distanceInMinutes < 1440 ) {
            return 'about ' . round(floatval($distanceInMinutes) / 60.0) . ' hours';
        }
        if ( $distanceInMinutes < 2880 ) {
            return '1 day';
        }
        if ( $distanceInMinutes < 43200 ) {
            return 'about ' . round(floatval($distanceInMinutes) / 1440) . ' days';
        }
        if ( $distanceInMinutes < 86400 ) {
            return 'about 1 month';
        }
        if ( $distanceInMinutes < 525600 ) {
            return round(floatval($distanceInMinutes) / 43200) . ' months';
        }
        if ( $distanceInMinutes < 1051199 ) {
            return 'about 1 year';
        }
       
        return 'over ' . round(floatval($distanceInMinutes) / 525600) . ' years';
}


if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
	$theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
	$theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);
  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
function getIp() {
    if (isset($_SERVER)) {
        if (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
            return $_SERVER["HTTP_X_FORWARDED_FOR"];        
        if (isset($_SERVER["HTTP_CLIENT_IP"]))
            return $_SERVER["HTTP_CLIENT_IP"];
        return $_SERVER["REMOTE_ADDR"];
    }
    if (getenv('HTTP_X_FORWARDED_FOR'))
        return getenv('HTTP_X_FORWARDED_FOR');
    if (getenv('HTTP_CLIENT_IP'))
        return getenv('HTTP_CLIENT_IP');
    return getenv('REMOTE_ADDR');
}


function getGeo(){
	$ipin = getIp();
	$ch = curl_init();
	$ver = 'v1/';
	$method = "ipinfo/";
	$apikey = '100.6z68cswz5p2f8ef2yv4b';  
	$secret = 'FWgU3UVQ';  
	$timestamp = gmdate('U'); // 1200603038
	$sig = md5($apikey . $secret . $timestamp);
	$service = 'http://api.quova.com/';
	curl_setopt($ch, CURLOPT_URL, $service . $ver. $method. $ipin . '?apikey=' .
				 $apikey . '&sig='.$sig . '&format=xml');
	curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$data = curl_exec($ch);
	$headers = curl_getinfo($ch);
	curl_close($ch);

	if ($headers['http_code'] != '200') {
		return "ERROR";
	} else {
		$xml = simplexml_load_string($data);
		$p = $xml->Location->CountryData->country; 
		$e = $xml->Location->StateData->state; 
		$c = $xml->Location->CityData->city; 
		return($xml);
	}
}
function user_tracking(){
	global $GEN_USUARIO,$GEN_USER_ID, $database_ecologikal,$ecologikal;
	if($GEN_USUARIO){
		$ip=getIp();
		mysql_select_db($database_ecologikal, $ecologikal);
		$sql="SELECT a.ip FROM members_tracking a WHERE a.user_id= $GEN_USER_ID AND a.id = (SELECT MAX( id ) FROM members_tracking b WHERE b.user_id = $GEN_USER_ID )  ";
		$rst= mysql_query($sql, $ecologikal) or die(mysql_error());
		if(mysql_num_rows($rst)){
			$row=mysql_fetch_array($rst);
			if($row['ip']!=$ip){
				$geo=getGeo();
				$geo_country = $geo->Location->CountryData->country; 
				$geo_state = $geo->Location->StateData->state; 
				$geo_city = $geo->Location->CityData->city; 
				$insertSQL= sprintf("Insert Into members_tracking(user_id, date, ip, country, state, city) Values(%s, now(), %s, %s, %s, %s)",
					GetSQLValueString($GEN_USER_ID,"long"),
					GetSQLValueString($ip,"text"),
					GetSQLValueString($geo_country,"text"),
					GetSQLValueString($geo_state,"text"),
					GetSQLValueString($geo_city,"text"));
				$rst = mysql_query($insertSQL, $ecologikal) or die(mysql_error());
			}
		}else{
				$geo=getGeo();
				$geo_country = $geo->Location->CountryData->country; 
				$geo_state = $geo->Location->StateData->state; 
				$geo_city = $geo->Location->CityData->city; 
				$insertSQL= sprintf("Insert Into members_tracking(user_id, date, ip, country, state, city) Values(%s, now(), %s, %s, %s, %s)",
					GetSQLValueString($GEN_USER_ID,"long"),
					GetSQLValueString($ip,"text"),
					GetSQLValueString($geo_country,"text"),
					GetSQLValueString($geo_state,"text"),
					GetSQLValueString($geo_city,"text"));
				$rst = mysql_query($insertSQL, $ecologikal) or die(mysql_error());
		}
	}
}
function get_translation($field, $value_filter="", $lang=""){
	global $database_ecologikal,$ecologikal;
	if($lang=="")$lang=_LANG_;
	if($value_filter<>"")$value_filter=" And value=".GetSQLValueString($value_filter,'text');
	mysql_select_db($database_ecologikal, $ecologikal);
	$sql="SELECT value, translation From translation Where field=".GetSQLValueString($field,'text')." $value_filter and lang='$lang' Order by translation";
	$rst= mysql_query($sql, $ecologikal) or die(mysql_error());
	if(mysql_num_rows($rst)){
	 $a=array();
		while($row=mysql_fetch_array($rst)){
			$a[]=array($row[1],$row[0]);
		}
	}
	if(isset($a)){
		return $a;
	}else{
		return false;
	}
}
function get_word_translation($field, $value,$lang=""){
	global $database_ecologikal,$ecologikal;
	if($lang=="")$lang=_LANG_;
	mysql_select_db($database_ecologikal, $ecologikal);
	$sql="SELECT translation From translation Where field=".GetSQLValueString($field,'text')." And value=".GetSQLValueString($value,'text')." And lang='$lang' ";
		$rst= mysql_query($sql, $ecologikal) or die(mysql_error());
	if(mysql_num_rows($rst)){
			$row=mysql_fetch_array($rst);
			$a=$row[0];
	}
	if(isset($a)){
		return $a;
	}else{
		return false;
	}
}


function get_sliders($type, $lang=""){
	global $database_ecologikal,$ecologikal;
	if($lang=="")$lang=_LANG_;
	mysql_select_db($database_ecologikal, $ecologikal);
	$sql="SELECT gs.value, t.translation From gen_sliders gs Inner Join translation t On  gs.value=t.value And t.field='$type'  Where gs.type='$type' And t.lang='$lang' Order By gs.value";
	$rst= mysql_query($sql, $ecologikal) or die(mysql_error());
	if(mysql_num_rows($rst)){
	 $a=array();
		while($row=mysql_fetch_array($rst)){
			$a[]=array($row[0],$row[1]);
		}
	}

	if(isset($a)){
		return $a;
	}else{
		return false;
	}
}

function languages_list($lang=""){
	global $database_ecologikal, $ecologikal, $GEN_USER_ID;
	$r="";
	if($lang=="")$lang=_LANG_;
	mysql_select_db($database_ecologikal, $ecologikal);
	$sql="Select language_id,translation From cat_languages Inner Join translation on language_id=value And field='CAT_LANGUAGES' And lang='$lang' ";
	$rst = mysql_query($sql, $ecologikal) or die(mysql_error());
	if(mysql_num_rows($rst)){
		$a=array();
		while($row=mysql_fetch_array($rst)){
			$a[]=array($row[0],$row[1]);
		}
	}
	if(isset($a)){
		return $a;
	}else{
		return false;
	}
	return $r;
}

function skill_categories_get_list(){
	global $database_ecologikal, $ecologikal, $GEN_USER_ID;
	mysql_select_db($database_ecologikal, $ecologikal);
	$sql="Select skill_category_id, category From skill_categories Inner Join translation on skill_category_id=value and field='SKILL_CATEGORY' And lang='es' where skill_category_id>0 Order By skill_category_id";
	$rst = mysql_query($sql, $ecologikal) or die(mysql_error());
	if(mysql_num_rows($rst)){
	 $a=array();
		while($row=mysql_fetch_array($rst)){
			$a[]=array($row[0],get_word_translation("SKILL_CATEGORY",$row[0]));
		}
	}
	if(isset($a)){
		return $a;
	}else{
		return false;
	}
	return $r;
}
function skill_get_list($category=""){
	global $database_ecologikal, $ecologikal, $GEN_USER_ID;
	mysql_select_db($database_ecologikal, $ecologikal);
	$sql="select skill_id,translation from skills inner join translation on skill_id=value and field='SKILL' And lang='es' Where skill_id>0 And skill_category_id=$category Order By translation ASC";
	$rst = mysql_query($sql, $ecologikal) or die(mysql_error());
	if(mysql_num_rows($rst)){
	 $a=array();
		while($row=mysql_fetch_array($rst)){
			$a[]=array($row[0],$row[1]);
		}
	}
	if(isset($a)){
		return $a;
	}else{
		return false;
	}
	return $r;
}

function skill_get_array($category=""){
	global $database_ecologikal, $ecologikal, $GEN_USER_ID;
	mysql_select_db($database_ecologikal, $ecologikal);
	$sql="select skill_id,translation from skills inner join translation on skill_id=value and field='SKILL' And lang='es' Where skill_id>0 And skill_category_id=$category Order By translation ASC";
	$rst = mysql_query($sql, $ecologikal) or die(mysql_error());
	if(mysql_num_rows($rst)){
	 $a=array();
		while($row=mysql_fetch_array($rst)){
			$a.=array('value' >= $row[0], 'skill_id' >= $row[1]);
		}
	}
	if(isset($a)){
		return $a;
	}else{
		return false;
	}
	return $r;
}
/** Function to know if a user is logged in
	Returns true if User is logged in
	Returns False if user is not logged in **/
function is_logged_in(){
	if(isset($_SESSION['loggedin'])){
		$loggedin = $_SESSION['loggedin'];
		if ($loggedin){
			return true;
		}else{
			return false;
		}
	}
}
/** Function to load JS Scripts on Header Hook Depending
	@param: $view which determines the view that is being loaded
**/
function load_js_scripts($view){
	global $js_loaded;
/** Unused Scripts:
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	<script src="'._PLUGINS_URL_.'jquery/ui/minified/jquery.ui.widget.min.js"></script>
	<script src="'._PLUGINS_URL_.'jquery/ui/minified/jquery.ui.mouse.min.js"></script>
	
	<script src="'._PLUGINS_URL_.'jquery/ui/minified/jquery.ui.resizable.min.js"></script>
	<script src="'._PLUGINS_URL_.'jquery/ui/minified/jquery.ui.accordion.min.js"></script>
	
	<script src="'._PLUGINS_URL_.'jquery/ui/jquery.ui.selectmenu.js"></script>
	<script src="'._PLUGINS_URL_.'jquery/ui/minified/jquery.effects.core.min.js"></script>
	<script src="'._PLUGINS_URL_.'jquery/ui/minified/jquery.ui.autocomplete.min.js"></script>
	<script src="'._PLUGINS_URL_.'jquery/ui/minified/jquery.ui.slider.min.js"></script>
	<script src="//ajax.aspnetcdn.com/ajax/jquery.templates/beta1/jquery.tmpl.min.js"></script>
	<script src="'._PLUGINS_URL_.'jquery.scrollpane/jquery.jscrollpane.min.js"></script> 
	<script src="'._PLUGINS_URL_.'jquery.mousewheel.js"></script> 
	<script src="'._PLUGINS_URL_.'jquery/ui/minified/jquery.ui.position.min.js"></script>
	<script src="'._PLUGINS_URL_.'jquery.fileupload/jquery.iframe-transport.js"></script>
**/
	if (!$js_loaded){
		echo '<script src="'._PLUGINS_URL_.'jquery/jquery-1.5.1.min.js"></script>
			<script src="'._PLUGINS_URL_.'jquery/jquery-ui-1.8.14.custom.min.js"></script>
			<script src="'._PLUGINS_URL_.'jquery/ui/minified/jquery.ui.core.min.js"></script>
			<script src="'._PLUGINS_URL_.'jquery/ui/minified/jquery.ui.dialog.min.js"></script>
			<script src="'._JS_URL_.'main.js"></script>
			<script src="'._PLUGINS_URL_.'jquery/ui/minified/jquery.ui.draggable.min.js"></script>
			<script src="'._PLUGINS_URL_.'jquery.tipTip/jquery.tipTip.minified.js"></script>
			<script src="'._PLUGINS_URL_.'jquery/jquery.bgiframe.min.js"></script>
			<script src="'._PLUGINS_URL_.'jquery.livequery/jquery.livequery.js"></script>
			<script src="'._PLUGINS_URL_.'jquery.watermark.js"></script>';
		$js_loaded = true;
	}
	
	switch ($view){
		case 'member':
			echo '<script src="'._JS_URL_.'members/members.js"></script>
				<script src="'._PLUGINS_URL_.'raphael.js"></script>
				<script src="'._VIEWS_URL_.'members/image_uploader/application.js"></script>
				<script src="'._PLUGINS_URL_.'jquery.fileupload/jquery.fileupload.js"></script>
				<script src="'._PLUGINS_URL_.'jquery.fileupload/jquery.fileupload-ui.js"></script>';
			break;
		case 'sustcenter':
			break;
		case 'event':
			break;	
		case 'project':
			break;
		case 'index':
			
			break;		
	}	
}
/** Function to load CSS Files on Header Hook Depending on the View
	@param: $view which determines the view that is being loaded
**/
function load_css_files($view){
			echo '	<link rel="stylesheet" href="'._CSS_URL_.'global.css" media="screen" />
			<link rel="stylesheet" href="'._CSS_URL_.'stream.css" type="text/css" />        
    		<link rel="stylesheet" href="'._PLUGINS_URL_.'jquery/css/jquery.ui.theme.css"  type="text/css" />
    		<link rel="stylesheet" href="'._PLUGINS_URL_.'jquery/css/jquery.ui.all.css"  type="text/css" />
    		<link rel="stylesheet" href="'._PLUGINS_URL_.'jquery.fileupload/jquery.fileupload-ui.css" type="text/css" />';
	switch ($view){
		case 'member':
			break;
		case 'sustcenter':
			break;
		case 'event':
			break;	
		case 'project':
			break;
		case 'game':
		echo '<link rel="stylesheet" href="'._CSS_URL_.'game.css" type="text/css" />';
			break;
	}
}
//Get current file name
function get_url(){
	$filename = $_SERVER['PHP_SELF'];
	$parts = Explode('/', $filename);
	return $parts[count($parts) - 1];
}
?>