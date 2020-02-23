<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
</main>
<!-- メインコンテンツ終了 -->

<section class="common-bg-campaign sec">
<div class="wrap relative">
<div class="content_area common-box-campaign">
<div class="ft-campaign-about">
<h2 class="ttl-ft-campaign01">何も言わなくても『あ、うん。』全てお任せ中根クリーニングLabo</h2>
<p>お品物毎に最適な高品質クリーニング。面倒なオプション加工やメンテナンスの選択も全て全てお任せ。全て無料。</p>
<div class="btn-campaign"><a href="https://www.nakanecleaninglabo.com/" target="blank">中根の宅配クリーニングを詳しく見る。</a></div>
</div>
<div class="common-campaign-phone">
<img src="<?php echo $wp_url; ?>/lib/images/cta.png" alt="中根クリーニングLabo">
</div>
</div>
</div>
</section>

<!-- フッター -->
<footer id="footer" class="sec bg-primary">
<div class="wrap">
<h2 class="txt-c"><a href="<?php echo $home; ?>"><img src="<?php echo $wp_url; ?>/lib/images/logo_white.png" alt="<?php bloginfo('name'); ?>"><span class="color-white">中根クリーニングLabo BLOG</span></a></h2>
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