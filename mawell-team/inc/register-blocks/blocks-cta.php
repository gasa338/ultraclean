<?php
/** Init HERO blocks */
add_action( 'acf/init', 'acf_blocks_init_cta' );
function acf_blocks_init_cta(): void {
	if ( function_exists( 'acf_register_block_type' ) ) {
		/** ==============================
		 * CTA Marketing 3
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'cta-marketing-3',
			'title'           => 'CTA Marketing 3',
			'description'     => 'ovo je section4 iz marketing 3',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/cta/cta-marketing-3/cta-marketing-3.php',
		) );

		/** ==============================
		 * CTA Portfolio
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'cta-portfolio',
			'title'           => 'CTA Portfolio',
			'description'     => 'ovo je section3',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/cta/cta-portfolio/cta-portfolio.php',
		) );

		/** ==============================
		 * CTA Portfolio 2
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'cta-portfolio-2',
			'title'           => 'CTA Portfolio 2',
			'description'     => 'ovo je section2',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/cta/cta-portfolio-2/cta-portfolio-2.php',
		) );
	}
}
