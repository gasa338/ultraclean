<?php
/** Init HERO blocks */
add_action( 'acf/init', 'acf_blocks_init_logo_cloud' );
function acf_blocks_init_logo_cloud(): void {
	if ( function_exists( 'acf_register_block_type' ) ) {
		/** ==============================
		 * Logo Cloud 1
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'logo-cloud-1',
			'title'           => 'Logo Cloud 1',
			'description'     => 'From company template',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/logo_cloud/logo-cloud-1/logo-cloud-1.php',
		) );

		/** ==============================
		 * Logo Cloud 1
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'logo-brands-hosting',
			'title'           => 'Logo Brands Hosting',
			'description'     => 'From hosting template',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/logo_cloud/logo-brands-hosting/logo-brands-hosting.php',
		) );

		/** ==============================
		 * Logo portfolio od section
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'logo-portfolio',
			'title'           => 'Logo Portfolio',
			'description'     => 'ovo je section.php',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/logo_cloud/logo-portfolio/logo-portfolio.php',
		) );
	}
}
