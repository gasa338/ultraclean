<?php
$data = get_field( 'text_two_column' );
if ( ! empty( $data ) ):
	?>

    <section id="faq-two-column" class="py-10 lg:py-20">
        <div class="container mx-auto">
            <div class="flex flex-col space-y-8">
				<?php if ( ! empty( $data['title'] ) ): ?>
                    <div class="text-center lg:text-left">
                        <h2 class="text-3xl font-bold mb-4"><?php echo $data['title']; ?></h2>
                    </div>
				<?php endif; ?>
				<?php if ( ! empty( $data['content_left'] ) || ! empty( $data['content_right'] ) ): ?>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
						<?php if ( ! empty( $data['content_left'] ) ): ?>
                            <div class="text-lg">
	                            <?php echo apply_filters( 'the_content', $data['content_left'] ); ?>
                            </div>
						<?php endif; ?>
						<?php if ( ! empty( $data['content_right'] ) ): ?>
                            <div class="text-lg">
                                <?php echo apply_filters( 'the_content', $data['content_right'] ); ?>
                            </div>
						<?php endif; ?>
                    </div>
				<?php endif; ?>
				<?php if ( ! empty( $data['image'] ) ): $image = get_image( $data['image'] ); ?>
                    <div class="mt-8">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"
                             srcset="<?php echo $image['srcset']; ?>" class="w-full h-auto object-cover">
                    </div>
				<?php endif; ?>
            </div>
        </div>
    </section>

<?php endif; ?>