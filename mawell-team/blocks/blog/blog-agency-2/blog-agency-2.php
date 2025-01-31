<?php
$top_title = get_field('blog_agency_2_top_title');
$title = get_field('blog_agency_2_title');
$choose = get_field('blog_agency_2_choose');
$post_fields = get_field('blog_agency_2_posts');

$posts = maxwell_get_post_latest_extended($choose, $post_fields);
?>

<!-- Start Blog -->
<section id="blog" class="py-10 lg:py-20">
    <div class="container">

        <?php if (!empty( $top_title ) ||  !empty($title) ): ?>
        <div class="mb-10 flex items-end justify-between">
            <div class="mx-auto max-w-2xl text-center">
                <?php if(!empty( $top_title )): ?>
                <span class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary">
                    <?php echo $top_title; ?>
                </span>
                <?php endif; ?>
                <?php if(!empty( $title )): ?>
                <h2 class="my-4 text-3xl font-medium capitalize text-default-950">
                    <?php echo $title; ?>
                </h2>
                <?php endif; ?>
            </div>
        </div><!-- flex End -->
        <?php endif; ?>
            <div class="grid gap-6 xl:grid-cols-3">

                <?php foreach ($posts as $post) : ?>
                <div class="overflow-hidden rounded-lg border border-default-200">
                    <div class="flex flex-col">
                        <?php if (!empty($post['thumbnail'])): ?>
                        <div class="">
                            <img  class="h-full max-w-full" src="<?php echo $post['thumbnail']['url'] ?>" alt="<?php echo $post['thumbnail']['alt'] ?>" />
                        </div>
                        <?php endif; ?>

                        <div class="group p-6">
                            <?php if (!empty($post['title'])): ?>
                            <h3 class="mb-4 text-xl font-medium text-default-950">
                                <?php echo $post['title']; ?>
                            </h3>
                            <?php endif; ?>
                            <?php if (!empty($post['excerpt'])): ?>
                            <p class="mb-5 mt-3 text-base">
                                <?php echo $post['excerpt']; ?>
                            </p>
                            <?php endif; ?>
                            <a href="javascript:void(0);" class="text-lg font-medium text-default-950">Read More
                                <i data-lucide="move-right"
                                   class="duration-400 inline-block size-5 opacity-0 transition-all will-change-transform group-hover:translate-x-2 group-hover:opacity-100"></i>
                            </a>
                        </div>
                    </div>
                    <!-- grid End -->
                </div>
                <!-- col End -->

                <?php endforeach; ?>
            </div>
        <!-- Grid End -->
    </div>
    <!-- container End -->
</section>
<!-- End Blog -->