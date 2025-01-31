<?php
$hero_company = get_field( 'hero_company' );
if ( ! empty( $hero_company ) ):
	$data = $hero_company
	?>
    <!-- Hero Section Start -->
    <section id="home" class="relative overflow-hidden bg-primary/5 py-24 lg:py-10">
        <div class="container">
            <div class="mb-10 grid grid-cols-1 items-center gap-x-6 gap-y-12 lg:grid-cols-2">
                <div class="max-w-xl">
					<?php if ( ! empty( $data['top_title'] ) ): ?>
                        <div class="inline-block rounded-full border border-primary/20 pe-5">
                            <div class="flex items-center gap-2">
                                <div class="flex size-6 items-center justify-center rounded-full bg-primary/20">
                                    <i data-lucide="bell" class="size-4 text-default-950"></i>
                                </div>
                                <span class="text-xs font-medium text-default-950 md:text-sm"><?php echo $data['top_title']; ?></span>
                            </div>
                        </div>
					<?php endif; ?>

					<?php if ( ! empty( $data['title'] ) ): ?>
                        <h1 class="my-4 max-w-lg text-4xl font-medium text-default-950 md:text-4xl/tight">
	                        <?php echo $data['title']; ?>
                        </h1>

					<?php endif; ?>
					<?php if ( ! empty( $data['content'] ) ): ?>
                        <div class="md:text-lg">
	                        <?php echo apply_filters('the_content', $data['content']); ?>
                        </div>

					<?php endif; ?>
					<?php if ( ! empty( $data['link'] ) ) : ?>
                        <div class="inline-block">
                            <a href=" <?php echo $data['link']['url']; ?>"
                               class="mt-6 flex items-center justify-center gap-2 rounded-md bg-primary px-6 py-2 text-base font-medium text-white transition-all duration-300 hover:bg-primary-700">
	                            <?php echo $data['link']['title']; ?>
                            </a>
                        </div>
					<?php endif; ?>
                </div>
                <!-- col End -->

				<?php if ( ! empty( $data['image'] ) ):
                    $image = get_image($data['image']);
                    ?>
                    <div class="">
                        <img class="rounded-xl" src="<?php echo $image['url'] ?>"
                             alt="<?php echo $image['alt'] ?>"
                             srcset="<?php echo $image['srcset'] ?>"
                        />
                    </div>
				<?php endif; ?>
            </div>


			<?php if ( ! empty( $data['features'] ) ): ?>
                <div class="grid gap-6 lg:grid-cols-3">
                    <?php foreach ( $data['features'] as $index => $feature ): ?>
                    <div class="rounded-xl border border-primary/20 bg-primary/5 p-6 text-center sm:text-start">
                        <div class="flex flex-wrap items-center justify-center gap-6 sm:flex-nowrap sm:justify-start sm:gap-0">
                            <?php if (!empty($feature['icon'])): ?>
                            <div class="sm:pe-5">
                                <i data-lucide="<?php echo $feature['icon'] ?>" class="mx-auto size-10 text-default-950"></i>
                            </div>
                            <?php endif; ?>
                            <div class="border-primary/20 sm:border-s sm:ps-5">
		                        <?php if ($feature['title']): ?>
                                <h2 class="text-xl font-medium text-default-950">
                                    <?php echo $feature['title'] ?>
                                </h2>
                                <?php endif; ?>
			                    <?php if ($feature['content']): ?>
                                <div class="mt-3 text-base">
                                    <?php echo apply_filters('the_content', $feature['content'] ); ?>
                                </div>
			                    <?php endif; ?>
                            </div>
                        </div>
                        <!-- flex End -->
                    </div>
                    <!-- col End -->
                    <?php endforeach; ?>
                    <!-- col End -->
                </div>
			<?php endif; ?>
        </div>
    </section>
<?php endif; ?>