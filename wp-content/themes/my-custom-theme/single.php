<?php get_header(); ?>

<main class="container py-5">

    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

            <article>

                <h1>
                    <?php the_title(); ?>
                </h1>

                <p class="text-muted">
                    <?php echo get_the_date(); ?>
                </p>

                <div>
                    <?php the_content(); ?>
                </div>

            </article>

            <hr>

            <!-- COMMENT -->
            <?php comments_template(); ?>

        <?php endwhile; ?>

    <?php endif; ?>

</main>

<?php get_footer(); ?>