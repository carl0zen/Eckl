<script>
$(function() {
	// a workaround for a flaw in the demo system (http://dev.jqueryui.com/ticket/4375), ignore!

	
	var login_form_user = $( "#login_form_user" ),
		login_form_password = $( "#login_form_password" ),
		login_form_remember_session = $( "#login_form_remember_session" ),
		tips = $( "#validateTips_login" ),
		allFields = $( [] ).add( login_form_user ).add( login_form_password).add( tips);
		
	 <?php if(!$tracking_settings){?>
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
						url: "<?=_ROOT_URL_?>login/login.php",
						data: dataString,
						success: function(msg) {
						if(msg=='LOGGED'){
								$( ".validateTips" ).close();
								$( "#login_form" ).dialog( "close" );
								var url='<?=_VIEWS_URL_?>members/member_profile.php';
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
						url: "<?=_ROOT_URL_?>login/login.php",
						data: dataString,
						success: function(msg) {
						if(msg=='LOGGED'){
								$( "#login_form" ).dialog( "close" );
								var url='<?=_VIEWS_URL_?>members/member_profile.php';
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
	$( "#login_btn" ).click(function() {$( "#login_form" ).dialog( "open" );});

	//( "#tracking_settings" ).dialog( "open" );

});
</script>