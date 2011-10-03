<?php require_once($_SERVER['DOCUMENT_ROOT']."/github/Eckl/_config/bootstrap.php");
if(isset($_POST['login_forma_comando']) && $_POST['login_forma_comando']=="login"){
	$u=$_POST['login_forma_usuario'];
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
		setcookie("user", $GEN_USUARIO, $m);
		setcookie("user_id", $GEN_USER_ID ,$m);
		setcookie("lang", $GEN_IDIOMA, $m);
		$logged = true;
		echo $logged;
		user_tracking();
		exit;
	}else{
		$logged = false;
		echo $logged;
	}
}
?>