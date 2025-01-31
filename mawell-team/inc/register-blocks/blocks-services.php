<?php
/** Init HERO blocks */
add_action( 'acf/init', 'acf_blocks_init_services' );
function acf_blocks_init_services(): void {
    if ( function_exists( 'acf_register_block_type' ) ) {
        /** ==============================
         * Service Agency 2
         * ============================== */
        acf_register_block_type( array(
            'name'            => 'service-agency-2',
            'title'           => 'Service Agency 2',
            'description'     => 'Blog Agency 2',
            'category'        => 'custom_theme',
            'mode'            => 'preview',
            'supports'        => array(
                'align' => true,
                'mode'  => false,
                'jsx'   => true,
            ),
            'render_template' => 'blocks/services/services-agency-2/services-agency-2.php',
        ) );

        /** ==============================
         * Service 1 Agency 1
         * ============================== */
        acf_register_block_type( array(
            'name'            => 'service-1-agency-1',
            'title'           => 'Service 1 Agency 1',
            'description'     => 'Blog Agency 2',
            'category'        => 'custom_theme',
            'mode'            => 'preview',
            'supports'        => array(
                'align' => true,
                'mode'  => false,
                'jsx'   => true,
            ),
            'render_template' => 'blocks/services/service-1-agency-1/service-1-agency-1.php',
        ) );

        /** ==============================
         * Service 2 Agency 1
         * ============================== */
        acf_register_block_type( array(
            'name'            => 'service-2-agency-1',
            'title'           => 'Service 2 Agency 1',
            'description'     => 'Blog Agency 2',
            'category'        => 'custom_theme',
            'mode'            => 'preview',
            'supports'        => array(
                'align' => true,
                'mode'  => false,
                'jsx'   => true,
            ),
            'render_template' => 'blocks/services/service-2-agency-1/service-2-agency-1.php',
        ) );

        /** ==============================
         * Service Creative
         * ============================== */
        acf_register_block_type( array(
            'name'            => 'service-creative',
            'title'           => 'Service Creative',
            'description'     => 'Blog Agency 2',
            'category'        => 'custom_theme',
            'mode'            => 'preview',
            'supports'        => array(
                'align' => true,
                'mode'  => false,
                'jsx'   => true,
            ),
            'render_template' => 'blocks/services/service-creative/service-creative.php',
        ) );

        /** ==============================
         * Service Creative
         * ============================== */
        acf_register_block_type( array(
            'name'            => 'service-hosting',
            'title'           => 'Service Hosting',
            'description'     => 'Blog Agency 2',
            'category'        => 'custom_theme',
            'mode'            => 'preview',
            'supports'        => array(
                'align' => true,
                'mode'  => false,
                'jsx'   => true,
            ),
            'render_template' => 'blocks/services/service-hosting/service-hosting.php',
        ) );

        /** ==============================
         * Service Marketing
         * ============================== */
        acf_register_block_type( array(
            'name'            => 'service-marketing',
            'title'           => 'Service Marketing',
            'description'     => 'Blog Agency 2',
            'category'        => 'custom_theme',
            'mode'            => 'preview',
            'supports'        => array(
                'align' => true,
                'mode'  => false,
                'jsx'   => true,
            ),
            'render_template' => 'blocks/services/service-marketing/service-marketing.php',
        ) );

        /** ==============================
         * Service Marketing-2
         * ============================== */
        acf_register_block_type( array(
            'name'            => 'service-marketing-2',
            'title'           => 'Service Marketing-2',
            'description'     => 'Service Marketing-2',
            'category'        => 'custom_theme',
            'mode'            => 'preview',
            'supports'        => array(
                'align' => true,
                'mode'  => false,
                'jsx'   => true,
            ),
            'render_template' => 'blocks/services/service-marketing-2/service-marketing-2.php',
        ) );

        /** ==============================
         * Service Photography
         * ============================== */
        acf_register_block_type( array(
            'name'            => 'service-photography',
            'title'           => 'Service Photography',
            'description'     => 'Service Photography',
            'category'        => 'custom_theme',
            'mode'            => 'preview',
            'supports'        => array(
                'align' => true,
                'mode'  => false,
                'jsx'   => true,
            ),
            'render_template' => 'blocks/services/service-photography/service-photography.php',
        ) );

        /** ==============================
         * Service Portfolio
         * ============================== */
        acf_register_block_type( array(
            'name'            => 'service-portfolio',
            'title'           => 'Service Portfolio',
            'description'     => 'Service Portfolio',
            'category'        => 'custom_theme',
            'mode'            => 'preview',
            'supports'        => array(
                'align' => true,
                'mode'  => false,
                'jsx'   => true,
            ),
            'render_template' => 'blocks/services/service-portfolio/service-portfolio.php',
        ) );

        /** ==============================
         * Service Startup
         * ============================== */
        acf_register_block_type( array(
            'name'            => 'service-startup',
            'title'           => 'Service Startup',
            'description'     => 'Service Startup',
            'category'        => 'custom_theme',
            'mode'            => 'preview',
            'supports'        => array(
                'align' => true,
                'mode'  => false,
                'jsx'   => true,
            ),
            'render_template' => 'blocks/services/service-startup/service-startup.php',
        ) );

        /** ==============================
         * Service web-designer
         * ============================== */
        acf_register_block_type( array(
            'name'            => 'service-web-designer',
            'title'           => 'Service Web Designer',
            'description'     => 'Service Web Designer',
            'category'        => 'custom_theme',
            'mode'            => 'preview',
            'supports'        => array(
                'align' => true,
                'mode'  => false,
                'jsx'   => true,
            ),
            'render_template' => 'blocks/services/service-web-designer/service-web-designer.php',
        ) );
    }
}
