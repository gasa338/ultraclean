<?php
/** Init HERO blocks */
add_action( 'acf/init', 'acf_blocks_init_blog' );
function acf_blocks_init_blog(): void {
	if ( function_exists( 'acf_register_block_type' ) ) {
		/** ==============================
		 * Blog Agency 1
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'blog-agency-1',
			'title'           => 'Blog Agency 1',
			'description'     => 'Hero section 1.',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/blog/blog-agency-1/blog-agency-1.php',
//			'enqueue_style'   => get_template_directory_uri() . '/blocks/service-offering/service-offering.css',
		) );


		/** ==============================
		 * Blog Agency 2
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'blog-agency-2',
			'title'           => 'Blog Agency 2',
			'description'     => 'Blog Agency 2',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/blog/blog-agency-2/blog-agency-2.php',
//			'enqueue_style'   => get_template_directory_uri() . '/blocks/service-offering/service-offering.css',
            ));

		/** ==============================
		 * blog-charity
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'blog-charity',
			'title'           => 'Blog charity',
			'description'     => 'Blog Agency 2',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/blog/blog-charity/blog-charity.php',
		) );

		/** ==============================
		 * Blog Causes Charity
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'blog-causes-charity',
			'title'           => 'Blog Causes Charity',
			'description'     => 'Blog Agency 2',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/blog/blog-causes-charity/blog-causes-charity.php',
		) );

		/** ==============================
		 * Blog Causes Charity
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'blog-company',
			'title'           => 'Blog Company',
			'description'     => 'Blog Agency 2',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/blog/blog-company/blog-company.php',
		) );

		/** ==============================
		 * Blog Creative
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'blog-creative',
			'title'           => 'Blog Creative',
			'description'     => 'Blog Agency 2',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/blog/blog-creative/blog-creative.php',
		) );

		/** ==============================
		 * Blog Marketing 2
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'blog-marketing-2',
			'title'           => 'Blog Marketing 2',
			'description'     => 'Blog Marketing 2',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/blog/blog-marketing-2/blog-marketing-2.php',
		) );

		/** ==============================
		 * Blog Photography
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'blog-photography',
			'title'           => 'Blog Photography',
			'description'     => 'Blog Photography',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/blog/blog-photography/blog-photography.php',
		) );

		/** ==============================
		 * Blog portfolio
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'blog-portfolio',
			'title'           => 'Blog Portfolio',
			'description'     => 'Blog portfolio',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/blog/blog-portfolio/blog-portfolio.php',
		) );

		/** ==============================
		 * Blog Startup
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'blog-Startup',
			'title'           => 'Blog Startup',
			'description'     => 'Blog Startup',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/blog/blog-Startup/blog-Startup.php',
		) );

		/** ==============================
		 * Blog Web designer
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'blog-web-designer',
			'title'           => 'Blog Web designer',
			'description'     => 'Blog Web designer ili Stories.php',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/blog/blog-web-designer/blog-web-designer.php',
		) );

		/** ==============================
		 * Blog Web designer
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'post-list-development',
			'title'           => 'Post List Development',
			'description'     => 'Kreiranje za homepage da bi izlistao sve stranice',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => '/blocks/function-blocks/post-list-development/post-list-development.php',
		) );
	}
}
