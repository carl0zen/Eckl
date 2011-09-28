<?php 
	require_once("_config/config.php");
?>
<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="utf-8" /> 
        <title>Ecologikal</title> 
        <link rel="stylesheet" href="<?php echo $GEN_URL_SERVIDOR?>/css/main.css" media="screen" /> 
		<link rel="stylesheet" href="<?php echo $GEN_URL_SERVIDOR?>/css/stream.css" type="text/css" />        
        <link rel="stylesheet" href="<?php echo $GEN_URL_SERVIDOR?>/jquery-ui-1.8.14.custom/development-bundle/themes/ecologikal/jquery.ui.theme.css"  type="text/css" />
        <link rel="stylesheet" href="<?php echo $GEN_URL_SERVIDOR?>/jquery-ui-1.8.14.custom/development-bundle/themes/ecologikal/jquery.ui.all.css"  type="text/css" />

        <link rel="stylesheet" href="<?php echo $GEN_URL_SERVIDOR;?>/js/juery-File-Upload/jquery.fileupload-ui.css" />

        <script src="NEW/raphael.js"></script>

		<script src="<?php echo $GEN_URL_SERVIDOR;?>/js/jquery/jquery-1.6.1.min.js"></script>
        <script src="<?php echo $GEN_URL_SERVIDOR?>/jquery-ui-1.8.14.custom/development-bundle/external/jquery.bgiframe-2.1.2.js"></script>
        <script src="<?php echo $GEN_URL_SERVIDOR?>/jquery-ui-1.8.14.custom/development-bundle/ui/jquery.ui.core.js"></script>
        <script src="<?php echo $GEN_URL_SERVIDOR?>/jquery-ui-1.8.14.custom/development-bundle/ui/jquery.ui.widget.js"></script>
        <script src="<?php echo $GEN_URL_SERVIDOR?>/jquery-ui-1.8.14.custom/development-bundle/ui/jquery.ui.mouse.js"></script>
        <script src="<?php echo $GEN_URL_SERVIDOR?>/jquery-ui-1.8.14.custom/development-bundle/ui/jquery.ui.button.js"></script>
        <script src="<?php echo $GEN_URL_SERVIDOR?>/jquery-ui-1.8.14.custom/development-bundle/ui/jquery.ui.draggable.js"></script>
        <script src="<?php echo $GEN_URL_SERVIDOR?>/jquery-ui-1.8.14.custom/development-bundle/ui/jquery.ui.position.js"></script>
        <script src="<?php echo $GEN_URL_SERVIDOR?>/jquery-ui-1.8.14.custom/development-bundle/ui/jquery.ui.resizable.js"></script>
        <script src="<?php echo $GEN_URL_SERVIDOR?>/jquery-ui-1.8.14.custom/development-bundle/ui/jquery.ui.dialog.js"></script>
        <script src="<?php echo $GEN_URL_SERVIDOR?>/jquery-ui-1.8.14.custom/development-bundle/ui/jquery.effects.core.js"></script>
        <script src="<?php echo $GEN_URL_SERVIDOR?>/jquery-ui-1.8.14.custom/development-bundle/ui/jquery.ui.accordion.js"></script>
        <script src="<?php echo $GEN_URL_SERVIDOR?>/jquery-ui-1.8.14.custom/development-bundle/ui/jquery.ui.button.js"></script>
        <script src="<?php echo $GEN_URL_SERVIDOR?>/jquery-ui-1.8.14.custom/development-bundle/ui/jquery.ui.autocomplete.js"></script>
        <script src="<?php echo $GEN_URL_SERVIDOR?>/jquery-ui-1.8.14.custom/development-bundle/ui/jquery.ui.selectmenu.js"></script>
        <script src="<?php echo $GEN_URL_SERVIDOR?>/jquery-ui-1.8.14.custom/development-bundle/ui/jquery.ui.slider.js"></script>

        <script src="<?php echo $GEN_URL_SERVIDOR?>/js/main.js"></script>
        <script src="<?php echo $GEN_URL_SERVIDOR?>/js/jquery.livequery.js"></script>

        <script src="<?php echo $GEN_URL_SERVIDOR;?>/jquery-ui-1.8.14.custom/js/jquery-ui-1.8.14.custom.min.js"></script>
        <script src="//ajax.aspnetcdn.com/ajax/jquery.templates/beta1/jquery.tmpl.min.js"></script>
        <script src="<?php echo $GEN_URL_SERVIDOR;?>/js/juery-File-Upload/jquery.iframe-transport.js"></script>
        <script src="<?php echo $GEN_URL_SERVIDOR;?>/js/juery-File-Upload/jquery.fileupload.js"></script>
        <script src="<?php echo $GEN_URL_SERVIDOR;?>/js/juery-File-Upload/jquery.fileupload-ui.js"></script>
        <script src="<?php echo $GEN_URL_SERVIDOR;?>/include/members/image_uploader/application.js"></script>
        <!-- the mousewheel plugin --> 
		<script type="text/javascript" src="js/jquery.mousewheel.js"></script> 
		<!-- the jScrollPane script --> 
		<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>        
		<script src="js/jquery.tipTip.minified.js"></script>

        <?php include_once($GEN_PATH_SERVIDOR."/include/members/stream/members_stream_javascript.php") ?>

        <script> 
		var 	noPetal = 0,
				noSkills = 0,
				noRef = 0,
				refId = 1,
				skillId = 1,
				petals = [6],
			 	refCount = 0,
				refGradeSum = 0,
				petalGrade = 0,
				petalGradeSum = 0;
			$(document).ready(function(e){
				<?php if($goto=="image-uploader"){?>
					$("rightbar").hide();
					$("content").addClass("uploader");
				<?php }?>
				
				function Petal (petalName, noSkills, percSkills) {
					//Petal Counter
					this.noPetal = noPetal;
					noPetal ++;

					this.petalName = petalName;
					this.noSkills = noSkills;
					this.percSkills = percSkills;

					// New Skills Object
					Petal.prototype.Skill = function (skillId, skillName, skillGrade, skillDesc){

						//Skill Counter
						this.skillId = skillId;					
						this.skillName = skillName;
						this.skillGrade = skillGrade;
						this.skillDesc = skillDesc;

						// New References Object
						Petal.prototype.SkillRef = function(refId, skillRefUserId, skillRefComment, skillRefGrade){
							this.refId = refId;
							this.skillRefUserId = skillRefUserId;
							this.skillRefUsername = skillRefUsername;
							this.skillRefComment = skillRefComment;
							this.skillRefGrade = skillRefGrade;	
						};
					};

					// Constructors
					Petal.prototype.setPetalId = function(petalId) {
						this.petalId = petalId;
					};
					Petal.prototype.setPetalName = function(petalName) {
						this.petalName = petalName;
					};
					Petal.prototype.setNoSkills = function(noSkills) {
						this.noSkills = noSkills;
					};
					Petal.prototype.setPercSkills = function(percSkills) {
						this.percSkills = percSkills;
					};
					Petal.prototype.addSkill = function(petalId, skillName, skillGrade, skillDesc) {

						skill = new this.Skill(skillId, skillName, skillGrade, skillDesc);

						skillId++;
					};
					this.addRef = function(noSkill, skillRefUserId, skillRefUsername, skillRefComment, skillRefGrade){
						this.getSkill(noSkill).skillRef(skillRefUserId, skillRefUsername, skillRefComment, skillRefGrade);
						refId++;
					};

					// Destructors


					//Acces Functions
					Petal.prototype.getSkill = function (skillId){
					//	console.log(this.noSkills);
						for (x = 0; x <= this.noSkills; x++){
							if (this.Skill.skillId == skillId){
					//			console.log(skil.skillName + ' ' + thisSkill().skillGrade + ' ' + this.Skill().skillDesc);

								return this.Skill();
							}
						}
					};
					Petal.prototype.getSkillRef = function (skillNo, refId){
						for (x = 0; x >= skillNo; x++){
							if (this.skillId == skillNo){
								for (y = 0 ; y <= this.refId ; y ++){
									if (this.skills().skillRef().refId == refId){
										refData = this.skills().skillRef().skillName + ' ' + this.skills().skillRef().skillGrade + ' ' + this.skills().skillRef().skillDesc;
										return skillData;
									}
								}
							}
						}
					};
					Petal.prototype.getBasicInfo = function() {
						return this.petalName + ' No. Skills: ' + this.noSkills + ' Grade: ' + this.percSkills;
					};
					Petal.prototype.getSkills = function() {
						return this.Skill();
					};
					Petal.prototype.getNoSkills = function(){
						return this.noSkills;
					}
				};
				
				$("flower div").each(function(x){
					petals [x] = new Petal(0,0,0);
					petalGradeSum = 0;
					petalGrade = 0;
					petalName = $(this).find('#petalName').html();
					var skillCount =0;
					$(this).find('skill').each(function(y){
						skillCount++;
						skillGrade = 0;
						refCount = 0;
						skillName = $(this).find('name').html();
						skillDesc = $(this).find('description').html();
						refCount = 0;
						refGradeSum = 0;
						$(this).find('reference').each(function(z){
							refCount++;	
							refUserId = $(this).find('userid').html();
							refUsername = $(this).find('username').html();
							refGrade = $(this).find('refgrade').html();
							intRefGrade = parseInt(refGrade);
							refGradeSum += intRefGrade;
						});
				//		console.log(' SkillName: ' + skillName + ' Referencias: ' + refCount);
						skillGrade = refGradeSum / refCount;
						skillGrade = Math.round(skillGrade);
						$(this).find('grade').html(skillGrade + '%');
						petalGradeSum += skillGrade;
						petals[x].addSkill(skillName, skillGrade, skillDesc);
					});
					petalGrade = petalGradeSum / skillCount;
					$(this).find('#percSkills').html(Math.round(petalGrade) + "%");
					
					petals[x].petalName = petalName;
					petals[x].noSkills = skillCount;
					petals[x].percSkills = petalGrade;
					$(this).find('#noSkills').html(skillCount + " skills");
					
					
				//	console.log(petals[x].getSkill(skillCount));
				//	petals[x].addRef(skillCount, refUserId, refUsername, refGrade);
					
				});
				// INTERACTION
				// This will handle all the animations and interaction

				$('reference').hide();
				$('flower div').hide();
				
				$('span#showreferences').click(function(e){
					
					if ($(this).parent().parent().find('reference').is(":hidden")){
						$(this).parent().parent().find('reference').fadeIn(200);
						$(this).html("Hide References");
					}else{              
						$(this).parent().parent().find('reference').hide();
						$(this).html("Show References");
					}
				});
				
				// CENTER MODALBOX
				var thickbox = $('#modalbox');
				var height = $(window).height();
				var width = $(document).width();
			    thickbox.css({
			        'left' : width/2.5 - (thickbox.width() / 2),  // half width - half element width
			    });
				$('#overlay').css('height', height);
				$('#overlay').click(function(e){
					$(this).fadeOut(100);
					$('div#modalbox').fadeOut(100);
				});
				$('#close').click(function(e){
					$('div#modalbox').fadeOut(100);
					$('#overlay').fadeOut(100);
				});
				
				//RATE SKILLS
				beingrated=false;
				$('skill').hover(function(e){
					
					if (!beingrated){
						$(this).append('<button class="rateme">Rate Me!</button>').find('button.rateme').click(function(e){
							beingrated=true;
							$(this).parent().find('button.rateme').fadeOut(200);
							$(this).parent().append('<div id="gradeform"><form>How skillful do you think I am <select><option>Not Skillful</option><option>Somewhat Skillful</option><option>Skillful</option><option>Very Skillful</option></select>Leave me a reference:<textarea></textarea><button class="grade">Send Rating</button></form></div>').find('button.grade').click(function(e){
								//ACCESS TO DATABASE AND UPDATE THE VALUES
								console.log('Updating Values');
								$(this).parent().parent().remove();
								beingrated = false;
								rated = true;
							});
						});
					} //Being RATED
					
				}, function(e){
					
					$(this).find('button.rateme').remove();
				});
				
				//TOOLBAR ICONS
				$('.tiptip').tipTip();
				$('div.icon#account').click(function(e){
					$('div.#accountlist').toggle();
				});
				
				//HIDE WHEN CLICKING OUTSIDE
				$(document).click(function(e){

				});
			
			});

        </script>
		
    </head> 
	    <body> 
			<header>
						<toolbar>
							<account>
								<div class="icon tiptip" id="account" title="My Account"></div>
								<div class="icon tiptip" id="notifications" title="Notifications">
									<nomessages>
										12
									</nomessages>
								</div>
								<div class="icon tiptip" id="messages" title="My Messages">
									<nomessages>
										12
									</nomessages>
								</div>

								<div id="accountlist">
									<ul>
										<li><a  href="#">Profile</a></li>
										<li><a  href="#">Settings</a></li>
										<li><a  href="#">Log out</a></li>
									</ul>
								</div>
							</account>
							
							<div class="icon" id="search_btn"></div>
							<input id="search" type="text">
						</toolbar>
						<logo onClick="load_html('content', '<?php echo $array_goto["profile"][1].$array_goto["profile"][2];?>?no_page='+current_gallery_page+'&user_id=<?php echo $user_id;?>')"></logo>
			</header>

