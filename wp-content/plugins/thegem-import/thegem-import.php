<?php
/*
Plugin Name: TheGem Import
Plugin URI: http://codex-themes.com/thegem/
Author: Codex Themes
Version: 3.9.0
Author URI: http://codex-themes.com/thegem/
*/


add_action('admin_menu', 'thegem_import_submenu_page');
function thegem_import_submenu_page() {
	add_menu_page( 'TheGem Import', 'TheGem Import', 'manage_options', 'thegem-import-submenu-page', 'thegem_import_page', '', 81 );
}

function thegem_import_page() {
?>
<div class="wrap">
	<div id="icon-tools" class="icon32"></div>
	<h2>TheGem Import</h2>
		<div class="thegem-import-prevent-message">
			<p><?php esc_html_e('This version of TheGem Import plugin is obsolete and can be removed.', 'thegem'); ?></p>
			<p><?php esc_html_e('Please install the new version of TheGem Demo Import plugin.', 'thegem'); ?></p>
			<p><a href="<?php echo esc_url(admin_url('admin.php?page=install-required-plugins')); ?>" class="button button-primary"><?php esc_html_e('Install now', 'thegem'); ?></a></p>
		</div>
</div>
<?php
}

function thegem_import_enqueue($hook) {
	if($hook == 'toplevel_page_thegem-import-submenu-page') {
		wp_enqueue_style('thegem-import-css', plugins_url( '/css/ti-styles.css' , __FILE__ ));
	}
}
add_action('admin_enqueue_scripts', 'thegem_import_enqueue');