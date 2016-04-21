<?php
/**
 * Custom CSS for wp_head
 */
function zsonline_custom_css() {
	
	$header_hero = get_theme_mod('background_img_intro');
	
?>
<style>
	header.hero{
		background-image: url(<?php echo esc_html($header_hero)?>);
	}

</style>
<?php
}

add_action('wp_head', 'zsonline_custom_css');

?>
