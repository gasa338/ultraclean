<?php
$data = get_field( 'newsletter_marketing_2' );
if ( ! empty( $data ) ):
	?>
    <section class="relative h-full py-56" data-aos="fade-up">
        <div class="container">

			<?php if ( ! empty( $data['image'] ) ): $image = get_image($data['image']) ?>
                <div class="absolute inset-0">
                    <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" srcset="<?php echo $image['srcset'] ?>" class="h-full w-full object-cover">
                    <div class="absolute inset-0 h-full w-full bg-black/60"></div>
                </div>
			<?php endif; ?>

            <div class="relative">

                <div class="grid gap-6 lg:grid-cols-2">
                    <div>
						<?php if ( ! empty( $data['title'] ) ): ?>
                            <h2 class="mb-4 text-4xl font-medium text-white">
                                <?php echo $data['title']; ?>
                            </h2>
						<?php endif; ?>
						<?php if ( ! empty( $data['description'] ) ): ?>
                            <div class="mb-10 text-lg text-zinc-300">
                                <?php echo apply_filters( 'the_content', $data['description'] ); ?>
                            </div>
						<?php endif; ?>
						<?php if ( ! empty( $data['link'] ) ): ?>
                            <a href="<?php echo $data['link']['url']; ?>"
                               class="rounded-md bg-primary px-6 py-3 text-sm text-white transition-all hover:bg-primary-700">
                                <?php echo $data['link']['title'];  ?>
                            </a>
						<?php endif; ?>
						<?php if ( ! empty( $data['characteristics'] ) ): ?>
                            <div class="mt-10 grid gap-5 md:grid-cols-2">
                                <?php foreach ( $data['characteristics'] as $index => $characteristic ) : ?>
                                <div class="flex items-center gap-4">
                                    <i data-lucide="check-circle-2" class="size-6 text-primary"></i>
                                    <p class="text-base text-zinc-300"><?php echo $characteristic['item']; ?></p>
                                </div>
                                <?php endforeach; ?>
                            </div>
						<?php endif; ?>
                    </div>
                </div>
                <!-- grid End -->
            </div>
        </div>
        <!-- container End -->
    </section>
<?php endif; ?>