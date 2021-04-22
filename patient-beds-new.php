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
  <title>COVID-19 Madad | Initiative to help COVID affected</title>
  <!-- Bundle and Base CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.8.335/pdf_viewer.min.css" />
  <link rel="stylesheet" href="assets/css/bundle.css?ver=112">
  <link rel="stylesheet" href="assets/css/styles.css?ver=112">
  <link rel="stylesheet" href="assets/css/patient-beds.css?ver=112">
</head>
<style>
.btn-success {
  color: #fff;
  background-color: #198754;
  border-color: #198754;
}

.btn-sm {
  padding: .25rem .5rem;
  font-size: .875rem;
  border-radius: .2rem;
}
</style>

<body class="nk-body">
  <div class="top-bar">COVID 19 Helpline <a href="tel:+917926403333">079 26403333</a> | <a href="tel:+917926409999">079
      26409999</a></div>
  <?php include('header-2.html'); ?>
  <style>
  .alert {
    top: 80px;
    padding-right: 1.25rem;
  }
  </style>
  <div class="alert alert-info alert-dismissible fade show" role="alert">
    For more up-to-date data <strong><a class="alert-link"
        href="/assets/pdfs/AMC REQUISITIONED HOSPITAL STATUS 22-04-2021  5.00 PM.pdf"
        download="/assets/pdfs/AMC REQUISITIONED HOSPITAL STATUS 22-04-2021  5.00 PM.pdf">Download
        PDF</a>.</strong>
    <button type="button" class="btn-close float-right" data-dismiss="alert" data-bs-dismiss="alert" aria-label="Close"
      style="background: transparent; border: none;font-size: 1.25rem;">
      <i class="far fa-times-circle"></i></button>
  </div>
  <div class="nk-banner">
    <div class="container-lg">
      <div class="row">
        <h2 class="col">Availability of COVID Beds in Private Hospitals</h2>
      </div>

      <div class="input-group mb-4 mt-4">
        <input type="text" id="search-input" class="form-control" placeholder="Search area or hospital name..."
          aria-label="Search area or hospital name..." aria-describedby="button-addon2">
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


      <div class="text-center error-image">
        <img src="/assets/images/search.gif" width="300" alt="Error">
        <h4>Oops! No Results Found</h4>
      </div>
      <div class="row row-cols-1 row-cols-md-2 g-4 cards"></div>
      <div class="d-grid gap-2 col-12 mx-auto mt-3">
        <p class="lead">Displayed <b class="shownLength"></b> Of <b class="listLength"></b> Results.</p>
        <button class="showMore btn btn-primary" type="button">View More</button>
        <a class="btn btn-success btn-sm float-right border-reset"
          href="/assets/pdfs/AMC REQUISITIONED HOSPITAL STATUS 22-04-2021  5.00 PM.pdf"
          download="/assets/pdfs/AMC REQUISITIONED HOSPITAL STATUS 22-04-2021  5.00 PM.pdf"><i class="fas fa-download"
            style="margin-right:10px;"></i>Download PDF</a>
      </div>

    </div>
  </div>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.8.335/pdf.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
  <script src="https://kit.fontawesome.com/852453daca.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="assets/js/patient-bed.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.8.335/pdf.worker.min.js"></script>
  <script src="assets/js/bundle.js?ver=112"></script>
  <script src="assets/js/scripts.js?ver=112"></script>
  <?php include('footer.html'); ?>
</body>

</html>