<footer class="bg-white w-100 border-top mt-auto">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-12 col-md-4 text-center text-md-start">
                <div class="mb-3">
                    <a href="<?php echo esc_url( home_url('/') ); ?>" class="d-inline-block">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/obrazky/logos/logo-inverz.png"
                            alt="A.B. Andersson - ERP Consulting"
                            class="site-logo-footer"
                        >
                    </a>
                </div>
                <p class="text-muted small mb-4">
                    Specialisté na architekturu podnikových procesů a nezávislé poradenství v oblasti podnikových informačních systémů.
                </p>
            </div>
            
            <div class="col-12 col-sm-6 col-md-2 text-center text-md-start">
                <h4 class="fw-bold text-primary-color mb-4 text-uppercase small">Služby</h4>
                <ul class="list-unstyled small">
                    <li class="mb-2">
                        <a class="text-muted text-decoration-none" href="<?php echo esc_url( home_url('/vyber') ); ?>">Výběr ERP</a>
                    </li>
                    <li class="mb-2">
                        <a class="text-muted text-decoration-none" href="<?php echo esc_url( home_url('/implementace') ); ?>">Dohled nad implementací</a>
                    </li>
                </ul>
            </div>
            
            <div class="col-12 col-sm-6 col-md-2 text-center text-md-start">
                <h4 class="fw-bold text-primary-color mb-4 text-uppercase small">Právní</h4>
                <ul class="list-unstyled small">
                    <li class="mb-2">
                        <a class="text-muted text-decoration-none" href="<?php echo esc_url( home_url('/kontakt') ); ?>">Kontakt</a>
                    </li>
                    <li class="mb-2">
                        <a class="text-muted text-decoration-none" href="<?php echo esc_url( home_url('/ochrana-osobnich-udaju') ); ?>">Ochrana osobních údajů</a>
                    </li>
                </ul>
            </div>
            
            <div class="col-12 col-md-4 text-center text-md-start">
                <h4 class="fw-bold text-primary-color mb-4 text-uppercase small">Sídlo</h4>
                <p class="text-muted small mb-1">A.B. Andersson Czech s.r.o.</p>
                <p class="text-muted small mb-1">Konviktská 24, Praha 1</p>
                <p class="text-muted small mb-0">Česká republika</p>
                <p class="text-muted small mt-3">© <?php echo date('Y'); ?> A.B. Andersson Czech s.r.o.</p>
            </div>
        </div>
    </div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const homeLink = document.getElementById('nav-home');
    const servicesLink = document.getElementById('nav-services');
    const servicesSection = document.getElementById('sluzby');

    if (!homeLink || !servicesLink || !servicesSection) {
        return;
    }

    function makeHomeActive() {
        homeLink.classList.remove('text-muted');
        homeLink.classList.add('text-primary-color', 'border-bottom', 'border-2', 'border-primary-color', 'pb-1');

        servicesLink.classList.remove('text-primary-color', 'border-bottom', 'border-2', 'border-primary-color', 'pb-1');
        servicesLink.classList.add('text-muted');
    }

    function makeServicesActive() {
        servicesLink.classList.remove('text-muted');
        servicesLink.classList.add('text-primary-color', 'border-bottom', 'border-2', 'border-primary-color', 'pb-1');

        homeLink.classList.remove('text-primary-color', 'border-bottom', 'border-2', 'border-primary-color', 'pb-1');
        homeLink.classList.add('text-muted');
    }

//pomoc AI
    function checkSection() {
        const top = servicesSection.offsetTop;
        const height = servicesSection.offsetHeight;
        const scroll = window.scrollY + 120;

        if (scroll >= top && scroll < top + height) {
            makeServicesActive();
        } else {
            makeHomeActive();
        }
    }

    window.addEventListener('scroll', checkSection);
    checkSection();
});
</script>

<?php wp_footer(); ?>
</body>
</html>