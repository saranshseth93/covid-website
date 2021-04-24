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
  <title>COVID-19 Madad | Initiative to help COVID affected</title>
  <!-- Bundle and Base CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.8.335/pdf_viewer.min.css" />
  <link rel="stylesheet" href="assets/css/bundle.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" />
  <link rel="stylesheet" href="assets/css/remedesivir.css">
</head>

<body class="nk-body">
  <div class="top-bar">COVID 19 Helpline <a href="tel:+917926403333">079 26403333</a> | <a href="tel:+917926409999">079
      26409999</a></div>
  <?php include('header-2.html'); ?>
  <div class="nk-banner">
    <div class="container-lg">
      <div class="row mb-3">
        <h2 class="col">Oxygen Supply</h2>
      </div>

      <table class="table table-striped table-responsive-md table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>City</th>
            <th>Organisation</th>
            <th>Person</th>
            <th>Contact</th>
            <th>Type</th>
            <th>Timings</th>
            <th>Status</th>
            <th>Remarks</th>
            <th>Verified On</th>
          </tr>
        </thead>
        <tbody id="oxygen-table">

        </tbody>
      </table>

    </div>
  </div>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.8.335/pdf.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
  <script src="https://kit.fontawesome.com/852453daca.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.8.335/pdf.worker.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script src="assets/js/oxygen.js"></script>

  <?php include('footer.html'); ?>
</body>

</html>