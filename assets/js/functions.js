//проверка на мобилки if(isMobile.any());
var isMobile = {Android: function() {return navigator.userAgent.match(/Android/i);},BlackBerry: function() {return navigator.userAgent.match(/BlackBerry/i);},iOS: function() {return navigator.userAgent.match(/iPhone|iPad|iPod/i);},Opera: function() {return navigator.userAgent.match(/Opera Mini/i);},Windows: function() {return navigator.userAgent.match(/IEMobile/i);},any: function() {return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());}};

function burger(iconClass, menuClass) {
    const iconMenu = document.querySelector(`${iconClass}`);
    const menuBody = document.querySelector(`${menuClass}`);
    if (iconMenu){
        iconMenu.addEventListener('click', function(e) {
            iconMenu.classList.toggle('_active');
            menuBody.classList.toggle('_open');
            document.body.classList.toggle('_lock');
        });
    }
}


function smoothScroll() {
    //Smoth scroll
    //находим все ссылки с атт data-goto, помещаем их в список gotoLinks
    const gotoLinks = document.querySelectorAll('a[data-goto]');
    //проверяем на наличие
    if (gotoLinks.length > 0) {
        //вешаем на каждый элемент списка слушатель по клику, при клике запускаю функцию
        gotoLinks.forEach(gotoLink => {
            gotoLink.addEventListener('click', ongotoLinkClick);
        });

        //функция скролла
        function ongotoLinkClick(e) {
            //чекаем объект по которому кликнули на наличие атт data-goto и записываем его в gotoLink
            const gotoLink = checkTarget(e.target);
            
            //проверяем не пустой ли атт и есть ли элементы, которые подходят по описанию из атт
            if(gotoLink.dataset.goto && document.querySelector(gotoLink.dataset.goto)) {
                //записываем в переменную блок, до которого надо проскролить
                const gotoBlock = document.querySelector(gotoLink.dataset.goto);
                //высчитываем верхней точки блока - высота шапки
                const gotoBlockValue = gotoBlock.getBoundingClientRect().top + pageYOffset - document.querySelector('header').offsetHeight;;

                //убираем активные классы, если при клике открыто меню
                if (iconMenu.classList.contains('_active')){
                    iconMenu.classList.remove('_active');
                    menuBody.classList.remove('_active');
                    document.body.classList.remove('_lock');
                }

                //запускаем скролл до блока
                window.scrollTo({
                    top: gotoBlockValue,
                    behavior: "smooth"
                });
                //убираем обычное поведение ссылки
                e.preventDefault();
            }
        }

        //принимает на вход объект по которому кликнули
        function checkTarget(target) {
            //проверяет есть ли у объекта атт data-goto
            if(target.dataset.goto){
                //возвращает объект, если есть атт
                return target;
            }else {
                //возвращает ближайщую ссылку-родителя, если нет атт
                return target.closest('a');
            }
        }
    }
}



//header placeholder
function headerHeightPlaceholder() {
    //находим высоту хэдера
    let headerHeight = document.querySelector('header').offsetHeight + 'px';
    //сам блок мейнскрина
    let pt = document.querySelector('.mainscreen');
    if(!pt){
        pt = document.querySelector('._header-placeholder');
    }
    //проверка на наличие
    if (headerHeight && pt) {
        //если надо задать паддинг
        pt.setAttribute("style", `padding-top:${headerHeight};`);
        headerHeight = '0px ' + headerHeight;
    }
};

headerHeightPlaceholder();

function inputsPlaceholder() {
    //Собираем все инпуты в массив
    const inputs = document.querySelectorAll('input');
    //если есть инпуты
    if(inputs) {
        //проходим по всем инпутам
        inputs.forEach(input => {
            //берем плейсхолдер из аттрибута data-placeholder и подставляем в аттрибут placeholder
            input.setAttribute('placeholder', input.dataset.placeholder);
            //при фокусе устанавливаем пустой плейсхолдер
            input.addEventListener('focus', function() {
                input.setAttribute('placeholder', '')
            })
            //при блюре устанавливаем плейсхолдер обратно
            input.addEventListener('blur', function() {
                input.setAttribute('placeholder', input.dataset.placeholder)
            })
        });
    }
}

