<!--headerテンプレートの読み込み-->
<?PHP get_header(); ?>
<h1>
    master</h1>
<h2>履歴</h2>
<p>wp_enqueue_scriptのテストmasterにPull Request</p>
<p>Pull RequestをGitHubのウェブサイトでMarge承認した</p>
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
    <!--
        **
        * get_the_posts_pagination関数を使用して
        * ページネーションを作成する
        *
        -->
    <!--以下のダブルコート文字列内で変数展開させるために定義しておく-->
    <?PHP $uri = get_theme_file_uri(); ?>
    <!-- 矢印の画像で表示させるための画像img -->
    <?PHP $prev_img = "<img class = \"arrow\" src = \" $uri/images/arrow-left.png \"srcset = \" $uri/images/arrow-left@2x.png 2x\" alt='前へ' >" ?>
    <?PHP $next_img = "<img class = \"arrow\" src = \" $uri/images/arrow-right.png \"srcset = \" $uri/images/arrow-right@2x.png 2x\" alt='前へ' >" ?>
    <!-- ページネーション送り用の配列を定義-->
    <?php $pagenation_array = array('prev_text'=>$prev_img,'next_text'=>$next_img); ?>
    <!-- 定義した配列を引数にしてget_the_posts_pagination関数を使う-->
    <?PHP $pagination = get_the_posts_pagination($pagenation_array); ?>
    <!-- 定義した関数はechoしないと表示されない-->
    <?PHP echo $pagination; ?>

</nav>
<!-- sidebar.phpを読み込み-->
<?PHP get_sidebar(); ?>

<!-- footer.phpを読み込み-->
<?PHP get_footer(); ?>
