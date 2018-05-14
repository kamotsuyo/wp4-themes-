<!-- charset bloginfo関数で取得 -->
<meta charset="<?PHP bloginfo('charset'); ?>">
<!-- viewport -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- javascript -->
<?PHP $require_js_uri = get_theme_file_uri() . '/js/require.js'; ?>
<?PHP $main_js_uri=get_theme_file_uri() . '/js/main.js'; ?>
<script data-main="<?PHP echo $main_js_uri ?>" src="<?PHP echo $require_js_uri?>"></script>
<!--スタイルシート-->
<link rel="stylesheet" id="default-style" href="<?PHP echo(get_stylesheet_uri()); ?>" media="all">

<!--問題は wp_head関数を使わないと titleタグの生成が自動で行われないことだ。 -->
