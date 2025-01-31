<?php
/** Init HERO blocks */
add_action( 'acf/init', 'acf_blocks_init_blog_agency' );
function acf_blocks_init_blog_agency(): void {
    if ( function_exists( 'acf_register_block_type' ) ) {
        /** ==============================
         * Marq agency 2
         * ============================== */
        acf_register_block_type( array(
            'name'            => 'marque-1',
            'title'           => 'Marque 1',
            'description'     => 'Block from Agency 2 koji se koristi svuda na sajtu.',
            'category'        => 'custom_theme',
            'mode'            => 'preview',
            'supports'        => array(
                'align' => true,
                'mode'  => false,
                'jsx'   => true,
            ),
            'render_template' => 'blocks/marque/marque-1/marque-1.php',
        ) );
        /** ==============================
         * Marque 2 from finance
         * ============================== */
        acf_register_block_type( array(
            'name'            => 'marque-2',
            'title'           => 'Marque 2',
            'description'     => 'Marque 2 from finance',
            'category'        => 'custom_theme',
            'mode'            => 'preview',
            'supports'        => array(
                'align' => true,
                'mode'  => false,
                'jsx'   => true,
            ),
            'render_template' => 'blocks/marque/marque-2/marque-2.php',
        ) );

        /** ==============================
         * Marque 3 from photography
         * ============================== */
        acf_register_block_type( array(
            'name'            => 'marque-3',
            'title'           => 'Marque 3',
            'description'     => 'Marque 3 from photography',
            'category'        => 'custom_theme',
            'mode'            => 'preview',
            'supports'        => array(
                'align' => true,
                'mode'  => false,
                'jsx'   => true,
            ),
            'render_template' => 'blocks/marque/marque-3/marque-3.php',
        ) );

        /** ==============================
         * Marque 4 portfolio 2
         * ============================== */
        acf_register_block_type( array(
            'name'            => 'marque-4',
            'title'           => 'Marque 4',
            'description'     => 'Marque 4 from portfolio 2',
            'category'        => 'custom_theme',
            'mode'            => 'preview',
            'supports'        => array(
                'align' => true,
                'mode'  => false,
                'jsx'   => true,
            ),
            'render_template' => 'blocks/marque/marque-4/marque-4.php',
        ) );
    }
}
