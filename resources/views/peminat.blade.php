<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Portal Data Politeknik Negeri Lhokseumawe" />
    <meta name="author" content="Abbas Adam Az Zuhri" />
    <title>Portal Data | Politeknik Negeri Lhokseumawe</title>
    <!-- Favicons -->
    <link rel="icon" href="image/logo.ico" />
    <link rel="apple-touch-icon" href="image/logo.ico" />
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
                </ul>
            </nav>
        </div>
    </header>
    <main id="main">
        <section id="why-us" class="wow fadeIn" style="margin-top: 80px">
            <div class="container">
                <header class="section-header">
                    <h3>Data Peminat</h3>
                    <p style="width: 100%">
                        Peminat Berdasarkan Tahun<br />
                        <code id="log-crontab"></code>
                    </p>
                </header>
                <div class="row counters" style="padding-top: 0px">
                    <div class="col-lg-2 col-6 text-center">
                        <p style="text-align: left">Tahun</p>
                        <span id="all-tahun" class="form-control" style="display: none">- Semua -</span>
                        <span id="box-tahun">
                <select id="tahun" name="tahun" class="form-control select2-hidden-accessible" data-select2-id="tahun" tabindex="-1" aria-hidden="true">
                  <option value="2021" data-select2-id="2">2021</option>
                  <option value="2019">2019</option>
                  <option value="2018">2018</option>
                  <option value="2017">2017</option>
                  <option value="2016">2016</option>
                  <option value="2015">2015</option>
                  <option value="2014">2014</option>
                  <option value="2013">2013</option></select
                ><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 160px"
                  ><span class="selection"
                    ><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-tahun-container"
                      ><span class="select2-selection__rendered" id="select2-tahun-container" role="textbox" aria-readonly="true" title="2021">2021</span
                      ><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span
                    ></span> </span><span class="dropdown-wrapper" aria-hidden="true"></span
                ></span>
                        </span>
                    </div>
                    <div class="col-lg-10 col-6 text-center">
                        <p style="text-align: left">Prodi</p>
                        <select id="prodi" name="prodi" class="form-control select2-hidden-accessible" data-select2-id="prodi" tabindex="-1" aria-hidden="true">
                <option value="" data-select2-id="4">- Semua -</option>
                <option value="111085">AGRIBISNIS</option>
                <option value="111071">AGROTEKNOLOGI</option>
                <option value="111344">AGROTEKNOLOGI (PDD GAYO LUES)</option>
                <option value="111344">AGROTEKNOLOGI (PSDKU GAYO LUES)</option>
                <option value="112035">AKUNTANSI</option>
                <option value="111055">ARSITEKTUR</option>
                <option value="112146">BIMBINGAN KONSELING</option>
                <option value="111225">BIOLOGI</option>
                <option value="111241">BUDIDAYA PERAIRAN</option>
                <option value="112221">EKONOMI ISLAM</option>
                <option value="112013">EKONOMI PEMBANGUNAN</option>
                <option value="111271">FARMASI</option>
                <option value="111203">FISIKA</option>
                <option value="112043">ILMU HUKUM</option>
                <option value="111233">ILMU KELAUTAN</option>
                <option value="111174">ILMU KEPERAWATAN</option>
                <option value="112192">ILMU KOMUNIKASI</option>
                <option value="112213">ILMU PEMERINTAHAN</option>
                <option value="112176">ILMU POLITIK</option>
                <option value="111322">ILMU TANAH</option>
                <option value="111263">INFORMATIKA</option>
                <option value="111396">KEHUTANAN</option>
                <option value="111366">KEHUTANAN (PDD GAYO LUES)</option>
                <option value="111366">KEHUTANAN (PSDKU GAYO LUES)</option>
                <option value="111211">KIMIA</option>
                <option value="112021">MANAJEMEN</option>
                <option value="112235">MANAJEMEN (PDD GAYO LUES)</option>
                <option value="112235">MANAJEMEN (PSDKU GAYO LUES)</option>
                <option value="111196">MATEMATIKA</option>
                <option value="111314">PEMANFAATAN SUMBERDAYA PERIKANAN</option>
                <option value="112132">PEND. JASMANI KESEHATAN DAN REKREASI</option>
                <option value="112095">PENDIDIKAN BAHASA DAN SASTRA INDONESIA</option>
                <option value="112095">PENDIDIKAN BAHASA INDONESIA</option>
                <option value="112102">PENDIDIKAN BAHASA INGGRIS</option>
                <option value="111122">PENDIDIKAN BIOLOGI</option>
                <option value="111352">PENDIDIKAN BIOLOGI (PDD GAYO LUES)</option>
                <option value="111352">PENDIDIKAN BIOLOGI (PDSKU GAYO LUES)</option>
                <option value="111166">PENDIDIKAN DOKTER</option>
                <option value="111182">PENDIDIKAN DOKTER GIGI</option>
                <option value="111011">PENDIDIKAN DOKTER HEWAN</option>
                <option value="112073">PENDIDIKAN EKONOMI</option>
                <option value="111144">PENDIDIKAN FISIKA</option>
                <option value="112081">PENDIDIKAN GEOGRAFI</option>
                <option value="112205">PENDIDIKAN GURU PAUD</option>
                <option value="112154">PENDIDIKAN GURU SEKOLAH DASAR</option>
                <option value="112124">PENDIDIKAN KESEJAHTERAAN KELUARGA</option>
                <option value="111152">PENDIDIKAN KIMIA</option>
                <option value="111136">PENDIDIKAN MATEMATIKA</option>
                <option value="112051">PENDIDIKAN PANCASILA DAN KEWARGANEGARAAN</option>
                <option value="112065">PENDIDIKAN SEJARAH</option>
                <option value="112116">PENDIDIKAN SENI DRAMA TARI DAN MUSIK</option>
                <option value="111382">PERENCANAAN WILAYAH DAN KOTA</option>
                <option value="111093">PETERNAKAN</option>
                <option value="111374">PROTEKSI TANAMAN</option>
                <option value="112162">PSIKOLOGI</option>
                <option value="112184">SOSIOLOGI</option>
                <option value="111306">STATISTIK</option>
                <option value="111306">STATISTIKA</option>
                <option value="111063">TEKNIK ELEKTRO</option>
                <option value="111285">TEKNIK GEOFISIKA</option>
                <option value="111336">TEKNIK GEOLOGI</option>
                <option value="111255">TEKNIK INDUSTRI</option>
                <option value="111041">TEKNIK KIMIA</option>
                <option value="111403">TEKNIK KOMPUTER</option>
                <option value="111033">TEKNIK MESIN</option>
                <option value="111293">TEKNIK PERTAMBANGAN</option>
                <option value="111114">TEKNIK PERTANIAN</option>
                <option value="111025">TEKNIK SIPIL</option>
                <option value="111106">TEKNOLOGI HASIL PERTANIAN</option></select
              ><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: 920px"
                ><span class="selection"
                  ><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-prodi-container"
                    ><span class="select2-selection__rendered" id="select2-prodi-container" role="textbox" aria-readonly="true" title="- Semua -">- Semua -</span
                    ><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span
                ><span class="dropdown-wrapper" aria-hidden="true"></span
              ></span>
            </div>
          </div>
          <hr />
          <div id="box1">
        <div class="row counters" style="padding-top:0px;">
            <div class="col-md-3 text-center">
                <span data-toggle="counter-up" style="font-size:55pt;color:#fff;">18204</span>
                <p>TOTAL DATA</p>
            </div>
            <div class="col-md-9">
                <div id="chart1" style="min-width: 310px; max-width: 1000px; height: 400px; margin: 0px auto; overflow: hidden;" data-highcharts-chart="0"><div id="highcharts-uer9jga-0" dir="ltr" class="highcharts-container " style="position: relative; overflow: hidden; width: 690px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg version="1.1" class="highcharts-root" style="font-family:Lucida Grande, Lucida Sans Unicode, Arial, Helvetica, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="690" height="400" viewBox="0 0 690 400"><desc>Created with Highcharts 7.1.2</desc><defs><clipPath id="highcharts-uer9jga-1-"><rect x="0" y="0" width="598" height="181" fill="none"></rect></clipPath></defs><rect fill="#004a99" class="highcharts-background" x="0" y="0" width="690" height="400" rx="0" ry="0"></rect><rect fill="none" class="highcharts-plot-background" x="82" y="10" width="598" height="181"></rect><g class="highcharts-grid highcharts-xaxis-grid" data-z-index="1"><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 141.5 10 L 141.5 191" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 201.5 10 L 201.5 191" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 260.5 10 L 260.5 191" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 320.5 10 L 320.5 191" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 380.5 10 L 380.5 191" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 440.5 10 L 440.5 191" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 500.5 10 L 500.5 191" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 559.5 10 L 559.5 191" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 619.5 10 L 619.5 191" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 679.5 10 L 679.5 191" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 81.5 10 L 81.5 191" opacity="1"></path></g><g class="highcharts-grid highcharts-yaxis-grid" data-z-index="1"><path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 82 191.5 L 680 191.5" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 82 131.5 L 680 131.5" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 82 70.5 L 680 70.5" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 82 9.5 L 680 9.5" opacity="1"></path></g><rect fill="none" class="highcharts-plot-border" data-z-index="1" x="82" y="10" width="598" height="181"></rect><g class="highcharts-axis highcharts-xaxis" data-z-index="2"><path fill="none" class="highcharts-axis-line" stroke="#ccd6eb" stroke-width="1" data-z-index="7" d="M 82 191.5 L 680 191.5"></path></g><g class="highcharts-axis highcharts-yaxis" data-z-index="2"><text x="26.484375" data-z-index="7" text-anchor="end" transform="translate(0,0) rotate(270 26.484375 10)" class="highcharts-axis-title" style="color:#fff;fill:#fff;" y="10"><tspan>Jumlah</tspan></text><path fill="none" class="highcharts-axis-line" data-z-index="7" d="M 82 10 L 82 191"></path></g><path fill="none" class="highcharts-crosshair highcharts-crosshair-category undefined" data-z-index="2" stroke="rgba(204,214,235,0.25)" stroke-width="59.8" style="pointer-events:none;" visibility="hidden" d="M 589.5 10 L 589.5 191"></path><g class="highcharts-series-group" data-z-index="3"><g data-z-index="0.1" class="highcharts-series highcharts-series-0 highcharts-column-series highcharts-color-0  highcharts-tracker     " transform="translate(82,10) scale(1 1)" clip-path="url(#highcharts-uer9jga-1-)" opacity="1"><rect x="13.5" y="40.5" width="15" height="141" fill="#ffcc00" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="73.5" y="58.5" width="15" height="123" fill="#ffcc00" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="132.5" y="63.5" width="15" height="118" fill="#ffcc00" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="192.5" y="75.5" width="15" height="106" fill="#ffcc00" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="252.5" y="89.5" width="15" height="92" fill="#ffcc00" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="312.5" y="90.5" width="15" height="91" fill="#ffcc00" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="372.5" y="101.5" width="15" height="80" fill="#ffcc00" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="431.5" y="104.5" width="15" height="77" fill="rgb(255,204,0)" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0 "></rect><rect x="491.5" y="105.5" width="15" height="76" fill="#ffcc00" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="551.5" y="118.5" width="15" height="63" fill="#ffcc00" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect></g><g data-z-index="0.1" class="highcharts-markers highcharts-series-0 highcharts-column-series highcharts-color-0      " transform="translate(82,10) scale(1 1)" clip-path="none" opacity="1"></g><g data-z-index="0.1" class="highcharts-series highcharts-series-1 highcharts-column-series highcharts-color-1  highcharts-tracker     " transform="translate(82,10) scale(1 1)" clip-path="url(#highcharts-uer9jga-1-)" opacity="1"><rect x="31.5" y="181.5" width="15" height="0" fill="#b28e00" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-1"></rect><rect x="90.5" y="181.5" width="15" height="0" fill="#b28e00" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-1"></rect><rect x="150.5" y="181.5" width="15" height="0" fill="#b28e00" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-1"></rect><rect x="210.5" y="181.5" width="15" height="0" fill="#b28e00" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-1"></rect><rect x="270.5" y="181.5" width="15" height="0" fill="#b28e00" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-1"></rect><rect x="330.5" y="181.5" width="15" height="0" fill="#b28e00" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-1"></rect><rect x="389.5" y="181.5" width="15" height="0" fill="#b28e00" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-1"></rect><rect x="449.5" y="181.5" width="15" height="0" fill="#b28e00" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-1"></rect><rect x="509.5" y="181.5" width="15" height="0" fill="rgb(178,142,0)" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-1 "></rect><rect x="569.5" y="181.5" width="15" height="0" fill="#b28e00" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-1"></rect></g><g data-z-index="0.1" class="highcharts-markers highcharts-series-1 highcharts-column-series highcharts-color-1      " transform="translate(82,10) scale(1 1)" clip-path="none" opacity="1"></g><g data-z-index="0.1" class="highcharts-series highcharts-series-2 highcharts-spline-series      " transform="translate(82,10) scale(1 1)" clip-path="url(#highcharts-uer9jga-1-)" opacity="1"><path fill="none" d="M 29.9 39.69933333333333 C 29.9 39.69933333333333 65.78 52.94853333333332 89.7 57.55799999999999 C 113.62 62.16746666666666 125.58 59.19906666666665 149.5 62.746666666666655 C 173.42000000000002 66.29426666666666 185.38000000000002 69.96253333333333 209.3 75.29599999999999 C 233.22000000000003 80.62946666666667 245.18 88.44866666666667 269.1 89.414 C 293.02 90.37933333333334 304.98 89.414 328.9 90.37933333333334 C 352.82 91.34466666666667 364.78 97.83653333333332 388.7 100.51533333333333 C 412.62 103.19413333333333 424.58000000000004 102.78386666666667 448.5 103.77333333333333 C 472.41999999999996 104.76279999999998 484.38 103.77333333333333 508.3 105.46266666666666 C 532.22 107.152 568.1 117.65 568.1 117.65" class="highcharts-graph" data-z-index="1" stroke="#ff0000" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path><path fill="none" d="M 19.9 39.69933333333333 L 29.9 39.69933333333333 C 29.9 39.69933333333333 65.78 52.94853333333332 89.7 57.55799999999999 C 113.62 62.16746666666666 125.58 59.19906666666665 149.5 62.746666666666655 C 173.42000000000002 66.29426666666666 185.38000000000002 69.96253333333333 209.3 75.29599999999999 C 233.22000000000003 80.62946666666667 245.18 88.44866666666667 269.1 89.414 C 293.02 90.37933333333334 304.98 89.414 328.9 90.37933333333334 C 352.82 91.34466666666667 364.78 97.83653333333332 388.7 100.51533333333333 C 412.62 103.19413333333333 424.58000000000004 102.78386666666667 448.5 103.77333333333333 C 472.41999999999996 104.76279999999998 484.38 103.77333333333333 508.3 105.46266666666666 C 532.22 107.152 568.1 117.65 568.1 117.65 L 578.1 117.65" visibility="visible" data-z-index="2" class="highcharts-tracker-line" stroke-linejoin="round" stroke="rgba(192,192,192,0.0001)" stroke-width="22"></path></g><g data-z-index="0.1" class="highcharts-markers highcharts-series-2 highcharts-spline-series  highcharts-tracker     " transform="translate(82,10) scale(1 1)" opacity="1"><path fill="#ff0000" visibility="hidden" d="M 508 105.46266666666666 A 0 0 0 1 1 508 105.46266666666666 Z" class="highcharts-halo highcharts-color-undefined" data-z-index="-1" fill-opacity="0.25"></path><path fill="white" d="M 29 43.69933333333333 A 4 4 0 1 1 29.003999999333335 43.6993313333335 Z" stroke="#ff0000" stroke-width="2" opacity="1" class="highcharts-point "></path><path fill="white" d="M 89 61.55799999999999 A 4 4 0 1 1 89.00399999933333 61.55799800000016 Z" stroke="#ff0000" stroke-width="2" opacity="1" class="highcharts-point"></path><path fill="white" d="M 149 66.74666666666666 A 4 4 0 1 1 149.00399999933333 66.74666466666682 Z" stroke="#ff0000" stroke-width="2" opacity="1" class="highcharts-point "></path><path fill="white" d="M 209 79.29599999999999 A 4 4 0 1 1 209.00399999933333 79.29599800000015 Z" stroke="#ff0000" stroke-width="2" opacity="1" class="highcharts-point"></path><path fill="white" d="M 269 93.414 A 4 4 0 1 1 269.00399999933336 93.41399800000016 Z" stroke="#ff0000" stroke-width="2" opacity="1" class="highcharts-point "></path><path fill="white" d="M 328 94.37933333333334 A 4 4 0 1 1 328.00399999933336 94.3793313333335 Z" stroke="#ff0000" stroke-width="2" opacity="1" class="highcharts-point "></path><path fill="white" d="M 388 104.51533333333333 A 4 4 0 1 1 388.00399999933336 104.51533133333349 Z" stroke="#ff0000" stroke-width="2" opacity="1" class="highcharts-point "></path><path fill="white" d="M 448 107.77333333333333 A 4 4 0 1 1 448.00399999933336 107.77333133333349 Z" stroke="#ff0000" stroke-width="2" opacity="1" class="highcharts-point "></path><path fill="white" d="M 508 109.46266666666666 A 4 4 0 1 1 508.00399999933336 109.46266466666683 Z" stroke="#ff0000" stroke-width="2" opacity="1" class="highcharts-point "></path><path fill="white" d="M 568 121.65 A 4 4 0 1 1 568.0039999993334 121.64999800000017 Z" stroke="#ff0000" stroke-width="2" opacity="1" class="highcharts-point"></path></g></g><text x="345" text-anchor="middle" class="highcharts-title" data-z-index="4" style="color:#333333;font-size:18px;fill:#333333;" y="24"></text><text x="345" text-anchor="middle" class="highcharts-subtitle" data-z-index="4" style="color:#666666;fill:#666666;" y="24"></text><g data-z-index="6" class="highcharts-data-labels highcharts-series-0 highcharts-column-series highcharts-color-0  highcharts-tracker     " transform="translate(82,10) scale(1 1)" opacity="1"><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(0,17)"><text x="5" data-z-index="1" style="font-size:11px;font-weight:bold;color:#fff;fill:#fff;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#000000" stroke="#000000" stroke-width="2px" stroke-linejoin="round" "">1 171</tspan><tspan x="5" y="16">1 171</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(60,35)"><text x="5" data-z-index="1" style="font-size:11px;font-weight:bold;color:#fff;fill:#fff;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#000000" stroke="#000000" stroke-width="2px" stroke-linejoin="round">1 023</tspan><tspan x="5" y="16">1 023</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(125,40)"><text x="5" data-z-index="1" style="font-size:11px;font-weight:bold;color:#fff;fill:#fff;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#000000" stroke="#000000" stroke-width="2px" stroke-linejoin="round">980</tspan><tspan x="5" y="16">980</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(185,52)"><text x="5" data-z-index="1" style="font-size:11px;font-weight:bold;color:#fff;fill:#fff;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#000000" stroke="#000000" stroke-width="2px" stroke-linejoin="round">876</tspan><tspan x="5" y="16">876</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(245,66)"><text x="5" data-z-index="1" style="font-size:11px;font-weight:bold;color:#fff;fill:#fff;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#000000" stroke="#000000" stroke-width="2px" stroke-linejoin="round">759</tspan><tspan x="5" y="16">759</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(305,67)"><text x="5" data-z-index="1" style="font-size:11px;font-weight:bold;color:#fff;fill:#fff;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#000000" stroke="#000000" stroke-width="2px" stroke-linejoin="round">751</tspan><tspan x="5" y="16">751</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(365,78)"><text x="5" data-z-index="1" style="font-size:11px;font-weight:bold;color:#fff;fill:#fff;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#000000" stroke="#000000" stroke-width="2px" stroke-linejoin="round">667</tspan><tspan x="5" y="16">667</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(424,81)"><text x="5" data-z-index="1" style="font-size:11px;font-weight:bold;color:#fff;fill:#fff;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#000000" stroke="#000000" stroke-width="2px" stroke-linejoin="round">640</tspan><tspan x="5" y="16">640</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(484,82)"><text x="5" data-z-index="1" style="font-size:11px;font-weight:bold;color:#fff;fill:#fff;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#000000" stroke="#000000" stroke-width="2px" stroke-linejoin="round">626</tspan><tspan x="5" y="16">626</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(544,95)"><text x="5" data-z-index="1" style="font-size:11px;font-weight:bold;color:#fff;fill:#fff;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#000000" stroke="#000000" stroke-width="2px" stroke-linejoin="round">525</tspan><tspan x="5" y="16">525</tspan></text></g></g><g data-z-index="6" class="highcharts-data-labels highcharts-series-1 highcharts-column-series highcharts-color-1  highcharts-tracker     " transform="translate(82,10) scale(1 1)" opacity="1"><g class="highcharts-label highcharts-data-label highcharts-data-label-color-1" data-z-index="1" transform="translate(31,158)"><text x="5" data-z-index="1" style="font-size:11px;font-weight:bold;color:#fff;fill:#fff;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#000000" stroke="#000000" stroke-width="2px" stroke-linejoin="round">0</tspan><tspan x="5" y="16">0</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-1" data-z-index="1" transform="translate(90,158)"><text x="5" data-z-index="1" style="font-size:11px;font-weight:bold;color:#fff;fill:#fff;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#000000" stroke="#000000" stroke-width="2px" stroke-linejoin="round">0</tspan><tspan x="5" y="16">0</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-1" data-z-index="1" transform="translate(150,158)"><text x="5" data-z-index="1" style="font-size:11px;font-weight:bold;color:#fff;fill:#fff;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#000000" stroke="#000000" stroke-width="2px" stroke-linejoin="round">0</tspan><tspan x="5" y="16">0</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-1" data-z-index="1" transform="translate(210,158)"><text x="5" data-z-index="1" style="font-size:11px;font-weight:bold;color:#fff;fill:#fff;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#000000" stroke="#000000" stroke-width="2px" stroke-linejoin="round">0</tspan><tspan x="5" y="16">0</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-1" data-z-index="1" transform="translate(270,158)"><text x="5" data-z-index="1" style="font-size:11px;font-weight:bold;color:#fff;fill:#fff;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#000000" stroke="#000000" stroke-width="2px" stroke-linejoin="round">0</tspan><tspan x="5" y="16">0</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-1" data-z-index="1" transform="translate(330,158)"><text x="5" data-z-index="1" style="font-size:11px;font-weight:bold;color:#fff;fill:#fff;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#000000" stroke="#000000" stroke-width="2px" stroke-linejoin="round">0</tspan><tspan x="5" y="16">0</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-1" data-z-index="1" transform="translate(389,158)"><text x="5" data-z-index="1" style="font-size:11px;font-weight:bold;color:#fff;fill:#fff;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#000000" stroke="#000000" stroke-width="2px" stroke-linejoin="round">0</tspan><tspan x="5" y="16">0</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-1" data-z-index="1" transform="translate(449,158)"><text x="5" data-z-index="1" style="font-size:11px;font-weight:bold;color:#fff;fill:#fff;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#000000" stroke="#000000" stroke-width="2px" stroke-linejoin="round">0</tspan><tspan x="5" y="16">0</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-1" data-z-index="1" transform="translate(509,158)"><text x="5" data-z-index="1" style="font-size:11px;font-weight:bold;color:#fff;fill:#fff;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#000000" stroke="#000000" stroke-width="2px" stroke-linejoin="round">0</tspan><tspan x="5" y="16">0</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-1" data-z-index="1" transform="translate(569,158)"><text x="5" data-z-index="1" style="font-size:11px;font-weight:bold;color:#fff;fill:#fff;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#000000" stroke="#000000" stroke-width="2px" stroke-linejoin="round">0</tspan><tspan x="5" y="16">0</tspan></text></g></g><g data-z-index="6" class="highcharts-data-labels highcharts-series-2 highcharts-spline-series      " transform="translate(82,10) scale(1 1)" opacity="1"><text x="35.56666666666666" y="-9999" class="highcharts-data-label highcharts-data-label-color-undefined" r="0" padding="5" data-z-index="1" transform="translate(0,0) rotate(270 35.56666666666666 -9999)" style="font-size:11px;font-weight:bold;color:#fff;fill:#fff;" text-anchor="start"><tspan x="35.56666666666666" y="-9999" class="highcharts-text-outline" fill="#000000" stroke="#000000" stroke-width="2px" stroke-linejoin="round" "">1 171</tspan><tspan x="35.56666666666666" y="-9999">1 171</tspan></text><text x="95.36666666666667" y="15.8125" class="highcharts-data-label highcharts-data-label-color-undefined" r="0" padding="5" data-z-index="1" transform="translate(0,0) rotate(270 95.36666666666667 15.8125)" style="font-size:11px;font-weight:bold;color:#fff;fill:#fff;" text-anchor="start" opacity="0" visibility="hidden"><tspan x="95.36666666666667" y="15.8125" class="highcharts-text-outline" fill="#000000" stroke="#000000" stroke-width="2px" stroke-linejoin="round">1 023</tspan><tspan x="95.36666666666667" y="15.8125">1 023</tspan></text><text x="155.16666666666666" y="53" class="highcharts-data-label highcharts-data-label-color-undefined" r="0" padding="5" data-z-index="1" transform="translate(0,0) rotate(270 155.16666666666666 53)" style="font-size:11px;font-weight:bold;color:#fff;fill:#fff;" text-anchor="start"><tspan x="155.16666666666666" y="53" class="highcharts-text-outline" fill="#000000" stroke="#000000" stroke-width="2px" stroke-linejoin="round" "">980</tspan><tspan x="155.16666666666666" y="53">980</tspan></text><text x="214.96666666666667" y="65" class="highcharts-data-label highcharts-data-label-color-undefined" r="0" padding="5" data-z-index="1" transform="translate(0,0) rotate(270 214.96666666666667 65)" style="font-size:11px;font-weight:bold;color:#fff;fill:#fff;" text-anchor="start"><tspan x="214.96666666666667" y="65" class="highcharts-text-outline" fill="#000000" stroke="#000000" stroke-width="2px" stroke-linejoin="round">876</tspan><tspan x="214.96666666666667" y="65">876</tspan></text><text x="274.7666666666667" y="79" class="highcharts-data-label highcharts-data-label-color-undefined" r="0" padding="5" data-z-index="1" transform="translate(0,0) rotate(270 274.7666666666667 79)" style="font-size:11px;font-weight:bold;color:#fff;fill:#fff;" text-anchor="start"><tspan x="274.7666666666667" y="79" class="highcharts-text-outline" fill="#000000" stroke="#000000" stroke-width="2px" stroke-linejoin="round">759</tspan><tspan x="274.7666666666667" y="79">759</tspan></text><text x="334.56666666666666" y="80" class="highcharts-data-label highcharts-data-label-color-undefined" r="0" padding="5" data-z-index="1" transform="translate(0,0) rotate(270 334.56666666666666 80)" style="font-size:11px;font-weight:bold;color:#fff;fill:#fff;" text-anchor="start"><tspan x="334.56666666666666" y="80" class="highcharts-text-outline" fill="#000000" stroke="#000000" stroke-width="2px" stroke-linejoin="round">751</tspan><tspan x="334.56666666666666" y="80">751</tspan></text><text x="394.3666666666667" y="91" class="highcharts-data-label highcharts-data-label-color-undefined" r="0" padding="5" data-z-index="1" transform="translate(0,0) rotate(270 394.3666666666667 91)" style="font-size:11px;font-weight:bold;color:#fff;fill:#fff;" text-anchor="start"><tspan x="394.3666666666667" y="91" class="highcharts-text-outline" fill="#000000" stroke="#000000" stroke-width="2px" stroke-linejoin="round">667</tspan><tspan x="394.3666666666667" y="91">667</tspan></text><text x="454.1666666666667" y="94" class="highcharts-data-label highcharts-data-label-color-undefined" r="0" padding="5" data-z-index="1" transform="translate(0,0) rotate(270 454.1666666666667 94)" style="font-size:11px;font-weight:bold;color:#fff;fill:#fff;" text-anchor="start"><tspan x="454.1666666666667" y="94" class="highcharts-text-outline" fill="#000000" stroke="#000000" stroke-width="2px" stroke-linejoin="round">640</tspan><tspan x="454.1666666666667" y="94">640</tspan></text><text x="513.9666666666667" y="95" class="highcharts-data-label highcharts-data-label-color-undefined" r="0" padding="5" data-z-index="1" transform="translate(0,0) rotate(270 513.9666666666667 95)" style="font-size:11px;font-weight:bold;color:#fff;fill:#fff;" text-anchor="start"><tspan x="513.9666666666667" y="95" class="highcharts-text-outline" fill="#000000" stroke="#000000" stroke-width="2px" stroke-linejoin="round">626</tspan><tspan x="513.9666666666667" y="95">626</tspan></text><text x="573.7666666666667" y="108" class="highcharts-data-label highcharts-data-label-color-undefined" r="0" padding="5" data-z-index="1" transform="translate(0,0) rotate(270 573.7666666666667 108)" style="font-size:11px;font-weight:bold;color:#fff;fill:#fff;" text-anchor="start"><tspan x="573.7666666666667" y="108" class="highcharts-text-outline" fill="#000000" stroke="#000000" stroke-width="2px" stroke-linejoin="round">525</tspan><tspan x="573.7666666666667" y="108">525</tspan></text></g><g class="highcharts-axis-labels highcharts-xaxis-labels" data-z-index="7"><text x="115.34553960954833" style="color:#fff;cursor:default;font-size:11px;fill:#fff;" text-anchor="end" transform="translate(0,0) rotate(-70 115.34553960954833 203)" y="203" opacity="1">FARMASI</text><text x="175.1455396095483" style="color:#fff;cursor:default;font-size:11px;fill:#fff;" text-anchor="end" transform="translate(0,0) rotate(-70 175.1455396095483 203)" y="203" opacity="1"><tspan>PENDIDIKAN DOKTER</tspan></text><text x="234.94553960954832" style="color:#fff;cursor:default;font-size:11px;fill:#fff;" text-anchor="end" transform="translate(0,0) rotate(-70 234.94553960954832 203)" y="203" opacity="1">MANAJEMEN</text><text x="294.74553960954836" style="color:#fff;cursor:default;font-size:11px;fill:#fff;" text-anchor="end" transform="translate(0,0) rotate(-70 294.74553960954836 203)" y="203" opacity="1"><tspan>ILMU KEPERAWATAN</tspan></text><text x="354.54553960954837" style="color:#fff;cursor:default;font-size:11px;fill:#fff;" text-anchor="end" transform="translate(0,0) rotate(-70 354.54553960954837 203)" y="203" opacity="1"><tspan>ILMU HUKUM</tspan></text><text x="414.3455396095484" style="color:#fff;cursor:default;font-size:11px;fill:#fff;" text-anchor="end" transform="translate(0,0) rotate(-70 414.3455396095484 203)" y="203" opacity="1">INFORMATIKA</text><text x="474.1455396095484" style="color:#fff;cursor:default;font-size:11px;fill:#fff;" text-anchor="end" transform="translate(0,0) rotate(-70 474.1455396095484 203)" y="203" opacity="1"><tspan>PENDIDIKAN GURU SEKOLAH DASAR</tspan></text><text x="533.9455396095483" style="color:#fff;cursor:default;font-size:11px;fill:#fff;" text-anchor="end" transform="translate(0,0) rotate(-70 533.9455396095483 203)" y="203" opacity="1">AKUNTANSI</text><text x="593.7455396095484" style="color:#fff;cursor:default;font-size:11px;fill:#fff;" text-anchor="end" transform="translate(0,0) rotate(-70 593.7455396095484 203)" y="203" opacity="1"><tspan>TEKNIK KOMPUTER</tspan></text><text x="653.5455396095483" style="color:#fff;cursor:default;font-size:11px;fill:#fff;" text-anchor="end" transform="translate(0,0) rotate(-70 653.5455396095483 203)" y="203" opacity="1"><tspan>PENDIDIKAN DOKTER GIGI</tspan></text></g><g class="highcharts-axis-labels highcharts-yaxis-labels" data-z-index="7"><text x="67" style="color:#fff;cursor:default;font-size:11px;fill:#fff;" text-anchor="end" transform="translate(0,0)" y="195" opacity="1">0</text><text x="67" style="color:#fff;cursor:default;font-size:11px;fill:#fff;" text-anchor="end" transform="translate(0,0)" y="135" opacity="1">500</text><text x="67" style="color:#fff;cursor:default;font-size:11px;fill:#fff;" text-anchor="end" transform="translate(0,0)" y="74" opacity="1">1000</text><text x="67" style="color:#fff;cursor:default;font-size:11px;fill:#fff;" text-anchor="end" transform="translate(0,0)" y="14" opacity="1">1500</text></g><g class="highcharts-label highcharts-tooltip highcharts-color-undefined  highcharts-color-1" style="pointer-events:none;white-space:nowrap;" data-z-index="8" transform="translate(534,-9999)" opacity="0" visibility="visible"><path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow" d="M 3.5 0.5 L 130.5 0.5 C 133.5 0.5 133.5 0.5 133.5 3.5 L 133.5 44.5 C 133.5 47.5 133.5 47.5 130.5 47.5 L 71.5 47.5 65.5 53.5 59.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5" transform="translate(1, 1)"></path><path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow" d="M 3.5 0.5 L 130.5 0.5 C 133.5 0.5 133.5 0.5 133.5 3.5 L 133.5 44.5 C 133.5 47.5 133.5 47.5 130.5 47.5 L 71.5 47.5 65.5 53.5 59.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3" transform="translate(1, 1)"></path><path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow" d="M 3.5 0.5 L 130.5 0.5 C 133.5 0.5 133.5 0.5 133.5 3.5 L 133.5 44.5 C 133.5 47.5 133.5 47.5 130.5 47.5 L 71.5 47.5 65.5 53.5 59.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#000000" stroke-opacity="0.15" stroke-width="1" transform="translate(1, 1)"></path><path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box" d="M 3.5 0.5 L 130.5 0.5 C 133.5 0.5 133.5 0.5 133.5 3.5 L 133.5 44.5 C 133.5 47.5 133.5 47.5 130.5 47.5 L 71.5 47.5 65.5 53.5 59.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#b28e00" stroke-width="1"></path><text x="8" data-z-index="1" style="font-size:12px;color:#333333;cursor:default;fill:#333333;" y="20"><tspan style="font-size: 10px">TEKNIK KOMPUTER</tspan><tspan style="fill:#b28e00" x="8" dy="15">●</tspan><tspan dx="0"> PTN 2: </tspan><tspan style="font-weight:bold" dx="0">0 Peminat</tspan></text></g></svg></div></div>
            </div>
        </div>
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