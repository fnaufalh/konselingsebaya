        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">FAQ</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading grey-text">
                                Daftar Pertanyaan dan Jawaban
                            </div>
                            <div class="panel-body">
                                <table id="example" class="table display">
                                    <thead>
                                        <tr>
                                            <td>Pertanyaan</td>
                                            <td>Jawaban</td>
                                            <td></td>
                                            <td>Aksi</td>
                                        </tr>
                                    </thead>
                                <?php 
                                    foreach ($faq as $key) {
                                ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $key['QUESTION']; ?></td>
                                            <td><?php echo $key['ANSWER']; ?></td>
                                            <td><a href="<?php echo base_url('dashboard/edit_pengguna')."/".$key['ID']; ?>">Edit</a></td>
                                            <td><a href="<?php echo base_url('proses/hapus_pengguna')."/".$key['ID']; ?>">Hapus</a></td>
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
 