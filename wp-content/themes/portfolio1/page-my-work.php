<?php 
 // Template Name: Portfolio expose Template
get_header();
the_post();
?>
<div class="container">
      <div class="row">
          <div class="col-lg-6">
            <?php the_post(); ?>
          </div>
      </div>
 </div>

<?php get_footer(); ?>
