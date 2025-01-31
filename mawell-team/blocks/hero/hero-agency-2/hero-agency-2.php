<?php
$title = get_field( 'hero_agency_2_title' );
$subtitle = get_field( 'hero_agency_2_subtitle' );
$link = get_field( 'hero_agency_2_link' );
$bg_image = get_field( 'hero_agency_2_bg_image' );
$image = get_field( 'hero_agency_2_image' );
?>
<!-- Hero Section Start -->
<?php if (!empty($bg_image)): ?>
<section id="home" style="background-image: url(<?php echo $bg_image; ?>);" class="py-10">
<!--    TODO: Dve pozadinske slike-->
    <?php else: ?>
    <section id="home" class="py-10">
        <?php endif; ?>
    <div class="container">
        <div class="grid items-center gap-6 lg:grid-cols-2">
            <?php if (!empty($title) || !empty($subtitle)): ?>
            <div>
                <div class="max-w-lg text-center lg:text-start">
                    <?php if (!empty($title)): ?>
                    <h2 class="text-4xl font-medium text-default-950 sm:text-5xl lg:text-6xl/tight">
                        <?php echo $title ?>
                    </h2>
                    <?php endif; ?>
                    <?php if (!empty($subtitle)): ?>
                    <div class="my-6 text-base">
                        <?php echo apply_filters( 'the_content', $subtitle ); ?>
                    </div>
                    <?php endif; ?>
                    <?php if (!empty($link)): ?>
                        <a href="<?php echo $link['url'] ?>"
                           class="inline-flex items-center justify-center gap-2 rounded-md bg-primary/90 px-8 py-3 text-base text-white transition-all duration-500 hover:bg-primary" title="<?php echo $link['title'] ?>">
		                    <?php echo $link['title'] ?>
                            <i data-lucide="move-right" class="size-6"></i>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>

            <?php if (!empty($image)): $image_src = get_image($image); ?>
            <div>
                <img
                    class="h-full w-full rounded-xl"
                    src="<?php echo $image_src['url']; ?>"
                    alt="<?php echo $image_src['alt']; ?>"
                />
            </div>
            <?php endif; ?>

        </div>
        <!-- grid End -->
    </div>
</section>
<!-- Hero end -->