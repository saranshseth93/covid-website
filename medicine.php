<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="author" content="Saransh Seth">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="An Initiative to help COVID Affected">
  <meta property="og:description"
    content="A volunteer-driven crowd sourced effort to track available hospital beds, plasma, food, ambulance and other critical services for Corona in Ahmedabad region."
    data-rh="true">
  <meta name="keywords"
    content="hospital, beds, vacancy, ventilator, gujarat, ahmedabad, oxygen, concentrator, icu, covid, covid19, covid-19, coronavirus, corona, india, virus, pandemic, disease, carona, karona, korona, food, gandhinagar, amreli, tiffin, food, home care, covid care, plasma, vaccination, rtpcr, remedesivir, nursing, ambulance">
  <!-- Fav Icon  -->
  <link rel="shortcut icon" href="images/favicon.svg">
  <!-- Site Title  -->
  <title>COVID-19 Madad | Covid Medications</title>
  <!-- Bundle and Base CSS -->
  <link href="/assets/fontawesome/css/all.css" rel="stylesheet">
  <!--load all styles -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.8.335/pdf_viewer.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.8/css/fixedHeader.dataTables.min.css" />
  <link rel="stylesheet" href="assets/css/bundle.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/remedesivir.css">

  <?php include('google-tag.html'); ?>
</head>

<body class="nk-body">
  <div class="top-bar">COVID 19 Helpline <a href="tel:+917926403333">079 26403333</a> | <a href="tel:+917926409999">079
      26409999</a></div>
  <?php include('header-2.html'); ?>

  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    For more live(non-verified) data <strong><a class="alert-link"
        href="https://external.sprinklr.com/insights/explorer/dashboard/601b9e214c7a6b689d76f493/tab/6?id=DASHBOARD_601b9e214c7a6b689d76f493&widgetId=60851f50039ec95a0fda35ce">Click
        Here</a></strong>
    <button type="button" class="btn-close float-right" data-dismiss="alert" data-bs-dismiss="alert" aria-label="Close"
      style="background: transparent; border: none;font-size: 1.25rem;padding: 0;
    margin: 0;">
      <i class="far fa-times-circle"></i></button>
  </div>

  <div class="nk-banner">

    <div class="jumbotron jumbotron-fluid">
      <div class="container-fluid text-center">
        <lottie-player src="/assets/lottie/medicine.json" background="transparent" speed="1" loop autoplay>
        </lottie-player>
        <h1 class="text-dark text-center">COVID Medications</h1>
      </div>
    </div>

    <div class="container-lg">

      <div class="row mt-3">
        <div class="alert alert-info col-12" role="alert">
          <a href="/assets/pdfs/Remedesivir-eng.pdf" download="/assets/pdfs/Remedesivir-eng.pdf"
            class="btn btn-success m-2">Download English Form for Remedesivir</a>
          <a href="/assets/pdfs/Remedesivir-guj.pdf" download="/assets/pdfs/Remedesivir-guj.pdf"
            class="btn btn-success m-2">Download Gujarati Form for Remedesivir</a>
          <hr>
          According to guidelines Remedesivir and Tocilizumab will only be given directly to the hospital. Home
          quarantined patients won't be allowed, and doctors should not prescribe it to home quarantined patients as it
          won't be ethical.</b>
        </div>
      </div>

      <table class="table table-striped table-responsive table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>City</th>
            <th>Organisation</th>
            <th>Contact</th>
            <th>Status</th>
            <th>Remarks</th>
            <th>Verified</th>
          </tr>
        </thead>
        <tbody id="medicine-table">

        </tbody>
      </table>

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
  <script defer src="/assets/fontawesome/js/all.js"></script>
  <!--load all styles -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.8.335/pdf.worker.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/fixedheader/3.1.8/js/dataTables.fixedHeader.min.js"></script>
  <script src="assets/js/remedesivir.js"></script>

  <?php include('footer.html'); ?>
</body>

</html>