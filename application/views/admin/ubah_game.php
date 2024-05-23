<div class="container-fluid">
    <div class="mt-5">
        <div class="col-md-8 mx-auto my-auto mt-5">
            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="py-3 mb-4"><span class="text-muted fw-light">Dashboard / <a href="<?= base_url('game'); ?>">Daftar Game</a> /</span> <?= $titlepage; ?></h4>
            </div>
            <?php foreach ($game as $g) { ?>
                <form action="<?= base_url('game/ubahDataGame'); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="id_game" class="col-sm-2 col-formlabel">ID Game</label>
                        <div class="col-sm-10">
                            <input type="hidden" name="id_game" id="id_game" value="<?= $g['id_game']; ?>">
                            <input type="text" class="form-control" id="id_game" name="id_game" value="<?= $g['id_game']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_game" class="col-sm-2 col-formlabel">Nama Game</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_game" name="nama_game" value="<?= $g['nama_game']; ?>">
                            <?= form_error('nama_game', '<small class="textdanger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="publisher_game" class="col-sm-2 col-formlabel">Publisher</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="publisher_game" name="publisher_game" value="<?= $g['publisher_game']; ?>">
                            <?= form_error('publisher_game', '<small class="textdanger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="developer_game" class="col-sm-2 col-formlabel">Developer</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="developer_game" name="developer_game" value="<?= $g['developer_game']; ?>">
                            <?= form_error('developer_game', '<small class="textdanger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id_category" class="col-sm-2 col-formlabel">Kategori</label>
                        <div class="col-sm-10">
                            <select name="id_category" class="form-control form-control-user">
                                <option value="<?= $g['id_game']; ?>">Pilih data game...</option>
                                <?php foreach ($category as $c) { ?>
                                <option value="<?= $c['id_category'];?>"><?= $c['nama_category'];?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga_game" class="col-sm-2 col-formlabel">Harga</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="harga_game" name="harga_game" value="<?= $g['harga_game']; ?>">
                            <?= form_error('harga_game', '<small class="textdanger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tglrilis" class="col-sm-2 col-formlabel">Tanggal Rilis</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="tglrilis" name="tglrilis" value="<?= $g['tglrilis']; ?>">
                            <?= form_error('tglrilis', '<small class="textdanger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="url_game" class="col-sm-2 col-formlabel">Tautan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="url_game" name="url_game" value="<?= $g['url_game']; ?>">
                            <?= form_error('url_game', '<small class="textdanger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="gameplay_guides" class="col-sm-2 col-formlabel">Panduan Game</label>
                        <div class="col-sm-10">
                            <textarea id="gameplay_guides" name="gameplay_guides" class="form-control auto-resize" rows="5" oninput="autoResize(this)"><?= $g['gameplay_guides']; ?></textarea>
                            <?= form_error('gameplay_guides', '<small class="text-danger pl-3">', '</small>'); ?>
                         </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2">Gambar</div>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="<?= base_url('assets/img/game_image/') . $g['gambar_game']; ?>" class="img-thumbnail" alt="">
                                </div>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="game_image" name="image" accept="game_image/*">
                                        <label class="custom-file-label" for="game_image">Pilih file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Ubah</button>
                            <button class="btn btn-dark" onclick="window.history.back()"> Kembali</button>
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