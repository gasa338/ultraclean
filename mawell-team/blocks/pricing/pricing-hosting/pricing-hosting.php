<?php
$data = get_field( 'pricing_hosting' );
if ( ! empty( $data ) ):
	?>
    <section id="pricing" class="py-10 lg:py-20">
        <div class="container">
            <div class="mx-auto mb-12 max-w-xl text-center">
				<?php if ( ! empty( $data['title'] ) ): ?>
                    <h2 class="text-3xl font-medium text-default-950 md:text-4xl">
						<?php echo $data['title']; ?>
                    </h2>
				<?php endif; ?>
            </div>

            <div class="grid grid-cols-1 gap-10 lg:grid-cols-3 2xl:px-10">
				<?php foreach ( $data['plans'] as $index => $plan ): ?>
                    <div>
                        <div class="relative mx-auto w-full lg:w-full">
                            <div class="group">
                                <div class="w-full border border-default-200 transition-all duration-500 group-hover:-translate-y-2 group-hover:translate-x-2">
                                    <div class="bg-white p-6 dark:bg-default-50">
										<?php if ( ! empty( $plan['name'] ) ): ?>
                                            <h2 class="text-center text-2xl font-medium text-default-950">
                                                <?php echo $plan['name']; ?>
                                            </h2>
										<?php endif; ?>
										<?php if ( ! empty( $plan['description'] ) ): ?>
                                            <p class="mt-1 text-center text-xs uppercase tracking-widest text-default-950">
	                                            <?php echo $plan['description']; ?>
                                            </p>
										<?php endif; ?>
                                        <div class="mt-6 flex-col items-center gap-4 bg-default-100 p-5 text-default-950">

											<?php if ( ! empty( $plan['price'] ) ): ?>
                                                <h2 class="text-3xl font-semibold">
                                                    <?php echo $plan['price']; ?>
                                                    <!--  <sup class="text-xl">$</sup>8-->
                                                </h2>
											<?php endif; ?>
											<?php if ( !empty( $plan['adicional_description_big'] ) || !empty( $plan['adicional_description_small'] ) ): ?>
<!--                                                <div class="mt-6">-->
													<?php if ( ! empty( $plan['adicional_description_big'] ) ): ?>
                                                        <p class="text-lg"><?php echo $plan['adicional_description_big']; ?></p>
													<?php endif; ?>
													<?php if ( ! empty( $plan['adicional_description_small'] ) ): ?>
                                                        <p class="text-xs"><?php echo $plan['adicional_description_small']; ?></p>
													<?php endif; ?>
<!--                                                </div>-->
											<?php endif; ?>
                                        </div>
                                        <?php if ( !empty($plan['characteristics'])): ?>
                                        <ul role="list" class="mt-3 text-sm text-default-700">
                                            <?php foreach ( $plan['characteristics'] as $characteristic ) : ?>
                                            <li class="flex items-center gap-2">
                                                <i data-lucide="dot" class="inline-block size-9 text-primary"></i>
                                                <span class="text-base text-default-950"><?php echo $characteristic['item'] ?></span>
                                            </li>
                                            <?php endforeach; ?>
                                        </ul>
                                        <?php endif; ?>

                                        <?php if ($plan['link']): ?>
                                        <div class="relative z-20 mx-auto mt-5 w-full lg:w-56">
                                            <div class="group">
                                                <div class="w-full border border-default-200 transition-all duration-500 group-hover:-translate-y-2 group-hover:translate-x-2 group-hover:border-transparent">
                                                    <div class="relative z-10 flex h-4 items-center justify-center bg-primary p-6">
                                                        <a class="button bg-primary text-white" href="<?php echo $plan['link']['url']; ?>">
	                                                        <?php echo $plan['link']['title']; ?>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="absolute left-0 top-0 -z-10 h-full w-full bg-default-950"></div>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="absolute left-0 top-0 -z-10 h-full w-full bg-default-950"></div>
                            </div>
                            <!-- group end -->
                        </div>
                    </div>
				<?php endforeach; ?>

            </div>
            <!-- grid end -->
        </div>
        <!-- container end -->
    </section>
<?php endif; ?>