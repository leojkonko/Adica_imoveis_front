/**
 * Declaração dos swipers
 * Exemplo:
 * let swiper = new Swiper(".swiper-teste", {opcoes})
 */

new Swiper(".banner-swiper", {
    /*autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },*/
    //rewind: false,
    effect: "fade",
    direction: "vertical",
    navigation: {
        nextEl: ".banner-swiper .swiper-button-next",
        prevEl: ".banner-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".banner-swiper .swiper-pagination",
        type: "bullets",
        clickable: true,
    },
});

new Swiper(".gallery-swiper", {
    rewind: false,
    slidesPerView: 1,
    spaceBetween: 1,
    navigation: {
        nextEl: ".gallery-swiper .swiper-button-next",
        prevEl: ".gallery-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".gallery-swiper .swiper-pagination",
        type: "bullets",
        dynamicBullets: true,
        clickable: true,
    },
});
new Swiper(".empresa-swiper", {
    slidesPerView: 1,
    spaceBetween: 1,
    navigation: {
        nextEl: ".empresa-swiper .swiper-button-next",
        prevEl: ".empresa-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".empresa-swiper .swiper-pagination",
        type: "bullets",
        //dynamicBullets: true,
        clickable: true,
    },
});
new Swiper(".imoveis-swiper", {
    slidesPerView: 1,
    spaceBetween: 15,
    navigation: {
        nextEl: ".imoveis-swiper .swiper-button-next",
        prevEl: ".imoveis-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".imoveis-swiper .swiper-pagination",
        type: "bullets",
        //dynamicBullets: true,
        clickable: true,
    },
    breakpoints: {
        992: {
            slidesPerView: 3,
        },
        767: {
            slidesPerView: 2,
        },
        576: {
            slidesPerView: 1,
        },
    },
});
new Swiper(".comparar-swiper", {
    slidesPerView: 2,
    spaceBetween: 15,
    navigation: {
        nextEl: ".comparar-swiper .swiper-button-next",
        prevEl: ".comparar-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".comparar-swiper .swiper-pagination",
        type: "bullets",
        //dynamicBullets: true,
        clickable: true,
    },
    breakpoints: {
        1200: {
            slidesPerView: 4,
        },
        992: {
            slidesPerView: 3,
        },
        767: {
            slidesPerView: 2,
        },
        576: {
            slidesPerView: 2,
        },
    },
});
new Swiper(".equipe-swiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    navigation: {
        nextEl: ".equipe-swiper .swiper-button-next",
        prevEl: ".equipe-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".equipe-swiper .swiper-pagination",
        type: "bullets",
        //dynamicBullets: true,
        clickable: true,
    },
    breakpoints: {
        1200: {
            slidesPerView: 4,
        },
        767: {
            slidesPerView: 3,
        },
        576: {
            slidesPerView: 2,
        },
        0: {
            slidesPerView: 1,
        },
    },
});
new Swiper(".procura-swiper", {
    slidesPerView: 1,
    spaceBetween: 80,
    navigation: {
        nextEl: ".procura-swiper .swiper-button-next",
        prevEl: ".procura-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".procura-swiper .swiper-pagination",
        type: "bullets",
        //dynamicBullets: true,
        clickable: true,
    },
    breakpoints: {
        1600: {
            slidesPerView: 7,
        },
        1300: {
            slidesPerView: 6,
        },
        992: {
            slidesPerView: 5,
        },
        767: {
            slidesPerView: 4,
        },
        576: {
            slidesPerView: 3,
        },
        0: {
            slidesPerView: 2,
        },
    },
});
new Swiper(".mobiliados-swiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    navigation: {
        nextEl: ".mobiliados-swiper .swiper-button-next",
        prevEl: ".mobiliados-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".mobiliados-swiper .swiper-pagination",
        type: "bullets",
        //dynamicBullets: true,
        clickable: true,
    },
    breakpoints: {
        1200: {
            slidesPerView: 2,
        },
        992: {
            slidesPerView: 1,
        },
        767: {
            slidesPerView: 2,
        },
        0: {
            slidesPerView: 1,
        },
    },
});
new Swiper(".blog-swiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    navigation: {
        nextEl: ".blog-swiper .swiper-button-next",
        prevEl: ".blog-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".blog-swiper .swiper-pagination",
        type: "bullets",
        //dynamicBullets: true,
        clickable: true,
    },
    breakpoints: {
        992: {
            slidesPerView: 3,
        },
        576: {
            slidesPerView: 2,
        },
        0: {
            slidesPerView: 1,
        },
    },
});
new Swiper(".curiosidades-swiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    navigation: {
        nextEl: ".curiosidades-swiper .swiper-button-next",
        prevEl: ".curiosidades-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".curiosidades-swiper .swiper-pagination",
        type: "bullets",
        //dynamicBullets: true,
        clickable: true,
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
    },
});
