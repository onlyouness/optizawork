@extends('layouts.layout')
@section('title', 'Vos Partenaires Digital')

@section('content')
    <section class="page-hero">
        <div class="section-dotted-bg"></div>
        <div class="animated-lines"><span class="animated-line line-1"></span><span class="animated-line line-2"></span><span
                class="animated-line line-3"></span><span class="animated-line line-4"></span><span
                class="animated-line line-5"></span><span class="animated-line line-6"></span><span
                class="animated-line line-7"></span><span class="animated-line line-8"></span><span
                class="animated-line line-9"></span></div>
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
                <h1 class="hero-title">
                    Accélérer votre croissance et améliorer votre positionnement <span class="featured-text"> digital.
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150" preserveAspectRatio="none">
                            <path d="M7.7,145.6C109,125,299.9,116.2,401,121.3c42.1,2.2,87.6,11.8,87.3,25.7">
                            </path>
                        </svg> </span>
                </h1>
                <div class="cta-links-area "><a class="tp-btn" href="#0">Contact Me</a>

                </div>
            </div>
            {{-- <div class="hero_image" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                <img src="{{ asset('img/hero.jpg') }}" alt="hero image">
            </div> --}}
            <div class="image_hero " data-tilt="">
                <div class="hero-image-area mb-5 mb-lg-0">
                    <div class="hero-img-wraper"><img class="img-fluid " src="{{ asset('img/illustration-3.png') }}"
                            alt="" draggable="false">
                        <div class="radar"></div>
                        <div class="orbit"> </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
  
    @include('sections.services')
    @include('sections.aboutus')
    @include('sections.goals')
    {{-- <div class="container_projects">
        <div class="services_heading">
            <div class="titles">
                <div class="pre-title">Projects </div>
                <h3 class="capitalize">Nos Reference</h3>
            </div>
        
        </div>
        <div class="grid grid-cols-3 cursor-pointer gap-2 gap-y-4  ">
            
        
        </div>
        
        @foreach ($projects as $project)
            <div class="relative project">
                <div class="project_overlay"></div>
                <img class="h-auto max-w-full rounded-lg" src="storage/{{$project->image}}"
                    alt="">
                <div class="project_info ">
                    <div class="project_heading">
                        <h3>{{$project->name}}</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                        </svg>
        
                    </div>
                    <button class="btn_project">Demander
                        Devis</button>
                </div>
            </div>    
        @endforeach
    </div> --}}
    <div class="container_projects">

        @include('sections.projects')
    </div>
    @include('sections.clients')
@endsection
