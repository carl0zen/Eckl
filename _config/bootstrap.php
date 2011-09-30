<?php
// Language

define('_LANG_', 'es'); 
// Global Variables

define('_ROOT_PATH_',dirname(dirname(__FILE__)).'/');
define('_ROOT_URL_', 'http://localhost:8888/github/Eckl/' );
define('_PLUGINS_URL_'  		,_ROOT_URL_.'_plugins/' ); 
define('_PLUGINS_PATHL_'		,_ROOT_PATH_. '_plugins/' );           			
define('_FRONTEND_URL_'			,_ROOT_URL_.'frontend/');
define('_FRONTEND_PATH_'		,_ROOT_PATH_. 'frontend/');
define('_VIEWS_URL_'   			,_FRONTEND_URL_.'views/');
define('_VIEWS_PATH_'  			,_FRONTEND_PATH_. 'views/');
define('_JS_URL_'	   			,_FRONTEND_URL_.'js/');
define('_JS_PATH_'	   			,_FRONTEND_PATH_. 'js/');
define('_CSS_URL_'	   			,_FRONTEND_URL_.'css/');
define('_CSS_PATH_'	   			,_FRONTEND_PATH_. 'css/');
define('_IMAGES_URL_'  			,_CSS_URL_.'images/');
define('_IMAGES_PATH_' 			,_CSS_PATH_. 'images/');

//Pictures Definition
define('_PICS_PATH_'			,_ROOT_PATH_.'pictures/');
define('_PICS_URL_'				,_ROOT_URL_.'pictures/');
define('_MEMBER_PICS_PATH_'		,_PICTURES_PATH_.'/members/');
define('_MEMBER_PICS_URL_'		,_PICTURES_URL_.'/members/');
define('_SC_PICS_PATH_'			,_PICTURES_PATH_.'/scs/');
define('_SC_PICS_URL_'			,_PICTURES_URL_.'/scs/');
define('_PROJECTS_PICS_PATH_'	,_PICTURES_PATH_.'/projects/');
define('_PROJECTS_PICS_URL_'	,_PICTURES_URL_.'/projects/');
define('_EVENTS_PICS_PATH_'		,_PICTURES_PATH_.'/events/');
define('_EVENTS_PICS_URL_'		,_PICTURES_URL_.'/events/');

$GEN_USUARIO=false;
$GEN_IDIOMA="es";
$GEN_USER_ID=false;
$GEN_SC_ID=false;
$GEN_PATH_MEMBERS_PICTURES="/Users/carlospriego/Sites/github/Eckl/pictures/";
$GEN_PATH_CENTERS_PICTURES="/Users/carlospriego/Sites/github/Eckl/pictures/sc/";
$GEN_URL_MEMBERS_PICTURES="http://localhost:8888/github/Eckl/pictures/";
$GEN_URL_CENTERS_PICTURES="http://localhost:8888/github/Eckl/pictures/sc/";


$GEN_URL_IMAGENES=_ROOT_URL_ ."/images";

$user_id="";
$goto="";

//Include Necessary Files


require_once(_ROOT_PATH_."_config/session.php");
require_once(_ROOT_PATH_."_config/dbconnection.php");
include_once(_ROOT_PATH_."backend/functions.php");
include_once(_ROOT_PATH_."backend/functions_member.php");
require_once(_ROOT_PATH_."_lang/"._LANG_."/members.php");
require_once(_ROOT_PATH_."_lang/"._LANG_."/global.php");

//Redirects if user is not logged in

//if(!is_logged_in()){header('Location: '._ROOT_URL_.'index.php');exit;}


//Load HTML Functionality for Main Menu



$user_id=isset($_GET['user_id']) ? $_GET['user_id'] : $GEN_USER_ID;
$goto=isset($_GET['goto']) ? $_GET['goto'] : "stream";
$array_goto["gallery"]=				array(_ROOT_PATH_,_VIEWS_URL_,"members/gallery/gallery.php");;
$array_goto["stream"]=				array(_ROOT_PATH_,_VIEWS_URL_,"members/stream/members_stream.php");;
$array_goto["profile"]=				array(_ROOT_PATH_,_VIEWS_URL_,"members/profile.php");;
$array_goto["image-uploader"]=		array(_ROOT_PATH_,_VIEWS_URL_,"members/image_uploader/index.php");;
$array_goto["sc-image-uploader"]=	array(_ROOT_PATH_,_VIEWS_URL_,"sustcenters/image_uploader/index.php");;
$array_goto["sc-gallery"]=			array(_ROOT_PATH_,_VIEWS_URL_,"sustcenters/gallery/gallery.php");;
$array_goto["flower"]=				array(_ROOT_PATH_,_VIEWS_URL_,"members/member_flower.php");;

?>

