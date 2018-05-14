<?PHP

//ログ・デバッグ管理用のオリジナル関数
require_once('/Users/kamogashiratsuyoshi/Dropbox/_local_mamp/kamo_functions/kamo_mlog/kamo_mlog.php');
//console.logへ出力する関数console_log.phpを読み込む
require_once('/Users/kamogashiratsuyoshi/Dropbox/_local_mamp/kamo_functions/console_log/console.php');

/** ログ出力test--OK */
//$mlog = new Mlog(__DIR__);
//$mlog->debug('hogehoge');

/** console.log出力テスト== OK */
$console = new Console();
$console->log('hoghoehgoe');

//スタイルシートの読み込み用に関数を作成する 関数名は自由。
function load_stylesheets(){
    wp_enqueue_style('main-style',get_stylesheet_uri());
    wp_enqueue_style('sub-style',get_stylesheet_directory_uri().'/sub.css');
}

add_action('wp_enqueue_scripts' , 'load_stylesheets');

//タイトルタグの設定
//テーマサポートを追加
function easistwp_setup(){
    //タイトルタグを自動出力。wp_head関数が必要。
    add_theme_support('title-tag');

    //アイキャッチ画像を有効化
    add_theme_support('post-thumbnails');
    //テーマ専用の画像サイズの追加
    add_image_size('easiestwp-thumbnail',190,130,true);
    //ヒーローイメージ（トップページや記事ページの先頭に大きく表示される画像のこと）画像サイズの追加
    add_image_size('easiestwp-hero',1200,630,true);
    //ナビゲーションを利用する
    register_nav_menus(array('global'=>'Global Menu',));
}
add_action('after_setup_theme','easistwp_setup');
