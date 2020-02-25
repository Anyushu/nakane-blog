<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
?>
<aside id="sidebar">
<?php if (is_active_sidebar('side-bar')) {
    dynamic_sidebar('side-bar');
} ?>
<div class="inner">
<h3>人気記事ランキング</h3>
<ul class="popular-posts">
<?php
$no = 1;
$args = get_popular_args('weekly', '5');
query_posts($args);
while (have_posts()): the_post();
$p = get_the_permalink();
$t = get_the_title();
$time = get_the_time('Y-m-d');
if (has_post_thumbnail()) {
    $i = get_the_post_thumbnail_url(get_the_ID(), 'medium');
} else {
    $i = $wp_url.'/lib/images/no-img.png';
}
?>
<li>
<a href="<?php echo $p; ?>">
<img src="<?php echo $i; ?>" alt="<?php echo $t; ?>">
<div class="txt">
<p class="color-gold"><span>No.<?php echo $no; ?></span></p>
<h4><?php echo $t; ?></h4>
</div>
</a>
</li>
<?php $no++; endwhile; wp_reset_query(); ?>
</ul>
</div>

<div class="inner">
<h3>注目のキーワード</h3>
<ul class="tag-list">
<?php
$args = [
  'orderby' => 'count',
  'order' => 'DESC',
  'number' => 10,
];
$tags = get_tags($args);
foreach ($tags as $key => $tag): ?>
<li><a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a></li>
<?php endforeach; ?>
</ul>
</div>

</aside>
