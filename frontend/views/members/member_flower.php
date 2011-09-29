<script>
	$(document).ready(function(e){
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
							$(this).parent().parent().fadeOut();
							beingrated = false;
							rated = true;
						});
					});
				} //Being RATED
				
			}, function(e){
				
				$(this).find('button.rateme').remove();
			});
			
			
			$('reference').hide();

			$('span#showreferences').click(function(e){

				if ($(this).parent().parent().find('reference').is(":hidden")){
					$(this).parent().parent().find('reference').fadeIn(200);
					$(this).html("Hide References");
				}else{              
					$(this).parent().parent().find('reference').hide();
					$(this).html("Show References");
				}
			});
			$('flower div #petalName').click(function(e){
				$('skill').slideUp(200);
				$(this).parent().find('skill').slideDown(200);
			});
	});
</script>
<div class="get">
	<div class="petal">
		<span class="text">Building</span>
		<input type="hidden" class="percent" value="90" />
		<input type="hidden" class="color" value="#ff3333" />
		<input type="hidden" class="noSkills" value="10" />
	</div>
	<div class="petal">
		<span class="text">Community Gov</span>
		<input type="hidden" class="percent" value="90" />
		<input type="hidden" class="color" value="#ff9933" />
		<input type="hidden" class="noSkills" value="10" />
	</div>
	<div class="petal">
		<span class="text">Finance & Economics</span>
		<input type="hidden" class="percent" value="80" />
		<input type="hidden" class="color" value="#ffff33" />
		<input type="hidden" class="noSkills" value="10" />
	</div>
	<div class="petal">
		<span class="text">Land & Nature</span>
		<input type="hidden" class="percent" value="80" />
		<input type="hidden" class="color" value="#99ff33" />
		<input type="hidden" class="noSkills" value="10" />
	</div>
	<div class="petal">
		<span class="text">Culture & Education</span>
		<input type="hidden" class="percent" value="45" />
		<input type="hidden" class="color" value="#33cccc" />
		<input type="hidden" class="noSkills" value="10" />
	</div>
	<div class="petal">
		<span class="text">Tools & Tech</span>
		<input type="hidden" class="percent" value="90" />
		<input type="hidden" class="color" value="#6633cc" />
		<input type="hidden" class="noSkills" value="10" />
	</div>
	<div class="petal">
		<span class="text">Health & Spirituality</span>
		<input type="hidden" class="percent" value="85" />
		<input type="hidden" class="color" value="#cc3399" />
		<input type="hidden" class="noSkills" value="10" />
	</div>
</div><!-- Get-->
<h1><div id="flower_btn" class="pageicon"></div>Skills</h1>
<flower>
	<div id="p1" class = "building">
		<petalicon></petalicon>

		<span id="petalName">Building</span>	
		<span id="noSkills">10 skills</span>
		<span id="percSkills">100%</span>
		<skill>
			<name>Bioconstruction</name>
			<grade>100%</grade>
			<description>This is just a test DescriptionThis is just a test DescriptionThis is just a test DescriptionThis is just a test Description<span id="showreferences">Show References (<refnumber>)</span></description>

			<reference>
				<userid>12</userid>
				<avatar><a href="#"><img src="/ecologikal/pictures/4e39d0ac405fa/profile_mini2.jpg"/></a></avatar>
				<username>Carlos Pérez Priego</username>
				<description>I think you are very skillFull</description>
				<refgrade>77%</grade>
			</reference>
			<reference>
				<userid>12</userid>
				<avatar><a href="#"><img src="/ecologikal/pictures/4e39d0ac405fa/profile_mini2.jpg"/></a></avatar>
				<username>Alex Mass</username>
				<description>I think you are very skillFull in this area</description>
				<refgrade>80%</grade>
			</reference>
			<reference>
				<userid>12</userid>
				<avatar><a href="#"><img src="/ecologikal/pictures/4e39d0ac405fa/profile_mini2.jpg"/></a></avatar>
				<username>Carlos Pérez Priego</username>
				<description>I think you are very skillFull</description>
				<refgrade>67%</grade>
			</reference>
			<reference>
				<userid>12</userid>
				<avatar><a href="#"><img src="/ecologikal/pictures/4e39d14f0baee/profile_mini2.jpg" /></a></avatar>
				<username>Alex Mass</username>
				<description>I think you are very skillFull in this area</description>
				<refgrade>90%</grade>
			</reference>
		</skill>
		<skill>
			<name>Test Skill Health</name>
			<grade>100%</grade>
			<description>This is just a test DescriptionThis is just a test DescriptionThis is just a test DescriptionThis is just a test Description<span id="showreferences">Show References (<refnumber>)</span></description>
			<reference>
				<userid>12</userid>
				<avatar><a href="#"><img src="/ecologikal/pictures/4e39d0ac405fa/profile_mini2.jpg"/></a></avatar>
				<username>Carlos Pérez Priego</username>
				<description>I think you are very skillFull</description>
				<refgrade>97%</grade>
			</reference>
			<reference>
				<userid>12</userid>
				<avatar><a href="#"><img src="/ecologikal/pictures/4e39d0ac405fa/profile_mini2.jpg"/></a></avatar>
				<username>Alex Mass</username>
				<description>I think you are very skillFull in this area</description>
				<refgrade>95%</grade>
			</reference>
		</skill>
		<skill>
			<name>Test Skill Health</name>
			<grade>100%</grade>
			<description>This is just a test DescriptionThis is just a test DescriptionThis is just a test DescriptionThis is just a test Description<span id="showreferences">Show References (<refnumber>)</span></description>
			<reference>
				<userid>12</userid>
				<avatar><a href="#"><img src="/ecologikal/pictures/4e39d0ac405fa/profile_mini2.jpg"/></a></avatar>
				<username>Carlos Pérez Priego</username>
				<description>I think you are very skillFull</description>
				<refgrade>97%</grade>
			</reference>
			<reference>
				<userid>12</userid>
				<avatar><a href="#"><img src="/ecologikal/pictures/4e39d0ac405fa/profile_mini2.jpg"/></a></avatar>
				<username>Alex Mass</username>
				<description>I think you are very skillFull in this area</description>
				<refgrade>95%</grade>
			</reference>
		</skill>
		<skill>
			<name>Test Skill 2</name>
			<grade>100%</grade>
			<description>This is just a test DescriptionThis is just a test DescriptionThis is just a test DescriptionThis is just a test Description<span id="showreferences">Show References (<refnumber>)</span></description>
			<reference>
				<userid>12</userid>
				<avatar><a href="#"><img src="/ecologikal/pictures/4e39d0ac405fa/profile_mini2.jpg"/></a></avatar>
				<username>Carlos Pérez Priego</username>
				<description>I think you are very skillFull</description>
				<refgrade>93%</grade>
			</reference>
		</skill>

	</div>
	<div id="p2" class = "communitygov">
		<petalicon></petalicon>
		<span id="petalName">Community Gov</span>	
		<span id="noSkills">10 skills</span>
		<span id="percSkills">100%</span>
		<skill>
			<name>Test Skill Comm</name>
			<grade>100%</grade>
			<description>This is just a test DescriptionThis is just a test DescriptionThis is just a test DescriptionThis is just a test Description<span id="showreferences">Show References (<refnumber>)</span></description>
			<reference>
				<userid>12</userid>
				<avatar><a href="#"><img src="/ecologikal/pictures/4e39d0ac405fa/profile_mini2.jpg"/></a></avatar>
				<username>Carlos Pérez Priego</username>
				<description>I think you are very skillFull</description>
				<refgrade>44%</grade>
			</reference>
			<reference>
				<userid>12</userid>
				<avatar><a href="#"><img src="/ecologikal/pictures/4e39d0ac405fa/profile_mini2.jpg"/></a></avatar>
				<username>Alex Mass</username>
				<description>I think you are very skillFull in this area</description>
				<refgrade>55%</grade>
			</reference>
		</skill>
		<skill>
			<name>Test Skill Health</name>
			<grade>100%</grade>
			<description>This is just a test DescriptionThis is just a test DescriptionThis is just a test DescriptionThis is just a test Description<span id="showreferences">Show References (<refnumber>)</span></description>
			<reference>
				<userid>12</userid>
				<avatar><a href="#"><img src="/ecologikal/pictures/4e39d0ac405fa/profile_mini2.jpg"/></a></avatar>
				<username>Carlos Pérez Priego</username>
				<description>I think you are very skillFull</description>
				<refgrade>97%</grade>
			</reference>
			<reference>
				<userid>12</userid>
				<avatar><a href="#"><img src="/ecologikal/pictures/4e39d0ac405fa/profile_mini2.jpg"/></a></avatar>
				<username>Alex Mass</username>
				<description>I think you are very skillFull in this area</description>
				<refgrade>95%</grade>
			</reference>
		</skill>		
	</div>
	<div id="p3" class = "finance">
		<petalicon></petalicon>
		<span id="petalName">Finance & Economics</span>	
		<span id="noSkills">10 skills</span>
		<span id="percSkills">100%</span>
		<skill>
			<name>Test Skill Finance</name>
			<grade>100%</grade>
			<description>This is just a test DescriptionThis is just a test DescriptionThis is just a test DescriptionThis is just a test Description<span id="showreferences">Show References (<refnumber>)</span></description>
			<reference>
				<userid>12</userid>
				<avatar><a href="#"><img src="/ecologikal/pictures/4e39d0ac405fa/profile_mini2.jpg"/></a></avatar>
				<username>Carlos Pérez Priego</username>
				<description>I think you are very skillFull</description>
				<refgrade>95%</grade>
			</reference>
			<reference>
				<userid>12</userid>
				<avatar><a href="#"><img src="/ecologikal/pictures/4e39d0ac405fa/profile_mini2.jpg"/></a></avatar>
				<username>Alex Mass</username>
				<description>I think you are very skillFull in this area</description>
				<refgrade>95%</grade>
			</reference>
		</skill>	
	</div> 
	<div id="p4" class = "land">
		<petalicon></petalicon>
		<span id="petalName">Land & Nature</span>	
		<span id="noSkills">10 skills</span>
		<span id="percSkills">100%</span>
		<skill>
			<name>Test Skill Land</name>
			<grade>100%</grade>
			<description>This is just a test DescriptionThis is just a test DescriptionThis is just a test DescriptionThis is just a test Description<span id="showreferences">Show References (<refnumber>)</span></description>
			<reference>
				<userid>12</userid>
				<avatar><a href="#"><img src="/ecologikal/pictures/4e39d0ac405fa/profile_mini2.jpg"/></a></avatar>
				<username>Carlos Pérez Priego</username>
				<description>I think you are very skillFull</description>
				<refgrade>90%</grade>
			</reference>
			<reference>
				<userid>12</userid>
				<avatar><a href="#"><img src="/ecologikal/pictures/4e39d0ac405fa/profile_mini2.jpg"/></a></avatar>
				<username>Alex Mass</username>
				<description>I think you are very skillFull in this area</description>
				<refgrade>75%</grade>
			</reference>
		</skill>
		<skill>
			<name>Test Skill Health</name>
			<grade>100%</grade>
			<description>This is just a test DescriptionThis is just a test DescriptionThis is just a test DescriptionThis is just a test Description<span id="showreferences">Show References (<refnumber>)</span></description>
			<reference>
				<userid>12</userid>
				<avatar><a href="#"><img src="/ecologikal/pictures/4e39d0ac405fa/profile_mini2.jpg"/></a></avatar>
				<username>Carlos Pérez Priego</username>
				<description>I think you are very skillFull</description>
				<refgrade>97%</grade>
			</reference>
			<reference>
				<userid>12</userid>
				<avatar><a href="#"><img src="/ecologikal/pictures/4e39d0ac405fa/profile_mini2.jpg"/></a></avatar>
				<username>Alex Mass</username>
				<description>I think you are very skillFull in this area</description>
				<refgrade>95%</grade>
			</reference>
		</skill>
		<skill>
			<name>Test Skill Health</name>
			<grade>100%</grade>
			<description>This is just a test DescriptionThis is just a test DescriptionThis is just a test DescriptionThis is just a test Description<span id="showreferences">Show References (<refnumber>)</span></description>
			<reference>
				<userid>12</userid>
				<avatar><a href="#"><img src="/ecologikal/pictures/4e39d0ac405fa/profile_mini2.jpg"/></a></avatar>
				<username>Carlos Pérez Priego</username>
				<description>I think you are very skillFull</description>
				<refgrade>97%</grade>
			</reference>
			<reference>
				<userid>12</userid>
				<avatar><a href="#"><img src="/ecologikal/pictures/4e39d0ac405fa/profile_mini2.jpg"/></a></avatar>
				<username>Alex Mass</username>
				<description>I think you are very skillFull in this area</description>
				<refgrade>95%</grade>
			</reference>
		</skill>	
	</div> 
	<div id="p5" class = "culture">
		<petalicon></petalicon>
		<span id="petalName">Culture & Education</span>	
		<span id="noSkills">10 skills</span>
		</span><span id="percSkills">100%</span>
		<skill>
			<name>Test Skill Culture</name>
			<grade>100%</grade>
			<description>This is just a test DescriptionThis is just a test DescriptionThis is just a test DescriptionThis is just a test Description<span id="showreferences">Show References (<refnumber>)</span></description>
			<reference>
				<userid>12</userid>
				<avatar><a href="#"><img src="/ecologikal/pictures/4e39d0ac405fa/profile_mini2.jpg"/></a></avatar>
				<username>Carlos Pérez Priego</username>
				<description>I think you are very skillFull</description>
				<refgrade>88%</grade>
			</reference>
			<reference>
				<userid>12</userid>
				<avatar><a href="#"><img src="/ecologikal/pictures/4e39d0ac405fa/profile_mini2.jpg"/></a></avatar>
				<username>Alex Mass</username>
				<description>I think you are very skillFull in this area</description>
				<refgrade>98%</grade>
			</reference>
		</skill>	
	</div>
	<div id="p6" class = "tools">
		<petalicon></petalicon>
		<span id="petalName">Tools & Technology</span>	
		<span id="noSkills">10 skills</span>
		<span id="percSkills">100%</span>
		<skill>
			<name>Test Skill Tools</name>
			<grade>100%</grade>
			<description>This is just a test DescriptionThis is just a test DescriptionThis is just a test DescriptionThis is just a test Description<span id="showreferences">Show References (<refnumber>)</span></description>
			<reference>
				<userid>12</userid>
				<avatar><a href="#"><img src="/ecologikal/pictures/4e39d0ac405fa/profile_mini2.jpg"/></a></avatar>	
				<username>Carlos Pérez Priego</username>
				<description>I think you are very skillFull</description>
				<refgrade>91%</grade>
			</reference>
			<reference>
				<userid>12</userid>
				<avatar><a href="#"><img src="/ecologikal/pictures/4e39d0ac405fa/profile_mini2.jpg"/></a></avatar>
				<username>Alex Mass</username>
				<description>I think you are very skillFull in this area</description>
				<refgrade>65%</grade>
			</reference>
		</skill>	
	</div> 
	<div id="p7" class = "health">
		<petalicon></petalicon>
		<span id="petalName">Health & Spirituality</span>	
		<span id="noSkills">10 skills</span>
		<span id="percSkills">100%</span>
		<skill>
			<name>Test Skill Health 1</name>
			<grade>100%</grade>
			<description>This is just a test DescriptionThis is just a test DescriptionThis is just a test DescriptionThis is just a test Description<span id="showreferences">Show References (<refnumber>)</span></description>
			<reference>
				<userid>12</userid>
				<avatar><a href="#"><img src="/ecologikal/pictures/4e39d0ac405fa/profile_mini2.jpg"/></a></avatar>
				<username>Carlos Pérez Priego</username>
				<description>I think you are very skillFull</description>
				<refgrade>97%</grade>
			</reference>
			<reference>
				<userid>12</userid>
				<avatar><a href="#"><img src="/ecologikal/pictures/4e39d0ac405fa/profile_mini2.jpg"/></a></avatar>
				<username>Alex Mass</username>
				<description>I think you are very skillFull in this area</description>
				<refgrade>95%</grade>
			</reference>
		</skill>
		<skill>
			<name>Test Skill Health 2</name>
			<grade>100%</grade>
			<description>This is just a test DescriptionThis is just a test DescriptionThis is just a test DescriptionThis is just a test Description<span id="showreferences">Show References (<refnumber>)</span></description>
			<reference>
				<userid>12</userid>
				<avatar><a href="#"><img src="/ecologikal/pictures/4e39d0ac405fa/profile_mini2.jpg"/></a></avatar>
				<username>Carlos Pérez Priego</username>
				<description>I think you are very skillFull</description>
				<refgrade>97%</grade>
			</reference>
			<reference>
				<userid>12</userid>
				<avatar><a href="#"><img src="/ecologikal/pictures/4e39d0ac405fa/profile_mini2.jpg"/></a></avatar>
				<username>Alex Mass</username>
				<description>I think you are very skillFull in this area</description>
				<refgrade>95%</grade>
			</reference>
		</skill>
		<skill>
			<name>Test Skill Health 3</name>
			<grade>100%</grade>
			<description>This is just a test DescriptionThis is just a test DescriptionThis is just a test DescriptionThis is just a test Description<span id="showreferences">Show References (<refnumber>)</span></description>
			<reference>
				<userid>12</userid>
				<avatar><a href="#"><img src="/ecologikal/pictures/4e39d0ac405fa/profile_mini2.jpg"/></a></avatar>
				<username>Carlos Pérez Priego</username>
				<description>I think you are very skillFull</description>
				<refgrade>97%</grade>
			</reference>
			<reference>
				<userid>12</userid>
				<avatar><a href="#"><img src="/ecologikal/pictures/4e39d0ac405fa/profile_mini2.jpg"/></a></avatar>
				<username>Alex Mass</username>
				<description>I think you are very skillFull in this area</description>
				<refgrade>95%</grade>
			</reference>
		</skill>
		<skill>
			<name>Test Skill Health 4</name>
			<grade>100%</grade>
			<description>This is just a test DescriptionThis is just a test DescriptionThis is just a test DescriptionThis is just a test Description<span id="showreferences">Show References (<refnumber>)</span></description>
			<reference>
				<userid>12</userid>
				<avatar><a href="#"><img src="/ecologikal/pictures/4e39d0ac405fa/profile_mini2.jpg"/></a></avatar>
				<username>Carlos Pérez Priego</username>
				<description>I think you are very skillFull</description>
				<refgrade>97%</grade>
			</reference>
			<reference>
				<userid>12</userid>
				<avatar><a href="#"><img src="/ecologikal/pictures/4e39d0ac405fa/profile_mini2.jpg"/></a></avatar>
				<username>Alex Mass</username>
				<description>I think you are very skillFull in this area</description>
				<refgrade>95%</grade>
			</reference>
		</skill>
		<skill>
			<name>Test Skill Health 5</name>
			<grade>100%</grade>
			<description>This is just a test DescriptionThis is just a test DescriptionThis is just a test DescriptionThis is just a test Description<span id="showreferences">Show References (<refnumber>)</span></description>
			<reference>
				<userid>12</userid>
				<avatar><a href="#"><img src="/ecologikal/pictures/4e39d0ac405fa/profile_mini2.jpg"/></a></avatar>
				<username>Carlos Pérez Priego</username>
				<description>I think you are very skillFull</description>
				<refgrade>97%</grade>
			</reference>
		</skill>	
	</div>
</flower>