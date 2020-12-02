        <div class="container">
            <div class="row my-2">
                <div class="col-lg-8 order-lg-2">
                    <div class="py-4">
                        <?php foreach ($user as $u) { ?>
                           <form role="form" method="post">
                            <div class="form-group row">
                                <input type="hidden" name="id" value="<?php echo $u->id?>">
                                <label class="col-lg-3 col-form-label form-control-label">Nama</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" name="nama" value="<?php echo $u->nama ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Alamat</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" name="alamat" value="<?php echo $u->alamat ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="email" name="email" value="<?php echo $u->email ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Nomor Handphone</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" name="nohp" value="<?php echo $u->nohp ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Pekerjaan</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" name="pekerjaan" value="<?php echo $u->pekerjaan ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                <div class="col-lg-9">
                                  <a href="<?php echo base_url() ?>owner_users">
                                      <button type="button" class="btn btn-primary">Kembali</button>
                                  </a>
                              </div>
                          </div>
                      </form>
                  <?php } ?>
              </div>
          </div>
          <div class="col-lg-4 order-lg-1 text-center">
            <i class="mx-auto img-fluid fa fa-user-circle-o" style="font-size: 17em;"></i>
        </div>
    </div>
</div>