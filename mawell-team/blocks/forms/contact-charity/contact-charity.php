<section id="contact" class="py-10 lg:py-20">
    <div class="container">
        <div class="relative z-20">
            <div class="hidden xl:block">
                <div style="background-image: url(<?php echo get_template_directory_uri(); ?>/examples/static/images/landing/agency/dot.svg);"
                    class="before:absolute before:-end-10 before:-top-10 before:-z-10 before:h-24 before:w-24 before:bg-[url('../images/other/dot.svg')]"
                ></div>
                <div style="background-image: url(<?php echo get_template_directory_uri(); ?>/examples/static/images/landing/agency/dot.svg);"
                    class="after:absolute after:-bottom-10 after:-start-10 after:-z-10 after:h-24 after:w-24 after:bg-[url('../images/other/dot.svg')]"
                ></div>
            </div>

            <div class="grid gap-6 xl:grid-cols-2">
                <div class="group relative">
                    <img
                        src="<?php echo get_template_directory_uri() .'/examples/static/images/landing/charity/img-11.jpg' ?>"
                        class="h-full w-full rounded-xl"
                        alt=""
                    />
                    <div class="absolute inset-0 rounded-xl">
                        <div class="flex h-full items-end justify-center">
                            <div
                                class="m-6 mx-auto max-w-md rounded-xl bg-white/10 p-4 text-center backdrop-blur-xl"
                            >
                                <h2 class="text-4xl/snug font-medium text-white">
                                    Would you like to support our mission?
                                </h2>
                                <p class="mt-5 text-base text-white/80">
                                    Complete the form and become a part of our community.
                                </p>
                            </div>
                        </div>
                        <!-- flex  End -->
                    </div>
                </div>
                <!-- col End -->

                <div>
                    <div class="rounded-md bg-default-100 p-8 dark:bg-default-50">
                        <form class="relative">
                            <h2 class="text-2xl font-medium text-default-950">
                                Join Us Today!
                            </h2>
                            <div class="my-6 space-y-6">
                                <div>
                                    <input
                                        type="text"
                                        class="block w-full rounded-full border-default-200 px-4 py-3 text-base text-default-950 focus:border-default-300 focus:ring-transparent dark:bg-default-50"
                                        id="formFirstName"
                                        placeholder="Your first name..."
                                        required=""
                                    />
                                </div>
                                <!-- col End -->

                                <div>
                                    <input
                                        type="email"
                                        class="block w-full rounded-full border-default-200 px-4 py-3 text-base text-default-950 focus:border-default-300 focus:ring-transparent dark:bg-default-50"
                                        id="formEmail"
                                        placeholder="Your email..."
                                        required=""
                                    />
                                </div>
                                <!-- col End -->

                                <div>
                                    <input
                                        type="text"
                                        class="block w-full rounded-full border-default-200 px-4 py-3 text-base text-default-950 focus:border-default-300 focus:ring-transparent dark:bg-default-50"
                                        id="formSubject"
                                        placeholder="Studying Class"
                                        required=""
                                    />
                                </div>
                                <!-- col End -->

                                <div>
                                    <input
                                        type="text"
                                        class="block w-full rounded-full border-default-200 px-4 py-3 text-base text-default-950 focus:border-default-300 focus:ring-transparent dark:bg-default-50"
                                        id="formSubject"
                                        placeholder="Type Your Requirements"
                                        required=""
                                    />
                                </div>
                                <!-- col End -->
                            </div>
                            <!-- grid End -->

                            <button
                                type="submit"
                                class="flex w-full items-center justify-center rounded-full bg-primary py-3 text-base text-white transition-all hover:bg-primary-700"
                            >
                                Submit Now
                            </button>
                        </form>
                        <!-- From End -->
                    </div>
                </div>
                <!-- col End -->
            </div>
            <!-- grid End -->
        </div>
    </div>
    <!-- Container End -->
</section>