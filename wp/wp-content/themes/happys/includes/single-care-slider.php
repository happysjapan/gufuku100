<div class="orbit orbit_panel" role="region" aria-label="Favorite Space Pictures" data-orbit>
  <ul class="orbit-container">
    <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
    <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>

    <?php
    while ( have_rows("care_slider") ) : the_row();
    $slider_image = get_sub_field('care_slider_image')["sizes"]["medium"];
    ?>
    <li class="orbit-slide">
      <img class="orbit-image" src="<?php echo $slider_image; ?>" alt="Care image">
    </li>

    <?php endwhile; ?>

  </ul>
</div>
