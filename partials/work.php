<?php
  $images = [];
  for ($i=0; $i < 5; $i++) {
    $images[$i] = get_images_path() . 'gallery' . ($i+1) . '.jpeg';
  }

 ?>

<section class="work">
  <div class="section__heading">Our Work</div>
  <p class="section__description">Some of the amazing projects we’ve worked on</p>

  <div class="row">
    <div class="gallery">
      <?php foreach ($images as $image): ?>

        <div class="gallery__item">
          <img src="<?php echo $image; ?>" alt="" class="gallery__img" loading="lazy">
        </div>

      <?php endforeach; ?>

      <div class="gallery__item gallery__item--video">
        <video src="<?php echo get_images_path() . 'gallery-vid.mp4'; ?>" autoplay muted loop poster="posterimage.jpg">

        </video>
      </div>
    </div>
  </div>

</section>
