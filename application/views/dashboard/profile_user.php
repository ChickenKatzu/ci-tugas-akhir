        <div class="container">
            <div class="row my-2">
                <div class="col-lg-8 order-lg-2">
                    <div class="py-4">
                       <form role="form" method="post">
                        <div class="form-group row">
                         <label class="col-lg-3 col-form-label form-control-label">Nama</label>
                         <div class="col-lg-9">
                            <input class="form-control" type="text" name="nama" value="<?php echo $user->nama ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Alamat</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" name="alamat" value="<?php echo $user->alamat ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Email</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="email" name="email" value="<?php echo $user->email ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Nomor Handphone</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" name="nohp" value="<?php echo $user->nohp ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Pekerjaan</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" name="pekerjaan" value="<?php echo $user->pekerjaan ?>">
                        </div>
                    </div>
                    <!-- <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label"></label>
                        <div class="col-lg-9">
                            <input type="reset" class="btn btn-secondary" value="Cancel">
                            <input type="button" class="btn btn-primary" value="Save Changes">
                        </div>
                    </div> -->
                </form>
            </div>
        </div>
        <div class="col-lg-4 order-lg-1 text-center">
            <i class="mx-auto img-fluid fa fa-user-circle-o" style="font-size: 17em;"></i>
            <!-- <img src="//placehold.it/150" class="mx-auto img-fluid img-circle d-block" alt="avatar"> -->
            <!-- <h6 class="mt-2">Upload a different photo</h6> -->
           <!--  <label class="custom-file">
                <input type="file" id="file" class="custom-file-input">
                <span class="custom-file-control">Choose file</span>
            </label> -->
        </div>
    </div>
</div>