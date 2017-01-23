<!--	<div class="slider">
	    <ul class="slides">
	      <li>
	        <img src="http://lorempixel.com/580/250/nature/1">
	        <div class="caption center-align">
	          <h3>This is our big Tagline!</h3>
	          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
	        </div>
	      </li>
	      <li>
	        <img src="http://lorempixel.com/580/250/nature/2">
	        <div class="caption left-align">
	          <h3>Left Aligned Caption</h3>
	          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
	        </div>
	      </li>
	      <li>
	        <img src="http://lorempixel.com/580/250/nature/3">
	        <div class="caption right-align">
	          <h3>Right Aligned Caption</h3>
	          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
	        </div>
	      </li>
	      <li>
	        <img src="http://lorempixel.com/580/250/nature/4">
	        <div class="caption center-align">
	          <h3>This is our big Tagline!</h3>
	          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
	        </div>
	      </li>
	    </ul>
  	</div>
  	-->
  	<div class="container">
  		<div class="row">
  			<div class="col s12" style="padding-top:20px;">
	        	<a href="<?php echo base_url(); ?>" class="breadcrumb black-text">Beranda</a>
	        	<a href="<?php echo base_url(); ?>" class="breadcrumb black-text"></a>
	      	</div>
  			<div class="col s12 m12">
  				<div class="col s12 m12 section">
				    <h3 class="center header title-cust">Konselingsebaya</h3>
				    <?php 
				    	foreach ($pengantar as $key) {
				    		echo $key['CONTENT'];
				    	}
				     ?>
				</div>
				<div class="divider"></div>
				<div class="col s12 m6">
					<div class="card">
					    <div class="card-image waves-effect waves-block waves-light">
					      <a href="<?php echo base_url('siapa'); ?>"><img class="activator" src="assets/img/team.jpg"></a>
					    </div>
					    <div class="card-content">
					      <span class="card-title activator grey-text text-darken-4"><a href="<?php echo base_url('siapa'); ?>">Siapa Kami</a></span>
					    </div>
  					</div>
				</div>
				<div class="col s12 m6">
					<div class="card">
					    <div class="card-image waves-effect waves-block waves-light">
					      <a href="<?php echo base_url('siapa'); ?>"><img class="activator" src="assets/img/history.jpg"></a>
					    </div>
					    <div class="card-content">
					      <span class="card-title activator grey-text text-darken-4"><a href="<?php echo base_url('sejarah'); ?>">Sejarah</a></span>
					    </div>
  					</div>
				</div>
				<div class="divider"></div>
			</div>
		</div>
	</div>
	<!-- <div class="deep-purple lighten-3">
		<div class="header center white-text title-cust" style="padding:5px 10px;"><h3>Kerjasama</h3></div>
	</div>
	<div class="deep-purple lighten-4">
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
	</div> -->
	<div class="grey lighten-3" style="margin-top:-20px;">
		<div class="container">
	  		<div class="row">
	  			<div class="col s12 m12 section">
				    <h3 class="header center title-cust">Artikel Terbaru</h3>
				    <?php foreach ($artikel as $key) : ?>
			        <div class="col s12 m4">
			          <div class="card indigo lighten-2">
			            <div class="card-content white-text">
			              <span class="card-title"><?php echo substr($key['TITLE'], 0, 25); ?> ...</span>
			              <p><?php echo substr($key['CONTENT'], 0, 150); ?> ...</p>
			            </div>
			            <div class="card-action indigo lighten-1">
			              <a class="white-text" href="<?php echo base_url('artikel/baca') ?>/<?php echo $key['ID']; ?>">Baca Selengkapnya</a>
			            </div>
			          </div>
			        </div>
			    	<?php endforeach; ?>
			        <div class="center" style="margin-bottom:20px;">
						<a href="<?php echo base_url('artikel'); ?>" class="deep-purple lighten-2 waves-effect waves-light btn-large">Artikel Lainnya</a>
					</div>
				</div>
	  		</div>
	  	</div>
	</div>
	<div class="grey lighten-4" style="margin-top:-30px;">
		<div class="container">
			<div class="row">
				<h2 class="header center title-cust">Konselor</h2>
				<div class="col s12 m12">
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
				<div class="center" style="margin-bottom:20px;">
						<a href="<?php echo base_url('artikel'); ?>" class="deep-purple lighten-2 waves-effect waves-light btn-large">Konselor Lainnya</a>
					</div>
			</div>
		</div>
	</div>