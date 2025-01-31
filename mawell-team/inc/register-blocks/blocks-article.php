<?php
/** Init HERO blocks */
add_action( 'acf/init', 'acf_blocks_init_article' );
function acf_blocks_init_article(): void {
	if ( function_exists( 'acf_register_block_type' ) ) {
		/** ==============================
		 * Service offering
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'article-1',
			'title'           => 'Service offering',
			'description'     => 'Hero section 1.',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/article/service-offering.php',
//			'enqueue_style'   => get_template_directory_uri() . '/blocks/service-offering/service-offering.css',
		) );
	}
}
