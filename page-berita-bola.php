<?php get_header();  ?>
<body>
<main>
    <?php
    $ourCurrentPage = get_query_var('paged');
    $PaginationPost = new WP_Query(array(
        'post_type'      => 'post',
        'posts_per_page' => 999,
        'cat' => 3,
        'paged' => $ourCurrentPage
    ));

    if ($PaginationPost->have_posts()) :
        while ($PaginationPost->have_posts()) :
            $PaginationPost->the_post();
            ?>
            <div class="main-split">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <?php the_post_thumbnail(); ?>
                            <div class="card-body">
                                <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                <p class="card-text"><?php echo wp_trim_words( get_the_content(), 30, ' ...' ); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <?php the_post_thumbnail(); ?>
                            <div class="card-body">
                                <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                <p class="card-text"><?php echo wp_trim_words( get_the_content(), 30, ' ...' ); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <?php the_post_thumbnail(); ?>
                            <div class="card-body">
                                <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                <p class="card-text"><?php echo wp_trim_words( get_the_content(), 30, ' ...' ); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
    </div>
    <div class="text-center">
        <?php fauzan_pagination(); ?>
    </div>

    <div class="clear">
        <?php get_footer(); ?>
    </div>

</main>
</body>