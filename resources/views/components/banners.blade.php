
    <section class="banner ratio ratio-6x9 ratio-md-16x9 ratio-xl-21x9 overflow-hidden">
        <div class="banner-swiper">
            <div class="swiper-wrapper">
                @foreach (range(0,2) as $banner)
                    <div class="swiper-slide banner-slide position-relative">

                        <picture>
                            {{--<div class="w-100 h-100 position-absolute" style="
                                background: linear-gradient(90deg, #202020 0%, rgba(32, 32, 32, 0) 100%);
                                opacity: 0.6;"></div>
                            <div class="w-100 h-100 position-absolute z-index-1" style="background: #202020; opacity: 0.4;"></div>
                            <video class="object-fit-cover w-100 h-100 d-none d-lg-block" src="{{ asset("front/images/backgrounds/banner.mp4") }}" 
                                type="video/mp4" muted="" playsinline="" autoplay="" loop="" media="(min-width: 767px)">
                                    Seu navegador não suporta a tag de vídeo.
                                </video>--}}
                                <img class="object-fit-cover w-100 h-100  efeito-img" id="" src="{{ asset("front/images/backgrounds/banner.png") }}" alt="" media="(min-width: 767px)">
                             
                            {{-- Desktop
                            <source srcset="{{ $banner->getImagemDesktop()->url() }}" media="(min-width: 767px)">
                                --}}
                            {{-- Mobile --}}
                            <img class="object-fit-cover w-100 h-100" src="{{ asset("front/images/backgrounds/banner.png") }}" alt="">
                        </picture>
                    {{--<div class="position-absolute z-index-3 w-100 top-50 start-0 translate-middle-y top-custom-banner">
                            <div class="container" data-aos="fade-right">
                                <div class="row">
                                    <div class="col-lg-8 col-xl-6 xol-xxl-4 text-lg-start text-center">
                                        <h2 class="fs-48 fw-600 text-white text-lg-start text-center w-100">Entender você é o nosso diferencial</h2>
                                        <p class="fs-16 fw-400 text-white">Descubra porque a QUATTRO é a melhor no que faz.</p>
                                        <a href="{{ route_lang('company') }}">
                                            <button class="btn btn-outline-light rounded-0">
                                                A empresa
                                            </button>
                                        </a>
                                    </div> 
                                </div>
                            </div>
                        </div>--}}

                    </div>
                @endforeach
            </div> 
            
            {{--mobile--}}
            <div class="position-absolute w-100 start-50 translate-middle-x container bottom-0 z-index-1 d-none d-lg-block" >
                <div class="position-absolute bottom-0 w-100 start-50 translate-middle-x" id="infos">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist" data-aos="zoom-out-down">
                        <li class="nav-item nav-item-home" role="presentation">
                            <button class="nav-link active" style="border-radius: 10px 0px 0px 0px;" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                            Home
                            </button>
                        </li>
                        <li class="nav-item nav-item-home" role="presentation">
                            <button class="nav-link position-relative" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" 
                            aria-selected="false" style="border-radius: 0px 10px 0px 0px;">
                                <div class="w-100 h-100 position-absolute start-0 bottom-0 z-index-background bg-danger"></div>
                                <span class="position-relative opacity-1" style="opacity: 1">Profile</span>
                            </button>
                        </li>
                      </ul>
                      <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active bg-white" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="ps-lg-2">
                                <div class="row">
                                    @foreach (range(0,4) as $banner)
                                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex justify-content-center">
                                        <select name="" id="" class="form-select form-select-cinza my-1">
                                            <option value="">opção 1</option>
                                        </select>
                                    </div>
                                    @endforeach
                                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex justify-content-center">
                                        <button class="btn btn-orange rounded-5 w-100 my-1 me-2">
                                            Buscar imóvel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade bg-white" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" data-aos="zoom-out-down">
                            <div class="ps-lg-3">
                                <div class="row">
                                    @foreach (range(0,4) as $banner)
                                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex justify-content-center">
                                        <select name="" id="" class="form-select my-2">
                                            <option value="">opção 1</option>
                                        </select>
                                    </div>
                                    @endforeach
                                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex justify-content-center">
                                        <button class="btn btn-outline-light rounded-0 my-2">
                                            Buscar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
            <div class="swiper-button-prev" style="z-index: 13;width: 40px; height: 40px;left: 6%;">
                <button class="rounded-circle" style="width: 40px; height: 40px;background: rgba(0, 0, 0, 0.25); border: none;">
                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 1L1 8L8 15" stroke="white" stroke-width="2" stroke-linejoin="round"/>
                    </svg>
                </button>                                          
            </div>
            <div class="swiper-button-next" style="z-index: 13;width: 40px; height: 40px;right: 6%">
                <button class="rounded-circle" style="width: 40px; height: 40px;background: rgba(0, 0, 0, 0.25); border: none;">
                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 15L8 8L1 1" stroke="white" stroke-width="2" stroke-linejoin="round"/>
                    </svg>
                </button>                                                                                                                 
            </div>
        </div>
    </section>

