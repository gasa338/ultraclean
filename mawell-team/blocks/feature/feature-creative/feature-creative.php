<?php $data = get_field( 'feature_creative' );
if ( ! empty( $data ) ):
	?>
    <section id="features" class="py-10 lg:py-20" data-aos="fade-up">
        <div class="container">
            <div class="mb-10 flex items-end justify-between">
				<?php if ( ! empty( $data['top_title'] ) || ! empty( $data['title'] ) || ! empty( $data['description'] ) ): ?>
                    <div class="mx-auto max-w-2xl text-center">
						<?php if ( ! empty( $data['top_title'] ) ): ?>
                            <span class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary">
                    <?php echo $data['top_title']; ?>
                </span>
						<?php endif ?>
						<?php if ( ! empty( $data['title'] ) ): ?>
                            <h2 class="mt-4 text-4xl font-medium capitalize text-default-950">
								<?php echo $data['title']; ?>
                            </h2>
						<?php endif ?>
						<?php if ( ! empty( $data['description'] ) ): ?>
							<?php echo $data['description']; ?>
						<?php endif ?>
                    </div>
				<?php endif; ?>
            </div>
            <!-- flex End -->
			<?php if ( ! empty( $data['features'] ) ): ?>
                <div class="grid grid-cols-1 items-center overflow-hidden rounded-md gap-3 md:grid-cols-2 xl:grid-cols-3">
					<?php foreach ( $data['features'] as $index => $feature ) : ?>
                        <div class="group h-full border border-default-200 bg-green-100" data-aos="fade-up">
                            <div class="p-8 sm:p-10">
								<?php if ( ! empty( $feature['icon'] ) ): ?>
                                    <span class=""><i data-lucide="<?php echo $feature['icon'] ?>"
                                                      class="size-14 text-default-950"></i></span>
								<?php endif; ?>
								<?php if ( ! empty( $feature['title'] ) ): ?>
                                    <h2 class="mb-4 mt-8 text-2xl font-medium text-default-950">
										<?php echo $feature['title'] ?>
                                    </h2>
								<?php endif; ?>
								<?php if ( ! empty( $feature['description'] ) ): ?>
                                    <div class="mb-6 text-base">
										<?php echo apply_filters( 'the_content', $feature['description'] ); ?>
                                    </div>
								<?php endif; ?>
								<?php if ( ! empty( $feature['link'] ) ): ?>
                                    <a href="<?php echo $feature['link']['url']; ?>"
                                       class="inline-flex items-center justify-center gap-2 rounded-md border border-primary/50 bg-primary px-6 py-2 text-white transition-all duration-300 hover:bg-primary/10 hover:text-primary">
										<?php echo $feature['link']['title']; ?>
                                        <i data-lucide="arrow-up-right" class="size-6"></i>
                                    </a>
								<?php endif; ?>
                            </div>
                        </div>
					<?php endforeach; ?>
                </div>
			<?php endif; ?>


	        <?php if ( ! empty( $data['link'] ) ): ?>
            <div class="mt-4 flex justify-center" data-aos="fade-up">
                <a href="<?php echo $data['link']['url']; ?>"
                   class="inline-flex items-center justify-center gap-2 rounded-md border border-primary/50 bg-primary px-6 py-2 text-white transition-all duration-300 hover:bg-primary/10 hover:text-primary">
			        <?php echo $data['link']['title']; ?>
                    <i data-lucide="arrow-up-right" class="size-6"></i>
                </a>
                </div>
	        <?php endif; ?>
        </div>
        <!-- container End -->
    </section>
<?php endif; ?>