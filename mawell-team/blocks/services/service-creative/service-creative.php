<?php
$data = get_field( 'service_creative' );
if ( ! empty( $data ) ):
?>
<!-- Start Services -->
<section id="services" class="py-10 lg:py-20">
    <div class="container">
        <div class="grid grid-cols-1 gap-10 lg:grid-cols-2">
            <div class="2xl:py-20">
                <div class="mb-10 flex items-end justify-between">
                    <div class="mx-auto max-w-md text-center lg:text-start xl:ms-0">
                        <?php if ($data['top_title']): ?>
                        <span class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary">
                            <?php echo $data['top_title']; ?>
                        </span>
                        <?php endif; ?>

	                    <?php if ( ! empty( $data['title'] ) ): ?>
                            <h2 class="my-4 text-4xl font-medium text-default-950">
			                    <?php echo $data['title']; ?>
                            </h2>
	                    <?php endif; ?>
                        <?php if ($data['content']): ?>
                        <div class="mt-5 text-base">
                            <?php echo apply_filters('the_content', $data['content'] ); ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- flex End -->

                <div class="rounded-md bg-default-50">
                    <div class="grid 2xl:grid-cols-2">
                        <?php if (!empty($data['left_features'])): ?>
                        <div class="divide-y divide-white/10">
	                        <?php foreach ( $data['left_features'] as $index => $left ) : ?>
                            <div class="flex items-center justify-between p-6">
                                <h3 class="text-2xl font-medium text-default-950">
                                    <?php echo $left['title']; ?>
                                </h3>
                                <div class="flex size-12 cursor-pointer items-center justify-center rounded-md border border-default-200 bg-white/5 text-default-950 transition-all hover:bg-white hover:text-primary">
                                    <?php if( !empty($left['link']) ): ?>
                                        <a href="<?php echo $left['link']['url'] ?>"><i data-lucide="move-right" class="size-6"></i></a>
                                    <?php else: ?>
                                        <i data-lucide="move-right" class="size-6"></i>
                                    <?php endif; ?>
                                </div>
                            </div>
	                        <?php endforeach; ?>
                        </div>
                        <!-- col End -->
                        <?php endif; ?>
	                    <?php if (!empty($data['right_features'])): ?>
                        <div class="divide-y divide-white/10 border-t border-default-200 2xl:border-s 2xl:border-t-0">
		                    <?php foreach ( $data['right_features'] as $index => $right ) : ?>
                            <div class="flex items-center justify-between p-6">
                                <h3 class="text-2xl font-medium text-default-950">
                                    <?php echo $right['title']; ?>
                                </h3>
                                <div class="flex size-12 cursor-pointer items-center justify-center rounded-md border border-default-200 bg-white/5 text-default-950 transition-all hover:bg-white hover:text-primary">
	                                <?php if( !empty($right['link']) ): ?>
                                        <a href="<?php echo $right['link']['url'] ?>"><i data-lucide="move-right" class="size-6"></i></a>
	                                <?php else: ?>
                                        <i data-lucide="move-right" class="size-6"></i>
	                                <?php endif; ?>
                                </div>
                            </div>
		                    <?php endforeach; ?>
                        </div>
                        <!-- col End -->
	                    <?php endif; ?>

                    </div>
                    <!-- grid End -->
                </div>
            </div>
            <!-- col End -->

            <?php if (!empty($data['image'])): $image = get_image($data['image']); ?>
            <div class="relative overflow-hidden rounded-md">
                <img
                    src="<?php echo $image['url'] ?>"
                    class="h-full w-full rounded-md"
                    alt="<?php echo $image['alt'] ?>"
                />
                <div class="absolute inset-0 bg-black/60"></div>
            </div>
            <?php endif; ?>
            <!-- col End -->
        </div>
        <!-- grid End -->
    </div>
    <!-- container End -->
</section>
<?php endif; ?>