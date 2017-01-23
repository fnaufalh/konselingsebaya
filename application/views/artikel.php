	<div class="grey lighten-4">
		<div class="container">
	  		<div class="row">
	  			<div class="col s12" style="padding-top:20px;">
		        	<a href="<?php echo base_url(); ?>" class="breadcrumb black-text">Beranda</a>
		        	<a href="<?php echo base_url('artikel'); ?>" class="breadcrumb black-text">Artikel</a>
		      	</div>
	  			<div class="col s12 m12 section">
	  				<h3 class="center header title-cust">Artikel</h3>
	  				<form>
				        <div class="input-field">
				          <input id="search" type="search" placeholder="Cari Artikel" required>
				          <i class="material-icons">close</i>
				        </div>
				      </form>
	  				<!-- <h5 class="header title-cust">Top Artikel</h5>
	  				<div class="col s12 m4">
			          <div class="card green lighten-1">
			            <div class="card-content white-text">
			              <span class="card-title">Card Title</span>
			              <p>I am a very simple card. I am good at containing small bits of information.
			              I am convenient because I require little markup to use effectively.</p>
			            </div>
			            <a href="#" class="green-text">
				            <div class="card-action center light-green lighten-4">
				              Baca Artikel
				            </div>
			            </a>
			          </div>
			        </div>
			        <div class="col s12 m4">
			          <div class="card green lighten-1">
			            <div class="card-content white-text">
			              <span class="card-title">Card Title</span>
			              <p>I am a very simple card. I am good at containing small bits of information.
			              I am convenient because I require little markup to use effectively.</p>
			            </div>
			            <a href="#" class="green-text">
				            <div class="card-action center light-green lighten-4">
				              Baca Artikel
				            </div>
			            </a>
			          </div>
			        </div>
			        <div class="col s12 m4">
			          <div class="card green lighten-1">
			            <div class="card-content white-text">
			              <span class="card-title">Card Title</span>
			              <p>I am a very simple card. I am good at containing small bits of information.
			              I am convenient because I require little markup to use effectively.</p>
			            </div>
			            <a href="#" class="green-text">
				            <div class="card-action center light-green lighten-4">
				              Baca Artikel
				            </div>
			            </a>
			          </div>
			        </div> -->
			        <div class="col s12 m12">
	  					<h5 class="header title-cust top-space-30px">Artikel Terbaru</h5>
	  				</div>
	  				<div class="col s12 m12">
	  					<?php foreach ($artikel as $key) : ?>
			          <div class="card indigo lighten-2">
			            <div class="card-content white-text">
			              <span class="card-title"><?php echo $key['TITLE']; ?></span>
			              <p><?php echo substr($key['CONTENT'], 0, 300); ?> ...</p>
			            </div>
			            <a href="<?php echo base_url('artikel/baca') ?>/<?php echo $key['ID']; ?>" class="green-text">
				            <div class="card-action center indigo lighten-1 white-text">
				              Baca Artikel
				            </div>
			            </a>
			          </div>
			      <?php endforeach; ?>
			        </div>
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
	  </div>
	  