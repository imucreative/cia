<div class="main-container">
			<section class="page-top">
				<div class="container">
					<div class="col-md-4 col-sm-4">
						<h1>About Us</h1>
					</div>
					<div class="col-md-8 col-sm-8">
						<ul class="pull-right breadcrumb">
							<li><a href="<?php echo base_url();?>">HOME</a></li>
							<li class="active">ABOUT US</li>
						</ul>
					</div>
				</div>
			</section>
			<section class="wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-7">
							<h3><?php echo get_data_toko('nama_toko');?></h3>
							<?php echo get_data_toko('about');?>
						</div>
						<div class="col-md-5">
							<div class="flexslider" data-plugin-options='{"directionNav":true}'>
								<ul class="slides">
									<?php
										/*
										foreach ($widget3 as $widg3){
									?>
											<li><img title="<?php echo $widg3->nama_product;?>" src="<?php echo base_url()."uploads/produk/".$widg3->image?>" /></li>
									<?php
										}
										*/
									?>
									<li><img src="<?php echo base_url()."uploads/about/verified.png"?>" /></li>
									<li><img src="<?php echo base_url()."uploads/about/logo_cia_about.png"?>" /></li>
									<li><img src="<?php echo base_url()."uploads/about/mando.png"?>" /></li>
									<li><img src="<?php echo base_url()."uploads/about/halla_holding.png"?>" /></li>
								</ul>
							</div>
						</div>
					</div>
					<!--
					<div class="row">
						<div class="col-md-12">
							<h3>Our specialization</h3>
							<div class="progress-bars">
								<div class="progress-label">
									<span>Kualitas</span>
								</div>
								<div class="progress">
									<div class="progress-bar main-color animate-bar six-sec-ease-in-out" aria-valuetransitiongoal="100"></div>
								</div>
								<div class="progress-label">
									<span>Design</span>
								</div>
								<div class="progress">
									<div class="progress-bar main-color animate-bar six-sec-ease-in-out" aria-valuetransitiongoal="80"></div>
								</div>
							</div>
						</div>
					</div>
					-->
				</div>
			</section>
			
			<?php
			/*
			<section class="wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<hr>
							<h2 class="center">Meet the Team</h2>
							<p class="center">
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
							</p>
						</div>
					</div>
				</div>
				<div class="container">
					<div id="team" class="row">
						<div class="col-md-12">
							<div class="row">
								<ul class="team-list animate-group">
									<li class="col-md-3 col-sm-6">
										<div class="thumbnail animate">
											<img src="<?php echo base_url()?>theme/front/assets/images/team-1.jpg" alt="">
											<span class="image-overlay"> <a target="_blank" href="http://www.facebook.com"><i data-original-title="Facebook" data-placement="top" class="tooltips fa fa-facebook circle-icon circle-small"></i></a> <a target="_blank" href="http://www.linkedin.com"><i data-original-title="Linkedin" data-placement="top" class="tooltips fa fa-linkedin circle-icon circle-small"></i></a></span>
										</div>
										<h3>Peter Clark</h3>
										<div>
											UI Designer
										</div>
										<div class="team-member-description">
											<p>
												Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <strong>Lorem ipsum dolor</strong> sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
											</p>
										</div>
									</li>
									<li class="col-md-3 col-sm-6">
										<div class="thumbnail animate">
											<img src="<?php echo base_url()?>theme/front/assets/images/team-2.jpg" alt="">
											<span class="image-overlay"><a target="_blank" href="http://www.linkedin.com"><i data-original-title="Linkedin" data-placement="top" class="tooltips fa fa-linkedin circle-icon circle-small"></i></a> <a target="_blank" href="http://www.github.com"><i data-original-title="Github" data-placement="top" class="tooltips fa fa-github circle-icon circle-small"></i></a></span>
										</div>
										<h3>Ella Patterson</h3>
										<div>
											Web Editor
										</div>
										<div class="team-member-description">
											<p>
												Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <strong>Lorem ipsum dolor</strong> sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
											</p>
										</div>
									</li>
									<li class="col-md-3 col-sm-6">
										<div class="thumbnail animate">
											<img src="<?php echo base_url()?>theme/front/assets/images/team-3.jpg" alt="">
											<span class="image-overlay"><a target="_blank" href="http://www.twitter.com"><i data-original-title="Twitter" data-placement="top" class="tooltips fa fa-twitter circle-icon circle-small"></i></a> <a target="_blank" href="http://plus.google.com"><i data-original-title="Google+" data-placement="top" class="tooltips fa fa-google-plus circle-icon circle-small"></i></a></span>
										</div>
										<h3>Mark Johnson</h3>
										<div>
											Senior Designer
										</div>
										<div class="team-member-description">
											<p>
												Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <strong>Lorem ipsum dolor</strong> sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
											</p>
										</div>
									</li>
									<li class="col-md-3 col-sm-6">
										<div class="thumbnail animate">
											<img src="<?php echo base_url()?>theme/front/assets/images/team-4.jpg" alt="">
											<span class="image-overlay"> <a target="_blank" href="http://www.github.com"><i data-original-title="Github" data-placement="top" class="tooltips fa fa-github circle-icon circle-small"></i></a></span>
										</div>
										<h3>Steven Thompson</h3>
										<div>
											Visual Designer
										</div>
										<div class="team-member-description">
											<p>
												Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <strong>Lorem ipsum dolor</strong> sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
											</p>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			*/
			?>
		</div>