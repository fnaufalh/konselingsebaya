	<div class="grey lighten-4" style="margin-top:-20px">
		<div class="container">
	  		<div class="row">
	  			<?php foreach ($konselor as $key) : ?>
		      <div class="col s12" style="padding-top:20px;">
		      <a href="<?php echo base_url(''); ?>" class="breadcrumb black-text">Beranda</a>
		        <a href="<?php echo base_url('konselor'); ?>" class="breadcrumb black-text">Konselor</a>
		        <a href="<?php echo base_url('profil/index'); ?>/<?php echo $key['ID_USER']; ?>" class="breadcrumb black-text"><?php echo $key['FIRSTNAME']; ?> <?php echo $key['LASTNAME']; ?></a>
		      </div>
		      <div class="col s12 m8">
		      	<div class="card">
		            <div class="card-image">
		              <img src="<?php echo base_url(); ?>/<?php echo $key['AVATAR']; ?>">
		              <span class="card-title black-text"><?php echo $key['FIRSTNAME']; ?> <?php echo $key['LASTNAME']; ?></span>
		            </div>
		         </div>
		      </div>
		      <div class="col s12 m4">
		          <div class="new green white-text center" style="padding:15px 10px;margin-bottom:10px;">Menerima pasien</div>
		      </div>
		      <div class="col s12 m4">
		      	<div class="card-panel  deep-purple lighten-1">
		      	  <span class="white-text">
		          	<strong>Nama :</strong><p><?php echo $key['FIRSTNAME']; ?> <?php echo $key['LASTNAME']; ?></p>
		          </span>
		          <span class="white-text">
		          	<strong>Usia :</strong><p>20 Tahun</p>
		          </span>
		          <span class="white-text">
		          	<strong>Pekerjaan :</strong><p><?php echo $key['JOB']; ?></p>
		          </span>
		          <span class="white-text">
		          	<strong>Motto :</strong><p><?php echo $key['MOTTO']; ?></p>
		          </span>
		        </div>	
		      </div>
		  <?php endforeach; ?>
	  		</div>
	  	</div>
	 </div>