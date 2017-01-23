	<div class="deep-purple lighten-4">
		<div class="container">
	  		<div class="row">
	  			<div class="col s12" style="padding-top:20px;">
		        	<a href="<?php echo base_url(); ?>" class="breadcrumb black-text">Beranda</a>
		        	<a href="<?php echo base_url('siapa'); ?>" class="breadcrumb black-text">Siapa Kami</a>
		      	</div>
	  			<div class="col s12 m12 section">
	  				<h3 class="center header title-cust">Siapa Kami</h3>
	  				<?php 
	  					foreach ($siapa as $key):
	  						echo $key['CONTENT'];
	  					endforeach;
	  				 ?>
	  			</div>
	  		</div>
	  	</div>
  	</div>
	<div class="grey lighten-4" style="margin-top:-20px;">
  		<div class="container">
	  		<div class="row">
	  			<div class="col s12 m12 section">
	  				<h3 class="center header title-cust">Tim Kami</h3>
			        <?php foreach ($konselor as $key) : ?>
					<div class="card-panel grey lighten-5 z-depth-1">
			          <div class="row valign-wrapper">
			            <div class="col s2">	
			              <img src="<?php echo base_url($key['AVATAR']); ?>" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
			            </div>
			            <div class="col s7">
			            	<span class="h6-cust"><strong><?php echo $key['FIRSTNAME']; ?> <?php echo $key['LASTNAME']; ?></strong></span>
				        	<span class="left-space-10px blue-text"><?php echo $key['TITLENAME']; ?></span>
			              <span class="black-text">
			                <p><?php echo $key['MOTTO']; ?></p>
			              </span>
			            </div>
			            <div class="col s3">
			            	<div class="new green white-text center" style="padding:15px 10px;margin-bottom:10px;">Menerima pasien</div>
			            	<a class="white-text" href="<?php echo base_url('profil/index'); ?>/<?php echo $key['ID_USER']; ?>"><div class="new deep-purple lighten-1 center" style="padding:15px 10px;">Lihat Profil</div></a>
			            </div>
			          </div>
			        </div>
			    <?php endforeach; ?>
	  			</div>
	  		</div>
	  	</div>
  	</div>