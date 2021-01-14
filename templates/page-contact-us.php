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
      <form action="" class="form">
        <div class="form__group">
          <input type="text" id="firstname" class="form__input" placeholder="Frist Name">
          <label for="firstname" class="form__label">Frist Name</label>
        </div>
        <div class="form__group">
          <input type="text" id="lastname" class="form__input" placeholder="Last Name">
          <label for="lastname" class="form__label">Last Name</label>
        </div>
        <div class="form__group">
          <input type="email" id="email" class="form__input" placeholder="Email">
          <label for="email" class="form__label">Email</label>
        </div>
        <div class="form__group">
          <textarea name="name" class="form__input" placeholder="Your Message" id="message"></textarea>
          <label for="message" class="form__label">Your Message</label>
        </div>

        <input type="submit" class="btn btn--hollow" name="" value="Submit">

      </form>
    </div>
  </div>

</section>



<?php get_footer(); ?>
