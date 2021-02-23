<?php get_header(); ?>
<?php 
if (have_posts()){
while (have_posts()){
the_post();
$str = get_post_meta($post->ID, "dateEnd", TRUE);
 ?>
<!-------------------------------------------- CONTENT -------------------------------------------->
<div id="content">
<!-- -->
<div class="breadcrumbs">
<ul>
<li><a href="/">ホーム</a></li>
<li>></li>
<?php if(in_category("news")){ ?>
<li><a href="/news/">ニュース</a></li>
<?php }else{ ?>
<li><a href="/report/">活動レポート</a></li>
<?php } ?>
<li>></li>
<li><?php the_title(); ?></li>
</ul>
</div>
<!-- -->
<div class="singleWrap">
<!-- MAIN -->
<div class="inner">
<p class="date"><?php echo get_post_time('Y.m.d'); if($str){
     echo " 〜 " . $str;
 } ?>
<?php if(in_category("news")){ ?><span class="cat">NEWS</span><?php } ?>
<?php if(in_category("activity")){ ?><span class="cat activity">開催状況</span><?php } ?>
<?php if(in_category("column")){ ?><span class="cat column">会員コラム</span><?php } ?>
<?php if(in_category("domestic")){ ?><span class="cat domestic">視察報告（国内）</span><?php } ?>
<?php if(in_category("oversea")){ ?><span class="cat oversea">視察報告（海外）</span><?php } ?>
</p>
<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
<!-- -->
<?php if(in_category("news")){ ?>
<p class="btnBack"><a href="/news/" class="btn">戻る</a></p>
<?php }else{ ?>
<p class="btnBack"><a href="/report/" class="btn">戻る</a></p>
<?php } ?>
</div>
<!-- SIDEBAR -->
<div class="sidebar">
<?php if(in_category("news")){ ?>
<h2>NEWS</h2>
<?php }else{ ?>
<h2>活動レポート</h2>
<ul class="catList">
<li class="activity"><a href="/category/report/activity/">開催状況一覧</a></li>
<li class="column"><a href="/category/report/column/">会員コラム一覧</a></li>
<li class="oversea"><a href="/category/report/oversea/">視察報告（海外）一覧</a></li>
<li class="domestic"><a href="/category/report/domestic/">視察報告（国内）一覧</a></li>
</ul>
<?php } ?>
</div>
</div>

</div>

<?php }} ?>

<?php get_footer(); ?>