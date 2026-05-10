<?php get_header(); ?>
<main>
    <section class="position-relative d-flex align-items-center overflow-hidden text-white about-hero">
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <div class="position-absolute top-0 start-0 w-100 h-100 about-hero-overlay"></div>
        </div>

        <div class="container position-relative py-5">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <h1 class="display-3 fw-bold font-headline mb-4" style="font-size: clamp(2.5rem, 6vw, 4.5rem);">
                        A.B. Andersson: <br class="d-none d-md-block">
                        <span class="text-primary-fixed-dim">ERP Konzultanti</span>
                    </h1>

                    <p class="fs-5 text-white-50 mb-5">
                        „Jen úspěšný klient je tou správnou reklamou pro poradenskou společnost.“
                    </p>

                    <div>
                        <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="btn btn-light btn-lg text-primary-color fw-bold px-4 py-3 shadow-sm">
                            Kontaktujte nás
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container py-lg-5">
            <div class="row g-5 align-items-start">
                <div class="col-12 col-lg-4">
                    <div class="sticky-quote p-4 custom-card-ref bg-light border-start border-4 border-primary shadow-sm">
                        <p class="fst-italic mb-0 text-muted">
                            Vy vybíráte ERP systém jednou za 10 let, dodavatelé systémů je prodávají denně. Kdo je podle Vás ve výhodě?
                        </p>
                    </div>
                </div>

                <div class="col-12 col-lg-7 offset-lg-1">
                    <div class="fs-5 text-muted">
                        <p class="mb-4">
                            Společnost <strong class="text-dark">A.B. Andersson Czech, s.r.o.</strong> (založená v roce 2004) je poradenská firma specializující se na služby pro středně velké podniky, ale máme zkušenosti i od živnostníků na straně jedné a od velkých společností na straně druhé. Ve firmě pracují bývalí pracovníci globální poradenské firmy Accenture.
                        </p>
                        <p class="mb-4">
                            Pro klienty zajišťujeme kompletní servis v oblasti informačních systémů – od organizace výběrových řízení přes poradenství při výběru informačního systému, nezávislé posouzení podniku a doporučení nejvhodnějšího řešení, kontrolu kvality implementace, optimalizaci využití informačního systému až po školení.
                        </p>
                        <p class="mb-0">
                            Díky strategické alianci s několika dalšími poradenskými firmami jsme schopni poskytovat velmi širokou paletu služeb. Pro velké firmy jsme schopni vytvořit ad-hoc tým bývalých pracovníků předních světových poradenských firem.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 surface-low-box">
        <div class="container py-lg-5">
            <div class="bg-white p-4 p-md-5 rounded-3 shadow-sm position-relative overflow-hidden">
                <div class="row align-items-center g-4">
                    <div class="col-12 col-lg-7 text-center text-lg-start">
                        <h2 class="fs-3 fw-bold text-dark mb-4">V A.B. Andersson je klient partnerem</h2>
                        <p class="fs-5 text-muted mb-4">
                            Naše motto provází každý projekt: <strong>Jen úspěšný klient je tou správnou reklamou.</strong> Úspěchu našeho partnera podřizujeme veškeré naše úsilí a metodické postupy, které jsme si přinesli z působení v Accenture.
                        </p>
                        <div class="d-flex flex-wrap justify-content-center justify-content-lg-start gap-2">
                            <span class="bg-light px-3 py-1 rounded-pill small fw-semibold text-primary-color">Nezávislost</span>
                            <span class="bg-light px-3 py-1 rounded-pill small fw-semibold text-primary-color">Partnerství</span>
                            <span class="bg-light px-3 py-1 rounded-pill small fw-semibold text-primary-color">Kvalita Accenture</span>
                        </div>
                    </div>

                    <div class="col-12 col-lg-5 d-flex justify-content-center mt-5 mt-lg-0">
                        <div class="circle-container position-relative">
                            <div class="circle-bg"></div>
                            <div class="circle-border"></div>

                            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-primary-color rounded-circle text-white shadow">
                                <span class="material-symbols-outlined display-3" style="font-variation-settings: 'FILL' 1;">handshake</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white border-bottom">
        <div class="container py-lg-5 text-center text-lg-start">
            <div class="mb-5 text-center text-lg-start">
                <h2 class="fs-2 fw-bold text-dark mb-2">Naše firma v číslech</h2>
                <p class="text-muted small text-uppercase mb-0" style="letter-spacing: 0.08em;">Data od roku 2004</p>
            </div>

            <div class="row g-3 g-lg-4">
                <div class="col-6 col-lg-3">
                    <div class="hover-card-special p-3 p-md-4 rounded-3 h-100 border border-light shadow-sm">
                        <div class="display-4 fw-bold text-primary-color mb-2">0</div>
                        <p class="text-dark fw-bold small mb-2 text-uppercase">Nezdařené projekty</p>
                        <p class="text-muted small mb-0 d-none d-md-block">Projektů, které skončily nezdarem při realizaci našich doporučení.</p>
                    </div>
                </div>

                <div class="col-6 col-lg-3">
                    <div class="hover-card-special p-3 p-md-4 rounded-3 h-100 border border-light shadow-sm">
                        <div class="display-4 fw-bold text-primary-color mb-2">0</div>
                        <p class="text-dark fw-bold small mb-2 text-uppercase">Ukončené smlouvy</p>
                        <p class="text-muted small mb-0 d-none d-md-block">Zákazníků, kteří využili doložku o okamžitém ukončení pro nespokojenost.</p>
                    </div>
                </div>

                <div class="col-6 col-lg-3">
                    <div class="hover-card-special p-3 p-md-4 rounded-3 h-100 border border-light shadow-sm">
                        <div class="display-4 fw-bold text-primary-color mb-2">4</div>
                        <p class="text-dark fw-bold small mb-2 text-uppercase">Nahrazení poradci</p>
                        <p class="text-muted small mb-0 d-none d-md-block">Počet projektů, kde jsme byli přizváni, abychom nahradili jiné firmy.</p>
                    </div>
                </div>

                <div class="col-6 col-lg-3">
                    <div class="hover-card-special p-3 p-md-4 rounded-3 h-100 border border-light shadow-sm">
                        <div class="display-4 fw-bold text-primary-color mb-2">2</div>
                        <p class="text-dark fw-bold small mb-2 text-uppercase">Vícepráce</p>
                        <p class="text-muted small mb-0 d-none d-md-block">Pouze ve dvou případech za 20 let byly účtovány vícepráce.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 surface-bg-box">
        <div class="container py-lg-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8 text-center px-4">
                    <h2 class="fs-2 fw-bold mb-4">Transparentní spolupráce</h2>
                    <p class="fs-5 text-muted mb-0">
                        Pracujeme téměř výhradně v módu <strong>„čas a materiál“</strong> podle skutečně odpracovaných hodin. Pevnou cenu používáme velmi zřídka, což nám umožňuje maximální flexibilitu a upřímnost vůči potřebám klienta.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>