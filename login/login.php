<?php include_once("../inc.php");?>
<?php require_once($GEN_PATH_SERVIDOR.'/connections/ecologikal.php'); ?>
<?php include_once($GEN_PATH_SERVIDOR."/include/inc.php"); ?>
<?php include_once($GEN_PATH_SERVIDOR."/include/funciones.php"); ?>
<?php require_once($GEN_PATH_SERVIDOR."/include/idiomas/".$GEN_IDIOMA."/members/members.php");?>
<?php
if(isset($_POST['login_forma_comando']) && $_POST['login_forma_comando']=="login"){
	$u=$_POST['login_forma_usuario'];
	$p=$_POST['login_forma_contrasena'];
	$p=$_POST['login_forma_contrasena'];
	$r=$_POST['remember_session'];
	$sql="Select usuario,contrasena,clave_idioma,user_id From miembros Where (usuario=" . GetSQLValueString($u,"text") ." or email=" . GetSQLValueString($u,"text") .") and contrasena=".GetSQLValueString(md5($p),"text").";";
	mysql_select_db($database_ecologikal, $ecologikal);
	$rst = mysql_query($sql, $ecologikal) or die(mysql_error());
	if(mysql_num_rows($rst)>0){
		$row=mysql_fetch_array($rst);
		$GEN_USUARIO=$row['usuario'];
		$GEN_IDIOMA=$row['clave_idioma'];
		$GEN_USER_ID=$row['user_id'];
		if($r=="1"){
			//suma 30 dias a la fecha actual
			$m = 2592000 + time(); 
		}else{
			$m=0;
		}
		setcookie("GEN_USUARIO", $GEN_USUARIO, $m,"/");
		setcookie("GEN_USER_ID", $GEN_USER_ID ,$m,"/");
		setcookie("GEN_IDIOMA", $GEN_IDIOMA, $m,"/");
		echo "LOGGED";
		user_tracking();
	exit;
	}else{
		echo LANGUAGE_MEMBERS_ERROR_LOGIN;
	}
}
?>