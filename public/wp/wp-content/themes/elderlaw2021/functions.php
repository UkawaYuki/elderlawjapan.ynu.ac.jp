<?php
//バージョンチェックを切る
add_filter('pre_site_transient_update_core', '__return_zero');
remove_action('wp_version_check', 'wp_version_check');
remove_action('admin_init', '_maybe_update_core');

//サムネイル
add_theme_support('post-thumbnails');
set_post_thumbnail_size(600, 400, true);

//YouTube用
add_filter('content_save_pre', 'test_save_pre');
function test_save_pre($content)
{
  global $allowedposttags;
  // iframeとiframeで使える属性を指定する
  $allowedposttags['iframe'] = array(
    'class' => array(), 'src' => array(), 'width' => array(),
    'height' => array(), 'frameborder' => array(), 'scrolling' => array(), 'marginheight' => array(),
    'marginwidth' => array()
  );
  return $content;
}

//絵文字切る
function disable_emoji()
{
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');
  remove_filter('the_content_feed', 'wp_staticize_emoji');
  remove_filter('comment_text_rss', 'wp_staticize_emoji');
  remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
}
add_action('init', 'disable_emoji');

// メニューを非表示にする
function remove_menus()
{
  global $menu;
  unset($menu[25]); // コメント
}
add_action('admin_menu', 'remove_menus');

//ビジュアルリッチエディタ
function custom_editor_settings($initArray)
{
  $initArray['body_id'] = 'primary';  // id の場合はこれ
  $initArray['body_class'] = 'post';  // class の場合はこれ
  // styleや、divの中のdiv,span、spanの中のspanを消させない
  $initArray['valid_children'] = '+body[style],+div[div|span],+span[span]';
  // 空タグや、属性なしのタグとか消そうとしたりするのを停止。余計なことすんな！
  $initArray['verify_html'] = false;
  // []←ショートコードを&#91;とかのままにしたかったけど出来なかった…。
  //$initArray['entity_encoding'] = 'raw';
  //$initArray['entities'] = '91,93';
  return $initArray;
}
add_filter('tiny_mce_before_init', 'custom_editor_settings');

/*********************************
 サブループページネーション出力用関数
 **********************************/
function subPagination($end_size = 1, $mid_size = 2, $prev_next = true)
{
  global $the_query;


  $page_format = paginate_links(
    array(
      'current' => max(1, get_query_var('paged')),
      'total' => $the_query->max_num_pages,
      'type'  => 'array',
      'prev_text' => '前へ', //前へのリンク文言
      'next_text' => '次へ', //次へのリンク文言
      'end_size' => $end_size, //初期値：１  両端のﾍﾟｰｼﾞﾘﾝｸの数
      'mid_size' => $mid_size, //初期値：２  現在のﾍﾟｰｼﾞの両端にいくつページリンクを表示するか（現在のページは含まない）
      'prev_next' => $prev_next, //初期値：true  リストの中に「前へ」「次へ」のリンクを含むか
    )
  );
  $code = '';
  if (is_array($page_format)) {
    $paged = get_query_var('paged') == 0 ? 1 : get_query_var('paged');
    $code .= '<div class="pagination nav-links">' . PHP_EOL;
    $code .= '<ul>' . PHP_EOL;
    foreach ($page_format as $page) {
      $code .= '<li>' . $page . '</li>' . PHP_EOL;
    }
    $code .= '</ul>' . PHP_EOL;
    $code .= '</div>' . PHP_EOL;
  }
  wp_reset_query();
  return $code;
}
