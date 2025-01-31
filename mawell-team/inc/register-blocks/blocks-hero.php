<?php
/** Init HERO blocks */
add_action( 'acf/init', 'acf_blocks_init_hero' );
function acf_blocks_init_hero(): void {
	if ( function_exists( 'acf_register_block_type' ) ) {

		/** ==============================
		 * Hero Agency 1
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'hero-agency-1',
			'title'           => 'Hero Agency 1',
			'description'     => 'Hero section 1.',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/hero/hero-agency-1/hero-agency-1.php',
		) );


		/** ==============================
		 * Hero Agency 2
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'hero-agency-2',
			'title'           => 'Hero Agency 2',
			'description'     => 'Hero section 1.',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/hero/hero-agency-2/hero-agency-2.php',
		) );


		/** ==============================
		 * Hero Charity
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'hero-charity',
			'title'           => 'Hero  Charity',
			'description'     => 'Hero section 1.',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/hero/hero-charity/hero-charity.php',
		) );


		/** ==============================
		 * Hero Company
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'hero-company',
			'title'           => 'Hero Company',
			'description'     => 'Hero section 1.',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/hero/hero-company/hero-company.php',
		) );


		/** ==============================
		 * Hero Creative
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'hero-creative',
			'title'           => 'Hero Creative',
			'description'     => 'Hero section 1.',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/hero/hero-creative/hero-creative.php',
		) );


		/** ==============================
		 * Hero Creative
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'hero-ebook',
			'title'           => 'Hero eBook',
			'description'     => 'Hero section 1.',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/hero/hero-ebook/hero-ebook.php',
		) );


		/** ==============================
		 * Hero Creative
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'hero-finance',
			'title'           => 'Hero Finance',
			'description'     => 'Hero section 1.',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/hero/hero-finance/hero-finance.php',
		) );


		/** ==============================
		 * Hero Creative
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'hero-hosting',
			'title'           => 'Hero Hosting',
			'description'     => 'Hero section 1.',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/hero/hero-hosting/hero-hosting.php',
		) );


		/** ==============================
		 * Hero Creative
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'hero-marketing',
			'title'           => 'Hero Marketing',
			'description'     => 'Hero section 1.',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/hero/hero-marketing/hero-marketing.php',
		) );


		/** ==============================
		 * Hero Creative
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'hero-marketing-2',
			'title'           => 'Hero Marketing 2',
			'description'     => 'Hero Marketing 2',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/hero/hero-marketing-2/hero-marketing-2.php',
		) );


		/** ==============================
		 * Hero photography
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'hero-photography',
			'title'           => 'Hero Photography',
			'description'     => 'Hero Photography',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/hero/hero-photography/hero-photography.php',
		) );


		/** ==============================
		 * Hero portfolio
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'hero-portfolio',
			'title'           => 'Hero portfolio',
			'description'     => 'Hero portfolio',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/hero/hero-portfolio/hero-portfolio.php',
		) );


		/** ==============================
		 * Hero portfolio 2
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'hero-portfolio-2',
			'title'           => 'Hero portfolio 2',
			'description'     => 'Hero portfolio 2',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/hero/hero-portfolio-2/hero-portfolio-2.php',
		) );


		/** ==============================
		 * Hero Startup
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'hero-startup',
			'title'           => 'Hero Startup',
			'description'     => 'Hero Startup',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/hero/hero-startup/hero-startup.php',
		) );


		/** ==============================
		 * Hero web-designer
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'hero-web-designer',
			'title'           => 'Hero Web Designer',
			'description'     => 'Hero Web Designer',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/hero/hero-web-designer/hero-web-designer.php',
		) );
	}
}
