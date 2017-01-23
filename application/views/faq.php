	<div class="grey lighten-4" style="margin-top:-20px;">
  		<div class="container">
	  		<div class="row">
	  			<div class="col s12" style="padding-top:20px;">
		        	<a href="<?php echo base_url(); ?>" class="breadcrumb black-text">Beranda</a>
		        	<a href="<?php echo base_url('faq'); ?>" class="breadcrumb black-text">FAQ</a>
		      	</div>
	  			<div class="col s12 m12 section">
	  				<h3 class="center header title-cust">FAQ</h3>
	  				<?php 
	  					foreach ($faq as $key) {
	  				?>
			        <div class="card-panel grey lighten-5 z-depth-1">
			          <div class="row valign-wrapper">
			            <div class="col s12">
			            	<span class="h6-cust"><strong><?php echo $key['QUESTION']; ?></strong></span>
			              <span class="black-text">
			                <p><?php echo $key['ANSWER']; ?></p>
			              </span>
			            </div>
			          </div>
			        </div>
	  				<?php
	  					}
	  				 ?>
	  			</div>
	  		</div>
	  	</div>
  	</div>