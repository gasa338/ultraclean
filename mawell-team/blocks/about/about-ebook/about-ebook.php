<?php
$data = get_field( 'about_ebook' );
if ( ! empty( $data ) ):
	?>
    <!-- About Start -->
    <section id="about" class="py-10 lg:py-20">
        <div class="container">
            <div class="grid items-center gap-2 lg:grid-cols-2">
				<?php if ( ! empty( $data['image'] ) ): $image = get_image( $data['image'] ); ?>
                    <!-- TODO: Error: Los prikaze slike na frontu i backu, -->
                    <div>
                        <img src="<?php echo $image['url']; ?>"
                             class="mx-auto h-[500px] rounded-xl" alt="<?php echo $image['alt']; ?>" srcset="<?php echo $image['srcset'] ?>"/>
                    </div>
				<?php endif; ?>

                <div>

					<?php if ( ! empty( $data['top_title'] ) ): ?>
                        <span class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary">
                            <?php echo $data['top_title'] ?>
                        </span>
					<?php endif; ?>


					<?php if ( ! empty( $data['title'] ) ): ?>
                        <h2 class="mt-5 text-4xl font-medium text-default-950">
	                        <?php echo $data['title']; ?>
                        </h2>
					<?php endif; ?>
					<?php if ( ! empty( $data['content'] ) ): ?>
                        <div class="mt-4 text-base">
	                        <?php echo $data['content'] ?>
                        </div>
					<?php endif; ?>

					<?php if ( ! empty( $data['features'] ) ): ?>
                        <ul role="list" class="my-6 space-y-2">
                            <?php foreach ( $data['features'] as $index => $feature ) : ?>
                            <li class="flex items-center gap-2">
                                <!-- svg icon -->
                                <i data-lucide="<?php echo $feature['icon'] ?>" class="inline-block size-10 text-primary"></i>
                                <div class="text-base">
                                    <?php echo apply_filters( 'the_content', $feature['content'] ) ?>
                                </div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <!-- End list -->
					<?php endif; ?>

					<?php if ( ! empty( $data['link'] ) ): ?>
                        <a href="<?php echo $data['link']['url'] ?>"
                           class="inline-flex items-center justify-center gap-2 rounded-md bg-primary/90 px-8 py-3 text-base text-white transition-all duration-500 hover:bg-primary" title="<?php echo $data['link']['title'] ?>">
	                        <?php echo $data['link']['title'] ?>
                            <i data-lucide="move-right" class="size-6"></i>
                        </a>
					<?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- About Start -->
<?php endif; ?>