  <section id="about" class="about white-background no-pad nav-section">
    <div class="row">
      <div class="col-sm-12 col-lg-7 col-xl-6">
        <div class="content-box animated fade-in-up">
          <h2><?php block_field( 'title' ); ?></h2>
          <?php block_field( 'text' ); ?>
        </div>
      </div>
      <div class="col-sm-12 col-lg-5 col-xl-6">
        <div class="background-image" style="background-image: url('<?php block_field( 'image' ); ?>');">
        </div>
      </div>
    </div>
  </section>