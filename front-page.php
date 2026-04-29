<?php get_header(); ?>
<main>
    <section class="hero-home position-relative overflow-hidden py-5 text-white">
        <div class="container py-5 position-relative">
            <div class="row align-items-center g-5">
                <div class="col-md-7">
                    <h1 class="font-headline fw-bold display-4 mb-4">
                        Nezávislé ERP poradenství pro výběr a implementaci ERP systému
                    </h1>

                    <p class="fs-5 text-white-50 mb-5">
                        Pomáháme středním a velkým firmám minimalizovat rizika při výběru a implementaci klíčových podnikových řešení.
                    </p>

                    <div>
                        <a href="<?php echo esc_url( home_url( '/kontakt' ) ); ?>" class="btn btn-light text-primary-color px-4 py-3 rounded-3 fs-5 fw-semibold shadow">
                            Kontaktujte nás
                        </a>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="rounded-4 overflow-hidden shadow-lg">
                        <img 
                            src="<?php echo get_template_directory_uri(); ?>/obrazky/uvodni.png"
                            alt="Nezávislé ERP poradenství pro výběr a implementaci ERP systému"
                            class="w-100 object-fit-cover hero-min-400"
                        >
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white" id="sluzby">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h3 class="font-headline fw-bold text-dark">Naše nabízené služby</h3>
                <div class="mx-auto mt-3 bg-primary-color section-divider"></div>
            </div>

            <div class="row g-4">
                <div class="col-md-8">
                    <a href="<?php echo esc_url( home_url( '/vyber' ) ); ?>" class="service-card service-card-primary d-flex flex-column justify-content-between h-100 p-4 p-md-5 rounded-4 shadow-lg position-relative overflow-hidden text-decoration-none text-white">
                        <div>
                            <span class="material-symbols-outlined display-4 mb-3">account_tree</span>
                            <h4 class="font-headline fs-3 fw-bold mb-3">Analýza procesů a výběr ERP systému</h4>
                            <p class="text-white-50 fs-5 mb-4">
                                Pomáháme firmám definovat požadavky, analyzovat procesy a vybrat ERP systém, který odpovídá jejich provozu, cílům i rozpočtu.
                            </p>
                        </div>

                        <span class="d-flex align-items-center gap-2 fw-bold text-white">
                            Zjistit více <span class="material-symbols-outlined">arrow_forward</span>
                        </span>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="<?php echo esc_url( home_url( '/implementace' ) ); ?>" class="service-card service-card-light d-flex flex-column justify-content-between h-100 p-4 p-md-5 rounded-4 shadow-sm border text-decoration-none">
                        <div>
                            <span class="material-symbols-outlined text-primary-color display-4 mb-3">shield</span>
                            <h4 class="font-headline fs-4 fw-bold text-dark mb-3">Dohled nad implementací</h4>
                            <p class="text-muted mb-0">
                                Poskytujeme nezávislý dohled nad implementací ERP systému, kontrolu průběhu projektu a podporu při řízení rizik, termínů i rozpočtu.
                            </p>
                        </div>

                        <span class="fw-bold text-primary-color d-flex align-items-center gap-2 mt-4">
                            Naše metodika <span class="material-symbols-outlined">arrow_forward</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-md-7">
                    <span class="text-primary-color fw-semibold text-uppercase small mb-2 d-block tracking-wide">
                        Náš přístup
                    </span>

                    <h2 class="font-headline fw-bold display-6 text-dark mb-4">
                        Čistá nezávislost, <br>konkrétní výsledky.
                    </h2>

                    <div class="text-muted fs-5">
                        <p class="mb-4">
                            Jsme nezávislí na jakémkoli dodavateli. V námi organizovaných výběrových řízeních byly vybrány nejrůznější ERP systémy napříč celým trhem. Naše expertíza pokrývá lokální i globální řešení.
                        </p>

                        <div class="row g-3 py-2">
                            <div class="col-sm-6">
                                <div class="bg-light p-3 rounded-3 d-flex align-items-center gap-3 h-100">
                                    <span class="material-symbols-outlined text-primary-color icon-filled">check_circle</span>
                                    <span class="fw-semibold text-dark">Microsoft Dynamics 365</span>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="bg-light p-3 rounded-3 d-flex align-items-center gap-3 h-100">
                                    <span class="material-symbols-outlined text-primary-color icon-filled">check_circle</span>
                                    <span class="fw-semibold text-dark">SAP S/4HANA</span>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="bg-light p-3 rounded-3 d-flex align-items-center gap-3 h-100">
                                    <span class="material-symbols-outlined text-primary-color icon-filled">check_circle</span>
                                    <span class="fw-semibold text-dark">Karat</span>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="bg-light p-3 rounded-3 d-flex align-items-center gap-3 h-100">
                                    <span class="material-symbols-outlined text-primary-color icon-filled">check_circle</span>
                                    <span class="fw-semibold text-dark">Helios</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="bg-white p-4 p-md-5 rounded-4 border-start border-4 border-primary shadow-lg h-100 d-flex flex-column justify-content-center">
                        <span class="material-symbols-outlined text-primary display-4 mb-3 opacity-25">format_quote</span>

                        <p class="font-headline fw-bold fs-4 text-dark mb-4">
                            „Viděli jsme desítky ‚horror projektů‘, které stály firmy miliony jen proto, že podcenily fázi výběru a přípravy implementace.“
                        </p>

                        <div class="d-flex align-items-center gap-3">
                            <div class="rounded-circle overflow-hidden circle-45 flex-shrink-0">
                                <img 
                                    src="<?php echo get_template_directory_uri(); ?>/obrazky/MB.jpg" 
                                    alt="Ing. Miroslav Benda"
                                    class="w-100 h-100 object-fit-cover"
                                >
                            </div>
                            <div>
                                <p class="fw-bold mb-0 text-dark">Ing. Miroslav Benda</p>
                                <p class="text-muted small mb-0">Senior ERP Consultant</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 surface-low-bg" >
        <div class="container py-5">
            <div class="text-center mb-5">
                <h3 class="font-headline fw-bold text-dark">Důvěřují nám lídři ve svých oborech</h3>
                <div class="mx-auto mt-3 bg-primary-color section-divider"></div>
            </div>

            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6 g-3">
                <div class="col">
                    <a href="https://www.ammann.com/en-DE/" target="_blank" rel="noopener noreferrer" class="client-tile shadow-sm">
                        <span>AMMANN</span>
                    </a>
                </div>

                <div class="col">
                    <a href="https://www.gasnet.cz/" target="_blank" rel="noopener noreferrer" class="client-tile shadow-sm">
                        <span>GASNET</span>
                    </a>
                </div>

                <div class="col">
                    <a href="https://www.tnt.com/" target="_blank" rel="noopener noreferrer" class="client-tile shadow-sm">
                        <span>TNT INNIGHT</span>
                    </a>
                </div>

                <div class="col">
                    <a href="https://www.hannah.cz" target="_blank" rel="noopener noreferrer" class="client-tile shadow-sm">
                        <span>HANNAH</span>
                    </a>
                </div>

                <div class="col">
                    <a href="https://lesycr.cz/" target="_blank" rel="noopener noreferrer" class="client-tile shadow-sm">
                        <span>LESY ČR</span>
                    </a>
                </div>

                <div class="col">
                    <a href="https://www.prazdroj.cz/" target="_blank" rel="noopener noreferrer" class="client-tile shadow-sm">
                        <span>PLZEŇSKÝ PRAZDROJ</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>