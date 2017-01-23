        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Kata Pengantar</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="<?php echo base_url('proses/pengantar'); ?>" method="POST">
                        <textarea name="foreword">
                            <?php 
                                foreach ($pengantar as $key) {
                                    echo $key['CONTENT'];
                                }
                            ?>
                        </textarea>
                        <button type="submit" style="margin:20px 0px 20px 0px;" class="btn btn-default">Simpan</button>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
 