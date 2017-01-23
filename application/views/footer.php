<footer class="page-footer deep-purple lighten-2" style="margin-top:-20px;">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">FAQ</h5>
                <p class="grey-text text-lighten-4">Untuk berbagai macam pertanyaan mengenai konselingsebaya bisa dilihat pada link dibawah ini :</p>
                <p><a class="white-text" href="<?php echo base_url('faq'); ?>"><strong>Frequently Ask Question Konselingsebaya</strong></a></p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="<?php echo base_url('siapa'); ?>">Siapa Kami</a></li>
                  <li><a class="grey-text text-lighten-3" href="<?php echo base_url('artikel'); ?>">Artikel</a></li>
                  <li><a class="grey-text text-lighten-3" href="<?php echo base_url('tanya'); ?>">Tanya Profesional</a></li>
                  <li><a class="white-text" href="<?php echo base_url('faq'); ?>">FAQ</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="<?php echo base_url('login'); ?>">Login</a>
            </div>
          </div>
    </footer>
     <script>
     	$(document).ready(function() {
        	$('select').material_select();
    	});
  	</script>
    <script type="text/javascript">
      $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15, // Creates a dropdown of 15 years to control year
        format: 'yyyy-mm-dd',
        "scrollX": true
      });
    </script>
</body>
</html>