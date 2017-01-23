	<div class="grey lighten-4">
		<div class="container">
	  		<div class="row">
	  			<div class="col s12 m8 offset-m2 center">
	  				<div class="card white">
				        <div class="card-content black-text">
				          <span class="card-title center">LOGIN CURHAT</span>
				          </div>
				          <?php 
				          $attr = array('autocomplete' => 'off',
				          					'method'   => 'POST');
				          echo form_open('verifylogin', $attr); ?>	
				          	<div class="input-field col s12 m12">
					          <input name="username" id="username" type="text" class="validate">
					          <label for="username">Username</label>
				        	</div>
				        	<div class="input-field col s12 m12">
				          		<input name="password" id="password" type="password" class="validate">
				          		<label for="password">Password</label>
				        	</div>
							<button style="margin-bottom:20px;" class="btn waves-effect waves-light deep-purple lighten-1" type="submit">
				        		Login
								<i class="material-icons right">send</i>
							</button>
							<button style="margin-bottom:20px;" class="btn waves-effect waves-light deep-purple lighten-1" type="submit" formaction="<?php echo base_url('daftar'); ?>" onclick="location.href='<?php echo base_url('daftar'); ?>'">
				        		Daftar
								<i class="material-icons right">send</i>
							</button>
					          </form>
					    </div>
	  			</div>
	  		</div>
	  	</div>
		
    </div>