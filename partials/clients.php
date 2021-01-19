<?php
  $clinets = [
    [
      'title' => 'FFCI',
      'url' => 'http://ffci.co.uk/',
      'photo' => get_images_path() . 'client1.jpg',
    ],
    [
      'title' => 'Core',
      'url' => 'https://www.instagram.com/p/CHz_tM2pqNK/?utm_source=ig_web_copy_link',
      'photo' => get_images_path() . 'client2.jpg',
    ],
    [
      'title' => 'The Backspace',
      'url' => 'https://www.instagram.com/p/CGrehgUA5n-/?utm_source=ig_web_copy_link',
      'photo' => get_images_path() . 'client3.jpg',
    ],
    [
      'title' => 'NK Architects',
      'url' => 'https://www.instagram.com/p/CIQJ5tSgTcg/?utm_source=ig_web_copy_link',
      'photo' => get_images_path() . 'client4.jpg',
    ],
    [
      'title' => 'DY Patil International Group',
      'url' => 'https://www.instagram.com/p/CEYx52pA8Ai/?utm_source=ig_web_copy_link',
      'photo' => get_images_path() . 'client5.jpg',
    ],
    [
      'title' => 'Meenakshi Kuwadekar',
      'url' => 'https://www.instagram.com/p/CJaOlgvpxAF/?utm_source=ig_web_copy_link',
      'photo' => get_images_path() . 'client6.jpg',
    ],
    [
      'title' => 'The House of Exotique ',
      'url' => 'https://www.instagram.com/p/CGHBs5YJHIA/?utm_source=ig_web_copy_link',
      'photo' => get_images_path() . 'client7.jpg',
    ],
    [
      'title' => 'SM Projects Pvt Ltd',
      'url' => 'https://www.instagram.com/p/CHz_tM2pqNK/?utm_source=ig_web_copy_link',
      'photo' => get_images_path() . 'client8.jpg',
    ],


  ];


 ?>

<section class="clients">
  <div class="row">
    <h2 class="heading__secondary">Our Clients</h2>
    <p>Here is the list of businesses we have worked with.</p>
    <div class="clients-grid">
      <?php foreach ($clinets as $client): ?>
      <div class="clients-grid-item">
        <h3 class="clients-grid-item__title"><?php echo $client['title']; ?></h3>
        <div class="clients-grid-item__photo">

        </div>
        <img src="<?php echo $client['photo']; ?>" alt="" loading="lazy">
      </div>
      <?php endforeach; ?>

    </div>
  </div>

</section>
