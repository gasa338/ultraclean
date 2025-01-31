<?php
$data = get_field( 'service_2_agency_1' );
if ( ! empty( $data ) ):
	?>
    <!-- Start Services -->
    <section id="serice" class="py-10 lg:py-20">
        <div class="container">
            <div class="mb-10 flex items-end justify-between">
                <div class="mx-auto max-w-2xl text-center">
					<?php if ( ! empty( $data['top_title'] ) ): ?>
                        <span class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary">
                            <?php echo $data['top_title'] ?>
                        </span>
					<?php endif; ?>
	                <?php if ( ! empty( $data['title'] ) ): ?>
                        <h2 class="my-4 text-4xl font-medium text-default-950">
			                <?php echo $data['title']; ?>
                        </h2>
	                <?php endif; ?>
					<?php if ( ! empty( $data['content'] ) ): ?>
                    <div class="mt-5 text-lg font-medium text-default-800">
						<?php echo apply_filters( 'the_content', $data['content'] ) ?>
                    </div>
                </div>
            </div>
            <!-- flex End-->
			<?php endif; ?>

            <div class="grid grid-cols-1 items-center gap-6 lg:grid-cols-2">
				<?php if ( ! empty( $data['image'] ) ): $image = get_image( $data['image'] ) ?>
                    <div class="relative -z-10 overflow-hidden">
                        <img src="<?php echo $image['url'] ?>"
                             class="h-full w-full rounded-md"
                             alt="<?php echo $image['alt'] ?>"
                             srcset="<?php echo $image['srcset'] ?>"
                        />
                        <div class="absolute inset-0 rounded-md bg-black/40"></div>
                    </div>
                    <!-- col End-->
				<?php endif; ?>

				<?php if ( ! empty( $data['features'] ) ): ?>
                    <div class="lg:-ms-20">
                        <div class="divide-y divide-default-200 rounded-md bg-default-50 shadow">
							<?php foreach ( $data['features'] as $index => $feature ) : ?>
                                <div class="flex flex-wrap items-center gap-6 p-6 sm:flex-nowrap">
                                    <div>
                                        <div class="flex size-12 items-center justify-center rounded-md border border-default-200 bg-white/5 text-xl text-default-950">
                                            0<?php echo $index + 1; ?>
                                        </div>
                                    </div>
                                    <div>
										<?php if ( ! empty( $feature['title'] ) ): ?>
                                            <h3 class="text-2xl font-medium text-default-950">
                                                <?php echo $feature['title']; ?>
                                            </h3>
										<?php endif; ?>
										<?php if ( ! empty( $feature['content'] ) ): ?>
                                            <div class="mt-3 text-base">
	                                            <?php echo apply_filters( 'the_content', $feature['content'] ); ?>
                                            </div>
										<?php endif; ?>

                                    </div>
                                </div>
                                <!-- flex End-->
							<?php endforeach; ?>
                        </div>
                    </div>
                    <!-- col End-->
				<?php endif; ?>
            </div>
            <!-- grid End-->
        </div>
        <!-- container End-->
    </section>
    <!-- End Services -->
<?php endif; ?>