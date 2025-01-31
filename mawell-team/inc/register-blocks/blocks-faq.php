<?php
/** Init FAQ blocks */
add_action( 'acf/init', 'acf_blocks_init_faq' );
function acf_blocks_init_faq(): void {
	if ( function_exists( 'acf_register_block_type' ) ) {
		/** ==============================
		 * Faq agency 2
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'faq-agency-2',
			'title'           => 'Faq agency 2',
			'description'     => 'Faq agency 2',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/faq/faq-agency-2/faq-agency-2.php',
		) );

        /** ==============================
         * Faq Agency 1
         * ============================== */
        acf_register_block_type( array(
            'name'            => 'faq-agency-1',
            'title'           => 'Faq Agency 1',
            'description'     => 'Faq section 1.',
            'category'        => 'custom_theme',
            'mode'            => 'preview',
            'supports'        => array(
                'align' => true,
                'mode'  => false,
                'jsx'   => true,
            ),
            'render_template' => 'blocks/faq/faq-agency-1/faq-agency-1.php',
        ) );

        /** ==============================
         * Faq Company
         * ============================== */
        acf_register_block_type( array(
            'name'            => 'faq-company',
            'title'           => 'Faq Company',
            'description'     => 'Faq Company',
            'category'        => 'custom_theme',
            'mode'            => 'preview',
            'supports'        => array(
                'align' => true,
                'mode'  => false,
                'jsx'   => true,
            ),
            'render_template' => 'blocks/faq/faq-Company/faq-Company.php',
        ) );

        /** ==============================
         * Faq Creative
         * ============================== */
        acf_register_block_type( array(
            'name'            => 'faq-creative',
            'title'           => 'Faq Creative',
            'description'     => 'Faq Company',
            'category'        => 'custom_theme',
            'mode'            => 'preview',
            'supports'        => array(
                'align' => true,
                'mode'  => false,
                'jsx'   => true,
            ),
            'render_template' => 'blocks/faq/faq-creative/faq-creative.php',
        ) );

        /** ==============================
         * Faq Creative
         * ============================== */
        acf_register_block_type( array(
            'name'            => 'faq-hosting',
            'title'           => 'Faq Hosting',
            'description'     => 'Faq Hosting',
            'category'        => 'custom_theme',
            'mode'            => 'preview',
            'supports'        => array(
                'align' => true,
                'mode'  => false,
                'jsx'   => true,
            ),
            'render_template' => 'blocks/faq/faq-hosting/faq-hosting.php',
        ) );

        /** ==============================
         * Faq Marketing
         * ============================== */
        acf_register_block_type( array(
            'name'            => 'faq-marketing',
            'title'           => 'Faq Marketing',
            'description'     => 'Faq Hosting',
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
            'render_template' => 'blocks/faq/faq-marketing/faq-marketing.php',
        ) );

        /** ==============================
         * Faq Photography
         * ============================== */
        acf_register_block_type( array(
            'name'            => 'faq-photography',
            'title'           => 'Faq Photography',
            'description'     => 'Faq Photography',
            'category'        => 'custom_theme',
            'mode'            => 'preview',
            'supports'        => array(
                'align' => true,
                'mode'  => false,
                'jsx'   => true,
            ),
            'render_template' => 'blocks/faq/faq-photography/faq-photography.php',
        ) );

        /** ==============================
         * Faq Portfolio
         * ============================== */
        acf_register_block_type( array(
            'name'            => 'faq-portfolio',
            'title'           => 'Faq Portfolio',
            'description'     => 'Faq Portfolio',
            'category'        => 'custom_theme',
            'mode'            => 'preview',
            'supports'        => array(
                'align' => true,
                'mode'  => false,
                'jsx'   => true,
            ),
            'render_template' => 'blocks/faq/faq-portfolio/faq-portfolio.php',
        ) );

        /** ==============================
         * Faq web-designer
         * ============================== */
        acf_register_block_type( array(
            'name'            => 'faq-web-designer',
            'title'           => 'Faq Web Designer',
            'description'     => 'Faq web-designer',
            'category'        => 'custom_theme',
            'mode'            => 'preview',
            'supports'        => array(
                'align' => true,
                'mode'  => false,
                'jsx'   => true,
            ),
            'render_template' => 'blocks/faq/faq-web-designer/faq-web-designer.php',
        ) );
	}
}













