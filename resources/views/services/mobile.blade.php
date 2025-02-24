@extends('layouts.layout')
@section('title', $title)

@section('content')
    <section>
        <section class="page-hero">
            <div class="section-dotted-bg"></div>
            <div class="animated-lines"><span class="animated-line line-1"></span><span
                    class="animated-line line-2"></span><span class="animated-line line-3"></span><span
                    class="animated-line line-4"></span><span class="animated-line line-5"></span><span
                    class="animated-line line-6"></span><span class="animated-line line-7"></span><span
                    class="animated-line line-8"></span><span class="animated-line line-9"></span></div>
            <section class="hero-content">
                <div class="headlines">
                    <div class="pre-title" data-aos="fade-up">Votre Partenaire Digital : Sites Web, Apps et Plus</div>
                    <p class="example_animate">
                        <svg height="800px" width="800px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 58 58" xml:space="preserve">
                            <g>
                                <path style="fill:#2CB742;"
                                    d="M0,58l4.988-14.963C2.457,38.78,1,33.812,1,28.5C1,12.76,13.76,0,29.5,0S58,12.76,58,28.5   S45.24,57,29.5,57c-4.789,0-9.299-1.187-13.26-3.273L0,58z" />
                                <path style="fill:#FFFFFF;"
                                    d="M47.683,37.985c-1.316-2.487-6.169-5.331-6.169-5.331c-1.098-0.626-2.423-0.696-3.049,0.42   c0,0-1.577,1.891-1.978,2.163c-1.832,1.241-3.529,1.193-5.242-0.52l-3.981-3.981l-3.981-3.981c-1.713-1.713-1.761-3.41-0.52-5.242   c0.272-0.401,2.163-1.978,2.163-1.978c1.116-0.627,1.046-1.951,0.42-3.049c0,0-2.844-4.853-5.331-6.169   c-1.058-0.56-2.357-0.364-3.203,0.482l-1.758,1.758c-5.577,5.577-2.831,11.873,2.746,17.45l5.097,5.097l5.097,5.097   c5.577,5.577,11.873,8.323,17.45,2.746l1.758-1.758C48.048,40.341,48.243,39.042,47.683,37.985z" />
                            </g>
                        </svg>
                        <span>

                            Nous serions ravis de vous rencontrer
                        </span>
                    </p>


                    <h1 class="hero-title" data-aos="fade-up">Développement d’Applications Mobiles</h1>
                    <p class="hero_description" data-aos="fade-up">Boostez votre présence en ligne avec des applications
                        mobiles modernes, performantes et adaptées à vos besoins. Nous créons des applications mobiles sur
                        mesure qui reflètent votre identité et répondent aux attentes de vos utilisateurs. Que vous ayez
                        besoin d'une application pour iOS, Android ou multiplateforme, notre équipe d'experts est là pour
                        vous accompagner à chaque étape de votre projet. Profitez d'une expérience utilisateur optimale et
                        d'un design responsive qui s'adapte à tous les appareils.</p>

                    <div class="cta-links-area "><button class="tp-btn"
                            onclick="sendWhatsAppMessage('Demander Un Devis Pour Le Service Mobile')">Demander un
                            devis</button>

                    </div>
                </div>

                <div class="image_hero " data-tilt="">
                    <div class="hero-image-area mb-5 mb-lg-0">
                        <div class="hero-img-wraper"><img class="img-fluid " src="{{ asset('img/services/web.png') }}"
                                alt="" draggable="false">
                            <div class="radar"></div>
                            <div class="orbit"> </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <section class="content">

            <div class="features">
                <div class="features_content">
                    <div class="headlining">
                        <div class="pre-title" data-aos="fade-up">Un flux de travail optimisé</div>
                        <h3 data-aos="fade-right">Développement d’Applications Mobiles</h3>
                        <p data-aos="fade-right">
                            Nous développons des applications mobiles modernes, intuitives et parfaitement adaptées à vos
                            objectifs. Que ce soit pour iOS, Android ou multiplateforme, notre expertise garantit une
                            expérience utilisateur exceptionnelle.
                        </p>
                    </div>
                    <article class="features_articles">
                        <!-- Feature 1 -->
                        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow feature_card"
                            data-aos="fade-up">
                            <svg class="w-7 h-7 text-gray-500 mb-3" fill="currentColor" viewBox="0 0 512.001 512.001">
                                <!-- SVG icon -->
                            </svg>
                            <a href="#">
                                <h5 class="title_feature mb-2 text-2xl font-semibold tracking-tight text-gray-900">
                                    Conception Moderne et Réactive
                                </h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-500">
                                Des interfaces conçues pour offrir une expérience fluide sur tous les appareils mobiles.
                            </p>
                        </div>

                        <!-- Feature 2 -->
                        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow feature_card"
                            data-aos="fade-up">
                            <svg class="w-7 h-7 text-gray-500 mb-3" fill="currentColor" viewBox="0 0 512.001 512.001">
                                <!-- SVG icon -->
                            </svg>
                            <a href="#">
                                <h5 class="title_feature mb-2 text-2xl font-semibold tracking-tight text-gray-900">
                                    Performance Optimisée
                                </h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-500">
                                Des applications mobiles rapides et efficaces, même dans des conditions de faible
                                connectivité.
                            </p>
                        </div>

                        <!-- Feature 3 -->
                        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow feature_card"
                            data-aos="fade-up">
                            <svg class="w-7 h-7 text-gray-500 mb-3" fill="currentColor" viewBox="0 0 512.001 512.001">
                                <!-- SVG icon -->
                            </svg>
                            <a href="#">
                                <h5 class="title_feature mb-2 text-2xl font-semibold tracking-tight text-gray-900">
                                    Sécurité Avancée
                                </h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-500">
                                Protégez les données sensibles des utilisateurs grâce à des protocoles de sécurité robustes.
                            </p>
                        </div>

                        <!-- Feature 4 -->
                        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow feature_card"
                            data-aos="fade-up">
                            <svg class="w-7 h-7 text-gray-500 mb-3" fill="currentColor" viewBox="0 0 512.001 512.001">
                                <!-- SVG icon -->
                            </svg>
                            <a href="#">
                                <h5 class="title_feature mb-2 text-2xl font-semibold tracking-tight text-gray-900">
                                    Notifications Personnalisées
                                </h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-500">
                                Engagez vos utilisateurs avec des notifications en temps réel et pertinentes.
                            </p>
                        </div>

                        <!-- Feature 5 -->
                        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow feature_card"
                            data-aos="fade-up">
                            <svg class="w-7 h-7 text-gray-500 mb-3" fill="currentColor" viewBox="0 0 512.001 512.001">
                                <!-- SVG icon -->
                            </svg>
                            <a href="#">
                                <h5 class="title_feature mb-2 text-2xl font-semibold tracking-tight text-gray-900">
                                    Intégration Multi-Plateforme
                                </h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-500">
                                Développez des applications qui fonctionnent parfaitement sur Android et iOS.
                            </p>
                        </div>

                        <!-- Feature 6 -->
                        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow feature_card"
                            data-aos="fade-up">
                            <svg class="w-7 h-7 text-gray-500 mb-3" fill="currentColor" viewBox="0 0 512.001 512.001">
                                <!-- SVG icon -->
                            </svg>
                            <a href="#">
                                <h5 class="title_feature mb-2 text-2xl font-semibold tracking-tight text-gray-900">
                                    Support et Maintenance
                                </h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-500">
                                Offrez une assistance continue et des mises à jour régulières pour vos applications.
                            </p>
                        </div>
                    </article>

                </div>

            </div>
        </section>

        @include('sections.services')


    </section>
@endsection
