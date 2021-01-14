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

      <div class="gallery__video-item gallery__video-item--1">
        <video src="<?php echo get_images_path() . 'gallery-vid1.mp4'; ?>" paused muted loop>

        </video>
      </div>
      <div class="gallery__image-item">
          <img src="<?php echo $images[3]; ?>" alt="" class="gallery__img" loading="lazy">
      </div>
      <div class="gallery__video-item gallery__video-item--2">
        <video src="<?php echo get_images_path() . 'gallery-vid1.mp4'; ?>" paused muted loop>

        </video>
        <img src="<?php echo get_images_path() . 'iphone.png'; ?>" alt="" class="gallery__img" loading="lazy">
      </div>
    </div>
  </div>

</section>
