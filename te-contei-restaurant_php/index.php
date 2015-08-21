<?php 
$page = 'Home';

include 'header.php'; ?>

	<div id="carte">
		<div id="carte-top" class="wrap"></div>
		<div id="content-block" class="wrap">
					
			<div class="separator top-separator content left"></div>
			<div class="separator top-separator content right"></div>

			<div id="main" class="content">
				
				<article class="article">
						
					<h1 class="article-title styled-header">Welcome to our website</h1>

					<div class="article-body">
						<p><a class="thumbnail" href="demo_images/restaurant.jpg" rel="lightbox[77]" title="Restaurant Photo">
						<img class="left shadow" src="demo_images/restaurant-157x117.jpg" alt="Restaurant Photo" width="157" height="117" /></a>
						Mauris ornare libero in risus ullamcorper dignissim. Suspendisse metus libero, dictum et laoreet hendrerit, dapibus non velit. 
						Integer consectetur euismod sem vitae vestibulum. Nam quis enim non nunc fermentum volutpat at ac nunc.</p>
						
						<h2>About our cuisine</h2>
						<p>Praesent non dolor quis turpis placerat suscipit. Nunc quis velit magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Vivamus et erat dolor. Vestibulum sollicitudin mollis ligula, dictum fringilla velit scelerisque a. 
						Mauris ligula justo, mattis a pellentesque a, aliquam egestas magna. Donec fringilla velit sit amet quam tempus venenatis. 
						Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in est vitae neque ultrices tristique.</p>
						
						<p><a class="make-me-btn" href="menu.php">Take a look at our menu!</a></p>
					</div>

				</article>
				
			</div><!-- end main -->
	
			<div class="sidebar content">
				<div class="module ">
					<h3>Our specialities</h3>
					
					<div id="slider" class="nivoSlider">
						<img src="demo_images/slider/seafood.jpg" title="#caption1" alt="" />
						<img src="demo_images/slider/sushi.jpg" title="#caption2" alt="" />
						<a href="menu.php"><img src="demo_images/slider/spaghetti.jpg" title="#caption3" alt="" /></a>
						<img src="demo_images/slider/meat.jpg" title="#caption4" alt="" />
					</div>
					

					<div id="caption1" class="nivo-html-caption">
						<h4><a href="#">Seafood</a></h4>
						<p>Ut id adipiscing elit. In ac elit nunc. Duis sit amet velit quis lacus porta lacinia. Sed lobortis</p>
					</div>
					<div id="caption2" class="nivo-html-caption">
						<h4><a href="#">Sushi</a></h4>
						<p>Ut id adipiscing elit. In ac elit nunc. Duis sit amet velit quis lacus porta lacinia. Sed lobortis</p>
					</div>
					<div id="caption3" class="nivo-html-caption">
						<h4><a href="#">Spaghetti</a></h4>
						<p>Ut id adipiscing elit. In ac elit nunc. Duis sit amet velit quis lacus porta lacinia. Sed lobortis</p>
					</div>
					<div id="caption4" class="nivo-html-caption">
						<h4><a href="#">Meat</a></h4>
						<p>Ut id adipiscing elit. In ac elit nunc. Duis sit amet velit quis lacus porta lacinia. Sed lobortis</p>
					</div>
				</div>
					
				<div class="separator clear"></div>
				
				<div class="module ">
					<h3><span class="ribbon">Opening hours</span></h3>
					<table>
						<tbody>
							<tr>
								<td>Monday - Friday:</td>
								<td><strong>8:00 - 22:00</strong></td>
							</tr>
							<tr>
								<td>Weekends:</td>
								<td><strong>9:00 - 23:00</strong></td>
							</tr>
						</tbody>
					</table>
				</div>
				
			</div><!-- end sidebar -->
								
			<?php 
				include 'carte-footer.php'; 
				?>
			
		</div><!-- end #content-block -->
		
		<div id="carte-bottom" class="clear wrap"></div>
	</div><!-- end #carte -->
	
<?php 
	include 'footer.php'; 
	?>