<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'maxxwell' ); ?></a>

    <header id="navbar"
            class="fixed inset-x-0 top-0 z-40 w-full border-b border-transparent transition-all duration-300  [&.nav-sticky]:bg-white/90 [&.nav-sticky]:shadow-md [&.nav-sticky]:backdrop-blur-3xl dark:[&.nav-sticky]:bg-default-50/80 nav-sticky">
        <div class="flex h-full items-center py-4">
            <div class="container">
                <nav class="flex flex-wrap items-center justify-between gap-4 lg:flex-nowrap">

                    <div class="flex w-full items-center justify-between lg:w-auto">
                        <!-- Navbar Brand Logo -->
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<?php
							$custom_logo_id = get_theme_mod( 'custom_logo' );
							$logo           = get_image( $custom_logo_id );
							?>
                            <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>"
                                 class="flex h-15"/>
                        </a>

                        <!-- Mobile Menu Toggle Button -->
                        <button class="hs-collapse-toggle inline-block lg:hidden"
                                id="hs-unstyled-collapse"
                                data-hs-collapse="#mobileMenu"
                                data-hs-type="collapse">
                            <i data-lucide="menu" class="size-7 text-default-600 hover:text-default-900"></i>
                        </button>
                    </div>
					<?php $menu_items = maxwell_return_menu( 'primary' ) ?>
                    <!-- Navigation Menu -->
                    <div id="mobileMenu"
                         class="hs-collapse mx-auto mt-2 hidden grow basis-full items-center justify-center overflow-hidden transition-all duration-300 lg:mt-0 lg:flex lg:basis-auto">
                        <ul class="menu flex flex-col justify-center gap-y-2 lg:flex-row lg:items-center">
							<?php foreach ( $menu_items as $index => $menu_item ) : ?>
								<?php if ( ! empty( $menu_item['sub_item'] ) ): ?>
                                    <li class="menu-item group py-4">
                                        <div class="hs-dropdown relative inline-flex [--trigger:hover] [--placement:bottom]">
                                            <a class="hs-dropdown-toggle inline-flex items-center rounded-full px-4 py-2 text-sm font-medium text-default-700 after:absolute after:inset-0 hover:text-primary group-hover:after:-bottom-16 lg:text-base"
                                               href="<?php echo $menu_item['url']; ?>">
												<?php echo $menu_item['title']; ?> <i class="ms-2 size-4"
                                                                                      data-lucide="chevron-down"></i>
                                            </a>

                                            <div class="hs-dropdown-menu z-10 mt-2 hidden min-w-48 rounded-lg border border-default-100 bg-white p-1.5 opacity-0 shadow-lg transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:bg-default-50">
                                                <ul class="flex flex-col gap-1">
													<?php foreach ( $menu_item['sub_item'] as $item ) : ?>
                                                        <li>
                                                            <a class="flex items-center rounded px-3 py-2 text-sm font-medium text-default-600 transition-all hover:bg-default-400/10 hover:text-default-700"
                                                               href="<?php echo $item['url'] ?>">
																<?php echo $item['title'] ?>
                                                            </a>
                                                        </li>
													<?php endforeach; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
								<?php else: ?>
                                    <li class="menu-item text-sm font-medium text-default-800 transition-all duration-300 hover:text-primary-600 lg:text-base [&.active]:text-primary">
                                        <a class="inline-flex items-center rounded-full px-4 py-2"
                                           href="<?php echo $menu_item['url']; ?>"><?php echo $menu_item['title']; ?></a>
                                    </li>
								<?php endif; ?>
							<?php endforeach; ?>
                        </ul>
                    </div>
                </nav><!-- #site-navigation -->

            </div>
        </div>
    </header><!-- #masthead -->
