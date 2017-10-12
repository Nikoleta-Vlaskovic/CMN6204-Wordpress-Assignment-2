<?php
// Template Name: Contact Page with map
 get_header(); 
 the_post();
?>

<!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Contact
        <small>Subheading</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
    
        <div class="col-lg-8 mb-4">
          

           <?php the_content() ?>
        
        </div>
      </div>
    </div>
    <!-- /.container -->

<?php get_footer() ?>
