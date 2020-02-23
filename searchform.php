<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/')); ?>">
<div class="search-form">
<input id="s" type="text" value="<?php echo get_search_query(); ?>" name="s" placeholder="キーワードで検索する">
<span id="search-sbmit" class="bg-primary relative"><i class="fas fa-search color-white abs-c"></i></span>
</div>
</form>
