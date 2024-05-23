<!DOCTYPE html>
<html lang="en">

<!-- begin::Head -->

<head>
    <meta charset="utf-8" />
    <title>SIUBSI.Play | Registrasi</title>
    <meta name="description" content="Login page example">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--begin::Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
    WebFont.load({
        google: {
            "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
        },
        active: function() {
            sessionStorage.fonts = true;
        }
    });
    </script>

    <!--end::Fonts -->

    <!--begin::Page Custom Styles(used by this page) -->
    <link href="<?=base_url('assets/')?>app/custom/login/login-v6.default.css" rel="stylesheet" type="text/css" />

    <!--end::Page Custom Styles -->

    <!--begin:: Global Mandatory Vendors -->
    <link href="<?=base_url('assets/')?>vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <link href="<?=base_url('assets/')?>vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/')?>vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/')?>vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/')?>vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/')?>vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/')?>vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/')?>vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/')?>vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/')?>vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/')?>vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/')?>vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/')?>vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/')?>vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/')?>vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/')?>vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/')?>vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/')?>vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/')?>vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/')?>vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/')?>vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/')?>vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/')?>vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/')?>vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/')?>vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/')?>vendors/custom/vendors/fontawesome5/css/all.min.css" rel="stylesheet" type="text/css" />

    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="<?=base_url('assets/')?>demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />

    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->
    <link href="<?=base_url('assets/')?>demo/default/skins/header/base/light.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/')?>demo/default/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/')?>demo/default/skins/brand/dark.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/')?>demo/default/skins/aside/dark.css" rel="stylesheet" type="text/css" />

    <!--end::Layout Skins -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.7.2/dist/sweetalert2.all.min.js"></script>
    <link rel="shortcut icon" href="<?=base_url('assets/')?>img/favicon.png" />
</head>

<!-- end::Head -->

<!-- begin::Body -->

<body style="overflow: hidden !important;"
    class="kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">
    <!-- begin:: Page -->
    <div class="kt-grid kt-grid--ver kt-grid--root">
        <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v6 kt-login--signin" id="kt_login">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid__item--center kt-grid kt-grid--ver kt-login__content"
                    style="background-image: url(../assets/img/bg_acc.png);">
                    <div class="kt-login__section">
                        <div class="kt-login__block">
                            <h1 class="kt-login__title display-1 font-weight-bold">Selamat datang di SIUBSI.Play</h1>
                            <div class="kt-login__desc">
                                Anda dapat masuk sebagai pengguna jika sudah memiliki akun.
                                <br>Atau anda dapat mendaftarkan akun terlebih dahulu jika belum memiliki akun.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-grid__item  kt-grid__item--order-tablet-and-mobile-2  kt-grid kt-grid--hor kt-login__aside">
                    <div class="kt-login__wrapper">
                        <div class="kt-login__container">
                            <div class="kt-login__body">
                                <div class="kt-login__logo">
                                    <a href="<?=base_url('Auth/pageBeranda')?>">
                                        <h1 class="mx-auto font-weight-bold display-4" style="color: #7743DB !important">SIUBSI.Play</h1>
                                    </a>
                                </div>
                                <div class="kt-login__signin">
                                    <div class="kt-login__head">
                                        <h1 class="kt-login__title">Daftar sebagai pengguna</h1>
                                    </div>
                                    <div class="kt-login__form">
                                        <form class="kt-form" action="<?= base_url('Auth/registrasi'); ?>"
                                            method="post">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Masukkan Nama Lengkap" name="nama">
                                            </div>
                                            <?=form_error('nama', '<p class="text-danger">', '</p>');?>
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Masukkan Email"
                                                    name="email" autocomplete="off">
                                            </div>
                                            <?=form_error('email', '<p class="text-danger">', '</p>');?>
                                            <div class="form-group">
                                                <input class="form-control" type="password" placeholder="Masukkan Password" name="password">
                                            </div>
                                            <?=form_error('password', '<p class="text-danger">', '</p>');?>
                                            <div class="form-group">
                                                <input class="form-control form-control-last" type="password"
                                                    placeholder="Masukkan ulang Password" name="retype_password">
                                            </div>
                                            <?=form_error('retype_password', '<p class="text-danger">', '</p>');?>
                                            <div class="kt-login__actions">
                                                <button id="" class="btn btn-brand btn-pill" style="background-color: #7743DB;border:none;">Daftar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kt-login__account">
                            <span class="kt-login__account-msg">
                                Sudah memiliki akun?
                            </span>&nbsp;&nbsp;
                            <a href="<?= base_url('Auth'); ?>" class="kt-login__account-link">Login</a>
                            <div class="kt-login__account">
                                <a href="<?= base_url('Auth/pageBeranda'); ?>" class="kt-login__account-link">Pergi ke Halaman Beranda</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<!-- end::Body -->

</html>