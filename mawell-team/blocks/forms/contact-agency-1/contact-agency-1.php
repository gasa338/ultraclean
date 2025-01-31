<?php
$data = get_field( 'contact_agency_1' );
if ( ! empty( $data ) ):
	?>
    <section id="contact" class="py-10 lg:py-20">
        <div class="container">
            <div class="flex flex-wrap items-center justify-around gap-6">
				<?php foreach ( $data as $index => $d ) : ?>
                    <div class="text-center">
						<?php if ( ! empty( $d['icon'] ) ): ?>
                            <div class="mx-auto flex size-20 items-center justify-center rounded-md border border-default-200 bg-white/5 text-default-950">
                                <i data-lucide="<?php echo $d['icon']?>" class="size-10"></i>
                            </div>
						<?php endif; ?>
						<?php if ( ! empty( $d['title'] ) ): ?>
                            <h4 class="mt-5 text-xl font-medium text-default-950"><?php echo $d['title']?></h4>
						<?php endif; ?>
						<?php if ( ! empty( $d['content'] ) ): ?>
                            <p class="mt-1 text-base text-default-800"><?php echo apply_filters( 'the_content', $d['content']); ?></p>
						<?php endif; ?>
                    </div>
				<?php endforeach; ?>
            </div>
            <!-- flex End -->
        </div>
        <!-- container End -->
    </section>
<?php endif; ?>