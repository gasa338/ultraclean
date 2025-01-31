<?php
$data = get_field( 'service_1_agency_1' );
if ( ! empty( $data ) ):
	?>
    <!-- Start Services -->
    <section id="services" class="py-10 lg:py-20">
        <div class="container">
            <div class="mb-10 flex items-end justify-between">
                <div class="mx-auto max-w-2xl text-center">
					<?php if ( ! empty( $data['top_title'] ) ): ?>
                        <span class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary">
                    <?php echo $data['top_title']; ?>
                </span>
					<?php endif; ?>
					<?php if ( ! empty( $data['title'] ) ): ?>
                        <h2 class="my-4 text-4xl font-medium text-default-950">
							<?php echo $data['title']; ?>
                        </h2>
					<?php endif; ?>
					<?php if ( ! empty( $data['content'] ) ): ?>
                        <div class="text-base">
							<?php echo apply_filters( 'the_content', $data['content'] ); ?>
                        </div>
					<?php endif; ?>
                </div>
            </div>
            <!-- flex End-->

            <div class="grid grid-cols-1 items-center divide-y divide-default-200 overflow-hidden rounded-md  bg-primary/5 dark:bg-default-50 lg:grid-cols-3 lg:divide-x lg:divide-y-0">
				<?php if ( ! empty( $data['features'] ) ): ?>
					<?php foreach ( $data['features'] as $index => $feature ): ?>
                        <div class="group">
                            <div class="p-8 sm:p-10">
								<?php if ( ! empty( $feature['icon'] ) ): ?>
                                    <span>
                      <i data-lucide="<?php echo $feature['icon']; ?>" class="size-14 text-default-950"></i>
                    </span>
								<?php endif; ?>
								<?php if ( ! empty( $feature['title'] ) ): ?>
                                    <h2 class="mb-4 mt-8 text-2xl font-medium text-default-950">
										<?php echo $feature['title']; ?>
                                    </h2>
								<?php endif; ?>
								<?php if ( ! empty( $feature['content'] ) ): ?>
                                    <div class="mb-6 text-base">
										<?php echo apply_filters( 'the_content', $feature['content'] ); ?>
                                    </div>
								<?php endif; ?>
								<?php if ( ! empty( $feature['link'] ) ): ?>
                                    <a href="<?php echo $feature['link']['url']; ?>" class="text-lg text-default-950"
                                       title="<?php echo $feature['link']['title']; ?>">
										<?php echo $feature['link']['title']; ?>
                                        <i data-lucide="move-right"
                                           class="inline-block size-6 opacity-0 transition-all duration-500 will-change-transform group-hover:translate-x-2 group-hover:opacity-100"></i>
                                    </a>
								<?php endif; ?>
                            </div>
                        </div>
                        <!-- end col -->
					<?php endforeach; ?>
				<?php endif; ?>
            </div>
            <!-- grid End-->
        </div>
        <!-- container End-->
    </section>
    <!-- End Services -->
<?php endif; ?>