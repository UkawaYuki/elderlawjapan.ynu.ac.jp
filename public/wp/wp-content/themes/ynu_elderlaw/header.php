<?php
extract($_REQUEST);
mb_language("ja");
mb_internal_encoding("UTF-8");
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<?php if(is_page(20)){ ?>
<meta http-equiv="refresh" content="0;URL=/domestic/laws/general/">
<?php } ?>
<?php if(is_page(42)){ ?>
<meta http-equiv="refresh" content="0;URL=/domestic/document/general/">
<?php } ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=1024,initial-scale=1.0,user-scalable=yes">
<title><?php wp_title('｜', true, 'right'); ?><?php bloginfo("title"); ?></title>
<meta name="description" content="<?php bloginfo("description"); ?>" />
<meta property="og:image" content="http://elderlawjapan.ynu.ac.jp/img/ogp.jpg" />
<link rel="stylesheet" href="/css/public.css">
<script type="text/javascript" src="/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="/js/jquery.cookie.min.js"></script>
<script type="text/javascript" src="/js/public.js"></script>
<?php if(is_home()){ ?>
<script type="text/javascript" src="/js/index.js"></script>
<?php } ?>
</head>
<body id="top">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-102647552-1', 'auto');
  ga('send', 'pageview');

</script>
<div id="wrap">
<!-------------------------------------------- HEADER -------------------------------------------->
<header>
<div class="inner">
<div class="aboveBlock">
<ul class="sizeList">
<li class="small btn active">中</li>
<li class="large btn">大</li>
</ul>
<p class="size">文字サイズ</p>
<div class="searchWrap"><script>
  (function() {
    var cx = '000227267257406659482:v_ulkxlsnfk';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search></div>
</div>
<div class="bottomBlock">
<h1><a href="/"><img src="/img/logo_header.png" width="215" height="50" alt="高齢者法Japan - 横浜国立大学" /></a></h1>
<ul class="menuList">
<li><a href="/about/" class="btn<?php if(is_page(2) || $post->post_parent == 2){ ?> active<?php } ?>">高齢者法研究会<br />について</a></li>
<li><a href="/domestic/" class="btn<?php if(is_page(6) || $post->post_parent == 6 || get_post($post->post_parent)->post_parent == 6){ ?> active<?php } ?>">高齢者法情報<br />（国内）</a></li>
<li><a href="/precedents/" class="btn<?php if(is_page(8) || $post->post_parent == 8){ ?> active<?php } ?>">裁判例情報</a></li>
<li><a href="/oversea/" class="btn<?php if(is_page(10) || $post->post_parent == 10){ ?> active<?php } ?>">高齢者法情報<br />（海外）</a></li>
<li><a href="/report/" class="btn<?php if(is_page("report") || is_category() || is_single() && !in_category("news")){ ?> active<?php } ?>">活動レポート</a></li>
<li><a href="/member-login/" class="btn">会員ログイン</a></li>
</ul>
</div>
</div>
</header>