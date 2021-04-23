<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="author" content="Softnio">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <!-- Fav Icon  -->
  <link rel="shortcut icon" href="images/favicon.svg">
  <!-- Site Title  -->
  <title>COVID-19 Madad | Initiative to help COVID affected</title>
  <!-- Bundle and Base CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.8.335/pdf_viewer.min.css" />
  <link rel="stylesheet" href="assets/css/bundle.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/admission.css">
</head>

<body class="nk-body">
  <div class="top-bar">COVID 19 Helpline <a href="tel:+917926403333">079 26403333</a> | <a href="tel:+917926409999">079
      26409999</a></div>
  <?php include('header-2.html'); ?>
  <div class="nk-banner">
    <div class="container-lg">
      <?php 
        $all_files = glob("/news/*.*");
        for ($i=0; $i<count($all_files); $i++)
          {
            $image_name = $all_files[$i];
            $supported_format = array('gif','jpg','jpeg','png');
            $ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
            if (in_array($ext, $supported_format))
                {
                  echo '<img src="'.$image_name .'" alt="'.$image_name.'" />'."<br /><br />";
                } else {
                    continue;
                }
          }
      ?>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.8.335/pdf.min.js"></script>
    <script src="https://kit.fontawesome.com/852453daca.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="assets/js/patient-bed.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.8.335/pdf.worker.min.js"></script>
    <script src="assets/js/bundle.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>