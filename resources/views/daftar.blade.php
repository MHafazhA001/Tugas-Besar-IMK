<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Portal Data Politeknik Negeri Lhokseumawe" />
    <meta name="author" content="Abbas Adam Az Zuhri" />
    <title>Portal Data | Politeknik Negeri Lhokseumawe</title>
    <!-- Favicons -->
    <link rel="icon" href="image/imageP.png" />
    <link rel="apple-touch-icon" href="image/imageP.png" />
    <!-- Google Fonts -->
    <link href="fontgoogle/opensans_montserrat.css" rel="stylesheet" />
    <!-- Bootstrap CSS File -->
    <link href="template/landing/lib/bootstrap/css/bootsrap.min.css" rel="stylesheet" />
    <!-- Libraries CSS Files -->
    <link href="template/landing/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="template/landing/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="template/landing/lib/ionicons/css/ionicons.min.css" rel="stylesheet" />
    <link href="template/landing/lib/owlcarousel/owl.carousel.min.css" rel="stylesheet" />
    <link href="template/landing/lib/lightbox/css/lightbox.min.css" rel="stylesheet" />
    <!-- Main Stylesheet File -->
    <link href="template/landing/css/style.css" rel="stylesheet" />
    <!-- Sweetalert -->
    <link href="sweetalert/css/sweetalert.css" rel="stylesheet" />
    <!-- Select2 -->
    <link rel="stylesheet" href="select2/select2.css" />
    <!-- Datepicker -->
    <link rel="stylesheet" href="picker/boostrap-datepicker/css/datepicker.css" />
    <!-- Datatables-->
    <link href="template/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <style>
        .dataTables_length label {
            margin-top: 15px;
            display: inline-flex;
        }
        
        .dataTables_length label select {
            margin-left: 5px;
            margin-right: 5px;
        }
        
        .dataTables_length {
            margin-left: 10px;
            margin-right: 10px;
            float: left;
        }
        
        .dataTables_wrapper {
            display: block;
            flex-wrap: wrap;
        }
        
        .dt-buttons {
            padding-top: 10px;
            width: 70px !important;
            float: left;
        }
        
        .dt-buttons .dt-button span {
            color: #fff !important;
        }
        
        .dataTables_filter {
            padding: 10px;
            float: right;
        }
        
        .dataTables_filter .form-control {
            width: 300px !important;
        }
        
        @media only screen and (max-width: 1200px) {
            .portal {
                display: none !important;
            }
        }
        
        @media (max-width: 991px) {
            #header {
                height: 80px;
                padding: 10px 0;
            }
            #header .logo h1 {
                font-size: 28px;
                padding: 5px 0 5px 0;
            }
        }
    </style>
</head>

<body>
    <header id="header" class="fixed-top">
        <div class="container">
            <div class="logo float-left">
                <h1 class="text-light">
                    <a href="http://pnl.ac.id">
                        <img src="image/imageP.png" style="margin: 0px; max-height: 50px !important; margin-top: -8px" />
                        <span>PORTAL <span class="portal" style="display: inline-block">DATA</span></span>
                    </a>
                </h1>
                <a href="#intro" class="scrollto"></a>
            </div>
            <nav class="main-nav float-right d-none d-lg-block">
                <ul>
                    <li class="">
                        <a href="index">Mahasiswa</a>
                    </li>
                    <li class="">
                        <a href="pengajar">Jadwal Pengajar</a>
                    </li>
                    <li class="">
                        <a href="programstudi">Program Studi</a>
                    </li>
                    <li class="">
                        <a href="peminat">Peminat</a>
                    </li>
                    <li><a href="daftar">Daftar</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main id="main">
        <section id="why-us" class="wow fadeIn" style="margin-top: 80px">
            <div class="container">
                <header class="section-header">
                    <h3>Data Kurikulum Program Studi</h3>
                    <p style="width: 100%">
                        Kurikulum program studi adalah distribusi mata kuliah di suatu program studi<br />
                        <code id="log-crontab"></code>
                    </p>

                    <div class="container">
                        <div class="form">
                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Nama Lengkap" required>
                                    </div>
                                    <div class="form-group col-lg-6 ">
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Nama Ibu Kandung" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="NIK" required>
                                    </div>
                                    <div class="form-group col-lg-6 ">
                                        <input type="text" class="form-control" name="email" id="email" placeholder="NO. HP" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <input type="email" name="name" class="form-control" id="name" placeholder="Email" required>
                                    </div>
                                    <div class="form-group col-lg-6 ">
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Asal Sekolah" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Rata-rata Nilai Rapor" required>
                                    </div>
                                    <div class="form-group col-lg-6 ">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Nilai Asesmen" required>
                                    </div>
                                </div>
                                <br>
                                <div class="text-center"><button type="submit" title="Send Message">Daftar</button></div>
                                <p style="width: 100%">
                                    Sudah punya akun?<br /><a style="color:#fff" href="login.html"><u>Login</u></a>
                                    <code id="log-crontab"></code>
                                </p>

                            </form>
                        </div>
                    </div>

            </div>
            </header>
            </div>
        </section>
        <!-- End Contact Section -->
        </div>
        </section>
    </main>
    <!--==========================
        Footer
    ============================-->
    <footer id="footer">
        <div class="footer-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 footer-info">
                        <h3>Portal Data</h3>
                    </div>
                    <div class="col-lg-6 col-md-6 footer-newsletter">
                        <img src="https://data.unsyiah.ac.id/images/logo.png" style="height: 92px; float: right" />
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">&copy; Copyright <strong>Politeknik Negeri Lhokseumawe</strong>. All Rights Reserved</div>
            <div class="credits">Designed by <a href="https://ict.unsyiah.ac.id">UPT Teknologi Informasi dan Komunikasi</a></div>
        </div>
    </footer>
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->

    <!-- JavaScript Libraries -->
    <script src="https://data.unsyiah.ac.id/template/landing/lib/jquery/jquery.min.js"></script>
    <script src="https://data.unsyiah.ac.id/template/landing/lib/jquery/jquery-migrate.min.js"></script>
    <script src="https://data.unsyiah.ac.id/template/landing/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://data.unsyiah.ac.id/template/landing/lib/easing/easing.min.js"></script>
    <script src="https://data.unsyiah.ac.id/template/landing/lib/mobile-nav/mobile-nav.js"></script>
    <script src="https://data.unsyiah.ac.id/template/landing/lib/wow/wow.min.js"></script>
    <script src="https://data.unsyiah.ac.id/template/landing/lib/waypoints/waypoints.min.js"></script>
    <script src="https://data.unsyiah.ac.id/template/landing/lib/counterup/counterup.min.js"></script>
    <script src="https://data.unsyiah.ac.id/template/landing/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://data.unsyiah.ac.id/template/landing/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="https://data.unsyiah.ac.id/template/landing/lib/lightbox/js/lightbox.min.js"></script>
    <!-- Template Main Javascript File -->
    <script src="https://data.unsyiah.ac.id/template/landing/js/main.js"></script>
    <!-- Sweetalert -->
    <script src="https://data.unsyiah.ac.id/sweetalert/js/sweetalert.min.js" type="text/javascript"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="https://data.unsyiah.ac.id/template/vendor/jquery/jquery.min.js"></script>
    <script src="https://data.unsyiah.ac.id/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="https://data.unsyiah.ac.id/template/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Select2 -->
    <script src="https://data.unsyiah.ac.id/select2/select2.full.min.js"></script>
    <!-- Datepicker -->
    <script src="https://data.unsyiah.ac.id/picker/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <!-- Datatables -->
    <script src="https://data.unsyiah.ac.id/template/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="https://data.unsyiah.ac.id/template/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="https://data.unsyiah.ac.id/template/js/demo/datatables-demo.js"></script>
    <script src="https://data.unsyiah.ac.id/template/vendor/datatables/dataTables.buttons.min.js"></script>
    <script src="https://data.unsyiah.ac.id/template/vendor/datatables/jszip.min.js"></script>
    <script src="https://data.unsyiah.ac.id/template/vendor/datatables/buttons.html5.min.js"></script>
    <!-- Lazyload -->
    <script src="https://data.unsyiah.ac.id/lazyload/jquery.lazy.min.js" type="text/javascript"></script>
    <script src="https://data.unsyiah.ac.id/lazyload/jquery.lazy.plugins.min.js" type="text/javascript"></script>
</body>

</html>