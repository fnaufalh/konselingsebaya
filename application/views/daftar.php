	<div class="grey lighten-4">
		<div class="container">
	  		<div class="row">
	  			<div class="col s12 m12 white">
				        	<h5 class="header title">
				        		Daftar Curhat
				        	</h5>
				        	<div class="divider"></div>
				        	<form autocomplete="off" method="GET" action="<?php echo base_url('daftar/proses'); ?>">
					        	<div class="input-field col s6">
						        	<input name="firstname" id="firstname" type="text" class="validate">
						        	<label for="firstname">Nama Depan</label>
						        </div>
						        <div class="input-field col s6">
						        	<input name="lastname" id="lastname" type="text" class="validate">
						        	<label for="lastname">Nama Belakang</label>
						        </div>

						        <div class="input-field col s12">
						        	<input name="username" id="username" type="text" class="validate">
						        	<label for="username">Username</label>
						        </div>
						        <div class="input-field col s6">
						        	<input id="password" type="password" class="validate">
						        	<label for="password">Password</label>
						        </div>
						        <div class="input-field col s6">
						        	<input name="repassword" id="repassword" type="password" class="validate">
						        	<label for="repassword">Konfirmasi Password</label>
						        </div>
						        <div class="input-field col s12">
						        	<select name="statedu">
								      <option value="" disabled selected>Pilih opsi</option>
								      <option value="Dosen">Dosen</option>
								      <option value="Pelajar">Pelajar</option>
								      <option value="Umum">Umum</option>
								    </select>
								    <label for="statedu">Status Pendidikan</label>
						        </div>
						        <div class="input-field col s12">
						        	<input name="birth" type="date" class="datepicker">
								    <label for="birth">Tahun</label>
						        </div>
						        <div class="input-field col s12">
						        	<textarea disabled style="min-height:200px;" class="grey lighten-4 grey-text">
sebagai pengguna layanan Konseling Sebaya menyetujui bahwa:

1.	layanan konseling bersifat suka rela dan tidak dipungut biaya
2.	layanan konseling ini tidak bertujuan untuk menangani gangguan mental berat
3.	seluruh kegiatan konseling yang dilakukan berada di bawah supervisor Ika Fitria, M.Psi., Dian Putri Permatasari, M.Si., dan Ratri Nurwanti, M.Psi., sebagai penanggung jawab kegiatan ini
4.	seluruh data yang diperoleh bersifat rahasia dan tidak akan dipublikasikan untuk kepentingan apa pun
5.	jika pengguna merasa tidak nyaman dengan proses konseling yang sedang berlangsung maka  pengguna dapat menghentikan proses konseling atau mengganti konselor tanpa pemberitahuan sebelumnya
6.	konselor hanya merupakan fasilitator dalam membantu menghadapi permasalahan yang dialami dan tidak bertanggung jawab terhadap penyelesaian masalah serta tindakan yang diambil oleh pengguna.

						        	</textarea>
						        </div>
						        <div class="input-field col s12">
						        	<input type="checkbox" value="1" name="term"> Dengan ini saya menyetujui persetujuan diatas
						        </div>
						        <button style="margin-bottom:20px;" class="btn waves-effect waves-light right deep-purple lighten-1" type="submit">
					        		Daftar
									<i class="material-icons right">send</i>
								</button>
					        </form>
	  			</div>
	  		</div>
	  	</div>
	</div>