<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php define('KLEIDERORDNUNG_PAGE_TITLE', esc_html(get_the_title())) ?>
<?php include( KLEIDERORDNUNG_DIR . '/inc/structure/html-head.php') ?>
<body <?php body_class(); ?> itemtype="https://schema.org/WebPage" itemscope>
<!-- emitted by page.php
     which catches all post and archive types that are not handled by a more specific file like
     single.php                         (should handle new and any post type that has no own file)
     single-offer.php
     single-story.php                   (currently not needed but probably better to define)
     category.php                       (default taxonomy archive, should handle news overview)
     taxonomy-offer_section.php         (we could discriminate based on if it has an image etc.)
     taxonomy-offer_section-angebot.php (if we really want to discriminate based on category)
     taxonomy-offer_section-weitere.php
-->
<hr><pre>emitted by page.php</pre><hr><!-- TODO remove debug output -->
<?php
  if (have_posts()): while (have_posts()) : the_post();
  if ( str_starts_with(parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY), 'en')  ) {
    include( KLEIDERORDNUNG_DIR . '/inc/structure_en_tmp/header.php');
    echo '<main id="wp--skip-link--target">';
    ?>
    <h1 class="page-title" id="content"><?php the_title(); ?> (page.php)</h1><!-- TODO remove debug output -->
    <?php
    the_content();
    echo '</main>';
    include( KLEIDERORDNUNG_DIR . '/inc/structure_en_tmp/footer.php');
  } else {
    include( KLEIDERORDNUNG_DIR . '/inc/structure/header.php');
    echo '<main id="wp--skip-link--target">';
    ?>
    <h1 class="page-title" id="content"><?php the_title(); ?></h1>
    <?php
    the_content();
    echo '</main>';
    include( KLEIDERORDNUNG_DIR . '/inc/structure/footer.php');
    include( KLEIDERORDNUNG_DIR . '/inc/structure/admin-edit-link.php');
  }
  endwhile;
  endif;
?>
</body>
</html>
