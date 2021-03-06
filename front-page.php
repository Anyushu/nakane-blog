<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section id="mv" class="sec">
<div class="wrap">
<div class="inner">
<h2 class="mincho w-normal">中根クリーニングLaboBLOG</h2>
<?php get_search_form(); ?>
<div class="search-tag mt-2">
<span class="mr-1">HOT WORD</span>
<?php
$args = [
  'orderby' => 'count',
  'order' => 'DESC',
  'number' => 4,
];
$tags = get_tags($args);
foreach ($tags as $key => $tag): ?>
<a href="<?php echo get_tag_link($tag->term_id); ?>" class="hot-word"><?php echo $tag->name; ?></a>
<?php endforeach; ?>
</div>
</div>
</div>
</section>

<section id="new-posts" class="sec">
<div class="wrap">
<h2 class="ttl2 txt-c"><span class="color-primary d-block">新着記事</span><span>RECENT POSTS</span></h2>
<ul class="post-list mb-2">
<?php
$args = [
  'posts_per_page' => 12,
  'orderby' => 'date',
  'order' => 'DESC'
];
query_posts($args);
while (have_posts()): the_post();
$p = get_the_permalink();
$t = get_the_title();
$time = get_the_time('Y-m-d');
if (has_post_thumbnail()) {
    $i = get_the_post_thumbnail_url(get_the_ID(), 'large');
    $i_l = get_the_post_thumbnail_url(get_the_ID(), 'full');
} else {
    $i = $wp_url.'/lib/images/no-img.png';
    $i_l = $wp_url.'/lib/images/no-img.png';
}
$category = get_the_category();
?>
<li>
<a href="<?php echo $p; ?>">
<div class="post-thumbnail">
<img src="<?php echo $i; ?>" srcset="<?php echo $i; ?> 1x,<?php echo $i_l; ?> 2x" alt="<?php echo $t; ?>">
</div>
<div class="txt">
<?php
$posttags = get_the_tags();
if ($posttags):
foreach ($posttags as $tag): ?>
<span class="d-i-block color-white bg-primary"><?php echo $tag->name; ?></span>
<?php endforeach; endif ?>
<h3><?php echo $t; ?></h3>
<div class="meta">
<time datetime="<?php echo $time; ?>"><?php echo $time; ?></time>
</div>
</div>
</a>
</li>
<?php endwhile; wp_reset_query(); ?>
</ul>
<div class="txt-c">
<a href="<?php echo $home; ?>/new-post/" class="btn">すべての記事を見る</a>
</div>
</div>
</section>

<section id="ranking" class="sec bg-gray-a">
<div class="wrap">
<h2 class="ttl2"><span class="color-primary d-block">人気記事ランキング</span><span>RANKING</span></h2>
<ul class="post-list ranking-list">
<?php
$no = 1;
$args = get_popular_args('weekly', '4');
query_posts($args);
while (have_posts()): the_post();
$p = get_the_permalink();
$t = get_the_title();
$time = get_the_time('Y-m-d');
if (has_post_thumbnail()) {
    $i = get_the_post_thumbnail_url(get_the_ID(), 'large');
    $i_l = get_the_post_thumbnail_url(get_the_ID(), 'full');
} else {
    $i = $wp_url.'/lib/images/no-img.png';
    $i_l = $wp_url.'/lib/images/no-img.png';
}
$category = get_the_category();
?>
<li class="mb-0">
<span class="txt-c">0<?php echo $no; ?></span>
<a href="<?php echo $p; ?>">
<div class="post-thumbnail">
<img src="<?php echo $i; ?>" srcset="<?php echo $i; ?> 1x,<?php echo $i_l; ?> 2x" alt="<?php echo $t; ?>">
</div>
<div class="txt">
<?php
$posttags = get_the_tags();
if ($posttags):
foreach ($posttags as $tag): ?>
<span class="d-i-block color-white bg-primary"><?php echo $tag->name; ?></span>
<?php endforeach; endif ?>
<h3><?php echo $t; ?></h3>
</div>
</a>
</li>
<?php $no++; endwhile; wp_reset_query(); ?>
</ul>
</div>
</section>
<section id="keyword" class="sec">
<div class="wrap">
<h2 class="ttl2 txt-c"><span class="color-primary d-block">KEYWORD</span>話題のキーワード</h2>
<ul class="txt-c tag-list">
<?php
$args = array(
  'orderby' => 'id',
  'order' => 'DESC',
  'number' => 20,
);
$tags_array = get_tags($args);
foreach ($tags_array as $key => $tag):
$tag_name = $tag->name;
$tag_slug = $tag->slug;
?>
<li class="mb-05"><a href="<?php echo $home.'/tag/'.$tag_slug; ?>" class=""><?php echo $tag_name; ?></a></li>
<?php endforeach; ?>
</ul>
</div>
</section>
<?php get_footer();
