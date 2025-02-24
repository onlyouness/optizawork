@extends('layouts.layout')
@section('title', $title)

@section('content')
    <section>
        <section class="page-hero">
            <div class="section-dotted-bg"></div>
            <div class="animated-lines"><span class="animated-line line-1"></span><span class="animated-line line-2"></span><span
                    class="animated-line line-3"></span><span class="animated-line line-4"></span><span
                    class="animated-line line-5"></span><span class="animated-line line-6"></span><span
                    class="animated-line line-7"></span><span class="animated-line line-8"></span><span
                    class="animated-line line-9"></span></div>
            <section class="hero-content">
                <div class="headlines">
                    <div class="pre-title" data-aos="fade-up">Boostez Votre Visibilité en Ligne</div>
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


                    <h1 class="hero-title" data-aos="fade-up">Marketing Digital</h1>
                    <p class="hero_description" data-aos="fade-up">
                        Notre équipe met en place des stratégies de marketing digital sur mesure pour maximiser votre présence en ligne. De la publicité ciblée à la gestion des réseaux sociaux, nous avons les outils pour atteindre vos objectifs. Nous analysons vos besoins et créons des campagnes efficaces qui augmentent votre visibilité et engagent votre audience. Que ce soit pour le SEO, le PPC, le marketing de contenu ou l'email marketing, nous vous aidons à chaque étape pour garantir le succès de vos initiatives marketing. Faites confiance à notre expertise pour booster votre croissance et atteindre vos objectifs commerciaux.
                    </p>
                    <div class="cta-links-area "><button class="tp-btn" onclick="sendWhatsAppMessage('Demander Un Devis Pour Le Service Marketing')">Demander un devis</button>
                       
                    </div>
                </div>
             
                <div class="image_hero " data-tilt="">
                    <div class="hero-image-area mb-5 mb-lg-0">
                        <div class="hero-img-wraper"><img class="img-fluid " src="{{ asset('img/services/marketing.png') }}"
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
                        <div class="pre-title" data-aos="fade-up">Deploy faster</div>
                        <h3 data-aos="fade-right">A better workflow</h3>
                        <p data-aos="fade-right">
                            Améliorez votre visibilité en ligne grâce à nos campagnes marketing sur mesure. 
                        </p>
                    </div>
                    <article class="features_articles">
                        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow feature_card "
                            data-aos="fade-up">

                            <svg class="w-7 h-7 text-gray-500   mb-3" fill="currentColor" version="1.1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 491.523 491.523" xml:space="preserve">
                                <g>
                                    <g>

                                        <rect x="401.84" y="401.818"
                                            transform="matrix(0.7074 -0.7069 0.7069 0.7074 -170.6734 411.8717)"
                                            width="20.48" height="20.48" />
                                    </g>
                                </g>
                                <g>
                                    <g>

                                        <rect x="365.641" y="365.638"
                                            transform="matrix(0.7071 -0.7071 0.7071 0.7071 -155.6926 375.8799)"
                                            width="20.48" height="20.48" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M375.016,264.538l-47.996,47.996l-32.934-32.927c28.973-31.451,47.169-57.399,54.965-78.648    c3.32-9.057,4.878-17.446,4.694-25.237c4.731,1.247,9.582,2.057,14.531,2.057c2.76,0,5.54-0.21,8.315-0.62    c53.66-8.09,62.195-69.43,62.53-72.04c5.33-41.45,33.665-59.25,45.595-64.98c4.59-2.19,7.235-6.91,6.75-12.01    c-0.49-5.12-4.14-9.42-9.08-10.72h-0.025c-94.07-24.44-142.05,24.99-162.265,56.61c-10.755,16.809-14.599,35.514-11.137,53.237    c-8.932-0.957-18.638,0.388-29.308,4.302c-21.253,7.792-47.196,25.989-78.643,54.962L87.676,73.188v-34.15    c0-3.6-1.885-6.93-4.97-8.78l-47.995-28.8c-4.03-2.41-9.19-1.77-12.51,1.54l-19.2,19.2c-3.325,3.32-3.96,8.48-1.54,12.51    l28.795,47.99c1.85,3.08,5.185,4.97,8.78,4.97h34.16l112.951,112.951c-2.616,2.549-5.164,4.971-7.851,7.659    c-56.23,56.23-207.82,230.97-172.38,266.41c3.64,3.64,8.75,5.31,15.05,5.31c55.04,0,200.91-127.23,251.365-177.68    c2.687-2.687,5.107-5.235,7.656-7.85l32.553,32.546l-47.994,47.994l93.625,93.63c14.75,14.76,34.37,22.88,55.235,22.88    c20.865,0,40.48-8.12,55.235-22.88c30.45-30.46,30.45-80.01,0-110.47L375.016,264.538z M67.196,67.188h-22.36l-21.7-36.16    l7.89-7.9l36.17,21.71V67.188z M337.346,85.058c16.755-26.2,46.375-53.73,96.85-53.73c7.31,0,15.06,0.58,23.27,1.82    c-15.815,12.33-34.1,33.91-38.65,69.32c-0.27,1.99-6.975,48.66-45.275,54.43c-10.473,1.609-20.961-1.696-29.311-8.435    c-1.659-2.222-3.503-4.389-5.599-6.485c-0.788-0.788-1.625-1.407-2.431-2.133c-2.137-3.011-4.046-6.254-5.444-9.887    C325.506,116.168,327.911,99.808,337.346,85.058z M286.701,150.788c6.635-2.43,12.165-3.43,16.845-3.43    c7.331,0,12.586,2.447,16.758,5.674c2.636,3.529,5.612,6.709,8.864,9.564c4.258,6.706,6.236,16.091,0.653,31.311    c-3.024,8.249-8.159,17.646-15.208,28.063L258.639,166C269.056,158.95,278.453,153.814,286.701,150.788z M257.851,287.838    c-95.285,95.28-218.77,180.38-237.15,172.78c-8.36-19.15,76.795-142.58,172.075-237.86c18.091-18.091,34.466-32.828,49.204-44.457    l60.333,60.329C290.683,253.369,275.944,269.745,257.851,287.838z M454.161,454.158c-10.89,10.89-25.36,16.88-40.755,16.88    c-15.395,0-29.87-5.99-40.755-16.88l-79.145-79.15l81.51-81.51l79.145,79.15C476.626,395.118,476.626,431.688,454.161,454.158z" />
                                    </g>
                                </g>
                            </svg>
                            <a href="#">
                                <h5 class=" title_feature mb-2 text-2xl font-semibold tracking-tight text-gray-900  ">Gestion des Réseaux Sociaux</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-500  ">Créez et gérez des campagnes sur Facebook, Instagram, LinkedIn et plus.</p>
                        </div>
                        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow feature_card "
                            data-aos="fade-up">

                            <svg fill="currentColor" class="w-7 h-7 text-gray-500   mb-3" version="1.1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 512.001 512.001" xml:space="preserve">
                                <g>
                                    <g>
                                        <path
                                            d="M500.622,445.692l-93.886-93.886c14.464-21.501,24.58-45.579,29.834-71.257h33.296c5.632,0,10.199-4.566,10.199-10.199    v-60.615c0-5.633-4.567-10.199-10.199-10.199h-33.301c-5.118-24.844-14.992-48.697-28.909-69.831l23.536-23.536    c1.912-1.912,2.987-4.507,2.987-7.212c0-2.705-1.075-5.299-2.987-7.212l-42.861-42.861c-3.984-3.983-10.44-3.983-14.425,0    L350.37,72.421c-21.136-13.918-44.987-23.792-69.831-28.908V10.21c0-5.633-4.567-10.199-10.199-10.199h-60.616    c-5.632,0-10.199,4.566-10.199,10.199v33.301c-24.843,5.117-48.695,14.991-69.831,28.908l-23.536-23.536    c-3.984-3.983-10.44-3.983-14.425,0L48.873,91.744c-1.912,1.912-2.987,4.507-2.987,7.212s1.075,5.299,2.987,7.212l23.536,23.536    c-13.918,21.137-23.791,44.988-28.908,69.831H10.199C4.567,199.535,0,204.101,0,209.734v60.615    c0,5.633,4.567,10.199,10.199,10.199h33.301c5.117,24.843,14.99,48.695,28.908,69.831l-23.536,23.536    c-3.983,3.983-3.983,10.441,0,14.425L91.734,431.2c3.984,3.983,10.44,3.983,14.425,0l23.536-23.537    c21.136,13.918,44.987,23.792,69.831,28.909v33.301c0,5.633,4.567,10.199,10.199,10.199h60.616    c5.632,0,10.199-4.566,10.199-10.199v-33.295c25.679-5.254,49.756-15.37,71.257-29.834l93.886,93.886    c7.574,7.573,17.522,11.36,27.471,11.36s19.897-3.787,27.471-11.36c7.337-7.337,11.378-17.093,11.378-27.471    C512,462.785,507.959,453.03,500.622,445.692z M268.726,418.005c-4.947,0.794-8.585,5.061-8.585,10.071v31.601h-40.217v-31.601    c0-5.01-3.638-9.277-8.585-10.071c-27.664-4.436-54.243-15.44-76.863-31.822c-4.057-2.938-9.65-2.495-13.195,1.049l-22.334,22.335    l-28.437-28.437l22.334-22.334c3.543-3.544,3.987-9.136,1.047-13.195c-16.383-22.621-27.386-49.2-31.82-76.863    c-0.792-4.947-5.061-8.585-10.071-8.585H20.398v-40.216H52c5.01,0,9.278-3.638,10.071-8.585    c4.436-27.664,15.439-54.242,31.82-76.863c2.939-4.058,2.495-9.651-1.047-13.195L70.509,98.957L98.947,70.52l22.334,22.334    c3.543,3.544,9.135,3.987,13.196,1.048c22.62-16.383,49.198-27.387,76.862-31.821c4.947-0.794,8.585-5.061,8.585-10.071V20.409    h40.217V52.01c0,5.01,3.638,9.277,8.585,10.071c27.664,4.435,54.243,15.439,76.862,31.822c4.059,2.938,9.651,2.495,13.196-1.048    l22.334-22.334l28.437,28.437l-22.334,22.334c-3.543,3.544-3.987,9.136-1.047,13.195c16.382,22.619,27.386,49.198,31.822,76.864    c0.794,4.947,5.061,8.585,10.071,8.585h31.601v40.216h-31.601c-5.01,0-9.278,3.638-10.071,8.585    c-5.491,34.246-20.465,65.625-43.49,91.354l-23.401-23.401c22.383-25.713,35.955-59.289,35.955-95.977    c0-80.701-65.654-146.357-146.356-146.357S94.347,160.012,94.347,240.713s65.654,146.355,146.356,146.355    c36.688,0,70.263-13.572,95.977-35.954l23.401,23.401C334.35,397.54,302.97,412.514,268.726,418.005z M240.702,366.67    c-69.453,0-125.957-56.504-125.957-125.957s56.504-125.958,125.957-125.958s125.957,56.505,125.957,125.958    S310.156,366.67,240.702,366.67z M486.197,486.209c-7.193,7.193-18.898,7.193-26.092,0l-89.994-89.994l26.093-26.093    l89.993,89.994C493.392,467.31,493.392,479.014,486.197,486.209z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M217.404,146.425c-1.918-5.296-7.766-8.036-13.063-6.116c-26.468,9.587-48.49,29.736-60.418,55.28    c-2.384,5.104-0.178,11.174,4.925,13.557c1.396,0.652,2.864,0.961,4.309,0.961c3.84,0,7.517-2.179,9.248-5.886    c9.654-20.672,27.472-36.976,48.883-44.732C216.584,157.57,219.323,151.722,217.404,146.425z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M145.253,222.814c-5.597-0.451-10.528,3.745-10.973,9.361c-0.224,2.826-0.338,5.698-0.338,8.538    c0,5.633,4.567,10.199,10.199,10.199c5.632,0,10.199-4.566,10.199-10.199c0-2.303,0.093-4.633,0.274-6.925    C155.06,228.173,150.869,223.26,145.253,222.814z" />
                                    </g>
                                </g>
                            </svg>
                            <a href="#">
                                <h5 class=" title_feature mb-2 text-2xl font-semibold tracking-tight text-gray-900  ">
                                    Publicité Ciblée (PPC) </h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-500  "> Maximisez votre retour sur investissement avec des annonces payantes optimisées.</p>
                        </div>
                        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow feature_card "
                            data-aos="fade-up">
                          
                            <svg fill="currentColor" class="w-7 h-7 text-gray-500 " viewBox="0 0 24 24" id="wordpress"
                                data-name="Flat Line" xmlns="http://www.w3.org/2000/svg" class="icon flat-line">
                                <path id="primary"
                                    d="M16.33,9A4.33,4.33,0,0,0,17,5.44c-.2-1.52.83-1.65,2-1.24A3.1,3.1,0,0,1,21,7.12h0a3.15,3.15,0,0,1-.28,1.29L15.44,20,11,6h2"
                                    style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;" />
                                <polyline id="primary-2" data-name="primary" points="5 5.95 3 5.95 7.44 20 12 9.96"
                                    style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;" />
                            </svg>
                            <a href="#">
                                <h5 class=" title_feature mb-2 text-2xl font-semibold tracking-tight text-gray-900  ">
                                    Stratégie de Contenu</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-500  ">Rédaction et publication de contenus engageants pour captiver votre audience.</p>
                        </div>
                        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow feature_card "
                            data-aos="fade-up">
                      
                            <svg  class="w-7 h-7 text-gray-500   mb-3"  viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.49 2.23006L5.50003 4.10005C4.35003 4.53005 3.41003 5.89004 3.41003 7.12004V14.55C3.41003 15.73 4.19005 17.28 5.14005 17.99L9.44003 21.2001C10.85 22.2601 13.17 22.2601 14.58 21.2001L18.88 17.99C19.83 17.28 20.61 15.73 20.61 14.55V7.12004C20.61 5.89004 19.67 4.53005 18.52 4.10005L13.53 2.23006C12.68 1.92006 11.32 1.92006 10.49 2.23006Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12.0001 10.92C11.9601 10.92 11.9101 10.92 11.8701 10.92C10.9301 10.89 10.1801 10.11 10.1801 9.16003C10.1801 8.19003 10.9701 7.40002 11.9401 7.40002C12.9101 7.40002 13.7001 8.19003 13.7001 9.16003C13.6901 10.12 12.9401 10.89 12.0001 10.92Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10.01 13.72C9.05004 14.36 9.05004 15.41 10.01 16.05C11.1 16.78 12.89 16.78 13.98 16.05C14.94 15.41 14.94 14.36 13.98 13.72C12.9 12.99 11.11 12.99 10.01 13.72Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            <a href="#">
                                <h5 class=" title_feature mb-2 text-2xl font-semibold tracking-tight text-gray-900  ">
                                    Email Marketing</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-500  ">Campagnes d’emailing personnalisées pour fidéliser vos clients.</p>
                        </div>
                        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow feature_card "
                            data-aos="fade-up">
                            <svg class="w-7 h-7 text-gray-500   mb-3"   version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                                
                                <g>
                                    <path class="st0" d="M435.244,391.19c32.805-41.18,52.518-93.432,52.503-150.118c0.015-66.486-27.029-126.93-70.608-170.464   C373.593,27.021,313.149-0.016,246.667,0C180.181-0.016,119.742,27.021,76.2,70.608C32.616,114.142,5.576,174.586,5.591,241.072   C5.576,307.55,32.616,367.994,76.2,411.536c43.542,43.587,103.982,70.624,170.468,70.608c50.948,0.016,98.312-15.91,137.281-42.94   L456.756,512l49.653-49.653L435.244,391.19z M378.508,372.916c-33.826,33.773-80.267,54.591-131.841,54.606   c-51.574-0.015-98.015-20.833-131.845-54.606c-33.784-33.834-54.595-80.271-54.61-131.844   c0.015-51.574,20.826-98.011,54.61-131.844c33.83-33.78,80.271-54.591,131.845-54.606c51.574,0.015,98.014,20.826,131.841,54.606   c33.791,33.833,54.602,80.271,54.617,131.844C433.11,292.646,412.299,339.082,378.508,372.916z"/>
                                    <path class="st0" d="M155.926,235.105l-5.696-0.792c-14.558-2.058-19.782-7.117-19.782-14.555c0-8.389,6.012-14.402,16.932-14.402   c9.018,0,17.088,2.691,25.794,8.39c0.789,0.473,1.582,0.313,2.214-0.48l7.597-11.704c0.633-0.953,0.473-1.585-0.32-2.218   c-8.542-6.484-21.359-10.76-34.809-10.76c-22.156,0-36.398,12.977-36.398,32.44c0,17.877,11.712,27.852,32.44,30.694l5.696,0.792   c14.875,2.058,19.622,7.125,19.622,14.875c0,9.022-7.437,15.507-20.255,15.507c-12.024,0-22.312-5.852-29.273-11.392   c-0.632-0.632-1.581-0.632-2.214,0.16l-9.811,11.392c-0.632,0.792-0.316,1.737,0.316,2.378   c8.386,7.909,23.733,14.234,39.561,14.234c26.739,0,40.509-14.234,40.509-33.384C188.049,247.762,176.652,237.956,155.926,235.105z   "/>
                                    <path class="st0" d="M275.566,190.322h-67.408c-0.949,0-1.581,0.632-1.581,1.585v104.435c0,0.953,0.632,1.585,1.581,1.585h67.408   c0.953,0,1.585-0.632,1.585-1.585v-13.602c0-0.952-0.632-1.585-1.585-1.585h-49.368l-0.949-0.953V252.99l0.949-0.952h41.614   c0.953,0,1.586-0.633,1.586-1.586v-13.609c0-0.945-0.633-1.577-1.586-1.577h-41.614l-0.949-0.953v-26.266l0.949-0.945h49.368   c0.953,0,1.585-0.64,1.585-1.585v-13.61C277.151,190.954,276.519,190.322,275.566,190.322z"/>
                                    <path class="st0" d="M334.448,188.584c-18.514,0-32.439,8.863-37.975,25.954c-2.218,6.645-2.85,12.658-2.85,29.589   c0,16.932,0.632,22.944,2.85,29.589c5.536,17.092,19.462,25.947,37.975,25.947c18.677,0,32.591-8.855,38.139-25.947   c2.21-6.645,2.85-12.657,2.85-29.589c0-16.932-0.64-22.944-2.85-29.589C367.039,197.447,353.124,188.584,334.448,188.584z    M354.542,268.81c-3.003,8.702-9.327,14.082-20.095,14.082c-10.6,0-16.932-5.38-19.938-14.082   c-1.265-3.955-1.898-9.495-1.898-24.682c0-15.355,0.633-20.734,1.898-24.69c3.007-8.702,9.339-14.082,19.938-14.082   c10.768,0,17.092,5.38,20.095,14.082c1.265,3.955,1.904,9.335,1.904,24.69C356.447,259.315,355.807,264.854,354.542,268.81z"/>
                                </g>
                                </svg>
                            <a href="#">
                                <h5 class=" title_feature mb-2 text-2xl font-semibold tracking-tight text-gray-900  ">Suivi des Performances</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-500  ">Analysez les résultats avec des outils comme Google Analytics et des tableaux de bord sur mesure.</p>
                        </div>
                        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow feature_card "
                            data-aos="fade-up">
                            <svg class="w-7 h-7 text-gray-500   mb-3" aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M18 5h-.7c.229-.467.349-.98.351-1.5a3.5 3.5 0 0 0-3.5-3.5c-1.717 0-3.215 1.2-4.331 2.481C8.4.842 6.949 0 5.5 0A3.5 3.5 0 0 0 2 3.5c.003.52.123 1.033.351 1.5H2a2 2 0 0 0-2 2v3a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7a2 2 0 0 0-2-2ZM8.058 5H5.5a1.5 1.5 0 0 1 0-3c.9 0 2 .754 3.092 2.122-.219.337-.392.635-.534.878Zm6.1 0h-3.742c.933-1.368 2.371-3 3.739-3a1.5 1.5 0 0 1 0 3h.003ZM11 13H9v7h2v-7Zm-4 0H2v5a2 2 0 0 0 2 2h3v-7Zm6 0v7h3a2 2 0 0 0 2-2v-5h-5Z" />
                            </svg>
                            <a href="#">
                                <h5 class=" title_feature mb-2 text-2xl font-semibold tracking-tight text-gray-900  ">
                                    Influenceurs et Partenariats  </h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-500  ">Collaborez avec des influenceurs pour augmenter votre visibilité.</p>
                        </div>

                    </article>

                </div>

            </div>
        </section>


        @include('sections.services')

    </section>
@endsection
