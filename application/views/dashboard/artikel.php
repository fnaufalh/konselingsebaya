        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Artikel</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading grey-text">
                                Daftar Artikel
                            </div>
                            <div class="panel-body">
                                <table id="example" class="table display">
                                    <thead>
                                        <tr>
                                            <td>Judul</td>
                                            <td>Category</td>
                                            <td>Penulis</td>
                                            <td>Perubahan</td>
                                            <td></td>
                                            <td>Aksi</td>
                                        </tr>
                                    </thead>
                                <?php 
                                    foreach ($artikel as $key) {
                                ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $key['TITLE']; ?></td>
                                            <td><?php echo $key['CATEGORY_NAME']; ?> <?php echo $key['LASTNAME']; ?></td>
                                            <td><?php echo $key['AUTHOR']; ?></td>
                                            <td><?php echo $key['LAST_UPDATE']; ?></td>
                                            <td><a href="<?php echo base_url('dashboard/edit_artikel')."/".$key['ID']; ?>">Edit</a></td>
                                            <td><a href="<?php echo base_url('proses/hapus_artikel')."/".$key['ID']; ?>">Hapus</a></td>
                                        </tr>
                                    </tbody>
                                <?php 
                                    }
                                 ?>
                                 </table>
                            </div>
                        </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
 