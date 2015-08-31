<?php
/**
 * This template loads in the WordPress Dashboard, but produces an error any
 * time it is loaded by someone without the permissions to "Edit Theme Options"
 */

if (current_user_can('edit_theme_options')) {
	template_part($theme->layout_sub_path.'/theme-options');
} else {
	echo 'You do not have permission to edit theme options.';
}
