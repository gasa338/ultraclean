<?php

class Maxwell_Block_Finder
{

    private $post_types;
    private $data;

    /**
     * Constructor that initializes the post types and blocks data.
     */
    public function __construct()
    {
        $this->post_types = $this->get_all_post_types();
        $this->data = $this->get_all_blocks($this->post_types);
    }

    /**
     * Get all public post types.
     *
     * @return array List of public post type names.
     */
    private function get_all_post_types()
    {
        // Fetch all public post types as objects
        $post_types = get_post_types(array(
            'public' => true,
        ), 'objects');

        // Initialize an empty array to store post type names
        $output = [];

        // Iterate through each post type object and store its name in the output array
        if ($post_types) {
            foreach ($post_types as $post_type) {
                $output[] = $post_type->name;
            }
        }

        // Return the list of post type names
        return $output;
    }

    /**
     * Get all blocks used in posts of specified post types.
     *
     * @param array $post_types List of post type names.
     * @return array List of blocks used in posts, grouped by post type.
     */
    private function get_all_blocks(array $post_types = []): array
    {
        // Initialize the output arrays
        $output = [];
        $list_blocks = [];

        // Loop through each post type
        foreach ($post_types as $post) {
            // Create a new WP_Query to fetch all posts of the current post type
            $query = new WP_Query([
                'post_type' => $post,
                'posts_per_page' => -1
            ]);

            // Check if the query returned any posts
            if ($query->have_posts()) {
                $count = 0;

                // Loop through each post
                while ($query->have_posts()) {
                    $query->the_post();

                    // Store the post title
                    $output[$post][$count]['name'] = get_the_title();

                    // Parse the content of the post to get the blocks
                    $content = parse_blocks(get_the_content());

                    $blocks = [];

                    // If the content is an array, loop through each block
                    if (is_array($content)) {
                        foreach ($content as $block) {
                            // If the block has a block name, add it to the blocks array
                            if (isset($block['blockName'])) {
                                $blocks[] = $block['blockName'];

                                // If the block name is not already in the list_blocks array, add it
                                if (!in_array($block['blockName'], $list_blocks)) {
                                    $list_blocks[] = $block['blockName'];
                                }
                            }
                        }
                    }

                    // Store the blocks used in the current post
                    $output[$post][$count++]['blocks'] = $blocks;
                }
            }

            // Reset post data to ensure the global $post object is restored
            wp_reset_postdata();
        }

        // Add the list of all block names to the output
        $output['block_list'] = $list_blocks;

        return $output;
    }

    /**
     * Get the HTML representation of the blocks list.
     *
     * @return string HTML structure of the blocks list.
     */
    public function get_blocks_html()
    {
        // Loop through each post type in the data
        ?>
        <section class="py-10 lg:py-20 flex items-center justify-center min-h-screen">
            <div class="flex flex-row w-full">
                <!-- Prva kolona (2/3 širine) -->
                <div class="w-2/3 p-4">
                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full text-left text-sm font-light text-surface dark:text-white">
                                <thead class="border-b border-neutral-200 font-medium dark:border-white/10">
                                <tr>
                                    <th scope="col" class="px-6 py-4">Post Type</th>
                                    <th scope="col" class="px-6 py-4">Page</th>
                                    <th scope="col" class="px-6 py-4">Blocks</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($this->data as $post_type => $posts) {
                                    if ("block_list" != $post_type) {
                                        foreach ($posts as $index => $post): ?>
                                            <tr class="border-b border-neutral-200 dark:border-white/10">
                                                <td class="whitespace-nowrap px-6 py-4"><?php echo $post_type; ?></td>
                                                <td class="whitespace-nowrap px-6 py-4"><?php echo $post['name']; ?></td>
                                                <td class="whitespace-nowrap px-6 py-4">
                                                    <?php foreach ($post['blocks'] as $block): ?>
                                                        <p><?php echo $block; ?></p>
                                                    <?php endforeach; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach;
                                    }

                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="w-1/3 p-4">
                    <ul class="list-none">
                        <?php if (isset($this->data["block_list"])):
                            foreach ($this->data["block_list"] as $block): ?>
                            <li><?php echo $block ?></li>
                        <?php endforeach; endif; ?>
                    </ul>
                </div>
            </div>
        </section>
        <?php
    }
}
