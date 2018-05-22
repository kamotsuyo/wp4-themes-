<?PHP get_header(); ?>
<!--記事内容 ループで記述　と書籍サンプルには書いているがなくても動作する様子-->
<!-- simplicity2にも記述してあるので whileループは書いておく。-->
<?PHP while(have_posts()):the_post(); ?>
<?PHP if(has_post_thumbnail()): ?>
<div>
    <?PHP the_post_thumbnail('easiestwp-hero'); ?>
</div>
<?PHP endif; ?>
<h1>
    <?PHP the_title(); ?>
</h1>
<article>
    <?PHP the_content(); ?>
</article>
<div>
    <time><?PHP echo get_the_date() .'  '.get_the_time(); ?></time>
    <p id="the_author_posts_link">
        <?PHP the_author_posts_link(); ?>
    </p>
    <p id="the_category">
        <?PHP the_category(', '); ?>
    </p>
    <p id="the_tags">
        <?PHP the_tags(); ?>
    </p>

</div>
<div id="the_post_navigation">
    <!--前後への投稿のリンク-->
    <?PHP the_post_navigation(array('prev_text'=>'前の記事:%title','next_text'=>'次の記事:%title')); ?>
</div>

<?PHP endwhile; ?>
<?PHP get_sidebar(); ?>
<?PHP get_footer(); ?>
