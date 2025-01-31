<?php
$data = get_field( 'logo_portfolio' );
if ( ! empty( $data ) ):
?>
<section class="py-10 lg:py-20">
    <div class="container">
        <div class="grid grid-cols-1 items-center gap-6 xl:grid-cols-6">
            <?php if (! empty($data['title'])): ?>
            <div class="xl:col-span-2">
                <h2 class="text-3xl font-medium text-default-950 md:text-4xl/tight">
                    <?php echo $data['title']; ?>
                </h2>
            </div>
            <?php endif; ?>

            <?php if (!empty( $data['logos'] )): ?>
            <div class="xl:col-span-4">
                <div id="testimonial_directory" class="swiper">
                    <div class="swiper-wrapper">
                        <?php foreach ( $data['logos'] as $index => $logo ) : ?>
                        <div class="swiper-slide">
                            <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- End Swiper -->
            </div>
            <?php endif; ?>
        </div>
        <!-- grid End -->
    </div>
    <!-- container End -->
</section>
<?php endif; ?>