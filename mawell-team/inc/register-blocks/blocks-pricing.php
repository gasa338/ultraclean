<?php
/** Init HERO blocks */
add_action( 'acf/init', 'acf_blocks_init_pricing' );
function acf_blocks_init_pricing(): void {
	if ( function_exists( 'acf_register_block_type' ) ) {
		/** ==============================
		 * Pricing agency 2
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'pricing-agency-2',
			'title'           => 'Pricing agency 2',
			'description'     => 'Hero section 1.',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/pricing/pricing-agency-2/pricing-agency-2.php',
		) );

		/** ==============================
		 * Pricing Hosting
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'pricing-hosting',
			'title'           => 'Pricing Hosting',
			'description'     => 'Hero section 1.',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'example'         => array(
				'attributes' => array(
					'mode' => 'preview',
					'data' => array(
						'testimonial' => "Blocks are...",
						'author'      => "Jane Smith",
						'role'        => "Person",
						'is_preview'  => true
					)
				)
			),
			'render_template' => 'blocks/pricing/pricing-hosting/pricing-hosting.php',
		) );

		/** ==============================
		 * Pricing Hosting
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'pricing-single',
			'title'           => 'Pricing Single',
			'description'     => 'Hero section 1.',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'example'         => array(
				'attributes' => array(
					'mode' => 'preview',
					'data' => array(
						'testimonial' => "Blocks are...",
						'author'      => "Jane Smith",
						'role'        => "Person",
						'is_preview'  => true
					)
				)
			),
			'render_template' => 'blocks/pricing/pricing-single/pricing-single.php',
		) );
	}
}
