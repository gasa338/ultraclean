<?php
/** Init HERO blocks */
add_action( 'acf/init', 'acf_blocks_init_portfolio' );
function acf_blocks_init_portfolio(): void {
    if ( function_exists( 'acf_register_block_type' ) ) {
        /** ==============================
         * portfolio offering
         * ============================== */
        acf_register_block_type( array(
            'name'            => 'portfolio-agency-2',
            'title'           => 'Portfolio Agency 2',
            'description'     => 'Blog Agency 2',
            'category'        => 'custom_theme',
            'mode'            => 'preview',
            'supports'        => array(
                'align' => true,
                'mode'  => false,
                'jsx'   => true,
            ),
            'render_template' => 'blocks/portfolio/portfolio-agency-2/portfolio-agency-2.php',
        ) );

        /** ==============================
         * Portfolio Marketing 2
         * ============================== */
        acf_register_block_type( array(
            'name'            => 'portfolio-marketing-2',
            'title'           => 'Portfolio Marketing 2',
            'description'     => 'Blog Agency 2',
            'category'        => 'custom_theme',
            'mode'            => 'preview',
            'supports'        => array(
                'align' => true,
                'mode'  => false,
                'jsx'   => true,
            ),
            'render_template' => 'blocks/portfolio/portfolio-marketing-2/portfolio-marketing-2.php',
        ) );

        /** ==============================
         * Portfolio Marketing 2
         * ============================== */
        acf_register_block_type( array(
            'name'            => 'portfolio-marketing-3',
            'title'           => 'Portfolio Marketing 3',
            'description'     => 'Ovo je projects.php',
            'category'        => 'custom_theme',
            'mode'            => 'preview',
            'supports'        => array(
                'align' => true,
                'mode'  => false,
                'jsx'   => true,
            ),
            'render_template' => 'blocks/portfolio/portfolio-marketing-3/portfolio-marketing-3.php',
        ) );

        /** ==============================
         * Portfolio Photography
         * ============================== */
        acf_register_block_type( array(
            'name'            => 'portfolio-photography',
            'title'           => 'Portfolio Photography',
            'description'     => 'Portfolio Photography',
            'category'        => 'custom_theme',
            'mode'            => 'preview',
            'supports'        => array(
                'align' => true,
                'mode'  => false,
                'jsx'   => true,
            ),
            'render_template' => 'blocks/portfolio/portfolio-photography/portfolio-photography.php',
        ) );

        /** ==============================
         * Portfolio Portfolio 2
         * ============================== */
        acf_register_block_type( array(
            'name'            => 'portfolio-portfolio-2',
            'title'           => 'Portfolio Portfolio 2',
            'description'     => 'Portfolio Photography',
            'category'        => 'custom_theme',
            'mode'            => 'preview',
            'supports'        => array(
                'align' => true,
                'mode'  => false,
                'jsx'   => true,
            ),
            'render_template' => 'blocks/portfolio/portfolio-portfolio-2/portfolio-portfolio-2.php',
        ) );

        /** ==============================
         * Portfolio Startup
         * ============================== */
        acf_register_block_type( array(
            'name'            => 'portfolio-startup',
            'title'           => 'Portfolio Startup',
            'description'     => 'Portfolio Startup',
            'category'        => 'custom_theme',
            'mode'            => 'preview',
            'supports'        => array(
                'align' => true,
                'mode'  => false,
                'jsx'   => true,
            ),
            'render_template' => 'blocks/portfolio/portfolio-startup/portfolio-startup.php',
            'enqueue_script'    => get_template_directory_uri() . '/assets/dist/js/glightbox.js',
        ) );

        /** ==============================
         * Portfolio Web designer
         * ============================== */
        acf_register_block_type( array(
            'name'            => 'portfolio-web-designer',
            'title'           => 'Portfolio Web designer',
            'description'     => 'Portfolio Web designer',
            'category'        => 'custom_theme',
            'mode'            => 'preview',
            'supports'        => array(
                'align' => true,
                'mode'  => false,
                'jsx'   => true,
            ),
            'render_template' => 'blocks/portfolio/portfolio-web-designer/portfolio-web-designer.php',
            'enqueue_script'    => get_template_directory_uri() . '/assets/dist/js/gallery.js',
        ) );
    }
}
