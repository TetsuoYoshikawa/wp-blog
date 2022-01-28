<?php get_header(); ?>
<?php if (have_posts()) : the_post(); ?>

  <div class="eyecatch">
    <div class="single-eyecatch page-eyecatch">
      <img src="<?php echo get_template_directory_uri(); ?>/img/news-eyecatch.jpg" alt="no-img">

      <div class="page-title">
        <h1 class="page-title__h1">NEWS</h1>
        <p class=></p>
      </div>
    </div>
    <div class="single-container container">
      <div class="single-header__contain">
        <div class="style__border">
          <h1 class="single-title">
            <?php the_title(); ?>

          </h1>
          <div class="flex tags-date">
            <p class="single-date"><?php echo get_the_date('Y-m-d'); ?></p>

          </div>
        </div>
      </div>
      <div class="main-text">
        <?php the_content(); ?>

      </div>
    </div>
  </div>
<?php endif; ?>

<?php get_footer(); ?>
