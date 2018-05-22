<?PHP

//ログ・デバッグ管理用のオリジナル関数
//require_once('/Users/kamogashiratsuyoshi/Dropbox/_local_mamp/kamo_functions/kamo_mlog/kamo_mlog.php');
//console.logへ出力する関数console_log.phpを読み込む
//require_once('/Users/kamogashiratsuyoshi/Dropbox/_local_mamp/kamo_functions/console_log/console.php');

/** ログ出力test--OK */
//$mlog = new Mlog(__DIR__);
//$mlog->debug('hogehoge');

/**
* console.log出力テスト== OK
* --------------------------
* Console自作クラスは使用不可。
* このクラスを下記のように使うと
* 管理コンソールで画像管理に不具合が発生する！
*
* $console = new Console();
* $console->log('phpからconsole.log出力のテスト');
*/


//スタイルシートの読み込み用に関数を作成する 関数名は自由。
function load_stylesheets(){
    wp_enqueue_style('main-style',get_stylesheet_uri());
    wp_enqueue_style('sub-style',get_stylesheet_directory_uri().'/sub.css');
    //スクリプト読み込み
    //require.js
    wp_enqueue_script('require',get_theme_file_uri().'/js/require.js');
    //main.js
    wp_enqueue_script('main',get_theme_file_uri().'/js/main.js');
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



    //コメント一覧とコメントフォームにHMTL5のマークアップを適応する
    $args = array('comment-form','comment-list');
    add_theme_support('html5',$args );
}
add_action('after_setup_theme','easistwp_setup');

//サイドバー登録
function my_widget_init(){
    register_sidebar(array(
    'name' => 'Sidebar',
    'id' => 'sidebar'));
}
add_action('widgets_init','my_widget_init');
