<?php
/** Init HERO blocks */
add_action( 'acf/init', 'acf_blocks_init_forms' );
function acf_blocks_init_forms(): void {
	if ( function_exists( 'acf_register_block_type' ) ) {
		/** ==============================
		 * Service offering
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'contact-charity',
			'title'           => 'Contact Charity',
			'description'     => 'Hero section 1.',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/forms/contact-charity/contact-charity.php',
		) );
		/** ==============================
		 * Company form
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'company-form',
			'title'           => 'Company Form',
			'description'     => 'From Company section...',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/forms/company-form/company-form.php',
		) );

		/** ==============================
		 * Company form
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'form-marketing-2',
			'title'           => 'Form Marketing 2',
			'description'     => 'From Company section...',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/forms/form-marketing-2/form-marketing-2.php',
		) );

		/** ==============================
		 * web-designer
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'form-web-designer',
			'title'           => 'Form Web designer',
			'description'     => 'From web-designer',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/forms/form-web-designer/form-web-designer.php',
		) );

        /** ==============================
         * Contact Agency 1
         * ============================== */
        acf_register_block_type( array(
            'name'            => 'contact-agency-1',
            'title'           => 'Contact Agency 1',
            'description'     => 'Contact section 1.',
            'category'        => 'custom_theme',
            'mode'            => 'preview',
            'supports'        => array(
                'align' => true,
                'mode'  => false,
                'jsx'   => true,
            ),
            'render_template' => 'blocks/forms/contact-agency-1/contact-agency-1.php',
        ) );
	}
}
