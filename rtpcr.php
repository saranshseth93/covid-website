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
  <title>COVID-19 Madad | COVID-19 Testing Testing</title>
  <!-- Bundle and Base CSS -->
  <link href="/assets/fontawesome/css/all.css" rel="stylesheet">
  <!--load all styles -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.8/css/fixedHeader.dataTables.min.css" />
  <link rel="stylesheet" href="assets/css/bundle.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/rtpcr.css">
  <?php include('google-tag.html'); ?>
</head>

<body class="nk-body">
  <div class="top-bar">COVID 19 Helpline <a href="tel:07923250818">07923250818</a> | <a href="tel:07923251900">07923251900</a> | <a href="tel:104">104</a> | Whatsapp Helpline <a
      href="https://wa.me/+917433000104">+91 7433000104</a></div>
  <?php include('header-2.html'); ?>

  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    List of Private Laboratories for RTPCR approved by Govt. of Gujarat <a target="_blank" class="alert-link"
      href="/assets/pdf/rtpcr_approved_amc.pdf" download="/assets/pdf/rtpcr_approved_amc.pdf">
      Download PDF</a>
  </div>

  <div class="nk-banner">

    <div class="jumbotron jumbotron-fluid">
      <div class="container-fluid text-center">
        <img src="/assets/images/rtpcr-2.png" />
        <h1 class="text-dark text-center">COVID-19 Testing</h1>
      </div>
    </div>

    <div class="container-lg">

      <table class="table table-sm mt-3 table-striped table-responsive-lg table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>City</th>
            <th>Organisation</th>
            <th>Person</th>
            <th>Contact</th>
            <th>Time</th>
            <th>Home Collection</th>
            <th>RT-PCR</th>
            <th>CT Scan</th>
            <th>Rapid Antigen</th>
            <th>Status</th>
            <th>Remarks</th>
            <th>Verified</th>
          </tr>
        </thead>
        <tbody id="rtpcr-table">

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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
  <script defer src="/assets/fontawesome/js/all.js"></script>
  <!--load all styles -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/fixedheader/3.1.8/js/dataTables.fixedHeader.min.js"></script>
  <script src="assets/js/rtpcr.js"></script>

  <?php include('footer.html'); ?>
</body>

</html>