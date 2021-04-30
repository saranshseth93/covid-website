<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="author" content="Saransh Seth">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <!-- Fav Icon  -->
  <link rel="shortcut icon" href="images/favicon.svg">
  <!-- Site Title  -->
  <title>COVID-19 Madad | Availability of COVID Beds in Private Hospitals</title>
  <!-- Bundle and Base CSS -->
  <link href="/assets/fontawesome/css/all.css" rel="stylesheet">
  <!--load all styles -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.8.335/pdf_viewer.min.css" />
  <link rel="stylesheet" href="assets/css/bundle.css?ver=">
  <link rel="stylesheet" href="assets/css/styles.css?ver=">
  <link rel="stylesheet" href="assets/css/patient-beds.css?ver=">

  <?php include('google-tag.html'); ?>
</head>
<style>

</style>

<body class="nk-body">
  <div class="top-bar">COVID 19 Helpline <a href="tel:+917926403333">079 26403333</a> | <a href="tel:+917926409999">079
      26409999</a></div>
  <?php include('header-2.html'); ?>

  <div class="alert alert-info alert-dismissible fade show" role="alert">
    For more up-to-date data <strong><a class="alert-link"
        href="/assets/pdfs/AMC REQUISITIONED HOSPITAL STATUS 30-04-2021 5.00 PM ONLINE.pdf"
        download="/assets/pdfs/AMC REQUISITIONED HOSPITAL STATUS 30-04-2021 5.00 PM ONLINE.pdf">Download
        PDF</a>.</strong>
    <button type="button" class="btn-close float-right" data-dismiss="alert" data-bs-dismiss="alert" aria-label="Close"
      style="background: transparent; border: none;font-size: 1.25rem;padding: 0;
    margin: 0;">
      <i class="far fa-times-circle"></i></button>
  </div>

  <div class="alert alert-dark alert-dismissible fade show" role="alert">
    For more live(non-verified) data <strong><a class="alert-link"
        href="https://external.sprinklr.com/insights/explorer/dashboard/601b9e214c7a6b689d76f493/tab/6?id=DASHBOARD_601b9e214c7a6b689d76f493&widgetId=60851f50039ec95a0fda35d8">Patient
        Bed data</a> & <a class="alert-link"
        href="https://external.sprinklr.com/insights/explorer/dashboard/601b9e214c7a6b689d76f493/tab/6?id=DASHBOARD_601b9e214c7a6b689d76f493&widgetId=60851f50039ec95a0fda35d6">ICU
        & Ventilator data</a></strong>
    <button type="button" class="btn-close float-right" data-dismiss="alert" data-bs-dismiss="alert" aria-label="Close"
      style="background: transparent; border: none;font-size: 1.25rem;padding: 0;
    margin: 0;">
      <i class="far fa-times-circle"></i></button>
  </div>

  <div class="nk-banner">

    <div class="jumbotron jumbotron-fluid">
      <div class="container-fluid text-center">
        <img src="/assets/images/hospital-beds.png" />
        <h1 class="text-dark text-center">Availability of COVID Beds in Private Hospitals</h1>
      </div>
    </div>

    <div class="container-lg">

      <div class="input-group mb-4 mt-4">
        <input type="text" id="search-input" class="form-control"
          placeholder="Search area or hospital name or Pincode..."
          aria-label="Search area or hospital name or Pincode..." aria-describedby="button-addon2">
        <button class="btn btn-outline-secondary" type="button" id="button-addon2" onClick="searchHospital();"><i
            class="fas fa-search-location" style="margin-right: 5px; font-size: 1.2rem;"></i>Find</button>
        <button class="btn btn-light" type="button" onClick="resetSearch();">Clear</button>
      </div>

      <div class="text-center">
        <h3>OR</h3>
      </div>

      <!-- <input class="form-control" list="area-filter" id="area-filter-input" placeholder="Search Area...">
      <datalist id="area-filter">

      </datalist> -->


      <div class="mt-3 mb-3">
        <button type="button" onClick="filterCards(this);" data-click="all"
          class="btn btn-outline-primary m-1 active">All
          Results</button>
        <button type="button" onClick="filterCards(this);" data-click="available"
          class="btn btn-outline-primary m-1">Available Only</button>
        <button type="button" onClick="filterCards(this);" data-click="oxygen" class="btn btn-outline-primary m-1">With
          Oxygen</button>
        <button type="button" onClick="filterCards(this);" data-click="no-oxygen"
          class="btn btn-outline-primary m-1">Without Oxygen</button>
        <button type="button" onClick="filterCards(this);" data-click="icu"
          class="btn btn-outline-primary m-1">ICU</button>
        <button type="button" onClick="filterCards(this);" data-click="icu-ventilator"
          class="btn btn-outline-primary m-1">ICU with
          Ventilator</button>
      </div>
      <div class="m-2 text-center ">
        <small class="text-primary lead"><i class="fas fa-sync mr-2"></i>Updated everyday</small>
      </div>


      <div class="text-center error-image">
        <img src="/assets/images/search.gif" width="300" alt="Error">
        <h4>Oops! No Results Found</h4>
      </div>
      <div class="row row-cols-1 row-cols-md-2 g-4 cards"></div>
      <div class="d-grid gap-2 col-12 mx-auto mt-3">
        <p class="lead">Displayed <b class="shownLength"></b> Of <b class="listLength"></b> Results.</p>
        <button class="showMore btn btn-primary" type="button">View More</button>
        <a class="btn btn-success btn-sm float-right border-reset"
          href="/assets/pdfs/AMC REQUISITIONED HOSPITAL STATUS 30-04-2021 5.00 PM ONLINE.pdf"
          download="/assets/pdfs/AMC REQUISITIONED HOSPITAL STATUS 30-04-2021 5.00 PM ONLINE.pdf"><i
            class="fas fa-download" style="margin-right:10px;"></i>Download PDF</a>
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



  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.8.335/pdf.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
  <script defer src="/assets/fontawesome/js/all.js"></script>
  <!--load all styles -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="assets/js/patient-bed.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.8.335/pdf.worker.min.js"></script>
  <?php include('footer.html'); ?>
</body>

</html>