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
            </nav>
        </div>
    </header>
    <main id="main">
        <section id="why-us" class="wow fadeIn" style="margin-top: 80px">
            <div class="container">
                <header class="section-header">
                    <h3>Data Pengajar Mata Kuliah Program Studi</h3>
                    <p style="width: 100%">
                        Pengajar mata kuliah program studi yang terdaftar<br />
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
                <option value="0">D3</option>
                <option value="1">S1</option>
                <option value="2">S2</option>
                <option value="3">S3</option>
                <option value="4">Profesi</option>
                <option value="5">Spesialis</option>
              </select>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <p style="text-align: left">Fakultas</p>
                        <select id="fakultas" name="fakultas" class="form-control">
                <option value="#" selected="" data-select2-id="9">- Semua -</option>
                <option value="01">Ekonomi dan Bisnis</option>
                <option value="02">Kedokteran Hewan</option>
                <option value="03">Hukum</option>
                <option value="04">Teknik</option>
                <option value="05">Pertanian</option>
                <option value="06">KIP</option>
                <option value="07">Kedokteran</option>
                <option value="08">MIPA</option>
                <option value="09">Pascasarjana</option>
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
        <section style="margin-top: 30px">
            <div class="container">
                <header class="section-header">
                    <h3 style="text-align: left">Hari Perkuliahan <small style="font-size: 12pt">Data Berdasarkan</small></h3>
                </header>
                <div id="box2">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr style="background: #2b3643; color: #fff">
                                            <th style="font-size: 11pt; padding: 8px">Hari</th>
                                            <th style="font-size: 11pt; padding: 8px">Jumlah Kelas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="font-size: 11pt; padding: 8px">Unknown</td>
                                            <td style="font-size: 11pt; padding: 8px">3</td>
                                        </tr>

                                        <tr>
                                            <td style="font-size: 11pt; padding: 8px">Minggu</td>
                                            <td style="font-size: 11pt; padding: 8px">11</td>
                                        </tr>

                                        <tr>
                                            <td style="font-size: 11pt; padding: 8px">Senin</td>
                                            <td style="font-size: 11pt; padding: 8px">1471</td>
                                        </tr>

                                        <tr>
                                            <td style="font-size: 11pt; padding: 8px">Selasa</td>
                                            <td style="font-size: 11pt; padding: 8px">1365</td>
                                        </tr>

                                        <tr>
                                            <td style="font-size: 11pt; padding: 8px">Rabu</td>
                                            <td style="font-size: 11pt; padding: 8px">1369</td>
                                        </tr>

                                        <tr>
                                            <td style="font-size: 11pt; padding: 8px">Kamis</td>
                                            <td style="font-size: 11pt; padding: 8px">1294</td>
                                        </tr>

                                        <tr>
                                            <td style="font-size: 11pt; padding: 8px">Jumat</td>
                                            <td style="font-size: 11pt; padding: 8px">1243</td>
                                        </tr>

                                        <tr>
                                            <td style="font-size: 11pt; padding: 8px">Sabtu</td>
                                            <td style="font-size: 11pt; padding: 8px">981</td>
                                        </tr>

                                        <tr style="background: #fff; color: #000">
                                            <th style="font-size: 11pt; padding: 8px">TOTAL</th>
                                            <th style="font-size: 11pt; padding: 8px">7737</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div id="chart2" style="min-width: 310px; max-width: 800px; height: 300px; margin: 0px auto; overflow: hidden" data-highcharts-chart="0">
                                <div id="highcharts-27tud2r-0" dir="ltr" class="highcharts-container" style="position: relative; overflow: hidden; width: 390px; height: 300px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0)">
                                    <svg version="1.1" class="highcharts-root" style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', Arial, Helvetica, sans-serif; font-size: 12px" xmlns="http://www.w3.org/2000/svg" width="390" height="300" viewBox="0 0 390 300">
                      <desc>Created with Highcharts 7.1.2</desc>
                      <defs>
                        <clipPath id="highcharts-27tud2r-1-"><rect x="0" y="0" width="298" height="222" fill="none"></rect></clipPath>
                      </defs>
                      <rect fill="#fff" class="highcharts-background" x="0" y="0" width="390" height="300" rx="0" ry="0"></rect>
                      <rect fill="none" class="highcharts-plot-background" x="82" y="10" width="298" height="222"></rect>
                      <g class="highcharts-grid highcharts-xaxis-grid" data-z-index="1">
                        <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 118.5 10 L 118.5 232" opacity="1"></path>
                        <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 156.5 10 L 156.5 232" opacity="1"></path>
                        <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 193.5 10 L 193.5 232" opacity="1"></path>
                        <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 230.5 10 L 230.5 232" opacity="1"></path>
                        <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 267.5 10 L 267.5 232" opacity="1"></path>
                        <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 305.5 10 L 305.5 232" opacity="1"></path>
                        <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 342.5 10 L 342.5 232" opacity="1"></path>
                        <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 379.5 10 L 379.5 232" opacity="1"></path>
                        <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 81.5 10 L 81.5 232" opacity="1"></path>
                      </g>
                      <g class="highcharts-grid highcharts-yaxis-grid" data-z-index="1">
                        <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 82 232.5 L 380 232.5" opacity="1"></path>
                        <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 82 177.5 L 380 177.5" opacity="1"></path>
                        <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 82 121.5 L 380 121.5" opacity="1"></path>
                        <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 82 66.5 L 380 66.5" opacity="1"></path>
                        <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 82 9.5 L 380 9.5" opacity="1"></path>
                      </g>
                      <rect fill="none" class="highcharts-plot-border" data-z-index="1" x="82" y="10" width="298" height="222"></rect>
                      <g class="highcharts-axis highcharts-xaxis" data-z-index="2"><path fill="none" class="highcharts-axis-line" stroke="#ccd6eb" stroke-width="1" data-z-index="7" d="M 82 232.5 L 380 232.5"></path></g>
                      <g class="highcharts-axis highcharts-yaxis" data-z-index="2">
                        <text x="26.484375" data-z-index="7" text-anchor="end" transform="translate(0,0) rotate(270 26.484375 10)" class="highcharts-axis-title" style="color: #666666; fill: #666666" y="10"><tspan>Jumlah</tspan></text>
                        <path fill="none" class="highcharts-axis-line" data-z-index="7" d="M 82 10 L 82 232"></path>
                      </g>
                      <path
                        fill="none"
                        class="highcharts-crosshair highcharts-crosshair-category undefined"
                        data-z-index="2"
                        stroke="rgba(204,214,235,0.25)"
                        stroke-width="37.25"
                        style="pointer-events: none"
                        visibility="hidden"
                        d="M 360.5 10 L 360.5 232"
                      ></path>
                      <g class="highcharts-series-group" data-z-index="3">
                        <g data-z-index="0.1" class="highcharts-series highcharts-series-0 highcharts-line-series highcharts-color-0" transform="translate(82,10) scale(1 1)" clip-path="url(#highcharts-27tud2r-1-)">
                          <path
                            fill="none"
                            d="M 18.625 221.667 L 55.875 220.779 L 93.125 58.718999999999994 L 130.375 70.48499999999999 L 167.625 70.041 L 204.875 78.36599999999999 L 242.125 84.02699999999999 L 279.375 113.109"
                            class="highcharts-graph"
                            data-z-index="1"
                            stroke="#ffcc00"
                            stroke-width="2"
                            stroke-linejoin="round"
                            stroke-linecap="round"
                          ></path>
                          <path
                            fill="none"
                            d="M 8.625 221.667 L 18.625 221.667 L 55.875 220.779 L 93.125 58.718999999999994 L 130.375 70.48499999999999 L 167.625 70.041 L 204.875 78.36599999999999 L 242.125 84.02699999999999 L 279.375 113.109 L 289.375 113.109"
                            visibility="visible"
                            data-z-index="2"
                            class="highcharts-tracker-line"
                            stroke-linejoin="round"
                            stroke="rgba(192,192,192,0.0001)"
                            stroke-width="22"
                          ></path>
                        </g>
                        <g data-z-index="0.1" class="highcharts-markers highcharts-series-0 highcharts-line-series highcharts-color-0 highcharts-tracker" transform="translate(82,10) scale(1 1)">
                          <path fill="#ffcc00" visibility="hidden" d="M 279 113.109 A 0 0 0 1 1 279 113.109 Z" class="highcharts-halo highcharts-color-0" data-z-index="-1" fill-opacity="0.25"></path>
                          <path fill="#ffcc00" d="M 18 225.667 A 4 4 0 1 1 18.003999999333335 225.66699800000018 Z" opacity="1" class="highcharts-point highcharts-color-0" stroke-width="0.000010191944014192877"></path>
                          <path fill="#ffcc00" d="M 55 224.779 A 4 4 0 1 1 55.00399999933334 224.77899800000017 Z" opacity="1" class="highcharts-point highcharts-color-0" stroke-width="0.0007975821008570638"></path>
                          <path fill="#ffcc00" d="M 93 62.718999999999994 A 4 4 0 1 1 93.00399999933333 62.71899800000016 Z" opacity="1" class="highcharts-point highcharts-color-0" stroke-width="0.00003947789809188862"></path>
                          <path fill="#ffcc00" d="M 130 74.48499999999999 A 4 4 0 1 1 130.00399999933333 74.48499800000015 Z" opacity="1" class="highcharts-point highcharts-color-0" stroke-width="0.0014205498696930885"></path>
                          <path fill="#ffcc00" d="M 167 74.041 A 4 4 0 1 1 167.00399999933333 74.04099800000016 Z" opacity="1" class="highcharts-point highcharts-color-0" stroke-width="0.000014763895196435312"></path>
                          <path fill="#ffcc00" d="M 204 82.36599999999999 A 4 4 0 1 1 204.00399999933333 82.36599800000015 Z" opacity="1" class="highcharts-point highcharts-color-0"></path>
                          <path fill="#ffcc00" d="M 242 88.02699999999999 A 4 4 0 1 1 242.00399999933333 88.02699800000015 Z" opacity="1" class="highcharts-point highcharts-color-0" stroke-width="0.0000038755783706399816"></path>
                          <path fill="#ffcc00" d="M 279 117.109 A 4 4 0 1 1 279.00399999933336 117.10899800000016 Z" opacity="1" class="highcharts-point highcharts-color-0" stroke-width="0.000015498488754612377"></path>
                        </g>
                      </g>
                      <text x="195" text-anchor="middle" class="highcharts-title" data-z-index="4" style="color: #333333; font-size: 18px; fill: #333333" y="24"></text>
                      <text x="195" text-anchor="middle" class="highcharts-subtitle" data-z-index="4" style="color: #666666; fill: #666666" y="24"></text>
                      <g data-z-index="6" class="highcharts-data-labels highcharts-series-0 highcharts-line-series highcharts-color-0" transform="translate(82,10) scale(1 1)" opacity="1">
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(10,198)">
                          <text x="5" data-z-index="1" style="font-size: 11px; font-weight: bold; color: #000000; fill: #000000" y="16">
                            <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">3</tspan>
                            <tspan x="5" y="16">3</tspan>
                          </text>
                        </g>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(44,197)">
                          <text x="5" data-z-index="1" style="font-size: 11px; font-weight: bold; color: #000000; fill: #000000" y="16">
                            <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round" >11</tspan>
                            <tspan x="5" y="16">11</tspan>
                          </text>
                        </g>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(72,35)">
                          <text x="5" data-z-index="1" style="font-size: 11px; font-weight: bold; color: #000000; fill: #000000" y="16">
                            <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round" >1 471</tspan>
                            <tspan x="5" y="16">1 471</tspan>
                          </text>
                        </g>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(109,46)">
                          <text x="5" data-z-index="1" style="font-size: 11px; font-weight: bold; color: #000000; fill: #000000" y="16">
                            <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">1 365</tspan>
                            <tspan x="5" y="16">1 365</tspan>
                          </text>
                        </g>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(147,46)">
                          <text x="5" data-z-index="1" style="font-size: 11px; font-weight: bold; color: #000000; fill: #000000" y="16">
                            <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">1 369</tspan>
                            <tspan x="5" y="16">1 369</tspan>
                          </text>
                        </g>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(184,54)">
                          <text x="5" data-z-index="1" style="font-size: 11px; font-weight: bold; color: #000000; fill: #000000" y="16">
                            <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">1 294</tspan>
                            <tspan x="5" y="16">1 294</tspan>
                          </text>
                        </g>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(221,60)">
                          <text x="5" data-z-index="1" style="font-size: 11px; font-weight: bold; color: #000000; fill: #000000" y="16">
                            <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">1 243</tspan>
                            <tspan x="5" y="16">1 243</tspan>
                          </text>
                        </g>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(264,89)">
                          <text x="5" data-z-index="1" style="font-size: 11px; font-weight: bold; color: #000000; fill: #000000" y="16">
                            <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">981</tspan>
                            <tspan x="5" y="16">981</tspan>
                          </text>
                        </g>
                      </g>
                      <g class="highcharts-axis-labels highcharts-xaxis-labels" data-z-index="7">
                        <text x="103.21772486435067" style="color: #666666; cursor: default; font-size: 11px; fill: #666666" text-anchor="end" transform="translate(0,0) rotate(-45 103.21772486435067 248)" y="248" opacity="1">Unknown</text>
                        <text x="140.46772486435069" style="color: #666666; cursor: default; font-size: 11px; fill: #666666" text-anchor="end" transform="translate(0,0) rotate(-45 140.46772486435069 248)" y="248" opacity="1">Minggu</text>
                        <text x="177.71772486435069" style="color: #666666; cursor: default; font-size: 11px; fill: #666666" text-anchor="end" transform="translate(0,0) rotate(-45 177.71772486435069 248)" y="248" opacity="1">Senin</text>
                        <text x="214.96772486435069" style="color: #666666; cursor: default; font-size: 11px; fill: #666666" text-anchor="end" transform="translate(0,0) rotate(-45 214.96772486435069 248)" y="248" opacity="1">Selasa</text>
                        <text x="252.21772486435066" style="color: #666666; cursor: default; font-size: 11px; fill: #666666" text-anchor="end" transform="translate(0,0) rotate(-45 252.21772486435066 248)" y="248" opacity="1">Rabu</text>
                        <text x="289.46772486435066" style="color: #666666; cursor: default; font-size: 11px; fill: #666666" text-anchor="end" transform="translate(0,0) rotate(-45 289.46772486435066 248)" y="248" opacity="1">Kamis</text>
                        <text x="326.71772486435066" style="color: #666666; cursor: default; font-size: 11px; fill: #666666" text-anchor="end" transform="translate(0,0) rotate(-45 326.71772486435066 248)" y="248" opacity="1">Jumat</text>
                        <text x="363.96772486435066" style="color: #666666; cursor: default; font-size: 11px; fill: #666666" text-anchor="end" transform="translate(0,0) rotate(-45 363.96772486435066 248)" y="248" opacity="1">Sabtu</text>
                      </g>
                      <g class="highcharts-axis-labels highcharts-yaxis-labels" data-z-index="7">
                        <text x="67" style="color: #666666; cursor: default; font-size: 11px; fill: #666666" text-anchor="end" transform="translate(0,0)" y="236" opacity="1">0</text>
                        <text x="67" style="color: #666666; cursor: default; font-size: 11px; fill: #666666" text-anchor="end" transform="translate(0,0)" y="181" opacity="1">500</text>
                        <text x="67" style="color: #666666; cursor: default; font-size: 11px; fill: #666666" text-anchor="end" transform="translate(0,0)" y="125" opacity="1">1000</text>
                        <text x="67" style="color: #666666; cursor: default; font-size: 11px; fill: #666666" text-anchor="end" transform="translate(0,0)" y="70" opacity="1">1500</text>
                        <text x="67" style="color: #666666; cursor: default; font-size: 11px; fill: #666666" text-anchor="end" transform="translate(0,0)" y="14" opacity="1">2000</text>
                      </g>
                      <g class="highcharts-label highcharts-tooltip highcharts-color-0" style="pointer-events: none; white-space: nowrap" data-z-index="8" transform="translate(252,-9999)" opacity="0" visibility="visible">
                        <path
                          fill="none"
                          class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                          d="M 3.5 0.5 L 133.5 0.5 C 136.5 0.5 136.5 0.5 136.5 3.5 L 136.5 44.5 C 136.5 47.5 136.5 47.5 133.5 47.5 L 114.5 47.5 108.5 53.5 102.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                          stroke="#000000"
                          stroke-opacity="0.049999999999999996"
                          stroke-width="5"
                          transform="translate(1, 1)"
                        ></path>
                        <path
                          fill="none"
                          class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                          d="M 3.5 0.5 L 133.5 0.5 C 136.5 0.5 136.5 0.5 136.5 3.5 L 136.5 44.5 C 136.5 47.5 136.5 47.5 133.5 47.5 L 114.5 47.5 108.5 53.5 102.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                          stroke="#000000"
                          stroke-opacity="0.09999999999999999"
                          stroke-width="3"
                          transform="translate(1, 1)"
                        ></path>
                        <path
                          fill="none"
                          class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                          d="M 3.5 0.5 L 133.5 0.5 C 136.5 0.5 136.5 0.5 136.5 3.5 L 136.5 44.5 C 136.5 47.5 136.5 47.5 133.5 47.5 L 114.5 47.5 108.5 53.5 102.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                          stroke="#000000"
                          stroke-opacity="0.15"
                          stroke-width="1"
                          transform="translate(1, 1)"
                        ></path>
                        <path
                          fill="rgba(247,247,247,0.85)"
                          class="highcharts-label-box highcharts-tooltip-box"
                          d="M 3.5 0.5 L 133.5 0.5 C 136.5 0.5 136.5 0.5 136.5 3.5 L 136.5 44.5 C 136.5 47.5 136.5 47.5 133.5 47.5 L 114.5 47.5 108.5 53.5 102.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                          stroke="#ffcc00"
                          stroke-width="1"
                        ></path>
                        <text x="8" data-z-index="1" style="font-size: 12px; color: #333333; cursor: default; fill: #333333" y="20">
                          <tspan style="font-size: 10px">Sabtu</tspan>
                          <tspan style="fill: #ffcc00" x="8" dy="15">●</tspan>
                          <tspan dx="0">Jumlah:</tspan>
                          <tspan style="font-weight: bold" dx="0">981 Kelas</tspan>
                        </text>
                      </g>
                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />
                <header class="section-header">
                    <h3 style="text-align: left">Jenis Kelamin <small style="font-size: 12pt">Data Berdasarkan</small></h3>
                </header>
                <div id="box3">
                    <div class="row">
                        <div class="col-md-7">
                            <div id="chart3" style="min-width: 310px; max-width: 800px; height: 300px; margin: 0px auto; overflow: hidden" data-highcharts-chart="1">
                                <div id="highcharts-27tud2r-12" dir="ltr" class="highcharts-container" style="position: relative; overflow: hidden; width: 390px; height: 300px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0)">
                                    <svg version="1.1" class="highcharts-root" style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', Arial, Helvetica, sans-serif; font-size: 12px" xmlns="http://www.w3.org/2000/svg" width="390" height="300" viewBox="0 0 390 300">
                      <desc>Created with Highcharts 7.1.2</desc>
                      <defs>
                        <clipPath id="highcharts-27tud2r-13-"><rect x="0" y="0" width="313" height="208" fill="none"></rect></clipPath>
                      </defs>
                      <rect fill="#fff" class="highcharts-background" x="0" y="0" width="390" height="300" rx="0" ry="0"></rect>
                      <rect fill="none" class="highcharts-plot-background" x="67" y="10" width="313" height="208"></rect>
                      <g class="highcharts-grid highcharts-xaxis-grid" data-z-index="1">
                        <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 129.5 10 L 129.5 218" opacity="1"></path>
                        <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 191.5 10 L 191.5 218" opacity="1"></path>
                        <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 254.5 10 L 254.5 218" opacity="1"></path>
                        <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 316.5 10 L 316.5 218" opacity="1"></path>
                        <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 379.5 10 L 379.5 218" opacity="1"></path>
                        <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 66.5 10 L 66.5 218" opacity="1"></path>
                      </g>
                      <g class="highcharts-grid highcharts-yaxis-grid" data-z-index="1">
                        <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 67 218.5 L 380 218.5" opacity="1"></path>
                        <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 67 176.5 L 380 176.5" opacity="1"></path>
                        <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 67 135.5 L 380 135.5" opacity="1"></path>
                        <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 67 93.5 L 380 93.5" opacity="1"></path>
                        <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 67 52.5 L 380 52.5" opacity="1"></path>
                        <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 67 9.5 L 380 9.5" opacity="1"></path>
                      </g>
                      <rect fill="none" class="highcharts-plot-border" data-z-index="1" x="67" y="10" width="313" height="208"></rect>
                      <g class="highcharts-axis highcharts-xaxis" data-z-index="2"><path fill="none" class="highcharts-axis-line" stroke="#ccd6eb" stroke-width="1" data-z-index="7" d="M 67 218.5 L 380 218.5"></path></g>
                      <g class="highcharts-axis highcharts-yaxis" data-z-index="2">
                        <text x="25.6875" data-z-index="7" text-anchor="end" transform="translate(0,0) rotate(270 25.6875 10)" class="highcharts-axis-title" style="color: #666666; fill: #666666" y="10"><tspan>Jumlah</tspan></text>
                        <path fill="none" class="highcharts-axis-line" data-z-index="7" d="M 67 10 L 67 218"></path>
                      </g>
                      <path
                        fill="none"
                        class="highcharts-crosshair highcharts-crosshair-category undefined"
                        data-z-index="2"
                        stroke="rgba(204,214,235,0.25)"
                        stroke-width="111.6"
                        style="pointer-events: none"
                        visibility="hidden"
                        d="M 457.5 10 L 457.5 263"
                      ></path>
                      <g class="highcharts-series-group" data-z-index="3">
                        <g data-z-index="0.1" class="highcharts-series highcharts-series-0 highcharts-line-series highcharts-color-0" transform="translate(67,10) scale(1 1)" clip-path="url(#highcharts-27tud2r-13-)">
                          <path
                            fill="none"
                            d="M 31.3 207.4176 L 93.9 134.4928 L 156.5 205.1296 L 219.1 129.1264 L 281.7 41.9744"
                            class="highcharts-graph"
                            data-z-index="1"
                            stroke="#ffcc00"
                            stroke-width="2"
                            stroke-linejoin="round"
                            stroke-linecap="round"
                          ></path>
                          <path
                            fill="none"
                            d="M 21.3 207.4176 L 31.3 207.4176 L 93.9 134.4928 L 156.5 205.1296 L 219.1 129.1264 L 281.7 41.9744 L 291.7 41.9744"
                            visibility="visible"
                            data-z-index="2"
                            class="highcharts-tracker-line"
                            stroke-linejoin="round"
                            stroke="rgba(192,192,192,0.0001)"
                            stroke-width="22"
                          ></path>
                        </g>
                        <g data-z-index="0.1" class="highcharts-markers highcharts-series-0 highcharts-line-series highcharts-color-0 highcharts-tracker" transform="translate(67,10) scale(1 1)">
                          <path fill="#ffcc00" visibility="hidden" d="M 390 157.0624 A 0 0 0 1 1 390 157.0624 Z" class="highcharts-halo highcharts-color-0" data-z-index="-1" fill-opacity="0.25"></path>
                          <path fill="#ffcc00" d="M 31 211.4176 A 4 4 0 1 1 31.003999999333335 211.41759800000017 Z" opacity="1" class="highcharts-point highcharts-color-0"></path>
                          <path fill="#ffcc00" d="M 93 138.4928 A 4 4 0 1 1 93.00399999933333 138.49279800000016 Z" opacity="1" class="highcharts-point highcharts-color-0"></path>
                          <path fill="#ffcc00" d="M 156 209.1296 A 4 4 0 1 1 156.00399999933333 209.1295980000002 Z" opacity="1" class="highcharts-point highcharts-color-0"></path>
                          <path fill="#ffcc00" d="M 219 133.1264 A 4 4 0 1 1 219.00399999933333 133.12639800000017 Z" opacity="1" class="highcharts-point highcharts-color-0" stroke-width="0.0035586977150932064"></path>
                          <path fill="#ffcc00" d="M 281 45.9744 A 4 4 0 1 1 281.00399999933336 45.97439800000017 Z" opacity="1" class="highcharts-point highcharts-color-0" stroke-width="0.00008882380959551739"></path>
                        </g>
                      </g>
                      <text x="195" text-anchor="middle" class="highcharts-title" data-z-index="4" style="color: #333333; font-size: 18px; fill: #333333" y="24"></text>
                      <text x="195" text-anchor="middle" class="highcharts-subtitle" data-z-index="4" style="color: #666666; fill: #666666" y="24"></text>
                      <g data-z-index="6" class="highcharts-data-labels highcharts-series-0 highcharts-line-series highcharts-color-0" transform="translate(67,10) scale(1 1)" opacity="1">
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(19,183)">
                          <text x="5" data-z-index="1" style="font-size: 11px; font-weight: bold; color: #000000; fill: #000000" y="16">
                            <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round" >14</tspan>
                            <tspan x="5" y="16">14</tspan>
                          </text>
                        </g>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(72,110)">
                          <text x="5" data-z-index="1" style="font-size: 11px; font-weight: bold; color: #000000; fill: #000000" y="16">
                            <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round" >1 767</tspan>
                            <tspan x="5" y="16">1 767</tspan>
                          </text>
                        </g>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(144,181)">
                          <text x="5" data-z-index="1" style="font-size: 11px; font-weight: bold; color: #000000; fill: #000000" y="16">
                            <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">69</tspan>
                            <tspan x="5" y="16">69</tspan>
                          </text>
                        </g>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(198,105)">
                          <text x="5" data-z-index="1" style="font-size: 11px; font-weight: bold; color: #000000; fill: #000000" y="16">
                            <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">1 896</tspan>
                            <tspan x="5" y="16">1 896</tspan>
                          </text>
                        </g>
                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(260,18)">
                          <text x="5" data-z-index="1" style="font-size: 11px; font-weight: bold; color: #000000; fill: #000000" y="16">
                            <tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">3 991</tspan>
                            <tspan x="5" y="16">3 991</tspan>
                          </text>
                        </g>
                      </g>
                      <g class="highcharts-axis-labels highcharts-xaxis-labels" data-z-index="7">
                        <text x="100.89272486435068" style="color: #666666; cursor: default; font-size: 11px; fill: #666666" text-anchor="end" transform="translate(0,0) rotate(-45 100.89272486435068 234)" y="234" opacity="1">
                          08:00-10:00
                        </text>
                        <text x="163.49272486435066" style="color: #666666; cursor: default; font-size: 11px; fill: #666666" text-anchor="end" transform="translate(0,0) rotate(-45 163.49272486435066 234)" y="234" opacity="1">
                          10:00-12:00
                        </text>
                        <text x="226.09272486435066" style="color: #666666; cursor: default; font-size: 11px; fill: #666666" text-anchor="end" transform="translate(0,0) rotate(-45 226.09272486435066 234)" y="234" opacity="1">
                          12:00-14:00
                        </text>
                        <text x="288.6927248643506" style="color: #666666; cursor: default; font-size: 11px; fill: #666666" text-anchor="end" transform="translate(0,0) rotate(-45 288.6927248643506 234)" y="234" opacity="1">
                          14:00-16:00
                        </text>
                        <text x="351.29272486435065" style="color: #666666; cursor: default; font-size: 11px; fill: #666666" text-anchor="end" transform="translate(0,0) rotate(-45 351.29272486435065 234)" y="234" opacity="1">
                          16:00-18:00
                        </text>
                      </g>
                      <g class="highcharts-axis-labels highcharts-yaxis-labels" data-z-index="7">
                        <text x="52" style="color: #666666; cursor: default; font-size: 11px; fill: #666666" text-anchor="end" transform="translate(0,0)" y="222" opacity="1">0</text>
                        <text x="52" style="color: #666666; cursor: default; font-size: 11px; fill: #666666" text-anchor="end" transform="translate(0,0)" y="180" opacity="1">1k</text>
                        <text x="52" style="color: #666666; cursor: default; font-size: 11px; fill: #666666" text-anchor="end" transform="translate(0,0)" y="139" opacity="1">2k</text>
                        <text x="52" style="color: #666666; cursor: default; font-size: 11px; fill: #666666" text-anchor="end" transform="translate(0,0)" y="97" opacity="1">3k</text>
                        <text x="52" style="color: #666666; cursor: default; font-size: 11px; fill: #666666" text-anchor="end" transform="translate(0,0)" y="56" opacity="1">4k</text>
                        <text x="52" style="color: #666666; cursor: default; font-size: 11px; fill: #666666" text-anchor="end" transform="translate(0,0)" y="14" opacity="1">5k</text>
                      </g>
                      <g class="highcharts-label highcharts-tooltip highcharts-color-0" style="pointer-events: none; white-space: nowrap" data-z-index="8" transform="translate(384,-9999)" opacity="0" visibility="visible">
                        <path
                          fill="none"
                          class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                          d="M 3.5 0.5 L 145.5 0.5 C 148.5 0.5 148.5 0.5 148.5 3.5 L 148.5 44.5 C 148.5 47.5 148.5 47.5 145.5 47.5 L 79.5 47.5 73.5 53.5 67.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                          stroke="#000000"
                          stroke-opacity="0.049999999999999996"
                          stroke-width="5"
                          transform="translate(1, 1)"
                        ></path>
                        <path
                          fill="none"
                          class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                          d="M 3.5 0.5 L 145.5 0.5 C 148.5 0.5 148.5 0.5 148.5 3.5 L 148.5 44.5 C 148.5 47.5 148.5 47.5 145.5 47.5 L 79.5 47.5 73.5 53.5 67.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                          stroke="#000000"
                          stroke-opacity="0.09999999999999999"
                          stroke-width="3"
                          transform="translate(1, 1)"
                        ></path>
                        <path
                          fill="none"
                          class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                          d="M 3.5 0.5 L 145.5 0.5 C 148.5 0.5 148.5 0.5 148.5 3.5 L 148.5 44.5 C 148.5 47.5 148.5 47.5 145.5 47.5 L 79.5 47.5 73.5 53.5 67.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                          stroke="#000000"
                          stroke-opacity="0.15"
                          stroke-width="1"
                          transform="translate(1, 1)"
                        ></path>
                        <path
                          fill="rgba(247,247,247,0.85)"
                          class="highcharts-label-box highcharts-tooltip-box"
                          d="M 3.5 0.5 L 145.5 0.5 C 148.5 0.5 148.5 0.5 148.5 3.5 L 148.5 44.5 C 148.5 47.5 148.5 47.5 145.5 47.5 L 79.5 47.5 73.5 53.5 67.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                          stroke="#ffcc00"
                          stroke-width="1"
                        ></path>
                        <text x="8" data-z-index="1" style="font-size: 12px; color: #333333; cursor: default; fill: #333333" y="20">
                          <tspan style="font-size: 10px">14:00-16:00</tspan>
                          <tspan style="fill: #ffcc00" x="8" dy="15">●</tspan>
                          <tspan dx="0">Jumlah:</tspan>
                          <tspan style="font-weight: bold" dx="0">1 896 Kelas</tspan>
                        </text>
                      </g>
                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr style="background: #2b3643; color: #fff">
                                            <th style="font-size: 11pt; padding: 8px">Waktu</th>
                                            <th style="font-size: 11pt; padding: 8px">Jumlah Kelas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="font-size: 11pt; padding: 8px">08:00-10:00</td>
                                            <td style="font-size: 11pt; padding: 8px">14</td>
                                        </tr>

                                        <tr>
                                            <td style="font-size: 11pt; padding: 8px">10:00-12:00</td>
                                            <td style="font-size: 11pt; padding: 8px">1767</td>
                                        </tr>

                                        <tr>
                                            <td style="font-size: 11pt; padding: 8px">12:00-14:00</td>
                                            <td style="font-size: 11pt; padding: 8px">69</td>
                                        </tr>

                                        <tr>
                                            <td style="font-size: 11pt; padding: 8px">14:00-16:00</td>
                                            <td style="font-size: 11pt; padding: 8px">1896</td>
                                        </tr>

                                        <tr>
                                            <td style="font-size: 11pt; padding: 8px">16:00-18:00</td>
                                            <td style="font-size: 11pt; padding: 8px">3991</td>
                                        </tr>

                                        <tr style="background: #fff; color: #000">
                                            <th style="font-size: 11pt; padding: 8px">TOTAL</th>
                                            <th style="font-size: 11pt; padding: 8px">7737</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <br />
            </div>
        </section>

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