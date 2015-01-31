
<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>

	<meta charset="utf-8">
  	<meta name="viewport">
  	<title>Collardeau.com</title>
  	<meta name="description" content="Thomas Collardeau: Work and Portfolio">

 	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
 	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

 	<script src="js/bloxhover.jquery.min.js"></script>

	<script>

		$(document).ready(function(){ 

			$('header').hide();
			$('.content').css({"visibility": "hidden"});

		    $('.vid').bloxhover({
		            effect: "horizontal alternate", // accepted strings: 'square', 'square reveal', 'vertical', 'vertical reveal', 'vertical alternate', 'vertical alternate reveal', 'horizontal', 'horizontal reveal', 'horizontal alternate', 'horizontal alternate reveal'
		            sliceCount: 5, // the number of slices 
		            color: 'rgba(0, 0, 0, 0.6)', //rgba color of the slices
		            duration: 360, //how long should the animation of each slice last
		            delay: 40 // delay between slice animations
		        });

		    $('.web').bloxhover({effect: 'vertical alternate', duration: 360, sliceCount: 5, delay: 40, color: 'rgba(1, 1, 1, 0.6)'
		        });

		    $('.instagram').bloxhover({effect: 'square', duration: 360, sliceCount: 16, delay: 40, color: 'rgba(0, 0, 0, 0.6)'
		        });

		    $('.twitter').bloxhover({
		            effect: "vertical reveal", // accepted strings: 'square', 'square reveal', 'vertical', 'vertical reveal', 'vertical alternate', 'vertical alternate reveal', 'horizontal', 'horizontal reveal', 'horizontal alternate', 'horizontal alternate reveal'
		            sliceCount: 1, // the number of slices 
		            color: 'rgba(122,83,101, 0.25)', //rgba color of the slices
		            duration: 100, //how long should the animation of each slice last
		            delay: 20 // delay between slice animations
		        });

		    var controller = $.superscrollorama({
		        triggerAtCenter: false,
		        playoutAnimations: true,
		        reverse: true 
    	});
    
    		controller.addTween('header', TweenMax.from( $('#Grid'),1.2, {css:{top: '3.2em'}}));


    		$('#Grid').mixitup();


		});

		$(window).load(function() {
		    $('header').show();
		    $('.content').css({"visibility": "visible"});

		    // TweenMax.from( $('header'), 2, {css:{opacity: 0}, delay: 0, ease:Quad.easeOut});
		    // TweenMax.from( $('.producer'), 1.8, {css:{opacity: 0}, delay: 1, ease:Quad.easeOut});
		    // TweenMax.from($('.titre, #menu-2'), 1.5, {css:{opacity: 0, top:-1800}, delay: 0.5, ease:Quad.easeInOut});
		    // TweenMax.from( $('.cities'), 1.5, {css:{opacity: 0, right: -1800}, delay: 3, ease:Quad.easeOut});
		    // TweenMax.from($('.contact'), 2, {css:{left: -2500, bottom: -500, rotation: -6000}, delay: 2, ease:Quad.easeInOut});
		    // TweenMax.from( $('#menu-1'), 1.5, {css:{top: '-1100px'}, delay: 1.5, ease:Quad.easeInOut});
		    // TweenMax.from( $('#menu-3'), 1, {css:{top: '-900px'}, delay: 3.5, ease:Quad.easeInOut});
		    // TweenMax.from( $('#menu-4'), 0.7, {css:{top: '-1200px'}, delay: 3.8, ease:Quad.easeInOut});
		    // //TweenMax.from( $('#menu-2'), 0.5, {css:{top: '-1200px'}, delay: 4.5, ease:Quad.easeInOut});
		    // TweenMax.from( $('.project'), 2, {css:{opacity: 0, bottom: -1500}, delay: 2, ease:Quad.easeOut});
		    // TweenMax.from( $('.overBlox'), 2, {css:{opacity: 0}, delay: 3.5, ease:Quad.easeOut});

		});

	</script>

	<script type="text/javascript" src="js/master.min.js"></script>

	<link rel="shortcut icon" href="http://new.collardeau.com/img/favicon.ico" />

	<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet /">
	<link rel="stylesheet" href="css/normalizeHintFoundationForm.css" />
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans|Trykker' rel='stylesheet' type='text/css' />
	
	<link rel="stylesheet" href="css/custom.css" />

	<script type="text/javascript" src="js/custom.modernizr.js"></script>

</head>

<body>

	<header class="row full-width">
		<a href="ajax/contact.html" data-reveal-ajax="true" data-reveal-id="contact" class="contact hint--left" data-hint="Contact &amp; Info" data-reveal-id="contact"><i class="icon-envelope" ></i></a>
		
		<h1 class="titre"><a href="/">Thomas Collardeau</a></h1>
		<h3 class="subheader producer">Web Developer</h3>
		<h3 class="subheader cities">New York, Amsterdam <br />Now in <span class="slant">Prague</span></h3>

		<div class="controls">
			<ul>
				<li id="menu-2" class="filter hint--top" data-filter="webdev" data-hint="Web Developing"><i class="icon-globe"></i></li>
				<li id="menu-1" class="filter hint--top" data-filter="videos" data-hint="Video"><i class="icon-film"></i></li>
				<li id="menu-3" class="filter hint--top" data-filter="network" data-hint="Social Media"><i class="icon-comments"></i></li>
				<li id="menu-4" class="filter hint--top" data-filter="all" data-hint="View All"><i class="icon-refresh"></i></li>
			</ul>
		</div>
	</header>

	<div id="Grid" class="content">

<!-- 		<div id="passionata" class="mix videos">

			<div class="vid project">
				<img src="./img/passionata2.jpg" alt="img"  width="480" height="270"/>				
				<div>
					<h2>PASSIONATA</h2>
						<p>See the Videos<br /><a href="ajax/passionata-1.html" data-reveal-ajax="true" data-reveal-id="passionata-1">1</a> <a href="ajax/passionata-2.html" data-reveal-ajax="true" data-reveal-id="passionata-2">2</a> <a href="ajax/passionata-3.html" data-reveal-ajax="true" data-reveal-id="passionata-3">3</a></p>
					<i class="icon-film"></i>
				</div>
			</div>
		</div> -->

		<div class="mix webdev">
			<div class="web project">

				<img src="./img/logo/artJunk.png" width="270" height="270" alt="img" />
				<div>
					<i class="icon-globe"></i>
					
					<ul>
						<li>HTML5 app<br /><a href="http://www.artjunk.org/">http://www.artjunk.org/</a></li>
					</ul>
					<!-- <p>Find artist materials</p> -->
					<small>Front-end Dev</small>
 				</div>
			</div>
		</div>

 		<div class="mix network">
			<div class="overBlox">
				<a href="http://twitter.com/collardeau" class="twitterHandle">@collardeau</a>
				<p class="tweet">"Rainy day in Praha. Good way to get coding."<br />
				<small> 12 August, 2014</small></p>
			</div>
			<div class="social project twitter">
				<img src="./img/twitterCover2.png" width="360" height="270" alt="img" />
				
			</div>
		</div>

		<div class="mix webdev">
		
			<div class="web project">

				<img src="./img/fadein_bluelogo.png" width="270" height="270" alt="img" />
				<div>
					<i class="icon-globe"></i>
					<ul>
						<li><a href="http://fadeinfilms.com">fadeinfilms.com</a></li>
					</ul>
					<h2>Film Company<br />Website</h2>
					<small>JQuery/HTML/CSS</small>
 				</div>
			</div>
		</div>

		<div class="mix webdev">
		
			<div class="web project">

				<img src="./img/panorama.jpg" width="360" height="270" alt="img" />
				<div>
					<i class="icon-globe"></i>
					
					<ul>
						<li>Web App<br /><a href="http://ontheinside.info">http://ontheinside.info</a></li>
					</ul>
					<p>New York Digital City Guide</p>
					<small>Founder/Manager</small>
 				</div>
			</div>

		</div>

<!-- 		<div id="agatha" class="mix videos">
			<div class="vid project">
				<img src="./img/agatha3.jpg" width="480" height="270" alt="img" />
				<div>	
					<h2>AGATHA</h2>
						<p>See the Videos<br /><a href="ajax/agatha-1.html" data-reveal-ajax="true" data-reveal-id="agatha-1">1</a> <a href="ajax/agatha-2.html" data-reveal-ajax="true" data-reveal-id="agatha-2">2</a></p>
					<i class="icon-film"></i>
				</div>
			</div>
		</div> -->

		<div id="bikers" class="mix videos">
			<div class="vid project">
				<img src="./img/bikers.jpg" width="480" height="270" alt="img" />				
				<div>
					<h2>Bicyclists</h2>
					<ul>
						<li>See the <a href="ajax/bikers-1.html" data-reveal-ajax="true" data-reveal-id="bikers-1">Video</a></li>
					</ul>
					<i class="icon-film"></i>
				</div>
			</div>
		</div>

		<div class="mix webdev">
		
			<div class="web project">

				<img src="./img/tennisBall3.png" width="270" height="270" alt="img" />
				<div>
					<i class="icon-globe"></i>
					<ul>
						<li><a href="http://tennis.collardeau.com">tennis.collardeau.com</a></li>
					</ul>
					<h2>Tennis Simulation</h2>
					<small>Javascript</small>
 				</div>
			</div>
		</div>

<!-- 		<div class="mix network">
			<div class="social project instagram">
				<img src="./img/instagram-6.jpg" width="270" height="270" alt="img" />
				
				<div>
					<a href="http://instagram.com/collardeau"><i class="icon-instagram"></i></a>
					<p>"Gracias, isla mujeres. #movingalong #vacation #mexico<br /><small> September 2013</small></p>
				</div>
			</div>
		</div> -->





<!-- 		<div id="sephora"  class="mix videos">
			<div class="vid project">
				<img src="./img/sephora.jpg" width="480" height="270" alt="img" />
				<div>
					<h2>Sephora</h2>
						<p>See the Videos<br /><a href="ajax/sephora-1.html" data-reveal-ajax="true" data-reveal-id="sephora-1">1</a> <a href="ajax/sephora-2.html" data-reveal-ajax="true" data-reveal-id="sephora-2">2</a> <a href="ajax/sephora-3.html" data-reveal-ajax="true" data-reveal-id="sephora-3">3</a> <a href="ajax/sephora-4.html" data-reveal-ajax="true" data-reveal-id="sephora-4">4</a> <a href="ajax/sephora-5.html" data-reveal-ajax="true" data-reveal-id="sephora-5">5</a></p>
					<i class="icon-film"></i>
				</div>
			</div>
		</div> -->

<!-- 		<div id="delphine" class="mix videos">
			<div class="vid project">
				<img src="./img/manivet-show2012.jpg" width="480" height="270" alt="img" />
				<div>
					<h2>Delphine Manivet</h2>
					<ul>
						<li>See the <a href="ajax/delphine-1.html" data-reveal-ajax="true" data-reveal-id="delphine-1">Fashion Show</a></li>
					</ul>
					<i class="icon-film"></i>
				</div>
			</div>
		</div> -->

		<div id="summer2012"  class="mix videos">
			<div class="vid project">
				<img src="./img/summer2012.jpg" width="480" height="270" alt="img" />
				<div>
					<h2>Summer 2012</h2>
					<ul>
						<li>See the <a href="ajax/summer2012-1.html" data-reveal-ajax="true" data-reveal-id="summer2012-1">Video</a></li>
					</ul>
					<i class="icon-film"></i>
				</div>
			</div>
		</div>

		<div class="mix webdev">

			<div class="web project">

				<img src="img/bullshit.png" width="220" height="220" alt="img" />
				<div>
					<i class="icon-globe"></i>
					
					<ul>
						<li><a href="http://popsearch.info">http://popsearch.info</a></li>
					</ul>
					<p>API Search Engine</p>
					<small>Developer</small>
 				</div>
			</div>
		</div>
	
<!-- 		<div id="lacoste" class="mix videos">
			<div class="vid project">
				<img src="./img/lacoste.jpg" width="480" height="270" alt="img" />				
				<div>
					<h2>Lacoste</h2>
					<ul>
						<li><a href="ajax/lacoste-1.html" data-reveal-ajax="true" data-reveal-id="lacoste-1">1</a></li>
						<li><a href="ajax/lacoste-2.html" data-reveal-ajax="true" data-reveal-id="lacoste-2">2</a></li>
						<li><a href="ajax/lacoste-3.html" data-reveal-ajax="true" data-reveal-id="lacoste-3">3</a></li>
					</ul>
					<i class="icon-film"></i>
				</div>
			</div>
		</div>

		<div id="penhalta"  class="mix videos">
			<div class="vid project">
				<img src="./img/penhalta.jpg" width="480" height="270" alt="img" />
				<div>
					<h2>Penhalta</h2>
					<ul>
						<li>See the <a href="ajax/penhalta-1.html" data-reveal-ajax="true" data-reveal-id="penhalta-1">Video</a></li>
					</ul>
					<i class="icon-film"></i>
				</div>
			</div>
		</div> -->

<!-- 		<div class="mix network">
			<div class="social project instagram">
				<img src="./img/instagram-8.jpg" width="270" height="270" alt="img" />
				
				<div>
					<a href="http://instagram.com/collardeau"><i class="icon-instagram"></i></a>
					<p>"An iguana on the sandy beach of Garrafon de Castilla"<br /><small> September 2013</small></p>
				</div>
			</div>
		</div> -->

		<div class="mix webdev">
		
			<div class="web project">

				<img src="./img/frobel6.jpg" width="360" height="270" alt="img" />
				<div>
					<i class="icon-globe"></i>
					<ul>
						<li><a href="http://johnfrobelhong.com">johnfrobelhong.com</a></li>
					</ul>
					<h2>Artist website</h2>
					<small>Javascript</small>
				</div>
			</div>
		</div>

		<div class="mix network">
			<div class="social project instagram">
				<img src="./img/instagram-3.jpg" width="270" height="270" alt="img" />
				
				<div>
					<a href="http://instagram.com/collardeau"><i class="icon-instagram"></i></a>
					<p>"Made it to Central America #mexico #newland"<br /><small> September 2013</small></p>
				</div>
			</div>
		</div>

		<div class="mix webdev">
		
			<div class="web project">

				<img src="./img/mic_poster.png" width="270" height="270" alt="img" />
				<div>
					<i class="icon-globe"></i>
					<h2>Karaoke Proto</h2>
					<ul>
						<li><a href="http://karaoke.collardeau.com">karaoke.collardeau.com</a></li>
					</ul>
					<small>PHP, SQL</small>
				</div>
			</div>
		</div>

		<div class="mix network">
			<div class="overBlox">
				<a href="http://twitter.com/collardeau" class="twitterHandle">@collardeau</a>
				<p class="tweet">"Using Zurb Foundation front-end framework to build myself a new site. Responsive design, mobile first. :)"<br />
				<small> 22 September, 2013</small></p>
			</div>
			<div class="social project twitter">
				<img src="./img/twitterCover2.png" width="360" height="270" alt="img" />
			</div>
		</div>

<!-- 		<div id="audition" class="mix videos">
			<div class="vid project">
				<img src="./img/audition.jpg" width="480" height="270" alt="img" />				
				<div>
					<h2>Audition</h2>
					<ul>
						<li>See the <a href="ajax/audition-1.html" data-reveal-ajax="true" data-reveal-id="audition-1">Short Film</a></li>
					</ul>
					<i class="icon-film"></i>
				</div>
			</div>
		</div> -->

<!-- 		<div id="sofitel"  class="mix videos">
			<div class="vid project">
				<img src="./img/sofitel2.jpg" width="480" height="270" alt="img" />				
				<div>
					<h2>Sofitel</h2>
					<ul>
						<li>See the <a href="ajax/sofitel-1.html" data-reveal-ajax="true" data-reveal-id="sofitel-1">Video</a></li>
					</ul>
					<i class="icon-film"></i>
				</div>
			</div>
		</div> -->

		<div class="mix webdev">
		
			<div class="web project">

				<img src="./img/constantine2.jpg" width="360" height="270" alt="img" />
				<div>
					<i class="icon-globe"></i>
					<ul>
						<li><a href="http://studioconstantine.collardeau.com">studioconstantine.com</a></li>
					</ul>
					<h2>Artist website</h2>
					<small>HTML/CSS/JS, Wordpress</small>
 				</div>
			</div>
		</div>

<!-- 	<div id="morgan" class="mix videos">
			<div class="vid project">
				<img src="./img/morgan.jpg" width="480" height="270" alt="img" />
				<div>
					<h2>Morgan</h2>
					<ul>
						<p>See the Videos<br /><a href="ajax/morgan-1.html" data-reveal-ajax="true" data-reveal-id="morgan-1">1</a> <a href="ajax/morgan-2.html" data-reveal-ajax="true" data-reveal-id="morgan-2">2</a></p>
					</ul>
					<i class="icon-film"></i>
				</div>
			</div>
		</div> -->

<!-- 	<div class="mix network">
			<div class="social project instagram">
				<img src="./img/instagram-2.jpg" width="270" height="270" alt="img" />
				
				<div>
					<a href="http://instagram.com/collardeau"><i class="icon-instagram"></i></a>
					<p>"Who is this guy and what is his mission? Seen in #Volendam"<br /><small> August 2013</small></p>
				</div>
			</div>
		</div> -->

<!-- 		<div id="_123" class="mix videos">
			<div class="vid project">
				<img src="./img/1-2-3.jpg" width="480" height="270" alt="img" />				
				<div>
					<h2>1-2-3</h2>
					<p>See the Videos<br /><a href="ajax/_123-1.html" data-reveal-ajax="true" data-reveal-id="_123-1">1</a> <a href="ajax/_123-2.html" data-reveal-ajax="true" data-reveal-id="_123-2">2</a></p>
					<i class="icon-film"></i>
				</div>
			</div>
		</div> -->
	</div>

	<div id="contact" class="reveal-modal medium">
	</div>

 	<div id="passionata-1" class="reveal-modal large">
	</div>

	<div id="passionata-2" class="reveal-modal large">
	</div>

	<div id="passionata-3" class="reveal-modal large">
	</div>

	<div id="agatha-1" class="reveal-modal large">
	</div>

	<div id="agatha-2" class="reveal-modal large">
	</div>

	<div id="bikers-1" class="reveal-modal large">
	</div>

 	<div id="summer2012-1" class="reveal-modal large">
	</div>

	<div id="delphine-1" class="reveal-modal large">
	</div>

	<div id="lacoste-1" class="reveal-modal large">
	</div>

	<div id="lacoste-2" class="reveal-modal large">
	</div>

	<div id="lacoste-3" class="reveal-modal large">
	</div>

	<div id="lacoste-4" class="reveal-modal large">
	</div>

	<div id="penhalta-1" class="reveal-modal large">
	</div>

	<div id="audition-1" class="reveal-modal large">
	</div>

 	<div id="sephora-1" class="reveal-modal large">
	</div>

	<div id="sephora-2" class="reveal-modal large">
	</div>

	<div id="sephora-3" class="reveal-modal large">
	</div>

	<div id="sephora-4" class="reveal-modal large">
	</div>

	<div id="sephora-5" class="reveal-modal large">
	</div>

	<div id="sephora-6" class="reveal-modal large">
	</div>

	<div id="sofitel-1" class="reveal-modal large">
	</div>

	<div id="morgan-1" class="reveal-modal large">
	</div>

	<div id="morgan-2" class="reveal-modal large">
	</div>

	<div id="_123-1" class="reveal-modal large">
	</div>

	<div id="_123-2" class="reveal-modal large">
	</div>  

	 <script>

	 	$(document).foundation();
	 </script>

	 <script type="text/javascript">

		 	 var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-5570751-4']);
		  _gaq.push(['_setDomainName', 'collardeau.com']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

	</script>

</body>
</html>
