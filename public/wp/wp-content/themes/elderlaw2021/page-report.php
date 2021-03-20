<?php get_header(); ?>


<!-------------------------------------------- CONTENT -------------------------------------------->
<div id="content">
  <!-- -->
  <div class="breadcrumbs">
    <ul>
      <li><a href="/">ホーム</a></li>
      <li>></li>
      <li>活動レポート</li>
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
          'category_name' => 'report',
          'posts_per_page' => 9,
          'paged' => $paged,
        )
      );
      if ($the_query->have_posts()) {
        while ($the_query->have_posts()) {
          $the_query->the_post();
          $str = get_post_meta($post->ID, "dateEnd", TRUE);
          if (in_category("activity")) {
            $nCat = "activity";
          } else if (in_category("column")) {
            $nCat = "column";
          } else if (in_category("oversea")) {
            $nCat = "oversea";
          } else {
            $nCat = "domestic";
          }
      ?>
          <div class="block <?php echo $nCat; ?>"><a href="<?php the_permalink(); ?>" class="btn">
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
      } ?>
      <?php
      wp_reset_postdata(); ?>
      <?php if (subPagination()) {
        echo subPagination();
      } ?>
    </div>

    <!-- SIDEBAR -->
    <div class="sidebar">
      <h2><a href="/report/" class="btn">活動レポート</a></h2>
      <ul class="catList">
        <li class="activity"><a href="/category/report/activity/">開催状況一覧</a></li>
        <li class="column"><a href="/category/report/column/">会員コラム一覧</a></li>
        <li class="oversea"><a href="/category/report/oversea/">視察報告（海外）一覧</a></li>
        <li class="domestic"><a href="/category/report/domestic/">視察報告（国内）一覧</a></li>
      </ul>
    </div>

  </div>

</div>


<?php get_footer(); ?>
