<?php get_header();  global $wp_query; ?>
<body>
<main>
    <div class="main-split">
        <header class="mb-5">
            <h1>
<!--                --><?php //echo $wp_query -> found_posts; ?>
                <?php _e('Search Results Found For', 'locale'); ?> : <b><?php the_search_query(); ?></b>
            </h1>
        </header>
        <?php if(have_posts()) { ?>
            <?php while(have_posts()) {
                the_post();  ?>
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
            <br>
        <?php } ?>
    </div>
    <div class="text-center">
        <?php fauzan_pagination(); ?>
    </div>
    <?php } else {

    } ?>
    <br>
</main>
<!--Memanggil Widget-->
<aside>
    <?php dynamic_sidebar('sidebar1') ?>
</aside>
<div class="clear"></div>
<?php get_footer(); ?>
</body>