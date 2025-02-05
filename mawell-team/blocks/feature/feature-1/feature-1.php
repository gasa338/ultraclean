<?php
$data = get_field( 'feature_1' );
if ( ! empty( $data ) ):
	?>
    <section id="features" class="pt-10 lg:pt-20" data-aos="fade-up">
        <div class="container">
            <div class="grid items-center gap-6 lg:grid-cols-2">
                <div data-aos="fade-left">
					<?php if ( ! empty( $data['top_title'] ) ): ?>
                        <span class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary">
                    <?php echo $data['top_title']; ?>
                </span>
					<?php endif; ?>
					<?php if ( ! empty( $data['title'] ) ): ?>
                        <h2 class="mt-4 text-4xl/tight font-medium text-default-950" >
							<?php echo $data['title']; ?>
                        </h2>
					<?php endif; ?>
					<?php if ( ! empty( $data['content'] ) ): ?>
                        <div class="mt-5 text-base text-default-900">
							<?php echo apply_filters( 'the_content', $data['content'] ); ?>
                        </div>
					<?php endif; ?>
					<?php if ( ! empty( $data['link'] ) ): ?>
                        <div class="group mt-5">
                            <a href="<?php echo $data['link']['url'] ?>"
                               class="inline-flex items-center justify-center gap-2 rounded-md bg-primary/90 px-8 py-3 text-base text-white transition-all duration-500 hover:bg-primary" title="<?php echo $data['link']['title'] ?>">
		                        <?php echo $data['link']['title'] ?>
                                <i data-lucide="move-right" class="size-6"></i>
                            </a>
                        </div>
					<?php endif; ?>
                </div>

				<?php if ( ! empty( $data['image'] ) ): $image = get_image( $data['image'] ); ?>
                    <div data-aos="fade-right">
                        <img
                                src="<?php echo $image['url']; ?>"
                                class="h-full w-full rounded-lg"
                                alt="<?php echo $image['alt']; ?>"
                        />
                    </div>
				<?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>