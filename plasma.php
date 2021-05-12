<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="author" content="Saransh Seth">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="An Initiative to help COVID Affected">
  <meta property="og:description" content="A volunteer-driven crowd sourced effort to track available hospital beds, plasma, food, ambulance and other critical services for Corona in Ahmedabad region." data-rh="true">
  <meta name="keywords" content="hospital, beds, vacancy, ventilator, gujarat, ahmedabad, oxygen, concentrator, icu, covid, covid19, covid-19, coronavirus, corona, india, virus, pandemic, disease, carona, karona, korona, food, gandhinagar, amreli, tiffin, food, home care, covid care, plasma, vaccination, rtpcr, remedesivir, nursing, ambulance">
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
  <link rel="stylesheet" href="assets/css/plasma.css">

  <?php include('google-tag.html'); ?>
</head>

<body class="nk-body">
  <div class="top-bar">COVID 19 Helpline <a href="tel:07923250818">07923250818</a> | <a href="tel:07923251900">07923251900</a> | <a href="tel:104">104</a> | Whatsapp Helpline <a
      href="https://wa.me/+917433000104">+91 7433000104</a></div>
  <?php include('header-2.html'); ?>


  <div class="alert alert-info alert-dismissible fade show" role="alert">
    Plasma from recovered COVID-19 patients is urgently needed across hospitals in India. <strong><u><a
          class="alert-link"
          href="https://docs.google.com/forms/d/e/1FAIpQLSfKyBTgGjriYcWnYqL491OAqO1H7PhKF2Rvn0EefvxaofSEkA/viewform">Gujarat,
          Please
          donate Plasma if you have recently recovered from
          COVID-19 or know someone
          who can.</a></u></strong>
    <button type="button" class="btn-close float-right" data-dismiss="alert" data-bs-dismiss="alert" aria-label="Close"
      style="background: transparent; border: none;font-size: 1.25rem;padding: 0;
    margin: 0;">
      <i class="far fa-times-circle"></i></button>
  </div>

  <div class="nk-banner">

    <div class="jumbotron jumbotron-fluid">
      <div class="container-fluid text-center">
        <lottie-player src="/assets/lottie/plasma.json" background="transparent" speed="1" loop autoplay>
        </lottie-player>
        <h1 class="text-dark text-center">Plasma Support</h1>
      </div>
    </div>

    <div class="container-lg">

      <div class="row mt-3">
        <div class="alert alert-warning col-12" role="alert">
          <h4>Steps to register<strong class="text-small"> (Highly Recommended)</strong></h4>
          <hr>
          1) One immediate family member of the patient needs to fill in the patient detail on <a target="_blank"
            class="alert-link" href="https://www.dhoondh.com/">www.dhoondh.com</a> <i
            class="fas fa-check-circle"></i><br />
          <h5 class="text-center mt-2 mb-2">Or Scan this QR<br /><img src="/assets/images/qrcode_dhoondh.png"
              width="200" class="p-2" /></h5>
          2) Email the prescription stating the patient requires plasma therapy on <a class="alert-link"
            href="mailto:plasmatch19@gmail.com">plasmatch19@gmail.com</a> along with the registration ID that is
          generated ID that is generated from the website itself. <i class="fas fa-check-circle"></i><br />
          3) You will be contacted when a donor is available matching your requirements.​ <i
            class="fas fa-check-circle"></i><br />
        </div>
      </div>

      <div class="row mt-3 mb-4">
        <iframe loading="lazy"
          src="https://datastudio.google.com/embed/reporting/a9730614-a98a-47a5-87e6-b8b6223fe8bc/page/V4yEC"
          frameborder="0" style="border:0" allowfullscreen=""></iframe>
      </div>

      <div class="alert alert-dark text-center card-alert" style="top:0;" role="alert">Data may be delayed or partial.
        Please
        verify with the
        hospital.</div>

      <div class="row row-cols-1 row-cols-md-2 g-4 cards mb-3"></div>

      <table class="table table-striped table-responsive-lg table-bordered mt-3">
        <thead>
          <tr>
            <th>#</th>
            <th>City</th>
            <th>Platform</th>
            <th>Contact Person</th>
            <th>Contact</th>
            <th>Remarks</th>
            <th>Verified</th>
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