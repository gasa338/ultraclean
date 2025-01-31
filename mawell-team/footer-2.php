<?php $footer = get_field( 'footer_1', 'option' ); ?>
<footer>
    <div class="border-y border-default-200">
        <div class="container py-20">
            <div class="grid gap-10 md:grid-cols-3 lg:gap-16 xl:grid-cols-5">
				<?php if ( ! empty( $footer['logo']['light'] ) || ! empty( $footer['logo']['dark'] ) || ! empty( $footer['description'] ) ): ?>
                    <div class="md:col-span-3 xl:col-span-2">
                        <div>
                            <a href="<?php echo site_url(); ?>">
								<?php if ( ! empty( $footer['logo']['dark'] ) ): ?>
                                    <img
                                            src="<?php echo $footer['logo']['dark']['url']; ?>"
                                            alt="<?php echo $footer['logo']['dark']['alt']; ?>"
                                            class="flex h-10 dark:hidden"
                                    />
								<?php endif; ?>
								<?php if ( ! empty( $footer['logo']['light'] ) ): ?>
                                    <img
                                            src="<?php echo $footer['logo']['light']['url']; ?>"
                                            alt="<?php echo $footer['logo']['light']['alt']; ?>"
                                            class="hidden h-10 dark:flex"
                                    />
								<?php endif; ?>
                            </a>
							<?php if ( ! empty( $footer["description"] ) ): ?>
                                <div class="mt-6 text-base text-default-800">
									<?php echo apply_filters( 'the_content', $footer["description"] ) ?>
                                </div>
							<?php endif; ?>
							<?php if ( ! empty( $footer["subscription_mail"] ) ): ?>
                                <div class="mt-6 space-y-2">
									<?php echo do_shortcode( $footer["subscription_mail"] ) ?>
                                </div>
							<?php endif; ?>
                        </div>
                    </div>
                    <!-- col End -->
				<?php endif; ?>
				<?php
				$menu_1 = wp_get_nav_menu_items( $footer['footer_1_menu_1'] );
				if ( ! empty( $menu_1 ) ):
					?>
                    <div class="">
						<?php $menu_object = wp_get_nav_menu_object( $footer['footer_1_menu_1'] ); ?>
                        <h5 class="mb-4 font-medium text-default-800 lg:text-lg xl:text-xl">
							<?php echo $menu_object->name ?>
                        </h5>
                        <ul class="flex flex-col gap-3">
							<?php foreach ( $menu_1 as $index => $item ) : ?>
                                <li>
                                    <a href="<?php echo $item->url; ?>"
                                       class="text-base text-default-700 transition-all hover:text-default-950"><?php echo $item->title ?></a>
                                </li>
							<?php endforeach; ?>
                        </ul>
                    </div>
                    <!-- col End -->
				<?php endif; ?>

				<?php
				$social_media = get_field( 'social_media', 'option' );
				if ( ! empty( $social_media ) ): ?>
                    <div class="">
                        <ul class="flex flex-col gap-3">
							<?php if ( ! empty( $social_media['name'] ) ): ?>
                                <h5 class="mb-4 font-medium text-default-800 lg:text-lg xl:text-xl">
									<?php echo $social_media['name']; ?>
                                </h5>
							<?php endif; ?>
							<?php if ( ! empty( $social_media['items'] ) ): ?>
                                <div class="space-y-3">
									<?php foreach ( $social_media['items'] as $index => $item ): ?>
                                        <a href="<?php echo $item['url']; ?>" class="group flex items-center gap-5">
                                            <div class="inline-flex size-10 items-center justify-center rounded-lg border border-default-300 text-default-800 transition-all group-hover:border-primary group-hover:bg-primary group-hover:text-white">
                                                <i data-lucide="<?php echo $item['lucide_icon']; ?>" class="size-5"></i>
                                            </div>
                                            <h5 class="text-base font-medium text-default-800"><?php echo $item['title']; ?></h5>
                                        </a>
									<?php endforeach; ?>
                                </div>
							<?php endif; ?>
                        </ul>
                    </div>
                    <!-- col End -->
				<?php endif; ?>


				<?php
				$menu_2 = wp_get_nav_menu_items( $footer['footer_1_menu_2'] );
				if ( ! empty( $menu_2 ) ):
					?>
                    <div class="">
						<?php $menu_object = wp_get_nav_menu_object( $footer['footer_1_menu_2'] ); ?>
                        <h5 class="mb-4 font-medium text-default-800 lg:text-lg xl:text-xl">
							<?php echo $menu_object->name ?>
                        </h5>
                        <ul class="flex flex-col gap-3">
							<?php foreach ( $menu_2 as $index => $item ) : ?>
                                <li>
                                    <a href="<?php echo $item->url; ?>"
                                       class="text-base text-default-700 transition-all hover:text-default-950"><?php echo $item->title ?></a>
                                </li>
							<?php endforeach; ?>
                        </ul>
                    </div>
                    <!-- col End -->
				<?php endif; ?>
                <!-- col End -->
            </div>
            <!-- grid End -->
        </div>
        <!-- Container End -->
    </div>

    <div class="py-4">
        <div
                class="container flex h-full flex-wrap items-center justify-center text-center md:justify-between md:text-start"
        >
            <p class="text-base text-default-900">
                <script>
                    document.write(new Date().getFullYear());
                </script>
                © Maxwell theme. Coded by
                <span class="text-red-500">❤️</span> by
                <a class="text-primary-700"
                   href="https://coderthemes.com/"
                   target="_blank"
                >Maxwell team</a>
            </p>
            <!--
            <p class="text-base">
                <a href="#">Terms Conditions & Policy</a>
            </p>
            -->
        </div>
        <!-- Flex End -->
    </div>

	<?php wp_footer(); ?>
</footer>
