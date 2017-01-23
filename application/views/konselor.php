	<div class="grey lighten-4" style="margin-top:-20px">
		<div class="container">
	  		<div class="row">
		  		<div class="col s12" style="padding-top:20px;">
		        	<a href="<?php echo base_url(); ?>" class="breadcrumb black-text">Beranda</a>
		        	<a href="<?php echo base_url(); ?>" class="breadcrumb black-text">Konselor</a>
		      	</div>
		  		<h3 class="center header title-cust">Daftar Konselor</h3>
		  		<div class="col s12 m12">
		  				<form>
					        <div class="input-field">
					          <input id="search" type="search" placeholder="Cari Dokter" required>
					          <i class="material-icons">close</i>
					        </div>
					      </form>
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
				            	<a class="white-text" href="<?php echo base_url('profil/index'); ?>/<?php echo $key['ID_USER']; ?>"><div class="new  deep-purple lighten-1 center" style="padding:15px 10px;">Lihat Profil</div></a>
				            </div>
				          </div>
				        </div>
			    		<?php endforeach; ?>
					<ul class="pagination center">
						    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
						    <li class="active"><a href="#!">1</a></li>
						    <li class="waves-effect"><a href="#!">2</a></li>
						    <li class="waves-effect"><a href="#!">3</a></li>
						    <li class="waves-effect"><a href="#!">4</a></li>
						    <li class="waves-effect"><a href="#!">5</a></li>
						    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
						</ul>


		  		</div>
	  	</div>
	</div>