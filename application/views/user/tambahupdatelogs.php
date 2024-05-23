<div class="container-fluid">
    <div class="mt-5">
        <div class="col-md-8 mx-auto my-auto mt-5">
            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="py-3 mb-4"><span class="text-muted fw-light">Dashboard / <a href="<?= base_url('game'); ?>">Daftar Game</a> /</span> <?= $titlepage; ?></h4>
            </div>
                <form action="<?= base_url('updatelogs/tambahUpdateLogs'); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="nama_gamelogs" class="col-sm-2 col-formlabel">Nama Game</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_gamelogs" name="nama_gamelogs" placeholder="Masukkan Nama Game">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="judul_patch" class="col-sm-2 col-formlabel">Judul Patch</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="judul_patch" name="judul_patch" placeholder="Masukkan Judul Patch">
                            <?= form_error('judul_patch', '<small class="textdanger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tautan_game" class="col-sm-2 col-formlabel">Data Game</label>
                        <div class="col-sm-10">
                            <select name="tautan_game" class="form-control form-control-user">
                                <option value="">Pilih data game...</option>
                                <?php foreach ($game as $g) { ?>
                                <option value="<?= $g['url_game'];?>"><?= $g['nama_game'];?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tanggal_update" class="col-sm-2 col-formlabel">Tanggal Update</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="tanggal_update" name="tanggal_update" placeholder="Masukkan Tanggal Update">
                            <?= form_error('tanggal_update', '<small class="textdanger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                            <a href="<?= base_url('updatelogs'); ?>" class="btn btn-dark">Kembali</a>
                        </div>
                    </div>
                </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->