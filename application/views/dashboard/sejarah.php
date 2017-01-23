        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Sejarah</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="<?php echo base_url('proses/sejarah'); ?>" method="POST">
                        <div class="panel panel-default">
                            <div class="panel-heading grey-text">
                                Sejarah
                            </div>
                            <div class="panel-body">
                                <textarea name="history">
                                    <?php 
                                        foreach ($sejarah as $key) :
                                            echo $key['CONTENT'];
                                        endforeach;
                                    ?>
                                </textarea>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Visi & Misi
                            </div>
                            <div class="panel-body">
                                <textarea name="visionandmission">
                                    <?php 
                                        foreach ($visimisi as $key2) :
                                            echo $key2['CONTENT'];
                                        endforeach;
                                    ?>
                                </textarea>
                            </div>
                        </div>
                        
                        <button type="submit" style="margin:20px 0px 20px 0px;" class="btn btn-default">Simpan</button>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
 