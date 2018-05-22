<!-- パスワードを必要とする投稿ではコメントテンプレートを表示しない-->
<?PHP if(post_password_required()){
    return;
} ?>
<?PHP if(have_comments()): ?>
<div>
    <h2>コメントとトラックバック</h2>
    <ul>
        <?PHP wp_list_comments(); ?>
    </ul>
</div>
<?PHP endif; ?>
<?PHP if(comments_open()): ?>
<div>
    <?PHP comment_form(); ?>
</div>
<?PHP endif;
