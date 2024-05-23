<div class="container-fluid">
    <div class="mt-5">
        <div class="col-md-8 mx-auto my-auto mt-5">
            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="py-3 mb-4"><span class="text-muted fw-light">Dashboard / <a href="<?= base_url('game'); ?>">Daftar Game</a> /</span> <?= $titlepage; ?></h4>
            </div>
            <?php foreach ($game as $g) { ?>
                <form action="<?= base_url('game/ubahPanduan'); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="gameplay_guides" class="col-sm-2 col-formlabel">Panduan Bermain</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="gameplay_guides" name="gameplay_guides" value="<?= $g['gameplay_guides']; ?>">
                            <?= form_error('gameplay_guides', '<small class="textdanger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Ubah</button>
                            <button class="btn btn-dark" onclick="window.history.go(-1)"> Kembali</button>
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