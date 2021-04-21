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

<body class="nk-body">
  <div class="top-bar">COVID 19 Helpline <a href="tel:+917926403333">079 26403333</a> | <a href="tel:+917926409999">079
      26409999</a></div>
  <?php include('header-2.html'); ?>
  <div class="nk-banner">
    <div class="container-lg">
      <div class="row">
        <h2 class="col">Availability of COVID Beds in Private Hospitals</h2>
      </div>

      <input class="form-control" list="area-filter" id="area-filter-input" placeholder="Search Area...">
      <datalist id="area-filter">

      </datalist>


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


      <div class="row row-cols-1 row-cols-md-2 g-4 cards"></div>
      <div class="d-grid gap-2 col-12 mx-auto mt-3">
        <p class="lead">Displayed <b class="shownLength"></b> Of <b class="listLength"></b> Results.</p>
        <button class="showMore btn btn-primary" type="button">View More</button>
      </div>

    </div>
  </div>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.8.335/pdf.min.js"></script>
  <script src="https://kit.fontawesome.com/852453daca.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="assets/js/patient-bed.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.8.335/pdf.worker.min.js"></script>
  <script src="assets/js/bundle.js?ver=112"></script>
  <script src="assets/js/scripts.js?ver=112"></script>
</body>

</html>