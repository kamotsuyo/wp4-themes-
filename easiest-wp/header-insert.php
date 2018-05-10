<?PHP $require_js = get_theme_file_uri() . '/js/require.js'; ?>
<?PHP $main_js=get_theme_file_uri() . '/js/main.js'; ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script data-main="<?PHP echo $main_js ?>" src="<?PHP echo $require_js?>"></script>
<!--スタイルシート-->
<link rel="stylesheet" id="default" href="<?PHP echo(get_stylesheet_uri()); ?>" media="all">
