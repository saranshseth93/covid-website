<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="author" content="Covid Madad">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="An Initiative to help COVID Affected">
  <!-- Fav Icon  -->
  <link rel="shortcut icon" href="images/favicon.svg">
  <!-- Site Title  -->
  <title>COVID-19 Madad | COVID HomeCare Service Provider</title>
  <!-- Bundle and Base CSS -->
  <link href="/assets/fontawesome/css/all.css" rel="stylesheet">
  <!--load all styles -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.8.335/pdf_viewer.min.css" />
  <link rel="stylesheet" href="assets/css/bundle.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/home-care.css">

  <?php include('google-tag.html'); ?>
</head>

<body class="nk-body">
  <div class="top-bar">COVID 19 Helpline <a href="tel:+917926403333">079 26403333</a> | <a href="tel:+917926409999">079
      26409999</a></div>
  <?php include('header-2.html'); ?>
  <div class="nk-banner">

    <div class="jumbotron jumbotron-fluid">
      <div class="container-fluid text-center">
        <img src="/assets/images/home-care.png" />
        <h1 class="text-dark text-center">COVID HomeCare Service Provider</h1>
      </div>
    </div>

    <div class="container-lg">
      <div class="row">
        <h2 class="col">COVID HomeCare Service Provider</h2>
      </div>
      <div class="row mt-3 p-3">
        <p class="">Ahmedabad Hospitals & Nursing Homes Association (AHNA) represents affiliation of healthcare
          providers
          from various hospitals and nursing homes of Ahmedabad and surrounding areas within a radius of fifty
          kilometres.
          The association is working in tandem to introduce and advocate distinctive healthcare reforms, while striving
          for transparent and well balanced doctor-patient relationship.

          The directive of AHNA is to foster ethical, evidence based healthcare services and create awareness about
          preventive healthcare practices amongst masses. AHNA is committed to developing reasonable healthcare policies
          that support quality care and quality of life.
          <br /><br />
          <a href="/assets/pdfs/Write up on Home Care services- Press release.pdf" target="_blank">(Click here -
            Guidelines for home care service providers)</a>
        </p>
      </div>

      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
              <a role="button" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                aria-expanded="true" aria-controls="collapseOne">
                HCG Hospital (Navrangpura, Ahmedabad) - Click for more details
              </a>
            </h4>
          </div>
          <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
              <img class="rounded mr-3" src="/assets/images/hcg_hos_1.jpeg" width="500" />
              <img src="/assets/images/hcg_hos_2.jpeg" width="500" />
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                aria-expanded="false" aria-controls="collapseThree">
                Shalby - Click for more details
              </a>
            </h4>
          </div>
          <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">
              <img class="rounded" src="/assets/images/shalby.png" width="600" />
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingFour">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour"
                aria-expanded="false" aria-controls="collapseFour">
                Ahna - Click for more details
              </a>
            </h4>
          </div>
          <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
            <div class="panel-body">
              <img class="rounded" src="/assets/images/ahna.jpg" width="600" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- <embed src="/assets/pdfs/AMC REQUISITIONED HOSPITAL STATUS 19-04-2021 5.00 PM ONLINE.pdf" type="application/pdf" width="100%" height="600px" />  
            </div> -->
    <iframe src="/assets/PdfViewer/web/viewer.html?file=/assets/pdfs/Home_Care_Ahmedabad.pdf"
      class="pdf-viewer"></iframe>
    <!-- <canvas id="the-canvas" class=""></canvas>
            <div>
                <button id="prev">Previous</button>
                <button id="next">Next</button>
                &nbsp; &nbsp;
                <span class="page_details">Page: <span id="page_num"></span> / <span id="page_count"></span></span>
              </div> -->
  </div>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.8.335/pdf.min.js"></script>
  <script defer src="/assets/fontawesome/js/all.js"></script>
  <!--load all styles -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="assets/js/patient-bed.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.8.335/pdf.worker.min.js"></script>
  <script src="assets/js/bundle.js"></script>
  <script src="assets/js/scripts.js"></script>


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
</body>

</html>