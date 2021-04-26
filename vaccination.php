<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="author" content="Saransh Seth">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="An Initiative to help COVID Affected">
  <!-- Fav Icon  -->
  <link rel="shortcut icon" href="images/favicon.svg">
  <!-- Site Title  -->
  <title>COVID-19 Madad | Vaccination</title>
  <!-- Bundle and Base CSS -->
  <link href="/assets/fontawesome/css/all.css" rel="stylesheet">
  <!--load all styles -->
  <link rel="stylesheet" href="assets/css/bundle.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.8/css/fixedHeader.dataTables.min.css" />
  <link rel="stylesheet" href="assets/css/remedesivir.css">

</head>

<body class="nk-body">
  <div class="top-bar">COVID 19 Helpline <a href="tel:+917926403333">079 26403333</a> | <a href="tel:+917926409999">079
      26409999</a></div>
  <?php include('header-2.html'); ?>
  <div class="nk-banner">
    <div class="container-lg">
      <div class="row">
        <h2 class="col">Vaccination</h2>
      </div>

      <div _ngcontent-dtr-c28="" class="maplocationblock bs-section">
        <div _ngcontent-dtr-c28="" class="container">
          <div _ngcontent-dtr-c28="" class="row d-flex mt-1">
            <div _ngcontent-dtr-c28="" class="col-12 col-md-12 d-sm-block">
              <h1 _ngcontent-dtr-c28="" class="base-heading"> Find Your Nearest Vaccination Center </h1>
            </div>
          </div>
          <div _ngcontent-dtr-c28="" class="row">
            <div _ngcontent-dtr-c28="" class="col-12">
              <div _ngcontent-dtr-c28="" class="map-wrapper">
                <div _ngcontent-dtr-c28="" id="nearby-vaccine-centres-mapmyindia">
                  <link rel="stylesheet" href="https://prod-cdn.preprod.co-vin.in/assets/css/map-custom.css">
                  <div class="mainContainer">
                    <div class="mapSec">
                      <div class="searchDiv">
                        <div class="inputSec" data-children-count="1"><input class="inputfield" id="mmiMap1_search"
                            type="text" value="" placeholder="Enter place/address/eLoc" autocomplete="off"><span
                            id="inputrightmmiMap1_search" class="mmi_rtDv"
                            style="display: none; font-size: 14px; width: 20px; height: 20px; text-align: center; vertical-align: middle; line-height: 20px; box-sizing: inherit; color: rgb(17, 17, 17); position: absolute; cursor: pointer; background: rgb(255, 255, 255); top: -10px; left: -26px; z-index: 99999 !important;">✕</span>
                          <div id="mmi_search_mmiMap1_search" class="mmi_search_dv"
                            style="display: none; top: 0px; left: 0px;"></div>
                          <style>
                          .mmi_search_dv {
                            text-align: left;
                            border: 1px solid #efecec;
                            border-top: 1px solid #d6a8a8;
                            background: #fff;
                            border-radius: 3px;
                            font-family: arial;
                            position: absolute;
                            z-index: 9999;
                            height: auto;
                            max-height: 350px;
                            overflow: hidden;
                            padding-bottom: 15px;
                            line-height: 14px;
                          }

                          .result_cont {
                            width: calc(100% - 46px);
                            display: inline-block;
                            margin-left: 10px;
                            padding-top: 5px
                          }

                          .mmi_match {
                            font-size: 18px !important;
                            color: #000
                          }

                          .mmi_search_dv .highligher-search {
                            padding-bottom: 3px;
                            width: 85%;
                            float: left;
                            font-size: 18px;
                            line-height: 18px;
                            color: #6f6e6e;
                            text-align: left
                          }

                          #pwrd {
                            position: absolute;
                            bottom: 0;
                            background: #fff;
                            font-size: 13px;
                            text-align: center;
                            width: 100%;
                            border-top: 1px solid #c0b2b2;
                            font-stretch: condensed;
                            font-weight: 800;
                            color: #999;
                          }

                          .mmi_s_ul li {
                            padding: 5px 10px 05px 2px;
                            border-bottom: 1px solid #fbf2f2;
                          }

                          .mmi_s_ul li:hover,
                          .mmi_s_ul li.active {
                            background-color: #e0e2e6;
                            cursor: pointer;
                          }

                          .mmi_s_ul li.active>div>div.resultMmi_img {
                            background: #fff
                          }

                          .mmi_s_ul::-webkit-scrollbar {
                            width: 8px;
                            background: #fff;
                          }

                          .mmi_s_ul::-webkit-scrollbar-thumb {
                            background: #ccc;
                            border-right: 1px solid #fff
                          }

                          .result_cont .madd {
                            width: 85%;
                            line-height: 14px;
                            margin: 19px 0 3px 0;
                            color: #888;
                            font-size: 12px;
                            text-align: left;
                          }

                          .MMIscroll::-webkit-scrollbar {
                            width: 8px;
                            background: #fff;
                          }

                          .MMIscroll::-webkit-scrollbar-thumb {
                            background: #ccc;
                            border-right: 1px solid #fff
                          }

                          .resultMmi_img {
                            width: 30px;
                            height: 30px;
                            text-align: center;
                            background-color: #efefef;
                            border-radius: 50%;
                            float: left;
                          }

                          .resultMmi_img img {
                            margin-top: 9px;
                            display: inline-block;
                          }

                          .mmi_s_ul {
                            height: calc(100% - 2px);
                            max-height: 340px;
                            overflow-y: auto;
                            list-style: none;
                            padding: 0;
                            margin-top: 2px;
                            margin-bottom: 10px;
                            background: #fff;
                            -webkit-overflow-scrolling: touch;
                          }

                          .mmiLoad {
                            font-size: 11px;
                            display: inline-block;
                            margin: 2px 0;
                            border-radius: 50%;
                            border-top: 3px solid #555;
                            width: 72%;
                            height: 72%;
                            -webkit-animation: mmi_spin 2s linear infinite;
                            animation: mmi_spin 2s linear infinite;
                          }

                          @keyframes mmi_spin {
                            0% {
                              transform: rotate(0deg);
                            }

                            100% {
                              transform: rotate(360deg);
                            }
                          }

                          .mmiDis {
                            float: right;
                            font-style: oblique;
                            font-size: 12px;
                            margin-right: -9;
                            font-stretch: extra-expanded;
                            text-align: right
                          }

                          .mmi_heading b {
                            font-size: 12px
                          }

                          .disMMiclk {
                            pointer-events: none
                          }

                          .MMicrloc {
                            box-sizing: initial;
                            background: #3A78E7;
                            width: 10px;
                            height: 10px;
                            margin: 7px 0 0 10px;
                            border: 3px solid #98c3dc;
                          }
                          </style><button class="seachBtn" type="submit">Go</button>
                        </div>
                      </div>
                      <div class="mapDiv">
                        <div class="map leaflet-container leaflet-retina leaflet-fade-anim leaflet-gesture-handling"
                          id="mmiMap1" tabindex="0"
                          data-gesture-handling-touch-content="Use two fingers to move the map"
                          data-gesture-handling-scroll-content="Use ctrl + scroll to zoom" style="position: relative;">
                          <div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(0px, 0px, 0px);">
                            <div class="leaflet-pane leaflet-tile-pane"></div>
                            <div class="leaflet-pane leaflet-shadow-pane"></div>
                            <div class="leaflet-pane leaflet-overlay-pane">
                              <div class="leaflet-gl-layer mapboxgl-map" style="width: 702px; height: 366px;">
                                <div class="mapboxgl-canary" style="visibility: hidden;"></div>
                                <div class="mapboxgl-canvas-container"><canvas
                                    class="mapboxgl-canvas leaflet-image-layer leaflet-zoom-animated" tabindex="0"
                                    aria-label="Map" width="877" height="457"
                                    style="position: absolute; width: 702px; height: 366px;"></canvas></div>
                                <div class="mapboxgl-control-container">
                                  <div class="mapboxgl-ctrl-top-left"></div>
                                  <div class="mapboxgl-ctrl-top-right"></div>
                                  <div class="mapboxgl-ctrl-bottom-left">
                                    <div class="mapboxgl-ctrl" style="display: none;"><a class="mapboxgl-ctrl-logo"
                                        target="_blank" rel="noopener nofollow" href="https://www.mapbox.com/"
                                        aria-label="Mapbox logo"></a></div>
                                  </div>
                                  <div class="mapboxgl-ctrl-bottom-right"></div>
                                </div>
                              </div>
                            </div>
                            <div class="leaflet-pane leaflet-marker-pane"></div>
                            <div class="leaflet-pane leaflet-tooltip-pane"></div>
                            <div class="leaflet-pane leaflet-popup-pane"></div>
                            <div class="leaflet-proxy leaflet-zoom-animated"
                              style="transform: translate3d(2938.88px, 1714.77px, 0px) scale(8);"></div>
                          </div>
                          <div class="leaflet-control-container">
                            <div class="leaflet-top leaflet-left"></div>
                            <div class="leaflet-top leaflet-right"></div>
                            <div class="leaflet-bottom leaflet-left">
                              <div class="leaflet-control-scale leaflet-control">
                                <div class="leaflet-control-scale-line" style="width: 58px;">500 km</div>
                                <div class="leaflet-control-scale-line" style="width: 93px;">500 mi</div>
                              </div>
                            </div>
                            <div class="leaflet-bottom leaflet-right">
                              <div class="leaflet-control-attribution leaflet-control">
                                <div id="attr"><a href="" target="blank" id="logo_mmiMap1"><img
                                      src="data:image/png;base64,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"
                                      style="width:90px !important"></a><br><span>Map data ©2021 <a
                                      href="https://maps.mapmyindia.com" target="blank"
                                      style="color:#333">MapmyIndia</a><a
                                      style="padding-left:5px;cursor:pointer;color:#ed1c24"
                                      href="https://maps.mapmyindia.com/corona" target="_blank"><b>⨶ Live Corona
                                        Guide</b></a> | <a style="cursor:pointer;color:#333"
                                      onclick="var url='https://maps.mapmyindia.com/report@'+btoa(map_o[0].getCenter().lat)+','+btoa(map_o[0].getCenter().lng)+','+btoa(map_o[0].getZoom());window.open(url);"
                                      target="_blank">Report</a></span></div>
                              </div>
                            </div>
                          </div>
                          <div class="m_ctr0">
                            <div class="map-control">
                              <ul class="expand-map-control">
                                <li style="border-bottom: 1px solid #fff;"><a alt="Zoom In" title="Zoom In"
                                    class="map-zoom-in" onclick="map_o[0].zoomIn();return false;">+</a></li>
                                <li style="border-bottom: 5px solid transparent"><a alt="Zoom Out" title="Zoom Out"
                                    class="map-zoom-out" style="font-size:38px" onclick="map_o[0].zoomOut()">-</a></li>
                                <li onclick="MapmyIndia.geo(map_o[0],1)" id="geo0"
                                  style="border-bottom: 1px solid #fff;"><a id="geo_location" alt="Current Location"
                                    title="Current Location" class="on"><i class="MMIti ti-target"></i></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mapContent">
                      <div class="searchDiv">
                        <div class="inputSec" data-children-count="1"><input class="inputfield" id="mmiMap1_search1"
                            type="text" value="" placeholder="Enter place/address/eLoc" autocomplete="off"><span
                            id="inputrightmmiMap1_search1" class="mmi_rtDv"
                            style="display: none; font-size: 14px; width: 20px; height: 20px; text-align: center; vertical-align: middle; line-height: 20px; box-sizing: inherit; color: rgb(17, 17, 17); position: absolute; cursor: pointer; background: rgb(255, 255, 255); top: 40.5px; left: 1123px; z-index: 99999 !important;">✕</span>
                          <div id="mmi_search_mmiMap1_search1" class="mmi_search_dv"
                            style="display: none; width: 385px; top: 76px; left: 761px;"></div>
                          <style>
                          .mmi_search_dv {
                            text-align: left;
                            border: 1px solid #efecec;
                            border-top: 1px solid #d6a8a8;
                            background: #fff;
                            border-radius: 3px;
                            font-family: arial;
                            position: absolute;
                            z-index: 9999;
                            height: auto;
                            max-height: 350px;
                            overflow: hidden;
                            padding-bottom: 15px;
                            line-height: 14px;
                          }

                          .result_cont {
                            width: calc(100% - 46px);
                            display: inline-block;
                            margin-left: 10px;
                            padding-top: 5px
                          }

                          .mmi_match {
                            font-size: 18px !important;
                            color: #000
                          }

                          .mmi_search_dv .highligher-search {
                            padding-bottom: 3px;
                            width: 85%;
                            float: left;
                            font-size: 18px;
                            line-height: 18px;
                            color: #6f6e6e;
                            text-align: left
                          }

                          #pwrd {
                            position: absolute;
                            bottom: 0;
                            background: #fff;
                            font-size: 13px;
                            text-align: center;
                            width: 100%;
                            border-top: 1px solid #c0b2b2;
                            font-stretch: condensed;
                            font-weight: 800;
                            color: #999;
                          }

                          .mmi_s_ul li {
                            padding: 5px 10px 05px 2px;
                            border-bottom: 1px solid #fbf2f2;
                          }

                          .mmi_s_ul li:hover,
                          .mmi_s_ul li.active {
                            background-color: #e0e2e6;
                            cursor: pointer;
                          }

                          .mmi_s_ul li.active>div>div.resultMmi_img {
                            background: #fff
                          }

                          .mmi_s_ul::-webkit-scrollbar {
                            width: 8px;
                            background: #fff;
                          }

                          .mmi_s_ul::-webkit-scrollbar-thumb {
                            background: #ccc;
                            border-right: 1px solid #fff
                          }

                          .result_cont .madd {
                            width: 85%;
                            line-height: 14px;
                            margin: 19px 0 3px 0;
                            color: #888;
                            font-size: 12px;
                            text-align: left;
                          }

                          .MMIscroll::-webkit-scrollbar {
                            width: 8px;
                            background: #fff;
                          }

                          .MMIscroll::-webkit-scrollbar-thumb {
                            background: #ccc;
                            border-right: 1px solid #fff
                          }

                          .resultMmi_img {
                            width: 30px;
                            height: 30px;
                            text-align: center;
                            background-color: #efefef;
                            border-radius: 50%;
                            float: left;
                          }

                          .resultMmi_img img {
                            margin-top: 9px;
                            display: inline-block;
                          }

                          .mmi_s_ul {
                            height: calc(100% - 2px);
                            max-height: 340px;
                            overflow-y: auto;
                            list-style: none;
                            padding: 0;
                            margin-top: 2px;
                            margin-bottom: 10px;
                            background: #fff;
                            -webkit-overflow-scrolling: touch;
                          }

                          .mmiLoad {
                            font-size: 11px;
                            display: inline-block;
                            margin: 2px 0;
                            border-radius: 50%;
                            border-top: 3px solid #555;
                            width: 72%;
                            height: 72%;
                            -webkit-animation: mmi_spin 2s linear infinite;
                            animation: mmi_spin 2s linear infinite;
                          }

                          @keyframes mmi_spin {
                            0% {
                              transform: rotate(0deg);
                            }

                            100% {
                              transform: rotate(360deg);
                            }
                          }

                          .mmiDis {
                            float: right;
                            font-style: oblique;
                            font-size: 12px;
                            margin-right: -9;
                            font-stretch: extra-expanded;
                            text-align: right
                          }

                          .mmi_heading b {
                            font-size: 12px
                          }

                          .disMMiclk {
                            pointer-events: none
                          }

                          .MMicrloc {
                            box-sizing: initial;
                            background: #3A78E7;
                            width: 10px;
                            height: 10px;
                            margin: 7px 0 0 10px;
                            border: 3px solid #98c3dc;
                          }
                          </style><button class="seachBtn" type="submit">Go</button>
                        </div>
                      </div>
                      <div style="position: relative; overflow: visible;clear:both;padding-top:10px">
                        <div id="mCSB_1" class="mCustomScrollBox mCS-minimal-dark mCSB_vertical mCSB_outside"
                          style="max-height: none;" tabindex="0">
                          <div id="mCSB_1_container" class="mCSB_container"
                            style="position: relative; top: 0px; left: 0px;" dir="ltr">
                            <ul class="searchList" id="MMI_near"></ul><a href="https://selfregistration.cowin.gov.in/"
                              class="blueBtn" target="blank" id="register" style="display:none">Register Yourself</a>
                          </div>
                        </div>
                        <div style="display: block;">
                          <div class="mCSB_draggerContainer">
                            <div id="mCSB_1_dragger_vertical" class="mCSB_dragger"
                              style="position: absolute; min-height: 50px; display: block; height: 85px; max-height: 273px; top: 0px;">
                              <div class="mCSB_dragger_bar" style="line-height: 50px;"></div>
                            </div>
                            <div class="mCSB_draggerRail"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <style>
                  #attr span b {
                    display: none
                  }

                  .mmi_popup {
                    width: 250px
                  }

                  .mmi_popup p {
                    margin: 10px 5px -6px 10px !important;
                  }
                  </style>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <main class="nk-pages">
        <section class="section section-l bg-light section-spread" id="news">
          <div class="container">
            <div class="section-content">
              <div class="row g-gs justify-content-between">
                <div class="col-lg-auto">
                  <div class="text-block text-center mb-4">
                    <h5 class="subtitle">Latest</h5>
                    <h2 class="title">News & Updates</h2>
                    <h6 class="subtitle">*Sharing as received*</h6>
                  </div>
                  <?php include('news.php'); ?>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>

      <script defer src="/assets/fontawesome/js/all.js"></script>
      <!--load all styles -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
      <?php include('footer.html'); ?>
</body>

</html>