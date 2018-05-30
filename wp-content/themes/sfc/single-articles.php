<?php include 'header.php'; ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div id="page-header" class="node">
</div>

<section>
  <div class="container">
    <div class="node-content">
      <div class="headline">
        <ul class="breadcrumbs">
          <li><a href="#">Home</a></li>
          <li><a href="/sfc/articles">Latest Articles</a></li>
          <li><?php the_title(); ?></li>
        </ul>
        <h1><?php the_title(); ?></h1>
        <span class="post-date excerpt"><?php the_date(); ?></span>
      </div>

      <div class="node-body">
        <div class="node-img" style="background-image:url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>');"></div>
        <?php the_content(); ?>
      </div>

    </div>
  </div>
</section>
<div class="clear"></div>
<?php endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<?php include 'footer.php'; ?>
