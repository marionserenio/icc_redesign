<div id="Main">
	<div id="MainContainer" class="container">
				<div id="MainContainerLeft">
						<h1>Lorem ipsum dolor sit amet.</h1>
						<h2>QUALITY QUANTITY CONVERSION</h2>
						<p>
							Insta-Call Center Solutions is a leader in relationship management, Inbound and Outbound
						Teleservices and over the past year has built a strong reputation as a valuable partner to some of
						the best known global companies.
						</p>
						<button><a href="#QuoteForm">Get a quote</a></button> 
				</div>
				<div id="MainContainerRight">
						<img src="<?php echo base_url() ?>img/connect.png  ">
				</div>	
	</div>
</div>
<div class="container" id="MainBody">
		<div class="testimonials">
				<h3>Testimonials</h3>
				<button class="ViewAll"><a href="#">view all</a></button>
				<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco."</p>
		</div>
		<div class="WhatWeDo">
				<h3>Lorem ipsum dolor sit amet, consectetur adipiscing</h3>

				<img src="<?php echo base_url(); ?>img/ribbon.png">
		</div>
		<div class="LatestNews">
				<div id="LatestNewsContainer">
					<h4>Latest News</h4>
				<button class="ViewAll"><a href="#">view all</a></button>

				</div>	
					<ul id="blogposts">
						<li>
							<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</h2>
							<div class="PostMeta">
								<span class="date">
									JUNE 6,
								</span>	 BY
								<span class="Poster">
									admin
								</span>
							</div>
						</li>
						<li>
							<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</h2>
							<div class="PostMeta">
								<span class="date">
									JUNE 6,
								</span>	 BY
								<span class="Poster">
									admin
								</span>
							</div>
						</li>
						<li>
							<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</h2>
							<div class="PostMeta">
								<span class="date">
									JUNE 6,
								</span>	 BY
								<span class="Poster">
									admin
								</span>
							</div>
						</li>						

					</ul>
		</div>	
</div>

<div id="MainBodyBottom" class="container">
		<div id="Howitworks"><img src="<?php echo base_url() ?>img/howitworks.png"></div>
</div>
<div id="GetAQuote">

		<img src="<?php echo base_url() ?>img/getaquote.png">
		<div id="QuoteForm">
			<?php echo form_open('home/AskForQuote', $QuoteForm); ?>
			<?php echo form_input($FullName); ?><br>
			<?php echo form_input($BusinessName); ?><br>
			<?php echo form_input($Email); ?><br>
			<?php echo form_input($ContactNumber); ?><br>
			<div class="row"><?php echo form_button($QuoteButton, 'GET A QUOTE'); ?></div>
		</div>
</div>	
