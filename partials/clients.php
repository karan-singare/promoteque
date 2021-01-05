<?php
  $clinets = [
    get_images_path() . 'ffci.png',
    get_images_path() . 'kaftan.jpg',
    get_images_path() . 'meher.png',
    get_images_path() . 'robo.png',
  ];


 ?>

<section class="clients">
  <h2 class="heading__primary heading__primary--main">Our Clients</h2>
  <p>Here is the list of businesses we have worked with.</p>
  <div class="row">
    <div class="clients-grid">
      <?php foreach ($clinets as $client): ?>
        <div class="clients-grid-item">
          <img src="<?php echo $client; ?>" alt="">
        </div>
      <?php endforeach; ?>

    </div>
  </div>

</section>
