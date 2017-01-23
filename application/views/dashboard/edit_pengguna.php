        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Pengguna</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <?php 
                        foreach ($pengguna as $key) :
                     ?>
                    <form action="<?php echo base_url('proses/edit_pengguna')?>/<?php echo $key['ID'];?>" method="POST">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Edit Pengguna
                            </div>
                            <div class="panel-body">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input name="username" type="text" class="form-control" value="<?php echo $key['USERNAME']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input name="password" type="password" class="form-control" value="<?php echo $key['PASSWORD']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input name="username" type="text" class="form-control" value="<?php echo $key['TITLENAME']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Firstname</label>
                                        <input name="firstname" type="text" class="form-control" value="<?php echo $key['FIRSTNAME']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Lastname</label>
                                        <input name="lastname" type="text" class="form-control" value="<?php echo $key['LASTNAME']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Birthdate</label>
                                        <input name="birthdate" type="text" class="form-control" value="<?php echo $key['BIRTHDATE']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Status Education</label>
                                        <input name="stat_edu" type="text" class="form-control" value="<?php echo $key['STAT_EDU']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Avatar</label>
                                        <input name="birthdate" type="text" class="form-control" value="<?php echo $key['AVATAR']; endforeach; ?>">
                                    </div>
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
 