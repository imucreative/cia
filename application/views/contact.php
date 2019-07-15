<div class="main-container">

			<section class="page-top">
				<div class="container">
					<div class="col-md-4 col-sm-4">
						<h1>Contact Us</h1>
					</div>
					<div class="col-md-8 col-sm-8">
						<ul class="pull-right breadcrumb">
							<li><a href="<?php echo base_url();?>">HOME</a></li>
							<li class="active">CONTACT US</li>
						</ul>
					</div>
				</div>
			</section>
			<section class="wrapper no-padding">
				<div id="map"></div>
			</section>
			<section class="wrapper padding50">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div id="contactSuccess" class="alert alert-success hidden">
								<strong>Success!</strong> Your message has been sent to us.
							</div>
							<div id="contactError" class="alert alert-error hidden">
								<strong>Error!</strong> There was an error sending your message.
							</div>
							<h2>Contact Us</h2>
							<?php echo form_open('contact/send_mail_to_admin');?>
								<div class="row">
									<div class="form-group">
										<div class="col-md-6">
											<label>
												Your name <span class="symbol required"></span>
											</label>
											<input type="text" id="name" name="name" class="form-control" maxlength="100" data-msg-required="Please enter your name." value="" required>
										</div>
										<div class="col-md-6">
											<label>
												Your email address <span class="symbol required"></span>
											</label>
											<input type="email" id="email" name="email" class="form-control" maxlength="100" data-msg-email="Please enter a valid email address." data-msg-required="Please enter your email address." value="" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>
												Subject <span class="symbol required"></span>
											</label>
											<input type="text" id="subject" name="subject" class="form-control" maxlength="100" data-msg-required="Please enter the subject." value="" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>
												Message <span class="symbol required"></span>
											</label>
											<textarea id="message" name="message" class="form-control" rows="10" data-msg-required="Please enter your message." maxlength="5000" required></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<input type="submit" data-loading-text="Loading..." class="btn btn-main-color submit_message" value="Send Message">
									</div>
								</div>
							</form>
						</div>
						<div class="col-md-6">
							<!--
							<h4>Get in touch</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus.
							</p>
							-->
							
							
							
							<hr>
							<h4>The Office</h4>
							<ul class="list-unstyled">
								<li>
									<strong><?php echo get_data_toko('nama_toko');?></strong>
								</li>
								<li>
									<i class="fa fa-map-marker"></i> <strong>Address: </strong><?php echo get_data_toko('alamat');?>
								</li>
								<li>
									<i class="fa fa-phone"></i> <strong>Phone: </strong><?php echo get_data_toko('telp');?> - <strong>Fax: </strong><?php echo get_data_toko('fax');?>
								</li>
								<li>
									<i class="fa fa-envelope"></i> <strong>Email: </strong>
									<a href="mailto:<?php echo get_data_toko('email');?>"><?php echo get_data_toko('email');?></a>
								</li>
							</ul>
							
							<hr class="right">
							<h4>Network</h4>
							<?php
								foreach ($network as $net){
							?>
									
									<ul class="list-unstyled">
										<li>
											<strong><?php echo $net->net_nama;?></strong>
										</li>
										<li>
											<i class="fa fa-map-marker"></i> <strong>Address: </strong><?php echo $net->net_alamat;?>
										</li>
										<li>
											<i class="fa fa-phone"></i> <strong>Phone: </strong><?php echo $net->net_phone;?> - <strong>Fax: </strong><?php echo $net->net_fax;?>
										</li>
									</ul>
									<hr class="right">
							<?php
								}
							?>
							
							
							
							
						</div>
					</div>
				</div>
			</section>
		</div>
		
		
		<script>
			$(".submit_message").click(function(){
				alert("Email Under Construction");
				return false;
			});
		</script>