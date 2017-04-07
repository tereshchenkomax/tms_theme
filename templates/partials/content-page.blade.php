@php(the_content())
{!! wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
<div class="row">

    <?php
    global $post;
    $args = array( 'post_type' => 'dogs' );
    $myposts = get_posts( $args );
    foreach( $myposts as $post ){ setup_postdata($post);
    ?>
    <div class="col-sm-4">
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php the_content(); ?>
    </div>
    <?php
    }
    wp_reset_postdata();
    ?>
</div>