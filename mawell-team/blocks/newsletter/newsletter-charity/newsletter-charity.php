<!--C:\laragon\www\maxwell\wp-content\themes\maxxwell\examples\static\images\landing\charity\img-3.jpg-->
<section  style="background-image: url(<?php echo get_template_directory_uri() . '/examples/static/images/landing/charity/img-3.jpg' ?>);"
        class="relative bg-[url('/examples/images/landing/charity/img-3.jpg')] bg-cover bg-center bg-no-repeat py-20">
    <div class="absolute inset-0 bg-black/60"></div>
    <div class="container">
        <div class="relative mx-auto mb-12 max-w-2xl text-center">
            <h2 class="mt-4 text-4xl/snug font-medium text-white">
                Stay Informed by Subscribing to Our Newsletter
            </h2>
            <p class="mt-5 text-base text-white/80">
                Receive instant news by subscribing to our daily newsletter.
            </p>

            <form class="mx-auto mt-6 max-w-xl space-y-2">
                <div class="relative">
                    <input type="email" id="subcribe"
                           class="h-12 w-full rounded-full border-default-200 bg-default-50 py-4 pe-16 ps-4 text-default-950 focus:border-default-200 focus:ring-0"
                           placeholder="Type Your Email" name="email" />
                    <button type="submit"
                            class="absolute end-[6px] top-[6px] inline-flex h-9 items-center justify-center gap-2 rounded-full bg-primary px-6 text-white transition-all hover:bg-primary-700">
                        <i data-lucide="move-right" class="size-6"></i>
                    </button>
                </div>
            </form>
            <!-- form End -->
        </div>
    </div>
    <!-- Container End -->
</section>