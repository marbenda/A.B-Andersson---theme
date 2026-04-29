<?php get_header(); ?>

<main class="container py-5 text-center error-page-main">
    <div>
        <h1 class="display-4 fw-bold text-dark mb-3">404</h1>
        <h2 class="fs-3 fw-bold text-dark mb-3">Stránka nebyla nalezena</h2>
        <p class="text-muted mb-4">
            Omlouváme se, ale požadovaná stránka neexistuje nebo byla přesunuta.
        </p>

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary-color px-4 py-2">
            Zpět na hlavní stránku
        </a>
    </div>
</main>

<?php get_footer(); ?>