<?php
$data = get_field( 'faq_photography' );
if ( ! empty( $data ) ):
	?>
    <section id="faq" class="py-10 lg:py-20">
        <div class="container">
            <div class="mb-10 flex items-end justify-between">
                <div class="mx-auto max-w-2xl text-center">
					<?php if ( ! empty( $data['top_title'] ) ): ?>
                        <span class="border border-default-200 px-3 py-1 text-xs font-medium uppercase tracking-wider text-default-950">
                            <?php echo $data['top_title']; ?>
                        </span>
					<?php endif; ?>
					<?php if ( ! empty( $data['title'] ) ): ?>
                        <h2 class="my-4 text-3xl font-medium capitalize text-default-950">
                            <?php echo $data['title']; ?>
                        </h2>
					<?php endif; ?>
					<?php if ( ! empty( $data['content'] ) ): ?>
                        <div class="text-base">
                            <?php echo apply_filters( 'the_content',$data['content'] ) ?>
                        </div>
					<?php endif; ?>
                </div>
            </div>
            <!-- flex End -->

            <?php if ( !empty( $data['faqs'] ) ): ?>
            <div class="mx-auto max-w-3xl">
                <div class="hs-accordion-group space-y-4">
                    <?php foreach( $data['faqs'] as $key => $faq ): ?>
                    <?php if ($key === 0): ?>
                    <div class="hs-accordion active overflow-hidden border border-primary/20 hs-accordion-active:bg-primary/10" id="faq-<?php echo $key; ?>">
                        <button
                                class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-4 text-left capitalize text-default-950 transition-all"
                                aria-controls="faq-accordion-<?php echo $key; ?>"
                        >
                            <h2 class="text-xl font-medium">
                                <?php echo $faq['question'] ?>
                            </h2>
                            <i data-lucide="plus" class="size-6 transition-all duration-300 hs-accordion-active:-rotate-45"></i>
                        </button>
                        <div
                                id="faq-accordion-<?php echo $key; ?>"
                                class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                aria-labelledby="faq-<?php echo $key; ?>"
                        >
                            <div class="px-6 pb-4 pt-0">
                                <div class="text-sm">
                                    <?php echo apply_filters( 'the_content', $faq['answer'] ) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php else: ?>
                        <div
                                    class="hs-accordion overflow-hidden border border-primary/20 hs-accordion-active:bg-primary/10"
                                    id="faq-2"
                            >
                                <button
                                        class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-4 text-left capitalize text-default-950 transition-all"
                                        aria-controls="faq-2"
                                >
                                    <h5 class="text-xl font-medium">
                                        Can i bring my own pet props or accessories?
                                    </h5>
                                    <i
                                            data-lucide="plus"
                                            class="size-6 transition-all duration-300 hs-accordion-active:-rotate-45"
                                    ></i>
                                </button>
                                <div
                                        id="faq-2"
                                        class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                        aria-labelledby="faq-2"
                                >
                                    <div class="px-6 pb-4 pt-0">
                                        <p class="text-sm">
                                            Certainly! We encourage you to bring any special props or
                                            accessories that showcase your pet's unique personality. It
                                            adds a personal touch to the photos and makes the experience
                                            even more memorable.
                                        </p>
                                    </div>
                                </div>
                        </div>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
        <!-- container End-->
    </section>
<?php endif; ?>