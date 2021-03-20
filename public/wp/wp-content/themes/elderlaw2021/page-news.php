<?php get_header(); ?>


<!-------------------------------------------- CONTENT -------------------------------------------->
<div id="content">
  <!-- -->
  <div class="breadcrumbs">
    <ul>
      <li><a href="/">ホーム</a></li>
      <li>></li>
      <li>ニュース</li>
    </ul>
  </div>
  <!-- -->
  <div class="pageArchiveWrap">
    <!-- MAIN -->
    <div class="pageReportList">

      <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $the_query = new WP_Query(
        array(
          'post_type'      => 'post',
          'category_name' => 'news',
          'posts_per_page' => 9,
          'paged' => $paged,
        )
      );
      if ($the_query->have_posts()) {
        while ($the_query->have_posts()) {
          $the_query->the_post();
          $str = get_post_meta($post->ID, "dateEnd", TRUE);
      ?>
          <div class="block news"><a href="<?php the_permalink(); ?>" class="btn">
              <p class="img"><?php if (has_post_thumbnail()) {
                                the_post_thumbnail("thumbnail");
                              } else { ?>
                  <img src="/img/thumb_blank.png" width="222" height="148" /><?php } ?>
              </p>
              <p class="mark"></p>
              <p class="date"><?php echo get_post_time('Y.m.d');
                              if ($str) {
                                echo " 〜 " . $str;
                              } ?></p>
              <p class="title"><?php the_title(); ?></p>
            </a></div>
      <?php }
      }
      wp_reset_postdata();
      if (subPagination()) {
        echo subPagination();
      }
      ?>

    </div>

    <!-- SIDEBAR -->
    <div class="sidebar">
      <h2>NEWS</h2>
    </div>

    <!-- -->
    <?php the_posts_pagination("mid_size=2&prev_text=前へ&next_text=次へ"); ?>

  </div>

</div>


<?php get_footer(); ?>
