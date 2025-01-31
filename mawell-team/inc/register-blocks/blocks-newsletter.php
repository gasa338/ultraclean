<?php
/** Init ABOUT blocks */
add_action( 'acf/init', 'acf_blocks_init_newsletter' );
function acf_blocks_init_newsletter(): void {
	if ( function_exists( 'acf_register_block_type' ) ) {
		/** ==============================
		 * newsletter
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'newsletter-charity',
			'title'           => 'Newsletter Charity',
			'description'     => 'About section 1.',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/newsletter/newsletter-charity/newsletter-charity.php',
		) );
		/** ==============================
		 * newsletter
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'newsletter-hosting',
			'title'           => 'Newsletter hosting',
			'description'     => 'ovo je section sekcija iz hostinga',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/newsletter/newsletter-hosting/newsletter-hosting.php',
		) );

		/** ==============================
		 * newsletter
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'newsletter-marketing-2',
			'title'           => 'Newsletter Marketing 2',
			'description'     => 'ovo je section sekcija iz marketing 2 action',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/newsletter/newsletter-marketing-2/newsletter-marketing-2.php',
		) );

		/** ==============================
		 * newsletter Startup
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'newsletter-startup',
			'title'           => 'Newsletter Startup',
			'description'     => 'ovo je section2',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/newsletter/newsletter-startup/newsletter-startup.php',
		) );
	}
}
