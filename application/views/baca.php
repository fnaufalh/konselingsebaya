	<div class="grey lighten-4" style="margin-top:-20px">
		<div class="container">
	  		<div class="row">
	  			<?php foreach ($baca as $key) : ?>
	  			<div class="col s12" style="padding-top:20px;">
	  				<a href="<?php echo base_url(''); ?>" class="breadcrumb black-text">Beranda</a>
			        <a href="<?php echo base_url('artikel'); ?>" class="breadcrumb black-text">Artikel</a>
			        <a href="<?php echo base_url('artikel/baca') ?>/<?php echo $key['ID']; ?>" class="breadcrumb black-text"><?php echo $key['TITLE']; ?></a>
			    </div>
	  			<div class="col s12 m8">
	  				<div class="card-panel white">
	  				  <h5 class="header"><?php echo $key['TITLE']; ?></h5>
	  				  <span>Author : <a href="<?php echo base_url('profil/index') ?>/<?php echo $key['ID_USER']; ?>"><?php echo $key['FIRSTNAME']; ?> <?php echo $key['LASTNAME']; ?></a></span>
	  				  <div class="divider"></div>
			          <p><?php echo $key['CONTENT']; ?></p>
			        </div>	
	  			</div>
	  			<?php endforeach; ?>
	  			<div class="col s12 m4">
	  				<ul class="collection with-header">
	  					<li class="collection-header"><h5 class="center">Konselor</h5></li>
	  					<?php foreach ($konselor as $key2) : ?>
					    <li class="collection-item avatar">
					      <img src="<?php echo base_url($key2['AVATAR']); ?>" alt="" class="circle">
					      <span class="title"><?php echo $key2['FIRSTNAME']; ?> <?php echo $key2['LASTNAME']; ?></span>
					      <p><span class="blue-text"><?php echo $key2['TITLENAME']; ?></span>
					      </p>
					      <a href="<?php echo base_url('profil/index') ?>/<?php echo $key2['ID_USER']; ?>" class="secondary-content"><i class="material-icons">account_circle</i></a>
					    </li>
						<?php endforeach; ?>
					</ul>
	  				<ul class="collection with-header">
				        <li class="collection-header"><h5 class="center">Artikel Terbaru</h5></li>
				        <?php foreach ($artikel as $key3) : ?>
				        <li class="collection-item"><a class="collection-item" href="<?php echo base_url('artikel/baca') ?>/<?php echo $key3['ID']; ?>"><?php echo substr($key3['TITLE'], 0, 500); ?> ...</a></li>
						<?php endforeach; ?>			     
				     </ul>
	  			</div>

	  		</div>
	  	</div>
	  </div>
	 