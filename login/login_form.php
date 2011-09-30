<?php
include_once($GEN_PATH_SERVIDOR."/include/check_sesion.php");
include_once($GEN_PATH_SERVIDOR."/include/members/funciones.php");
?>
<div id="loginbar">
<!-- IF USER IS LOGGED IN-->
		<div class="large button green" id="login_button">
			<div></div>
			<a href="#" class="sign_in" ><?php echo LANGUAGE_MEMBERS_TOOLBAR_LOGIN_BUTTON;?></a>
		</div><!--- login button -->
		<div class="large button pink" id="login_button">
			<div id="register" ></div> 
			<a href="#" id="register_" ><?php echo LANGUAGE_MEMBERS_TOOLBAR_REGISTER_BUTTON;?></a>

		</div><!--- register button -->

<div style="visibility:hidden;">
    <div id="login_form" title="Login">
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
</div>
<!--Sign Box -->




	<script>
	$(function() {
		// a workaround for a flaw in the demo system (http://dev.jqueryui.com/ticket/4375), ignore!
		$( "#dialog:ui-dialog" ).dialog( "destroy" );
		




		var login_form_user = $( "#login_form_user" ),
			login_form_password = $( "#login_form_password" ),
			login_form_remember_session = $( "#login_form_remember_session" ),
			tips = $( "#validateTips_login" ),
			allFields = $( [] ).add( login_form_user ).add( login_form_password).add( tips);

		$( "#login_form" ).dialog({autoOpen: false, height: 340, width: 450, modal: true, draggable: false, 
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
									$( "#login_form" ).dialog( "close" );
									var url='<?php echo $GEN_URL_SERVIDOR; ?>/profile.php?goto=stream';
									$(location).attr('href',url);
								}
								if(msg!='LOGGED'){
								updateTips( msg,0 );
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
		$('#login_form').live('keyup', function(e){ if (e.keyCode == 13){$(':button:contains("<?php echo IDIOMA_TEXTO_BOTON_ACEPTAR;?>")').click();}});
		$( ".sign_in" ).click(function() {$( "#login_form" ).dialog( "open" );});

	});	
</script>


</div><!--loginbar -->