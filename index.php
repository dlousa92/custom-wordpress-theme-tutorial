<?php get_header(); ?>
<div class="col-sm-8 blog-main">

<?php
  if ( have_posts() ) {
    while ( have_posts() ) : the_post();
?>
<div class='blog-post'>
  <h2 class='blog-post-title'><?phpthe_title(); ?></h2>
  <p class='blog-post-meta'><?php the_date(); ?> by <?php the_author(); ?></p>
  <?php the_content(); ?>
</div><!-- /.blog-post -->
<?php
  endwhile;
  }
?>

    <nav>
        <ul class="pager">
            <li><a href="#">Previous</a></li>
            <li><a href="#">Next</a></li>
        </ul>
    </nav>

</div><!-- /.blog-main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
