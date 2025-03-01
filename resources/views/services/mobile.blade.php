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
                            <svg fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="30px" viewBox="0 0 47.168 47.168" xml:space="preserve">
                                <g>
                                    <g id="Layer_68_6_">
                                        <g>
                                            <path d="M47.168,36.918V6.699H0v30.219h19.252v1.945H9.188v1.605h28.179v-1.605h-9.846v-1.945H47.168z M3.45,32.469V10.149     h40.267v22.317H3.45V32.469z"/>
                                            <path d="M19.403,25.084H10.04l-2.774,0.141v1.908h18.281v-2.049h-5.595H19.403z M22.403,26.344h-5.777v-0.383h5.777V26.344z"/>
                                            <polygon points="11.484,13.228 27.873,13.228 27.873,13.696 29.318,13.696 29.318,11.782 10.04,11.782 10.04,24.494      25.546,24.494 25.546,23.051 11.484,23.051    "/>
                                            <path d="M27.807,15.921h7.137v2.608h1.451v-4.061H26.355v15.057h5.713v-1.238c0,0.268-0.215,0.484-0.483,0.484     s-0.483-0.217-0.483-0.484s0.217-0.482,0.483-0.482s0.483,0.215,0.483,0.482v-1.258h-4.262V15.921L27.807,15.921z"/>
                                            <path d="M32.883,31.014h7.021V19.203h-7.021V31.014z M36.482,30.506c-0.225,0-0.405-0.184-0.405-0.406s0.181-0.404,0.405-0.404     c0.224,0,0.404,0.182,0.404,0.404S36.706,30.506,36.482,30.506z M36.549,19.692c0.094,0,0.169,0.076,0.169,0.17     c0,0.093-0.075,0.169-0.169,0.169s-0.17-0.076-0.17-0.169S36.455,19.692,36.549,19.692z M35.54,20.259h2.021v0.163H35.54V20.259z      M34.009,21.003l4.769-0.002v8.114c-1.823,0.008-3.863,0.016-4.769,0.008V21.003z"/>
                                        </g>
                                    </g>
                                </g>
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
                            <svg width="30px" height="30px" viewBox="0 0 192 192" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" fill="none">

                                <g style="stroke-width:.999964;stroke-dasharray:none" transform="translate(-71.217 -81.133) scale(1.79263)">
                                
                                <path d="M108 109s31-22 26-51c-29-4-50 26-50 26l-19 1-13 21 4 5 16-4 14 14-5 14 5 5 21.173-11.946z" style="fill:none;stroke:#000000;stroke-width:6.69408;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:none;stroke-opacity:1"/>
                                
                                <circle cx="118.676" cy="73.434" r="6.527" style="display:inline;fill:#000000;fill-opacity:1;stroke:none;stroke-width:1.30539;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:5;stroke-dasharray:none;stroke-opacity:1"/>
                                
                                </g>
                                
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
                            <svg width="30px" height="30px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg">

                                <g id="layer1">
                                
                                <path d="M 10 0 L 9.4375 0.40234375 L 8.8613281 0.77539062 L 8.2636719 1.1230469 L 7.6542969 1.4433594 L 7.0292969 1.734375 L 6.390625 1.9960938 L 5.7421875 2.2304688 L 5.0839844 2.4335938 L 4.4179688 2.6054688 L 3.7421875 2.7480469 L 3.0605469 2.8574219 L 2.3769531 2.9355469 L 1.6894531 2.984375 L 1 3 L 1.015625 3.8339844 L 1.0664062 4.6660156 L 1.1503906 5.4960938 L 1.2695312 6.3222656 L 1.421875 7.1425781 L 1.6054688 7.9550781 L 1.8222656 8.7597656 L 2.0722656 9.5546875 L 2.3535156 10.339844 L 2.6679688 11.113281 L 3.0136719 11.873047 L 3.3886719 12.617188 L 3.7929688 13.347656 L 4.2265625 14.058594 L 4.6894531 14.751953 L 5.1816406 15.427734 L 5.6992188 16.082031 L 6.2421875 16.712891 L 6.8105469 17.322266 L 7.4042969 17.910156 L 8.0214844 18.470703 L 8.6601562 19.007812 L 9.3203125 19.517578 L 10 20 L 10.679688 19.517578 L 11.339844 19.007812 L 11.978516 18.470703 L 12.595703 17.910156 L 13.189453 17.322266 L 13.757812 16.712891 L 14.300781 16.082031 L 14.818359 15.427734 L 15.308594 14.751953 L 15.771484 14.058594 L 16.207031 13.347656 L 16.611328 12.617188 L 16.986328 11.873047 L 17.332031 11.113281 L 17.644531 10.339844 L 17.925781 9.5546875 L 18.175781 8.7597656 L 18.394531 7.9550781 L 18.580078 7.1425781 L 18.730469 6.3222656 L 18.849609 5.4960938 L 18.933594 4.6660156 L 18.984375 3.8339844 L 19 3 L 18.310547 2.984375 L 17.623047 2.9355469 L 16.939453 2.8574219 L 16.257812 2.7480469 L 15.582031 2.6054688 L 14.916016 2.4335938 L 14.257812 2.2304688 L 13.607422 1.9960938 L 12.970703 1.734375 L 12.345703 1.4433594 L 11.734375 1.1230469 L 11.138672 0.77539062 L 10.560547 0.40234375 L 10 0 z M 10 1.2285156 L 10.597656 1.6152344 L 11.210938 1.9746094 L 11.837891 2.3085938 L 12.482422 2.6132812 L 13.136719 2.8867188 L 13.804688 3.1328125 L 14.482422 3.3496094 L 15.169922 3.5332031 L 15.863281 3.6894531 L 16.5625 3.8125 L 17.267578 3.90625 L 17.976562 3.96875 L 17.921875 4.7558594 L 17.833984 5.5410156 L 17.716797 6.3242188 L 17.566406 7.0996094 L 17.384766 7.8691406 L 17.171875 8.6308594 L 16.929688 9.3808594 L 16.658203 10.123047 L 16.353516 10.853516 L 16.023438 11.570312 L 15.662109 12.273438 L 15.273438 12.960938 L 14.855469 13.632812 L 14.414062 14.289062 L 13.945312 14.923828 L 13.451172 15.541016 L 12.931641 16.136719 L 12.388672 16.710938 L 11.824219 17.263672 L 11.236328 17.791016 L 10.626953 18.296875 L 10 18.777344 L 9.3730469 18.296875 L 8.7636719 17.791016 L 8.1777344 17.263672 L 7.6113281 16.710938 L 7.0683594 16.136719 L 6.5488281 15.541016 L 6.0566406 14.923828 L 5.5859375 14.289062 L 5.1445312 13.632812 L 4.7265625 12.960938 L 4.3378906 12.273438 L 3.9785156 11.570312 L 3.6445312 10.853516 L 3.34375 10.123047 L 3.0703125 9.3808594 L 2.828125 8.6308594 L 2.6152344 7.8691406 L 2.4335938 7.0996094 L 2.2832031 6.3242188 L 2.1660156 5.5410156 L 2.078125 4.7558594 L 2.0234375 3.96875 L 2.7304688 3.90625 L 3.4355469 3.8125 L 4.1367188 3.6894531 L 4.8320312 3.5332031 L 5.5175781 3.3496094 L 6.1953125 3.1328125 L 6.8632812 2.8867188 L 7.5175781 2.6132812 L 8.1621094 2.3085938 L 8.7910156 1.9746094 L 9.4023438 1.6152344 L 10 1.2285156 z M 10 5 C 8.9013528 5 8 5.9013528 8 7 L 8 8 L 7 8 L 7 8.5 L 7 13 L 13 13 L 13 8 L 12 8 L 12 7.0351562 C 12.000412 7.0234413 12.000412 7.011715 12 7 C 12 5.9013528 11.098647 5 10 5 z M 10 6 C 10.558207 6 11 6.441793 11 7 L 11 8 L 9 8 L 9 7.0351562 C 9.0004121 7.0234413 9.0004121 7.011715 9 7 C 9 6.441793 9.441793 6 10 6 z M 8 9 L 12 9 L 12 12 L 8 12 L 8 9 z " style="fill:#222222; fill-opacity:1; stroke:none; stroke-width:0px;"/>
                                
                                </g>
                                
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
                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.8999 13.96C22.1699 15.63 21.6999 17.42 20.2699 18.68C19.2799 19.59 17.9799 20.09 16.6299 20.08H5.53994C0.869942 19.74 0.859942 12.94 5.53994 12.6H5.58994C3.39994 6.46998 9.08994 2.86998 13.3799 4.24998" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7.26009 13.01C6.74009 12.75 6.17009 12.61 5.59009 12.6" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M21.97 8.5C21.97 9.6 21.46 10.59 20.65 11.23C20.06 11.71 19.29 12 18.47 12C16.54 12 14.97 10.43 14.97 8.5C14.97 7.54 15.36 6.67 16 6.04V6.03C16.63 5.39 17.51 5 18.47 5C20.4 5 21.97 6.57 21.97 8.5Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
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
                            <svg width="30px" height="30px" viewBox="-2 0 48 48" xmlns="http://www.w3.org/2000/svg">
                                <g id="Group_45" data-name="Group 45" transform="translate(-503 -214)">
                                  <g id="Group_44" data-name="Group 44">
                                    <path id="Path_58" data-name="Path 58" d="M542,234v2a3,3,0,0,1,3,3v18a3,3,0,0,1-6,0V219a5.006,5.006,0,0,0-5-5H508a5.006,5.006,0,0,0-5,5v38a5.006,5.006,0,0,0,5,5h34a5.006,5.006,0,0,0,5-5V239A5.006,5.006,0,0,0,542,234Zm-37,23V219a3,3,0,0,1,3-3h26a3,3,0,0,1,3,3v38a4.948,4.948,0,0,0,1.026,3H508A3,3,0,0,1,505,257Z" fill="#303033"/>
                                    <rect id="Rectangle_24" data-name="Rectangle 24" width="2" height="10" transform="translate(511 244)" fill="#303033"/>
                                    <rect id="Rectangle_25" data-name="Rectangle 25" width="2" height="20" transform="translate(517 234)" fill="#303033"/>
                                    <rect id="Rectangle_26" data-name="Rectangle 26" width="2" height="10" transform="translate(523 244)" fill="#303033"/>
                                    <rect id="Rectangle_27" data-name="Rectangle 27" width="2" height="20" transform="translate(529 234)" fill="#303033"/>
                                  </g>
                                  <path id="Path_59" data-name="Path 59" d="M531,230v-8h-8Z" fill="#7d50f9"/>
                                </g>
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
                            <svg fill="#000000" width="30px" height="30px" viewBox="0 0 64 64" id="Layer_1_1_" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                                <g>
                                
                                <path d="M41.505,11.189L35,18.625V21h9v-2h-6.671l5.682-6.493C43.648,11.777,44,10.842,44,9.873V9c0-2.206-1.794-4-4-4   s-4,1.794-4,4v2h2V9c0-1.103,0.897-2,2-2s2,0.897,2,2v0.873C42,10.357,41.824,10.825,41.505,11.189z"/>
                                
                                <path d="M54.479,5L47,15.685V18h8v3h2v-3h2v-2h-2V5H54.479z M55,16h-5.779L55,7.744V16z"/>
                                
                                <path d="M58,25c2.757,0,5-2.243,5-5V6c0-2.757-2.243-5-5-5H26c-2.757,0-5,2.243-5,5v3h2V6c0-1.654,1.346-3,3-3h32   c1.654,0,3,1.346,3,3v14c0,1.654-1.346,3-3,3h-7.184c-0.414-1.161-1.514-2-2.816-2s-2.402,0.839-2.816,2H22v2h23v22.551   c-0.163-0.186-0.275-0.418-0.316-0.68l-1.451-9.434c-0.046-0.298-0.143-0.573-0.269-0.831c-0.148-1.458-0.846-2.834-1.952-3.8   l-4.99-4.367C34.96,27.511,33.599,27,32.188,27h-0.19c-1.555,0-3.018,0.605-4.117,1.706l-1.173,1.173   c-1.446,1.446-3.968,1.446-5.414,0l-2.172-2.172C18.398,26.984,18,26.022,18,25s0.398-1.984,1.121-2.707l1.173-1.173   c1.1-1.1,1.706-2.562,1.706-4.117v-0.19c0-1.411-0.511-2.772-1.44-3.834l-4.366-4.989C15.088,6.725,13.491,6,11.812,6   C10.401,6,9.04,6.511,7.978,7.44l-3.773,3.302C2.168,12.524,1,15.098,1,17.804c0,1.608,0.417,3.199,1.205,4.6   c5.267,9.364,12.896,17.274,22.064,22.876l2.25,1.376C27.958,47.535,29.61,48,31.296,48c2.522,0,4.918-1.048,6.645-2.872   l0.92,6.902c0.12,0.901,0.484,1.752,1.052,2.462l2.429,3.036C42.767,58.059,43,58.725,43,59.403V63h16v-3.789   c0-0.594,0.174-1.169,0.504-1.664l2.656-3.984c0.549-0.825,0.84-1.784,0.84-2.773V40c0-1.654-1.346-3-3-3   c-0.395,0-0.77,0.081-1.116,0.22C58.539,35.945,57.383,35,56,35c-0.395,0-0.77,0.081-1.116,0.22C54.539,33.945,53.383,33,52,33   c-0.352,0-0.686,0.072-1,0.184V25H58z M32.188,29c0.926,0,1.82,0.336,2.517,0.945l4.99,4.367c0.231,0.202,0.426,0.438,0.6,0.688   h-0.42c-0.768,0-1.49,0.299-2.033,0.842c-0.099,0.099-0.181,0.211-0.264,0.321l-6.914-6.914c0.422-0.157,0.87-0.25,1.334-0.25   H32.188z M14.688,9.306l4.366,4.989C19.664,14.992,20,15.886,20,16.812v0.19c0,0.464-0.092,0.912-0.25,1.334L9.921,8.507   C10.494,8.181,11.143,8,11.812,8C12.915,8,13.963,8.476,14.688,9.306z M36.687,43.554C35.326,45.108,33.362,46,31.296,46   c-1.318,0-2.609-0.363-3.734-1.05l-2.25-1.376C16.436,38.15,9.048,30.49,3.948,21.424C3.328,20.321,3,19.07,3,17.804   c0-2.129,0.919-4.155,2.521-5.557l2.833-2.479L18.586,20l-0.879,0.879C16.606,21.979,16,23.443,16,25s0.606,3.021,1.707,4.121   l2.172,2.172C20.979,32.394,22.443,33,24,33s3.021-0.606,4.121-1.707L29,30.414l8.054,8.054l0.54,4.049L36.687,43.554z M52,35   c0.551,0,1,0.449,1,1v2v8h2v-8c0-0.551,0.449-1,1-1s1,0.449,1,1v2v4v2h2v-2v-4c0-0.551,0.449-1,1-1s1,0.449,1,1v10.789   c0,0.594-0.174,1.169-0.504,1.664l-2.656,3.984C57.291,57.262,57,58.221,57,59.211V61H45v-1.597c0-1.131-0.389-2.24-1.096-3.124   l-2.429-3.036c-0.34-0.426-0.559-0.937-0.631-1.478l-1.837-13.778C39.002,37.95,39,37.913,39,37.875   c0-0.234,0.091-0.454,0.256-0.619C39.421,37.091,39.641,37,39.875,37h0.516c0.435,0,0.799,0.312,0.865,0.742l1.451,9.434   C42.959,48.812,44.344,50,46,50h1V24c0-0.551,0.449-1,1-1s1,0.449,1,1v12v6v4h2v-4v-6C51,35.449,51.449,35,52,35z"/>
                                
                                </g>
                                
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
