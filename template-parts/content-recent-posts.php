<div id="recent-posts-widgets">
  <div id="recent-posts">
    
    <h2 class="tx-center">Tips & Insights Blog</h2>

    <?php 
      $postslist = get_posts('numberposts=3&order=DESC');
      foreach ($postslist as $post) : setup_postdata($post);
    ?>
      <div class="recent-post-thumbnail">
        <?php if ( has_post_thumbnail()) : ?>
          <a title="" href=' <?php the_permalink(); ?>'>
          <?php the_post_thumbnail(); ?> </a>
        <?php endif; ?>

        <span class="recent-posts-date">
          <?php the_time('F j, Y') ?>
        </span>

        <a class="recent-posts-title" title='Post: <?php the_title(); ?>' href='<?php the_permalink(); ?>'>
          <?php the_title(); ?>
        </a>
      </div>
    <?php endforeach; ?>

    <div class="view-our-blog-btn">
      <a class="green-learn-button" href="/blog/">View Our Blog</a>
    </div>

  </div><!-- End Recent Posts -->
</div><!-- End recet-posts-widgets -->