	<div class="deep-purple lighten-4">
		<div class="container">
	  		<div class="row">
	  			<div class="col s12" style="padding-top:20px;">
		        	<a href="<?php echo base_url(); ?>" class="breadcrumb black-text">Beranda</a>
		        	<a href="<?php echo base_url('sejarah'); ?>" class="breadcrumb black-text">Sejarah</a>
		      	</div>
	  			<div class="col s12 m12 section black-text">
	  				<h3 class="center header title-cust">Sejarah</h3>
	  				<?php 
	  					foreach ($sejarah as $key) {
	  						echo $key['CONTENT'];
	  					}
	  				 ?>
	  			</div>
	  		</div>
	  	</div>
  	</div>
  	<div class="grey lighten-4" style="margin-top:-20px;">
  		<div class="container">
	  		<div class="row">
	  			<div class="col s12 m12 section">
				    <div class="card-panel deep-purple lighten-5" style="margin-top:20px;padding-bottom:70px;">
				    	<h5 class="title-cust">Visi dan Misi</h5>
				    	<span class="white-text">
				    	<?php 
		  					foreach ($visimisi as $key2) {
		  						echo $key2['CONTENT'];
		  					}
		  				 ?>
	  				 	</span>
				    </div>
				  </div>
	  			</div>
	  		</div>
	  	</div>
  	</div>
  	<div class="grey lighten-3" style="margin-top:-20px;">
		<div class="header center title-cust" style="padding:5px 10px;"><h3>Kerjasama</h3></div>
	</div>
	<div class="grey lighten-4">
		<div class="container">
	  		<div class="row">
	  			<div class="col s12 m12 section center" style="padding:25px 10px;">
					<img width="20%" class="responsive-img" src="assets/img/velsoft.png">
					<img width="20%" class="responsive-img" src="assets/img/omek.png">
					<img width="20%" class="responsive-img" src="assets/img/trident.png">

  				</div>
  				<div class="divider"></div>
	  		</div>
	  	</div>
	</div>