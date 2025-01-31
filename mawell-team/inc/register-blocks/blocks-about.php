<?php
/** Init ABOUT blocks */
add_action( 'acf/init', 'acf_blocks_init_about_agency' );
function acf_blocks_init_about_agency(): void {
	if ( function_exists( 'acf_register_block_type' ) ) {
		/** ==============================
		 * About Agency 1
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'about-agency-1',
			'title'           => 'About Agency 1',
			'description'     => 'About section 1.',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
				'anchor'=> true
			),
			'render_template' => 'blocks/about/about-agency-1/about-agency-1.php',
		) );

		/** ==============================
		 * About eBook
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'about-ebook',
			'title'           => 'About ebook',
			'description'     => 'About ebook',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/about/about-ebook/about-ebook.php',
		) );

		/** ==============================
		 * About Marketing
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'about-marketing',
			'title'           => 'About Marketing',
			'description'     => 'About ebook',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/about/about-marketing/about-marketing.php',
		) );

		/** ==============================
		 * About Marketing 2
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'about-marketing-2',
			'title'           => 'About Marketing 2',
			'description'     => 'About Marketing 2',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/about/about-marketing-2/about-marketing-2.php',
		) );

		/** ==============================
		 * About Photography
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'about-photography',
			'title'           => 'About Photography',
			'description'     => 'About Photography',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/about/about-photography/about-photography.php',
		) );

		/** ==============================
		 * About Portfolio
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'about-portfolio',
			'title'           => 'About Portfolio',
			'description'     => 'About Photography',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/about/about-portfolio/about-portfolio.php',
		) );

		/** ==============================
		 * About Portfolio 2
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'about-portfolio-2',
			'title'           => 'About Portfolio 2',
			'description'     => 'About Portfolio 2',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/about/about-portfolio-2/about-portfolio-2.php',
		) );

		/** ==============================
		 * About Startup
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'about-startup',
			'title'           => 'About Startup',
			'description'     => 'About Startup',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/about/about-startup/about-startup.php',
		) );

		/** ==============================
		 * About webdesigner
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'about-web-designer',
			'title'           => 'About Web designer',
			'description'     => 'About Web designer',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/about/about-web-designer/about-web-designer.php',
		) );
	}
}
