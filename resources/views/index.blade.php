<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta name="description" content="Portal Data Politeknik Negeri Lhokseumawe" />
        <meta name="author" content="Abbas Adam Az Zuhri" />
        <title>Portal Data | Politeknik Negeri Lhokseumawe</title>
        <!-- Favicons -->
        <link rel="icon" href="image/imageP.png" />
        <link rel="apple-touch-icon" href="image/imageP.png.ico" />
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
                        <h3>Data Mahasiswa Diterima</h3>
                        <p style="width: 100%">
                            Mahasiswa baru yang dinyatakan lulus (calon mahasiswa) namun belum melakukan daftar ulang<br />
                            <code id="log-crontab"></code>
                        </p>
                    </header>
                    <div class="row counters" style="padding-top: 0px">
                        <div class="col-lg-2 col-6 text-center">
                            <p style="text-align: left">Tahun</p>
                            <select id="tahun" name="tahun" class="form-control">
                    <option value="2021">2021</option>
                    <option value="2020">2020</option>
                    <option value="2019">2019</option>
                    <option value="2018">2018</option>
                    <option value="2017">2017</option>
                    <option value="2016">2016</option>
                    <option value="2015">2015</option>
                  </select>
                        </div>
                        <div class="col-lg-2 col-6 text-center">
                            <p style="text-align: left">Janjang</p>
                            <select id="jenjang" name="jenjang" class="form-control">
                                <option value="#" selected="" data-select2-id="7">- Semua -</option>
                    <option value="0">D3</option><option value="1">S1</option>
                    <option value="2">S2</option><option value="3">S3</option>
                    <option value="4">Profesi</option><option value="5">Spesialis</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-6 text-center">
                            <p style="text-align: left">Fakultas</p>
                            <select id="fakultas" name="fakultas" class="form-control">
                                <option value="#" selected="" data-select2-id="9">- Semua -</option>
                    <option value="01">Ekonomi dan Bisnis</option><option value="02">Kedokteran Hewan</option>
                    <option value="03">Hukum</option><option value="04">Teknik</option><option value="05">Pertanian</option>
                    <option value="06">KIP</option><option value="07">Kedokteran</option>
                    <option value="08">MIPA</option><option value="09">Pascasarjana</option>
                    <option value="10">Ilmu Sosial dan Ilmu Politik</option>
                    <option value="11">Kelautan dan Perikanan</option>
                    <option value="12">Keperawatan</option>
                    <option value="13">Kedokteran Gigi</option>
                            </select>
                        </div>
                        <div class="col-lg-5 col-6 text-center">
                            <p style="text-align: left">Prodi</p>
                            <select id="prodi" name="prodi" class="form-control">
                                <option value="#" selected="" data-select2-id="11">- Semua -</option>
                            </select>
                        </div>
                    </div>
                    <hr style="border-color: #fff" />
                    <br />
                </div>
            </section>
            <section style="margin-top:30px;">
                <div class="container">
                    <header class="section-header">
                        <h3 style="text-align:left;">Jalur Masuk <small style="font-size:12pt;">Data Berdasarkan</small></h3>
                    </header>
                    <div id="box2">
                        <div class="row">
                            <div class="col-md-7">
                                <div id="chart2" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0px auto; overflow: hidden;" data-highcharts-chart="1">
                                    <div id="highcharts-razgsgb-15" dir="ltr" class="highcharts-container " style="position: relative; overflow: hidden; width: 390px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg version="1.1" class="highcharts-root" style="font-family:Lucida Grande, Lucida Sans Unicode, Arial, Helvetica, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="390" height="400" viewBox="0 0 390 400"><desc>Created with Highcharts 7.1.2</desc><defs><clipPath id="highcharts-razgsgb-16-"><rect x="0" y="0" width="330" height="236" fill="none"></rect></clipPath></defs><rect fill="#fff" class="highcharts-background" x="0" y="0" width="390" height="400" rx="0" ry="0"></rect><rect fill="none" class="highcharts-plot-background" x="144" y="10" width="236" height="330"></rect><g class="highcharts-grid highcharts-xaxis-grid" data-z-index="1"><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 144 31.5 L 380 31.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 144 51.5 L 380 51.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 144 72.5 L 380 72.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 144 93.5 L 380 93.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 144 113.5 L 380 113.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 144 134.5 L 380 134.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 144 154.5 L 380 154.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 144 175.5 L 380 175.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 144 196.5 L 380 196.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 144 216.5 L 380 216.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 144 237.5 L 380 237.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 144 258.5 L 380 258.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 144 278.5 L 380 278.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 144 299.5 L 380 299.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 144 319.5 L 380 319.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 144 340.5 L 380 340.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 144 10.5 L 380 10.5" opacity="1"></path></g><g class="highcharts-grid highcharts-yaxis-grid" data-z-index="1"><path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 143.5 10 L 143.5 340" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 202.5 10 L 202.5 340" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 261.5 10 L 261.5 340" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 320.5 10 L 320.5 340" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 380.5 10 L 380.5 340" opacity="1"></path></g><rect fill="none" class="highcharts-plot-border" data-z-index="1" x="144" y="10" width="236" height="330"></rect><g class="highcharts-axis highcharts-xaxis" data-z-index="2"><path fill="none" class="highcharts-axis-line" stroke="#ccd6eb" stroke-width="1" data-z-index="7" d="M 143.5 10 L 143.5 340"></path></g><g class="highcharts-axis highcharts-yaxis" data-z-index="2"><text x="380" data-z-index="7" text-anchor="end" transform="translate(0,0)" class="highcharts-axis-title" style="color:#666666;fill:#666666;" y="379"><tspan>Jumlah</tspan></text><path fill="none" class="highcharts-axis-line" data-z-index="7" d="M 144 340 L 380 340"></path></g><path fill="none" class="highcharts-crosshair highcharts-crosshair-category undefined" data-z-index="2" stroke="rgba(204,214,235,0.25)" stroke-width="20.625" style="pointer-events:none;" visibility="hidden" d="M 144 20.5 L 380 20.5"></path><g class="highcharts-series-group" data-z-index="3"><g data-z-index="0.1" class="highcharts-series highcharts-series-0 highcharts-bar-series highcharts-color-0  highcharts-tracker     " transform="translate(380,340) rotate(90) scale(-1,1) scale(1 1)" clip-path="url(#highcharts-razgsgb-16-)" width="236" height="330"><rect x="314.5" y="22.5" width="10" height="214" fill="rgb(255,204,0)" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0  "></rect><rect x="293.5" y="110.5" width="10" height="126" fill="rgb(255,204,0)" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0 "></rect><rect x="272.5" y="126.5" width="10" height="110" fill="rgb(255,204,0)" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0 "></rect><rect x="252.5" y="135.5" width="10" height="101" fill="rgb(255,204,0)" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0 "></rect><rect x="231.5" y="205.5" width="10" height="31" fill="#ffcc00" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="211.5" y="216.5" width="10" height="20" fill="#ffcc00" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="190.5" y="228.5" width="10" height="8" fill="#ffcc00" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="169.5" y="230.5" width="10" height="6" fill="#ffcc00" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="149.5" y="231.5" width="10" height="5" fill="#ffcc00" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="128.5" y="233.5" width="10" height="3" fill="#ffcc00" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="107.5" y="234.5" width="10" height="2" fill="#ffcc00" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="87.5" y="234.5" width="10" height="2" fill="#ffcc00" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="66.5" y="235.5" width="10" height="1" fill="rgb(255,204,0)" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0 "></rect><rect x="46.5" y="235.5" width="10" height="1" fill="#ffcc00" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="25.5" y="236.5" width="10" height="0" fill="#ffcc00" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="4.5" y="236.5" width="10" height="0" fill="#ffcc00" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect></g><g data-z-index="0.1" class="highcharts-markers highcharts-series-0 highcharts-bar-series highcharts-color-0      " transform="translate(380,340) rotate(90) scale(-1,1) scale(1 1)" clip-path="none"></g></g><text x="195" text-anchor="middle" class="highcharts-title" data-z-index="4" style="color:#333333;font-size:18px;fill:#333333;" y="24"></text><text x="195" text-anchor="middle" class="highcharts-subtitle" data-z-index="4" style="color:#666666;fill:#666666;" y="24"></text><g data-z-index="6" class="highcharts-data-labels highcharts-series-0 highcharts-bar-series highcharts-color-0  highcharts-tracker     " transform="translate(144,10) scale(1 1)" opacity="1"><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(170,-1)"><text x="5" data-z-index="1" style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round" styl"">3 626</tspan><tspan x="5" y="16">3 626</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(126,20)"><text x="5" data-z-index="1" style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">2 128</tspan><tspan x="5" y="16">2 128</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(110,41)"><text x="5" data-z-index="1" style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">1 857</tspan><tspan x="5" y="16">1 857</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(101,61)"><text x="5" data-z-index="1" style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">1 710</tspan><tspan x="5" y="16">1 710</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1"
                             transform="translate(31,82)"><text x="5" data-z-index="1" style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">531</tspan><tspan x="5" y="16">531</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(20,102)"><text x="5" data-z-index="1" style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">346</tspan><tspan x="5" y="16">346</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(8,123)"><text x="5" data-z-index="1" style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">137</tspan><tspan x="5" y="16">137</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(6,144)"><text x="5" data-z-index="1" style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">106</tspan><tspan x="5" y="16">106</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(5,164)"><text x="5" data-z-index="1" style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round" styl"">89</tspan><tspan x="5" y="16">89</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(3,185)"><text x="5" data-z-index="1" style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">59</tspan><tspan x="5" y="16">59</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(2,206)"><text x="5" data-z-index="1" style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">31</tspan><tspan x="5" y="16">31</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(2,226)"><text x="5" data-z-index="1" style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">27</tspan><tspan x="5" y="16">27</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(1,247)"><text x="5" data-z-index="1" style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">15</tspan><tspan x="5" y="16">15</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(1,267)"><text x="5" data-z-index="1" style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">13</tspan><tspan x="5" y="16">13</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(0,288)"><text x="5" data-z-index="1" style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">1</tspan><tspan x="5" y="16">1</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(0,309)"><text x="5" data-z-index="1" style="font-size:11px;font-weight:bold;color:#000000;fill:#000000;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">1</tspan><tspan x="5" y="16">1</tspan></text></g></g><g class="highcharts-axis-labels highcharts-xaxis-labels" data-z-index="7"><text x="129" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="24" opacity="1"><tspan>SBMPTN (S1)</tspan></text><text x="129" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="45" opacity="1"><tspan>UMB (S1)</tspan></text><text x="129" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="66" opacity="1"><tspan>SNMPTN (S1)</tspan></text><text x="129" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="86" opacity="1"><tspan>Profesi (Profesi)</tspan></text><text x="129" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="107" opacity="1"><tspan>Reguler (S2)</tspan></text><text x="129" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="127" opacity="1"><tspan>D3-Afirmasi (D3)</tspan></text><text x="129" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="148" opacity="1"><tspan>Reguler (S3)</tspan></text><text x="129" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="169" opacity="1"><tspan>D3-JMU (D3)</tspan></text><text x="129" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="189" opacity="1"><tspan>Eksekutif (Non Regu…</tspan><title>Eksekutif (Non Reguler) (S2)</title></text><text x="129" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="210" opacity="1"><tspan>Spesialis (Spesialis)</tspan></text><text x="129" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="231" opacity="1"><tspan>Kerjasama (Beasisw…</tspan><title>Kerjasama (Beasiswa) (S2)</title></text><text x="129" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="251" opacity="1"><tspan>Afirmasi (S1)</tspan></text><text x="129" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="272" opacity="1"><tspan>PSDKU-Galus (S1)</tspan></text><text x="129" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="292" opacity="1"><tspan>Internasional (S1)</tspan></text><text x="129" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="313" opacity="1"><tspan>Student Exchange (…</tspan><title>Student Exchange (Profesi)</title></text><text x="129" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="334" opacity="1"><tspan>Afirmasi (D3)</tspan></text></g><g class="highcharts-axis-labels highcharts-yaxis-labels" data-z-index="7"><text x="144" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="359" opacity="1">0</text><text x="203" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="359" opacity="1">1k</text><text x="262" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="359" opacity="1">2k</text><text x="321" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="359" opacity="1">3k</text><text x="373.015625" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="359" opacity="1">4k</text></g><g class="highcharts-label highcharts-tooltip      highcharts-color-0" style="pointer-events:none;white-space:nowrap;" data-z-index="8" transform="translate(170,-9999)" opacity="0" visibility="visible"><path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow" d="M 3.5 0.5 L 179.5 0.5 C 182.5 0.5 182.5 0.5 182.5 3.5 L 182.5 13 188.5 19 182.5 25 182.5 44.5 C 182.5 47.5 182.5 47.5 179.5 47.5 L 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5" transform="translate(1, 1)"></path><path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow" d="M 3.5 0.5 L 179.5 0.5 C 182.5 0.5 182.5 0.5 182.5 3.5 L 182.5 13 188.5 19 182.5 25 182.5 44.5 C 182.5 47.5 182.5 47.5 179.5 47.5 L 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3" transform="translate(1, 1)"></path><path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow" d="M 3.5 0.5 L 179.5 0.5 C 182.5 0.5 182.5 0.5 182.5 3.5 L 182.5 13 188.5 19 182.5 25 182.5 44.5 C 182.5 47.5 182.5 47.5 179.5 47.5 L 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#000000" stroke-opacity="0.15" stroke-width="1" transform="translate(1, 1)"></path><path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box" d="M 3.5 0.5 L 179.5 0.5 C 182.5 0.5 182.5 0.5 182.5 3.5 L 182.5 13 188.5 19 182.5 25 182.5 44.5 C 182.5 47.5 182.5 47.5 179.5 47.5 L 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#ffcc00" stroke-width="1"></path><text x="8" data-z-index="1" style="font-size:12px;color:#333333;cursor:default;fill:#333333;" y="20"><tspan style="font-size: 10px">SBMPTN (S1)</tspan><tspan style="fill:#ffcc00" x="8" dy="15">●</tspan><tspan dx="0"> Jumlah: </tspan><tspan style="font-weight:bold" dx="0">3 626 Mahasiswa</tspan></text></g></svg></div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr style="background:#2b3643;color:#fff;">
                                                <th style="font-size:11pt;padding:8px;">Jalur Masuk</th>
                                                <th style="font-size:11pt;padding:8px;">Jenjang</th>
                                                <th style="font-size:11pt;padding:8px;">Jumlah</th>
                                            </tr>
                                        </thead>
                                        <tbody style="background-color: #ffcc00;">
                                            <tr>
                                                <td style="font-size:11pt;padding:8px;">SBMPTN</td>
                                                <td style="font-size:11pt;padding:8px;">S1</td>
                                                <td style="font-size:11pt;padding:8px;">3626</td>
                                            </tr>
    
                                            <tr>
                                                <td style="font-size:11pt;padding:8px;">UMB</td>
                                                <td style="font-size:11pt;padding:8px;">S1</td>
                                                <td style="font-size:11pt;padding:8px;">2128</td>
                                            </tr>
    
                                            <tr>
                                                <td style="font-size:11pt;padding:8px;">SNMPTN</td>
                                                <td style="font-size:11pt;padding:8px;">S1</td>
                                                <td style="font-size:11pt;padding:8px;">1857</td>
                                            </tr>
    
                                            <tr>
                                                <td style="font-size:11pt;padding:8px;">Profesi</td>
                                                <td style="font-size:11pt;padding:8px;">Profesi</td>
                                                <td style="font-size:11pt;padding:8px;">1710</td>
                                            </tr>
    
                                            <tr>
                                                <td style="font-size:11pt;padding:8px;">Reguler</td>
                                                <td style="font-size:11pt;padding:8px;">S2</td>
                                                <td style="font-size:11pt;padding:8px;">531</td>
                                            </tr>
    
                                            <tr>
                                                <td style="font-size:11pt;padding:8px;">D3-Afirmasi</td>
                                                <td style="font-size:11pt;padding:8px;">D3</td>
                                                <td style="font-size:11pt;padding:8px;">346</td>
                                            </tr>
    
                                            <tr>
                                                <td style="font-size:11pt;padding:8px;">Reguler</td>
                                                <td style="font-size:11pt;padding:8px;">S3</td>
                                                <td style="font-size:11pt;padding:8px;">137</td>
                                            </tr>
    
                                            <tr>
                                                <td style="font-size:11pt;padding:8px;">D3-JMU</td>
                                                <td style="font-size:11pt;padding:8px;">D3</td>
                                                <td style="font-size:11pt;padding:8px;">106</td>
                                            </tr>
    
                                            <tr>
                                                <td style="font-size:11pt;padding:8px;">Eksekutif (Non Reguler)</td>
                                                <td style="font-size:11pt;padding:8px;">S2</td>
                                                <td style="font-size:11pt;padding:8px;">89</td>
                                            </tr>
    
                                            <tr>
                                                <td style="font-size:11pt;padding:8px;">Spesialis</td>
                                                <td style="font-size:11pt;padding:8px;">Spesialis</td>
                                                <td style="font-size:11pt;padding:8px;">59</td>
                                            </tr>
    
                                            <tr>
                                                <td style="font-size:11pt;padding:8px;">Kerjasama (Beasiswa)</td>
                                                <td style="font-size:11pt;padding:8px;">S2</td>
                                                <td style="font-size:11pt;padding:8px;">31</td>
                                            </tr>
    
                                            <tr>
                                                <td style="font-size:11pt;padding:8px;">Afirmasi</td>
                                                <td style="font-size:11pt;padding:8px;">S1</td>
                                                <td style="font-size:11pt;padding:8px;">27</td>
                                            </tr>
    
                                            <tr>
                                                <td style="font-size:11pt;padding:8px;">PSDKU-Galus</td>
                                                <td style="font-size:11pt;padding:8px;">S1</td>
                                                <td style="font-size:11pt;padding:8px;">15</td>
                                            </tr>
    
                                            <tr>
                                                <td style="font-size:11pt;padding:8px;">Internasional</td>
                                                <td style="font-size:11pt;padding:8px;">S1</td>
                                                <td style="font-size:11pt;padding:8px;">13</td>
                                            </tr>
    
                                            <tr>
                                                <td style="font-size:11pt;padding:8px;">Student Exchange</td>
                                                <td style="font-size:11pt;padding:8px;">Profesi</td>
                                                <td style="font-size:11pt;padding:8px;">1</td>
                                            </tr>
    
                                            <tr>
                                                <td style="font-size:11pt;padding:8px;">Afirmasi</td>
                                                <td style="font-size:11pt;padding:8px;">D3</td>
                                                <td style="font-size:11pt;padding:8px;">1</td>
                                            </tr>
    
                                            <tbody style="background-color: #ffcc00;">
                                                <th colspan="2" style="font-size:11pt;padding:8px;">TOTAL</th>
                                                <th style="font-size:11pt;padding:8px;">10677</th>
                                                </tr>
    
                                            </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <header class="section-header">
                        <h3 style="text-align: left">Jenis Kelamin <small style="font-size: 12pt">Data Berdasarkan</small></h3>
                    </header>
                    <div id="box3">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr style="background:#2b3643;color:#fff;">
                                                <th style="font-size:11pt;padding:8px;">Fakultas</th>
                                                <th style="font-size:11pt;padding:8px;">Laki-laki</th>
                                                <th style="font-size:11pt;padding:8px;">Perempuan</th>
                                                <th style="font-size:11pt;padding:8px;">Jumlah</th>
                                            </tr>
                                        </thead>
                                        <tbody style="background-color: #ffcc00;">
                                            <tr>
                                                <td style="font-size:11pt;padding:8px;">Ekonomi dan Bisnis</td>
                                                <td style="font-size:11pt;padding:8px;">440</td>
                                                <td style="font-size:11pt;padding:8px;">606</td>
                                                <td style="font-size:11pt;padding:8px;">1046</td>
                                            </tr>
    
                                            <tr>
                                                <td style="font-size:11pt;padding:8px;">Kedokteran Hewan</td>
                                                <td style="font-size:11pt;padding:8px;">140</td>
                                                <td style="font-size:11pt;padding:8px;">394</td>
                                                <td style="font-size:11pt;padding:8px;">534</td>
                                            </tr>
    
                                            <tr>
                                                <td style="font-size:11pt;padding:8px;">Hukum</td>
                                                <td style="font-size:11pt;padding:8px;">261</td>
                                                <td style="font-size:11pt;padding:8px;">274</td>
                                                <td style="font-size:11pt;padding:8px;">535</td>
                                            </tr>
    
                                            <tr>
                                                <td style="font-size:11pt;padding:8px;">Teknik</td>
                                                <td style="font-size:11pt;padding:8px;">958</td>
                                                <td style="font-size:11pt;padding:8px;">657</td>
                                                <td style="font-size:11pt;padding:8px;">1615</td>
                                            </tr>
    
                                            <tr>
                                                <td style="font-size:11pt;padding:8px;">Pertanian</td>
                                                <td style="font-size:11pt;padding:8px;">383</td>
                                                <td style="font-size:11pt;padding:8px;">560</td>
                                                <td style="font-size:11pt;padding:8px;">943</td>
                                            </tr>
    
                                            <tr>
                                                <td style="font-size:11pt;padding:8px;">KIP</td>
                                                <td style="font-size:11pt;padding:8px;">731</td>
                                                <td style="font-size:11pt;padding:8px;">2161</td>
                                                <td style="font-size:11pt;padding:8px;">2892</td>
                                            </tr>
    
                                            <tr>
                                                <td style="font-size:11pt;padding:8px;">Kedokteran</td>
                                                <td style="font-size:11pt;padding:8px;">187</td>
                                                <td style="font-size:11pt;padding:8px;">440</td>
                                                <td style="font-size:11pt;padding:8px;">627</td>
                                            </tr>
    
                                            <tr>
                                                <td style="font-size:11pt;padding:8px;">MIPA</td>
                                                <td style="font-size:11pt;padding:8px;">236</td>
                                                <td style="font-size:11pt;padding:8px;">598</td>
                                                <td style="font-size:11pt;padding:8px;">834</td>
                                            </tr>
    
                                            <tr>
                                                <td style="font-size:11pt;padding:8px;">Pascasarjana</td>
                                                <td style="font-size:11pt;padding:8px;">90</td>
                                                <td style="font-size:11pt;padding:8px;">104</td>
                                                <td style="font-size:11pt;padding:8px;">194</td>
                                            </tr>
    
                                            <tr>
                                                <td style="font-size:11pt;padding:8px;">Ilmu Sosial dan Ilmu Politik</td>
                                                <td style="font-size:11pt;padding:8px;">273</td>
                                                <td style="font-size:11pt;padding:8px;">326</td>
                                                <td style="font-size:11pt;padding:8px;">599</td>
                                            </tr>
    
                                            <tr>
                                                <td style="font-size:11pt;padding:8px;">Kelautan dan Perikanan</td>
                                                <td style="font-size:11pt;padding:8px;">198</td>
                                                <td style="font-size:11pt;padding:8px;">220</td>
                                                <td style="font-size:11pt;padding:8px;">418</td>
                                            </tr>
    
                                            <tr>
                                                <td style="font-size:11pt;padding:8px;">Keperawatan</td>
                                                <td style="font-size:11pt;padding:8px;">30</td>
                                                <td style="font-size:11pt;padding:8px;">263</td>
                                                <td style="font-size:11pt;padding:8px;">293</td>
                                            </tr>
    
                                            <tr>
                                                <td style="font-size:11pt;padding:8px;">Kedokteran Gigi</td>
                                                <td style="font-size:11pt;padding:8px;">31</td>
                                                <td style="font-size:11pt;padding:8px;">116</td>
                                                <td style="font-size:11pt;padding:8px;">147</td>
                                            </tr>
    
                                            <tbody style="background-color: #ffcc00;">
                                                <th style="font-size:11pt;padding:8px;">TOTAL</th>
                                                <th style="font-size:11pt;padding:8px;">3958</th>
                                                <th style="font-size:11pt;padding:8px;">6719</th>
                                                <th style="font-size:11pt;padding:8px;">10677</th>
                                                </tr>
    
                                            </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div id="chart3" style="min-width: 310px; max-width: 800px; height: 300px; margin: 0px auto; overflow: hidden;" data-highcharts-chart="2">
                                    <div id="highcharts-razgsgb-33" dir="ltr" class="highcharts-container " style="position: relative; overflow: hidden; width: 310px; height: 300px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg version="1.1" class="highcharts-root" style="font-family:Lucida Grande, Lucida Sans Unicode, Arial, Helvetica, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="310" height="300" viewBox="0 0 310 300"><desc>Created with Highcharts 7.1.2</desc><defs><clipPath id="highcharts-razgsgb-36-"><rect x="0" y="0" width="290" height="234" fill="none"></rect></clipPath></defs><rect fill="#fff" class="highcharts-background" x="0" y="0" width="310" height="300" rx="0" ry="0"></rect><rect fill="none" class="highcharts-plot-background" x="10" y="10" width="290" height="234"></rect><rect fill="none" class="highcharts-plot-border" data-z-index="1" x="10" y="10" width="290" height="234"></rect><g class="highcharts-series-group" data-z-index="3"><g data-z-index="0.1" class="highcharts-series highcharts-series-0 highcharts-pie-series  highcharts-tracker" transform="translate(10,10) scale(1 1)" style="cursor:pointer;"><path fill="#ffcc00" d="M 144.9782069672046 10.000002219328422 A 107 107 0 0 1 222.7782475931644 190.4815909009625 L 145 117 A 0 0 0 0 0 145 117 Z" transform="translate(0,0)" stroke="#ffffff" stroke-width="1" opacity="1" stroke-linejoin="round" class="highcharts-point highcharts-color-0"></path><path fill="#b28e00" d="M 222.7047271253898 190.55933239480024 A 107 107 0 1 1 144.85137914662633 10.000103215741632 L 145 117 A 0 0 0 1 0 145 117 Z" transform="translate(0,0)" stroke="#ffffff" stroke-width="1" opacity="1" stroke-linejoin="round" class="highcharts-point highcharts-color-1"></path></g><g data-z-index="0.1" class="highcharts-markers highcharts-series-0 highcharts-pie-series " transform="translate(10,10) scale(1 1)"></g></g><text x="155" text-anchor="middle" class="highcharts-title" data-z-index="4" style="color:#333333;font-size:18px;fill:#333333;" y="24"></text><text x="155" text-anchor="middle" class="highcharts-subtitle" data-z-index="4" style="color:#666666;fill:#666666;" y="24"></text><g data-z-index="6" class="highcharts-data-labels highcharts-series-0 highcharts-pie-series  highcharts-tracker" transform="translate(10,10) scale(1 1)" opacity="1" style="cursor:pointer;"><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(178,84)"><text x="5" data-z-index="1" style="font-size:11px;font-weight:bold;color:#FFFFFF;cursor:pointer;fill:#FFFFFF;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#000000" stroke="#000000" stroke-width="2px" stroke-linejoin="round" styl"">3958</tspan><tspan x="5" y="16">3958</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-1" data-z-index="1" transform="translate(73,130)"><text x="5" data-z-index="1" style="font-size:11px;font-weight:bold;color:#FFFFFF;cursor:pointer;fill:#FFFFFF;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#000000" stroke="#000000" stroke-width="2px" stroke-linejoin="round">6719</tspan><tspan x="5" y="16">6719</tspan></text></g></g><g class="highcharts-legend" data-z-index="7" transform="translate(55,256)"><rect fill="none" class="highcharts-legend-box" rx="0" ry="0" x="0" y="0" width="199" height="29" visibility="visible"></rect><g data-z-index="1"><g><g class="highcharts-legend-item highcharts-pie-series highcharts-color-0" data-z-index="1" transform="translate(8,3)"><text x="21" style="color:#333333;cursor:pointer;font-size:12px;font-weight:bold;fill:#333333;" text-anchor="start" data-z-index="2" y="15"><tspan>Laki-laki</tspan></text><rect x="2" y="4" width="12" height="12" fill="#ffcc00" rx="6" ry="6" class="highcharts-point" data-z-index="3"></rect></g><g class="highcharts-legend-item highcharts-pie-series highcharts-color-1" data-z-index="1" transform="translate(102.484375,3)"><text x="21" y="15" style="color:#333333;cursor:pointer;font-size:12px;font-weight:bold;fill:#333333;" text-anchor="start" data-z-index="2"><tspan>Perempuan</tspan></text><rect x="2" y="4" width="12" height="12" fill="#b28e00" rx="6" ry="6" class="highcharts-point" data-z-index="3"></rect></g></g></g></g></svg></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </section>
    
            <!-- Modal -->
            <div class="modal fade" id="form" style="z-index: 99999 !important" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Formulir Login</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                        </div>
                        <div class="modal-body">
                            <div class="card" style="border: none">
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>Gunakan akun SIMPEG Anda untuk dapat unduh data</p>
                                            <div class="form-horizontal">
                                                <div class="form-group row">
                                                    <label class="col-md-4 form-control-label">NIP: </label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" id="nip" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-4 form-control-label">Password: </label>
                                                    <div class="col-md-8">
                                                        <input type="password" class="form-control" id="password" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="login" class="btn btn-primary">Login</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal -->
    
            <script src="https://data.unsyiah.ac.id/highcharts/jquery.min.js"></script>
            <script src="https://data.unsyiah.ac.id/highcharts/highcharts.js"></script>
            <script src="https://data.unsyiah.ac.id/sweetalert/js/sweetalert.min.js"></script>
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