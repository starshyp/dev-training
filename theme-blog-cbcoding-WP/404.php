<?php get_header(); ?>

<div class="container-404">
  <h2 class="page-heading">Page not found</h2>
  <img src="http://source.unsplash.com/640x480/?dogs">

  <h3>Sorry nothing found. Please try the following links.</h3>

  <ul>
    <li><a href="<?php echo site_url('/blog') ?>">Blog</a></li>
    <li><a href="<?php echo site_url('/projects') ?>">Projects</a></li>
    <li><a href="<?php echo site_url('/about') ?>">About Us</a></li>
    <li><a href="<?php echo site_url('') ?>">Home Page</a></li>
  </ul>

</div>

<?php get_footer(); ?>