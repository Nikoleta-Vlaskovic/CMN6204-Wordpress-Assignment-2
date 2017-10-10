<!DOCTYPE html>
<html lang="en">
 
   <head>
 
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">
 
     <title> <?= custom_title(); ?> </title>
 
     <!-- Bootstrap core CSS -->
     <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
     <!-- Custom styles for this template -->
     <link href="assets-week-3/css/modern-business.css" rel="stylesheet">
 
  </head>
 
   <body>
 
     <!-- Navigation -->

     <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
       <div class="container">
         <a class="navbar-brand" href="index.html"> <?= get_bloginfo('name'); ?> </a>
           <?php wp_nav_menu(['theme_location' => 'main-menu']);  ?>
          
       </div>
     </nav>