<?php get_header(); ?>

<main id="main" class="container section">
    <h1>
        <?php
        echo esc_html(
            is_home()
                ? __('Latest Posts', 'rookit-collection')
                : get_the_archive_title()
        );
        ?>
    </h1>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class('post-card'); ?>>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_excerpt(); ?>
            </article>
        <?php endwhile; ?>

        <?php the_posts_pagination(); ?>
    <?php else : ?>
        <p>No posts found.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
