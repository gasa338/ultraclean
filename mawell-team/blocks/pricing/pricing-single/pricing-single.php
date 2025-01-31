<?php
$data = get_field( 'pricing_single' );
if ( ! empty( $data ) ):
	?>
    <section id="pricing" class="py-10 lg:py-20">
        <div class="container">
            <div class="grid grid-cols-1 gap-10 lg:grid-cols-3 2xl:px-10">
                <div class="lg:col-span-3">
                    <div class="relative w-full lg:w-full">
                        <div class="group">
                            <div class="w-full border border-default-200 transition-all duration-500 group-hover:-translate-y-2 group-hover:translate-x-2">
                                <div class="bg-white p-6 dark:bg-default-50">
                                    <div class="grid gap-6 md:grid-cols-3">
                                        <div class="md:col-span-2">
											<?php if ( ! empty( $data['title'] ) ): ?>
                                                <h2 class="text-2xl font-medium text-default-950">
	                                                <?php echo $data['title']; ?>
                                                </h2>
											<?php endif; ?>
											<?php if ( ! empty( $data['subtitle'] ) ): ?>
                                                <p class="mt-2 text-xs uppercase tracking-widest text-default-950">
	                                                <?php echo $data['subtitle']; ?>
                                                </p>
											<?php endif; ?>

											<?php if ( ! empty( $data['description'] ) ): ?>
                                                <div class="w-3/4 py-5 text-base/7 font-medium text-default-600">
                                                    <?php echo apply_filters( 'the_content', $data['description'] ) ?>
                                                </div>
											<?php endif; ?>
											<?php if ( ! empty( $data['link_1'] ) ): ?>
                                                <div class="flex items-center">
                                                    <a href="<?php echo $data['link_1']['url']; ?>" class="group inline-flex items-center text-lg font-semibold text-default-900"><?php echo $data['link_1']['title']; ?>
                                                        <i data-lucide="move-right" class="size-4 opacity-0 transition-all duration-500 group-hover:translate-x-2 group-hover:opacity-100"></i>
                                                    </a>
                                                </div>
											<?php endif; ?>
                                            <!-- End flex -->
                                        </div>
                                        <!-- col-span-2 end -->

                                            <div>
                                                <div class="flex-col items-center gap-4 bg-default-100 p-5 text-default-950">
													<?php if ( ! empty( $data['price'] ) ): ?>
                                                        <h2 class="text-5xl font-semibold">
                                                            <?php echo $data['price']; ?>
<!--                                                            <sup class="text-xl">$</sup>79-->
                                                        </h2>
													<?php endif; ?>
	                                                <?php if ( !empty( $data['adicional_description_big'] ) || !empty( $data['adicional_description_small'] ) ): ?>
		                                                <?php if ( ! empty( $data['adicional_description_big'] ) ): ?>
                                                            <p class="text-lg"><?php echo $data['adicional_description_big']; ?></p>
		                                                <?php endif; ?>
		                                                <?php if ( ! empty( $data['adicional_description_small'] ) ): ?>
                                                            <p class="text-xs"><?php echo $data['adicional_description_small']; ?></p>
		                                                <?php endif; ?>
	                                                <?php endif; ?>
                                                </div>
                                                <!-- End flex -->
												<?php if ( ! empty( $data['link_2'] ) ): ?>
                                                    <div class="relative z-20 mx-auto mt-5 w-full lg:w-56">
                                                        <div class="group">
                                                            <div class="w-full border border-default-200 transition-all duration-500 group-hover:-translate-y-2 group-hover:translate-x-2 group-hover:border-transparent">
                                                                <div class="relative z-10 flex h-4 items-center justify-center bg-primary p-6">
                                                                    <a class="button bg-primary text-white" href="<?php echo $data['link_2']['url']; ?>">
	                                                                    <?php echo $data['link_2']['title']; ?>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div
                                                                    class="absolute left-0 top-0 -z-10 h-full w-full bg-default-950"
                                                            ></div>
                                                        </div>
                                                    </div>
												<?php endif; ?>
                                            </div>
                                        <!-- col end -->
                                    </div>
                                    <!-- grid end -->
                                </div>
                            </div>
                            <div class="absolute left-0 top-0 -z-10 h-full w-full bg-default-950"></div>
                        </div>
                        <!-- group end -->
                    </div>
                </div>
            </div>
            <!-- grid end -->
        </div>
        <!-- container end -->
    </section>
<?php endif; ?>