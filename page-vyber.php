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
                    <li class="breadcrumb-item active text-white fw-semibold" aria-current="page">Výběr ERP</li>
                </ol>
            </nav>

            <div class="row align-items-center g-5">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-4 font-headline">
                        Analýza procesů a výběr ERP
                    </h1>
                    <p class="fs-5 text-white-50 mb-5">
                        Pomáháme firmám připravit analýzu procesů, definovat požadavky a profesionálně řídit výběrové řízení na ERP systém. Díky nezávislému přístupu vám pomůžeme vybrat ERP řešení, které bude odpovídat vašim procesům, cílům i rozpočtu. 
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
            <div class="col-12 col-lg-8">
                <section>
                    <p class="fs-5 fw-medium text-muted mb-4">
                        Kompletní organizace výběrového řízení na informační systém ERP zahrnuje:
                    </p>
                    <div class="d-flex flex-column gap-3 fs-6">
                        <div class="d-flex gap-3 align-items-start text-muted">
                            <span class="material-symbols-outlined text-primary-color mt-1">check_circle</span>
                            <p class="mb-0">Provedení přípravných činností (analýza, definice problémů, požadavků na ERP, cílů projektu ERP, kritérií výběru atd.), naše metodologie využívá nejlepší prvky PRINCE2.</p>
                        </div>
                        <div class="d-flex gap-3 align-items-start text-muted">
                            <span class="material-symbols-outlined text-primary-color mt-1">check_circle</span>
                            <p class="mb-0">Předkolo výběru ERP (oslovení širšího spektra dodavatelů informačních systémů, příprava poptávkového dokumentu, definice nabídek, vyhodnocení).</p>
                        </div>
                        <div class="d-flex gap-3 align-items-start text-muted">
                            <span class="material-symbols-outlined text-primary-color mt-1">check_circle</span>
                            <p class="mb-0">1. kolo výběru ERP (příprava a organizace prezentací, vyhodnocení).</p>
                        </div>
                        <div class="d-flex gap-3 align-items-start text-muted">
                            <span class="material-symbols-outlined text-primary-color mt-1">check_circle</span>
                            <p class="mb-0">2. kolo výběru ERP (příprava referenčních návštěv, organizace workshopů, vyhodnocení).</p>
                        </div>
                        <div class="d-flex gap-3 align-items-start text-muted">
                            <span class="material-symbols-outlined text-primary-color mt-1">check_circle</span>
                            <p class="mb-0">Vyjednávání s vítězem (asistence při vyjednávání o podmínkách smluv, spolupráce při tvorbě harmonogramu implementace ERP systému atd.).</p>
                        </div>
                        <div class="d-flex gap-3 align-items-start text-muted">
                            <span class="material-symbols-outlined text-primary-color mt-1">check_circle</span>
                            <p class="mb-0">Odborný dohled nad projektem implementace ERP informačního systému.</p>
                        </div>
                    </div>
                </section>

                <section class="mt-5">
                    <h2 class="font-headline fw-bold fs-3 mb-4">Klíčové fáze procesu</h2>

                    <div class="accordion d-flex flex-column gap-3" id="erpAccordion">
                        <div class="accordion-item border rounded-3 overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fs-5 fw-bold font-headline py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                    <span class="text-muted me-3">01</span> Analýza potřeb
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#erpAccordion">
                                <div class="accordion-body bg-white text-muted">Na začátku projektu analyzujeme stávající firemní procesy, klíčové problémy i očekávání managementu a uživatelů. Výstupem je jasná definice požadavků na nový ERP systém, která slouží jako základ pro celé výběrové řízení.</div>
                            </div>
                        </div>

                        <div class="accordion-item border rounded-3 overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fs-5 fw-bold font-headline py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    <span class="text-muted me-3">02</span> RFI/RFP proces
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#erpAccordion">
                                <div class="accordion-body bg-white text-muted">Oslovujeme vhodné dodavatele ERP systémů a připravujeme strukturované podklady pro porovnání jednotlivých řešení. Součástí této fáze je příprava RFI a RFP dokumentace, definice hodnoticích kritérií a odborné vyhodnocení obdržených nabídek.</div>
                            </div>
                        </div>

                        <div class="accordion-item border rounded-3 overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fs-5 fw-bold font-headline py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                    <span class="text-muted me-3">03</span> Tvorba shortlistu
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#erpAccordion">
                                <div class="accordion-body bg-white text-muted">Na základě vyhodnocení nabídek zúžíme výběr na několik nejvhodnějších ERP dodavatelů. Pro finalisty organizujeme detailní prezentace, pracovní workshopy i referenční návštěvy, aby bylo možné porovnat nejen funkčnost systému, ale i přístup dodavatele a reálné zkušenosti jeho klientů.</div>
                            </div>
                        </div>

                        <div class="accordion-item border rounded-3 overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fs-5 fw-bold font-headline py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                    <span class="text-muted me-3">04</span> 
                                    Vyjednání smlouvy a příprava implementace
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#erpAccordion">
                                <div class="accordion-body bg-white p-4 text-muted">
                                    <p class="fs-6 mb-3"> Pomáháme klientovi při jednání s vybraným dodavatelem, kontrole smluvních podmínek a nastavení realistického harmonogramu implementace ERP. Cílem je snížit rizika spojená s nejasným rozsahem projektu, skrytými náklady nebo špatně definovanou odpovědností jednotlivých stran.</p>
                                    <div class="d-flex align-items-start p-3 bg-light rounded-3">
                                        <span class="material-symbols-outlined text-primary-color me-2">info</span>
                                        <span class="small text-dark fst-italic">Pomáháme eliminovat rizika spojená se skrytými náklady a nejasnými termíny dodání.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <aside class="col-lg-4">
                <div class="sticky-top" style="top: 100px; z-index: 10;">
                    <?php get_template_part( 'template-parts/sidebar', 'consultant' ); ?>
                    <?php get_template_part( 'template-parts/sidebar', 'contact' ); ?>
                </div>
            </aside>
        </div>
    </section>

    <?php get_template_part( 'template-parts/ebook', 'form' ); ?>
</main>

<?php get_footer(); ?>