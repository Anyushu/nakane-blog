<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
</main>
<!-- メインコンテンツ終了 -->
<!-- フッター -->
<footer id="footer" class="sec">
<div class="wrap">
<h2 class="txt-c"><a href="<?php echo $home; ?>"><img src="<?php echo $wp_url; ?>/lib/images/logo.svg" alt="<?php bloginfo('name'); ?>"></a></h2>
<div class="txt-c foot-link">
<?php wp_nav_menu(['theme_location' => 'footer-menu']); ?>
</div>
</div>
</footer>
<p class="m-0 txt-c foot-copy"><small>©<?php echo date('Y'); ?> <a href="<?php echo $home; ?>"><?php bloginfo('name'); ?></a></small></p>
<!-- フッター終了 -->
<?php wp_footer(); ?>
</body>
</html>