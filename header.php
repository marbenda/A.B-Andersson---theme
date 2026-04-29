<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="sticky-top w-100 shadow-sm border-bottom bg-white">
    <nav class="navbar navbar-expand-lg navbar-light py-2">
        <div class="container">

            <a class="navbar-brand d-flex align-items-center me-0" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/obrazky/logos/logo-inverz.png"
                    alt="A.B. Andersson - ERP Consulting"
                    class="site-logo">
            </a>

            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Přepnout navigaci">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse mt-3 mt-lg-0 text-center text-lg-start" id="navbarNav">
                <ul class="navbar-nav mx-auto mb-0 gap-lg-4 align-items-center align-items-lg-center">
                    <li class="nav-item">
                        <a id="nav-home" class="nav-link font-headline fs-6 fw-semibold <?php echo is_front_page() ? 'text-primary-color border-bottom border-2 border-primary-color pb-1' : 'text-muted'; ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            Domů
                        </a>
                    </li>

                    <li class="nav-item">
                        <a id="nav-services" class="nav-link font-headline fs-6 fw-semibold" href="<?php echo esc_url( home_url( '/#sluzby' ) ); ?>">
                            Služby
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link font-headline fs-6 fw-semibold <?php echo is_page( 'reference' ) ? 'text-primary-color border-bottom border-2 border-primary-color pb-1' : 'text-muted'; ?>" href="<?php echo esc_url( home_url( '/reference' ) ); ?>">
                            Reference
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link font-headline fs-6 fw-semibold <?php echo is_page( 'o-nas' ) ? 'text-primary-color border-bottom border-2 border-primary-color pb-1' : 'text-muted'; ?>" href="<?php echo esc_url( home_url( '/o-nas' ) ); ?>">
                            O nás
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link font-headline fs-6 fw-semibold <?php echo is_page( 'kontakt' ) ? 'text-primary-color border-bottom border-2 border-primary-color pb-1' : 'text-muted'; ?>" href="<?php echo esc_url( home_url( '/kontakt' ) ); ?>">
                            Kontakt
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link font-headline fs-6 fw-semibold <?php echo ( is_page( 'blog' ) || is_category() || is_single() ) ? 'text-primary-color border-bottom border-2 border-primary-color pb-1' : 'text-muted'; ?>" href="<?php echo esc_url( home_url( '/blog' ) ); ?>">
                            Blog
                        </a>
                    </li>
                </ul>

                <form role="search" method="get" class="d-none d-lg-flex align-items-center ms-lg-auto" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <div class="input-group input-group-sm" style="width: 200px;">
                        <input
                            type="search"
                            class="form-control border-end-0 shadow-none"
                            placeholder="Hledat..."
                            value="<?php echo esc_attr( get_search_query() ); ?>"
                            name="s"
                            aria-label="Hledat"
                        >
                        <button class="btn border border-start-0 bg-white text-primary-color d-flex align-items-center" type="submit">
                            <span class="material-symbols-outlined fs-5">search</span>
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </nav>
</header>