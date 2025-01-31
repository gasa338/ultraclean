<?php
/** Init HERO blocks */
add_action( 'acf/init', 'acf_blocks_init_feature' );
function acf_blocks_init_feature(): void {
	if ( function_exists( 'acf_register_block_type' ) ) {

		/** ==============================
		 * Text One column
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'text-one-column',
			'title'           => 'Text One column',
			'description'     => 'Feature agency 2',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/feature/text-one-column/text-one-column.php',
		) );

		/** ==============================
		 * Text Two column
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'text-two-column',
			'title'           => 'Text Two column',
			'description'     => 'Feature agency 2',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/feature/text-two-column/text-two-column.php',
		) );

		/** ==============================
		 * Feature agency 2
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'feature-agency-2',
			'title'           => 'Feature agency 2',
			'description'     => 'Feature agency 2',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/feature/feature-agency-2/feature-agency-2.php',
		) );

		/** ==============================
		 * Feature agency 1
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'feature-1',
			'title'           => 'Feature 1',
			'description'     => 'Feature agency 2',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/feature/feature-1/feature-1.php',
		) );

		/** ==============================
		 * Feature 2
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'feature-2',
			'title'           => 'Feature 2',
			'description'     => 'Feature agency 2',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/feature/feature-2/feature-2.php',
		) );

		/** ==============================
		 * Feature 3
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'feature-3',
			'title'           => 'Feature 3',
			'description'     => 'Feature agency 2',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/feature/feature-3/feature-3.php',
		) );


		/** ==============================
		 * Service offering
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'feature-charity',
			'title'           => 'Feature Charity',
			'description'     => 'Feature agency 2',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/feature/feature-charity/feature-charity.php',
		) );


		/** ==============================
		 * Feature Charity 2
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'feature-charity-2',
			'title'           => 'Feature Charity 2',
			'description'     => 'Feature agency 2',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/feature/feature-charity-2/feature-charity-2.php',
		) );


		/** ==============================
		 * Feature Company 1
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'feature-company-1',
			'title'           => 'Feature Company 1',
			'description'     => 'From section2 of company',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/feature/feature-company-1/feature-company-1.php',
		) );

		/** ==============================
		 * Feature Company 1
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'feature-company-2',
			'title'           => 'Feature Company 2',
			'description'     => 'From section2 of company',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/feature/feature-company-2/feature-company-2.php',
		) );

		/** ==============================
		 * Feature Creative
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'feature-creative',
			'title'           => 'Feature Creative',
			'description'     => 'From section2 of company',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/feature/feature-creative/feature-creative.php',
		) );

		/** ==============================
		 * Feature Creative
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'feature-benefits-ebook',
			'title'           => 'Feature Benefits eBook',
			'description'     => 'Benefits eBook',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/feature/feature-benefits-ebook/feature-benefits-ebook.php',
		) );

		/** ==============================
		 * Feature Creative
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'feature-courses-ebook',
			'title'           => 'Feature Courses eBook',
			'description'     => 'Benefits eBook',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/feature/feature-courses-ebook/feature-courses-ebook.php',
		) );

		/** ==============================
		 * Feature assets finance
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'feature-assets-finance',
			'title'           => 'Feature Assets Finance',
			'description'     => 'Benefits eBook',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/feature/feature-assets-finance/feature-assets-finance.php',
		) );

		/** ==============================
		 * Feature assets finance
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'feature-features-finance',
			'title'           => 'Feature Features Finance',
			'description'     => 'Benefits eBook',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/feature/feature-features-finance/feature-features-finance.php',
		) );

		/** ==============================
		 * Feature Onboarding Finance
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'feature-onboarding-finance',
			'title'           => 'Feature Onboarding Finance',
			'description'     => 'Benefits eBook',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/feature/feature-onboarding-finance/feature-onboarding-finance.php',
		) );

		/** ==============================
		 * Feature Hosting
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'feature-hosting',
			'title'           => 'Feature Hosting',
			'description'     => 'Feature Hosting',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/feature/feature-hosting/feature-hosting.php',
		) );

		/** ==============================
		 * Feature Onboarding Finance
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'feature-section2-hosting',
			'title'           => 'Feature Section2 Hosting',
			'description'     => 'Feature Section2 Hosting',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/feature/feature-section2-hosting/feature-section2-hosting.php',
		) );

		/** ==============================
		 * Feature Section3 Hosting
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'feature-section3-hosting',
			'title'           => 'Feature Section3 Hosting',
			'description'     => 'Section3 Hosting',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/feature/feature-section3-hosting/feature-section3-hosting.php',
		) );

		/** ==============================
		 * Feature Section3 Hosting
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'feature-marketing',
			'title'           => 'Feature Marketing',
			'description'     => 'Section3 Hosting',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/feature/feature-marketing/feature-marketing.php',
		) );

		/** ==============================
		 * Feature Section3 Hosting
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'feature-1-marketing-3',
			'title'           => 'Feature 1 Marketing 3',
			'description'     => 'features.php',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/feature/feature-1-marketing-3/feature-1-marketing-3.php',
		) );

		/** ==============================
		 * Feature Section3 Hosting
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'feature-2-marketing-3',
			'title'           => 'Feature 2 Marketing 3',
			'description'     => 'ovo je section.php',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/feature/feature-2-marketing-3/feature-2-marketing-3.php',
		) );

		/** ==============================
		 * Feature 3 Marketing 3
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'feature-3-marketing-3',
			'title'           => 'Feature 3 Marketing 3',
			'description'     => 'ovo je section2.php',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/feature/feature-3-marketing-3/feature-3-marketing-3.php',
		) );

		/** ==============================
		 * Feature 4 Marketing 3
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'feature-4-marketing-3',
			'title'           => 'Feature 4 Marketing 3',
			'description'     => 'ovo je section3.php',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/feature/feature-4-marketing-3/feature-4-marketing-3.php',
		) );

		/** ==============================
		 * Feature 5 Marketing 3
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'feature-5-marketing-3',
			'title'           => 'Feature 5 Marketing 3',
			'description'     => 'ovo je solutions.php',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/feature/feature-5-marketing-3/feature-5-marketing-3.php',
		) );

		/** ==============================
		 * Feature Photography
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'feature-photography',
			'title'           => 'Feature Photography',
			'description'     => 'Feature Photography',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/feature/feature-photography/feature-photography.php',
		) );

		/** ==============================
		 * Feature Portfolio
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'feature-portfolio',
			'title'           => 'Feature Portfolio',
			'description'     => 'Feature Portfolio ili section2.php',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/feature/feature-portfolio/feature-portfolio.php',
		) );

		/** ==============================
		 * Feature Portfolio advantage
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'feature-portfolio-2-advantage',
			'title'           => 'Feature Portfolio 2 advantage',
			'description'     => 'Feature Portfolio 2 ili advantage.php',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/feature/feature-portfolio-2-advantage/feature-portfolio-2-advantage.php',
		) );

		/** ==============================
		 * Feature Portfolio 3
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'feature-2-portfolio-2',
			'title'           => 'Feature 2 Portfolio 2',
			'description'     => 'Feature 2 Portfolio 2 ili section.php',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/feature/feature-2-portfolio-2/feature-2-portfolio-2.php',
		) );

		/** ==============================
		 * Feature Startup
		 * ============================== */
		acf_register_block_type( array(
			'name'            => 'feature-startup',
			'title'           => 'Feature Startup',
			'description'     => 'Feature Startup ili section.php',
			'category'        => 'custom_theme',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => true,
				'mode'  => false,
				'jsx'   => true,
			),
			'render_template' => 'blocks/feature/feature-startup/feature-startup.php',
		) );
	}
}
