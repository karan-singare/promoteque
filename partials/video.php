<div class="video-container">
  <div class="video">
    <video class="video" src="<?php echo get_images_path() . 'video.mp4' ?>"  loop muted autoplay preload="auto"  poster="<?php echo get_images_path() . 'poster.jpg' ?>" onload="console.log('helo')">
    </video>
  </div>
  <div class="scroll-btn animate__animated animate__bounce animate__infinite infinite">
    <button class="story-anchor">
      <svg class="">
        <use xlink:href="<?php echo get_images_path() . 'sprite.svg#icon-chevrons-down' ?>"></use>
      </svg>
    </button>
  </div>

  <div class="row">
    <div class="video-headings">
      <h1 class="heading__primary heading__primary--main">Design. Social. <span>Content.</span></h1>
      <h1 class="heading__primary heading__primary--sub anim-typewriter" data-text="Digital transformation starts here">
        Digital transformation starts here.
      </h1>
    </div>
  </div>
</div>
