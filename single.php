<?php get_header(); ?>

<main class="container-xl" style="padding-top: clamp(80px, 10vh, 128px); padding-bottom: clamp(48px, 5vh, 96px);">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <div class="row g-4 g-lg-5">
            <article class="col-lg-8">
                
                <nav aria-label="breadcrumb" class="mb-4">
                    <ol class="breadcrumb small">
                        <li class="breadcrumb-item">
                            <a href="<?php echo esc_url( home_url('/blog') ); ?>" class="text-decoration-none text-muted">Blog</a>
                        </li>
                        <li class="breadcrumb-item active text-primary-color" aria-current="page">
                            <?php the_title(); ?>
                        </li>
                    </ol>
                </nav>

                <header class="mb-4 mb-md-5">
                    <h1 class="display-4 fs-2 fw-bold mb-4"><?php the_title(); ?></h1>
                    
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="indicator-line"></div>
                        <span class="text-primary-color fw-bold text-uppercase small">
                            <?php the_category(', '); ?>
                        </span>
                    </div>
                    
                    <div class="d-flex flex-wrap align-items-center text-muted small gap-3 gap-md-4">
                        <div class="d-flex align-items-center gap-2">
                            <span class="material-symbols-outlined fs-6">calendar_today</span>
                            <?php echo esc_html( get_the_date( 'j. n. Y' ) ); ?>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <span class="material-symbols-outlined fs-6">person</span>
                            <?php the_author(); ?>
                        </div>
                    </div>
                </header>

                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="mb-4 mb-md-5 overflow-hidden rounded-4 shadow-sm">
                        <?php the_post_thumbnail( 'full', array( 'class' => 'w-100 h-auto d-block' ) ); ?>
                    </div>
                <?php endif; ?>

                <div class="article-content fs-6 text-dark">
                    <?php the_content(); ?>
                </div>

                <div class="mt-5 pt-4 border-top">
                    <?php the_tags(
                        '<div class="d-flex flex-wrap gap-2 align-items-center"><span class="small fw-bold text-muted">TAGY:</span> ',
                        ' ',
                        '</div>'
                    ); ?>
                </div>
            </article>

            <aside class="col-lg-4 mt-5 mt-lg-0">
                <div class="sticky-lg-top" style="top: 100px; z-index: 10;">
                    <?php get_template_part( 'template-parts/sidebar', 'consultant' ); ?>
                    <?php get_template_part( 'template-parts/sidebar', 'contact' ); ?>
                </div>
            </aside>
        </div>

    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>