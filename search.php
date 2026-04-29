<?php get_header(); ?>

<main class="container-xl" style="padding-top: 128px; padding-bottom: 96px;">
    
    <div class="d-flex align-items-center gap-3 mb-5">
        <div class="indicator-line"></div>
        <h1 class="display-5 fw-bold m-0">
            Výsledky hledání pro: "<?php echo esc_html( get_search_query() ); ?>"
        </h1>
    </div>

    <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
            <div class="col">
                <article class="h-100">
                    <a href="<?php the_permalink(); ?>" class="card-bento h-100 p-4 d-flex flex-column text-decoration-none text-reset">
                        
                        <span class="text-primary-color small fw-bold text-uppercase mb-2" style="font-size: 0.7rem; letter-spacing: 0.05em;">
                            <?php echo ( get_post_type() === 'page' ) ? 'Stránka' : 'Článek z blogu'; ?>
                        </span>

                        <h3 class="h5 fw-bold mb-3"><?php the_title(); ?></h3>
                        
                        <div class="small text-muted mb-4 flex-grow-1">
                            <?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?>
                        </div>

                        <span class="text-primary-color fw-bold d-inline-flex align-items-center gap-1 mt-auto">
                            <?php echo ( get_post_type() === 'page' ) ? 'Otevřít stránku' : 'Číst více'; ?>
                            <span class="material-symbols-outlined fs-6">arrow_forward</span>
                        </span>
                    </a>
                </article>
            </div>

        <?php endwhile; ?>

        <div class="col-12 mt-5">
            <div class="wp-pagination">
                <?php
                echo paginate_links( array(
                    'prev_text' => '<span class="material-symbols-outlined">chevron_left</span>',
                    'next_text' => '<span class="material-symbols-outlined">chevron_right</span>',
                    'type'      => 'list',
                ) );
                ?>
            </div>
        </div>

        <?php else : ?>
            <div class="col-12 text-center py-5">
                <p class="fs-5 text-muted">Omlouváme se, ale pro tento výraz jsme nic nenašli.</p>
                <a href="<?php echo esc_url( home_url('/') ); ?>" class="text-primary-color fw-bold text-decoration-none border-bottom border-primary-color">
                    Zpět na úvodní stránku
                </a>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>