<div class="main-container">
	<!-- start: REVOLUTION SLIDERS -->
	<section class="fullwidthbanner-container">
		<div class="fullwidthabnner">
			<ul>
				<!-- start: FIRST SLIDE -->
				<?php
					foreach ($slider as $slid){
				?>
						<li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
							<img src="<?php echo base_url();?>template/front/assets/images/sliders/slidebg1.png"  style="background-color:rgb(246, 246, 246)" alt="slidebg1"  data-bgfit="cover" data-bgposition="left bottom" data-bgrepeat="no-repeat">
							<div class="caption lft slide_title slide_item_left"
							data-x="0"
							data-y="105"
							data-speed="400"
							data-start="1500"
							data-easing="easeOutExpo">
								<a href="<?php echo base_url()."product/".$slid->nama_product_seo;?>"><?php echo $slid->nama_slider;?></a>
							</div>
							<div class="caption lft slide_subtitle slide_item_left"
							data-x="0"
							data-y="180"
							data-speed="400"
							data-start="2000"
							data-easing="easeOutExpo">
								<?php echo $slid->keterangan;?>
							</div>
							<div class="caption lft slide_desc slide_item_left"
							data-x="0"
							data-y="220"
							data-speed="400"
							data-start="2500"
							data-easing="easeOutExpo">
								<?php //echo $slid->keterangan;?>
							</div>
							<a class="caption lft btn btn-green slide_btn slide_item_left" href="<?php echo base_url()."product/".$slid->nama_product_seo;?>"
							data-x="0"
							data-y="320"
							data-speed="400"
							data-start="3000"
							data-easing="easeOutExpo">
								<i class="fa fa-mail-forward"></i> Detail
							</a>
							<div class="caption sfr"
							data-x="720"
							data-y="55"
							data-speed="700"
							data-start="1000"
							data-easing="easeOutExpo"  >
								<img src="<?php echo base_url()."uploads/slider/".$slid->image;?>" title="<?php echo $slid->nama_slider;?>" alt="<?php echo $slid->nama_slider;?>">
							</div>
						</li>
				<?php
					}
				?>
				<!-- end: FIRST SLIDE -->
				
			</ul>
		</div>
	</section>
	<!-- end: REVOLUTION SLIDERS -->
	
	<section class="wrapper wrapper-grey padding50">
		<!-- start: WORKS CONTAINER -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="center">DRIVE WITH TECHNOLOGY, MANDO & SUSPENSION PARTS</h2>
					<hr>
					<p class="center">
						
					</p>
					<div class="grid-container animate-group" data-animation-interval="100">
						<?php
							foreach ($widget1 as $widg1){
						?>
								<div class="col-md-3 col-sm-6">
									<div class="grid-item animate">
										<a href="<?php echo base_url()."product/".$widg1->nama_product_seo;?>">
											<div class="grid-image">
												<img title="<?php echo $widg1->nama_product;?>" src="<?php echo base_url()."uploads/produk/".$widg1->image;?>" class="img-responsive"/>
												<span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>
											</div>
											<div class="grid-content">
												<?php echo $widg1->nama_product;?>
											</div>
										</a>
									</div>
								</div>
						<?php
							}
						?>
						
					</div>
				</div>
			</div>
		</div>
		<!-- end: WORKS CONTAINER -->
	</section>
	<?php
	/*
	<section class="wrapper padding50">
		<!-- start: ABOUT US CONTAINER -->
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<h2 style="text-align: right;">About Us</h2>
					<hr class="fade-left">
					<p style="text-align: right;">
						Lorem ipsum dolor sit amet, consectetuer <strong>adipiscing elit</strong>. Aenean commodo ligula eget dolor. Aenean massa.
					</p>
					<p style="text-align: right;">
						Nulla consequat massa quis enim.
						<br>
						Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
						<br>
						In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
						<br>
						Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.
						<br>
						Aenean <strong style="text-align: right;">vulputate</strong> eleifend tellus.
					</p>
					<hr class="fade-left">
					<a href="#" class="btn btn-default pull-right"><i class="fa fa-info"></i> Learn more...</a>
				</div>
				<div class="col-sm-6">
					<ul class="icon-list animate-group">
						<li>
							<div class="timeline animate" data-animation-options='{"animation":"scaleToBottom", "duration":"300"}'></div>
							<i class="clip-stack-empty circle-icon circle-teal animate" data-animation-options='{"animation":"flipInY", "duration":"600"}'></i>
							<div class="icon-list-content">
								<h4>HTML5 / CSS3 / JS</h4>
								<p>
									Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in.
								</p>
							</div>
						</li>
						<li>
							<div class="timeline animate" data-animation-options='{"animation":"scaleToBottom", "duration":"300", "delay": "300"}'></div>
							<i class="clip-paperplane circle-icon circle-green animate" data-animation-options='{"animation":"flipInY", "duration":"600"}'></i>
							<div class="icon-list-content">
								<h4>Awesome Sliders</h4>
								<p>
									Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in.
								</p>
							</div>
						</li>
						<li>
							<div class="timeline animate" data-animation-options='{"animation":"scaleToBottom", "duration":"300", "delay": "300"}'></div>
							<i class="clip-droplet circle-icon circle-bricky animate" data-animation-options='{"animation":"flipInY", "duration":"600"}'></i>
							<div class="icon-list-content">
								<h4>Clean Design</h4>
								<p>
									Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in.
								</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end: ABOUT US CONTAINER -->
	</section>
	*/
	?>
	<section class="wrapper wrapper-grey padding50">
		<!-- start: PORTFOLIO CONTAINER -->
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="flexslider" data-plugin-options='{"controlNav":false,"sync": "#carousel"}'>
						<ul class="slides">
							<?php
								foreach ($widget2 as $widg2){
							?>
									<li>
										<a class="group1" href="<?php echo base_url()."uploads/produk/".$widg2->image;?>" title="<?php echo $widg2->nama_product;?>">
											<img src="<?php echo base_url()."uploads/produk/".$widg2->image;?>" />
											<span class="image-overlay"> <i class="clip-expand circle-icon circle-main-color"></i> </span>
										</a>
									</li>
							<?php
								}
							?>
						</ul>
					</div>
					<div id="carousel" class="flexslider animate-group" data-plugin-options='{"itemWidth": 120, "itemMargin": 5}'>
						<ul class="slides">
							<?php
								foreach ($widget2 as $widg2){
							?>
									<li>
										<img title="<?php echo $widg2->nama_product;?>" src="<?php echo base_url()."uploads/produk/".$widg2->image;?>" class="animate" data-animation-options='{"animation":"fadeIn", "duration":"600"}'/>
									</li>
							<?php
								}
							?>
						</ul>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="section-content">
						<h2>Why Choose Us</h2>
						<hr class="fade-right">
						<?php echo get_data_toko('keunggulan');?>
						<hr class="fade-right">
						<a href="<?php base_url();?>about" class="btn btn-default"><i class="fa fa-info"></i> About Us...</a>
					</div>
				</div>
			</div>
		</div>
		<!-- end: PORTFOLIO CONTAINER -->
	</section>
	<section class="wrapper padding50">
		<!-- start: CLIENTS CONTAINER -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="center">Distributor</h2>
				</div>
				<div class="flexslider col-md-12 animate-group" data-plugin-options='{"directionNav":false, "animation":"slide", "slideshow": false}' data-animation-interval="100">
					<ul class="slides">
						<li>
							<?php
								foreach ($distributor as $dis){
							?>
									<div class="col-md-3 col-sm-3 col-xs-6">
										<img class="img-responsive animate" data-animation-options='{"animation":"fadeIn", "duration":"300"}' src="<?php echo base_url()."uploads/distributor/".$dis->image;?>" title="<?php echo $dis->nama_distributor;?>" alt="<?php echo $dis->nama_distributor;?>">
									</div>
							<?php
								}
							?>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end: CLIENTS CONTAINER -->
	</section>
	
	<section class="wrapper wrapper-grey">
		<!-- start: GENERIC CONTENT CONTAINER -->
		<div class="container">
			<div class="row">
				<div class="col-sm-6" align="center">
					<img title="<?php echo get_data_toko('nama_toko');?>" width="50%" src="<?php echo base_url()."uploads/".get_data_toko('logo_full');?>" class="img-responsive animate-if-visible" data-animation-options='{"animation":"tada", "duration":"600"}'>
				</div>
				<div class="col-sm-6">
					<h2><?php echo get_data_toko('nama_toko');?></h2>
					<hr class="fade-right">
						<?php echo substr(get_data_toko('about'), 0, 500);?>...
					<hr class="fade-right">
					<a class="btn btn-default" href="<?php echo base_url();?>about"><i class="fa fa-info"></i> About Us...</a>
				</div>
			</div>
		</div>
		<!-- end: GENERIC CONTENT CONTAINER -->
	</section>
	
	
	
</div>