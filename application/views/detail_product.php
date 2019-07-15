<div class="main-container">
	<section class="page-top">
		<div class="container">
			<div class="col-md-4 col-sm-4">
				<h1>Detail Product</h1>
			</div>
			<div class="col-md-8 col-sm-8">
				<ul class="pull-right breadcrumb">
					<li><a href="<?php echo base_url();?>">HOME</a></li>
					<li><a href="<?php echo base_url()."category/".$category['nama_kategori_seo'];?>"><?php echo $category['nama_kategori']?></a></li>
					<li class="active"><?php echo $product['nama_product']?></li>
				</ul>
			</div>
		</div>
	</section>
	<section class="wrapper">
		<div class="container">
			<div class="portfolio-title">
				<div class="row">
					<div class="col-md-12 center">
						<h2 class="shorter"><?php echo $product['nama_product']?></h2>
					</div>
				</div>
			</div>
			<hr class="tall">
			<div class="row">
				<div class="col-md-6">
					<div class="flexslider" data-plugin-options='{"directionNav":true}'>
						<ul class="slides">
							<?php 
								foreach($product_img as $img){
							?>
									<li>
										<img title="<?php echo $img['nama_image'];?>" src="<?php echo base_url().'uploads/produk/'. $img['image']?>" />
									</li>
							<?php
								}
							?>
						</ul>
					</div>
				</div>
				<div class="col-md-6">
					<div class="portfolio-info">
						<div class="row">
							<div class="col-md-12">
								<ul class="pull-right">
									<li><i class="fa fa-calendar"></i><?php echo nama_hari($product['tgl_input']).", ".tgl_indo($product['tgl_input']);?></li>
									<li><i class="fa fa-tags"></i> <a href="<?php echo base_url()."category/".$category['nama_kategori_seo'];?>"><?php echo $category['nama_kategori']?></a></li>
								</ul>
							</div>
						</div>
					</div>
					<h4>Description</h4>
					<p class="taller">
						<?php echo $product['keterangan'];?>
					</p>
					<a data-toggle="modal" class="btn btn-main-color btn-squared" role="button" href="#myModal1"><i class="clip-cart"></i> BUY NOW</a>
					<span data-appear-animation-delay="800" data-appear-animation="rotateInUpLeft" class="arrow hlb appear-animation rotateInUpLeft appear-animation-visible" style="animation-delay: 800ms;"></span>
					<ul class="portfolio-details list-unstyled">
						<li>
							<p><strong>Price:</strong></p>
							<p><blockquote>Rp. <?php echo nominal($product['harga']);?></blockquote></p>
						</li>
						<li>
							<p><strong>Tags:</strong></p>
							<ul class="list list-skills icons list-unstyled list-inline">
								<?php
									foreach ($tags as $t){
								?>
										<li><i class="fa fa-check-circle"></i> <?php echo get_tag('tags', $t['id_tags']);?></li>
								<?php
									}
								?>
							</ul>
						</li>
						<li>
							<p><strong>Quality:</strong></p>
							<p><blockquote><?php echo $product['kualitas'];?></blockquote></p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	
	<section class="wrapper padding50">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="center">Some of Our Product</h1>
					<hr>
				</div>
				<?php
					foreach($product_sama as $prodSama){
				?>
					<div class="col-md-3">
						<div class="flexslider" data-plugin-options='{"directionNav":true, "controlNav": false}'>
							<ul class="slides">
								<?php 
									//foreach($product_sama_img as $img){
								?>
										<li>
											<a class="thumb-info" href="<?php echo base_url()."product/".$prodSama['nama_product_seo'];?>">
											<img class="img-responsive" title="<?php echo $prodSama['nama_product'];?>" src="<?php echo base_url().'uploads/produk/'. $prodSama['image']?>" />
											<span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>
											</a>
										</li>
								<?php
									//}
								?>
							</ul>
						</div>
						<h4><a href="<?php echo base_url()."product/".$prodSama['nama_product_seo'];?>">
							<?php echo $prodSama['nama_product'];?>
						</a></h4>
						<p><?php echo $prodSama['keterangan'];?></p>
					</div>
				<?php
					}
				?>
			</div>
		</div>
	</section>
	
</div>
		
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="clip-cart"></i> How to buy this product</h4>
			</div>
			<div class="modal-body">
				<p>Please contact sales to buy this product.</p>
				<p>
					<i class="clip-location"></i> <strong>Address.</strong> <?php echo get_data_toko('alamat');?>
				</p>
				<p>
					<i class="clip-phone"></i> <strong>Telp.</strong> <?php echo get_data_toko('telp');?> - <strong>Fax.</strong> <?php echo get_data_toko('fax');?>
				</p>
				<p>
					<i class="fa fa-envelope"></i> <strong>Email.</strong> <a href="mailto:<?php echo get_data_toko('email');?>"><?php echo get_data_toko('email');?></a>
				</p>
			</div>
			<div class="modal-footer">
				<button aria-hidden="true" data-dismiss="modal" class="btn btn-default"><i class="fa fa-times"></i> Close</button>
			</div>
		</div>
	</div>
</div>