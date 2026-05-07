<?php get_header(); ?>
<main class="container-xl py-5 page-shell">

    <div class="d-flex align-items-center gap-3 mb-5">
        <h1 class="display-5 fw-bold m-0">
            Kategorie: <?php single_cat_title(); ?>
        </h1>
    </div>

    <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="col">
                    <?php get_template_part( 'template-parts/card', 'post' ); ?>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <div class="col-12 text-center py-5">
                <p class="fs-5 text-muted">V této kategorii zatím nejsou žádné články.</p>
                <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="text-primary-color fw-bold text-decoration-none">
                    Zpět na blog
                </a>
            </div>
        <?php endif; ?>
    </div>

    <?php if ( $wp_query->max_num_pages > 1 ) : ?>
        <div class="wp-pagination mt-5 pt-4">
            <?php
            echo paginate_links( array(
                'total'     => $wp_query->max_num_pages,
                'current'   => max( 1, get_query_var( 'paged' ) ),
                'prev_text' => '<span class="material-symbols-outlined align-middle">chevron_left</span>',
                'next_text' => '<span class="material-symbols-outlined align-middle">chevron_right</span>',
                'type'      => 'list',
            ) );
            ?>
        </div>
    <?php endif; ?>
</main>
<?php get_footer(); ?>