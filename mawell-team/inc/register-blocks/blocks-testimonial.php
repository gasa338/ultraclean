<?php
/** Init HERO blocks */
add_action( 'acf/init', 'acf_blocks_init_testimonial' );
function acf_blocks_init_testimonial(): void {
	if ( function_exists( 'acf_register_block_type' ) ) {
		/** ==============================
		 * Testimonial agency 2
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'testimonial-agency-2',
			'title'           => 'Testimonial agency 2',
			'description'     => 'This is start section from agency 2 template',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/testimonial/testimonial-agency-2/testimonial-agency-2.php',
		) );

		/** ==============================
		 * Testimonials Charity
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'testimonials-charity',
			'title'           => 'Testimonials Charity',
			'description'     => 'This is start section from agency 2 template',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/testimonial/testimonials-charity/testimonials-charity.php',
		) );

		/** ==============================
		 * Testimonial Company
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'testimonial-company',
			'title'           => 'Testimonial Company',
			'description'     => 'This is start section from agency 2 template',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/testimonial/testimonial-company/testimonial-company.php',
		) );

		/** ==============================
		 * Testimonial Creative
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'testimonial-creative',
			'title'           => 'Testimonial Creative',
			'description'     => 'This is start section from agency 2 template',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/testimonial/testimonial-creative/testimonial-creative.php',
		) );

		/** ==============================
		 * Testimonial eBook
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'testimonial-ebook',
			'title'           => 'Testimonial eBook',
			'description'     => 'This is start section from agency 2 template',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/testimonial/testimonial-ebook/testimonial-ebook.php',
		) );

		/** ==============================
		 * Testimonial Expert Finance
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'testimonial-expert-finance',
			'title'           => 'Testimonial Expert Finance',
			'description'     => 'ovo je from experts.php',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/testimonial/testimonial-expert-finance/testimonial-expert-finance.php',
		) );

		/** ==============================
		 * Testimonial Hosting
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'testimonial-hosting',
			'title'           => 'Testimonial Hosting',
			'description'     => 'ovo je from experts.php',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/testimonial/testimonial-hosting/testimonial-hosting.php',
		) );

		/** ==============================
		 * Testimonial Marketing
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'testimonial-marketing',
			'title'           => 'Testimonial Marketing',
			'description'     => 'ovo je from experts.php',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/testimonial/testimonial-marketing/testimonial-marketing.php',
		) );

		/** ==============================
		 * Testimonial Marketing 2
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'testimonial-marketing-2',
			'title'           => 'Testimonial Marketing 2',
			'description'     => 'Testimonial Marketing 2',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/testimonial/testimonial-marketing-2/testimonial-marketing-2.php',
		) );

		/** ==============================
		 * Testimonial Portfolio
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'testimonial-portfolio',
			'title'           => 'Testimonial Portfolio',
			'description'     => 'Testimonial Portfolio',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/testimonial/testimonial-portfolio/testimonial-portfolio.php',
		) );

		/** ==============================
		 * Testimonial Portfolio 2
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'testimonial-portfolio-2',
			'title'           => 'Testimonial Portfolio 2',
			'description'     => 'Testimonial Portfolio 2',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/testimonial/testimonial-portfolio-2/testimonial-portfolio-2.php',
		) );

		/** ==============================
		 * Testimonial Startup
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'testimonial-startup',
			'title'           => 'Testimonial Startup',
			'description'     => 'Testimonial Startup',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/testimonial/testimonial-startup/testimonial-startup.php',
		) );
	}
}
