<?php
$data = get_field( 'cta_marketing_3' );
if ( ! empty( $data ) ):
	?>
    <section class="py-10 lg:py-20">
        <div class="container">
            <div class="rounded-xl bg-primary/20 p-6">
                <div class="grid items-center gap-6 md:grid-cols-3">
					<?php if ( ! empty( $data['image'] ) ): $image = get_image($data['image']); ?>
                        <div class="">
                            <img src="<?php echo $image['url']; ?>"
                                 class="max-w-full" alt="<?php echo $image['alt']; ?>"/>
                        </div>
					<?php endif; ?>
                    <div class="md:col-span-2">
                        <div class="flex flex-col">
                            <div class="">
								<?php if ( ! empty( $data['title'] ) ): ?>
                                    <h3 class="mb-2 text-3xl/snug font-medium text-default-950">
                                        <?php echo $data['title'] ?>
                                    </h3>
								<?php endif; ?>
								<?php if ( ! empty( $data['description'] ) ): ?>
                                    <div class="mb-6 text-sm">
                                        <?php echo apply_filters( 'the_content', $data['description'] ); ?>
                                    </div>
								<?php endif; ?>
                            </div>
							<?php if ( ! empty( $data['link'] ) ): ?>
                                <div class="">
                                    <a href="<?php echo $data['link']['url']; ?>"
                                       class="inline-flex items-center justify-center gap-2 rounded-md bg-primary px-6 py-2 text-white transition-all hover:bg-primary-700">
                                        <?php echo $data['link']['title']; ?>
                                        <i data-lucide="move-right" class="size-5"></i>
                                    </a>
                                </div>
							<?php endif; ?>
                        </div>
                    </div>
                </div>
                <!-- end flex -->
            </div>
            <!-- end bg -->
        </div>
        <!-- end container -->
    </section>
<?php endif; ?>