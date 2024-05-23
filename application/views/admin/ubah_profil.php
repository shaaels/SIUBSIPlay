<div class="container-fluid">
    <div class="mt-5">
        <div class="col-md-8 mx-auto my-auto mt-5">
            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="py-3 mb-4"><span class="text-muted fw-light">User /</span> <?= $titlepage; ?></h4>
            </div>
            <?= form_open_multipart('admin/ubahProfil'); ?>
            <?php foreach ($users as $usr) { ?>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-formlabel">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" value="<?= $usr['email']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-formlabel">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $usr['nama_user']; ?>">
                        <?= form_error('nama', '<small class="textdanger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">Gambar</div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= base_url('assets/img/profil/') . $usr['image_user']; ?>" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image" accept="image/*">
                                    <label class="custom-file-label" for="image">Pilih file</label> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Ubah</button>
                        <a class="btn btn-dark" href="<?= base_url('admin/daftarUser'); ?>"> Kembali</a>
                    </div>
                </div>
                </form>
            <?php } ?>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->