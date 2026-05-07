<?php get_header(); ?>
<main class="container py-5 page-shell">
    <div class="row g-5 align-items-start">
        <div class="col-12 col-lg-6">
            <div class="mb-4">
                <h1 class="display-4 fw-bold text-dark mb-4">Kontaktujte nás</h1>

                <div class="d-flex align-items-start gap-3 mb-4">
                    <span class="material-symbols-outlined text-primary-color mt-1">location_on</span>
                    <div>
                        <h3 class="fw-bold fs-5 mb-1">A.B. Andersson Czech, s.r.o.</h3>
                        <p class="text-muted mb-0">Konviktská 24, Praha 1</p>
                    </div>
                </div>

                <div class="d-flex align-items-center gap-3 mb-4">
                    <span class="material-symbols-outlined text-primary-color">phone_iphone</span>
                    <p class="text-muted fw-medium mb-0">608 963 969</p>
                </div>

                <div class="d-flex align-items-center gap-3 mb-0">
                    <span class="material-symbols-outlined text-primary-color">mail</span>
                    <p class="text-muted fw-medium mb-0">info@abandersson.com</p>
                </div>
            </div>

            <div class="p-4 rounded-3 d-flex align-items-center gap-4 mb-4 contact-highlight-box">
                <div class="bg-white p-2 rounded shadow-sm d-flex align-items-center justify-content-center flex-shrink-0">
                    <img
                        alt="QR Code"
                        src="<?php echo get_template_directory_uri(); ?>/obrazky/QR-ABA-150x150.png"
                        class="contact-qr-code"
                    >
                </div>
                <div>
                    <h4 class="fw-bold text-dark mb-1 fs-5">Uložit kontakt</h4>
                    <p class="small text-muted mb-0">
                        Naskenujte QR kód pro okamžité uložení kontaktních údajů do vašeho mobilního zařízení.
                    </p>
                </div>
            </div>

            <div class="ratio ratio-16x9 rounded-3 overflow-hidden shadow-sm border grayscale-hover">
                <a href="https://www.google.com/maps/search/?api=1&query=Konviktská+24,+Praha+1" target="_blank" rel="noopener noreferrer" class="d-block w-100 h-100">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/obrazky/Mapa-Konviktska.png"
                        alt="Mapa Konviktská 24"
                        class="w-100 h-100 object-fit-cover"
                    >
                </a>
            </div>
        </div>

        <div class="col-12 col-lg-6">
            <div class="bg-white p-4 p-md-5 rounded-3 shadow-sm border">
                <h2 class="fs-4 fw-bold mb-4">Napište nám zprávu</h2>

                <?php echo do_shortcode('[contact-form-7 id="489e706" title="Andersson contact form"]'); ?>

                <div class="bg-light mt-4 p-3 rounded-3 border-start border-2 border-secondary" class="contact-note">
                    <p class="mb-0 text-muted fw-medium" style="font-size: 0.7rem;">
                        <strong class="text-dark">DŮLEŽITÉ:</strong>
                        Chcete-li nám nabídnout vaši službu nebo spolupráci, pošlete nám vaši nabídku v rozsahu maximálně 10 řádků na náš e-mail, do 2 týdnů vám odpovíme; každý příchozí e-mail je přečten, není nutné si telefonicky ověřovat, zda došel, zajímavou nabídku si určitě nenecháme ujít; nenabízejte nám vaše služby telefonem, recepční mají pokyn jakýkoliv podobný hovor okamžitě ukončit. V žádném případě nám nenabízejte žádné investiční příležitosti!
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>