<?php
/** Init HERO blocks */
add_action( 'acf/init', 'acf_blocks_init_temp' );
function acf_blocks_init_temp(): void {
	if ( function_exists( 'acf_register_block_type' ) ) {
		/** ==============================
		 * Step Marketing 2
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'developer-temp-block',
			'title'           => 'Developer temp block',
			'description'     => 'Step Marketing 2',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/developer-temp-block/developer-temp-block/developer-temp-block.php',
		) );
	}
}
