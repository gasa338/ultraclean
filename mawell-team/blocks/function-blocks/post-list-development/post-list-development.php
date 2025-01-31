<?php
$top_title = get_field('post_list_development_top_title');
$title = get_field('post_list_development_title');
$content = get_field('post_list_development_content');
$choose = get_field('post_list_development_choose');
$post_fields = get_field('post_list_development_posts');

$landings = maxwell_get_post_list_development($post_fields);
?>

<section id="demo" class="py-20">
    <div class="mx-20">
        <?php if (!empty($top_title) || !empty($title) || !empty($content)): ?>
            <div class="mx-auto mb-14 text-center">
                <?php if (!empty($top_title)): ?>
                <span class="mb-2 inline-flex rounded-lg border-x-2 border-x-primary-600 bg-primary/20 px-2 text-base font-semibold text-primary-700">
                    <?php echo $top_title; ?>
                </span>
                <?php endif; ?>
                <?php if (!empty($title)): ?>
                    <h2 class="mb-2.5 text-3xl font-semibold text-default-950">
                        <?php echo $title; ?>
                    </h2>
                <?php endif; ?>

                <?php if (!empty($content)): ?>
                    <p class="text-base text-default-900">
                        <?php echo apply_filters('the_content', $content); ?>
                    </p>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <div class="justify-content-center grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
            <?php foreach ($landings as $index => $landing): ?>
                <a class="" href="<?php echo $landing['permalink'] ?>" target="_blank">
                    <div class="group relative rounded-lg border border-default-100 bg-white text-center shadow-md transition-all duration-500 hover:-translate-y-1 dark:bg-default-50">
                        <div class="p-4">
                            <?php if (!empty($landing['thumbnail'])): ?>
                                <div class="relative overflow-hidden rounded-lg">
                                    <img alt="<?php echo $landing['thumbnail']['alt'] ?>"
                                         class="w-full rounded-lg border border-default-100 dark:hidden"
                                         src="<?php echo $landing['thumbnail']['url'] ?>"/>
                                    <img alt="<?php echo $landing['thumbnail']['alt'] ?>"
                                         class="hidden w-full rounded-lg border border-default-100 dark:block"
                                         src="<?php echo $landing['thumbnail']['url'] ?>"
                                    />
                                    <div class="absolute inset-0 flex h-full w-full cursor-pointer items-center justify-center bg-default-500/20 opacity-0 transition-all duration-300 group-hover:opacity-100">
                                        <div class="inline-flex items-center justify-center rounded-lg bg-primary py-1.5 pe-2 ps-5 text-center align-middle text-base font-semibold text-white duration-500 hover:bg-primary-600">
                                            Live Preview
                                            <span class="ms-3 inline-flex size-8 items-center justify-center rounded-md border border-white bg-white text-primary">
                                                <i class="size-5" data-lucide="external-link"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <h5 class="mt-4 text-center text-lg font-medium capitalize text-default-900">
                                <?php echo $landing['title']; ?>
                            </h5>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>