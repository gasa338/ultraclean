<!-- Start Project -->
<section id="project" class="py-10 lg:py-20">
    <div class="container">
        <div class="mb-10 flex items-end justify-between">
            <div class="mx-auto max-w-2xl text-center">
                <span
                    class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary">Our
                    Project</span>
                <h2 class="mt-4 text-4xl font-medium capitalize text-default-950">
                    Recent Endeavors
                </h2>
            </div>
        </div>
        <!-- flex End -->

        <div class="grid grid-cols-1 items-center gap-6 md:grid-cols-2">
            <div class="group relative">
                <img src="<?php echo get_template_directory_uri() .'/examples/static/images/landing/portfolio-2/img-2.jpg' ?>" class="h-full w-full rounded-xl" alt="" />

                <div
                    class="absolute inset-x-2 bottom-2 rounded-md bg-white/10 opacity-0 backdrop-blur-xl transition-all duration-500 group-hover:opacity-100">
                    <div class="p-6 text-center">
                        <h2 class="text-3xl font-medium text-white">
                            Branding Identity
                        </h2>
                        <p class="mt-2 text-base text-white">Branding</p>
                    </div>
                </div>
            </div>

            <div>
                <div class="group relative">
                    <img src="<?php echo get_template_directory_uri() .'/examples/static/images/landing/portfolio-2/img-3.jpg' ?>" class="h-full w-full rounded-xl"
                         alt="" />

                    <div
                        class="absolute inset-x-2 bottom-2 rounded-md bg-white/10 opacity-0 backdrop-blur-xl transition-all duration-500 group-hover:opacity-100">
                        <div class="p-6 text-center">
                            <h2 class="text-3xl font-medium text-white">
                                The Space Needle
                            </h2>
                            <p class="mt-2 text-base text-white">Branding</p>
                        </div>
                    </div>
                </div>

                <div class="group relative mt-5">
                    <img src="<?php echo get_template_directory_uri() .'/examples/static/images/landing/portfolio-2/img-4.jpg' ?>" class="h-full w-full rounded-xl"
                         alt="" />

                    <div
                        class="absolute inset-x-2 bottom-2 rounded-md bg-white/10 opacity-0 backdrop-blur-xl transition-all duration-500 group-hover:opacity-100">
                        <div class="p-6 text-center">
                            <h2 class="text-3xl font-medium text-white">
                                Emergency Response and Cleanup
                            </h2>
                            <p class="mt-2 text-base text-white">Branding</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5 flex justify-center">
            <div class="inline-block">
                <a href="#"
                   class="mt-6 flex items-center justify-center gap-2 rounded-md border border-default-300 px-6 py-2 text-base text-default-950 transition-all hover:border-primary hover:bg-primary hover:text-white">All
                    Project <i data-lucide="move-right" class="size-7"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- End Project -->