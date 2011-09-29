<?php
// Define Global Variables

define('_ROOT_',dirname(dirname(__FILE__)));
define('_LANG_', 'es'); 
define('_HOME_URL_', 'http://localhost:8888/github/Eckl/' );
define('_PLUGIN_URL_', 'http://localhost:8888/github/Eckl/_plugins/' ); 
define('_VIEWS_URL_', 'http://localhost:8888/github/Eckl/frontend/views/');
define('_VIEWS_PATH_', '/Users/carlospriego/Sites/github/Eckl/frontend/views/');
define('_JS_URL_', 'http://localhost:8888/github/Eckl/frontend/js/');

//Pictures Definition

define('_MEMBER_PICS_PATH_',_ROOT_.'/pictures/members/');
define('_SC_PICS_PATH_',_ROOT_.'/pictures/scs/');
define('_PROJECTS_PICS_PATH_',_ROOT_.'/pictures/projects/');
define('_EVENTS_PICS_PATH_',_ROOT_.'/pictures/events/');

define('_MEMBER_PICS_URL_',_HOME_URL_.'/pictures/members/');
define('_SC_PICS_URL_',_HOME_URL_.'/pictures/scs/');
define('_PROJECTS_PICS_URL_',_HOME_URL_.'/pictures/projects/');
define('_EVENTS_PICS_URL_',_HOME_URL_.'/pictures/events/');

$GEN_USUARIO=false;
$GEN_IDIOMA="es";
$GEN_USER_ID=false;
$GEN_SC_ID=false;
$GEN_PATH_MEMBERS_PICTURES="/Users/carlospriego/Sites/github/Eckl/pictures/";
$GEN_PATH_CENTERS_PICTURES="/Users/carlospriego/Sites/github/Eckl/pictures/sc/";
$GEN_URL_MEMBERS_PICTURES="http://localhost:8888/github/Eckl/pictures/";
$GEN_URL_CENTERS_PICTURES="http://localhost:8888/github/Eckl/pictures/sc/";


$GEN_URL_IMAGENES=_HOME_URL_ ."/images";

$user_id="";
$goto="";

//Include Necessary Files


require_once(_ROOT_."/_config/session.php");
require_once(_ROOT_."/_config/dbconnection.php");
include_once(_ROOT_."/backend/functions.php");
include_once(_ROOT_."/backend/functions_member.php");
require_once(_ROOT_."/_lang/"._LANG_."/members.php");
require_once(_ROOT_."/_lang/"._LANG_."/general.php");

//Load HTML Functionality for Main Menu

$user_id=isset($_GET['user_id']) ? $_GET['user_id'] : $GEN_USER_ID;
$goto=isset($_GET['goto']) ? $_GET['goto'] : "stream";
$array_goto["gallery"]=array(_ROOT_,_VIEWS_URL_,"members/gallery/gallery.php");;
$array_goto["stream"]=array(_ROOT_,_VIEWS_URL_,"members/stream/members_stream.php");;
$array_goto["profile"]=array(_ROOT_,_VIEWS_URL_,"members/profile.php");;
$array_goto["image-uploader"]=array(_ROOT_,_VIEWS_URL_,"members/image_uploader/index.php");;
$array_goto["sc-image-uploader"]=array(_ROOT_,_VIEWS_URL_,"sustcenters/image_uploader/index.php");;
$array_goto["sc-gallery"]=array(_ROOT_,_VIEWS_URL_,"sustcenters/gallery/gallery.php");;
$array_goto["flower"]=array(_ROOT_,_VIEWS_URL_,"members/member_flower.php");;

?>

