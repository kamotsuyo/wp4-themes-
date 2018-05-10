<?PHP

//ログ・デバッグ管理用のオリジナル関数
require_once('/Users/kamogashiratsuyoshi/Dropbox/_local_mamp/kamo_functions/kamo_mlog/kamo_mlog.php');
//end

/** ログ出力test--OK */
//$mlog = new Mlog(__DIR__);
//$mlog->debug('hogehoge');

//スタイルシートの読み込み
function k_load_scripts(){
    wp_enqueue_style('custom-wp-style',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts' , 'k_load_scripts');

//タイトルタグの設定
//テーマサポートを追加
function easistwp_setup(){
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
