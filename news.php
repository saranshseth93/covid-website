<link rel="stylesheet" href="assets/css/glider.min.css">
<link rel="stylesheet" href="assets/css/news.css">

<div class="row g-gs align-items-center justify-content-between">
  <div class="glider-contain">
    <div class="glider">
      <?php 
          $directory = "news";
          $images = glob($directory . "/*.{jpg,png,jpeg,gif,PNG,JPG,JPEG,GIF}", GLOB_BRACE);

          usort($images, function($a,$b){
            return filemtime($b) - filemtime($a);
          });

          foreach($images as $image)
          { ?>
      <div class="text-center">
        <?php echo '<img style="max-height: 400px;" src="'.$image .'" alt="'.$image.'" />';
        ?>
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





<script src="https://kit.fontawesome.com/852453daca.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.8.335/pdf.worker.min.js"></script>

<script src="/assets/js/glider.min.js"></script>
<script src="assets/js/bundle.js"></script>
<script src="assets/js/scripts.js"></script>
<script src="assets/js/news.js"></script>