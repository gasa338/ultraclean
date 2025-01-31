<?php
$data = get_field( 'marque_1' );
if ( ! empty( $data ) ):
?>
<section>
    <div class="relative m-auto flex gap-28 overflow-hidden border border-default-200 py-8">
        <div class="marquee__group flex min-w-full flex-shrink-0 items-center justify-around gap-28">
            <?php foreach ( $data['data'] as $index => $item ) :  ?>
            <div class="py-3">
                <h2 class="flex text-5xl font-medium text-default-950">
                    <?php echo $item['text']; ?>
                </h2>
            </div>
            <?php endforeach; ?>
        </div>
        <!-- marquee__group End-->

        <div aria-hidden="true" class="marquee__group flex min-w-full flex-shrink-0 items-center justify-around gap-28">
	        <?php foreach ( $data['data'] as $index => $item ) : ?>
            <div class="py-3">
                <h2 class="flex text-5xl font-medium text-default-950">
	                <?php echo $item['text']; ?>
                </h2>
            </div>
	        <?php endforeach; ?>
        </div>
        <!-- marquee__group End-->
    </div>
    <!-- flex End -->
</section>
<?php endif; ?>