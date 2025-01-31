<!-- Start About -->
<section id="about" class="bg-white py-10 dark:bg-default-50 lg:py-20">
    <div class="grid items-center gap-6 lg:grid-cols-2">
        <div class="relative h-[650px]">
            <div
                class="absolute inset-0 bg-cover bg-center bg-no-repeat"
                style="
            background-image: url(<?php echo get_template_directory_uri(); ?>/examples/static/images/landing/marketing/img-5.jpg);
          "
            >
                <div class="bg-black/2 0 absolute inset-0 h-full w-full"></div>
            </div>
            <div class="relative h-full">
                <div class="flex h-full items-center justify-center">
                    <button
                        class="relative flex size-20 items-center justify-center gap-2.5 rounded-full bg-primary text-base font-medium text-white ring-4 ring-primary/25 transition-all duration-300 hover:bg-primary"
                        data-hs-overlay="#watchvideomodal"
                    >
                        <i data-lucide="play" class="size-7 fill-white"></i>
                    </button>
                </div>
                <!-- col end -->
            </div>
        </div>
        <!-- Container End -->

        <div class="py-10">
            <div class="max-w-lg px-10 md:ms-20">
          <span
              class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
          >About</span
          >
                <h2 class="mt-5 text-4xl font-medium text-default-950">
                    Our mission is to bridge the gap between business and the digital
                    world.
                </h2>
                <p class="mt-4 text-base">
                    Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper
                    libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc,
                    blandit vel, luctus pulvinar, hendrerit id, lorem.
                </p>
                <div class="group mt-6">
                    <a href="javascript:void(0);" class="text-lg text-default-950"
                    >Read More
                        <i
                            data-lucide="move-right"
                            class="inline-block size-6 opacity-0 transition-all duration-500 will-change-transform group-hover:translate-x-2 group-hover:opacity-100"
                        ></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About -->