<?php get_header(); ?>
<main>
    <section class="hero-home position-relative overflow-hidden py-5 text-white">
        <div class="overlay-circle"></div>

        <div class="container position-relative py-4">
            <nav aria-label="Breadcrumb" class="mb-4 small opacity-75">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-white text-decoration-none" href="<?php echo esc_url(home_url('/')); ?>">Domů</a>
                    </li>
                    <li class="breadcrumb-item active text-white fw-semibold" aria-current="page">Dohled nad implementací</li>
                </ol>
            </nav>

            <div class="row align-items-center g-5">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-4 font-headline">
                        Dohled nad implementací
                    </h1>
                    <p class="fs-5 text-white-50 mb-5">
                        Zajišťujeme, aby váš projekt proběhl v požadované kvalitě, čase a rozpočtu prostřednictvím nezávislého expertního řízení.
                    </p>
                    <div>
                        <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="btn btn-light text-primary-color px-4 py-3 rounded-3 font-headline fs-6 fw-bold shadow">
                            Kontaktujte nás
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5 mt-5">
        <div class="row g-5">
            <div class="col-lg-8">
                <section class="analogy-quote-box mb-5 overflow-hidden">
                    <blockquote class="blockquote mb-0 position-relative">
                        <p class="fst-italic lh-lg">"Najímáme si na stavbu domu (implementaci systému) odborníka, který nám potřebné znalosti a zkušenosti poskytne a který se nazývá stavební dozor (ERP poradce). Úkolem tohoto experta je postarat se o to, aby dodavatel splnil vše, k čemu se zavázal, a aby to splnil v požadované kvalitě."</p>
                        <footer class="mt-4 d-flex align-items-center gap-3">
                            <div class="quote-gray-box"></div>
                            <span class="small fw-bold text-primary text-uppercase tracking-wide">Princip stavebního dozoru</span>
                        </footer>
                    </blockquote>
                </section>

                <section class="mb-5">
                    <h2 class="fw-bold mb-4 font-headline">Klíčové oblasti dohledu</h2>

                <div class="row g-4 mb-5">
                    <div class="col-md-6">
                        <article class="card-bento">
                            <div class="icon-square"><span class="material-symbols-outlined">verified</span></div>
                            <h3 class="h5 fw-bold">Kontrola kvality</h3>
                            <p class="text-muted small">Průběžně prověřujeme výstupy implementace proti schválené dokumentaci a standardům nejlepší praxe.</p>
                        </article>
                    </div>

                    <div class="col-md-6">
                        <article class="card-bento">
                            <div class="icon-square"><span class="material-symbols-outlined">task_alt</span></div>
                            <h3 class="h5 fw-bold">Ověřování deliverables</h3>
                            <p class="text-muted small">Garantujeme, že každý odevzdaný modul nebo dokumentace splňuje definovaná akceptační kritéria.</p>
                        </article>
                    </div>

                    <div class="col-md-6">
                        <article class="card-bento">
                            <div class="icon-square"><span class="material-symbols-outlined">warning</span></div>
                            <h3 class="h5 fw-bold">Risk management</h3>
                            <p class="text-muted small">Identifikujeme potenciální hrozby včas a navrhujeme nápravná opatření dříve, než ohrozí harmonogram.</p>
                        </article>
                    </div>

                    <div class="col-md-6">
                        <article class="card-bento">
                            <div class="icon-square"><span class="material-symbols-outlined">handshake</span></div>
                            <h3 class="h5 fw-bold">Řešení konfliktů</h3>
                            <p class="text-muted small">Fungujeme jako mediátor mezi vámi a dodavatelem, zajišťující věcný a profesionální postup při neshodách.</p>
                        </article>
                    </div>
                </div>
            </div>

            <aside class="col-lg-4">
                <div class="sticky-top sticky-offset-100">
                    <?php get_template_part( 'template-parts/sidebar', 'consultant' ); ?>
                    <?php get_template_part( 'template-parts/sidebar', 'contact' ); ?>
                </div>
            </aside>
        </div>
    </section>

    <?php get_template_part( 'template-parts/ebook', 'form' ); ?>
    
</main>

<?php get_footer(); ?>