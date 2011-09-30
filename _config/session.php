<?php 
if(isset($_GET["sc_id"])){
	$GEN_SC_ID=$_GET["sc_id"];
	setcookie("GEN_SC_ID", $GEN_SC_ID,0,"/");
}

if(isset($_COOKIE["GEN_USUARIO"]))$GEN_USUARIO=$_COOKIE["GEN_USUARIO"];
if(isset($_COOKIE["GEN_IDIOMA"]))define('_LANG_',$_COOKIE["GEN_IDIOMA"]);
if(isset($_COOKIE["GEN_USER_ID"]))$GEN_USER_ID=$_COOKIE["GEN_USER_ID"];
if(isset($_COOKIE["GEN_SC_ID"]))$GEN_SC_ID=$_COOKIE["GEN_SC_ID"];

if(isset($_GET['comando']) && $_GET['comando']=="logout"){
	setcookie("GEN_USUARIO", "",0,"/");
	setcookie("GEN_USER_ID", "",0,"/");
	setcookie("GEN_SC_ID", "",0,"/");
	setcookie("GEN_IDIOMA", "",0,"/");
	$GEN_USUARIO=false;
	$GEN_SC_ID=false;
	$GEN_USER_ID=false;
	$url=_ROOT_URL_;
	header("Location: $url");
}
?>