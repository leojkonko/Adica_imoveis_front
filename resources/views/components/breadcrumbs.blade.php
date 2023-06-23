@inject('site', 'App\\Services\\SiteService')

@if (Route::is('products'))
<section class="py-2 products-breadcrumb" style="" data-aos="zoom-out-up">
    <div class="container position-relative">
        <div class="row d-lg-none bg-cinza rounded-20 p-2">
            @foreach (range(0,4) as $banner)
                <div class="col-md-3 col-sm-4 col-6 d-flex justify-content-center">
                    <div class="w-100">
                        <p class="fs-16 fw-400">Status do imóvel</p>
                        <select name="" id="" class="form-select form-select-white my-1">
                            <option value="">opção 1</option>
                        </select>
                    </div>
                </div>
            @endforeach
            @foreach (range(0,4) as $banner)
                    <div class="col-md-3 col-sm-4 col-6 d-flex justify-content-center">
                        <div class="w-100">
                            <p class="fs-16 fw-400">Status do imóvel</p>
                            <select name="" id="" class="form-select form-select-white my-1">
                                <option value="">opção 1</option>
                            </select>
                        </div>
                    </div>
            @endforeach
            <div class="col-12 mt-1">
                <div class="row">
                    <div class="col-12 col-sm-6 justify-content-center ps-2 d-flex gap-2 align-items-center justify-content-sm-end">
                        <div>
                            <input type="checkbox" name="" id="">
                            <label for="">Mobiliado</label>
                        </div>
                        <div>
                            <input type="checkbox" name="" id="">
                            <label for="">Semi-Mobiliado</label>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 justify-content-sm-end justify-content-center pe-2 d-flex">
                        <button class="btn btn-orange rounded-5 my-1">
                            Buscar imóvel
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-cinza rounded-20 m-auto p-1 d-none d-lg-block">
            <div class="col-lg-12 m-auto">
                <div class="row m-auto">
                    @foreach (range(0,4) as $banner)
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex justify-content-center m-auto p-0">
                            <div class="w-100">
                                <p class="fs-16 fw-400">Status do imóvel</p>
                                <select name="" id="" class="form-select form-select-white my-1">
                                    <option value="">opção 1</option>
                                </select>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>  
            <div class="col-lg-12 m-auto">
                <div class="row m-auto">
                    @foreach (range(0,4) as $banner)
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex justify-content-center m-auto p-0">
                        <div class="w-100">
                            <p class="fs-16 fw-400">Status do imóvel</p>
                            <select name="" id="" class="form-select form-select-white my-1">
                                <option value="">opção 1</option>
                            </select>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>  
                <div class="col-12 align-items-center ps-2 d-flex gap-2">
                    <div>
                        <input type="checkbox" name="" id="">
                        <label for="">Mobiliado</label>
                    </div>
                    <div>
                        <input type="checkbox" name="" id="">
                        <label for="">Semi-Mobiliado</label>
                    </div>
                    <button class="btn btn-orange ms-auto pe-2 rounded-5 my-1">
                        Buscar imóvel
                    </button>
                </div>
        </div>
    </div>
</section>
<section class="position-relative bg-white" style="" data-aos="fade-left">
    <div class="col-lg-12 position-relative end-0 top-0 d-lg-block" >
        <div class="mt-1" style="">
            <div class="">
                <div class="container">
                    <div class="row">
                        <nav aria-label="breadcrumb" class="col-6 flex-column flex-sm-row gap-0-50 align-items-center justify-content-between position-relative z-index-1">
                            <div>
                                @if ($site->getBreadTitle())
                                    <h1 class="fs-32 fw-700 text-dark mb-0">
                                        {{ $site->getBreadTitle() }}
                                    </h1>
                                @endif
                                <ol class="breadcrumb d-flex justify-content-start align-items-center">
                                    @foreach ($site->getBreadCrumbs() as $bread)
                                        @if ($loop->last)
                                            <li class="breadcrumb-item active text-secondary" aria-current="{{ $bread->getText() }}">{{ $bread->getText() }}</li>
                                        @else
                                            <li class="breadcrumb-item">
                                                <a class="text-decoration-none text-secondary" href="{{ $bread->getUrl() }}">{{ $bread->getText() }}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                </div>
                            </ol>
                        </nav>
                        @if (Route::is('products'))
                        <div class="col-6 d-flex justify-content-end">
                            <div>
                                <button class="btn btn-outline-dark">
                                    <svg class="me-0-50" width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 6L0 6" stroke="#454545" stroke-linejoin="round"/>
                                        <rect width="14" height="1" fill="#454545"/>
                                        <path d="M0 11H6V12H0V11Z" fill="#454545"/>
                                    </svg>                                    
                                    Ordenar listagem
                                </button>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@elseif(Route::is('blog-details'))
<section class="position-relative bg-white" style="" data-aos="fade-left">
    
</section>
@else
<section class="position-relative bg-white" style="" data-aos="fade-left">
    <div class="col-lg-12 position-relative end-0 top-0 d-lg-block" >
        <div class="" style="">
            <div class="position-breadcrumb">
                <div class="container"> 
                    <nav aria-label="breadcrumb" class=" flex-column flex-sm-row gap-0-50 align-items-center justify-content-between position-relative z-index-1">
                        @if ($site->getBreadTitle())
                            <h1 class="fs-32 fw-700 text-dark mb-0 w-100 text-center text-lg-start">
                                {{ $site->getBreadTitle() }}
                            </h1>
                        @endif
                        <ol class="breadcrumb d-flex justify-content-lg-start justify-content-center align-items-center">
                            @foreach ($site->getBreadCrumbs() as $bread)
                                @if ($loop->last)
                                    <li class="breadcrumb-item active text-secondary" aria-current="{{ $bread->getText() }}">{{ $bread->getText() }}</li>
                                @else
                                    <li class="breadcrumb-item">
                                        <a class="text-decoration-none text-secondary" href="{{ $bread->getUrl() }}">{{ $bread->getText() }}</a>
                                    </li>
                                @endif
                            @endforeach
                            @if (Route::is('blog'))
                                <div class="ms-auto d-flex d-none d-lg-flex">
                                    <div>
                                        <button class="btn btn-outline-dark">
                                            <svg class="me-0-50" width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 6L0 6" stroke="#454545" stroke-linejoin="round"/>
                                                <rect width="14" height="1" fill="#454545"/>
                                                <path d="M0 11H6V12H0V11Z" fill="#454545"/>
                                            </svg>                                    
                                            Ordenar listagem
                                        </button>
                                    </div>
                                </div>
                            @endif
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
