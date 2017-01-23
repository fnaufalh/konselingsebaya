
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.datatables.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/datatables.bootstrap.min.js'); ?>"></script>

    <script type="text/javascript">
          $(document).ready(function() {
              $('#example').DataTable({
                "bSearchable": true,
                "scrollx": true,
                "aoColumnDefs": [
                  { 'bSortable': true, 'aTargets': [ 1 ] }
                ]

              });
              $('#example').sortable();
              $('#example').bind('click.sortable mousedown.sortable',function(ev){
              ev.target.focus();
              });
          } );
      </script>
      
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/admin/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>


    

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('assets/admin/vendor/metisMenu/metisMenu.min.js'); ?>"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url('assets/admin/vendor/raphael/raphael.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/vendor/morrisjs/morris.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/data/morris-data.js'); ?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('assets/admin/dist/js/sb-admin-2.js'); ?>"></script>

    
</body>

</html>