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
</head>
<body class="drawer drawer--right">
<!-- ヘッダー -->
<header id="header">
<div class="wrap relative">
<h1 class="txt-c d-i-block">
<a href="<?php echo $home; ?>">
<img src="<?php echo $wp_url; ?>/lib/images/logo.svg" alt="<?php bloginfo('name'); ?>">
</a>
</h1>
<div class="head-sns abs-cr">
<ul class="color-primary pc-only">
<li class="mr-1"><a href="https://twitter.com/sentakunote" target="_blank"><i class="fab fa-twitter"></i></a></li>
<li class="mr-1"><a href="https://www.instagram.com/sentakunote/" target="_blank"><i class="fab fa-instagram"></i></a></li>
<li><a href="https://www.youtube.com/channel/UCbR9BM2mH_KN_h7tainxYCg" target="_blank"><i class="fab fa-youtube"></i></a></li>
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
<li class="drawer-menu-item mt-2"><a class="drawer-menu-item" href="<?php echo $home; ?>">トップ</a></li>
<li class="drawer-menu-item"><a class="drawer-menu-item" href="<?php echo $home; ?>/site-map/">サイトマップ</a></li>
<li class="drawer-menu-item"><a class="drawer-menu-item" href="<?php echo $home; ?>/privacy-policy/">プライバシーポリシー</a></li>
<li><ul class="nav-sns txt-c color-white">
<li class="mr-1 d-i-block"><a href="https://twitter.com/sentakunote" target="_blank"><i class="fab fa-twitter"></i></a></li>
<li class="mr-1 d-i-block"><a href="https://www.instagram.com/sentakunote/" target="_blank"><i class="fab fa-instagram"></i></a></li>
<li class="d-i-block"><a href="https://www.youtube.com/channel/UCbR9BM2mH_KN_h7tainxYCg" target="_blank"><i class="fab fa-youtube"></i></a></li>
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