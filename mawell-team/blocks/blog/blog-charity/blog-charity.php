<?php
?>

<section id="blog" class="py-10 lg:pb-20">
    <div class="container">
        <div class="grid items-center gap-6 lg:grid-cols-2">
            <div>
                <span
                    class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary">How
                    You Can Make a Difference</span>
                <h2 class="mt-4 text-4xl/snug font-medium text-default-950">
                    It's incredibly straightforward.
                </h2>
                <p class="mt-5 text-base">
                    Children growing up in poverty encounter significant challenges:
                    hunger and malnutrition, restricted access to education and
                    healthcare, social discrimination, and isolation.
                </p>
                <div class="mt-10">
                    <a href="#"
                       class="inline-flex items-center justify-center gap-2 rounded-md bg-primary px-8 py-2 text-base text-white transition-all hover:bg-primary-700">Read
                        More
                        <i data-lucide="move-right" class="size-6"></i>
                    </a>
                </div>
            </div>
            <!-- col End -->

            <div>
                <div class="choose-image relative">
                    <img src="<?php echo get_template_directory_uri() .'/examples/static/images/landing/charity/img-8.png' ?>" alt="image" />

                    <div class="choose-image-shape hidden md:block">
                        <div class="absolute left-0 top-0 z-10 animate-[moveLeftBounce_3s_linear_infinite]">
                            <img src="<?php echo get_template_directory_uri() .'/examples/static/images/landing/charity/bg-3.png' ?>" alt="image" />
                        </div>
                        <div
                            class="absolute right-[-10%] top-2/4 -z-10 -translate-y-2/4 animate-[moveLeftBounce_3s_linear_infinite]">
                            <img src="<?php echo get_template_directory_uri() .'/examples/static/images/landing/charity/bg-4.png' ?>" alt="image" />
                        </div>
                        <div
                            class="absolute bottom-[10%] left-[12%] -z-10 animate-[moveLeftBounce_3s_linear_infinite]">
                            <img src="<?php echo get_template_directory_uri() .'/examples/static/images/landing/charity/bg-5.png' ?>" alt="image" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- col End -->
        </div>
        <!-- grid End -->
    </div>
    <!-- Container End -->
</section>
