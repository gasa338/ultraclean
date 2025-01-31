<?php
$top_title = get_field('feature_agency_2_title');
$title = get_field('feature_agency_2_top_title');
$features = get_field('feature_agency_2_features');
$icon_type = get_field('feature_agency_2_icon_type');
?>
<!-- Start features -->
<section id="features" class="py-10 lg:py-20">
    <div class="container">
        <?php if ( !empty($title) || !empty($top_title) ): ?>
        <div class="mb-10 flex items-end justify-between">
            <div class="mx-auto max-w-2xl text-center">
                <?php if ( !empty($top_title) ): ?>
                <span class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary">
                    <?php echo $top_title ?>
                </span>
                <?php endif; ?>
                <?php if ( !empty($title) ): ?>
                <h2 class="my-4 text-4xl font-medium capitalize text-default-950">
                    <?php echo $title; ?>
                </h2>
                <?php endif; ?>
            </div>
        </div><!-- flex End-->
        <?php endif; ?>

        <?php if ( !empty($features) ): ?>
        <div class="grid grid-cols-1 items-center overflow-hidden rounded-md border border-default-200 md:grid-cols-2 xl:grid-cols-3">
            <?php foreach ($features as $index => $feature) : ?>
                <div class="group border-default-200 <?php echo $index == 1 ? "xl:border-s": "" ?>  <?php echo $index == 2 ? "md:border-s": "" ?>">
                    <div class="p-8 sm:p-10">

                        <?php if ($icon_type): ?>
                            <span>
                                <img class="size-14 text-default-950" src="<?php echo $feature['icon']['url']; ?>" alt="<?php echo $feature['icon']['alt']; ?>" />
                            </span>
                        <?php else: ?>
                            <span>
                                <i data-lucide="<?php echo $feature['lucide_icon'] ?>" class="size-14 text-default-950"></i>
                            </span>
                        <?php endif; ?>
                        <?php if (!empty($feature['title'])): ?>
                        <h2 class="mb-4 mt-8 text-2xl font-medium text-default-950">
                            <?php echo $feature['title']; ?>
                        </h2>
                        <?php endif; ?>
                        <?php if (!empty($feature['content'])): ?>
                        <div class="mb-6 text-base text-default-600">
                            <?php echo apply_filters( 'the_content', $feature['content'] ); ?>
                        </div>
                        <?php endif; ?>
                        <?php if (!empty($feature['link'])): ?>
                        <a href="<?php echo $feature['link']['url']; ?>" class="text-lg font-medium text-default-950"><?php echo $feature['link']['title']; ?>
                            <i data-lucide="move-right"
                               class="inline-block size-6 opacity-0 transition-all duration-500 will-change-transform group-hover:translate-x-2 group-hover:opacity-100"></i>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- end col -->
            <?php endforeach; ?>
        </div><!-- grid End-->
        <?php endif; ?>
    </div>
    <!-- container End-->
</section>
<!-- End features -->