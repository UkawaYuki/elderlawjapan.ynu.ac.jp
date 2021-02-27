<?php
extract($_REQUEST);
mb_language("ja");
mb_internal_encoding("UTF-8");
?>
<?php get_header(); ?>


<!-------------------------------------------- CONTENT -------------------------------------------->
<div id="content">
  <!-- -->
  <div class="indexVisualWrap">
    <div class="left">
      <ul>
        <li class="sld1" style="background: url(/img/tmp/index1.jpg) no-repeat top center; background-size: cover;"></li>
        <li class="sld2" style="background: url(/img/tmp/index2.jpg) no-repeat top center; background-size: cover;"></li>
        <li class="sld3" style="background: url(/img/tmp/index3.jpg) no-repeat top center; background-size: cover;"></li>
      </ul>
    </div>
    <div class="right">
      <div class="inner">
        <p class="lead1">高齢者特有の<br />法的な保障について考える</p>
        <p class="lead2">高齢者にかかわる法的課題全般について<br />専門家（研究者と実務家）が<br />ともに検討し、情報を発信します</p>
        <p class="linkBtn btn"><a href="/about/"><span>高齢者法JAPANとは</span></a></p>
      </div>
    </div>
  </div>
  <!-- -->
  <div class="indexNewsWrap">
    <div class="left">
      <h2><span>NEWS</span></h2>
    </div>
    <div class="right">
      <ul class="newsList">
        <?php
        query_posts('post_type=post&showposts=3&category_name=news');
        if (have_posts()) {
          while (have_posts()) {
            the_post();
        ?>
            <li><a href="<?php the_permalink(); ?>" class="btn"><span class="date"><?php echo get_post_time('Y.m.d'); ?></span><span class="title"><?php the_title(); ?></span></a></li>
        <?php }
        } ?>
      </ul>
      <p class="btnMore"><a href="/news/">一覧を見る</a></p>
    </div>
  </div>
  <!-- -->
  <div class="indexInfoWrap">
    <div class="inner">
      <h2>高齢者法情報<span>高齢者法に関連する情報を掲載しています</span></h2>
      <div class="listWrap">
        <div class="block">
          <h3><a href="/domestic/" class="btn">高齢者法情報（国内）</a></h3>
          <div class="main">
            <p class="linkBtn"><a href="/domestic/general/" class="btn">高齢者関連の法律</a></p>
            <p class="linkBtn"><a href="/domestic/related-agencies/goverment/" class="btn">関連諸機関</a></p>
            <p class="titleBtn"><a href="/domestic/document/general/" class="btn">文献</a></p>
            <ul class="list">
              <?php wp_list_pages("child_of=42&title_li="); ?>
            </ul>
          </div>
        </div>
        <div class="block">
          <h3><a href="/precedents/" class="btn">裁判例情報</a></h3>
          <div class="main">
            <ul class="list">
              <?php wp_list_pages("child_of=8&title_li="); ?>
            </ul>
          </div>
        </div>
        <!-- <div class="block">
          <h3><a href="/oversea/" class="btn">高齢者法情報（海外）</a></h3>
          <div class="main">
            <ul class="list">
              <?php //wp_list_pages("child_of=10&exclude=92&title_li=");
              ?>
            </ul>
            <p class="linkBtn"><a href="/oversea/related-agencies/" class="btn">関連諸機関</a></p>
          </div>
        </div> -->
      </div>
    </div>
  </div>
  <!-- -->
  <div class="indexReportWrap">
    <div class="inner">
      <h2>活動レポート<span>高齢者法研究会の活動状況、<br class="sponly">会員の視察の報告などをお伝えします</span></h2>
      <div class="indexReportList">
        <?php
        query_posts('post_type=post&showposts=1&category_name=activity');
        if (have_posts()) {
          while (have_posts()) {
            the_post();
            $str = get_post_meta($post->ID, "dateEnd", TRUE);
        ?>
            <div class="block activity"><a href="<?php the_permalink(); ?>" class="btn">
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
              </a>
              <div class="indexReportBtnList">
                <p class="activity"><a href="/category/report/activity/">開催状況一覧</a></p>
              </div>
            </div>
        <?php }
        } ?>
        <?php
        query_posts('post_type=post&showposts=1&category_name=column');
        if (have_posts()) {
          while (have_posts()) {
            the_post();
            $str = get_post_meta($post->ID, "dateEnd", TRUE);
        ?>
            <div class="block column"><a href="<?php the_permalink(); ?>" class="btn">
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
              </a>
              <div class="indexReportBtnList">
                <p class="column"><a href="/category/report/column/">会員コラム一覧</a></p>
              </div>
            </div>
        <?php }
        } ?>
        <?php
        query_posts('post_type=post&showposts=1&category_name=oversea');
        if (have_posts()) {
          while (have_posts()) {
            the_post();
            $str = get_post_meta($post->ID, "dateEnd", TRUE);
        ?>
            <div class="block oversea"><a href="<?php the_permalink(); ?>" class="btn">
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
              </a>
              <div class="indexReportBtnList">
                <p class="oversea"><a href="/category/report/oversea/">視察報告（海外）一覧</a></p>
              </div>
            </div>
        <?php }
        } ?>
        <?php
        query_posts('post_type=post&showposts=1&category_name=domestic');
        if (have_posts()) {
          while (have_posts()) {
            the_post();
            $str = get_post_meta($post->ID, "dateEnd", TRUE);
        ?>
            <div class="block domestic"><a href="<?php the_permalink(); ?>" class="btn">
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
              </a>
              <div class="indexReportBtnList">
                <p class="domestic"><a href="/category/report/domestic/">視察報告（国内）一覧</a></p>
              </div>
            </div>
        <?php }
        } ?>
      </div>
      <!-- <div class="indexReportBtnList">
        <p class="activity"><a href="/category/report/activity/">開催状況一覧</a></p>
        <p class="column"><a href="/category/report/column/">会員コラム一覧</a></p>
        <p class="oversea"><a href="/category/report/oversea/">視察報告（海外）一覧</a></p>
        <p class="domestic"><a href="/category/report/domestic/">視察報告（国内）一覧</a></p>
      </div> -->
    </div>
  </div>

</div>

<?php get_footer(); ?>
