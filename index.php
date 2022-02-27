<?php get_header();  ?>
<body>
<main>
<?php
$ourCurrentPage = get_query_var('paged');
$PaginationPost = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'paged' => $ourCurrentPage
));

if($PaginationPost->have_posts()) :
    while($PaginationPost->have_posts()) :
        $PaginationPost->the_post();
?>
        <div class="main-split">
            <div class="card">
                <div class="card-body text-center">
                    <?php the_post_thumbnail('small_thumbnail'); ?>
                    <div class="card-title">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    </div>
                    <p class="card-text"><?php echo wp_trim_words( get_the_content(), 30, ' ...' ); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
    <div class="aside">
        SIDEBARRRRRR
    </div>
    <br>
    <div class="text-center">
    <?php
    endwhile;
    echo fauzan_pagination();
    endif;
    ?>
    </div>
<br>
</main>

<div class="clear">
    <?php get_footer(); ?>
</div>
</body>