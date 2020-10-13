<?php get_header() ?>

<?php if (have_posts()) : ?>
<?php
  // Start the loop.
  while (have_posts()) : the_post();
    /*
        * Include the Post-Format-specific template for the content.
        * If you want to override this in a child
        theme, then include a file
        * called content-___.php (where ___ is the PostFormat name) and that will be used instead.
        */
    get_template_part(
      'template-parts/content',
      get_post_format()
    );
  // End the loop.
  endwhile;
  // Previous/next page navigation.

  the_posts_pagination(array(
    'prev_text'          => __('Previous page', 'spritz'), '
        before_page_number' => '<span class="meta-nav
        screen-reader-text">' . __('Page', 'spritz') . ' </span>',
  ));
else :
  get_template_part('template-parts/content', 'none');
endif;
?>
<!-- ici s'insère le contenu principal de la page -->
<?php get_footer() ?>