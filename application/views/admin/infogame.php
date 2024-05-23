<div class="container-fluid">
    <div class="mt-5">
        <div class="col-md-8 mx-auto my-auto mt-5">
            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="py-3 mb-4"><span class="text-muted fw-light">Dashboard / <a href="<?= base_url('game'); ?>">Daftar Game</a> /</span> <?= $titlepage; ?></h4>
            </div>
            <!-- <?= form_open_multipart('game/infoGame'); ?> -->
            <?php foreach ($game as $g) { ?>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-10 mb-4 text-center">
                            <img src="<?= base_url('assets/img/game_image/') . $g['gambar_game']; ?>" class="img-thumbnail" alt="" width="600">
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
                    <label for="publisher_game" class="col-sm-2 col-formlabel">Publisher</label>
                    <div class="col-sm-10">
                        <p><?= $g['publisher_game']; ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="developer_game" class="col-sm-2 col-formlabel">Developer</label>
                    <div class="col-sm-10">
                        <p><?= $g['developer_game']; ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="id_category" class="col-sm-2 col-formlabel">Kategori Game</label>
                    <div class="col-sm-10">
                        <?php 
                            if ($g['id_category'] == '1') {
                                echo "<p>Anime</p>";
                            } else if ($g['id_category'] == '2') {
                                echo "<p>Open World</p>";
                            } else if ($g['id_category'] == '3') {
                                echo "<p>RPG</p>";
                            } else if ($g['id_category'] == '4') {
                                echo "<p>Story Rich</p>";
                            } else if ($g['id_category'] == '5') {
                                echo "<p>Fighting</p>";
                            } else if ($g['id_category'] == '6') {
                                echo "<p>FPS</p>";
                            } else {
                                echo "<p>Kategori Belum diisi</p>";
                            }
                        ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga_game" class="col-sm-2 col-formlabel">Harga</label>
                    <div class="col-sm-10">
                        <p><?= $this->ModelGame->rupiah($g['harga_game']); ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tglrilis" class="col-sm-2 col-formlabel">Tanggal Rilis</label>
                    <div class="col-sm-10">
                        <p><?= $g['tglrilis']; ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="url_game" class="col-sm-2 col-formlabel">Tautan</label>
                    <div class="col-sm-10">
                        <a href="<?= $g['url_game']; ?>" target="_blank"><?= $g['url_game']; ?></a>
                    </div>
                </div>
                <a href="<?= base_url('game/ubahDataGame/' . $g['id_game']); ?>" class="btn btn-primary">Ubah Data Game</a>
                <a href="<?= base_url('game/hapusGame/') . $g['id_game']; ?>" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus game <?= $g['nama_game']; ?> ?');" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
            <?php } ?>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->