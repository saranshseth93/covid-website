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
  <title>COVID-19 Madad | Plasma Support</title>
  <!-- Bundle and Base CSS -->
  <link href="/assets/fontawesome/css/all.css" rel="stylesheet">
  <!--load all styles -->
  <link rel="stylesheet" href="assets/css/bundle.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.8/css/fixedHeader.dataTables.min.css" />
  <link rel="stylesheet" href="assets/css/remedesivir.css">
  <style>
  .alert {
    top: 80px;
    padding-right: 1.25rem;
  }
  </style>

  <?php include(google-tag.html); ?>
</head>

<body class="nk-body">
  <div class="top-bar">COVID 19 Helpline <a href="tel:+917926403333">079 26403333</a> | <a href="tel:+917926409999">079
      26409999</a></div>
  <?php include('header-2.html'); ?>


  <div class="alert alert-info alert-dismissible fade show" role="alert">
    Plasma from recovered COVID-19 patients is urgently needed across hospitals in India. <strong><u><a
          class="alert-link" href="https://dhoondh.com/">Please donate Plasma if you have recently recovered from
          COVID-19 or know someone
          who can.</a></u></strong>
    <button type="button" class="btn-close float-right" data-dismiss="alert" data-bs-dismiss="alert" aria-label="Close"
      style="background: transparent; border: none;font-size: 1.25rem;padding: 0;
    margin: 0;">
      <i class="far fa-times-circle"></i></button>
  </div>

  <div class="nk-banner">
    <div class="container-lg">
      <div class="row">
        <h2 class="col">Plasma Support</h2>
      </div>

      <div class="row mt-3">
        <div class="alert alert-info col-12" role="alert">
          <h4>Steps to register<strong class="text-small"> (Highly Recommended)</strong></h4>
          <hr>
          1) One immediate family member of the patient needs to fill in the patient detail on <a target="_blank"
            class="alert-link" href="https://www.dhoondh.com/">www.dhoondh.com</a> <i
            class="fas fa-check-circle"></i><br />
          <h5 class="text-center">Or Scan this QR<br /><img src="/assets/images/qr_dhoondh.png" width="300" /></h5>
          2) Email the prescription stating the patient requires plasma therapy on <a class="alert-link"
            href="mailto:plasmatch19@gmail.com">plasmatch19@gmail.com</a> along with the registration ID that is
          generated ID that is generated from the website itself. <i class="fas fa-check-circle"></i><br />
          3) You will be contacted when a donor is available matching your requirements.​ <i
            class="fas fa-check-circle"></i><br />
        </div>
      </div>

      <table class="table table-striped table-responsive-md table-bordered mt-3">
        <thead>
          <tr>
            <th>#</th>
            <th>City</th>
            <th>Platform</th>
            <th>Contact Person</th>
            <th>Contact</th>
            <th>Remarks</th>
            <th>Verified On</th>
          </tr>
        </thead>
        <tbody id="plasma-table">

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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/fixedheader/3.1.8/js/dataTables.fixedHeader.min.js"></script>
  <script src="assets/js/plasma.js"></script>
  <?php include('footer.html'); ?>
</body>

</html>