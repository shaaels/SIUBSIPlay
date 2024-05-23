<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="<?=base_url('assets/')?>"
  data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>SIUBSI.Play | Daftar Game</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?=base_url('assets/')?>img/favicon.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="<?=base_url('assets/')?>vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/')?>vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?=base_url('assets/')?>vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/')?>vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="<?=base_url('assets/')?>vendor/js/helpers.js"></script>
    <script src="<?=base_url('assets/')?>js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar layout-without-menu">
      <div class="layout-container">
        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <?php $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); ?>
          <nav class="container-lg" style="margin-top: 10px" id="layout-navbar">
            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <!-- <li class="nav-item lh-1 me-3">
                      </li> -->
                      <div class="avatar me-5">
                      <span style="margin-right: 5px;"><font color="#C599FF">Halo Admin</font>, <?= $data['user']['nama_user']; ?></span>
                      <img src="<?= base_url('assets/img/profil/') . $data['user']['image_user']; ?>" alt="" class="w-px-40 h-auto" style="border-radius: 50%;" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <div class="dropdown-item">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <img src="<?= base_url('assets/img/profil/') . $data['user']['image_user']; ?>" alt class="w-px-40 h-auto" style="border-radius: 50%;" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-medium d-block"><?= $data['user']['nama_user']; ?></span>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="<?=base_url('user/ubahProfil')?>">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">Kunjungi Profil</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="<?=base_url('updatelogs')?>">
                        <i class="bx bx-menu me-2"></i>
                        <span class="align-middle">Lihat Game Update Logs</span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="<?=base_url('Auth/logout')?>">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>
          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
              <div class="container-xxl flex-grow-1 container-p-y">
                <div class="py-3 mb-4 text-center">
                    <img src="<?= base_url('assets/'); ?>img/siubsiplay-logo4.png" alt="" width="300">
                </div>
                <h4 class="py-3 mb-4"><span class="text-muted fw-light">Dashboard / <a href="<?= base_url('admin'); ?>">Daftar Menu</a> /</span> <?= $titlepage; ?></h4>
                
                <!-- Grid Card -->
                <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
                  <?php foreach ($users as $usr) { ?>
                      <div class="col">
                        <div class="card h-100">
                          <img class="card-img-top" src="<?= base_url('assets/img/profil/'. $usr['image_user']); ?>" alt="Card image cap" />
                          <div class="card-body">
                            <h5 class="card-title"><?= $usr['nama_user'] ?></h5>
                            <p><b>Tanggal registrasi</b>: <span><?= date('d M Y', $usr['regdate']); ?></span></p>
                            <a href="<?= base_url('admin/ubahProfil/' . $usr['id_user']); ?>" class="btn btn-outline-primary">Ubah Data User</a>
                            <a href="<?= base_url('admin/hapusUser/' . $usr['id_user']); ?>" class="btn btn-outline-danger" onclick="return confirm('Anda yakin ingin menghapus user \'<?= $usr['nama_user']; ?>\' ?');">Hapus User</a>
                          </div>
                        </div>
                      </div>
                  <?php } ?>
                </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  <a href="https://github.com/siubsi" target="_blank" class="footer-link fw-medium">SIUBSI.Play</a>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>
    </div>

    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="<?=base_url('assets/')?>vendor/libs/jquery/jquery.js"></script>
    <script src="<?=base_url('assets/')?>vendor/libs/popper/popper.js"></script>
    <script src="<?=base_url('assets/')?>vendor/js/bootstrap.js"></script>
    <script src="<?=base_url('assets/')?>vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?=base_url('assets/')?>vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="<?=base_url('assets/')?>js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
