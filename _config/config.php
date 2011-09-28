<?php
// Define Global Variables

$GEN_USUARIO=false;
$GEN_IDIOMA="es";
$GEN_USER_ID=false;
$GEN_SC_ID=false;
$GEN_PATH_SERVIDOR="/Users/carlospriego/Sites/ecologikal";
$GEN_PATH_MEMBERS_PICTURES="/Users/carlospriego/Sites/ecologikal/pictures/";
$GEN_PATH_CENTERS_PICTURES="d:/www/html/ecologikal/pictures/sc/";
$GEN_URL_MEMBERS_PICTURES="http://localhost:8888/ecologikal/pictures/";
$GEN_URL_CENTERS_PICTURES="http://localhost:8888/ecologikal/pictures/sc/";

$GEN_URL_SERVIDOR="http://localhost:8888/ecologikal";
$GEN_URL_IMAGENES=$GEN_URL_SERVIDOR ."/images";

$user_id="";
$goto="";

//Include Necessary Files

require_once($GEN_PATH_SERVIDOR."/_config/sesion.php");
require_once($GEN_PATH_SERVIDOR.'/_config/conn.php'); 
include_once($GEN_PATH_SERVIDOR."/_backend/functions.php");
include_once($GEN_PATH_SERVIDOR."/_backend/functions_member.php");
require_once($GEN_PATH_SERVIDOR."/_lang/".$GEN_IDIOMA."/members.php");
require_once($GEN_PATH_SERVIDOR."/_lang/".$GEN_IDIOMA."/general.php");

//Load HTML Functionality for Main Menu

$user_id=isset($_GET['user_id']) ? $_GET['user_id'] : $GEN_USER_ID;
$goto=isset($_GET['goto']) ? $_GET['goto'] : "stream";
$array_goto["gallery"]=array($GEN_PATH_SERVIDOR,$GEN_URL_SERVIDOR,"/members/gallery/gallery.php");;
$array_goto["stream"]=array($GEN_PATH_SERVIDOR,$GEN_URL_SERVIDOR,"/members/stream/members_stream.php");;
$array_goto["profile"]=array($GEN_PATH_SERVIDOR,$GEN_URL_SERVIDOR,"/members/profile.php");;
$array_goto["image-uploader"]=array($GEN_PATH_SERVIDOR,$GEN_URL_SERVIDOR,"/members/image_uploader/index.php");;
$array_goto["sc-image-uploader"]=array($GEN_PATH_SERVIDOR,$GEN_URL_SERVIDOR,"/sustcenters/image_uploader/index.php");;
$array_goto["sc-gallery"]=array($GEN_PATH_SERVIDOR,$GEN_URL_SERVIDOR,"/sustcenters/gallery/gallery.php");;

?>
