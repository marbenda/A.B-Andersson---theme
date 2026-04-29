<article class="h-100">
    <a href="<?php the_permalink(); ?>" class="card-bento d-flex flex-column h-100 text-decoration-none text-reset">
        <?php if ( has_post_thumbnail() ) : ?>
            <div class="mb-4 overflow-hidden rounded-3" style="aspect-ratio: 16/10;">
                <?php the_post_thumbnail( 'medium_large', array( 'class' => 'w-100 h-100 object-fit-cover' ) ); ?>
            </div>
        <?php else : ?>
            <div class="mb-4 overflow-hidden rounded-3" style="aspect-ratio: 16/10;">
                <div class="w-100 h-100 bg-light d-flex align-items-center justify-content-center">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/obrazky/site.webp"
                        alt="thumbnail blogu"
                        class="w-100 h-100"
                        style="object-fit: contain; padding: 1rem;"
                    >
                </div>
            </div>
        <?php endif; ?>

        <span class="text-primary-color fw-bold text-uppercase small mb-2 d-block" style="letter-spacing: 0.05em;">
            <?php
            $categories = get_the_category();
            if ( ! empty( $categories ) ) {
                echo esc_html( $categories[0]->name );
            } else {
                echo 'Článek';
            }
            ?>
        </span>

        <h3 class="h5 fw-bold mb-3"><?php the_title(); ?></h3>

        <div class="small text-muted mb-4 flex-grow-1">
            <?php echo wp_trim_words( get_the_excerpt(), 18, '...' ); ?>
        </div>

        <span class="fw-bold text-primary-color d-inline-flex align-items-center gap-1 mt-auto">
            Číst více
            <span class="material-symbols-outlined fs-6">arrow_forward</span>
        </span>
    </a>
</article>