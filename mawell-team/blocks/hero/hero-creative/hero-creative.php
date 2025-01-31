<!-- Hero Section Start -->
<section
    id="home"
    style="background-image: url(<?php echo get_template_directory_uri(); ?>/examples/static/images/other/bg-lines-2.png);"
    class="bg-[url('/static/images/other/bg-lines-2.png')] bg-cover bg-no-repeat dark:bg-[url('/static/images/other/bg-lines-2-dark.png')]"
>
    <div class="grid grid-cols-1 items-end gap-6 xl:grid-cols-5">
        <div class="xl:col-span-3">
            <!-- Swiper -->
            <div class="swiper mySwiper swiper-hero">
                <div class="swiper-wrapper">
                    <div class="swiper-slide relative">
                        <img
                            src="<?php echo get_template_directory_uri() .'/examples/static/images/landing/creative/img-2.jpg' ?>"
                            class="h-full w-full"
                        />
                        <div class="absolute inset-0 bg-black/40"></div>
                    </div>
                    <!-- swiper-slide end -->

                    <div class="swiper-slide relative">
                        <img
                            src="<?php echo get_template_directory_uri() .'/examples/static/images/landing/creative/img-3.jpg' ?>"
                            class="h-full w-full"
                        />
                        <div class="absolute inset-0 bg-black/40"></div>
                    </div>
                    <!-- swiper-slide end -->

                    <div class="swiper-slide relative">
                        <img
                            src="<?php echo get_template_directory_uri() .'/examples/static/images/landing/creative/img-1.jpg' ?>"
                            class="h-full w-full"
                        />
                        <div class="absolute inset-0 bg-black/40"></div>
                    </div>
                    <!-- swiper-slide end -->
                </div>
            </div>
            <!-- Swiper end -->
        </div>
        <!-- col-span-3 end -->

        <div class="relative p-6 xl:col-span-2 xl:p-0">
            <!-- Swiper -->
            <div class="swiper mySwiper2 swiper-hero relative me-10">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div
                            class="flex flex-col items-start justify-end pb-28 xl:h-full"
                        >
                            <!-- <span class="text-base font-medium uppercase tracking-wider text-default-800">Digital agency</span> -->
                            <h2
                                class="mt-6 max-w-2xl text-4xl font-semibold text-default-950"
                            >
                                Crafting Vision into Reality: Design Agency at Your Service
                            </h2>
                            <p class="mt-5 w-3/4 text-base font-medium">
                                Their ability to understand our vision and translate it into
                                a comprehensive marketing strategy is truly exceptional.
                            </p>
                        </div>
                    </div>
                    <!-- swiper-slide end -->

                    <div class="swiper-slide">
                        <div
                            class="flex flex-col items-start justify-end pb-28 xl:h-full"
                        >
                            <!-- <span class="text-base font-medium uppercase tracking-wider text-default-800">Digital agency</span> -->
                            <h2
                                class="mt-6 max-w-2xl text-4xl font-semibold text-default-950"
                            >
                                Innovative Design Solutions: Unleashing Creativity for You
                            </h2>
                            <p class="mt-5 w-3/4 text-base font-medium">
                                Their ability to understand our vision and translate it into
                                a comprehensive marketing strategy is truly exceptional.
                            </p>
                        </div>
                    </div>
                    <!-- swiper-slide end -->

                    <div class="swiper-slide">
                        <div
                            class="flex flex-col items-start justify-end pb-28 xl:h-full"
                        >
                            <!-- <span class="text-base font-medium uppercase tracking-wider text-default-800">Digital agency</span> -->
                            <h2
                                class="mt-6 max-w-2xl text-4xl font-semibold text-default-950"
                            >
                                Design Excellence Redefined: Elevate Your Brand with Our
                                Agency
                            </h2>
                            <p class="mt-5 w-3/4 text-base font-medium">
                                Their ability to understand our vision and translate it into
                                a comprehensive marketing strategy is truly exceptional.
                            </p>
                        </div>
                    </div>
                    <!-- swiper-slide end -->
                </div>
            </div>
            <!-- Swiper end -->

            <div class="absolute inset-x-0 bottom-8 z-10">
                <div class="relative flex items-center justify-end gap-5 pe-10">
                    <div class="cre-button-prev">
                        <div
                            class="flex size-14 items-center justify-center rounded-full border border-default-200 bg-default-50 text-default-900 hover:bg-primary hover:text-white"
                        >
                            <i data-lucide="arrow-left" class="size-7"></i>
                        </div>
                    </div>
                    <div class="cre-button-next">
                        <div
                            class="flex size-14 items-center justify-center rounded-full border border-default-200 bg-default-50 text-default-900 hover:bg-primary hover:text-white"
                        >
                            <i data-lucide="arrow-right" class="size-7"></i>
                        </div>
                    </div>
                </div>
                <!-- flex end -->
            </div>
        </div>
        <!-- col end -->
    </div>
    <!-- grid end -->
</section>