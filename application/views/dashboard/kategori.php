        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Kategori</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="<?php echo base_url('proses/kategori'); ?>" method="POST">
                        <div class="panel panel-default">
                            <div class="panel-heading grey-text">
                                Daftar Kategori
                            </div>
                            <div class="panel-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <td>Nama Kategori</td>
                                            <td colspan="2" align="center">Aksi</td>
                                        </tr>
                                    </thead>
                                <?php 
                                    foreach ($kategori as $key) :
                                ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $key['NAME']; ?></td>
                                            <td align="center"><a href="<?php echo base_url('dashboard/edit_kategori')."/".$key['ID']; ?>">Edit</a></td>
                                            <td align="center"><a href="<?php echo base_url('proses/hapus_kategori')."/".$key['ID']; ?>">Hapus</a></td>
                                        </tr>
                                    </tbody>
                                <?php 
                                    endforeach;
                                 ?>
                                 </table>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Tambah Kategori
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>Nama Kategori</label>
                                    <input name="category" class="form-control">
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
 