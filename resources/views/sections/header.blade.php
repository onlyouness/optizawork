<header>
    <div class="section-dotted-bg"></div>
    <nav class="flex flex-row justify-between items-center nav-container">
        <a href="/" class="logo">
            <img src="{{ asset('img/logo_purple.png') }}" alt="logo">
        </a>
        <button class="menu-toggle" aria-label="Toggle Menu">
            ☰
        </button>
        <ul class="menu">
            <li class="menu_item"><a href="/">Accueil</a></li>
            <li class="menu_item has_submenu">
                <a>Services</a>
                <ul class="dropdown grid-dropdown">
                    <li><a href="/services/developpement-web">Développement Web</a></li>
                    <li><a href="/services/mobile">Développement Mobile</a></li>
                    <li><a href="/services/marketing">Marketing Digital</a></li>
                    <li><a href="/services/seo">SEO Services</a></li>
                    <li><a href="/services/ux-ui">UI/UX Design</a></li>
                    <li><a href="/services/saas-products">Produits SaaS</a></li>
                    <li><a href="/services/data-analyse">Cloud Solutions</a></li>
                    <li><a href="/data-analytics">Data Analytics</a></li>
                    <li><a href="/services/cloud-hébergement">Cloud & Hébergement</a></li>
                </ul>
            </li>
            <li class="menu_item"><a href="/about">A propos</a></li>
            <li class="menu_item"><a href="/contact">Contact</a></li>
        </ul>
        <button class="ctaHeader" onclick="sendWhatsAppMessage('Demander Un Devis Pour un project')">Demander Un Devis</button>
    </nav>
</header>