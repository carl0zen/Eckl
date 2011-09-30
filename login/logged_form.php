<?php
include_once($GEN_PATH_SERVIDOR."/include/check_sesion.php");
include_once($GEN_PATH_SERVIDOR."/include/members/funciones.php");
$tracking_settings=members_get_info("settings_tracking");
?>
<div id="loginbar">
<!-- IF USER IS LOGGED IN-->
	<?php if($GEN_USUARIO){?>
		<div id="menu">
			<ul>
				<li id="notifications" class="toolbaricon"></li>
				<li id="myaccount" class="toolbaricon">
					<ul>
						<li><a href="<?php echo $GEN_URL_SERVIDOR; ?>/profile.php"><?php echo LANGUAGE_MEMBERS_BUTTON_MY_ACCOUNT;?></a></li>
						<li><?php echo LANGUAGE_MEMBERS_BUTTON_SETTINGS;?></li>
						<li><a href="?comando=logout" ><?php echo LANGUAGE_MEMBERS_BUTTON_LOGOUT;?></a></li>
					</ul>
				</li>
			</ul>
		</div><!-- menu --> 
	<?php }?>


<div style="visibility:hidden;">
    <?php if($tracking_settings==0 && $GEN_USUARIO){?>
    <div id="tracking_settings" title="Tracking Setting	">
		<div id="validateTips_login" class="validateTips">&nbsp;</div>
        <fieldset>
            <label for="login_form_user"><?php echo LANGUAGE_MEMBERS_TEXT_USER;?></label>
            <input type="text" name="login_form_user" id="login_form_user"  class="text ui-widget-content ui-corner-all" />
            <label for="login_form_password"><?php echo LANGUAGE_MEMBERS_TEXT_PASSWORD;?></label>
            <input type="password" name="login_form_password" id="login_form_password" class="text ui-widget-content ui-corner-all" />
            <label for="login_form_remember_session"><input name="login_form_remember_session" type="checkbox" id="login_form_remember_session" value="1" />
            No cerrar sesi&oacute;n</label>
            
        </fieldset>
    </div>
    <?php } ?>
</div>




	<script>
	$(function() {
		// a workaround for a flaw in the demo system (http://dev.jqueryui.com/ticket/4375), ignore!
		$( "#dialog:ui-dialog" ).dialog( "destroy" );
		



		 <?php if(!$tracking_settings){?>
		var login_form_user = $( "#login_form_user" ),
			login_form_password = $( "#login_form_password" ),
			login_form_remember_session = $( "#login_form_remember_session" ),
			tips = $( "#validateTips_login" ),
			allFields = $( [] ).add( login_form_user ).add( login_form_password).add( tips);

		$( "#tracking_settings" ).dialog({autoOpen: false, height: 340, width: 450, modal: true, draggable: false, 
			resizable: false, dialogClass: 'dialogo_editar_perfil',
			buttons: {
				"<?php echo IDIOMA_TEXTO_BOTON_ACEPTAR;?>": function() {
					var bValid = true;
					login_form_user.removeClass( "ui-state-error" );
					login_form_password.removeClass( "ui-state-error" );
					bValid = bValid && checkLength( login_form_user, "Usuario", 3, 50 );
					bValid = bValid && checkLength( login_form_password, "Password", 3, 16 );
					if ( bValid ) {
						var u=login_form_user.val(),
							p=login_form_password.val();
						var r=0;
						if($(login_form_remember_session).attr('checked'))r=1;
						var dataString = 'login_forma_usuario='+ u + '&login_forma_contrasena=' + p + '&login_forma_comando=login&remember_session='+r;
						$.ajax({
							type: "POST",
							url: "<?php echo $GEN_URL_SERVIDOR?>/include/members/login.php",
							data: dataString,
							success: function(msg) {
							if(msg=='LOGGED'){
									$( ".validateTips" ).close();
									$( "#login_form" ).dialog( "close" );
									var url='<?php echo $GEN_URL_SERVIDOR; ?>/profile.php';
									$(location).attr('href',url);
								}
								if(msg!='LOGGED'){
								updateTips( msg ,1);
								}
								
							}
						 });
						return false;
					}
				},
				Cancelar: function() {$( this ).dialog( "close" );allFields.val( "" ).removeClass( "ui-state-error" );allFields.html( "" );}
			},
			close: function(){allFields.val( "" ).removeClass( "ui-state-error" );allFields.html( "" );}
		});
		<?php }?>


		//( "#tracking_settings" ).dialog( "open" );

	});	
</script>

</div><!--loginbar -->
