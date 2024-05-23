<div class="container-fluid">
    <div class="row example-centered">
        <div class="col-md-12 example-title">
            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="py-3 mb-4"><span class="text-muted fw-light">Dashboard / <a href="<?= base_url('game'); ?>">Daftar Game</a> /</span> <?= $titlepage; ?></h4>
                <a href="<?= base_url('updatelogs/tambahUpdateLogs'); ?>" class="btn btn-primary mb-3"> Tambah Update Logs Baru</a>
            </div>
        </div>
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 text-center">
            <ul class="timeline timeline-centered">
                <?php foreach ($updatelogs as $upd) { ?>
                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span><?= $upd['tanggal_update']; ?></span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h3 class="timeline-title"><a href="<?= base_url('updatelogs/ubahupdatelogs/') . $upd['id_logs']; ?>"><?= $upd['nama_gamelogs']; ?></a></h3>
                            <p><?= $upd['judul_patch']; ?></p>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>