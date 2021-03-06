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
query_posts('post_type=post&posts_per_page=9&category_name=news&paged=' . get_query_var("paged"));
if (have_posts()){
while (have_posts()){
the_post();
$str = get_post_meta($post->ID, "dateEnd", TRUE);
 ?>
<div class="block news"><a href="<?php the_permalink(); ?>" class="btn"><p class="img"><?php if(has_post_thumbnail()){
	the_post_thumbnail("thumbnail");
} else { ?>
<img src="/img/thumb_blank.png" width="222" height="148" /><?php } ?></p><p class="mark"></p><p class="date"><?php echo get_post_time('Y.m.d'); if($str){
     echo " 〜 " . $str;
 } ?></p><p class="title"><?php the_title(); ?></p></a></div>
<?php }} ?>

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
