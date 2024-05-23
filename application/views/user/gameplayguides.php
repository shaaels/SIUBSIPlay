<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="container-fluid">
            <div class="mt-5">
                <div class="col-md-8 mx-auto my-auto mt-5">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Dashboard / <a href="<?= base_url('game'); ?>">Daftar Game</a> /</span> <?= $titlepage; ?></h4>
                    </div>
                    <?= form_open_multipart('game/infoGame'); ?>
                    <?php foreach ($game as $g) { ?>
                        <form>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-12 mb-4 text-center">
                                        <img src="<?= base_url('assets/img/game_image/') . $g['gambar_game']; ?>" class="img-thumbnail" alt="" width="700">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama_game" class="col-sm-2 col-formlabel">Nama Game</label>
                                <div class="col-sm-10">
                                    <p><?= $g['nama_game']; ?></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="gameplay_guides" class="col-sm-2 col-formlabel">Panduan Bermain</label>
                                <div class="col-sm-10">
                                    <p><?= $g['gameplay_guides']; ?></p>
                                </div>
                                </div>
                                <div>
                                <a href="<?= base_url('game'); ?>" class="btn btn-dark">Kembali</a>
                            </div>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->