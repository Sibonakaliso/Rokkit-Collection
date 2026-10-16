<?php
get_header();

// Place hero.jpg and about.jpg inside assets/img, or update these filenames.
$hero_image  = rookit_collection_image_url('hero.jpg');
$about_image = rookit_collection_image_url('about.jpg');
$shop_url    = rookit_collection_shop_url();
?>

<main id="main">
    <!-- Hero -->
    <section class="hero">
        <div class="container hero-grid">
            <div class="hero-content">
                <p class="eyebrow">EVERYDAY STYLE, REDEFINED</p>
                <h1>Essentials for every day.</h1>
                <p class="hero-copy">
                    Discover comfortable clothing and accessories designed
                    to fit your everyday routine.
                </p>
                <a class="button" href="<?php echo esc_url($shop_url); ?>">
                    Shop the collection <span aria-hidden="true">&rarr;</span>
                </a>
            </div>

            <div class="hero-art">
                <?php if ($hero_image) : ?>
                    <img
                        class="hero-photo"
                        src="<?php echo esc_url($hero_image); ?>"
                        alt="Rookit Collection clothing and accessories"
                        fetchpriority="high"
                    >
                <?php else : ?>
                    <div class="art-circle" aria-hidden="true"></div>
                    <div class="art-label" aria-hidden="true">
                        ROOKIT<br>COLLECTION <span>/ 2026</span>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Featured products -->
    <section class="section" id="featured">
        <div class="container">
            <div class="section-heading">
                <div>
                    <p class="eyebrow">CURATED FOR YOU</p>
                    <h2>Featured products</h2>
                </div>
                <a class="text-link" href="<?php echo esc_url($shop_url); ?>">
                    View all products &rarr;
                </a>
            </div>

            <?php if (class_exists('WooCommerce')) : ?>
                <?php echo do_shortcode('[products limit="3" columns="3" visibility="featured"]'); ?>
            <?php else : ?>
                <p>Install and activate WooCommerce to display products.</p>
            <?php endif; ?>
        </div>
    </section>

    <!-- About -->
    <section class="section about" id="about">
        <div class="container about-grid">
            <div class="about-image">
                <?php if ($about_image) : ?>
                    <img
                        class="about-photo"
                        src="<?php echo esc_url($about_image); ?>"
                        alt="Rookit Collection clothing and accessories"
                        loading="lazy"
                    >
                <?php else : ?>
                    <span aria-hidden="true">RC.</span>
                <?php endif; ?>
            </div>

            <div class="about-content">
                <p class="eyebrow">OUR STORY</p>
                <h2>Simple things. Great style.</h2>
                <p>
                    Rookit Collection is a small online store offering versatile
                    clothing and accessories at accessible prices. We believe
                    great everyday style should be effortless.
                </p>
                <p>
                    Questions? Get in touch at
                    <a href="mailto:hello@example.com">hello@example.com</a>.
                </p>
                <a class="text-link" href="<?php echo esc_url($shop_url); ?>">
                    Explore our shop &rarr;
                </a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
