<link rel="stylesheet" href="assets/css/glider.min.css">
<link rel="stylesheet" href="assets/css/news.css">
<link rel="stylesheet" href="/assets/css/magnific-popup.css">

<div class="row g-gs align-items-center justify-content-between">
  <div class="glider-contain">
    <div class="glider popup-gallery">
      <?php 
          $directory = "news";
          $images = glob($directory . "/*.{jpg,png,jpeg,gif,PNG,JPG,JPEG,GIF}", GLOB_BRACE);

          usort($images, function($a,$b){
            return filemtime($b) - filemtime($a);
          });

          foreach($images as $image)
          { ?>
      <div class="text-center">
        <a href="<?php echo $image; ?>" style="width: 555px; height: 400px;">
          <?php echo '<img height="400" style="max-height: 400px;" src="'.$image .'" alt="'.$image.'" />';
        ?>
        </a>
      </div>
      <?php } ?>
    </div>

    <button aria-label="Previous" class="glider-prev"><i class="fas fa-chevron-left"></i></button>
    <button aria-label="Next" class="glider-next"><i class="fas fa-chevron-right"></i></button>
    <div role="tablist" class="dots"></div>
  </div>
</div>
</div>
</div>


<!-- Back to top button -->
<button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
  <i class="fas fa-arrow-up"></i>
</button>

<a href="https://www.feedingindia.org/donate/help-save-my-india?review_id=oxygen" target="_blank"
  class="btn btn-info donate-button btn-lg"><i class="fas fa-hand-holding-medical mr-2"></i>Donate Now (Zomato)</a>




<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script defer src="/assets/fontawesome/js/all.js"></script>
<!--load all styles -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.8.335/pdf.worker.min.js"></script>

<script src="/assets/js/glider.min.js"></script>
<script src="assets/js/jquery.magnific-popup.js"></script>
<script src="assets/js/bundle.js"></script>
<script src="assets/js/scripts.js"></script>
<script src="assets/js/news.js"></script>