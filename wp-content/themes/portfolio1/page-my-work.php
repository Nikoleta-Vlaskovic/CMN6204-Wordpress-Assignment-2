<?php 

// Template Name: Portfolio expose Template

?>
<?php get_header(); ?>
<?php the_post(); ?>

 <div class="container">
      <div class="row">
          <div class="col-lg-6">
            <?php the_content(); ?>
          </div>
      </div>
      <hr>
 </div>

<?php get_footer(); ?>
