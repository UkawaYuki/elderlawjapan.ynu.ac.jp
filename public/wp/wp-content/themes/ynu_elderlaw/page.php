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
<ul><?php if(function_exists('bcn_display')){bcn_display();} ?></ul>
</div>
<!-- -->
<div class="singleWrap">
<!-- MAIN -->
<div class="inner page">
<?php if(!is_page(2) && !is_page(6) && !is_page(8) && !is_page(10)){ ?><h1><?php the_title(); ?></h1><?php } ?>
<?php the_content(); ?>
</div>
<!-- SIDEBAR -->
<div class="sidebar">
<?php 
//高齢者法研究会について
if(is_page(2) || $post->post_parent == 2){ ?>
<h2><a href="/about/" class="btn">高齢者法研究会について</a></h2>
<ul class="btnList">
<?php wp_list_pages("child_of=2&title_li="); ?>
</ul>
<?php 
//高齢者法情報（国内）
}else if(is_page(6) || $post->post_parent == 6 || get_post($post->post_parent)->post_parent == 6){ ?>
<h2><a href="/domestic/" class="btn">高齢者法情報（国内）</a></h2>
<p class="titleBtn"><a href="/domestic/laws/general/" class="btn">高齢者関連の法律</a></p>
<ul class="btnList">
<?php wp_list_pages("child_of=20&title_li="); ?>
</ul>
<p class="titleBtn"><a href="/domestic/related-agencies/goverment/" class="btn">関連諸機関</a></p>
<ul class="btnList">
<?php wp_list_pages("child_of=36&title_li="); ?>
</ul>
<p class="titleBtn"><a href="/domestic/document/general/" class="btn">文献</a></p>
<ul class="btnList">
<?php wp_list_pages("child_of=42&title_li="); ?>
</ul>
<?php 
//裁判例情報
}else if(is_page(8) || $post->post_parent == 8){ ?>
<h2><a href="/precedents/" class="btn">裁判例情報</a></h2>
<ul class="btnList">
<?php wp_list_pages("child_of=8&title_li="); ?>
</ul>
<?php 
//高齢者法情報（海外）
}else if(is_page(10) || $post->post_parent == 10){ ?>
<h2><a href="/oversea/" class="btn">高齢者法情報（海外）</a></h2>
<ul class="btnList">
<?php wp_list_pages("child_of=10&exclude=92&title_li="); ?>
</ul>
<p class="linkBtn"><a href="/oversea/related-agencies/" class="btn">関連諸機関</a></p>
<?php 
//会員ログイン
}else if(is_page(640) || $post->post_parent == 640){ ?>
<h2><a href="/member-login/" class="btn">会員ログイン</a></h2>
<ul class="btnList">
<?php wp_list_pages("child_of=640&title_li="); ?>
</ul>
<?php } ?>
</div>
</div>

</div>

<?php }} ?>

<?php get_footer(); ?>