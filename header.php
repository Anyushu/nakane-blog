<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<?php wp_head(); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-146901112-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-146901112-2');
</script>
</head>
<body class="drawer drawer--right">
<!-- ヘッダー -->
<header id="header">
<div class="wrap relative">
<h1 class="txt-c d-i-block">
<a href="<?php echo $home; ?>"><img src="<?php echo $wp_url; ?>/lib/images/logo.svg" alt="<?php bloginfo('name'); ?>"><span>BLOG</span></a>
</h1>
<div class="head-sns abs-cr">
<ul class="color-primary pc-only">
<?php
$now_link = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$now_title = get_the_title();
if (has_post_thumbnail()) {
    $i_l = get_the_post_thumbnail_url(get_the_ID(), 'full');
} else {
    $i_l = $wp_url.'/lib/images/no-img.png';
}
?>
<li class="mr-1"><a href="https://www.facebook.com/sharer.php?src=bm&u=<?php echo $now_link; ?>&t=<?php echo $now_title; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
<li class="mr-1"><a href="https://twitter.com/intent/tweet?url=<?php echo $now_link; ?>&text=<?php echo $now_title; ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
<li><a href="http://www.pinterest.com/pin/create/button/?url=<?php echo $now_link; ?>&media=<?php echo $i_l; ?>&description=" target="_blank"><i class="fab fa-pinterest"></i></a></li>
</ul>
</div>
<?php
if (!is_home() && !is_front_page()) {
    get_search_form();
}
?>
<button type="button" class="sp-only drawer-toggle drawer-hamburger">
<span class="drawer-hamburger-icon"></span>
</button>
<nav class="sp-only sp-mneu drawer-nav bg-sky color-white bg-primary" role="navigation">
<ul class="drawer-menu">
<li class="mb-2"><a href="https://www.nakanecleaninglabo.com/" target="_blank" class="btn-2">中根クリーニングへのご依頼はこちら</a></li>
<?php
$args = [
  'orderby' => 'ID',
  'order' => 'ASC',
  'hide_empty' => 0,
];
$categories = get_categories($args);
foreach ($categories as $kye => $category) { ?>
<li class="cat-link">
<a class="drawer-menu-item" href="<?php echo get_category_link($category->term_id); ?>">
<?php echo $category->name; ?>
</a>
</li>
<?php } ?>
<li class="drawer-menu-item"><hr></li>
<li class="drawer-menu-item mt-2"><?php wp_nav_menu(['theme_location' => 'footer-menu']); ?></li>
<li><ul class="nav-sns txt-c color-white">
<?php
$now_link = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$now_title = get_the_title();
if (has_post_thumbnail()) {
    $i_l = get_the_post_thumbnail_url(get_the_ID(), 'full');
} else {
    $i_l = $wp_url.'/lib/images/no-img.png';
}
?>
<li class="mr-1 d-i-block"><a href="https://www.facebook.com/sharer.php?src=bm&u=<?php echo $now_link; ?>&t=<?php echo $now_title; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
<li class="mr-1 d-i-block"><a href="https://twitter.com/intent/tweet?url=<?php echo $now_link; ?>&text=<?php echo $now_title; ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
<li class="d-i-block"><a href="http://www.pinterest.com/pin/create/button/?url=<?php echo $now_link; ?>&media=<?php echo $i_l; ?>&description=" target="_blank"><i class="fab fa-pinterest"></i></a></li>
</ul></li>
</ul>
</nav>
</div>
</header>
<!-- ヘッダー終了 -->
<div class="pc-only"><?php get_template_part('menu'); ?></div>
<?php
if (!is_home() && !is_front_page()) {
    if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
    }
}
?>
<!-- メインコンテンツ -->
<main>