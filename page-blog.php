<?php get_header(); ?>
<main class="container-xl py-5" class="page-shell">

    <div class="d-flex align-items-center gap-3 mb-5">
        <h1 class="display-5 fw-bold m-0">Blog: Odborné články</h1>
    </div>

    <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 6,
            'paged'          => $paged
        );
        $blog_query = new WP_Query($args);

        if ($blog_query->have_posts()) :
            while ($blog_query->have_posts()) : $blog_query->the_post();
        ?>
            <div class="col">
                <?php get_template_part( 'template-parts/card', 'post' ); ?>
            </div>
        <?php
            endwhile;
            wp_reset_postdata();
        else :
        ?>
            <p>Články nenalezeny</p>
        <?php endif; ?>
    </div>

    <div class="wp-pagination mt-5 pt-4">
        <?php
        echo paginate_links(array(
            'total'     => $blog_query->max_num_pages,
            'prev_text' => '<span class="material-symbols-outlined align-middle">chevron_left</span>',
            'next_text' => '<span class="material-symbols-outlined align-middle">chevron_right</span>',
            'type'      => 'list'
        ));
        ?>
    </div>
</main>
<?php get_footer(); ?>