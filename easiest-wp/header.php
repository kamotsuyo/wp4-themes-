<!DOCTYPE HTML>
<html <?php language_attributes();?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- stylesheet , script 読み込みはfunctions.phpで行う-->
    <!--wp_head()関数をheadタグの直前に追記-->
    <!--wp_head関数はHTMLのheadタグ内に必要なスタイルシート、スクリプト、メタなどのhtmlタグを-->
    <!-- functions.phpなどのファイルやデータベースから取得して挿入します。-->
    <?PHP wp_head();?>
</head>

<body <?php body_class()?>>

    <header>
        <!-- サイトタイトルとキャッチフレーズ -->
        <!-- echo文でurlを出力するときにはesc_url()関数でエスケープを行う-->
        <a href="<?php echo esc_url(home_url());?>">
            <?php bloginfo("name");?>
        </a>
        <p>
            <?php bloginfo("description");?>
        </p>
        <!--グローバルナビゲーションメニュー-->

        <?php if(has_nav_menu('global')): ?>
        <?php $global_menu_array = array('theme_location'=>'global','menu_id'=>'global-menu','container'=>'nav','container_class'=>'global-nav');?>
        <?php wp_nav_menu($global_menu_array); endif; ?>
    </header>
