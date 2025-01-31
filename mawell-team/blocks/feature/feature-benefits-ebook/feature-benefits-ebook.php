<?php
$data = get_field( 'feature_benefits_ebook' );
if ( ! empty( $data ) ):
	?>
    <section id="benefits" class="py-10 lg:py-20">
        <div class="container">
			<?php if ( ! empty( $data['top_title'] ) || ! empty( $data['title'] ) || ! empty( $data['content'] ) ): ?>
                <div class="mx-auto max-w-2xl text-center">
					<?php if ( ! empty( $data['top_title'] ) ): ?>
                        <span
                                class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary">
                <?php echo $data['top_title'] ?>
            </span>
					<?php endif; ?>

					<?php if ( ! empty( $data['title'] ) ): ?>
                        <h2 class="my-5 text-4xl font-medium text-default-950 md:text-4xl/tight">
							<?php echo $data['title'] ?>

                        </h2>
					<?php endif; ?>

					<?php if ( ! empty( $data['description'] ) ): ?>
                        <div class="mb-10 text-base">
							<?php echo apply_filters( 'the_content', $data['description'] ) ?>
                        </div>
					<?php endif; ?>

                </div>
			<?php endif; ?>
            <div class="mt-10 grid grid-cols-1 gap-6 lg:grid-cols-3">
				<?php if ( ! empty( $data['features_left'] ) ): ?>
                    <div class="space-y-6">
						<?php foreach ( $data['features_left'] as $index => $left ) : ?>
                            <div>
                                <div class="group rounded-xl bg-white p-6 drop-shadow-md dark:bg-default-50">
									<?php if ( ! empty( $left['icon'] ) ): ?>
                                        <div class="flex size-14 items-center justify-center rounded-full bg-primary/10">
                                            <i data-lucide="<?php echo $left['icon'] ?>"
                                               class="size-7 text-primary"></i>
                                        </div>
									<?php endif; ?>
									<?php if ( ! empty( $left['title'] ) ): ?>
                                        <h2 class="mt-5 text-2xl font-medium text-default-950">
											<?php echo $left['title'] ?>
                                        </h2>
									<?php endif; ?>
									<?php if ( ! empty( $left['content'] ) ): ?>
                                        <p class="mt-3 text-base">
											<?php echo apply_filters( 'the_content', $left['content'] ); ?>
                                        </p>
									<?php endif; ?>
									<?php if ( ! empty( $left['link'] ) ): ?>
                                        <div class="mt-5">
                                            <a href="<?php echo $left['link']['url'] ?>"
                                               class="text-lg font-medium text-default-900">
												<?php echo $left['link']['title'] ?>
                                                <i data-lucide="move-right"
                                                   class="inline-block size-6 opacity-0 transition-all duration-500 will-change-transform group-hover:translate-x-2 group-hover:opacity-100"></i>
                                            </a>
                                        </div>
									<?php endif; ?>
                                </div>
                            </div>
						<?php endforeach; ?>
                    </div>
				<?php endif; ?>
				<?php if ( ! empty( $data['image'] ) ): $image = get_image($data['image']['id']); ?>
                    <div class="rounded-xl bg-white drop-shadow-md">
                        <img src="<?php echo $image['url']; ?>" srcset="<?php echo $image['srcset']; ?>"
                             class="h-full w-full rounded-xl" alt="<?php echo $image['alt']; ?>"/>
                    </div>
				<?php endif; ?>
				<?php if ( ! empty( $data['features_right'] ) ): ?>
                    <div class="space-y-6">

	                    <?php foreach ( $data['features_right'] as $index => $right ) : ?>
                            <div>
                                <div class="group rounded-xl bg-white p-6 drop-shadow-md dark:bg-default-50">
				                    <?php if ( ! empty( $right['icon'] ) ): ?>
                                        <div class="flex size-14 items-center justify-center rounded-full bg-primary/10">
                                            <i data-lucide="<?php echo $right['icon'] ?>"
                                               class="size-7 text-primary"></i>
                                        </div>
				                    <?php endif; ?>
				                    <?php if ( ! empty( $right['title'] ) ): ?>
                                        <h2 class="mt-5 text-2xl font-medium text-default-950">
						                    <?php echo $right['title'] ?>
                                        </h2>
				                    <?php endif; ?>
				                    <?php if ( ! empty( $right['content'] ) ): ?>
                                        <p class="mt-3 text-base">
						                    <?php echo apply_filters( 'the_content', $right['content'] ); ?>
                                        </p>
				                    <?php endif; ?>
				                    <?php if ( ! empty( $right['link'] ) ): ?>
                                        <div class="mt-5">
                                            <a href="<?php echo $right['link']['url'] ?>"
                                               class="text-lg font-medium text-default-900">
							                    <?php echo $right['link']['title'] ?>
                                                <i data-lucide="move-right"
                                                   class="inline-block size-6 opacity-0 transition-all duration-500 will-change-transform group-hover:translate-x-2 group-hover:opacity-100"></i>
                                            </a>
                                        </div>
				                    <?php endif; ?>
                                </div>
                            </div>
	                    <?php endforeach; ?>
                    </div>
				<?php endif; ?>
            </div>

	<?php if ( ! empty( $data['link'] ) ): ?>
            <div class="mt-10 flex justify-center">
                <a href="<?php echo $data['link']['url'] ?>"
                   class="inline-flex items-center justify-center gap-2 rounded-md bg-primary/90 px-8 py-3 text-base text-white transition-all duration-500 hover:bg-primary">
	                <?php echo $data['link']['title'] ?>
                    <i data-lucide="move-right" class="size-6"></i>
                </a>
            </div>
	<?php endif; ?>
        </div>
    </section>
<?php endif; ?>