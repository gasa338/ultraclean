<?php
/* Template Name: Blocks LIst */

get_header();
if (is_user_logged_in()):
// Instantiate the class
$block_finder = new Maxwell_Block_Finder();
$block_finder->get_blocks_html();

endif;

get_footer();