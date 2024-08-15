<section id="calendar" class="calendar background-image no-pad nav-section" style="background-image: url('<?php block_field( "background-image" ); ?>');">
  <div class="row">
    <div class="col-sm-12 col-lg-5 col-xl-6">
    </div>
    <div class="col-sm-12 col-lg-7 col-xl-6">
      <div class="content-box transparent-dark-bg animated fade-in-up">
        <h2>CALENDAR</h2>
        <?php
        
        if (block_rows('calendar-item')) :
        while (block_rows('calendar-item')) :
        block_row('calendar-item');
        ?>
        
        <div class="calendar-group">
          <h3><?php block_sub_field('venue'); ?></h3>
          <div class="calendar-content">
            <h4><?php block_sub_field('date'); ?></h4>
            <p><?php block_sub_field('city_state'); ?> • <?php block_sub_field('time'); ?></p>
            <a href="<?php block_sub_field('event-link'); ?>" target="_blank" class="button">More Details</a>
          </div>
        </div>
        
        <?php endwhile;
        endif;
        reset_block_rows('image-gallery');
        ?>
        
        <p>For Booking information please <a href="#contact">Contact Us.</a></p>
      </div>
    </div>
  </div>
</section>