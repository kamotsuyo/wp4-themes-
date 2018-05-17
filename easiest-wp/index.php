<!DOCTYPE HTML>
<html <?php language_attributes();?>

<head>
    <!-- charset , viewportもheader-insert.php で行う。-->
    <!-- get_pemplate_part()関数でテンプレートディレクトリのheader-insert.phpを読み込む -->
    <?PHP get_template_part('header','insert') ?>
    <!-- titleタグの自動出力のためにwp_head()を使う-->
    <?PHP wp_head(); ?>
</head>

<body <?php body_class()?>>

    <header>
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
    <h1>test:色々書き換え</h1>
    <p>wp_head()関数を使っているのでtitleタグの自動出力できている</p>
    <section>
        <h2>投稿記事</h2>
        <!--記事一覧表示-->
        <?php if(have_posts()):?>
        <ul>
            <?php while(have_posts()) :?>
            <?php the_post();?>
            <li>
                <!--投稿日　echo get_the_date()  -->
                <time dateitme="<?php echo get_the_date(DATE_W3C);?>"><?php echo get_the_date();?></time>
                <!--サムネイル-->
                <?php if(has_post_thumbnail()):?>
                <p class="thumb thumb-archive">
                    <!--個別ページへのリンク部分 the_permalink() -->
                    <a href="<?php the_permalink();?>">
                        <?php the_post_thumbnail('easiestwp-thumbnail');?>
                    </a>
                </p>
                <?php endif;?>
                <p>
                    <!-- カテゴリー the_category() -->
                    <!-- the_category()関数は 初期設定では区切り文字が指定されていないため、第一引数にカンマと半角スペースを区切り文字として指定する-->
                    <?php the_category(', ');?>
                </p>
                <h3>
                    <a href="<?php the_permalink();?>">
                        <!--記事タイトル the_title() -->
                        <?php the_title();?>
                    </a>
                </h3>
                <!-- タグ名 the_tags() -->
                <!-- 初期設定で複数のタグがある場合でもカンマと半角スペースで区切って表示される -->
                <p>
                    <?php the_tags();?>
                </p>

            </li>
            <?php endwhile;?>
        </ul>
        <?php else:?>
        <p>記事がありません。</p>
        <?php endif;?>
    </section>


    <nav>
        <!--ページネーション送り用 配列 -->
        <!-- 矢印の画像で表示させる -->
        <?php
                    $prev_img = '<img class="arrow" src = "' 
                        . get_theme_file_uri() 
                        . '/images/arrow-left.png" "srcset="' 
                        . get_theme_file_uri() 
                        . '/images/arrow-left@2x.png 2x" alt="前へ">';
                    $next_img = '<img class="arrow" src = "' 
                        . get_theme_file_uri() 
                        . '/images/arrow-right.png" "srcset="' 
                        . get_theme_file_uri() 
                        . '/images/arrow-right@2x.png 2x" alt="前へ">';

                    $pagenation_array = array('prev_text'=>$prev_img,'next_text'=>$next_img);
                    

                    $kamlog->debug(get_the_posts_pagination());
        
                    //ページネーション the_posts_pagination()
                    $pagination = get_the_posts_pagination($pagenation_array);
                    echo $pagination;
                    ?>
    </nav>



    <!--wp_footer()をbodyタグの直前に追記-->
    <?php //wp_footer()?>
</body>

</html>
