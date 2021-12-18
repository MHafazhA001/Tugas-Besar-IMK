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
                </header>
                <div class="row counters" style="padding-top: 0px">
                    <div class="col-lg-2 col-6 text-center">
                        <p style="text-align: left">Janjang</p>
                        <select id="jenjang" name="jenjang" class="form-control select2-hidden-accessible" data-select2-id="jenjang" tabindex="-1" aria-hidden="true">
                <option value="0" selected="" data-select2-id="5">D3</option>
                <option value="1">S1</option>
                <option value="2">S2</option>
                <option value="3">S3</option>
                <option value="4">Profesi</option>
                <option value="5">Spesialis</option>
              </select>
                        <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 160px"><span class="selection"
                  ><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-jenjang-container"
                    ><span class="select2-selection__rendered" id="select2-jenjang-container" role="textbox" aria-readonly="true" title="D3">D3</span>
                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                        </span>
                        </span><span class="dropdown-wrapper" aria-hidden="true"></span
              ></span>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <p style="text-align: left">Fakultas</p>
                        <select id="fakultas" name="fakultas" class="form-control select2-hidden-accessible" data-select2-id="fakultas" tabindex="-1" aria-hidden="true">
                <option value="01" selected="" data-select2-id="7">Ekonomi dan Bisnis</option>
                <option value="02">Kedokteran Hewan</option>
                <option value="04">Teknik</option>
                <option value="05">Pertanian</option>
                <option value="08">MIPA</option>
              </select>
                        <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 255px"><span class="selection"
                  ><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-fakultas-container"
                    ><span class="select2-selection__rendered" id="select2-fakultas-container" role="textbox" aria-readonly="true" title="Ekonomi dan Bisnis">Ekonomi dan Bisnis</span>
                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                        </span>
                        </span><span class="dropdown-wrapper" aria-hidden="true"></span
              ></span>
                    </div>
                    <div class="col-lg-7 col-6 text-center">
                        <p style="text-align: left">Prodi</p>
                        <select id="prodi" name="prodi" class="form-control select2-hidden-accessible" data-select2-id="prodi" tabindex="-1" aria-hidden="true">
                <option value="0100301" selected="" data-select2-id="9">D3 - Akuntansi</option>
                <option value="0100203">D3 - Keuangan dan Perbankan</option>
                <option value="0100101">D3 - Manajemen Perusahaan</option>
                <option value="0100201">D3 - Pemasaran</option>
                <option value="0100302">D3 - Perpajakan</option>
                <option value="0100202">D3 - Sekretari</option>
              </select>
                        <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: 635px"><span class="selection"
                  ><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-prodi-container"
                    ><span class="select2-selection__rendered" id="select2-prodi-container" role="textbox" aria-readonly="true" title="D3 - Akuntansi">D3 - Akuntansi</span>
                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                        </span>
                        </span><span class="dropdown-wrapper" aria-hidden="true"></span
              ></span>
                    </div>
                </div>
                <hr />
                <div id="box1">
                    <div class="row counters" style="padding-top: 0px">
                        <div class="col-md-3 text-center">
                            <span data-toggle="counter-up" style="font-size: 55pt; color: #fff">44</span>
                            <p>TOTAL MATA KULIAH</p>
                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-7">
                                    <div id="chart1" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0px auto; overflow: hidden" data-highcharts-chart="0">
                                        <div id="highcharts-j0shlco-0" dir="ltr" class="highcharts-container" style="position: relative; overflow: hidden; width: 390px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0)">
                                            <svg version="1.1" class="highcharts-root" style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', Arial, Helvetica, sans-serif; font-size: 12px" xmlns="http://www.w3.org/2000/svg" width="390" height="400" viewBox="0 0 390 400">
                          <desc>Created with Highcharts 7.1.2</desc>
                          <defs>
                            <clipPath id="highcharts-j0shlco-1-"><rect x="0" y="0" width="312" height="315" fill="none"></rect></clipPath>
                          </defs>
                          <rect fill="#004a99" class="highcharts-background" x="0" y="0" width="390" height="400" rx="0" ry="0"></rect>
                          <rect fill="none" class="highcharts-plot-background" x="68" y="10" width="312" height="315"></rect>
                          <g class="highcharts-grid highcharts-xaxis-grid" data-z-index="1">
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 119.5 10 L 119.5 325" opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 171.5 10 L 171.5 325" opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 223.5 10 L 223.5 325" opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 275.5 10 L 275.5 325" opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 327.5 10 L 327.5 325" opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 379.5 10 L 379.5 325" opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 67.5 10 L 67.5 325" opacity="1"></path>
                          </g>
                          <g class="highcharts-grid highcharts-yaxis-grid" data-z-index="1">
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 68 325.5 L 380 325.5" opacity="1"></path>
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 68 262.5 L 380 262.5" opacity="1"></path>
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 68 199.5 L 380 199.5" opacity="1"></path>
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 68 136.5 L 380 136.5" opacity="1"></path>
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 68 73.5 L 380 73.5" opacity="1"></path>
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 68 9.5 L 380 9.5" opacity="1"></path>
                          </g>
                          <rect fill="none" class="highcharts-plot-border" data-z-index="1" x="68" y="10" width="312" height="315"></rect>
                          <g class="highcharts-axis highcharts-xaxis" data-z-index="2"><path fill="none" class="highcharts-axis-line" stroke="#ccd6eb" stroke-width="1" data-z-index="7" d="M 68 325.5 L 380 325.5"></path></g>
                          <g class="highcharts-axis highcharts-yaxis" data-z-index="2">
                            <text x="26.390625" data-z-index="7" text-anchor="end" transform="translate(0,0) rotate(270 26.390625 10)" class="highcharts-axis-title" style="color: #fff; fill: #fff" y="10"><tspan>Jumlah</tspan></text>
                            <path fill="none" class="highcharts-axis-line" data-z-index="7" d="M 68 10 L 68 325"></path>
                          </g>
                          <path
                            fill="none"
                            class="highcharts-crosshair highcharts-crosshair-category undefined"
                            data-z-index="2"
                            stroke="rgba(204,214,235,0.25)"
                            stroke-width="52"
                            style="pointer-events: none"
                            visibility="hidden"
                            d="M 249.5 10 L 249.5 325"
                          ></path>
                          <g class="highcharts-series-group" data-z-index="3">
                            <g data-z-index="0.1" class="highcharts-series highcharts-series-0 highcharts-column-series highcharts-color-0 highcharts-tracker" transform="translate(68,10) scale(1 1)" clip-path="url(#highcharts-j0shlco-1-)">
                              <rect x="13.5" y="76.5" width="25" height="239" fill="#ffcc00" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect>
                              <rect x="65.5" y="25.5" width="25" height="290" fill="#ffcc00" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect>
                              <rect x="117.5" y="63.5" width="25" height="252" fill="#ffcc00" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect>
                              <rect x="169.5" y="63.5" width="25" height="252" fill="rgb(255,204,0)" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect>
                              <rect x="221.5" y="63.5" width="25" height="252" fill="rgb(255,204,0)" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect>
                              <rect x="273.5" y="189.5" width="25" height="126" fill="#ffcc00" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect>
                            </g>
                            <g data-z-index="0.1" class="highcharts-markers highcharts-series-0 highcharts-column-series highcharts-color-0" transform="translate(68,10) scale(1 1)" clip-path="none"></g>
                          </g>
                          <text x="195" text-anchor="middle" class="highcharts-title" data-z-index="4" style="color: #333333; font-size: 18px; fill: #333333" y="24"></text>
                          <text x="195" text-anchor="middle" class="highcharts-subtitle" data-z-index="4" style="color: #666666; fill: #666666" y="24"></text>
                          <g data-z-index="6" class="highcharts-data-labels highcharts-series-0 highcharts-column-series highcharts-color-0 highcharts-tracker" transform="translate(68,10) scale(1 1)" opacity="1">
                            <g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(14,53)">
                              <text x="5" data-z-index="1" style="font-size: 11px; font-weight: bold; color: #fff; fill: #fff" y="16">
                                <tspan x="5" y="16" class="highcharts-text-outline" fill="#000000" stroke="#000000" stroke-width="2px" stroke-linejoin="round">19</tspan>
                                <tspan x="5" y="16">19</tspan>
                              </text>
                            </g>
                            <g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(66,2)">
                              <text x="5" data-z-index="1" style="font-size: 11px; font-weight: bold; color: #fff; fill: #fff" y="16">
                                <tspan x="5" y="16" class="highcharts-text-outline" fill="#000000" stroke="#000000" stroke-width="2px" stroke-linejoin="round">23</tspan>
                                <tspan x="5" y="16">23</tspan>
                              </text>
                            </g>
                            <g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(118,40)">
                              <text x="5" data-z-index="1" style="font-size: 11px; font-weight: bold; color: #fff; fill: #fff" y="16">
                                <tspan x="5" y="16" class="highcharts-text-outline" fill="#000000" stroke="#000000" stroke-width="2px" stroke-linejoin="round">20</tspan>
                                <tspan x="5" y="16">20</tspan>
                              </text>
                            </g>
                            <g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(170,40)">
                              <text x="5" data-z-index="1" style="font-size: 11px; font-weight: bold; color: #fff; fill: #fff" y="16">
                                <tspan x="5" y="16" class="highcharts-text-outline" fill="#000000" stroke="#000000" stroke-width="2px" stroke-linejoin="round">20</tspan>
                                <tspan x="5" y="16">20</tspan>
                              </text>
                            </g>
                            <g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(222,40)">
                              <text x="5" data-z-index="1" style="font-size: 11px; font-weight: bold; color: #fff; fill: #fff" y="16">
                                <tspan x="5" y="16" class="highcharts-text-outline" fill="#000000" stroke="#000000" stroke-width="2px" stroke-linejoin="round">20</tspan>
                                <tspan x="5" y="16">20</tspan>
                              </text>
                            </g>
                            <g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(274,166)">
                              <text x="5" data-z-index="1" style="font-size: 11px; font-weight: bold; color: #fff; fill: #fff" y="16">
                                <tspan x="5" y="16" class="highcharts-text-outline" fill="#000000" stroke="#000000" stroke-width="2px" stroke-linejoin="round">10</tspan>
                                <tspan x="5" y="16">10</tspan>
                              </text>
                            </g>
                          </g>
                          <g class="highcharts-axis-labels highcharts-xaxis-labels" data-z-index="7">
                            <text x="96.59272486435067" style="color: #fff; cursor: default; font-size: 11px; fill: #fff" text-anchor="end" transform="translate(0,0) rotate(-45 96.59272486435067 341)" y="341" opacity="1">
                              <tspan>Semester 1</tspan>
                            </text>
                            <text x="148.59272486435069" style="color: #fff; cursor: default; font-size: 11px; fill: #fff" text-anchor="end" transform="translate(0,0) rotate(-45 148.59272486435069 341)" y="341" opacity="1">
                              <tspan>Semester 2</tspan>
                            </text>
                            <text x="200.59272486435069" style="color: #fff; cursor: default; font-size: 11px; fill: #fff" text-anchor="end" transform="translate(0,0) rotate(-45 200.59272486435069 341)" y="341" opacity="1">
                              <tspan>Semester 3</tspan>
                            </text>
                            <text x="252.59272486435066" style="color: #fff; cursor: default; font-size: 11px; fill: #fff" text-anchor="end" transform="translate(0,0) rotate(-45 252.59272486435066 341)" y="341" opacity="1">
                              <tspan>Semester 4</tspan>
                            </text>
                            <text x="304.59272486435066" style="color: #fff; cursor: default; font-size: 11px; fill: #fff" text-anchor="end" transform="translate(0,0) rotate(-45 304.59272486435066 341)" y="341" opacity="1">
                              <tspan>Semester 5</tspan>
                            </text>
                            <text x="356.59272486435066" style="color: #fff; cursor: default; font-size: 11px; fill: #fff" text-anchor="end" transform="translate(0,0) rotate(-45 356.59272486435066 341)" y="341" opacity="1">
                              <tspan>Semester 6</tspan>
                            </text>
                          </g>
                          <g class="highcharts-axis-labels highcharts-yaxis-labels" data-z-index="7">
                            <text x="53" style="color: #fff; cursor: default; font-size: 11px; fill: #fff" text-anchor="end" transform="translate(0,0)" y="329" opacity="1">0</text>
                            <text x="53" style="color: #fff; cursor: default; font-size: 11px; fill: #fff" text-anchor="end" transform="translate(0,0)" y="266" opacity="1">5</text>
                            <text x="53" style="color: #fff; cursor: default; font-size: 11px; fill: #fff" text-anchor="end" transform="translate(0,0)" y="203" opacity="1">10</text>
                            <text x="53" style="color: #fff; cursor: default; font-size: 11px; fill: #fff" text-anchor="end" transform="translate(0,0)" y="140" opacity="1">15</text>
                            <text x="53" style="color: #fff; cursor: default; font-size: 11px; fill: #fff" text-anchor="end" transform="translate(0,0)" y="77" opacity="1">20</text>
                            <text x="53" style="color: #fff; cursor: default; font-size: 11px; fill: #fff" text-anchor="end" transform="translate(0,0)" y="14" opacity="1">25</text>
                          </g>
                          <g class="highcharts-label highcharts-tooltip highcharts-color-0" style="pointer-events: none; white-space: nowrap" data-z-index="8" transform="translate(191,-9999)" opacity="0" visibility="visible">
                            <path
                              fill="none"
                              class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                              d="M 3.5 0.5 L 115.5 0.5 C 118.5 0.5 118.5 0.5 118.5 3.5 L 118.5 44.5 C 118.5 47.5 118.5 47.5 115.5 47.5 L 64.5 47.5 58.5 53.5 52.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                              stroke="#000000"
                              stroke-opacity="0.049999999999999996"
                              stroke-width="5"
                              transform="translate(1, 1)"
                            ></path>
                            <path
                              fill="none"
                              class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                              d="M 3.5 0.5 L 115.5 0.5 C 118.5 0.5 118.5 0.5 118.5 3.5 L 118.5 44.5 C 118.5 47.5 118.5 47.5 115.5 47.5 L 64.5 47.5 58.5 53.5 52.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                              stroke="#000000"
                              stroke-opacity="0.09999999999999999"
                              stroke-width="3"
                              transform="translate(1, 1)"
                            ></path>
                            <path
                              fill="none"
                              class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                              d="M 3.5 0.5 L 115.5 0.5 C 118.5 0.5 118.5 0.5 118.5 3.5 L 118.5 44.5 C 118.5 47.5 118.5 47.5 115.5 47.5 L 64.5 47.5 58.5 53.5 52.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                              stroke="#000000"
                              stroke-opacity="0.15"
                              stroke-width="1"
                              transform="translate(1, 1)"
                            ></path>
                            <path
                              fill="rgba(247,247,247,0.85)"
                              class="highcharts-label-box highcharts-tooltip-box"
                              d="M 3.5 0.5 L 115.5 0.5 C 118.5 0.5 118.5 0.5 118.5 3.5 L 118.5 44.5 C 118.5 47.5 118.5 47.5 115.5 47.5 L 64.5 47.5 58.5 53.5 52.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                              stroke="#ffcc00"
                              stroke-width="1"
                            ></path>
                            <text x="8" data-z-index="1" style="font-size: 12px; color: #333333; cursor: default; fill: #333333" y="20">
                              <tspan style="font-size: 10px">Semester 4</tspan>
                              <tspan style="fill: #ffcc00" x="8" dy="15">●</tspan>
                              <tspan dx="0">Jumlah:</tspan>
                              <tspan style="font-weight: bold" dx="0">20 SKS</tspan>
                            </text>
                          </g>
                        </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" style="width: 100%">
                                            <thead>
                                                <tr style="background: none; color: #fff">
                                                    <th style="font-size: 9pt; padding: 8px"></th>
                                                    <th style="font-size: 9pt; padding: 8px">Jumlah<br />Mata Kuliah</th>
                                                    <th style="font-size: 9pt; padding: 8px">SKS</th>
                                                    <th style="font-size: 9pt; padding: 8px">(K-P)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr style="background: none; color: #fff">
                                                    <td style="font-size: 9pt; padding: 8px">Semester 1</td>
                                                    <td style="font-size: 9pt; padding: 8px">8</td>
                                                    <td style="font-size: 9pt; padding: 8px">19</td>
                                                    <td style="font-size: 9pt; padding: 8px">19 (10-6)</td>
                                                </tr>

                                                <tr style="background: none; color: #fff">
                                                    <td style="font-size: 9pt; padding: 8px">Semester 2</td>
                                                    <td style="font-size: 9pt; padding: 8px">10</td>
                                                    <td style="font-size: 9pt; padding: 8px">23</td>
                                                    <td style="font-size: 9pt; padding: 8px">23 (10-6)</td>
                                                </tr>

                                                <tr style="background: none; color: #fff">
                                                    <td style="font-size: 9pt; padding: 8px">Semester 3</td>
                                                    <td style="font-size: 9pt; padding: 8px">7</td>
                                                    <td style="font-size: 9pt; padding: 8px">20</td>
                                                    <td style="font-size: 9pt; padding: 8px">20 (6-5)</td>
                                                </tr>

                                                <tr style="background: none; color: #fff">
                                                    <td style="font-size: 9pt; padding: 8px">Semester 4</td>
                                                    <td style="font-size: 9pt; padding: 8px">8</td>
                                                    <td style="font-size: 9pt; padding: 8px">20</td>
                                                    <td style="font-size: 9pt; padding: 8px">20 (8-7)</td>
                                                </tr>

                                                <tr style="background: none; color: #fff">
                                                    <td style="font-size: 9pt; padding: 8px">Semester 5</td>
                                                    <td style="font-size: 9pt; padding: 8px">8</td>
                                                    <td style="font-size: 9pt; padding: 8px">20</td>
                                                    <td style="font-size: 9pt; padding: 8px">20 (4-9)</td>
                                                </tr>

                                                <tr style="background: none; color: #fff">
                                                    <td style="font-size: 9pt; padding: 8px">Semester 6</td>
                                                    <td style="font-size: 9pt; padding: 8px">3</td>
                                                    <td style="font-size: 9pt; padding: 8px">10</td>
                                                    <td style="font-size: 9pt; padding: 8px">10 (0-10)</td>
                                                </tr>

                                                <tr style="background: none; color: #fff">
                                                    <td style="font-size: 9pt; padding: 8px">Pilihan Ganjil</td>
                                                    <td style="font-size: 9pt; padding: 8px">0</td>
                                                    <td style="font-size: 9pt; padding: 8px">0</td>
                                                    <td style="font-size: 9pt; padding: 8px">0 (0-0)</td>
                                                </tr>
                                                <tr style="background: none; color: #fff">
                                                    <td style="font-size: 9pt; padding: 8px">Pilihan Genap</td>
                                                    <td style="font-size: 9pt; padding: 8px">0</td>
                                                    <td style="font-size: 9pt; padding: 8px">0</td>
                                                    <td style="font-size: 9pt; padding: 8px">0 (0-0)</td>
                                                </tr>

                                                <tr style="background: none; color: #fff">
                                                    <th style="font-size: 9pt; padding: 8px">Total</th>
                                                    <th style="font-size: 9pt; padding: 8px">44</th>
                                                    <th style="font-size: 9pt; padding: 8px">112</th>
                                                    <th style="font-size: 9pt; padding: 8px"></th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
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