<?php get_header();  ?>
<body>
<main>
    <div class="main-split">
        <div class="card">
            <div class="card-body text-center">
                <?php the_post_thumbnail('small_thumbnail'); ?>
                <div class="card-title text-left">
                    <?php get_template_part('content'); ?>
                <a href="/wordpress" class="btn btn-success">Back to Home</a>
            </div>
        </div>
    </div>
    <br>
</main>
<div class="clear"></div>
<?php get_footer(); ?>

</body>
