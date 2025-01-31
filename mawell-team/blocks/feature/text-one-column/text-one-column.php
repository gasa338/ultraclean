<?php
$data = get_field( 'text_one_column' );
if ( ! empty( $data ) ):
	?>
    <section id="faq-single-column" class="py-10 lg:py-20">
        <div class="container mx-auto">
            <!-- Heading i tekst u jednoj koloni -->
            <div class="flex flex-col space-y-8">
				<?php if ( ! empty( $data['title'] ) || ! empty( $data['content'] ) ): ?>
                    <div class="text-center lg:text-left">

						<?php if ( ! empty( $data['title'] ) ): ?>
                            <h2 class="text-3xl font-bold mb-4"><?php echo $data['title']; ?></h2>
						<?php endif; ?>

						<?php if ( ! empty( $data['content'] ) ): ?>
                            <div class="text-lg mb-6">
	                            <?php echo apply_filters( 'the_content', $data['content'] ); ?>
                            </div>
						<?php endif; ?>
                    </div>
				<?php endif; ?>

				<?php if ( ! empty( $data['image'] ) ): $image = get_image( $data['image'] ); ?>
                    <div class="mt-8">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"
                             srcset="<?php echo $image['srcset']; ?>" class="w-full h-auto object-cover rounded-xl">
                    </div>
				<?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>