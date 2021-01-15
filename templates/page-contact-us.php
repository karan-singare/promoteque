<?php
  /*
    Template Name: Contact Us
  */

  get_header();

  load_banner('contact-us');

 ?>
<section class="contact-us">

  <div class="row" >
    <div class="col-1-of-2">
      <h2 class="heading__secondary">Contact Us</h2>
      <p>Leave us your details and we will get back to you as soon as possible.</p>

      <div class="contact">
        <ul>
          <li>
            <a href="tel:+44 7584297887">
              <svg>
                <use xlink:href="<?php echo get_images_path() . 'sprite.svg#icon-phone'; ?>"></use>
              </svg>
              <span>+44 7584297887</span>
            </a>
          </li>
          <li>
            <a href="mailto:info@thesocialedition.com">
              <svg>
                <use xlink:href="<?php echo get_images_path() . 'sprite.svg#icon-mail'; ?>"></use>
              </svg>
              <span>info@thesocialedition.com</span>
            </a>
          </li>
          <li>
            <a href="tel:+44 7584297887">
              <svg>
                <use xlink:href="<?php echo get_images_path() . 'sprite.svg#icon-location2'; ?>"></use>
              </svg>
              <span>Kolkata | London</span>
            </a>
          </li>
        </ul>
      </div>

      <div class="connect">
        <ul>
          <li>
            <a href="tel:+44 7584297887">
              <svg>
                <use xlink:href="<?php echo get_images_path() . 'sprite.svg#icon-facebook'; ?>"></use>
              </svg>
            </a>
          </li>
          <li>
            <a href="tel:+44 7584297887">
              <svg>
                <use xlink:href="<?php echo get_images_path() . 'sprite.svg#icon-instagram'; ?>"></use>
              </svg>
            </a>
          </li>
          <li>
            <a href="tel:+44 7584297887">
              <svg>
                <use xlink:href="<?php echo get_images_path() . 'sprite.svg#icon-linkedin'; ?>"></use>
              </svg>
            </a>
          </li>
        </ul>
      </div>

    </div>
    <div class="col-1-of-2">

      <?php echo do_shortcode('[fluentform id="1"]'); ?>

    </div>
  </div>

</section>



<?php get_footer(); ?>
