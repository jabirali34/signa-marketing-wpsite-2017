<div class="f-content-container" id="featured-blog-podcast">
    <div class="fbp-col featured-podcast">
        <h2>Get Answers</h2>
        <?php
        //TODO: use this as fallback method in case API fails.
        // $args_dev = array(
        //     'posts_per_page'   => 1,
        //     'orderby'          => 'date',
        //     'order'            => 'DESC',
        //     'post_type'        => 'blueprint',
        //     'post_status'      => 'publish',
        // );

        // $postslist = get_posts($args_dev);
        // foreach ($postslist as $post) : setup_postdata($post);
        //     $post_date = get_the_date('F j, Y');
        $episodeUrl = "https://www.googleapis.com/youtube/v3/playlistItems?part=snippet%2CcontentDetails&maxResults=1&playlistId=PLgYQOthMaU5nohSiMIiYdCVQfF6e_1QrD&key=AIzaSyClgIZZSzWmrdaVKo9ipNP-AVVMZIQmyAY";

        $response = wp_remote_get($episodeUrl);
        $responseBody = wp_remote_retrieve_body($response);
        $episodeDetails =  json_decode($responseBody, true);
        $episodeDetails = $episodeDetails["items"][0]["snippet"];
        $title = format_featured_podcast_title($episodeDetails["title"]);
        $imageUrl = $episodeDetails["thumbnails"]["maxres"]["url"];

        ?>
        <a class="fbp-box" href="https://www.youtube.com/watch?v=aXlDZZriQe0&list=PLgYQOthMaU5nohSiMIiYdCVQfF6e_1QrD" target="_blank">
            <?php
            echo get_thumbnail_styles($imageUrl, '#featured-blog-podcast .fbp-col.featured-podcast .fbp-box .fbp-img');
            ?>

            <div class="fbp-img"></div>
            <div class="fbp-text">
                <p>Watch Video</p>

                <h3><?php echo $title; ?></h3>

                <p class="btn orange">View All Episodes</p>
            </div>
        </a>
        <?php // endforeach; 
        ?>

    </div>
    <div class="fbp-col featured-blog">
        <h2>Tips & Insights</h2>
        <?php
        $args_dev = array(
            'posts_per_page'   => 1,
            'orderby'          => 'date',
            'order'            => 'DESC',
            'post_type'        => 'post',
            'post_status'      => 'publish',
        );

        $postslist = get_posts($args_dev);
        foreach ($postslist as $post) : setup_postdata($post);
            $post_date = get_the_date('F j, Y');
        ?>
            <a class="fbp-box" href="<?php echo the_permalink(); ?>">
<!-- Implemented YT API -->
                <?php
                // Gets the image array and selects the first index of array which is the URL we want.
                $thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large')[0];

                // get_webp_thumbnail_styles returns the needed styles to either display a webp image (if one exists), or the default image
                echo get_thumbnail_styles($thumb_url, '#featured-blog-podcast .fbp-col.featured-blog .fbp-box .fbp-img');

                ?>
                <div class="fbp-img"></div>

                <div class="fbp-text">
                    <p>Read Blog</p>

                    <!-- Get the title and shorten it -->
                    <h3><?= shorten_text_to_length(get_the_title(), 60); ?></h3>

                    <p class="btn orange">View Our Blog</p>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>