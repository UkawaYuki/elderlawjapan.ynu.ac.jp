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
      query_posts('post_type=post&posts_per_page=9&category_name=report&paged=' . get_query_var("paged"));
      if (have_posts()) {
        while (have_posts()) {
          the_post();
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
      <?php the_posts_pagination("mid_size=2&prev_text=前へ&next_text=次へ"); ?>
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
