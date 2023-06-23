@extends('front.layout.app')

@section('content')
    <main id="main" class="bg-white" style="">

        <x-banners />
        <section class="d-lg-none py-2" style="background: #f5f5f5" data-aos="zoom-out-up">
            <div class="container position-relative">
                <div class="position-relative z-index-1">
                    <div class="">
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
                            <div class="tab-pane fade show active bg-white px-1" id="pills-home1" role="tabpanel" aria-labelledby="pills-home-tab1">
                                <div class="ps-lg-3">
                                    <div class="row">
                                        @foreach (range(0,4) as $banner)
                                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex justify-content-center">
                                            <select name="" id="" class="form-select form-select-cinza my-2">
                                                <option value="">opção 1</option>
                                            </select>
                                        </div>
                                        @endforeach
                                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex justify-content-center">
                                            <button class="btn btn-orange rounded-5 w-100 my-2 me-2">
                                                Buscar imóvel
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade bg-white px-1" id="pills-profile1" role="tabpanel" aria-labelledby="pills-profile-tab1">
                                <div class="ps-lg-3">
                                    <div class="row">
                                        @foreach (range(0,4) as $banner)
                                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex justify-content-center">
                                            <select name="" id="" class="form-select form-select-cinza my-2">
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
                          </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-white">   
            <div class="container">
                <div class="row g-0">
                    <h2 class="fs-32 fw-700 w-100 text-center mt-4 mb-1">O que você <span class="text-orange">procura?</span></h2>
                    <div class="col-lg-10 m-auto">
                        <div class="procura-swiper swiper p-1">
                            <div class="swiper-wrapper mb-4">
                        
                                @foreach (range(0,6) as $image)
                                    <div class="d-block swiper-slide" data-aos="zoom-out-up">
                                        <div class="shadow-lg bg-cinza rounded-circle">
                                            <div class="ratio ratio-1x1">
                                                <img class="position-absolute top-50 start-50 translate-middle z-index-1 p-2" width="50px" src="{{ asset("front/images/backgrounds/casa.svg") }}" alt="">
                                            </div>
                                        </div>
                                        <p class="fs-20 fw-400 text-center mt-1">Casa</p>
                                    </div>
                                @endforeach
                        
                            </div>
                            <div class="w-100 m-auto position-relative z-index-1 controle-banner" style="width: 200px; height: 100px;margin-top: -4rem;
                            margin-bottom: 0rem;">
                                <div class=" w-100 h-100 position-absolute">
                                    <div class="swiper-button-prev">
                                        <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13 7L1 7M1 7L7 13M1 7L7 0.999999" stroke="#3C4C71" stroke-linejoin="round"/>
                                        </svg>                                                                         
                                    </div>
                                    <div class="swiper-button-next">
                                        <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 7H12M12 7L6 1M12 7L6 13" stroke="#3C4C71" stroke-linejoin="round"/>
                                        </svg>                                                                                                                                           
                                    </div>
                                    <div class="swiper-pagination mb-2"></div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <x-destaques />
        <section class="mt-2" data-aos="zoom-out-up">
            <div class="container start">
                <div class="row">
                    <div class="curiosidades-swiper p-1">
                        <div class="swiper-wrapper mb-4">
                    
                            @foreach (range(0,2) as $image)
                                <div class="block swiper-slide overflow-hidden" data-aos="zoom-out-up">
                                    <div class="d-lg-flex">
                                        <div class="col-lg-5 col-xxl-4 d-flex align-items-center">
                                            <div class="p-2 bg-primary rounded-20-left h-100 d-flex align-items-center flex-column pt-xxl-4">
                                                <h2 class="fs-32 fw-700 text-white text-lg-start text-center w-100">Do tamanho do <span class="text-orange">seu sonho</span></h2>
                                                <p class="mt-1 fs-16 fw-400 text-white text-lg-start text-center">
                                                    Lorem ipsum dolor sit amet consectetur. Convallis interdum nunc dis a sed dignissim dui duis. Turpis ac nisi maecenas eu felis luctus. Feugiat tellus nisi elit faucibus felis augue. Convallis interdum nunc dis a sed dignissim dui duis.
                                                </p>
                                                <div class="w-100 d-flex justify-content-center justify-content-lg-start">
                                                    <button class="mt-1 btn btn-outline-orange rounded-20 text-white" style="border-radius:40px;padding: 12px 25px;">
                                                        <svg class="me-0-50 mb-0-25" width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="7" cy="7.5" r="6.5" stroke="white"/>
                                                            <path d="M7 4.5V10.5M4 7.5H10" stroke="white" stroke-linecap="round"/>
                                                        </svg>                                                        
                                                        Detalhes
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-8 col-lg-7">
                                            <div class="ratio ratio-lg-21x9 ratio-md-16x9 ratio-1x1 h-100">
                                                <img class="w-100 h-100 object-fit-cover rounded-20-right" src="{{ asset("front/images/backgrounds/curiosidade.png") }}" alt="" title="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                    
                        </div>
                        <div class="w-100 m-auto position-relative z-index-1 controle-banner" style="width: 200px; height: 100px;margin-top: -10rem;margin-bottom: 7rem;">
                            <div class=" w-100 h-100 position-absolute">
                                <div class="swiper-button-prev">
                                    <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 1L1 6L6 11" stroke="#454545" stroke-width="2" stroke-linejoin="round"/>
                                    </svg>                                                                         
                                </div>
                                <div class="swiper-button-next">
                                    <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 11L6 6L1 1" stroke="#454545" stroke-width="2" stroke-linejoin="round"/>
                                    </svg>                                                                                                                                           
                                </div>
                                <div class="swiper-pagination mb-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-lg-4 pt-2 bg-white">
            <div class="container">
                <div class="row">
                    <h6 class="fs-16 lt text-orange w-100 text-center">DESTAQUES EM</h6>
                    <h2 class="fs-32 fw-700 w-100 text-center mb-2">Mobiliados</span></h2>
                    {{--<x-destaques />--}}
                    <div class="mobiliados-swiper swiper p-1">
                        <div class="swiper-wrapper mb-4">
                    
                            @foreach (range(0,4) as $image)
                                <div class="block swiper-slide overflow-hidden" data-aos="zoom-out-up">
                                    <div class="d-lg-flex">
                                        <div class="col-lg-6">
                                            <div class="bg-cinza rounded-20-left h-100 p-1 p-sm-2">
                                                <div class="d-flex gap-0-50">
                                                    @foreach (range(0,2) as $o)
                                                        <button class="btn-imoveis btn-imoveis-cinza fs-14 fw-600">
                                                            Casa
                                                        </button>
                                                    @endforeach
                                                </div>
                                                <h2 class="mt-1 fs-32 fw-700 w-100 text-lg-start text-center">Casa mobiliada no Jardim América</h2>
                                                <div class="mt-1">
                                                    <div class="d-flex gap-2 justify-content-center justify-content-lg-start">
                                                        <p class="fs-16 fw-400 text-secondary m-0">
                                                            <svg class="me-0-50 mb-0-25" width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M6 1C3.23935 1 1 3.26405 1 6.05514C1 10.5313 6 15 6 15C6 15 11 10.5313 11 6.05514C11 3.26405 8.76065 1 6 1ZM6 8.23012C4.81057 8.23012 3.84875 7.25769 3.84875 6.05514C3.84875 4.8526 4.81057 3.88017 6 3.88017C7.18943 3.88017 8.15125 4.8526 8.15125 6.05514C8.15125 7.25769 7.18943 8.23012 6 8.23012Z" stroke="#3B3A79" stroke-linejoin="round"/>
                                                            </svg>
                                                            Jardim América 
                                                        </p>                                                     
                                                        <p class="fs-16 fw-400 text-secondary m-0">
                                                            <svg class="me-0-50 mb-0-25" width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M6 1C3.23935 1 1 3.26405 1 6.05514C1 10.5313 6 15 6 15C6 15 11 10.5313 11 6.05514C11 3.26405 8.76065 1 6 1ZM6 8.23012C4.81057 8.23012 3.84875 7.25769 3.84875 6.05514C3.84875 4.8526 4.81057 3.88017 6 3.88017C7.18943 3.88017 8.15125 4.8526 8.15125 6.05514C8.15125 7.25769 7.18943 8.23012 6 8.23012Z" stroke="#3B3A79" stroke-linejoin="round"/>
                                                            </svg>
                                                            Jardim América 
                                                        </p>                                                     
                                                    </div>
                                                    <div class="d-flex gap-1 mt-0-50 justify-content-center justify-content-lg-start">
                                                        @foreach (range(0,3) as $e)
                                                        <p class="fs-16 fw-400 text-secondary m-0">
                                                            <svg class="me-0-25 mb-0-25" width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M6 1C3.23935 1 1 3.26405 1 6.05514C1 10.5313 6 15 6 15C6 15 11 10.5313 11 6.05514C11 3.26405 8.76065 1 6 1ZM6 8.23012C4.81057 8.23012 3.84875 7.25769 3.84875 6.05514C3.84875 4.8526 4.81057 3.88017 6 3.88017C7.18943 3.88017 8.15125 4.8526 8.15125 6.05514C8.15125 7.25769 7.18943 8.23012 6 8.23012Z" stroke="#3B3A79" stroke-linejoin="round"/>
                                                            </svg>
                                                            2
                                                        </p> 
                                                        @endforeach  
                                                    </div>
                                                    <h2 class="fs-32 fw-700 text-primary mt-2 w-100 text-lg-start text-center">R$ 7.200/mês</h2>
                                                    <div class="d-flex justify-content-center justify-content-lg-start">
                                                        <button class="btn btn-outline-orange text-primary mt-2" style="border-radius:40px;padding: 12px 25px;color: #3B3A79 !important;">
                                                            <svg class="mb-0-25 me-0-50" width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <circle cx="7" cy="7.5" r="6.5" stroke="#3B3A79"/>
                                                                <path d="M7 4.5V10.5M4 7.5H10" stroke="#3B3A79" stroke-linecap="round"/>
                                                            </svg>       
                                                            Detalhes    
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="ratio ratio-1x1 h-100">
                                                <img class="w-100 h-100 object-fit-cover rounded-20-right" src="{{ asset("front/images/backgrounds/mobiliados.png") }}" alt="" title="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                    
                        </div>
                        <div class="w-100 m-auto position-relative z-index-1 controle-banner" style="width: 200px; height: 100px;margin-top: -10rem;margin-bottom: 7rem;">
                            <div class=" w-100 h-100 position-absolute">
                                <div class="swiper-button-prev">
                                    <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 1L1 6L6 11" stroke="#454545" stroke-width="2" stroke-linejoin="round"/>
                                    </svg>                                                                         
                                </div>
                                <div class="swiper-button-next">
                                    <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 11L6 6L1 1" stroke="#454545" stroke-width="2" stroke-linejoin="round"/>
                                    </svg>                                                                                                                                           
                                </div>
                                <div class="swiper-pagination mb-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       <section class="pt-2 overflow-hidden">
            <div class="container position-relative">
                <div class="row px-xl-2 px-xxl-1 px-1 px-sm-0">
                    <div class="w-100 text-center">
                        <h6 class="fs-16 lt text-orange w-100 text-center">INFORMATIVOS</h6>
                        <h2 class="fs-32 fw-700 w-100 text-center mb-4">Últimas notícias</span></h2>
                    </div>
                    <div class="col-lg-12 m-auto mt-3">
                        <div class="swiper blog-swiper mt-3 bg-orange p-2 rounded-20 overflow-y-hidden" data-aos="fade-left" style="margin: -2rem">
                            <div class="swiper-wrapper mb-4">
                                <?php foreach(range(0,5) as $i) : ?>
                                    <div class="swiper-slide position-relative">
                                
                                            <div class="ratio ratio-1x1">
                                                <div class="z-index-1 rounded-20" style="background: linear-gradient(180deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0) 100%);transform: rotate(-180deg);"></div>
                                                <img class="w-100 h-100 object-fit-cover rounded-20" src="{{ asset("front/images/backgrounds/blog.png") }}" alt="">
                                                <div class="bottom-0 z-index-2" style="top: initial !important;">
                                                    <div class="position-absolute bottom-0 start-0 p-1 p-lg-1 p-xl-2 p-xxl-3">
                                                        <button class="mb-lg-0-50 mb-xl-0 btn rounded-36 py-0-25 px-0-50 fs-12 p-700 border-2 btn-orange text-white" >DICAS</button>
                                                        <p class="text-white fs-32 fw-700 mt-1 m-0">5 dicas para você encontrar o imóvel perfeito!</p>
                                                        <p class="text-white fs-16 fw-400 mt-1">O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. [...]</p>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="w-100 m-auto position-relative z-index-1 controle-banner" style="width: 200px; height: 100px;margin-top: -3rem;
                            margin-bottom: 0rem;">
                                <div class=" w-100 h-100 position-absolute">
                                    <div class="swiper-button-prev">
                                        <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 1L1 6L6 11" stroke="#454545" stroke-width="2" stroke-linejoin="round"/>
                                        </svg>                                                                         
                                    </div>
                                    <div class="swiper-button-next">
                                        <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 11L6 6L1 1" stroke="#454545" stroke-width="2" stroke-linejoin="round"/>
                                        </svg>                                                                                                                                           
                                    </div>
                                    <div class="swiper-pagination mb-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--<svg class="position-absolute bottom-0 start-50 translate-middle-x d-none d-lg-block" width="1472" height="458" viewBox="0 0 1472 458" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 458H1472V20C1472 8.95432 1463.05 0 1452 0H20C8.95428 0 0 8.9543 0 20V458Z" fill="#F58634"/>
            </svg>--}}    
            <svg class="position-absolute start-0 w-100 d-none d-lg-flex" style="bottom: -15px" width="1920" height="28" viewBox="0 0 1920 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="1920" height="28" transform="matrix(1 0 0 -1 0 28)" fill="#F58634"/>
            </svg>                            
       </section>
     
    </main>
@endsection
