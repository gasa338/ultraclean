<?php
/** Init HERO blocks */
add_action( 'acf/init', 'acf_blocks_init_steps' );
function acf_blocks_init_steps(): void {
	if ( function_exists( 'acf_register_block_type' ) ) {
		/** ==============================
		 * Step Marketing 2
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'step-marketing-2',
			'title'           => 'Step Marketing 2',
			'description'     => 'Step Marketing 2',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/steps/step-marketing-2/step-marketing-2.php',
		) );
	}
}
