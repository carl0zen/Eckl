<?php 	$view = 'maingame';
		include("header.php");
			
			$profiles = array(
								array('Name' => 'Isaac Garza', 			'ProfilePic' => _IMAGES_URL_.'profilepics/1.png'	, 'Ecopoints' => rand(0,2000)),
								array('Name' => 'Tiago Ruprecht', 		'ProfilePic' => _IMAGES_URL_.'profilepics/2.png'	, 'Ecopoints' => rand(0,2000)),
								array('Name' => 'Sergio García', 		'ProfilePic' => _IMAGES_URL_.'profilepics/3.png'	, 'Ecopoints' => rand(0,2000)),
								array('Name' => 'Pauline Schaeffer', 	'ProfilePic' => _IMAGES_URL_.'profilepics/4.png'	, 'Ecopoints' => rand(0,2000)),
								array('Name' => 'Pau Cz', 				'ProfilePic' => _IMAGES_URL_.'profilepics/5.png'	, 'Ecopoints' => rand(0,2000)),
								array('Name' => 'Diego Muñoz', 			'ProfilePic' => _IMAGES_URL_.'profilepics/6.png'	, 'Ecopoints' => rand(0,2000)),
								array('Name' => 'Karla Rubiano', 		'ProfilePic' => _IMAGES_URL_.'profilepics/7.png'	, 'Ecopoints' => rand(0,2000)),
								array('Name' => 'Emi Gonzalez', 		'ProfilePic' => _IMAGES_URL_.'profilepics/8.png'	, 'Ecopoints' => rand(0,2000)),
								array('Name' => 'Diego García', 		'ProfilePic' => _IMAGES_URL_.'profilepics/9.png'	, 'Ecopoints' => rand(0,2000)),
								array('Name' => 'Arliz Gutierrez', 		'ProfilePic' => _IMAGES_URL_.'profilepics/10.png'	, 'Ecopoints' => rand(0,2000)),
								array('Name' => 'Jesus de Anda', 		'ProfilePic' => _IMAGES_URL_.'profilepics/11.png'	, 'Ecopoints' => rand(0,2000)),
								array('Name' => 'Aline García', 		'ProfilePic' => _IMAGES_URL_.'profilepics/12.png'	, 'Ecopoints' => rand(0,2000)),
								array('Name' => 'Andrea Scheel', 		'ProfilePic' => _IMAGES_URL_.'profilepics/13.png'	, 'Ecopoints' => rand(0,2000)),
								array('Name' => 'Federico Halsband', 	'ProfilePic' => _IMAGES_URL_.'profilepics/14.png'	, 'Ecopoints' => rand(0,2000)),
								array('Name' => 'Felix Collado', 		'ProfilePic' => _IMAGES_URL_.'profilepics/15.png'	, 'Ecopoints' => rand(0,2000)),
								array('Name' => 'Carlos Mundalah', 		'ProfilePic' => _IMAGES_URL_.'profilepics/16.png'	, 'Ecopoints' => rand(0,2000)),
								array('Name' => 'Gaby Ork', 			'ProfilePic' => _IMAGES_URL_.'profilepics/17.png'	, 'Ecopoints' => rand(0,2000)),
								array('Name' => 'Alex Patiño', 			'ProfilePic' => _IMAGES_URL_.'profilepics/18.png'	, 'Ecopoints' => rand(0,2000)),
								array('Name' => 'Vivians Glicanti', 	'ProfilePic' => _IMAGES_URL_.'profilepics/19.png'	, 'Ecopoints' => rand(0,2000)),
								array('Name' => 'Xavier Padilla', 		'ProfilePic' => _IMAGES_URL_.'profilepics/20.png'	, 'Ecopoints' => rand(0,2000)),
								array('Name' => 'Carlos Pérez', 		'ProfilePic' => _IMAGES_URL_.'profilepics/21.png'	, 'Ecopoints' => rand(0,2000)),
								);
					$size = count($profiles)-1;
					$scs = array(
								array('Name' => 'Casa Semilla',								'ProfilePic' => _IMAGES_URL_.'scpics/1.png'	, 'Ecopoints' => rand(0,2000)),
								array('Name' => 'Ecovilla Ananda', 							'ProfilePic' => _IMAGES_URL_.'scpics/2.png'	, 'Ecopoints' => rand(0,2000)),
								array('Name' => 'Huehuecoyotl', 							'ProfilePic' => _IMAGES_URL_.'scpics/3.png'	, 'Ecopoints' => rand(0,2000)),
								array('Name' => 'Ecoaldea Feliz', 							'ProfilePic' => _IMAGES_URL_.'scpics/4.png'	, 'Ecopoints' => rand(0,2000)),
								array('Name' => 'Grupedsac', 								'ProfilePic' => _IMAGES_URL_.'scpics/5.png'	, 'Ecopoints' => rand(0,2000)),
								array('Name' => 'Bosque de Niebla', 						'ProfilePic' => _IMAGES_URL_.'scpics/6.png'	, 'Ecopoints' => rand(0,2000)),
								array('Name' => 'Tierra Turquesa', 							'ProfilePic' => _IMAGES_URL_.'scpics/7.png'	, 'Ecopoints' => rand(0,2000)),
								array('Name' => 'Badilisha Ecovillage Foundation Trust', 	'ProfilePic' => _IMAGES_URL_.'scpics/8.png'	, 'Ecopoints' => rand(0,2000)),
								array('Name' => 'Suderbyn Permaculture Ecovillage', 		'ProfilePic' => _IMAGES_URL_.'scpics/9.png'	, 'Ecopoints' => rand(0,2000)),
								array('Name' => 'Nashira Ecoaldea', 						'ProfilePic' => _IMAGES_URL_.'scpics/10.png'	, 'Ecopoints' => rand(0,2000)),
								array('Name' => 'Fondale', 									'ProfilePic' => _IMAGES_URL_.'scpics/11.png'	, 'Ecopoints' => rand(0,2000)),
								array('Name' => 'Eco Truly Park - Ecovillage', 				'ProfilePic' => _IMAGES_URL_.'scpics/12.png'	, 'Ecopoints' => rand(0,2000)),
								array('Name' => 'Bosque Village', 							'ProfilePic' => _IMAGES_URL_.'scpics/13.png'	, 'Ecopoints' => rand(0,2000)),
								array('Name' => 'Eco Yoga Park', 						'ProfilePic' => _IMAGES_URL_.'scpics/14.png'	, 'Ecopoints' => rand(0,2000)),
								array('Name' => 'Felix Collado', 							'ProfilePic' => _IMAGES_URL_.'scpics/15.png'	, 'Ecopoints' => rand(0,2000)),
								array('Name' => 'Carlos Mundalah', 							'ProfilePic' => _IMAGES_URL_.'scpics/16.png'	, 'Ecopoints' => rand(0,2000)),
								array('Name' => 'Gaby Ork', 								'ProfilePic' => _IMAGES_URL_.'scpics/17.png'	, 'Ecopoints' => rand(0,2000)),
								array('Name' => 'Alex Patiño', 								'ProfilePic' => _IMAGES_URL_.'scpics/18.png'	, 'Ecopoints' => rand(0,2000)),
								array('Name' => 'Vivians Glicanti', 						'ProfilePic' => _IMAGES_URL_.'scpics/19.png'	, 'Ecopoints' => rand(0,2000)),
								array('Name' => 'Xavier Padilla', 							'ProfilePic' => _IMAGES_URL_.'scpics/20.png'	, 'Ecopoints' => rand(0,2000)),
								array('Name' => 'Carlos Pérez', 							'ProfilePic' => _IMAGES_URL_.'scpics/21.png'	, 'Ecopoints' => rand(0,2000)),
							);
						$sizesc = count($scs)-1;
						$typeofcontent = array(
											array('Class' => 'member',	'Icon' => 'membericon'	),
											array('Class' => 'sustcenter',	'Icon' => 'sustcentericon'	),
											array('Class' => 'comment',	'Icon' => 'commenticon'	),
											array('Class' => 'article',	'Icon' => 'articleicon'	),
											array('Class' => 'event',	'Icon' => 'eventicon'	),
											array('Class' => 'workshop',	'Icon' => 'workshopicon'	),
											array('Class' => 'project',	'Icon' => 'projecticon'	),
											array('Class' => 'volunteering',	'Icon' => 'volunteeringicon'	),
											array('Class' => 'project',	'Icon' => 'commenticon'	),
						);
						$sizetypeofcont = count($typeofcontent)-1;
						//COMMENTS SECTION
						$comments = array(
								array('Text' => 'Este link esta buenísimo, porfavor postea más de este tipo, creo que para alcanzar la sustentabilidad es necesario tomar en cuenta estas técnicas. Este link esta buenísimo, porfavor postea más de este tipo, creo que para alcanzar la sustentabilidad es necesario tomar en cuenta estas técnicas',								'Kharma' => rand(0,100),		'Dharma' => rand(0,500)),
								array('Text' => 'Me gustaría mucho saber más acerca de este tema porfavor',								'Kharma' => rand(0,100),		'Dharma' => rand(0,500)),
								array('Text' => 'Creo que la mejor forma de hacer un impacto es aplicando técnicas como esta',								'Kharma' => rand(0,100),		'Dharma' => rand(0,500)),
								array('Text' => 'Interesantísima aportación, yo agregaría algunas cosas pero me parece que todo esta muy completo. Saludos',								'Kharma' => rand(0,100),		'Dharma' => rand(0,500)),
							);
						$sizecomm = count($comments)-1;
						$commentlinks = array(
								array('Link' => 'http://www.youtube.com/watch?v=ElprHYTcZEw', 'LinkDescription' => 'Green Building spoke with builders, architects, remodeling contractors and homeowners about their efforts towards energy self-sufficiency and building zero energy homes.'),
								array('Link' => 'http://www.youtube.com/watch?v=qMqGh1CnKcE', 'LinkDescription' => 'Stephane is a french man living in Crystal Waters searching for black organic Gold: SEEEDS. He also educates trees, shrubs. Hay Hay Hay for gardening. Enjoy a green trip.'),
						);
						$sizelinks = count($commentlinks)-1;
						$petals= array(
								array('Class' => 'pet1',		'Name'=>'Building',					'Color'=> 'red'),
								array('Class' => 'pet2',		'Name'=>'Community Governance',		'Color'=> 'orange'),
								array('Class' => 'pet3',		'Name'=>'Finance & Economics',		'Color'=> 'yellow'),
								array('Class' => 'pet4',		'Name'=>'Land & Nature',			'Color'=> 'green'),
								array('Class' => 'pet5',		'Name'=>'Culture & Education',		'Color'=> 'blue'),
								array('Class' => 'pet6',		'Name'=>'Tools & Technology',		'Color'=> 'indigo'),
								array('Class' => 'pet7',		'Name'=>'Health & Spirituality',	'Color'=> 'purple'),
						);
			?>
<game>
<content class="fullwidth">
	<ul class="filters">
		<div id="type">
		  	<li class="selected"><a class="tiptip all_filter"		 	href="#filter-type-any" data-filter="*" 			title="Show All"	>Show All</a></li>
		  	<li><a class="tiptip members_filter"		href="#filter-type-member" data-filter=".member"		title="Members"		>Members</a></li>
		  	<li><a class="tiptip sustcenter_filter"		href="#filter-type-sustcenter" data-filter=".sustcenter"	title="Sustainable Centers"   >Sustainable Centers</a></li>
			<li><a class="tiptip comment_filter"		href="#filter-type-comment" data-filter=".comment"		title="Comments"   >Comments</a></li>
			<li><a class="tiptip article_filter"		href="#filter-type-article" data-filter=".article"		title="Articles">Articles</a></li>
		  	<li><a class="tiptip event_filter"	    	href="#filter-type-event" data-filter=".event"		title="Events">Events</a></li>
		  	<li><a class="tiptip project_filter"		href="#filter-type-project" data-filter=".project"		title="Projects">Projects</a></li>
			<li><a class="tiptip workshop_filter"		href="#filter-type-workshop" data-filter=".workshop"	title="Workshops">Workshops</a></li>
		  	<li><a class="tiptip volunteer_filter" 		href="#filter-type-volunteering" data-filter=".volunteering"title="Volunteer Vacancies">Volunteer Vacancies</a></li>
		</div>
		<div id="category">
		 	<li><a class="tiptip building_filter"	  	href="#filter-cat-pet1" data-filter=".pet1"		title="Building">Building</a></li>
		 	<li><a class="tiptip communitygov_filter"	href="#filter-cat-pet2" data-filter=".pet2"		title="Community Governance">Community Governance</a></li>
		 	<li><a class="tiptip finance_filter"	  	href="#filter-cat-pet3" data-filter=".pet3"		title="Finance& Economics">Finance & Economics</a></li>
		 	<li><a class="tiptip land_filter"		  	href="#filter-cat-pet4" data-filter=".pet4"		title="Land & Nature">Land & Nature</a></li>
		 	<li><a class="tiptip culture_filter"	  	href="#filter-cat-pet5" data-filter=".pet5"		title="Culture & Education">Culture & Education</a></li>
		 	<li><a class="tiptip tools_filter"	     	href="#filter-cat-pet6" data-filter=".pet6"		title="Tools & Technology">Tools & Tech</a></li>
			<li><a class="tiptip health_filter"	  		href="#filter-cat-pet7" data-filter=".pet7"		title="Health & Spirituality">Health & Spirituality</a></li>
		</div>
	</ul><!--Filters-->
	<div id="sort">
		<ul id="sort-by">
		  	<li><a class="popularity selected" href="#rp">Popularity</a></li>
			<li><a class="dateadded" href="#date">Date Added</a></li>
		</ul>

		<ul id="sort-direction" class="option-set clearfix" data-option-key="sortAscending">
			<li><a href="#sortAscending=false" data-option-value="false" class="descending selected">Most Popular</a></li>
		    <li><a href="#sortAscending=true" data-option-value="true" class="ascending">Least Popular</a></li>
		      
		</ul>
	</div><!-- Sort -->
	<div id="container">
		<!--Displays content depending the array of elements-->
		<?php
		for($y=0;$y<$noelements;$y++){
			$randpetal = rand(0,6);
			$randpetalclass = $petals[$randpetal]['Class'];
			$randtype = rand(0,8);   
			$randtypeclass = $typeofcontent[$randtype]['Class']; ?>
	
			<?php
			if($randtypeclass == 'member'){ ?>
			<div class="element <?php  echo $randtypeclass .' '. $randpetalclass; ?> ">
				<div class="icon <?php echo $typeofcontent[$randtype]['Icon']; ?>"></div>
		
				<div id="memberpic"><img src="<?php $rand = rand(0,$size); echo $profiles[$rand]['ProfilePic'] ?>"></div>
				<div id="titlecontainer">"Net Zero Homes - A Journey Toward Energy Self-Sufficiency <a href="http://goo.gl/2SvM9" target="_blank">http://goo.gl/2SvM9</a>"</div>
				<div id="content">
					<div id="link">
						<span class="linkimage">
							<a class="video" href="http://www.youtube.com/watch?v=ElprHYTcZEw?fs=1&amp;autoplay=1" title="Net Zero Homes - A Journey Toward Energy Self-Sufficiency"><img src="http://i2.ytimg.com/vi/ElprHYTcZEw/default.jpg" ></a>
						</span>
						<p class="linkdescription">
							Green Building spoke with builders, architects, remodeling contractors and homeowners about their efforts towards energy self-sufficiency and building zero energy homes.
						</p>
					</div><!-- Link -->
					<div id="commentsection">
						<?php for($x=0; $x < rand(0,50); $x++){?>
						<div class="comment">
							<a href="#"><memberavatar><img src="<?php $rand = rand(0,$size); echo $profiles[$rand]['ProfilePic']; ?>"></memberavatar> <?php echo $profiles[$rand]['Name'] ?></a> said:
							<p><?php echo $comments[rand(0,$sizecomm)]['Text']?></p>
							<div id="reactionpoints">
								<div class="dharma"></div>
								<div class="karma"></div>
							</div>
						</div>
						<?php }?>
					</div><!--Comment Section-->
			
				</div><!-- Content -->
				<div id="box">
					<div class="boxcontent">
						<div class="rp"><span class="val"><?php echo rand(1000,2000); ?></span><span class="thumb"></span></div>
						<div class="date"><span class="timestamp hidden"><?php echo $date = rand(1262055681,1318605196); ?></span> <?php echo date("M d Y", $date);?></div>
						<span class="membername"><a href="#"><?php echo $profiles[$rand]['Name'] ?></a></span>
						<span class="type web"></span>
						<div id="commentbutton" class="<?php echo $petals[$randpetal]['Color']; ?>_bg">Comment</div>
						<span class="nocomments"><?php echo $x; ?> comments</span>
					</div>
				</div><!-- box-->
			</div> <!-- element-->
			<?php } //END IF MEMBER ?>
			<?php
			if($randtypeclass == 'sustcenter'){ ?>
			<div class="element <?php  echo $randtypeclass .' '. $randpetalclass; ?> ">
				<div class="icon <?php echo $typeofcontent[$randtype]['Icon']; ?>"></div>
		
				<div id="memberpic"><img src="<?php $rand = rand(0,$size); echo $profiles[$rand]['ProfilePic'] ?>"></div>
				<div id="titlecontainer">"Net Zero Homes - A Journey Toward Energy Self-Sufficiency <a href="http://goo.gl/2SvM9" target="_blank">http://goo.gl/2SvM9</a>"</div>
				<div id="content">
					<div id="link">
						<span class="linkimage">
							<a class="video" href="http://www.youtube.com/watch?v=ElprHYTcZEw?fs=1&amp;autoplay=1" title="Net Zero Homes - A Journey Toward Energy Self-Sufficiency"><img src="http://i2.ytimg.com/vi/ElprHYTcZEw/default.jpg" ></a>
						</span>
						<p class="linkdescription">
							Green Building spoke with builders, architects, remodeling contractors and homeowners about their efforts towards energy self-sufficiency and building zero energy homes.
						</p>
					</div><!-- Link -->
					<div id="commentsection">
						<?php for($x=0; $x < rand(0,50); $x++){?>
						<div class="comment">
							<a href="#"><memberavatar><img src="<?php $rand = rand(0,$size); echo $profiles[$rand]['ProfilePic']; ?>"></memberavatar> <?php echo $profiles[$rand]['Name'] ?></a> said:
							<p><?php echo $comments[rand(0,$sizecomm)]['Text']?></p>
							<div id="reactionpoints">
								<div class="dharma"></div>
								<div class="karma"></div>
							</div>
						</div>
						<?php }?>
					</div><!--Comment Section-->
			
				</div><!-- Content -->
				<div id="box">
					<div class="boxcontent">
						<div class="rp"><span class="val"><?php echo rand(1000,2000); ?></span><span class="thumb"></span></div>
						<div class="date"><span class="timestamp hidden"><?php echo $date = rand(1262055681,1318605196); ?></span> <?php echo date("M d Y", $date);?></div>
						<span class="membername"><a href="#"><?php echo $profiles[$rand]['Name'] ?></a></span>
						<span class="type web"></span>
						<div id="commentbutton" class="<?php echo $petals[$randpetal]['Color']; ?>_bg">Comment</div>
						<span class="nocomments"><?php echo $x; ?> comments</span>
					</div>
				</div><!-- box-->
			</div> <!-- element-->
			<?php } //END IF SUSTCENT ?>
			<?php
			if($randtypeclass == 'comment'){ ?>
			<div class="element <?php  echo $randtypeclass .' '. $randpetalclass; ?> ">
				<div class="icon <?php echo $typeofcontent[$randtype]['Icon']; ?>"></div>
		
				<div id="memberpic"><img src="<?php $rand = rand(0,$size); echo $profiles[$rand]['ProfilePic'] ?>"></div>
				<div id="titlecontainer">"Net Zero Homes - A Journey Toward Energy Self-Sufficiency <a href="http://goo.gl/2SvM9" target="_blank">http://goo.gl/2SvM9</a>"</div>
				<div id="content">
					<div id="link">
						<span class="linkimage">
							<a class="video" href="http://www.youtube.com/watch?v=ElprHYTcZEw?fs=1&amp;autoplay=1" title="Net Zero Homes - A Journey Toward Energy Self-Sufficiency"><img src="http://i2.ytimg.com/vi/ElprHYTcZEw/default.jpg" ></a>
						</span>
						<p class="linkdescription">
							Green Building spoke with builders, architects, remodeling contractors and homeowners about their efforts towards energy self-sufficiency and building zero energy homes.
						</p>
					</div><!-- Link -->
					<div id="commentsection">
						<?php for($x=0; $x < rand(0,50); $x++){?>
						<div class="comment">
							<a href="#"><memberavatar><img src="<?php $rand = rand(0,$size); echo $profiles[$rand]['ProfilePic']; ?>"></memberavatar> <?php echo $profiles[$rand]['Name'] ?></a> said:
							<p><?php echo $comments[rand(0,$sizecomm)]['Text']?></p>
							<div id="reactionpoints">
								<div class="dharma"></div>
								<div class="karma"></div>
							</div>
						</div>
						<?php }?>
					</div><!--Comment Section-->
			
				</div><!-- Content -->
				<div id="box">
					<div class="boxcontent">
						<div class="rp"><span class="val"><?php echo rand(1000,2000); ?></span><span class="thumb"></span></div>
						<div class="date"><span class="timestamp hidden"><?php echo $date = rand(1262055681,1318605196); ?></span> <?php echo date("M d Y", $date);?></div>
						<span class="membername"><a href="#"><?php echo $profiles[$rand]['Name'] ?></a></span>
						<span class="type web"></span>
						<div id="commentbutton" class="<?php echo $petals[$randpetal]['Color']; ?>_bg">Comment</div>
						<span class="nocomments"><?php echo $x; ?> comments</span>
					</div>
				</div><!-- box-->
			</div> <!-- element-->
			<?php } //END IF COMMENT ?>
			<?php
			if($randtypeclass == 'article'){ ?>
			<div class="element <?php  echo $randtypeclass .' '. $randpetalclass; ?> ">
				<div class="icon <?php echo $typeofcontent[$randtype]['Icon']; ?>"></div>
		
				<div id="memberpic"><img src="<?php $rand = rand(0,$size); echo $profiles[$rand]['ProfilePic'] ?>"></div>
				<div id="titlecontainer">"Net Zero Homes - A Journey Toward Energy Self-Sufficiency <a href="http://goo.gl/2SvM9" target="_blank">http://goo.gl/2SvM9</a>"</div>
				<div id="content">
					<div id="link">
						<span class="linkimage">
							<a class="video" href="http://www.youtube.com/watch?v=ElprHYTcZEw?fs=1&amp;autoplay=1" title="Net Zero Homes - A Journey Toward Energy Self-Sufficiency"><img src="http://i2.ytimg.com/vi/ElprHYTcZEw/default.jpg" ></a>
						</span>
						<p class="linkdescription">
							Green Building spoke with builders, architects, remodeling contractors and homeowners about their efforts towards energy self-sufficiency and building zero energy homes.
						</p>
					</div><!-- Link -->
					<div id="commentsection">
						<?php for($x=0; $x < rand(0,50); $x++){?>
						<div class="comment">
							<a href="#"><memberavatar><img src="<?php $rand = rand(0,$size); echo $profiles[$rand]['ProfilePic']; ?>"></memberavatar> <?php echo $profiles[$rand]['Name'] ?></a> said:
							<p><?php echo $comments[rand(0,$sizecomm)]['Text']?></p>
							<div id="reactionpoints">
								<div class="dharma"></div>
								<div class="karma"></div>
							</div>
						</div>
						<?php }?>
					</div><!--Comment Section-->
			
				</div><!-- Content -->
				<div id="box">
					<div class="boxcontent">
						<div class="rp"><span class="val"><?php echo rand(1000,2000); ?></span><span class="thumb"></span></div>
						<div class="date"><span class="timestamp hidden"><?php echo $date = rand(1262055681,1318605196); ?></span> <?php echo date("M d Y", $date);?></div>
						<span class="membername"><a href="#"><?php echo $profiles[$rand]['Name'] ?></a></span>
						<span class="type web"></span>
						<div id="commentbutton" class="<?php echo $petals[$randpetal]['Color']; ?>_bg">Comment</div>
						<span class="nocomments"><?php echo $x; ?> comments</span>
					</div>
				</div><!-- box-->
			</div> <!-- element-->
			<?php } //END IF ARTICLE ?>
			<?php
			if($randtypeclass == 'event'){ ?>
			<div class="element <?php  echo $randtypeclass .' '. $randpetalclass; ?> ">
				<div class="icon <?php echo $typeofcontent[$randtype]['Icon']; ?>"></div>
		
				<div id="memberpic"><img src="<?php $rand = rand(0,$size); echo $profiles[$rand]['ProfilePic'] ?>"></div>
				<div id="titlecontainer">"Net Zero Homes - A Journey Toward Energy Self-Sufficiency <a href="http://goo.gl/2SvM9" target="_blank">http://goo.gl/2SvM9</a>"</div>
				<div id="content">
					<div id="link">
						<span class="linkimage">
							<a class="video" href="http://www.youtube.com/watch?v=ElprHYTcZEw?fs=1&amp;autoplay=1" title="Net Zero Homes - A Journey Toward Energy Self-Sufficiency"><img src="http://i2.ytimg.com/vi/ElprHYTcZEw/default.jpg" ></a>
						</span>
						<p class="linkdescription">
							Green Building spoke with builders, architects, remodeling contractors and homeowners about their efforts towards energy self-sufficiency and building zero energy homes.
						</p>
					</div><!-- Link -->
					<div id="commentsection">
						<?php for($x=0; $x < rand(0,50); $x++){?>
						<div class="comment">
							<a href="#"><memberavatar><img src="<?php $rand = rand(0,$size); echo $profiles[$rand]['ProfilePic']; ?>"></memberavatar> <?php echo $profiles[$rand]['Name'] ?></a> said:
							<p><?php echo $comments[rand(0,$sizecomm)]['Text']?></p>
							<div id="reactionpoints">
								<div class="dharma"></div>
								<div class="karma"></div>
							</div>
						</div>
						<?php }?>
					</div><!--Comment Section-->
			
				</div><!-- Content -->
				<div id="box">
					<div class="boxcontent">
						<div class="rp"><span class="val"><?php echo rand(1000,2000); ?></span><span class="thumb"></span></div>
						<div class="date"><span class="timestamp hidden"><?php echo $date = rand(1262055681,1318605196); ?></span> <?php echo date("M d Y", $date);?></div>
						<span class="membername"><a href="#"><?php echo $profiles[$rand]['Name'] ?></a></span>
						<span class="type web"></span>
						<div id="commentbutton" class="<?php echo $petals[$randpetal]['Color']; ?>_bg">Comment</div>
						<span class="nocomments"><?php echo $x; ?> comments</span>
					</div>
				</div><!-- box-->
			</div> <!-- element-->
			<?php } //END IF EVENT ?>
			<?php
			if($randtypeclass == 'project'){ ?>
			<div class="element <?php  echo $randtypeclass .' '. $randpetalclass; ?> ">
				<div class="icon <?php echo $typeofcontent[$randtype]['Icon']; ?>"></div>
		
				<div id="memberpic"><img src="<?php $rand = rand(0,$size); echo $profiles[$rand]['ProfilePic'] ?>"></div>
				<div id="titlecontainer">"Net Zero Homes - A Journey Toward Energy Self-Sufficiency <a href="http://goo.gl/2SvM9" target="_blank">http://goo.gl/2SvM9</a>"</div>
				<div id="content">
					<div id="link">
						<span class="linkimage">
							<a class="video" href="http://www.youtube.com/watch?v=ElprHYTcZEw?fs=1&amp;autoplay=1" title="Net Zero Homes - A Journey Toward Energy Self-Sufficiency"><img src="http://i2.ytimg.com/vi/ElprHYTcZEw/default.jpg" ></a>
						</span>
						<p class="linkdescription">
							Green Building spoke with builders, architects, remodeling contractors and homeowners about their efforts towards energy self-sufficiency and building zero energy homes.
						</p>
					</div><!-- Link -->
					<div id="commentsection">
						<?php for($x=0; $x < rand(0,50); $x++){?>
						<div class="comment">
							<a href="#"><memberavatar><img src="<?php $rand = rand(0,$size); echo $profiles[$rand]['ProfilePic']; ?>"></memberavatar> <?php echo $profiles[$rand]['Name'] ?></a> said:
							<p><?php echo $comments[rand(0,$sizecomm)]['Text']?></p>
							<div id="reactionpoints">
								<div class="dharma"></div>
								<div class="karma"></div>
							</div>
						</div>
						<?php }?>
					</div><!--Comment Section-->
			
				</div><!-- Content -->
				<div id="box">
					<div class="boxcontent">
						<div class="rp"><span class="val"><?php echo rand(1000,2000); ?></span><span class="thumb"></span></div>
						<div class="date"><span class="timestamp hidden"><?php echo $date = rand(1262055681,1318605196); ?></span> <?php echo date("M d Y", $date);?></div>
						<span class="membername"><a href="#"><?php echo $profiles[$rand]['Name'] ?></a></span>
						<span class="type web"></span>
						<div id="commentbutton" class="<?php echo $petals[$randpetal]['Color']; ?>_bg">Comment</div>
						<span class="nocomments"><?php echo $x; ?> comments</span>
					</div>
				</div><!-- box-->
			</div> <!-- element-->
			<?php } //END IF PROJECT ?>
			<?php
			if($randtypeclass == 'workshop'){ ?>
			<div class="element <?php  echo $randtypeclass .' '. $randpetalclass; ?> ">
				<div class="icon <?php echo $typeofcontent[$randtype]['Icon']; ?>"></div>
		
				<div id="memberpic"><img src="<?php $rand = rand(0,$size); echo $profiles[$rand]['ProfilePic'] ?>"></div>
				<div id="titlecontainer">"Net Zero Homes - A Journey Toward Energy Self-Sufficiency <a href="http://goo.gl/2SvM9" target="_blank">http://goo.gl/2SvM9</a>"</div>
				<div id="content">
					<div id="link">
						<span class="linkimage">
							<a class="video" href="http://www.youtube.com/watch?v=ElprHYTcZEw?fs=1&amp;autoplay=1" title="Net Zero Homes - A Journey Toward Energy Self-Sufficiency"><img src="http://i2.ytimg.com/vi/ElprHYTcZEw/default.jpg" ></a>
						</span>
						<p class="linkdescription">
							Green Building spoke with builders, architects, remodeling contractors and homeowners about their efforts towards energy self-sufficiency and building zero energy homes.
						</p>
					</div><!-- Link -->
					<div id="commentsection">
						<?php for($x=0; $x < rand(0,50); $x++){?>
						<div class="comment">
							<a href="#"><memberavatar><img src="<?php $rand = rand(0,$size); echo $profiles[$rand]['ProfilePic']; ?>"></memberavatar> <?php echo $profiles[$rand]['Name'] ?></a> said:
							<p><?php echo $comments[rand(0,$sizecomm)]['Text']?></p>
							<div id="reactionpoints">
								<div class="dharma"></div>
								<div class="karma"></div>
							</div>
						</div>
						<?php }?>
					</div><!--Comment Section-->
			
				</div><!-- Content -->
				<div id="box">
					<div class="boxcontent">
						<div class="rp"><span class="val"><?php echo rand(1000,2000); ?></span><span class="thumb"></span></div>
						<div class="date"><span class="timestamp hidden"><?php echo $date = rand(1262055681,1318605196); ?></span> <?php echo date("M d Y", $date);?></div>
						<span class="membername"><a href="#"><?php echo $profiles[$rand]['Name'] ?></a></span>
						<span class="type web"></span>
						<div id="commentbutton" class="<?php echo $petals[$randpetal]['Color']; ?>_bg">Comment</div>
						<span class="nocomments"><?php echo $x; ?> comments</span>
					</div>
				</div><!-- box-->
			</div> <!-- element-->
			<?php } //END IF WORKSHOP ?>
			<?php
			if($randtypeclass == 'volunteering'){ ?>
			<div class="element <?php  echo $randtypeclass .' '. $randpetalclass; ?> ">
				<div class="icon <?php echo $typeofcontent[$randtype]['Icon']; ?>"></div>
		
				<div id="memberpic"><img src="<?php $rand = rand(0,$size); echo $profiles[$rand]['ProfilePic'] ?>"></div>
				<div id="titlecontainer">"Net Zero Homes - A Journey Toward Energy Self-Sufficiency <a href="http://goo.gl/2SvM9" target="_blank">http://goo.gl/2SvM9</a>"</div>
				<div id="content">
					<div id="link">
						<span class="linkimage">
							<a class="video" href="http://www.youtube.com/watch?v=ElprHYTcZEw?fs=1&amp;autoplay=1" title="Net Zero Homes - A Journey Toward Energy Self-Sufficiency"><img src="http://i2.ytimg.com/vi/ElprHYTcZEw/default.jpg" ></a>
						</span>
						<p class="linkdescription">
							Green Building spoke with builders, architects, remodeling contractors and homeowners about their efforts towards energy self-sufficiency and building zero energy homes.
						</p>
					</div><!-- Link -->
					<div id="commentsection">
						<?php for($x=0; $x < rand(0,50); $x++){?>
						<div class="comment">
							<a href="#"><memberavatar><img src="<?php $rand = rand(0,$size); echo $profiles[$rand]['ProfilePic']; ?>"></memberavatar> <?php echo $profiles[$rand]['Name'] ?></a> said:
							<p><?php echo $comments[rand(0,$sizecomm)]['Text']?></p>
							<div id="reactionpoints">
								<div class="dharma"></div>
								<div class="karma"></div>
							</div>
						</div>
						<?php }?>
					</div><!--Comment Section-->
			
				</div><!-- Content -->
				<div id="box">
					<div class="boxcontent">
						<div class="rp"><span class="val"><?php echo rand(1000,2000); ?></span><span class="thumb"></span></div>
						<div class="date"><span class="timestamp hidden"><?php echo $date = rand(1262055681,1318605196); ?></span> <?php echo date("M d Y", $date);?></div>
						<span class="membername"><a href="#"><?php echo $profiles[$rand]['Name'] ?></a></span>
						<span class="type web"></span>
						<div id="commentbutton" class="<?php echo $petals[$randpetal]['Color']; ?>_bg">Comment</div>
						<span class="nocomments"><?php echo $x; ?> comments</span>
					</div>
				</div><!-- box-->
			</div> <!-- element-->
			<?php } //END IF VOLUNTEERING ?>
		<?php } //END FOR CICLE FOR ELEMENT DISPLAY?>
	</div><!--container-->
</content>