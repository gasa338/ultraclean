<!-- Hero Section Start -->
<section id="home"
         style="background-image: url(<?php echo get_template_directory_uri(); ?>/examples/static/images/landing/web-designer/img-11.png);"
         class="relative flex items-center justify-center overflow-hidden bg-[url('/static/images/landing/web-designer/img-11.png')] bg-cover bg-no-repeat py-28 dark:bg-[url('/static/images/landing/web-designer/img-11-dark.png')]"
>
    <div class="bg- absolute inset-0"></div>

    <div class="container relative">
        <div class="grid items-center gap-10 lg:grid-cols-2">
            <div class="">
                <span class="text-base font-medium">I'm Ronald Smith</span>
                <h2 class="mt-3 text-4xl/snug font-medium text-default-900">
                    Visual & Web Designer Located in Melbourne.
                </h2>
                <p class="mt-1 text-lg">
                    Curabitur ligula sapien, tincidunt non, euismod vitae, posuere
                    imperdiet, leo.
                </p>

                <div class="mb-10">
                    <div
                        class="max-w-xl rounded-md bg-default-950/20 backdrop-blur-2xl"
                    >
                        <form class="mt-6 flex w-full items-center justify-between">
                            <input
                                type="email"
                                name="email"
                                id="email"
                                class="w-full border-0 bg-transparent p-4 text-base text-default-950 placeholder:text-default-950 focus:outline-none focus:ring-0"
                                placeholder="Enter Your Email"
                                autocomplete="off"
                            />
                            <button
                                class="me-2 rounded-md border-0 bg-primary px-6 py-2 text-base font-semibold text-white backdrop-blur-2xl transition-all hover:bg-primary-700 hover:text-white"
                            >
                                <div class="flex items-center justify-center gap-1">
                                    <span>Submit</span>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </button>
                        </form>
                    </div>
                    <small class="mb-6 mt-2 text-sm"
                    >Don't miss out on your favourite username.</small
                    >
                </div>

                <a
                    href="#"
                    class="inline-flex items-center justify-center gap-2 rounded-md bg-primary px-8 py-2 text-white backdrop-blur-3xl transition-all duration-300 hover:border-primary hover:bg-primary-700"
                >Read More
                    <i data-lucide="move-right" class="size-6"></i>
                </a>
            </div>

            <div class="lg:ms-auto">
                <img src="<?php echo get_template_directory_uri() .'/examples/static/images/landing/web-designer/img.png' ?>" alt="" />
            </div>
        </div>
    </div>
    <!-- container End -->
</section>
<!-- Hero Section End -->