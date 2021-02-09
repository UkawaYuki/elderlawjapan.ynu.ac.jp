<?php

/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'localdb');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'root');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'q/cM5+fsclsP#[7j0kTuHnowJa3Aheo*}w9zpDDAEVqy8O?/|$?s~h!LX]eG0MGo');
define('SECURE_AUTH_KEY',  ')aLHEoWD3j.20DO4mQ$7w6|H]WiQ{I$!:ovF#U(7Q)!93hN.f:g,PdkbbK%E,Au$');
define('LOGGED_IN_KEY',    'wyH]{(p^4US`-]0L 6Z0rCj:SO9i?9*6^0mG?!VMtF/j/E9oHu,/>$h]`RM^cbH|');
define('NONCE_KEY',        ',lWxsCIs,{tgf$Q F=L.{%s*>CIw>WWKL3IZH9E<yN]#*7{`l$wB;w>&U!eAqH7,');
define('AUTH_SALT',        'dwI ;U~6yo,myVx8B}5k]v0T2rkFRKY1GMJF1x&L&I1^>n(_F{5-?U!H#o`L>7-l');
define('SECURE_AUTH_SALT', '~S,R4*O:,xGJsiCi0x}H/c}%Lh46n/Gw|-ackD#]FSEc:4s-1_t)!^%EFZL 5%@$');
define('LOGGED_IN_SALT',   '>md4[{]?2bS2yL0iSs/0qv[ayTF%]58QRK@@B#dcbsAgNX8&a5Q06u!sUrR&lmTc');
define('NONCE_SALT',       'Gy/iA,ohTSMh*=d9WPA?G:l|Gsi{pH,e+BM9gP1-g;U*1Kc1#s6?u)lh>T,)<8j>');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'ynuElderDB2016_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH'))
  define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
