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
							$size = 20;
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
						$sizesc = 20;
						$comments = array(
								array('Text' => 'Este link esta buenísimo, porfavor postea más de este tipo, creo que para alcanzar la sustentabilidad es necesario tomar en cuenta estas técnicas. Este link esta buenísimo, porfavor postea más de este tipo, creo que para alcanzar la sustentabilidad es necesario tomar en cuenta estas técnicas',								'Kharma' => rand(0,100),		'Dharma' => rand(0,500)),
								array('Text' => 'Me gustaría mucho saber más acerca de este tema porfavor',								'Kharma' => rand(0,100),		'Dharma' => rand(0,500)),
								array('Text' => 'Creo que la mejor forma de hacer un impacto es aplicando técnicas como esta',								'Kharma' => rand(0,100),		'Dharma' => rand(0,500)),
								array('Text' => 'Interesantísima aportación, yo agregaría algunas cosas pero me parece que todo esta muy completo. Saludos',								'Kharma' => rand(0,100),		'Dharma' => rand(0,500)),
							);
						$sizecomm = 3;
						$links = array(
								array('Link' => 'http://www.youtube.com/watch?v=ElprHYTcZEw', 'LinkDescription' => 'Green Building spoke with builders, architects, remodeling contractors and homeowners about their efforts towards energy self-sufficiency and building zero energy homes.'),
								array('Link' => 'http://www.youtube.com/watch?v=qMqGh1CnKcE', 'LinkDescription' => 'Stephane is a french man living in Crystal Waters searching for black organic Gold: SEEEDS. He also educates trees, shrubs. Hay Hay Hay for gardening. Enjoy a green trip.'),
						);
						$sizelinks = 1;
			?>
<game>
<content class="fullwidth">
<h1>Play the Game! </h1>
<ul class="filters">
	<h3>Filter by Type</h3>
  	<li><a class="tiptip all_filter"		 	href="#" data-filter="*" 			title="Show All"	>Show All</a></li>
  	<li><a class="tiptip members_filter"		href="#" data-filter=".member"		title="Members"		>Members</a></li>
  	<li><a class="tiptip sustcenter_filter"		href="#" data-filter=".sustcenter"	title="Sustainable Centers"   >Sustainable Centers</a></li>
	<li><a class="tiptip comment_filter"		href="#" data-filter=".comment"		title="Comments"   >Comments</a></li>
	<li><a class="tiptip article_filter"		href="#" data-filter=".article"		title="Articles">Articles</a></li>
  	<li><a class="tiptip event_filter"	    	href="#" data-filter=".event"		title="Events">Events</a></li>
  	<li><a class="tiptip project_filter"		href="#" data-filter=".project"		title="Projects">Projects</a></li>
	<li><a class="tiptip workshop_filter"		href="#" data-filter=".workshop"	title="Workshops">Workshops</a></li>
  	<li><a class="tiptip volunteer_filter" 		href="#" data-filter=".volunteering"	title="Volunteer Vacancies">Volunteer Vacancies</a></li>
	<h3>Filter by category</h3>
 	<li><a class="tiptip building_filter"	  	href="#" data-filter=".pet1"		title="Building">Building</a></li>
 	<li><a class="tiptip communitygov_filter"	href="#" data-filter=".pet2"		title="Community Governance">Community Governance</a></li>
 	<li><a class="tiptip finance_filter"	  	href="#" data-filter=".pet3"		title="Finance& Economics">Finance & Economics</a></li>
 	<li><a class="tiptip land_filter"		  	href="#" data-filter=".pet4"		title="Land & Nature">Land & Nature</a></li>
 	<li><a class="tiptip culture_filter"	  	href="#" data-filter=".pet5"		title="Culture & Education">Culture & Education</a></li>
 	<li><a class="tiptip tools_filter"	     	href="#" data-filter=".pet6"		title="Tools & Technology">Tools & Tech</a></li>
		<li><a class="tiptip health_filter"	  	href="#" data-filter=".pet7"			title="Health & Spirituality">Health & Spirituality</a></li>
</ul>
<ul id="sort-by">
	<h3>Sort By</h3>
  	<li><a href="#rp">Popularity</a></li>
	<li><a href="#date">Date</a></li>
</ul>

<ul id="sort-direction" class="option-set clearfix" data-option-key="sortAscending">
	<h3>Sort Direction</h3>
      <li><a href="#sortAscending=true" data-option-value="true" class="">sort ascending</a></li>
      <li><a href="#sortAscending=false" data-option-value="false" class="selected">sort descending</a></li>
</ul>

<div id="container">
	<div class="element comment pet1">
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
				<span class="nocomments"><?php echo $x; ?> comments</span>
			</div>
		</div>
		
	</div>
	<div class="element comment pet2">
		<div id="memberpic"><img src="<?php $rand = rand(0,$size); echo $profiles[$rand]['ProfilePic'] ?>"></div>
		<div id="titlecontainer">"All is full of love, you are here to see it"</div>
		<div id="box">
			<div class="boxcontent">
				<div class="rp"><span class="val"><?php echo rand(1000,2000); ?></span><span class="thumb"></span></div>
				<div class="date"><span class="timestamp hidden"><?php echo $date = rand(1262055681,1318605196); ?></span> <?php echo date("M d Y", $date);?></div>
				<span class="membername"><a href="#"><?php echo $profiles[$rand]['Name'] ?></a></span>
			</div>
		</div>
		<div id="content">
			<a href="http://www.youtube.com/watch?v=ElprHYTcZEw?iframe"></a>
		</div>
	</div>
	<div class="element comment pet2">
		<div id="memberpic"><img src="<?php $rand = rand(0,$size); echo $profiles[$rand]['ProfilePic'] ?>"></div>
		<div id="titlecontainer">"Close your eyes, feel the light of your life, flowing like a never ending circle in the stream of time"</div>
		<div id="box">
			<div class="boxcontent">
				<div class="rp"><span class="val"><?php echo rand(1000,2000); ?></span><span class="thumb"></span></div>
				<div class="date"><span class="timestamp hidden"><?php echo $date = rand(1262055681,1318605196); ?></span> <?php echo date("M d Y", $date);?></div>

				<span class="membername"><a href="#"><?php echo $profiles[$rand]['Name'] ?></a></span>
			</div>
		</div>
		<div id="content">
			This is the content area
		</div>
	</div>
	<div class="element comment pet2">
		<div id="memberpic"><img src="<?php $rand = rand(0,$size); echo $profiles[$rand]['ProfilePic'] ?>"></div>
		<div id="titlecontainer">"Just hit me with the loop of eternal clarity, true wisdom arises when you know how to breath consciously"</div>
		
		<div id="box">
			<div class="boxcontent">
				<div class="rp"><span class="val"><?php echo rand(1000,2000); ?></span><span class="thumb"></span></div>
				<div class="date"><span class="timestamp hidden"><?php echo $date = rand(1262055681,1318605196); ?></span> <?php echo date("M d Y", $date);?></div>
				<span class="membername"><a href="#"><?php echo $profiles[$rand]['Name'] ?></a></span>
			</div>
		</div>
		<div id="content">
			This is the content area
		</div>
	</div>
	<div class="element comment pet2">
		<div id="memberpic"><img src="<?php $rand = rand(0,$size); echo $profiles[$rand]['ProfilePic'] ?>"></div>
		<div id="titlecontainer">"Everything is everything around"</div>
		<div id="box">
			<div class="boxcontent">
				<div class="rp"><span class="val"><?php echo rand(1000,2000); ?></span><span class="thumb"></span></div>
				<div class="date"><span class="timestamp hidden"><?php echo $date = rand(1262055681,1318605196); ?></span> <?php echo date("M d Y", $date);?></div>
				<span class="membername"><a href="#"><?php echo $profiles[$rand]['Name'] ?></a></span>
			</div>
		</div>
		<div id="content">
			This is the content area
		</div>
	</div>
	<div class="element article pet1">
		<div id="memberpic"><img src="<?php $rand = rand(0,$size); echo $profiles[$rand]['ProfilePic'] ?>"></div>
		<div class="article">Article 1</div>
		<div id="box">
			<div class="boxcontent">
				<div class="rp"><span class="val"><?php echo rand(1000,2000); ?></span><span class="thumb"></span></div>
				<div class="date"><span class="timestamp hidden"><?php echo $date = rand(1262055681,1318605196); ?></span> <?php echo date("M d Y", $date);?></div>
				<span class="membername"><a href="#"><?php echo $profiles[$rand]['Name'] ?></a></span>
			</div>
		</div>
		<div id="content">
			This is the content area
		</div>
	</div>
	<div class="element member pet5">
		<div id="memberpic"><img src="<?php $rand = rand(0,$size); echo $profiles[$rand]['ProfilePic'] ?>"></div>
		<div class="member">Member 1</div>
		<div id="box">
			<div class="boxcontent">
				<div class="rp"><span class="val"><?php echo rand(1000,2000); ?></span><span class="thumb"></span></div>
				<div class="date"><span class="timestamp hidden"><?php echo $date = rand(1262055681,1318605196); ?></span> <?php echo date("M d Y", $date);?></div>
				<span class="membername"><a href="#"><?php echo $profiles[$rand]['Name'] ?></a></span>
			</div>
		</div>
		<div id="content">
			This is the content area
		</div>
	</div>
	<div class="element sustcenter pet4">
		<div id="memberpic"><img src="<?php $rand = rand(0,$size); echo $profiles[$rand]['ProfilePic'] ?>"></div>
		<div class="sustcenter">Sustainable Center 1</div>
		<div id="box">
			<div class="boxcontent">
				<div class="rp"><span class="val"><?php echo rand(1000,2000); ?></span><span class="thumb"></span></div>
				<div class="date"><span class="timestamp hidden"><?php echo $date = rand(1262055681,1318605196); ?></span> <?php echo date("M d Y", $date);?></div>
				<span class="membername"><a href="#"><?php echo $profiles[$rand]['Name'] ?></a></span>
			</div>
		</div>
		<div id="content">
			This is the content area
		</div>
	</div>
	<div class="element sustcenter pet3">
		<div id="memberpic"><img src="<?php $rand = rand(0,$size); echo $profiles[$rand]['ProfilePic'] ?>"></div>
		<div class="sustcenter">Sustainable Center 2</div>
		<div id="box">
			<div class="boxcontent">
				<div class="rp"><span class="val"><?php echo rand(1000,2000); ?></span><span class="thumb"></span></div>
				<div class="date"><span class="timestamp hidden"><?php echo $date = rand(1262055681,1318605196); ?></span> <?php echo date("M d Y", $date);?></div>
				<span class="membername"><a href="#"><?php echo $profiles[$rand]['Name'] ?></a></span>
			</div>
		</div>
		<div id="content">
			This is the content area
		</div>
	</div>
	<div class="element sustcenter pet3">
		<div id="memberpic"><img src="<?php $rand = rand(0,$size); echo $profiles[$rand]['ProfilePic'] ?>"></div>
		<div class="sustcenter">Sustainable Center 3</div>
		<div id="box">
			<div class="boxcontent">
				<div class="rp"><span class="val"><?php echo rand(1000,2000); ?></span><span class="thumb"></span></div>
				<div class="date"><span class="timestamp hidden"><?php echo $date = rand(1262055681,1318605196); ?></span> <?php echo date("M d Y", $date);?></div>
				<span class="membername"><a href="#"><?php echo $profiles[$rand]['Name'] ?></a></span>
			</div>
		</div>
		<div id="content">
			This is the content area
		</div>
	</div>
	<div class="element event pet6">
		<div id="memberpic"><img src="<?php $rand = rand(0,$size); echo $profiles[$rand]['ProfilePic'] ?>"></div>
		<div class="event">Event 1</div>
		<div id="box">
			<div class="boxcontent">
				<div class="rp"><span class="val"><?php echo rand(1000,2000); ?></span><span class="thumb"></span></div>
				<div class="date"><span class="timestamp hidden"><?php echo $date = rand(1262055681,1318605196); ?></span> <?php echo date("M d Y", $date);?></div>
				<span class="membername"><a href="#"><?php echo $profiles[$rand]['Name'] ?></a></span>
			</div>
		</div>
		<div id="content">
			This is the content area
		</div>
	</div>
	<div class="element project pet6">
		<div id="memberpic"><img src="<?php $rand = rand(0,$size); echo $profiles[$rand]['ProfilePic'] ?>"></div>
		<div class="project">Project 1</div>
		<div id="box">
			<div class="boxcontent">
				<div class="rp"><span class="val"><?php echo rand(1000,2000); ?></span><span class="thumb"></span></div>
				<div class="date"><span class="timestamp hidden"><?php echo $date = rand(1262055681,1318605196); ?></span> <?php echo date("M d Y", $date);?></div>
				<span class="membername"><a href="#"><?php echo $profiles[$rand]['Name'] ?></a></span>
			</div>
		</div>
		<div id="content">
			This is the content area
		</div>
	</div>
	<div class="element workshop pet3">
		<div id="memberpic"><img src="<?php $rand = rand(0,$size); echo $profiles[$rand]['ProfilePic'] ?>"></div>
		<div class="workshop">Workshop 1</div>
		<div id="box">
			<div class="boxcontent">
				<div class="rp"><span class="val"><?php echo rand(1000,2000); ?></span><span class="thumb"></span></div>
				<div class="date"><span class="timestamp hidden"><?php echo $date = rand(1262055681,1318605196); ?></span> <?php echo date("M d Y", $date);?></div>
				<span class="membername"><a href="#"><?php echo $profiles[$rand]['Name'] ?></a></span>
			</div>
		</div>
		<div id="content">
			This is the content area
		</div>
	</div>
	<div class="element volunteering pet7">
		<div id="memberpic"><img src="<?php $rand = rand(0,$size); echo $profiles[$rand]['ProfilePic'] ?>"></div>
		<div class="volunteering">Volunteer Vacancy 1</div>
		<div id="box">
			<div class="boxcontent">
				<div class="rp"><span class="val"><?php echo rand(1000,2000); ?></span><span class="thumb"></span></div>
				<div class="date"><span class="timestamp hidden"><?php echo $date = rand(1262055681,1318605196); ?></span> <?php echo date("M d Y", $date);?></div>
				<span class="membername"><a href="#"><?php echo $profiles[$rand]['Name'] ?></a></span>
			</div>
		</div>
		<div id="content">
			This is the content area
		</div>
	</div>
	<div class="element volunteering pet7">
		<div id="memberpic"><img src="<?php $rand = rand(0,$size); echo $profiles[$rand]['ProfilePic'] ?>"></div>
		<div class="volunteering">Volunteer Vacancy 2</div>
		<div id="box">
			<div class="boxcontent">
				<div class="rp"><span class="val"><?php echo rand(1000,2000); ?></span><span class="thumb"></span></div>
				<div class="date"><span class="timestamp hidden"><?php echo $date = rand(1262055681,1318605196); ?></span> <?php echo date("M d Y", $date);?></div>
				<span class="membername"><a href="#"><?php echo $profiles[$rand]['Name'] ?></a></span>
			</div>
		</div>
		<div id="content">
			This is the content area
		</div>
	</div>
	<div class="element volunteering pet7">
		<div id="memberpic"><img src="<?php $rand = rand(0,$size); echo $profiles[$rand]['ProfilePic'] ?>"></div>
		<div class="volunteering">Volunteer Vacancy 3</div>
		<div id="box">
			<div class="boxcontent">
				<div class="rp"><span class="val"><?php echo rand(1000,2000); ?></span><span class="thumb"></span></div>
				<div class="date"><span class="timestamp hidden"><?php echo $date = rand(1262055681,1318605196); ?></span> <?php echo date("M d Y", $date);?></div>
				<span class="membername"><a href="#"><?php echo $profiles[$rand]['Name'] ?></a></span>
			</div>
		</div>
		<div id="content">
			This is the content area
		</div>
	</div>
</div>

</content>