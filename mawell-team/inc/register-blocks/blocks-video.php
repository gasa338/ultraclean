<?php
/** Init HERO blocks */
add_action( 'acf/init', 'acf_blocks_init_video' );
function acf_blocks_init_video(): void {
    if ( function_exists( 'acf_register_block_type' ) ) {
        /** ==============================
         * WatchVideo Charity
         * ============================== */
        acf_register_block_type( array(
            'name'            => 'watchVideo-charity',
            'title'           => 'WatchVideo Charity',
            'description'     => 'Blog Agency 2',
            'category'        => 'custom_theme',
            'mode'            => 'preview',
            'supports'        => array(
                'align' => true,
                'mode'  => false,
                'jsx'   => true,
            ),
            'render_template' => 'blocks/video/watchVideo-charity/watchVideo-charity.php',
        ) );


        /** ==============================
         * WatchVideo Finance
         * ============================== */
        acf_register_block_type( array(
            'name'            => 'watchVideo-finance',
            'title'           => 'WatchVideo Finance',
            'description'     => 'Blog Agency 2',
            'category'        => 'custom_theme',
            'mode'            => 'preview',
            'supports'        => array(
                'align' => true,
                'mode'  => false,
                'jsx'   => true,
            ),
            'render_template' => 'blocks/video/watchVideo-finance/watchVideo-finance.php',
        ) );


        /** ==============================
         * WatchVideo Marketing
         * ============================== */
        acf_register_block_type( array(
            'name'            => 'watchVideo-marketing',
            'title'           => 'WatchVideo Marketing',
            'description'     => 'Blog Agency 2',
            'category'        => 'custom_theme',
            'mode'            => 'preview',
            'supports'        => array(
                'align' => true,
                'mode'  => false,
                'jsx'   => true,
            ),
            'render_template' => 'blocks/video/watchVideo-marketing/watchVideo-marketing.php',
        ) );


        /** ==============================
         * WatchVideo Marketing 2
         * ============================== */
        acf_register_block_type( array(
            'name'            => 'watchVideo-marketing-2',
            'title'           => 'WatchVideo Marketing-2',
            'description'     => 'WatchVideo Marketing-2',
            'category'        => 'custom_theme',
            'mode'            => 'preview',
            'supports'        => array(
                'align' => true,
                'mode'  => false,
                'jsx'   => true,
            ),
            'render_template' => 'blocks/video/watchVideo-marketing-2/watchVideo-marketing-2.php',
        ) );
    }
}
