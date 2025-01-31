<?php
$data = get_field( 'company_form' );
if ( ! empty( $data ) ):
	?>
    <section class="bg-default-100 bg-cover bg-no-repeat py-10 lg:py-20 relative">
		<?php if ( ! empty( $data['background_image'] ) ): $image = get_image( $data['background_image'] ); ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"
                 class="absolute inset-0 w-full h-full object-cover pointer-events-none"/>
		<?php endif; ?>
        <div class="container relative z-10">

        <div class="grid grid-cols-1 items-center gap-6 xl:grid-cols-2">
                <div>
					<?php if ( ! empty( $data['title'] ) ): ?>
                        <h2 class="text-3xl font-medium text-default-950 md:text-4xl">
							<?php echo $data['title']; ?>
                        </h2>
					<?php endif; ?>
					<?php if ( ! empty( $data['content'] ) ): ?>
                        <div class="my-5 text-base font-medium text-default-600">
							<?php echo apply_filters( 'the_content', $data['content'] ); ?>
                        </div>
					<?php endif; ?>
					<?php if ( ! empty( $data['link'] ) ): ?>
                        <a href="<?php echo $data['link']['url']; ?>" title="<?php echo $data['link']['title']; ?>"
                           class="inline-flex h-10 items-center justify-center rounded-md bg-primary/20 px-4 text-primary transition-all hover:bg-primary hover:text-white">
                            <i data-lucide="move-right" class="size-6"></i>
                        </a>
					<?php endif; ?>
                </div>

                <div class="rounded-lg p-8">
                    <div class="rounded-md bg-white p-6 dark:bg-default-100">
						<?php if ( ! empty( $data['form_title'] ) ): ?>
                            <h3 class="text-2xl font-medium text-default-950">
								<?php echo $data['form_title']; ?>
                            </h3>
						<?php endif; ?>
						<?php if ( ! empty( $data['form_content'] ) ) : ?>
                            <div class="mt-3 text-base">
								<?php echo apply_filters( 'the_content', $data['form_content'] ) ?>
                            </div>
						<?php endif; ?>
<!--
                        <form class="mt-6 space-y-4">
                            <div>
                                <label for="name"
                                       class="mb-2 inline-block text-base font-medium text-default-950">Name</label>
                                <input type="text" id="name"
                                       class="h-12 w-full rounded border-default-200 py-4 ps-4 text-default-950 focus:border-default-200 focus:ring-0 dark:bg-default-50"
                                       placeholder="Your Name" name="name"/>
                            </div>
                            <div>
                                <label for="email"
                                       class="mb-2 inline-block text-base font-medium text-default-950">Email</label>
                                <input type="email" id="email"
                                       class="h-12 w-full rounded border-default-200 py-4 ps-4 text-default-950 focus:border-default-200 focus:ring-0 dark:bg-default-50"
                                       placeholder="Type Your email" name="email"/>
                            </div>
                            <div>
                                <label for="subject"
                                       class="mb-2 inline-block text-base font-medium text-default-950">Subject</label>
                                <input type="text" id="subject"
                                       class="h-12 w-full rounded border-default-200 py-4 ps-4 text-default-950 focus:border-default-200 focus:ring-0 dark:bg-default-50"
                                       placeholder="Your message subject" name="subject"/>
                            </div>
                            <button class="rounded bg-black px-6 py-2 text-lg text-white">
                                Send
                            </button>
                        </form>
                        -->
                        <?php echo do_shortcode( '[contact-form-7 id="8e45921" title="Contact form"]' ); ?>
                        <!-- form End -->
                    </div>
                </div>
            </div>
            <!-- grid End -->
        </div>
        <!-- container End -->
    </section>
<?php endif; ?>