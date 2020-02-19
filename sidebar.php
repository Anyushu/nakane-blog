<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
?>
<aside id="sidebar">
<?php if (is_active_sidebar('side-bar')) {
    dynamic_sidebar('side-bar');
} ?>
</aside>
