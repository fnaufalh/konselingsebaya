        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Kategori</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <?php 
                        foreach ($kategori as $key) : 
                     ?>
                    <form action="<?php echo base_url('proses/edit_kategori')?>/<?php echo $key['ID'];?>" method="POST">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Edit Kategori
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>Nama Kategori</label>
                                    <input name="category" class="form-control" value="<?php echo $key['NAME']; endforeach; ?>">
                                </div>
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
 