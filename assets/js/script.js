const searchButton = document.querySelector('#search-button');
const closeSearchButton = document.querySelector('#close-search');
const headerSearch = document.querySelector('.header__search');
const headerButtonCart = document.querySelector('.header__button-cart');
const headerCart = document.querySelector('.header__cart');
const cartButton = document.querySelector('#cart-button');
const header = document.querySelector('.header');
const footer = document.querySelector('.footer');
const mainSlider = document.querySelector('#mainscreen-slider');
const catalogSlider = document.querySelector('#catalog-slider');
const saleSlider = document.querySelector('.sale-home-slider');
const newsSlider = document.querySelector('#news-slider');
const cartNotification = document.querySelector('.header__notification');    



burger('.menu__icon', '.header');

document.addEventListener('click', (event) => {
    searchOpener(event);
    cartOpener(event);
    popupOpener(event);
    showCartNotification(event);
    pageTabs(event);
    deleteNotifyMessages();
});

document.addEventListener('keydown', function (event) {
    if (event.code === 'Escape') {
        headerSearch.classList.remove('_active');
        headerCart.classList.remove('_active');
        const popupActive = document.querySelector('.popup._open');
        if (popupActive){
            popupClose(popupActive);
        }
    }
});

window.addEventListener('resize', function(){
    initCatalogSlider();
    initNewsSlider();
});


function searchOpener(event) {
    if(searchButton && headerSearch) {
        if (event.target == searchButton ||  event.target == closeSearchButton){
            headerSearch.classList.toggle('_active');
        }
        if (!event.target.closest('.header__search') && event.target != searchButton){
            headerSearch.classList.remove('_active');
        }
    }
}

function cartOpener(event) {
    if(headerButtonCart && headerCart) {
        if (event.target == cartButton){
            headerCart.classList.toggle('_active');
        }
        if(!event.target.closest('.header__cart') && event.target != cartButton){
            headerCart.classList.remove('_active');
        }
    }
}

function showCartNotification(event) {
    const button = event.target;
    if(button.classList.contains('single_add_to_cart_button') || button.classList.contains('ajax_add_to_cart')) {
        cartNotification.classList.add('_active');
        setTimeout(
            () => cartNotification.classList.remove('_active'),
            3000
        );
    }
}

function activeHeader() {
    if(window.pageYOffset > 0) {
        header.classList.add('_active');
    } else {
        header.classList.remove('_active');
    }
};
activeHeader();
document.addEventListener('scroll', activeHeader);


if(mainSlider){
    const swiper = new Swiper(mainSlider, {
        // Default parameters
        slidesPerView: 1,
        pagination: {
            el: '.mainscreen__pagination',
            type: 'bullets',
            clickable: true,
        },
    });
}

if(saleSlider){
    const swiper = new Swiper(saleSlider, {
        // Default parameters
        slidesPerView: 1.1,
        spaceBetween: 20,
        navigation: {
            nextEl: '.sale-home__arrow-next',
            prevEl: '.sale-home__arrow-prev',
        },
        breakpoints: {
        400: {
            slidesPerView: 1.5,
        },
        992: {
            slidesPerView: 3,
        },
        }
    });
}

function initCatalogSlider() {
    if(catalogSlider) {
        var width = window.innerWidth
        if ( (width < 992) && (!(catalogSlider.classList.contains('swiper-container-initialized'))) ){
            mySwiper = new Swiper(catalogSlider, {
                slidesPerView: 1.4,
                watchOverflow: true,
                centeredSlides: true,
                pagination: {
                    el: '.catalog__pagination',
                    type: 'bullets',
                    clickable: true,
                },
                breakpoints: {
                    // when window width is >= 480px
                    480: {
                        slidesPerView: 1.8,
                    },
                }
            });
        } else if ( (width > 991) && (catalogSlider.classList.contains('swiper-container-initialized')) ) {
            mySwiper.destroy();
        }
    }
}
initCatalogSlider();

function initNewsSlider() {
    if(newsSlider){
        var width = window.innerWidth
        if ( (width < 992) && (!(newsSlider.classList.contains('swiper-container-initialized'))) ){
            myNewsSwiper = new Swiper(newsSlider, {
                slidesPerView: 1,
                loop: true,
                spaceBetween: 30,
            });
        } else if ( (width > 991) && (newsSlider.classList.contains('swiper-container-initialized')) ) {
            myNewsSwiper.destroy();
        }
    }
}
initNewsSlider();

jQuery( function( $ ) {
    if ( ! String.prototype.getDecimals ) {
        String.prototype.getDecimals = function() {
            var num = this,
                match = ('' + num).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
            if ( ! match ) {
                return 0;
            }
            return Math.max( 0, ( match[1] ? match[1].length : 0 ) - ( match[2] ? +match[2] : 0 ) );
        }
    }
    // Quantity "plus" and "minus" buttons
    $( document.body ).on( 'click', '.plus, .minus', function() {
        var $qty        = $( this ).closest( '.quantity' ).find( '.qty'),
            currentVal  = parseFloat( $qty.val() ),
            max         = parseFloat( $qty.attr( 'max' ) ),
            min         = parseFloat( $qty.attr( 'min' ) ),
            step        = $qty.attr( 'step' );

        // Format values
        if ( ! currentVal || currentVal === '' || currentVal === 'NaN' ) currentVal = 0;
        if ( max === '' || max === 'NaN' ) max = '';
        if ( min === '' || min === 'NaN' ) min = 0;
        if ( step === 'any' || step === '' || step === undefined || parseFloat( step ) === 'NaN' ) step = 1;

        // Change the value
        if ( $( this ).is( '.plus' ) ) {
            if ( max && ( currentVal >= max ) ) {
                $qty.val( max );
            } else {
                $qty.val( ( currentVal + parseFloat( step )).toFixed( step.getDecimals() ) );
            }
        } else {
            if ( min && ( currentVal <= min ) ) {
                $qty.val( min );
            } else if ( currentVal > 0 ) {
                $qty.val( ( currentVal - parseFloat( step )).toFixed( step.getDecimals() ) );
            }
        }

        // Trigger change event
        $qty.trigger( 'change' );
    });
});

function deleteNotifyMessages() {
    let notifyMessages = document.querySelectorAll('.notify-message');    
    if(notifyMessages) {
        notifyMessages.forEach(element => {
            element.remove();
        });
    }
}

function ibg(){
    let ibg=document.querySelectorAll("._bg");
    for (var i = 0; i < ibg.length; i++) {
        if(ibg[i].querySelector('img')){
            ibg[i].style.backgroundImage = 'url('+ibg[i].querySelector('img').getAttribute('src')+')';
        }
    }   
}

ibg();